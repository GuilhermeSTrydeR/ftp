<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<?php

if(!isset($_SESSION['logado']) || $_SESSION['permissao'] == '1'){

    header("Location: /");

}
        //requer classe de conexao do banco
        require("../../classes/conexao_bd.php");

        //requer o Usuario.class onde se encontra o comando para buscar no banco
        // require("../../classes/usuario/usuario.class.php");

  // OBS: aqui vai ser recebido apenas o id do informativo por GET poi o texto nao pode ser recebido por esse meio, pois existe uma limiticao de caracteres enviados por GET

  // pega o id vindo por GET
//   $id = $_GET['id'];



//   global $pdo;

//   $sql = "SELECT * FROM ficha WHERE id = '$id';";
//   $consulta = $pdo->query($sql);
//   while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {


//     $nome = $linha['nome'];
//     $codProduto = $linha['codProduto'];
//     $tipo = $linha['tipo']; 
//     $dataCriacao = $linha['dataCriacao'];
//     $dataAtualizacao = $linha['dataAtualizacao'];
    
//   }

//   $sql = "SELECT * FROM produto";
//   $consulta = $pdo->query($sql);
//   while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        
//     $idProduto = $linha['id'];
//     $nomeProduto = $linha['nome'];
//     $categoriaProduto = $linha['categoria'];
//     $codigoProduto = $linha['codProduto'];
//     $pesoUnitarioProduto = $linha['pesoUnitario'];
//     $pesoPacoteProduto = $linha['pesoPacote'];
//     $unidadePesoProduto = $linha['unidadePeso'];
//     $linhaProduto = $linha['linha'];
//     $canalProduto = $linha['canal'];
//     $embalagemProduto = $linha['embalagem'];


                            
//     }

?>
<center style=" margin-top: 100px !important;">
    <h2>CADASTRAR FICHA</h2>
    <form action="../../classes/fichas/gravar_ficha.php" method="POST" style="margin-left: 220px;">
        <!-- area de campos do form -->
        <hr />

  
        <div class="row">
            
            <div class="form-group col-md-5"> <label for="nome">Nome da ficha</label> <input type="text" class="form-control" name="nome"  size="60"> </div>
            
            <div class="form-group col-md-4">
                <label for="produto">Produto</label>
                    <select class="form-select" aria-label="Produto" name="codProduto">
                        <?php
                            
                            $consulta = $pdo->query("SELECT * FROM produto");
                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

                                $linha['categoria'] = ($linha['categoria'] . " | Cod.: " . $linha['codProduto']);
          
                                echo "<option value=" . $linha['id'] . ">" . $linha['categoria'] .  "</option>";
                                
                            }
                                
                        ?>
                    </select>
                </div>
            </div>
            
        </div>


            <br>

        <div class="row">

            <!-- <div class="form-group col-md-2">
                <label for="produto">Cód. Embalagem</label>
                    <select class="form-select" aria-label="Produto" name="produto">
                        <?php
                            
                            $consulta = $pdo->query("SELECT * FROM produto");
                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            
                                echo "<option value=" . $linha['embalagem'] . ">" . $linha['embalagem'] . "</option>";
                                
                            }
                                
                        ?>
                    </select>

            </div> -->

                <div class="form-group col-md-2">
                <label for="venda">Tipo de Venda</label>
                    <select class="form-select" aria-label="venda" name="tipoVenda">
                        <option value="1">Nacional</option>
                        <option value="2">Exportação</option>
                    </select>
            
                </div>

                <div class="form-group col-md-2">
                <label for="produto">Ramo</label>
                    <select class="form-select" aria-label="Ramo" name="ramo">
                        <option value="1">PET</option>
                        <option value="2">Agronegocio</option>
                    </select>
            
                </div>

                




            </div>

          


            
        </div>
        
        <br><br>

        <div class="row">
            <div class="form-group col-md-2"> <label for="nome">Umidade Minima(%)</label> <input type="number" class="form-control" name="umidadeMinima" size="60"> </div>

            <div class="form-group col-md-2"> <label for="nome">Umidade Maxima(%)</label> <input type="number" class="form-control" name="umidadeMaxima" size="60"> </div>

            <div class="form-group col-md-3"> <label for="nome">Tempo Secador(minutos.)</label> <input type="number" class="form-control" name="secador"   size="60"> </div>
        
        </div>

        <br><br>
           
        <div id="actions" class="row">
            <div class="col-md-12"> <button type="submit" class="btn btn-primary">Salvar</button> 
            <a href="?pagina=../../classes/fichas/visualizar_fichas" class="btn btn-danger">Cancelar</a> </div>
        </div>

      
    
</div>
     
           
        </div>
        <br>
        <br>

    </form>

    <!-- mascara para o telefone, nesse caso ele pega o id telefone e aplica essa mascara -->
    <!-- <script type="text/javascript">
        $("#telefone").mask("(00) 0000-0000");
    </script>    -->
</center>