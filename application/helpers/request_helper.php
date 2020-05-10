<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function is_post() {
    return TRUE;
    if (!(filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST')) {
        return FALSE;
    }
    return TRUE;
}

function check_authenticated() {
    if (!is_authenticated()) {
        header("Location:" . base_url() . "Login");
    }
}

function is_authenticated() {
    $CI = & get_instance();
    $user_id = $CI->session->userdata('temp_id_for_sparsh');
    if (is_null($user_id) || $user_id == '') {
        return false;
    }
    return true;
}

/**
 * Fetch the value from SESSION
 * @param type $key
 * @return type
 */
function get_from_session($key) {
    $CI = & get_instance();
    $value = $CI->session->userdata($key);
    return $value;
}

/**
 * Fetch the value from POST. Will be trim() by default.
 * @param type $key - key to fetch from POST
 * @param type $trim - Optional. Default is TRUE
 * @return type
 */
function get_from_post($key, $trim = TRUE) {
    $CI = & get_instance();
    return $trim ? trim($CI->input->post($key)) : $CI->input->post($key);
}

function is_super_admin() {
    $CI = & get_instance();
    $user_type = $CI->session->userdata('temp_type_for_sparsh');
    return $user_type == SUPER_ADMIN;
}

function is_admin() {
    $CI = & get_instance();
    $user_type = $CI->session->userdata('temp_type_for_sparsh');
    return $user_type == ADMIN;
}

function is_builder() {
    $CI = & get_instance();
    $user_type = $CI->session->userdata('temp_type_for_sparsh');
    return $user_type == BUILDER;
}

function is_contractor() {
    $CI = & get_instance();
    $user_type = $CI->session->userdata('temp_type_for_sparsh');
    return $user_type == CONTRACTOR ;
}

function is_labour_dept() {
    $CI = & get_instance();
    $user_type = $CI->session->userdata('temp_type_for_sparsh');
    return $user_type == LABOUR_DEPT;
}

function is_deputy_collector() {
    $CI = & get_instance();
    $user_type = $CI->session->userdata('temp_type_for_sparsh');
    return $user_type == DEPUTY_COLLECTOR;
}

/**
 * EOF: ./application/helpers/request_helper.php
 */