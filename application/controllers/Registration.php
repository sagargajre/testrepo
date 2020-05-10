<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('auth_model');
    }

    function index() {
        $this->load->view('registration');
    }

    function check_username_is_exists() {
        if (!is_post()) {
            echo json_encode(array('success' => FALSE, 'message' => 'Invalid Access'));
            return false;
        }
        $username = get_from_post('username');
        if (!$username) {
            echo json_encode(array('success' => FALSE, 'message' => 'Enter User Name.'));
            return;
        }
        $this->db->trans_start();
        $exist_user = $this->auth_model->is_valid_post_data('username', $username, 'user');
        if (!empty($exist_user)) {
            echo json_encode(array('success' => FALSE, 'message' => 'User Name Already Exists.'));
            return;
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            echo json_encode(array('success' => FALSE, 'message' => 'Some unexpected database error encountered due to which your transaction could not be completed'));
            return;
        }
        echo json_encode(array('success' => TRUE, 'message' => 'User Name is available.'));
    }

    function check_email_id_is_exists() {
        if (!is_post()) {
            echo json_encode(array('success' => FALSE, 'message' => 'Invalid Access'));
            return false;
        }
        $email_id = get_from_post('email_id');
        if (!$email_id) {
            echo json_encode(array('success' => FALSE, 'message' => 'Enter Email Id.'));
            return;
        }
        $this->db->trans_start();
        $exist_user = $this->auth_model->is_valid_post_data('email_id', $email_id, 'user');
        if (!empty($exist_user)) {
            echo json_encode(array('success' => FALSE, 'message' => 'Email Id Already Exists.'));
            return;
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            echo json_encode(array('success' => FALSE, 'message' => 'Some unexpected database error encountered due to which your transaction could not be completed'));
            return;
        }
        echo json_encode(array('success' => TRUE, 'message' => 'Email Id is Available.'));
    }

    function create() {
        if (!is_post()) {
            echo json_encode(array('success' => FALSE, 'message' => 'Invalid Access'));
            return false;
        }
        $user_data = $this->_get_post_data();
        $validation_message = $this->_check_validation($user_data);
        if ($validation_message != '') {
            echo json_encode(array('success' => FALSE, 'message' => $validation_message));
            return false;
        }
        $user_data['password'] = md5($user_data['password']);
        $user_data['created_by'] = 0;
        $user_data['created_time'] = date('Y-m-d H:i:s');
        unset($user_data['confirm_password']);
        unset($user_data['captcha_code']);
        unset($user_data['captcha_code_varification']);
        $this->db->trans_start();
        $check_validation_for_email_id = $this->auth_model->is_valid_post_data('email_id', $user_data['email_id'], 'user');
        if (!empty($check_validation_for_email_id)) {
            echo json_encode(array('success' => FALSE, 'message' => 'Email Id Already Exists.'));
            return;
        }
        $check_validation_for_username = $this->auth_model->is_valid_post_data('username', $user_data['username'], 'user');
        if (!empty($check_validation_for_username)) {
            echo json_encode(array('success' => FALSE, 'message' => 'User Name Already Exists.'));
            return;
        }
        $user_data['temp_access_token'] = generate_token();
        $user_data['user_id'] = $this->user_model->insert_user($user_data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            echo json_encode(array('success' => FALSE, 'message' => 'Some unexpected database error encountered due to which your transaction could not be completed'));
            return;
        }
        $registration_message = 'Confirm your Account. ' . base_url() . 'confirmation?q=' . $user_data['temp_access_token'];
        $message = 'Registration completed successfully. Please Check your Email or Message and Verify your account.';
        /*$this->load->helper('sms_helper');
        send_SMS($this, $user_data, $registration_message, SMS_EMAIL_REGISTRATION);
        $this->load->library('email_lib');
        $this->email_lib->send_email($user_data, 'Account Confirmation', $registration_message, SMS_EMAIL_REGISTRATION);
*/
        echo json_encode(array('success' => TRUE, 'message' => $message));
    }

    function update_user() {
        $user_id = get_from_post('user_id');
        if (!is_post() || $user_id == NULL || !$user_id) {
            echo json_encode(array('success' => FALSE, 'message' => 'Invalid Access'));
            return false;
        }
        $user_data = $this->_get_post_data(TRUE);
        $validation_message = $this->_check_validation($user_data, TRUE);
        if ($validation_message != '') {
            echo json_encode(array('success' => FALSE, 'message' => $validation_message));
            return false;
        }
        $this->db->trans_start();
        $post_id_validation_message = $this->auth_lib->check_post_id_validation('user_id', $user_id, 'user');
        if ($post_id_validation_message != '') {
            echo json_encode(array('success' => FALSE, 'message' => $post_id_validation_message));
            return;
        }
        $session_user_id = get_from_session('temp_id_for_bocw');
        $user_data['updated_by'] = $session_user_id;
        $user_data['updated_time'] = date('Y-m-d H:i:s');
        $this->user_model->update_user($user_id, $user_data);
        $this->_update_profile_picture($session_user_id, $user_id);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            echo json_encode(array('success' => FALSE, 'message' => 'Some unexpected database error encountered due to which your transaction could not be completed'));
            return;
        }
        $new_user_data = $this->user_model->get_by_id($user_id);
        if ($session_user_id == $user_id) {
            $session_data = array();
            $session_data['name'] = ucwords($user_data['first_name']) . ' ' . ucwords($user_data['last_name']);
            $profile_picture = !$new_user_data['profile_picture'] ? DEFAULT_PROFILE_PICTURE : 'documents/profile_picture/' . $new_user_data['profile_picture'];
            $session_data['temp_profile_picture_in_session'] = $profile_picture;
            $this->session->set_userdata($session_data);
            echo json_encode(array('success' => TRUE, 'message' => 'Profile updated successfully.', 'name' => $session_data['name'], 'user_data' => $new_user_data));
            return;
        }
        echo json_encode(array('success' => TRUE, 'message' => 'Profile updated successfully.', 'user_data' => $new_user_data));
    }

    function _get_post_data($is_update = FALSE) {
        $user_data = array();
        $user_data['first_name'] = get_from_post('first_name');
        $user_data['middle_name'] = get_from_post('middle_name');
        $user_data['last_name'] = get_from_post('last_name');
        $user_data['mobile_number'] = get_from_post('mobile_number');
        $user_data['registration_category'] = get_from_post('registration_category');
        
        // $user_data['pan'] = strtoupper(get_from_post('pan'));
        $user_data['address'] = get_from_post('address');
        if (!$is_update) {
            $user_data['email_id'] = get_from_post('email_id');
            $user_data['username'] = get_from_post('username');
            $user_data['password'] = get_from_post('password');
            $user_data['confirm_password'] = get_from_post('confirm_password');
            $user_data['captcha_code'] = get_from_post('captcha_code');
            $user_data['captcha_code_varification'] = get_from_post('captcha_code_varification');
        }
        return $user_data;
    }

    function _check_validation($user_data, $is_update = FALSE) {
        if (!$user_data['first_name']) {
            return 'Enter First Name.';
        }
        if (!$user_data['last_name']) {
            return 'Enter Last Name.';
        }
        if (!$user_data['mobile_number'] || !preg_match('/^[0-9]{10}+$/', $user_data['mobile_number'])) {
            return 'Invalid Mobile Number.';
        }
        if (!$user_data['registration_category']) {
            return 'Select Any Type of Work';
        }
        if (!$is_update) {
            if (!$user_data['email_id'] || !filter_var($user_data['email_id'], FILTER_VALIDATE_EMAIL)) {
                return 'Invalid Email.';
            }
        }
        // if ($user_data['pan'] && !preg_match(PAN_REGEX, $user_data['pan'])) {
        //     return 'Invalid PAN.';
        // }
        if (!$user_data['address']) {
            return 'Enter Address.';
        }
        
        if (!$is_update) {
            if (!$user_data['username']) {
                return 'Enter User Name.';
            }
            if (!$user_data['password']) {
                return 'Enter Password.';
            }
            if (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[@!#$%_+\-=<>]).{8,16}$/', $user_data['password'])) {
                return 'Password must be between 8 and 16 characters, '
                        . 'contain at least one digit and two alphabetic character, '
                        . 'at least one upper case and lower case character, '
                        . 'contain at least one special character of (@!#$%-_+<>=).';
            }
            if (!$user_data['confirm_password']) {
                return 'Enter Confirm Password.';
            }
            if ($user_data['password'] != $user_data['confirm_password']) {
                return 'Password and Confirm Password Not Matched.';
            }
            if (!$user_data['captcha_code_varification']) {
                return 'Enter Captcha Code.';
            }
            if ($user_data['captcha_code'] != $user_data['captcha_code_varification']) {
                return 'Captcha Not Matched.';
            }
        }
        if ($is_update) {
            $temp_profile_picture = get_from_post('temp_profile_picture');
            if (!$temp_profile_picture) {
                $allowed = array('jpg', 'png', 'jpeg');
                $filename = $_FILES['profile_picture']['name'];
                $invalid_image_error_message = 'Please upload Seal and Stamp with Signature image having extensions: <b> ' . join(', ', $allowed) . ' </b> only.';
                if (!$filename) {
                    return $invalid_image_error_message;
                }
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if (!in_array($ext, $allowed)) {
                    return $invalid_image_error_message;
                }
            }
        }
        return '';
    }

    function _update_profile_picture($login_user_id, $user_id) {
        $user_data = array();
        $temp_profile_picture = get_from_post('temp_profile_picture');
        if (!$temp_profile_picture) {
            $this->load->library('upload');
            $documents_path = 'documents';
            if (!is_dir($documents_path)) {
                mkdir($documents_path);
                chmod($documents_path, 0777);
            }
            $seal_and_stamp_with_signature_path = $documents_path . DIRECTORY_SEPARATOR . 'profile_picture';
            if (!is_dir($seal_and_stamp_with_signature_path)) {
                mkdir($seal_and_stamp_with_signature_path);
                chmod($seal_and_stamp_with_signature_path, 0777);
            }
            $filename = $_FILES['profile_picture']['name'];
            //Change file name
            $new_name = $user_id . '_' . preg_replace('/\s/', '_', $filename);
            $final_path = $seal_and_stamp_with_signature_path . DIRECTORY_SEPARATOR . $new_name;
            $user_data['profile_picture'] = $new_name;
        }
        $user_data['updated_by'] = $login_user_id;
        $user_data['updated_time'] = date('Y-m-d H:i:s');
        $this->user_model->update_user($user_id, $user_data);

        if (!$temp_profile_picture) {
            //Upload image
            move_uploaded_file($_FILES['profile_picture']['tmp_name'], $final_path);
        }
    }

    function delete_profile_picture() {
        $session_user_id = get_from_session('temp_id_for_syp');
        $user_id = get_from_post('temp_id');
        if (!is_post() || $session_user_id == NULL || !$session_user_id || $user_id == NULL || !$user_id) {
            echo json_encode(array('success' => FALSE, 'message' => 'Invalid Access'));
            return false;
        }
        $this->db->trans_start();
        if (is_admin() && $user_id != '') {
            $session_user_id = $user_id;
        }
        $existing_user_data = $this->user_model->get_by_id($user_id);
        if (empty($existing_user_data)) {
            echo json_encode(array('success' => FALSE, 'message' => 'Invalid Access'));
            return;
        }

        $this->_move_image_from_garbage($existing_user_data);

        $eebw_data = array();
        $eebw_data['profile_picture'] = '';
        $eebw_data['updated_by'] = $session_user_id;
        $eebw_data['updated_time'] = date('Y-m-d H:i:s');
        $this->user_model->update_user($user_id, $eebw_data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            echo json_encode(array('success' => FALSE, 'message' => 'Some unexpected database error encountered due to which your transaction could not be completed'));
            return;
        }
        $session_data = array();
        $session_data['temp_profile_picture_in_session'] = DEFAULT_PROFILE_PICTURE;
        $this->session->set_userdata($session_data);
        $existing_user_data['profile_picture'] = '';
        echo json_encode(array('success' => TRUE, 'message' => 'Successfully Removed Profile Picture.', 'user_data' => $existing_user_data));
    }

    function _move_image_from_garbage($existing_user_data, $is_detele = false) {
        if (!$existing_user_data['profile_picture'] && $is_detele) {
            return;
        }
        $exsting_image_path = 'documents' . DIRECTORY_SEPARATOR . 'profile_picture' . DIRECTORY_SEPARATOR . $existing_user_data['profile_picture'];
        $garbage_path = 'garbage';
        if (!is_dir($garbage_path)) {
            mkdir($garbage_path);
            chmod($garbage_path, 0777);
        }
        $seal_and_stamp_with_signature_path = $garbage_path . DIRECTORY_SEPARATOR . 'profile_picture';
        if (!is_dir($seal_and_stamp_with_signature_path)) {
            mkdir($seal_and_stamp_with_signature_path);
            chmod($seal_and_stamp_with_signature_path, 0777);
        }
        $new_image_path = $seal_and_stamp_with_signature_path . DIRECTORY_SEPARATOR . $existing_user_data['profile_picture'];
        rename($exsting_image_path, $new_image_path);
    }

}

/*
 * EOF: ./application/controllers/Registration.php
 */