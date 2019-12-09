<?php

class Connexion {
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $db;

    public function __construct() {
        $this->host = '172.21.0.3';
        $this->dbname = 'docker';
        $this->username = 'docker';
        $this->password = 'docker';
        
        $this->db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8', $this->username, $this->password);
    }

    public function getDb() {
        return $this->db;
    }

    public function getInfoDb() {
        return 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8' . $this->username . $this->password;
    }
}
?>