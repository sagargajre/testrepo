<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function crypto_rand_secure($min, $max) {
    $range = $max - $min;
    if ($range < 1)
        return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}

function generate_token($length = 50, $is_special_character_allow = FALSE) {
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet .= "0123456789";
    if ($is_special_character_allow) {
        $codeAlphabet .= "!#$%-_+<>=";
    }
    $max = strlen($codeAlphabet); // edited

    for ($i = 0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max - 1)];
    }

    return $token;
}

/**
 * generate array index as key value as object
 * @param type $result_set
 * @param type $index_field
 * @return type
 */
function generate_array_for_id_object($result_set, $index_field) {
    $main_array = array();
    foreach ($result_set as $record) {
        $main_array[$record[$index_field]] = $record;
    }
    return $main_array;
}

function convert_secure_mobile_number($number) {
    return str_pad(substr($number, -4), strlen($number), '*', STR_PAD_LEFT);
}

function move_image($file_name, $existing_data, $source, $destination, $is_detele = false) {
    if (!$existing_data[$file_name] && $is_detele) {
        return;
    }
    $exsting_image_path = $source . DIRECTORY_SEPARATOR . $file_name . DIRECTORY_SEPARATOR . $existing_data[$file_name];
    $garbage_path = $destination;
    if (!is_dir($garbage_path)) {
        mkdir($garbage_path);
        chmod($garbage_path, 0777);
    }
    $file_store_path = $garbage_path . DIRECTORY_SEPARATOR . $file_name;
    if (!is_dir($file_store_path)) {
        mkdir($file_store_path);
        chmod($file_store_path, 0777);
    }
    $new_image_path = $file_store_path . DIRECTORY_SEPARATOR . $existing_data[$file_name];
    rename($exsting_image_path, $new_image_path);
}
