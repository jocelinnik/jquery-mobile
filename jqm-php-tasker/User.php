<?php
    class User{
        public function create($name, $email, $password){
            $this->checkEmail($email);
            $sql = "INSERT INTO users (name,email,password) VALUES (:name,:email,:password)";
            $stmt = DB::prepare($sql);
            $stmt->bindParam("name", $name);
            $stmt->bindParam("email", $email);
            $stmt->bindParam("password", $password);
            $stmt->execute();
            $id_user = DB::lastInsertId();

            return $id_user;
        }
        public function checkEmail($email){
            $sql = "SELECT id FROM users WHERE email=:email";
            $stmt = DB::prepare($sql);
            $stmt->bindParam("email", $email);
            $stmt->execute();
            $user = $stmt->fetch();
            
            if ($user) throw new \Exception("Email já está cadastrado");
        }
    }
?>