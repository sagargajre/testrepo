<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    function get_all_user($user_type) {
        $this->db->select('u.user_id,u.username,u.first_name,u.last_name,u.middle_name,u.email_id,u.mobile_number,u.type_of_work,'
                . 'u.pan,u.address,u.profile_picture,u.is_lock,u.is_active, CONCAT_WS(" ",u.first_name,u.last_name) AS full_name');
        $this->db->where('u.user_type', $user_type);
        $this->db->where('u.is_delete !=' . IS_DELETE);
        $this->db->from('user AS u');
        $this->db->group_by('u.user_id');
        $resc = $this->db->get();
        return $resc->result_array();
    }

    function get_user() {
        $this->db->select('u.user_id,u.username,u.first_name,u.last_name,u.middle_name,u.email_id,u.mobile_number,u.type_of_work,'
                . 'u.pan,u.address,u.user_type,u.profile_picture,u.is_lock,u.is_active,'
                . 'COUNT(e.user_id) AS total_eebw');
        $this->db->where('u.user_type =' . USER);
        $this->db->where('u.is_delete !=' . IS_DELETE);
        $this->db->from('user AS u');
        $this->db->join('eebw AS e', "u.user_id = e.user_id and e.is_delete != " . IS_DELETE, 'left');
        $this->db->group_by('u.user_id');
        $resc = $this->db->get();
        return $resc->result_array();
    }

    function get_user_for_excel() {
        $this->db->select('user_id, CONCAT_WS(" ",first_name,middle_name,last_name) AS name,username,mobile_number,email_id,type_of_work');
        $this->db->where('user_type !=' . ADMIN);
        $this->db->where('is_delete !=' . IS_DELETE);
        $this->db->from('user');
        $resc = $this->db->get();
        return $resc->result_array();
    }

    function insert_user($user_data) {
        $this->db->insert('user', $user_data);
        return $this->db->insert_id();
    }

    function update_user($user_id, $user_data) {
        $this->db->where('user_id', $user_id);
        $this->db->where('is_delete !=' . IS_DELETE);
        $this->db->update('user', $user_data);
    }

    function check_username_and_password($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('is_delete !=' . IS_DELETE);
        $this->db->from('user');
        $resc = $this->db->get();
        return $resc->row_array();
    }

    function get_by_id($user_id) {
        $this->db->select('user_id,username,first_name,last_name,middle_name,email_id,mobile_number,type_of_work,'
                . 'pan,address,user_type,profile_picture,is_lock,is_active,company_name,company_address');
        $this->db->where('user_id', $user_id);
        $this->db->where('is_delete !=' . IS_DELETE);
        $this->db->from('user');
        $resc = $this->db->get();
        return $resc->row_array();
    }

    function check_user_id_and_password($user_id, $password) {
        $this->db->where('user_id', $user_id);
        $this->db->where('password', $password);
        $this->db->where('is_delete !=' . IS_DELETE);
        $this->db->from('user');
        $resc = $this->db->get();
        return $resc->row_array();
    }
    function get_total_bocw($user_type) {
        $this->db->select('*');
        $this->db->where('user_type', $user_type);
        $this->db->where('is_delete !=' . IS_DELETE);
        $this->db->where('type_of_work =' . BOCW);
        $this->db->from('user');
        $this->db->group_by('user_id');
        $resc = $this->db->get();
        return $resc->result_array();
    }
    function get_total_industryfactory($user_type) {
        $this->db->select('*');
        $this->db->where('user_type', $user_type);
        $this->db->where('is_delete !=' . IS_DELETE);
        $this->db->where('type_of_work =' . INDUSTRYFACTORY);
        $this->db->from('user');
        $this->db->group_by('user_id');
        $resc = $this->db->get();
        return $resc->result_array();
    }

}

/*
 * EOF: ./application/models/User_model.php
 */