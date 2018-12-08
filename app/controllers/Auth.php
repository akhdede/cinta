<?php
class Auth extends Controller {

    public function index() {
        $this->login();
    }

    public function login() {
        $this->view('auth/login');
    }
}