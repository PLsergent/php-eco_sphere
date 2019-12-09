<?php

class UserManager {
    private $db;

    public function __construct($db1) {
        $this->db = $db1;
    }

    public function create(User $user) {
        try {
            $req = $this->db->prepare(
                "INSERT INTO `users` (`id`, `email`, `password`, `firstName`, `lastName`, `address`, `postalCode`, `city`, `admin`) VALUES (NULL, :email, :password, :firstName, :lastName, :address, :postalCode, :city, '0')"
            );
            $req->execute(
                array(
                    ':email' => $user->getEmail(),
                    ':password' => $user->getPassword(),
                    ':firstName' => $user->getFirstName(),
                    ':lastName' => $user->getLastName(),
                    ':address' => $user->getAddress(),
                    ':postalCode' => $user->getPostalCode(),
                    ':city' => $user->getCity()
                )
            );
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function login($email, $password) {

    }

    public function update($user) {

    }

    public function delete($user) {

    }

    public function findOne($id) {
        
    }

    public function findAll() {
        $req = $this->db->prepare(
            'SELECT * FROM users'
        );
        $req->execute();
        return $req->fetchAll();
    }
} 