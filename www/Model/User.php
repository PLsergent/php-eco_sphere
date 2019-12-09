<?php

class User {
    private $id;
    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $address;
    private $postalCode;
    private $city;


    public function __construct($data) {
        $this->hydrate($data);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id1) {
        $this->id=$id1;
    }

    //

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email1) {
        $this->email=$email1;
    }

    //

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password1) {
        $this->password=$password1;
    }

    //

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName1) {
        $this->firstName=$firstName1;
    }

    //

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName1) {
        $this->lastName=$lastName1;
    }

    //

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address1) {
        $this->address=$address1;
    }

    //

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode1) {
        $this->postalCode=$postalCode1;
    }

    //

    public function getCity() {
        return $this->city;
    }

    public function setCity($city1) {
        $this->city=$city1;
    }

    // Hydrate method
    public function hydrate(array $data){
        foreach($data as $key => $value){
            $method = "set".ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}