<div id="contato_form_dir" style="float: right;">
    <div class="row justify-content-md-center">

        <!-- regra para definir o texto no formulario de contato, como é utilizado a mesma pagina do 'index/contato_form' não eh necessario exibir o titulo para pessoas logadas, com isso: 

        se (não houver o logon){

            texto aparece;

        } 
        
        tambem caso ja haja o login efetuado, nao sera necessario preencher os campo nome, email, e telefone, pois serao utilizados os mesmos do cadastro.
        -->
        <?php
            if(!isset($_SESSION['logado'])){
        ?>
        <center style='margin: 10px;'>
          
            <form action="../../classes/contato/gravar_contato.php" method="POST" style='width: 400px; margin-top: 50px;'>

                <div class="form-group">
                    <input type="text" class="form-control" id="nome" name="nome" required placeholder='Nome'>
                </div>
                <br>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" required placeholder='E-Mail'>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" id="telefone" name="telefone" required placeholder='Telefone'>
                </div>
                <br>
                <div class="form-group">
                    <textarea maxlength ="1000" class="form-control" id="text" rows="6" name="texto" placeholder="Sua mensagem" style="resize: none" required ></textarea>
                </div>
                <br>
                <div id="actions" class="row">
                    <div class="col-md-12"> <button type="submit" class="btn btn-primary">Salvar</button> 
                    <a style='color: white !important' href="?pagina=../paginas/index/inicio" class="btn btn-danger">Cancelar</a> </div>
                </div>
            </form>
        </center>


        <?php   
            }

            else{
        ?>
    <!-- abaixo foram inseridas algumas variaveis $_SESSION para retornar, nome, email e telefone, essas variaveis foram preenchidas na classe usuario/logar-->

    <form action="../../classes/contato/gravar_contato.php" method="POST" style='max-width: 500px; margin-top: 50px;'>
            <p>Preencha o formulario de contato abaixo:</p>
                <div class="form-group">
                    <input type="text" readonly class="form-control" id="nome" name="nome" required placeholder='<?php echo $_SESSION['nome']; ?>' value="<?php echo $_SESSION['nome']; ?>">
                </div>
                <br>
                <div class="form-group">
                    <input type="email" readonly class="form-control" id="email" name="email" required placeholder="<?php echo $_SESSION['email']; ?>" value="<?php echo $_SESSION['email']; ?>">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" readonly class="form-control" id="telefone" name="telefone" required placeholder='Telefone' placeholder="<?php echo $_SESSION['telefone'];?>" value="<?php echo $_SESSION['telefone']; ?>">
                </div>
                <br>
                <div class="form-group">
                    <textarea maxlength ="1000" class="form-control" id="text" rows="6" name="texto" placeholder="Sua mensagem" style="resize: none" required ></textarea>
                </div>
                <br>
                <div id="actions" class="row">
                    <div class="col-md-12"> <button type="submit" class="btn btn-primary">Salvar</button> 
                    <a style='color: white !important' href="?pagina=inicio" class="btn btn-danger">Cancelar</a> </div>
                </div>
            </form>
            
        <?php 
        
            }
            
        ?>
      
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
