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

  $sql = "SELECT * FROM ficha WHERE id = '$id';";

  $consulta = $pdo->query($sql);
  
  //   essa variavel recebendo '0' indica que o post veio do 'editar_usuario'
  $_SESSION['configOuEdit'] = 0;

  while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {


    $nome = $linha['nome'];
    $codProduto = $linha['codProduto'];
    $tipo = $linha['tipo']; 
    $dataCriacao = $linha['dataCriacao'];
    $dataAtualizacao = $linha['dataAtualizacao'];
    


    // if($ativo == 0){
    //     $ativo = "Não";
    //     $corBG = "Red";
    //     $corFonte = "white";
     
    // }

    // elseif($ativo == 1){
    //     $ativo = "Sim";
    //     $corBG = "Green";
    //     $corFonte = "white";
     
    // }

    // else{
    //     $ativo = 'Erro';
    //     $corBG = "Yellow";
    //     $corFonte = "black";
      
    // }

  }
?>
<center style=" margin-top: 100px !important;">
    <h2>Editar / Visualizar Ficha</h2>
    <form action="../../classes/usuario/editar_usuario.php" method="POST" style="margin-left: 220px;">
        <!-- area de campos do form -->
        <hr />

  
        <div class="row">
            <div class="form-group col-md-1"> <label for="nome">ID</label> <input READONLY type="text" class="form-control" name="id"  value="<?php echo $id ?>"  size="60"> </div>

      

            <div class="form-group col-md-4"> <label for="nome">Nome</label> <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>"  size="60"> </div>

            <div class="form-group col-md-2"> <label for="campo2">Tipo</label> <input type="text" class="form-control" name="user" value="<?php echo $tipo ?>"  autocomplete="off"> </div>


            <div class="form-group col-md-2"> <label for="campo2">Data de Criação</label> <input type="text" class="form-control" name="user" value="<?php echo $dataCriacao ?>"  autocomplete="off"> </div>

            <div class="form-group col-md-2"> <label for="campo2">data de Atualização</label> <input type="text" class="form-control" name="user" value="<?php echo $dataAtualizacao ?>"  autocomplete="off"> </div>
    
        </div>
  <br>
        <div class="row">

        </div>

        <br><br>

  

        </div>
    
</div>
     
           
        </div>
        <br>
        <br>
        <div id="actions" class="row">

                

                <!-- <div class="col">
                <a href="?pagina=../../classes/usuario/apagarUsuario&id=<?php echo $id; ?>"><button type='button' class='btn btn-danger' style='float: left;'>Excluir</button></a> 


                    <?php
                        if($u->retornaAtivo($id) == 1){
                    ?>
                         <a href="../../classes/usuario/desabilitarUsuario.php?id=<?php echo $id; ?>"><button type='button' class='btn btn-danger' style='width: 100px;'>Desativar</button></a>
                    <?php
                        }
                        else{
                    ?>
                        <a href="../../classes/usuario/habilitarUsuario.php?id=<?php echo $id; ?>"><button type='button' class='btn btn-success' style='width: 100px;'>Ativar</button></a>
                     <?php
                        }
                    ?>

              

                </div> -->
               
    

                <div class="col"> <button type="submit" class="btn btn-success">Salvar</button> 
                <a style='color: white !important' href="/paginas/admin/main.php?pagina=../../classes/usuario/visualizar_usuario" class="btn btn-danger">Cancelar</a> </div>


        </div>
    </form>

    <!-- mascara para o telefone, nesse caso ele pega o id telefone e aplica essa mascara -->
    <script type="text/javascript">
        $("#telefone").mask("(00) 0000-0000");
    </script>   
</center>