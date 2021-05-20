<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    class users {
        private $firstname;
        private $lastname;
        private $email;

        public function construct($firstname,$lastname,$email){
            $this->$firstname = $firstname;
            $this-> $lastname=$lastname;
            $this->$email = $email;
        }

        public function getname(){
            return $this->$firstname;
        }
        public function getemail(){
            return $this->$email;
        }
        
    }

    ?>
</body>