<?php
class Auth extends Controller {

    public function __construct() {
        LoginStatus::isLoggedIn('dashboard');
    }

    public function index() {
        $this->login();
    }

    public function login() {
        $this->view('auth/login');
    }

    public function proses_login() {
        $nip = $_POST['nip'];
        $password = $_POST['password'];

        if (empty($nip) or empty($password)) {
            Flasher::setFlash('NIP atau Password', 'tidak boleh kosong!', 'danger');
        } else {
            $count = $this->model('Auth_model')->auth($nip);
            if ($count > 0) {
                $data = $this->model('Auth_model')->get_user($nip);
                if (password_verify($password, $data['password'])) {
                    Flasher::setFlash('Login', 'berhasil!', 'success');
                    echo $count;

                    $_SESSION['user'] = ['nip' => $data['nip'], 'level' => $data['level'], 'status' => 'logged_in']; // create session user
                } else {
                    Flasher::setFlash('Password', 'tidak sesuai!', 'danger');
                }
            } else {
                Flasher::setFlash('NIP', 'tidak ditemukan!', 'danger');
            }
        }
    }

    public function logout() {
        unset($_SESSION['user']);
        destroy($_SESSION['user']);
    }
}
