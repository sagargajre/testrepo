<?php

/**
 * This function will take the date string and convert it to MySQL date format
 * @param type $dt
 * @return type
 */
function convert_to_mysql_date_format($dt) {
    $date_time_object = new DateTime($dt);
    return $date_time_object->format('Y-m-d');
}

function convert_to_new_date_format($dt) {
    $date_time_object = new DateTime($dt);
    return $date_time_object->format('d-m-Y');
}
