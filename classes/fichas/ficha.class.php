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

        public function codProduto($id){
            global $pdo;
            
            $sql = "SELECT codProduto FROM produto WHERE id = '$id'";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $id );        
            $stmt->execute();

            $res = $stmt->fetchColumn();

            return $res;

        }

        public function editar($id, $nome, $codProduto, $dataAtualizacao, $tipoVenda, $ramo, $umidadeMinima, $umidadeMaxima, $secador){

            global $pdo;
            $sql = "UPDATE ficha SET nome = :nome, codProduto = :codProduto, dataAtualizacao = :dataAtualizacao, tipoVenda = :tipoVenda, ramo = :ramo, umidadeMinima = :umidadeMinima, umidadeMaxima = :umidadeMaxima, secador = :secador WHERE id = '$id'";
            $sql = $pdo->prepare($sql);
  
            $sql->bindValue("nome", $nome);
            $sql->bindValue("codProduto", $codProduto);
            $sql->bindValue("dataAtualizacao", $dataAtualizacao);
            $sql->bindValue("tipoVenda", $tipoVenda);
            $sql->bindValue("ramo", $ramo);
            $sql->bindValue("umidadeMinima", $umidadeMinima);
            $sql->bindValue("umidadeMaxima", $umidadeMaxima);
            $sql->bindValue("secador", $secador);
            
            $sql->execute();

            echo "<script>alert('Ficha Alterada com sucesso!');</script>";
            
        }

        
    }


           



    
?>