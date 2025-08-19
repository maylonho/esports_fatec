## Continuação do projeto parte 2 (Trazendo dados do banco para nossa view)

Editar as configurações do .env
    # APP_NAME=Escola
    # APP_LOCALE=pt_BR
    # APP_FALLBACK_LOCALE=pt_BR
    # APP_FAKER_LOCALE=pt_BR

Excluir as migrations
    0001_01_01_000001_create_cache_table
    0001_01_01_000002_create_jobs_table

Executar o comando php artisan migrate

Crie mais uma migration para os alunos
    # php artisan make:migration create_alunos_table

Edite a migration alunos em ->database->migrations.

Executar o comando php artisan migrate novamente

Crie a model Alunos
    # php artisan make:model Aluno

Editar a model alunos e enviar os dados para o controlador

Editar o controlador, recebendo os dados da model e enviando como array assiciativo para a view

Editar a view, criando um foreach para percorrer todos os registros de alunos

## Continuação do projeto parte 3 (Cadastrando novos registros no banco de dados)
    Crie o método inserir no controlador
    Primeiramente edite o formulario, incluindo um action com a rota que fara o cadastro, utilize o metodo POST
    Adicione @csrf logo apos a tag <form>
    Utilizando a variavel enviada com o metodo with do controlador, crie uma condicional que exibira uma mensagem de sucesso caso o cadastro tenha sido realizado.
    Crie a rota de inserção no arquivo web.php, esta rota ira chamar o método inserir do controlador


## Continuação do projeto parte 4 (Excluindo registros no banco de dados)
Crie o método deletar no controlador
Adicione a rota de exclusão no web.php
Adicione um form no lugar do link de exclusao na view (motivo: para conseguir utilizado o metodo delete, é necessário o uso de um form que com auxilio do @method('DELETE'), simula uma requisição do tipo delete).


## Continuação do projeto parte 5 (Editando registros no banco de dados)

Crie o link para edição na view
crie a rota do formulario de edicao no web.php
Crie o metodo editar no controlador
Crie a view editar.blade.php
Crie um nova rota para atualzar o registro
Crie o metodo atualizar no controlador

