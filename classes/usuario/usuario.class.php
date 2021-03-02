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

        public function duplicidade($user){

            global $pdo;
            $sql = "SELECT user FROM usuarios where user = :user";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("user", $user);

            $sql->execute();

            if($sql->rowCount() > 0){

                return true;
            }
        
            else{

                return false;

            }
        }


        public function gravar($nome, $email, $user, $pass, $permissao, $status, $tempo, $telefone, $dataCadastro, $dataCadastroUnix){

        

            global $pdo;
            $sql = "INSERT INTO usuarios(nome, email, user, pass, permissao, status, tempo, telefone, dataCadastro, dataCadastroUnix) VALUES(:nome, :email, :user, :pass, :permissao, :status, :tempo, :telefone, :dataCadastro, :dataCadastroUnix)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome", $nome);
            $sql->bindValue ("email", $email);
            $sql->bindValue("user", $user);
            $sql->bindValue ("pass", $pass);
            $sql->bindValue ("permissao", $permissao);
            $sql->bindValue("status", $status);
            $sql->bindValue("tempo", $tempo);
            $sql->bindValue("telefone", $telefone);
            $sql->bindValue("dataCadastro", $dataCadastro);
            $sql->bindValue("dataCadastroUnix", $dataCadastroUnix);
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

        public function tempo($user){
            global $pdo;
            
            $sql = "SELECT tempo FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':user', $user );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;

        }

        public function nome($user){

            global $pdo;
            
            $sql = "SELECT nome FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':user', $user );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;


        }

        public function email($user){

            global $pdo;
            
            $sql = "SELECT email FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':user', $user );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;


        }

        public function telefone($user){

            global $pdo;
            
            $sql = "SELECT telefone FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':user', $user );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;


        }

    }
?>


