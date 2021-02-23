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
                // echo "ID: ".$dado['ID'];
                // echo "<br>";
                // echo "Usuario: ".$dado['user'];
                return array($user, $pass);
            }
        
            else{

                return false;

            }
        }


        public function gravar($nome, $email, $user, $pass, $permissao, $status){

            global $pdo;
            $sql = "INSERT INTO usuarios(nome, email, user, pass, permissao, status) VALUES(:nome, :email, :user, :pass, :permissao, :status)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome", $nome);
            $sql->bindValue ("email", $email);
            $sql->bindValue("user", $user);
            $sql->bindValue ("pass", $pass);
            $sql->bindValue ("permissao", $permissao);
            $sql->bindValue("status", $status);
            $sql->execute();

            echo "<script>alert('Usuario: ". $_POST['user'] .'\n' . "Nome: ". $_POST['nome'] .'\n\n' . "Cadastrado!');</script>";
            $url = '/';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


        }

        public function permissao($user){
            global $pdo;
            
            $sql = "SELECT permissao FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':user', $user );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;

        }

        public function status($user){
            global $pdo;
            
            $sql = "SELECT status FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':user', $user );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;

        }

    }
?>


