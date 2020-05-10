<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//include APPPATH. 'libraries\phpmailer\src\PHPMailer.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

class Email_lib {
return;
    var $CI;

    public function __construct() {
        $this->CI = & get_instance();
    }

    function send_email_codeigniter($user_data, $subject, $message) {
        $mail_obj = new PHPMailer(true);
        $mail_obj->SMTPDebug = 4;                                 // Enable verbose debug output
        // $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail_obj->Host = 'mail.investdd.in';  // Specify main and backup SMTP servers
        // $mail_obj->SMTPAuth = true;                               // Enable SMTP authentication
        $mail_obj->Username = 'noreply@investdd.in';                 // SMTP username
        $mail_obj->Password = 'i5GEAJ^=Mdw}oSTd@2973';                           // SMTP password
        $mail_obj->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail_obj->Port = 465;                                    // TCP port to connect to
        //Recipients
        $mail_obj->setFrom('noreply@investdd.in', 'Sparsh');
        $mail_obj->addAddress(trim($user_data['email_id']), $user_data['first_name'] . ' ' . $user_data['last_name']);     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail_obj->addReplyTo('noreply@investdd.in', 'S.Y.P.');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        //Content
        $mail_obj->isHTML(true);                                  // Set email format to HTML
        $mail_obj->Subject = $subject;
        $mail_obj->Body = $message;
        $mail_obj->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail_obj->send();
    }

    function send_email($user_data, $subject, $message, $email_type) {
        $this->CI->load->library('email');
//        $this->CI->load->library('parser');
        $this->CI->email->to(trim($user_data['email_id']));
        $this->CI->email->from(FROM_EMAIL, FROM_NAME);
//        $body = $this->CI->parser->parse('File Path', 'Template Data', TRUE);
        $this->CI->email->subject($subject);
        $this->CI->email->message($message);
        $this->CI->email->set_mailtype("html");

        $email_log = array();
        if (!$this->CI->email->send()) {
            $email_log['status'] = 'fail';
            $email_log['message'] = $this->CI->email->print_debugger();
        } else {
            $email_log['status'] = 'success';
        }
        $email_log['email_type'] = $email_type;
        $email_log['created_by'] = $user_data['user_id'];
        $email_log['created_time'] = date('Y-m-d H:i:s');
        $this->CI->load->model('logs_model');
        $this->CI->logs_model->insert_email_log($email_log);
    }

}

/**
 * EOF: ./application/libraries/Email_lib.php
 */