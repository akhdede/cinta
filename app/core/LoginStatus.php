<?php

class LoginStatus {

    public static function isLoggedIn($param) {
        if(isset($_SESSION['user'])) {
            if($_SESSION['user']['status'] == 'logged_in') {
                header('Location: ' . BASEURL . '/' . $param);
            }
        }
    }

    public static function notLogIn($param) {
        if(!isset($_SESSION['user'])) {
            if($_SESSION['user']['status'] != 'logged_in') {
                header('Location: ' . BASEURL . '/' . $param);
            }
        }
    }
}
