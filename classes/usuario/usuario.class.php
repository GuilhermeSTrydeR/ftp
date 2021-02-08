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

                return array($user, $pass);
                

            }
        
            else{

                return false;

            }
        }


 

        public function gravar($nome, $email, $user, $pass, $permissao){

            global $pdo;
            $sql = "INSERT INTO usuarios(nome, email, user, pass, permissao) VALUES(:nome, :email, :user, :pass, :permissao)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome", $nome);
            $sql->bindValue ("email", $email);
            $sql->bindValue("user", $user);
            $sql->bindValue ("pass", $pass);
            $sql->bindValue ("permissao", $permissao);
            $sql->execute();

        }





    }






?>