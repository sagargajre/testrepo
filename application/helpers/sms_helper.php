<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function send_SMS($ci_obj, $user_data, $message_body, $sms_type) {
    return;
    if (!trim($user_data['mobile_number'])) {
        return;
    }
    $otp_prefix = ':';
    //Your message to send, Add URL encoding here.
    //sms information
    $message = urlencode($message_body);
    $response_type = 'json';
    //Define route 
    $url = "https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=c9e8f5a3-85ec-4596-9725-935f0993c98f&senderid=DMNONL&channel=2&DCS=0&flashsms=0&number=" . trim($user_data['mobile_number']) . "&text=" . $message . "&route=13";


// init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $url
            //,CURLOPT_FOLLOWLOCATION => true
    ));
    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //get response
    $output = json_decode(curl_exec($ch), true);
    $output['JobId'] = $output ['JobId'] == NULL ? '' : $output['JobId'];
    $output['MessageData'] = $output ['MessageData'] == NULL ? [] : $output['MessageData'];
    $ci_obj->load->model('logs_model');
    if (isset($output['MessageData'])) {
        $output['MessageData'] = json_encode($output['MessageData']);
    }
    $output['sms_type'] = $sms_type;
    $output['created_by'] = $user_data['user_id'];
    $output['created_time'] = date('Y-m-d H:i:s');
    $ci_obj->logs_model->insert_sms_log($output);

    curl_close($ch);
}
