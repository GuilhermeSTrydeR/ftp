<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<?php

if(!isset($_SESSION['logado']) || $_SESSION['permissao'] == '1'){

    header("Location: /");

}
        //requer classe de conexao do banco
        require("../../classes/conexao_bd.php");

        //requer o Usuario.class onde se encontra o comando para buscar no banco
        require("../../classes/usuario/usuario.class.php");

  // OBS: aqui vai ser recebido apenas o id do informativo por GET poi o texto nao pode ser recebido por esse meio, pois existe uma limiticao de caracteres enviados por GET

  // pega o id vindo por GET
  $id = $_GET['id'];


  global $pdo;

  $sql = "SELECT * FROM ficha WHERE id = '$id'";
  $consulta = $pdo->query($sql);
  while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {


    $nome = $linha['nome'];
    $codProduto = $linha['codProduto'];
    $dataCriacao = $linha['dataCriacao'];
    $dataAtualizacao = $linha['dataAtualizacao'];

    if($dataAtualizacao == null || $dataAtualizacao == '0000-00-00'){

        $dataAtualizacao = $dataCriacao;

    }


    $tipoVenda = $linha['tipoVenda'];
    $ramo = $linha['ramo'];
    $umidadeMinima = $linha['umidadeMinima'];
    $umidadeMaxima = $linha['umidadeMaxima'];
    $secador =  $linha['secador'];
    
    
  }






?>
<center style=" margin-top: 100px !important;">
    <h2>VISUALIZAR FICHA</h2>
    <form action="../../classes/fichas/editar_ficha.php" method="POST" style="margin-left: 220px;">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
        <div class="form-group col-md-1"> <label for="nome">ID</label> <input type="text" class="form-control" name="id" value="<?php echo $id ?>" disabled  size="60"> </div>

        <div class="form-group col-md-2"> <label for="dataCriacao">Data de Criação</label> <input type="text" class="form-control" name="dataCriacao" value="<?php echo $dataCriacao ?>"  disabled size="60"> </div>

        <div class="form-group col-md-2"> <label for="dataCriacao">Ultima Atualização</label> <input type="text" class="form-control" name="dataAtualizacao" value="<?php echo $dataAtualizacao ?>"  disabled size="60"> </div>
            
        <div class="form-group col-md-5"> <label for="nome">Nome da ficha</label> <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>" disabled  size="60"> </div>
            

            
        </div>


        <br>

        <div class="row">

        <?php 
                    switch ($tipoVenda) {
                       
                        case 1:
                            $vendaString = 'Nacional';
                            break;

                        case 2:
                            $vendaString = 'Exportação';
                            break;
                    }
                  
                  ?>

        
        <div class="form-group col-md-2"> <label for="nome">Tipo de Venda</label> <input type="text" class="form-control" name="nome" value="<?php echo $vendaString ?>" disabled  size="60"> </div>

                <div class="form-group col-md-2">
       
                  
                  
                  <?php 
                    switch ($ramo) {
                       
                        case 1:
                            $ramoString = 'PET';
                            break;

                        case 2:
                            $ramoString = 'Agronegocio';
                            break;
                    }
                  
                  ?>
                        
                        <div class="form-group col-md-5"> <label for="nome">Ramo</label> <input type="text" class="form-control" name="nome" value="<?php echo $ramoString ?>" disabled  size="60"> </div>

                    
            
                </div>

                <div class="form-group col-md-6">
                <label for="produto">Produto</label>
                    <select class="form-select" disabled aria-label="Produto" name="codProduto">
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

          


            
        </div>
        
        <br><br>

        <div class="row">
            <div class="form-group col-md-2"> <label for="nome">Umidade Minima(%)</label> <input type="number" class="form-control" disabled name="umidadeMinima" value="<?php echo $umidadeMinima ?>" PLACEHOLDER=<?php echo $umidadeMinima;?>  ></div>

            <div class="form-group col-md-2"> <label for="nome">Umidade Maxima(%)</label> <input type="number" class="form-control" disabled name="umidadeMaxima" value="<?php echo $umidadeMaxima ?>"  PLACEHOLDER=<?php echo $umidadeMaxima;?>> </div>

            <div class="form-group col-md-3"> <label for="nome">Tempo Secador(minutos.)</label> <input type="number" class="form-control" disabled name="secador" value="<?php echo $secador ?>" PLACEHOLDER=<?php echo $secador;?> > </div>
        
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