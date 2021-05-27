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


        public function gravar($nome, $email, $user, $pass, $permissao, $status, $tempo, $telefone, $dataCadastro, $dataCadastroUnix, $idAdm, $excluido, $setor, $nasc){

        

            global $pdo;
            $sql = "INSERT INTO usuarios(nome, email, user, pass, permissao, telefone, dataCadastro, dataCadastroUnix, idAdm, excluido, setor, nasc) VALUES(:nome, :email, :user, :pass, :permissao, :telefone, :dataCadastro, :dataCadastroUnix, :idAdm, :excluido, :setor, :nasc)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome", $nome);
            $sql->bindValue ("email", $email);
            $sql->bindValue("user", $user);
            $sql->bindValue ("pass", $pass);
            $sql->bindValue ("permissao", $permissao);
            $sql->bindValue("telefone", $telefone);
            $sql->bindValue("dataCadastro", $dataCadastro);
            $sql->bindValue("dataCadastroUnix", $dataCadastroUnix);
            $sql->bindValue("idAdm", $idAdm);
            $sql->bindValue("excluido", $excluido);
            $sql->bindValue("setor", $setor);
            $sql->bindValue("nasc", $nasc);

            $sql->execute();

            echo "<script>alert('Usuario: ". $_POST['user'] .'\n' . "Nome: ". $_POST['nome'] .'\n\n' . "Cadastrado!');</script>";
            $url = '/paginas/admin/main.php?pagina=../../classes/usuario/visualizar_usuario';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


        }

        // public function gravarPosExcluirUsuarios($nome, $email, $user, $pass, $permissao, $status, $tempo, $telefone, $dataCadastro, $dataCadastroUnix, $idAdm){

        

        //     global $pdo;
        //     $sql = "INSERT INTO usuarios(nome, email, user, pass, permissao, status, tempo, telefone, dataCadastro, dataCadastroUnix, idAdm) VALUES(:nome, :email, :user, :pass, :permissao, :status, :tempo, :telefone, :dataCadastro, :dataCadastroUnix, :idAdm)";
        //     $sql = $pdo->prepare($sql);
        //     $sql->bindValue("nome", $nome);
        //     $sql->bindValue ("email", $email);
        //     $sql->bindValue("user", $user);
        //     $sql->bindValue ("pass", $pass);
        //     $sql->bindValue ("permissao", $permissao);
        //     $sql->bindValue("status", $status);
        //     $sql->bindValue("tempo", $tempo);
        //     $sql->bindValue("telefone", $telefone);
        //     $sql->bindValue("dataCadastro", $dataCadastro);
        //     $sql->bindValue("dataCadastroUnix", $dataCadastroUnix);
        //     $sql->bindValue("idAdm", $idAdm);

        //     $sql->execute();

      
        //     $url = '/paginas/admin/main.php?pagina=../../classes/usuario/visualizar_usuario';
        //     echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


        // }

        public function permissao($user){
            global $pdo;
            
            $sql = "SELECT permissao FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':user', $user );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;

        }

        public function habilitarUsuario($id){
        
            global $pdo;
            $sql = "UPDATE usuarios SET ativo = '1' WHERE id = '$id'";
            $sql = $pdo->prepare($sql);
            $sql->execute();

           
           
    
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

        
        public function retornaNome($id){

            global $pdo;
            
            $sql = "SELECT nome FROM usuarios WHERE id = '$id'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':user', $user );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;


        }


        
        public function editarSemSenhaDigitada($id, $nome, $email, $permissao, $telefone, $setor, $nasc){


            global $pdo;
            $sql = "UPDATE usuarios SET nome = :nome, email = :email, permissao = :permissao, telefone = :telefone, setor = :setor, nasc = :nasc WHERE id = '$id'";
            $sql = $pdo->prepare($sql);
 
            $sql->bindValue("nome", $nome);
            $sql->bindValue("email", $email);
            $sql->bindValue("permissao", $permissao);
            $sql->bindValue("telefone", $telefone);
            $sql->bindValue("setor", $setor);
            $sql->bindValue("nasc", $nasc);
            
            $sql->execute();
            echo "<script>alert('Usuario alterado com sucesso!');</script>";
            
        }

        public function editar($id, $nome, $email, $pass, $permissao, $telefone, $setor){


            global $pdo;
            $sql = "UPDATE usuarios SET nome = :nome, email = :email, pass = :pass, permissao = :permissao, telefone = :telefone, setor = :setor WHERE id = '$id'";
            $sql = $pdo->prepare($sql);
 
            $sql->bindValue("nome", $nome);
            $sql->bindValue("email", $email);
            $sql->bindValue("pass", md5($pass));
            $sql->bindValue("permissao", $permissao);
            $sql->bindValue("telefone", $telefone);
            $sql->bindValue("setor", $setor);
            
            $sql->execute();
            echo "<script>alert('Usuario alterado com sucesso!');</script>";
            
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

        public function id($user){

            global $pdo;
            
            $sql = "SELECT id FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':user', $user );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;


        }



    
            
            public function desativarUsuario($id){
                $id = 1;
                global $pdo;
                $sql = "UPDATE usuarios SET excluido = '1' WHERE id = '$id'";
                $sql = $pdo->prepare($sql);
                $sql->execute();
    
               
               
        
            }

        public function apagarTodosUsuarios(){

            global $pdo;
            $sql = ("TRUNCATE TABLE usuarios");
            $sql = $pdo->prepare($sql);
            $sql->execute();
            
        }

        public function desabilitarUsuario($id){

            global $pdo;
            $sql = "UPDATE usuarios SET ativo = '0' WHERE id = '$id'";
            $sql = $pdo->prepare($sql);
            $sql->execute();
        


        }

        public function retornaAtivo($id){

            global $pdo;
            
            $sql = "SELECT ativo FROM usuarios WHERE id = '$id'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $id );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;



        }

        

        public function verificaExclusao($user){
            global $pdo;
            
            $sql = "SELECT excluido FROM usuarios WHERE user = '$user'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':user', $user );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
        
            return $res;

        }

        public function verificaAtivo($id){
            global $pdo;
            
            $sql = "SELECT ativo FROM usuarios WHERE id = '$id'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $id );        
            $stmt->execute();

            $res = $stmt->fetchColumn();
    
            return $res;

        }

        public function alterarSenha($pass){
            
            $user = $_SESSION['user'];

            global $pdo;
            $sql = "UPDATE usuarios SET pass = '$pass' WHERE user = '$user'";
            $sql = $pdo->prepare($sql);
            $sql->execute();

            echo "<script>alert('Senha alterada com sucesso!');</script>";
            $url = '/paginas/admin/main.php?pagina=../../classes/usuario/visualizar_usuario';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

        }

        public function alterarNome($nome){
            
            $user = $_SESSION['user'];

            global $pdo;
            $sql = "UPDATE usuarios SET nome = '$nome' WHERE user = '$user'";
            $sql = $pdo->prepare($sql);
            $sql->execute();

            echo "<script>alert('Nome alterado com sucesso!');</script>";
            $url = '/paginas/admin/main.php?pagina=../../classes/usuario/visualizar_usuario';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

        }

  

        


    }
?>