<?php
class Dashboard extends Controller {
    public function __construct() {
        LoginStatus::notLogIn('auth');
    }

    public function index() {
        $data = ['isi' => 'dashboard/index'];
        $this->view('templates/header');
        $this->view('templates/content', $data);
        $this->view('templates/footer');
    }
}
