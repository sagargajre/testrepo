<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_lib {

    var $CI;

    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->model('auth_model');
    }

    function check_post_id_validation($key_post_id, $post_id, $table_name) {
        if ($post_id == '' || $post_id == 0) {
            return "Please select any $table_name";
        }
        $is_valid = $this->check_post_data_of_entity($key_post_id, $post_id, $table_name);
        if (!$is_valid) {
            return "This $table_name does not exist.";
        }
        return '';
    }

    function check_post_data_of_entity($key_post_id, $post_id, $table_name) {
        $post_data = $this->CI->auth_model->is_valid_post_data($key_post_id, $post_id, $table_name);
        if (!empty($post_data)) {
            return TRUE;
        }
        return FALSE;
    }

    function get_post_data_for_com_user($is_update = FALSE, $is_com_user = FALSE) {
        $com_user_data = array();
        $com_user_data['establishment_name'] = get_from_post('establishment_name');
        $com_user_data['bussiness_type'] = get_from_post('bussiness_type');
        $com_user_data['establishment_mobile_no'] = get_from_post('establishment_mobile_no');
        $com_user_data['establishment_location'] = get_from_post('establishment_location');
        $com_user_data['establishment_postel_address'] = get_from_post('establishment_postel_address');
        $com_user_data['principle_employer_full_name'] = get_from_post('principle_employer_full_name');
        $com_user_data['principle_employer_address'] = get_from_post('principle_employer_address');
        $com_user_data['manager_or_person_full_name'] = get_from_post('manager_or_person_full_name');
        $com_user_data['manager_or_person_address'] = get_from_post('manager_or_person_address');


        if (!$is_update) {
            $com_user_data['establishment_email_id'] = get_from_post('establishment_email_id');
            $com_user_data['username'] = get_from_post('username');
            $com_user_data['password'] = get_from_post('password');
            $com_user_data['confirm_password'] = get_from_post('confirm_password');
            $com_user_data['captcha_code'] = get_from_post('captcha_code');
            $com_user_data['captcha_code_varification'] = get_from_post('captcha_code_varification');
            $com_user_data['treasury_recipt_enclosed'] = get_from_post('treasury_recipt_enclosed');
        }
        return $com_user_data;
    }

    function check_validation_for_com_user($com_user_data, $is_update = FALSE, $is_com_user = FALSE, $post_file_name = '') {

        if (!$com_user_data['establishment_name']) {
            return 'Enter Name of the Establishment .';
        }
        if (!$com_user_data['bussiness_type']) {
            return 'Enter Type of Business.';
        }
        if (!$is_update) {
            if (!$com_user_data['establishment_email_id'] || !filter_var($com_user_data['establishment_email_id'], FILTER_VALIDATE_EMAIL)) {
                return 'Invalid Email.';
            }
        }
        if (!$com_user_data['establishment_mobile_no'] || !preg_match('/^[0-9]{10}+$/', $com_user_data['establishment_mobile_no'])) {
            return 'Invalid Mobile Number.';
        }
        if (!$com_user_data['establishment_location']) {
            return 'Enter Location of the Establishment';
        }
        if (!$com_user_data['establishment_postel_address']) {
            return 'Enter Postel Address of the Establishment.';
        }

        if (!$com_user_data['principle_employer_full_name']) {
            return 'Enter Full Name of the Principle Employer.';
        }
        if (!$com_user_data['principle_employer_address']) {
            return 'Enter Address of the Principle Employer.';
        }
        if (!$com_user_data['manager_or_person_full_name']) {
            return 'Enter Full Name of the Manager or Person.';
        }
        if (!$com_user_data['manager_or_person_address']) {
            return 'Enter Address of the Manager or Person.';
        }
        if (!$is_update) {
            if (!$com_user_data['username']) {
                return 'Enter User Name.';
            }
            if (!$com_user_data['password']) {
                return 'Enter Password.';
            }
            if (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!#$%_+\-=<>]).{8,16}$/', $com_user_data['password'])) {
                return 'Password must be between 8 and 16 characters, '
                        . 'contain at least one digit and two alphabetic character, '
                        . 'at least one upper case and lower case character, '
                        . 'contain at least one special character of (!#$%-_+<>=).';
            }
            if (!$com_user_data['confirm_password']) {
                return 'Enter Confirm Password.';
            }
            if ($com_user_data['password'] != $com_user_data['confirm_password']) {
                return 'Password and Confirm Password Not Matched.';
            }
            if (!$com_user_data['captcha_code_varification']) {
                return 'Enter Captcha Code.';
            }
            if ($com_user_data['captcha_code'] != $com_user_data['captcha_code_varification']) {
                return "Captcha Not Matched.";
            }
            if (!$com_user_data['treasury_recipt_enclosed'] == IS_CHECKED) {
                return 'Select Treasury Recipt Enclosed.';
            }
        }
        /* if ($is_update || $is_user) {
          $temp_profile_picture = get_from_post('temp_profile_picture');
          if (!$temp_profile_picture) {
          $allowed = array('jpg', 'png', 'jpeg');

          $filename = $is_user ? $post_file_name : $_FILES['profile_picture']['name'];

          $invalid_image_error_message = 'Please upload Seal and Stamp with Signature image having extensions: <b> ' . join(', ', $allowed) . ' </b> only.';
          if (!$filename) {
          return $invalid_image_error_message;
          }
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          if (!in_array($ext, $allowed)) {
          return $invalid_image_error_message;
          }
          }
          } */
        return '';
    }

    function update_profile_picture($login_user_id, $user_id, $is_user = FALSE, $post_file_name = '') {
        $user_data = array();
        $temp_profile_picture = get_from_post('temp_profile_picture');
        if (!$temp_profile_picture) {
            $this->CI->load->library('upload');
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
            $filename = $is_user ? $post_file_name : $_FILES['profile_picture']['name'];

            //Change file name
            $new_name = $user_id . '_' . preg_replace('/\s/', '_', $filename);
            $final_path = $seal_and_stamp_with_signature_path . DIRECTORY_SEPARATOR . $new_name;
            $user_data['profile_picture'] = $new_name;
        }
        $user_data['updated_by'] = $login_user_id;
        $user_data['updated_time'] = date('Y-m-d H:i:s');
        $this->CI->user_model->update_user($user_id, $user_data);
        if (!$temp_profile_picture) {
            //Upload image
            move_uploaded_file($_FILES['profile_picture']['tmp_name'], $final_path);
        }
    }

    function insert_log($user_id, $record_id, $status, $table_name, $log_table_name, $table_field_name) {
        $log_table_data = $this->CI->auth_model->get_record_id($record_id, $table_name, $table_field_name);
        unset($log_table_data['updated_by']);
        unset($log_table_data['updated_time']);
        unset($log_table_data['is_delete']);
        $log_table_data['status'] = $status;
        $log_table_data['created_by'] = $user_id;
        $log_table_data['created_time'] = date('Y-m-d H:i:s');
        $this->CI->auth_model->insert_log_in_table($log_table_name, $log_table_data);
    }

    function get_post_data_for_con_user($is_update = FALSE, $is_con_user = FALSE) {
        $con_user_data = array();
        $con_user_data['contractor_proprietor_name'] = get_from_post('contractor_proprietor_name');
        $con_user_data['contractor_name'] = get_from_post('contractor_name');
        $con_user_data['contractor_mobile_no'] = get_from_post('contractor_mobile_no');
        $con_user_data['contractor_address'] = get_from_post('contractor_address');
        $con_user_data['contractor_permanent_address'] = get_from_post('contractor_permanent_address');
        $con_user_data['five_year_above'] = get_from_post('five_year_above');

        if ($con_user_data['five_year_above'] == YES) {
            $con_user_data['previous_principle_employer_full_name'] = get_from_post('previous_principle_employer_full_name');
            $con_user_data['previous_principle_employer_address'] = get_from_post('previous_principle_employer_address');
            $con_user_data['previous_establishment_name'] = get_from_post('previous_establishment_name');
            $con_user_data['previous_establishment_nature_of_work'] = get_from_post('previous_establishment_nature_of_work');
            $con_user_data['previous_establishment_address'] = get_from_post('previous_establishment_address');
        }

        if (!$is_update) {
            $con_user_data['contractor_email_id'] = get_from_post('contractor_email_id');
            $con_user_data['username'] = get_from_post('username');
            $con_user_data['password'] = get_from_post('password');
            $con_user_data['confirm_password'] = get_from_post('confirm_password');
            $con_user_data['captcha_code'] = get_from_post('captcha_code');
            $con_user_data['captcha_code_varification'] = get_from_post('captcha_code_varification');
        }
        return $con_user_data;
    }

    function check_validation_for_con_user($con_user_data, $is_update = FALSE, $is_con_user = FALSE, $post_file_name = '') {

        if (!$con_user_data['contractor_proprietor_name']) {
            return 'Enter Contractor Proprietor Name.';
        }
        if (!$con_user_data['contractor_name']) {
            return 'Enter Contractor Name.';
        }
        if (!$is_update) {
            if (!$con_user_data['contractor_email_id'] || !filter_var($con_user_data['contractor_email_id'], FILTER_VALIDATE_EMAIL)) {
                return 'Invalid Email.';
            }
        }
        if (!$con_user_data['contractor_mobile_no'] || !preg_match('/^[0-9]{10}+$/', $con_user_data['contractor_mobile_no'])) {
            return 'Invalid Mobile Number.';
        }
        if (!$con_user_data['contractor_address']) {
            return 'Enter Address of the Contractor';
        }
        if (!$con_user_data['contractor_permanent_address']) {
            return 'Enter Permanent Address of the Contractor.';
        }
        if ($con_user_data['five_year_above'] == YES) {
            if (!$con_user_data['previous_principle_employer_full_name']) {
                return 'Enter Full Name of the Principle Employer.';
            }
            if (!$con_user_data['previous_principle_employer_address']) {
                return 'Enter Address of the Principle Employer.';
            }
            if (!$con_user_data['previous_establishment_name']) {
                return 'Enter Establishment Name.';
            }
            if (!$con_user_data['previous_establishment_nature_of_work']) {
                return 'Enter Establishment Nature of Work.';
            }
            if (!$con_user_data['previous_establishment_address']) {
                return 'Enter Address of the Manager or Person.';
            }
        }
        if (!$is_update) {
            if (!$con_user_data['username']) {
                return 'Enter User Name.';
            }
            if (!$con_user_data['password']) {
                return 'Enter Password.';
            }
            if (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!#$%_+\-=<>]).{8,16}$/', $con_user_data['password'])) {
                return 'Password must be between 8 and 16 characters, '
                        . 'contain at least one digit and two alphabetic character, '
                        . 'at least one upper case and lower case character, '
                        . 'contain at least one special character of (!#$%-_+<>=).';
            }
            if (!$con_user_data['confirm_password']) {
                return 'Enter Confirm Password.';
            }
            if ($con_user_data['password'] != $con_user_data['confirm_password']) {
                return 'Password and Confirm Password Not Matched.';
            }
            if (!$con_user_data['captcha_code_varification']) {
                return 'Enter Captcha Code.';
            }
            if ($con_user_data['captcha_code'] != $con_user_data['captcha_code_varification']) {
                return "Captcha Not Matched.";
            }
        }

        return '';
    }

}
