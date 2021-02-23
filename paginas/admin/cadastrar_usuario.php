<?php
if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '3'){

    header("Location: /");

}
?>
<center style="margin-left: 60px; margin-top: 100px !important;">
    <h2>Novo Usuário</h2>
    <form action="../../classes/usuario/gravar_usuario.php" autocomplete="off" method="POST" style="margin-left: 300px;">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-7"> <label for="nome">Nome</label> <input type="text" class="form-control" name="nome" required size="60"> </div>
            <div class="form-group col-md-3"> <label for="campo2">Usuário</label> <input type="text" class="form-control" name="user" required> </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5"> <label for="campo1">E-mail</label> <input type="email" class="form-control" name="email" required> </div>
            <div class="form-group col-md-3"> <label for="campo2">Senha</label> <input type="password" class="form-control" name="pass" required> </div>
            
            <div class="form-group col-md-2">
            <label for="permissao">Permissão</label>
            <select class="form-select" aria-label="Permissao" name="permissao" required>
                <option selected></option>
                <option value="1">Comum</option>
                <option value="2">Supervisor</option>
                <option value="3">Administrador</option>
            </select>
            </div>
        <div class="row">    
            <div class="form-group col-md-2">
            <label for="status">Status</label>
            <select class="form-select" aria-label="status" name="status" required>
                <option selected></option>
                <option value="1">Ativo</option>
                <option value="2">Temporario</option>
                <option value="3">Desativado</option>
            </select>
            </div>
        </div>
        </div>
        <br>
        <br>
        <div id="actions" class="row">
            <div class="col-md-12"> <button type="submit" class="btn btn-primary">Salvar</button> 
            <a href="?pagina=inicio" class="btn btn-danger">Cancelar</a> </div>
        </div>
    </form>
</center>