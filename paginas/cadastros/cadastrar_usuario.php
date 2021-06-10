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
            <div class="form-group col-md-7"> <label for="nome">Nome Completo</label> <input type="text" class="form-control" name="nome" required size="60"> </div>
            <div class="form-group col-md-3"> <label for="campo2">Usuário</label> <input type="text" class="form-control" name="user" required autocomplete="off"> </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5"> <label for="campo1">E-mail</label> <input type="email" class="form-control" name="email" required> </div>

            <div class="form-group col-md-3"> <label for="nome">Telefone</label> <input type="text" class="form-control" name="telefone" required size="15"> </div>

            <div class="form-group col-md-2">
                <label for="permissao">Permissão</label>
                <select class="form-select" aria-label="Permissao" name="permissao" required>
                <option selected></option>
                <option value="1">Comum</option>
                <option value="2">Supervisor</option>
                <option value="3">Administrador</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="setor">Setor</label>
                <select class="form-select" aria-label="setor" name="setor" >
                    <option value="1">Comercial</option>
                    <option value="2">Cadastro</option>
                    <option value="3">Recepção</option>
                    <option value="4">Faturamento</option>
                    <option value="5">Tecnologia da Informação</option>
                    <option value="6">Contabilidade</option>
                    <option value="7">Interc./Audit.</option>
                    <option value="8">Diretoria</option>
                    <option value="9">Financeiro</option>
                    <option value="10">Gerência</option>
                    <option value="11">ANS</option>
                    <option value="12">GED</option>
                    <option selected value="13">Outros</option>
                </select>
            </div>
            <div class="form-group col-md-3"> 
                <label for="campo2">Data de Nascimento</label> <input type="date" class="form-control" name="nasc" required autocomplete="off"> 
            </div>

            <div class="row">    
            <div class="form-group col-md-3"> <label for="campo2">Senha</label> <input type="password" class="form-control" name="pass" required autocomplete="off"> </div>
                <div class="form-group col-md-2">
                    <label for="status">Status</label>

                <!-- nesse select nao ha a opcao de value 2, pois value 2 é de usuarios temporarios e so sera atribuido o valor 2 ao status quando for digitado um tempo maior que zero no campo tempo    -->
                <select class="form-select" aria-label="status" name="status" required>
                    <option selected></option>
                    <option value="1">Ativado</option>
                    <!-- <option value="2">Temporario</option> -->
                    <option value="3">Desativado</option>
                    </select>
                </div>

        <!-- ao selecionar a opcao de usuario temporario esse campo abaixo 'tempo' devera aparecer para colocar quantas horas esse usuario ficara ativo no sistema, a logica de se criar usuarios temporarios deve-se ao fato da possibilidade de usuarios que nao vao usar o sistema por muito tempo tais como: auditorias internas e externas, visitantes entre outros. -->
        <div class="form-group col-md-2"> <label for="campo2">Tempo em Horas</label> <input type="number" class="form-control" name="tempo" autocomplete="off" placeholder='Sem Limite'> </div>
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