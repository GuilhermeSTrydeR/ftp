<!-- classe responsavel pelo crud do formulario de contato -->
<?php
    class Ficha{
        // funcao para gravar no banco de dados o contato preenchido no form
        public function gravar($nome, $codProduto, $dataCriacao, $tipoVenda, $ramo, $umidadeMinima, $umidadeMaxima, $secador){

            global $pdo;
            $sql = "INSERT INTO ficha(nome, codProduto, dataCriacao, tipoVenda, ramo, umidadeMinima, umidadeMaxima, secador) VALUES(:nome, :codProduto, :dataCriacao, :tipoVenda, :ramo, :umidadeMinima, :umidadeMaxima, :secador)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome", $nome);
            $sql->bindValue("codProduto", $codProduto);
            $sql->bindValue("dataCriacao", $dataCriacao);
            $sql->bindValue("tipoVenda", $tipoVenda);
            $sql->bindValue("ramo", $ramo);
            $sql->bindValue("umidadeMinima", $umidadeMinima);
            $sql->bindValue("umidadeMaxima", $umidadeMaxima);
            $sql->bindValue("secador", $secador);

            $sql->execute();

            $url = '/paginas/admin/main.php?pagina=../../classes/fichas/visualizar_fichas';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
            
        }

        public function editar($id, $dataAtualizacao, $nome, $codProduto, $tipoVenda, $ramo, $umidadeMinima, $umidadeMaxima, $secador){


            global $pdo;
            $sql = "UPDATE ficha SET nome = :nome, dataAtualizacao = :dataAtualizacao, codProduto = :codProduto, tipoVenda = :tipoVenda, ramo = :ramo, umidadeMinima = :umidadeMinima, umidadeMaxima = :umidadeMaxima, secador = :secador WHERE id = '$id'";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("dataAtualizacao", $dataAtualizacao);
            $sql->bindValue("nome", $nome);
            $sql->bindValue("codProduto", $codProduto);
            $sql->bindValue("tipoVenda", $tipoVenda);
            $sql->bindValue("ramo", $ramo);
            $sql->bindValue("umidadeMinima", $umidadeMinima);
            $sql->bindValue("umidadeMaxima", $umidadeMaxima);
            $sql->bindValue("secador", $secador);
            
            $sql->execute();
            echo "<script>alert('Usuario alterado com sucesso!');</script>";
            
        }


        public function codProduto($codProduto){
            global $pdo;
            
            $sql = "SELECT codProduto FROM produto WHERE id = '$codProduto'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $id );        
            $stmt->execute();

            $res = $stmt->fetchColumn();

            return $res;

        }

        public function nomeProduto($id){
            global $pdo;
            
            $sql = "SELECT nome FROM produto WHERE id = '$id'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $id );        
            $stmt->execute();

            $res = $stmt->fetchColumn();

            return $res;

        }

        public function ultimaAtualizacao($id){
            global $pdo;
            
            $sql = "SELECT dataAtualizacao FROM ficha WHERE id = '$id'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $id );        
            $stmt->execute();

            $res = $stmt->fetchColumn();

            return $res;

        }

        public function desativarFicha($id){
           
            global $pdo;
            $sql = "UPDATE ficha SET excluido = '1' WHERE id = '$id'";
            $sql = $pdo->prepare($sql);
            $sql->execute();

           
           
    
        }



        
    }


           



    
?>