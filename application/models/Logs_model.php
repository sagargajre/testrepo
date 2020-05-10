<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logs_model extends CI_Model {

    function log_login($user_id, $log_type) {
        $log = array();
        $log['log_type'] = $log_type;
        $log['user_id'] = $user_id;
        $log['ip_address'] = $_SERVER['REMOTE_ADDR'];
        $log['log_timestamp'] = time();
        $log['log_data'] = json_encode($this->_get_client_info());
        $log['created_time'] = date('Y-m-d H:i:s');
        $this->db->insert('log_login', $log);
    }

    function _get_client_info() {
        return array(
            'HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'],
            'REMOTE_ADDR' => $_SERVER['REMOTE_ADDR']
        );
    }

    function insert_sms_log($sms_log) {
        $this->db->insert('sms_log', $sms_log);
    }

    function insert_email_log($email_log) {
        $this->db->insert('email_log', $email_log);
    }

    function insert_smshub_log($sms_log) {
        $this->db->insert('smshub_log', $sms_log);
    }

}
