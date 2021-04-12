<?php
    if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '3'){

        header("Location: /");

    }
?>

<center style="margin-left: 60px; margin-top: 100px !important;">
    <h2>Alterar sua Senha</h2>
    <form action="../../classes/usuario/alterarSenha.php" autocomplete="off" method="POST" style="margin-left: 300px;">
        <hr />
   
        <div class="row">    
            <div class="form-group col-md-3"> <label for="pass">Nova Senha</label> <input type="password" class="form-control" name="pass" required autocomplete="off"> 
        </div>
            
        <div id="actions" class="row">
            <div class="col-md-12"> <button type="submit" class="btn btn-primary">Salvar</button> 
            <a href="?pagina=inicio" class="btn btn-danger">Cancelar</a> </div>
        </div>
    </form>
</center>