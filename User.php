<?php
    class User{
        //Properties
        public $username;
        public $password;
        public  $firstName;
        public $lastName;
        
        //Construct
        public function __construct($username,$password, $firstName,$lastName){
            $this->username =$username;
            $this->password =password_hash($password,PASSWORD_DEFAULT);
            $this->firstName =$firstName;
            $this->lastName =$lastName;
        }
        //Method
        public function getFullname(){
            return $this->firstName." ".$this->lastName;
        }
        public function getUserName(){
            return $this->username;
        }
        public function login($username,$password){
            $hashed_password = password_hash("12345", PASSWORD_DEFAULT);
           if($username=="admin" && password_verify($password,$hashed_password))
           {
               return true;
           }
        }
    }
    class Student extends User{
        public $gpa;

        public function __construct($username,$password,$firstname,$lastname,$gpa)
        {   
            parent::__construct($username,$password,$firstname,$lastname);
            $this->gpa=$gpa;
        }

        public function StudentRank(){
            if($this->gpa < 5){
                return "Yếu";
            }
            else if($this->gpa < 7){
                return "Trung bình";
            }
            else if($this->gpa < 8 ){
                return "Khá";
            }
            else{
                return "Giỏi";
            }
        }

    }
?>