<?php



    class Usuario{


        public function login($user, $pass){

            global $pdo;
            $sql = "SELECT * FROM usuarios where user = :user AND pass = :pass";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("user", $user);
            $sql->bindValue("pass", md5($pass));
            $sql->execute();

            if($sql->rowCount() > 0){

                $dado = $sql->fetch();
                echo "ID: ".$dado['ID'];
                echo "<br>";
                echo "Usuario: ".$dado['user'];

                $_SESSION["IDuser"] = $dado["ID"];

                return true;

            }
        
            else{

                return false;

            }
        }





    }






?>