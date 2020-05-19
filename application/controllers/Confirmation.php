<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Confirmation extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }







    function index() {
        $confirmation = $this->input->get('q');
        if (!$confirmation) {
            print_r('Invalid Access');
            return;
        }
        $this->db->trans_start();
        $this->load->model('auth_model');
        $data = $this->auth_model->is_valid_post_data('temp_access_token', $confirmation, 'user');
        if (empty($data) || $data['is_active'] == ACCOUNT_ACTIVATED) {
            print_r('Invalid Access');
            return;
        }
        $this->load->model('user_model');
        $this->user_model->update_user($data['user_id'], array('is_active' => ACCOUNT_ACTIVATED, 'temp_access_token' => ''));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            print_r('Some unexpected database error encountered due to which your transaction could not be completed');
            return;
        }
        $this->_messages_box('Account Activation.', 'Your Account has been Activated Successfully.');
    }

    function reset_password() {
        $confirmation = $this->input->get('r');
        if (!$confirmation) {
            print_r('Invalid Access');
            return;
        }
        $this->db->trans_start();
        $this->load->model('auth_model');
        $data = $this->auth_model->is_valid_post_data('temp_access_token', $confirmation, 'user');
        if (empty($data) || $data['is_active'] == ACCOUNT_DEACTIVATED) {
            print_r('Invalid Access');
            return;
        }
        if ($data['is_lock'] == LOCK) {
            print_r(LOCK_USER_MESSAGE);
            return;
        }
        $this->load->model('user_model');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            print_r('Some unexpected database error encountered due to which your transaction could not be completed');
            return;
        }
        $this->load->view('reset_password', array('temp_access_token' => $confirmation));
    }

    function message() {
        $title = $this->input->post('title');
        $message = $this->input->post('message');
        if (!$title || !$message) {
            print_r('Invalid Access');
            return;
        }
        $this->_messages_box($title, $message);
    }

    function _messages_box($title, $message) {
        $form_data = array();
        $form_data['title'] = $title;
        $form_data['message'] = $message;
        $this->load->view('message_alert', $form_data);
    }

}

/*
 * EOF: ./application/controllers/Confirmation.php
 */
