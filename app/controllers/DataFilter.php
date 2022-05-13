<?php 

class DataFilter {

    public static function filter_mail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function filter_str($str) {
        return htmlspecialchars($str);
    }

}