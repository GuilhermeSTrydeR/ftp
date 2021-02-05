<?php



    class Usuario{


        public function login($user, $pass){

            global $pdo;
            $sql = "SELECT * FROM usuarios where user = :user AND pass = :pass";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("user", $user);
            $sql->bindValue ("pass", md5($pass));
            $sql->execute();

            if($sql->rowCount() > 0){

                $dado = $sql->fetch();
                echo "ID: ".$dado['ID'];
                echo "<br>";
                echo "Usuario: ".$dado['user'];


                return true;

            }
        
            else{

                return false;

            }
        }

        public function gravar($user, $pass){

            global $pdo;
            $sql = "INSERT INTO usuarios(user, pass) VALUES(:user, :pass)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("user", $user);
            $sql->bindValue ("pass", $pass);
            $sql->execute();

        }





    }






?>