<?php
    class Usuario{

        public function login($user, $pass){

            global $pdo;
            $sql = "SELECT * FROM usuarios where user = :user AND pass = :pass";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":user", $user);
            $sql->bindValue(":pass", md5($pass));

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
            $sql->bindValue(":user", $user);

            $sql->execute();

            if($sql->rowCount() > 0){

                return true;
            }
        
            else{

                return false;

            }
        }


        public function gravar($nome, $email, $user, $pass, $permissao, $status, $tempo, $telefone, $dataCadastro, $dataCadastroUnix, $idAdm, $excluido){

        

            global $pdo;
            $sql = "INSERT INTO usuarios(nome, email, user, pass, permissao, status, tempo, telefone, dataCadastro, dataCadastroUnix, idAdm, excluido) VALUES(:nome, :email, :user, :pass, :permissao, :status, :tempo, :telefone, :dataCadastro, :dataCadastroUnix, :idAdm, :excluido)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue (":email", $email);
            $sql->bindValue(":user", $user);
            $sql->bindValue (":pass", $pass);
            $sql->bindValue (":permissao", $permissao);
            $sql->bindValue(":status", $status);
            $sql->bindValue(":tempo", $tempo);
            $sql->bindValue(":telefone", $telefone);
            $sql->bindValue(":dataCadastro", $dataCadastro);
            $sql->bindValue(":dataCadastroUnix", $dataCadastroUnix);
            $sql->bindValue(":idAdm", $idAdm);
            $sql->bindValue(":excluido", $excluido);

            $sql->execute();

            echo "<script>alert('Usuario: ". $_POST['user'] .'\n' . "Nome: ". $_POST['nome'] .'\n\n' . "Cadastrado!');</script>";
            $url = '/';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


        }

        public function gravarPosExcluirUsuarios($nome, $email, $user, $pass, $permissao, $status, $tempo, $telefone, $dataCadastro, $dataCadastroUnix, $idAdm){

        

            global $pdo;
            $sql = "INSERT INTO usuarios(nome, email, user, pass, permissao, status, tempo, telefone, dataCadastro, dataCadastroUnix, idAdm) VALUES(:nome, :email, :user, :pass, :permissao, :status, :tempo, :telefone, :dataCadastro, :dataCadastroUnix, :idAdm)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue (":email", $email);
            $sql->bindValue(":user", $user);
            $sql->bindValue (":pass", $pass);
            $sql->bindValue (":permissao", $permissao);
            $sql->bindValue(":status", $status);
            $sql->bindValue(":tempo", $tempo);
            $sql->bindValue(":telefone", $telefone);
            $sql->bindValue(":dataCadastro", $dataCadastro);
            $sql->bindValue(":dataCadastroUnix", $dataCadastroUnix);
            $sql->bindValue(":idAdm", $idAdm);

            $sql->execute();

      
            $url = '/paginas/admin/main.php?pagina=../../classes/usuario/visualizar_usuario';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


        }

        public function permissao($user){
            global $pdo;
            
            $sql = "SELECT permissao FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':user', $user);        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;

        }

        public function status($user){
            global $pdo;
            
            $sql = "SELECT status FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':user', $user);        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;

        }

        public function tempo($user){
            global $pdo;
            
            $sql = "SELECT tempo FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':user', $user);        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;

        }

        public function nome($user){

            global $pdo;
            
            $sql = "SELECT nome FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':user', $user);        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;


        }

        public function email($user){

            global $pdo;
            
            $sql = "SELECT email FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':user', $user);        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;


        }

        public function telefone($user){

            global $pdo;
            
            $sql = "SELECT telefone FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':user', $user);        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;


        }

        public function id($user){

            global $pdo;
            
            $sql = "SELECT id FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':user', $user);        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;


        }

        public function apagarTodosUsuarios(){

            global $pdo;
            $sql = ("TRUNCATE TABLE usuarios");
            $sql = $pdo->prepare($sql);
            $sql->execute();
            
        }

        public function desativarUsuarios(){

            global $pdo;
            $sql = "UPDATE usuarios SET excluido = '1'";
            $sql = $pdo->prepare($sql);
            $sql->execute();

            $url = '/paginas/admin/main.php?pagina=../../classes/usuario/visualizar_usuario';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


        }

        public function verificaExclusao($user){
            global $pdo;
            
            $sql = "SELECT excluido FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam(':user', $user);        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;

        }


    }
?>


