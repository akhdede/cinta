<?php
class Dashboard extends Controller {
    public function __construct() {
        if ($_SESSION['user']['status'] != 'logged_in') {
            header('Location: ' . BASEURL . '/auth');
        }
    }

    public function index() {
        $this->view('templates/template');
    }
}