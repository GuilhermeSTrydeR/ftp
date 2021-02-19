<center style="margin-left: 60px; margin-top: 100px !important;">
    <!-- <div id="contato_form_dir">
        <div class="row justify-content-md-center">
            <form method="POST" action="../../classes/usuario/gravar_usuario.php" class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
     
                    <input type="text" class="form-control" id="" name="nome" placeholder="Nome" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">

                    <input type="email" class="form-control" id="" name="email" placeholder="E-mail" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">

                    <input type="text" class="form-control" id="" name="user" placeholder="Usuário" required>
                    </div>
                    <div class="col-md-4 mb-3">

                    <input type="text" class="form-control" id="" name="pass" placeholder="Senha" required>
                    </div>


            
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
            <script>
                (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                    });
                }, false);
                })();
            </script>
        </div>
        </div>
    </div> -->
    <h2>Novo Usuário</h2>
    <form action="../../classes/usuario/gravar_usuario.php" method="POST" style="margin-left: 300px;">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-7"> <label for="nome">Nome</label> <input type="text" class="form-control" name="nome" required> </div>
            <div class="form-group col-md-3"> <label for="campo2">Usuário</label> <input type="text" class="form-control" name="user" required> </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-md-5"> <label for="campo1">E-mail</label> <input type="email" class="form-control" name="email" required> </div>
            <div class="form-group col-md-3"> <label for="campo2">Senha</label> <input type="text" class="form-control" name="pass" required> </div>
            
            <div class="form-group col-md-2">
            <label for="permissao">Permissão</label>
            <select class="form-select" aria-label="Default select example" name="permissao" required>
                <option selected></option>
                <option value="1">Comum</option>
                <option value="2">Supervisor</option>
                <option value="3">Administrador</option>
            </select>
            </div>

        </div>
  
        <!-- <div class="row">
            <div class="form-group col-md-3"> <label for="campo1">Município</label> <input type="text" class="form-control" name="customer['city']"> </div>
            <div class="form-group col-md-2"> <label for="campo2">Telefone</label> <input type="text" class="form-control" name="customer['phone']"> </div>
            <div class="form-group col-md-2"> <label for="campo3">Celular</label> <input type="text" class="form-control" name="customer['mobile']"> </div>
            <div class="form-group col-md-1"> <label for="campo3">UF</label> <input type="text" class="form-control" name="customer['state']"> </div>
            <div class="form-group col-md-2"> <label for="campo3">Inscrição Estadual</label> <input type="text" class="form-control" name="customer['ie']"> </div>
        </div> -->
        <br>
        <br>
        <div id="actions" class="row">
            <div class="col-md-12"> <button type="submit" class="btn btn-primary">Salvar</button> 
            <a href="?pagina=inicio" class="btn btn-danger">Cancelar</a> </div>
        </div>
    </form>
</center>