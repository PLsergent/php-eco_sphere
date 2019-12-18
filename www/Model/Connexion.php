<?php

class Connexion {
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $db;

    public function __construct() {
        $this->host = '172.18.0.3'; // Perform a `docker inspect <container_id>` and get ip address from the container
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