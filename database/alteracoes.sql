-- aqui serao listadas as alteracoes do banco de dados, rodar esses comandos abaixo


-- 10/06/2021 12:33 COLUNA PARA VERIFICAR A DATA DE ALTERACAO DE UM USUARIO NO SISTEMA{
    alter table usuarios add column dataAtualizacao date
-- }


-- 16/06/2021 12:33 COLUNA PARA VERIFICAR SE A FICHA ESTA EXCLUIDA, POR DEFINICAO EH FALSO(0){
    alter table ficha add column excluido int(1) default 0
-- }