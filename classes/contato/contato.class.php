<!-- classe responsavel pelo crud do formulario de contato -->
<?php
    class Contato{
        // metodo para gravar no banco de dados o contato preenchido no form
        public function gravar($nome, $email, $telefone, $texto){

            global $pdo;
            $sql = "INSERT INTO contato(nome, email, telefone, texto) VALUES(:nome, :email, :telefone, :texto)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome", $nome);
            $sql->bindValue("email", $email);
            $sql->bindValue("telefone", $telefone);
            $sql->bindValue("texto", $texto);
            $sql->execute();
            
        }

        static function listar(){

            

        }

           



    }
?>