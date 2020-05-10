<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->config('logs_config');
    }

    function temp() {
        $this->load->view('email_format');
    }

    function index() {
        $this->_destroy_session();
        $this->load->view('home');
    }

    function check_login() {
        if (!is_post()) {
            echo json_encode(array('success' => FALSE, 'message' => 'Invalid Access'));
            return false;
        }
        $username = get_from_post('login_username');
        $password = get_from_post('login_password');

        if (!$username) {
            echo json_encode(array('success' => FALSE, 'message' => 'Enter User Name.'));
            return;
        }
        if (!$password) {
            echo json_encode(array('success' => FALSE, 'message' => 'Enter Password.'));
            return;
        }
        $this->db->trans_start();
        $user_data = $this->user_model->check_username_and_password($username, md5($password));
        if (empty($user_data)) {
            echo json_encode(array('success' => FALSE, 'message' => 'User Name or Password Invalid.'));
            return;
        }
        if ($user_data['is_active'] == ACCOUNT_DEACTIVATED) {
            echo json_encode(array('success' => FALSE, 'message' => 'Please Confirm Your Account. Check Your Email for Confirmation.'));
            return;
        }
        if ($user_data['is_lock'] == LOCK) {
            echo json_encode(array('success' => FALSE, 'message' => LOCK_USER_MESSAGE));
            return;
        }
//        if ($user_data['is_logged_in'] == LOGIN) {
//            echo json_encode(array('success' => FALSE, 'message' => 'User already logged in other browser.'));
//            return;
//        }
        $this->load->model('logs_model');
        $this->logs_model->log_login($user_data['user_id'], LOGIN);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            echo json_encode(array('success' => FALSE, 'message' => 'Some unexpected database error encountered due to which your transaction could not be completed'));
            return;
        }
        //TODO: Login Lout SMS and Email
        //$this->send_login_and_logout_SMS($user_data, LOGIN);
//        $this->user_model->update_user($user_data['user_id'], array('is_logged_in' => LOGIN));

        $session_data = array();
        $session_data['temp_id_for_sparsh'] = $user_data['user_id'];
        $session_data['name'] = ucwords($user_data['first_name']) . ' ' . ucwords($user_data['last_name']);
        //$session_data['temp_type_for_sparsh'] = $user_data['user_type'];
        $profile_picture = !$user_data['profile_picture'] ? DEFAULT_PROFILE_PICTURE : 'documents/profile_picture/' . $user_data['profile_picture'];
        $session_data['temp_profile_picture_in_session'] = $profile_picture;
   
        $this->session->set_userdata($session_data);
        echo json_encode(array('success' => TRUE));
    }

    function logout() {
        $this->_destroy_session();
//        $this->_destroy_session(TRUE);
        header("Location:" . base_url() . "login");
    }

//    function update_log_in_out_status() {
//        $this->_destroy_session(TRUE);
//    }

    function _destroy_session($is_logged_in = FALSE) {
        $temp_user_id = get_from_session('temp_id_for_sparsh');
        if ($temp_user_id != NULL) {
            $this->load->model('logs_model');
            $this->logs_model->log_login($temp_user_id, LOGOUT);
            //$user_data = $this->user_model->get_by_id($temp_user_id);
            //TODO: Login Lout SMS and Email
            //$this->send_login_and_logout_SMS($user_data, LOGOUT);
            if ($is_logged_in) {
//                $this->user_model->update_user($user_data['user_id'], array('is_logged_in' => LOGOUT));
            }
        }
        $this->session->sess_destroy();
    }

   /* function send_login_and_logout_SMS($user_data, $login_out_type) {
        $message_email_type = 0;
        if ($login_out_type == LOGIN) {
            $message = "You have successfully logged into your S.Y.P. Account at " . date('d-m-Y H:i:s') . " .";
            $message_email_type = SMS_EMAIL_LOGIN;
        } else if ($login_out_type == LOGOUT) {
            $message = "You have successfully logout your S.Y.P. Account at " . date('d-m-Y H:i:s') . " .";
            $message_email_type = SMS_EMAIL_LOGOUT;
        }
        $this->load->helper('sms_helper');
        send_SMS($this, $user_data, $message, $message_email_type);
        $this->load->library('email_lib');
        $log_type_array = $this->config->item('log_type');
        $this->email_lib->send_email($user_data, $log_type_array[$login_out_type], $message, $message_email_type);
    }
*/
}

/*
 * EOF: ./application/controllers/Login.php
 */
