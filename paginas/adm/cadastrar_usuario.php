<center>
    <div id="contato_form_dir">
        <div class="row justify-content-md-center">
            <form method="POST" action="../../classes/usuario/gravar_usuario.php" class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                    <!-- <label for="validationCustom01">Nome</label> -->
                    <input type="text" class="form-control" id="" name="nome" placeholder="Nome" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                    <!-- <label for="validationCustom02">E-mail</label> -->
                    <input type="email" class="form-control" id="" name="email" placeholder="E-mail" value="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                    <!-- <label for="validationCustom04">telefone</label> -->
                    <input type="text" class="form-control" id="" name="user" placeholder="Usuário" required>
                    </div>
                    <div class="col-md-4 mb-3">
                    <!-- <label for="validationCustom04">telefone</label> -->
                    <input type="text" class="form-control" id="" name="pass" placeholder="Senha" required>
                    </div>
                    <!-- <label for="validationCustom05">Mensagem</label> -->

            
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
    </div>
</center>
