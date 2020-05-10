<?php

define("MALE", 1);
define("FEMALE", 2);
define("OTHERS", 3);

$config['gender_type_array'] = array(
    MALE => 'Male',
    FEMALE => 'Female',
    OTHERS => 'Others'
);

define('CHAWL_OWNER', 1);
define('PROMOTER', 2);
$config['registration_category'] = array(
    CHAWL_OWNER => 'Chawl Owner',
    PROMOTER => 'Promoter'
);

define('PASSWORD_REGEX', '/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[@!#$%_+\-=<>]).{8,16}$/');
define('PAN_REGEX', '/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/');
define('PASSWORD_VALIDATION_MESSAGE', 'Password must be between 8 and 16 characters, '
        . 'contain at least one digit and two alphabetic character, '
        . 'at least one upper case and lower case character, '
        . 'contain at least one special character of (@!#$%-_+<>=).');

define('IS_DELETE', 1);
define('IS_CHECKED', 1);

define('ACCOUNT_DEACTIVATED', 0);
define('ACCOUNT_ACTIVATED', 1);

$config['account_type_array'] = array(
    ACCOUNT_ACTIVATED => 'Activated',
    ACCOUNT_DEACTIVATED => 'Deactivated'
);

define('UNLOCK', 0);
define('LOCK', 1);
$config['account_status_array'] = array(
    LOCK => 'Lock',
    UNLOCK => 'Unlock'
);

define('LOCK_USER_MESSAGE', 'Your Account is Locked. Please contact to System Administrator.');
define('ACCOUNT_DEACTIVATE_MESSAGE', 'Your Account is Deactivated. Please contact to System Administrator.');


//SMS and Email Type
define('SMS_EMAIL_REGISTRATION', 1);
define('SMS_EMAIL_LOGIN', 2);
define('SMS_EMAIL_LOGOUT', 3);
define('SMS_EMAIL_FORGOT_PASSWORD', 4);
define('SMS_EMAIL_CHANGE_PASSWORD', 5);
define('SMS_EMAIL_RESET_PASSWORD', 6);

//User type
define('USER', 0);
define('ADMIN', 1);
/*define('FOOD_ADMIN', 2);
define('DEPUTY_COLLECTOR', 3);
define('LABOUR_DEPT', 4);*/

define('MAX_FILE_SIZE_IN_KB', 100);

define('DEFAULT_PROFILE_PICTURE', 'adminLTE/img/user2-160x160.jpg');

define('CONFIRM_STATUS', 1);
define('UNCONFIRM_STATUS', 0);


define('OPEN_STATUS', 1);
define('CLOSE_STATUS', 0);

$config['version_array'] = array(
    '1.0' => '02-05-2018',
    '1.1' => '04-06-2018',
    '1.2' => '05-06-2018 10.50 AM',
    '1.3' => '05-06-2018 12.54 PM',
    '1.4' => '12-06-2018 03.40 PM',
    '1.5' => '13-06-2018 11:16 AM',
    '1.6' => '18-06-2018 05:08 PM',
    '1.7' => '27-06-2018 06:08 PM',
    '1.8' => '02-08-2018 12:00 PM',
);
define('CURRENT_VERSION', 1.7);

