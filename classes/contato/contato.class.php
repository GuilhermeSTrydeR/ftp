<!-- classe responsavel pelo crud do formulario de contato -->
<?php
    class Contato{
        // funcao para gravar no banco de dados o contato preenchido no form
        public function gravar($nome, $email, $telefone, $texto, $excluido){

            global $pdo;
            $sql = "INSERT INTO contato(nome, email, telefone, texto, excluido) VALUES(:nome, :email, :telefone, :texto, :excluido)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome", $nome);
            $sql->bindValue("email", $email);
            $sql->bindValue("telefone", $telefone);
            $sql->bindValue("texto", $texto);
            $sql->bindValue("excluido", $excluido);
            $sql->execute();
            
        }

        //fucnao para apagar todos os contatos da tabela contato
        public function apagarTodosContatos(){

            global $pdo;
            $sql = ("TRUNCATE TABLE contato");
            $sql = $pdo->prepare($sql);
            $sql->execute();
            
        }

        public function desativarContato(){

            global $pdo;
            $sql = "UPDATE contato SET excluido = '1'";
            $sql = $pdo->prepare($sql);
            $sql->execute();

            $url = '/paginas/admin/main.php?pagina=../../classes/usuario/visualizar_usuario';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


        }

           



    }
?>