<center style="margin-left: 100px; margin-top: 100px !important;">

    
    <?php

        if(!isset($_SESSION['logado']) || $_SESSION['permissao'] != '3'){
        
            header("Location: /");
        
        }
        
        $dataCadastro = gmdate("YmdHis", time());


    ?>
        <h1>Notas da Versão</h1>
        <p style="border: 2px solid black; margin-right: 230px; margin-left: 230px;">
            nessa versão não houve mudanças importantes!
        </p>
        <p>
        
            <style>
                table{
    
                    border: 2px solid black;
    
                }
                th{
    
                    border: 2px solid black;
    
                }
                td{
    
                    border: 2px solid black;
    
                }
            
            </style>
        
    
        
            <h4>Tabela de Bugs</h4>
            <table>
                <thead>
                    <tr>
                        <th>Bug</th>
                        <th>Descrição</th>
                        <th>Possivel Solução</th>
                    
                    </tr>
                    <tr>
                        <td>problema ao usar sistema em outro ambiente</td>
                        <td>ao clicar em logar (independente do usuario inserido) é retornado o erro: "Erro PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number"</td>
                        <td>foi inserido o caractere: ':' antes das variaveis dos metodos do: "$sql->bindValue("user", $user); note que antes de 'user' não tem o caractere, agora possui e ficou assim: $sql->bindValue(":user", $user); "</td>
                    </tr>
                    <tr>
                        <td>TODOS OS LOGINS ESTÃO INDO PARA O ADM</td>
                        <td>ao clicar em logar (independente do usuario inserido) é entrado na area de administrador</td>
                        <td>debugar e se virar</td>
                    </tr>
                </thead>
                
            </table>
        </p>
        <br><br><br><br>
       
</center>
