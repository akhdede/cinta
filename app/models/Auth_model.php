<?php
class Auth_model {

    private $db;

    private $table = 'users';

    public function __construct() {
        $this->db = new Database;
    }

    public function auth($nip) {

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nip=:nip');
        $this->db->bind('nip', $nip);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function get_user($nip) {
        $this->db->query('SELECT `nip`, `level`, `password` FROM ' . $this->table . ' WHERE `nip`=:nip');
        $this->db->bind('nip', $nip);
        return $this->db->single();
    }

}
