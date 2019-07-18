# test-send4-lumen-crud

## Proposta

Desenvolver a API RESTful de uma agenda com as seguintes tecnologias PHP + LARAVEL.

+ Permitir cadastrar contato (nome, sobrenome, e-mail e telefone). 
+ Permitir cadastrar mensagem (contato (fk), descrição). 
+ Listar todas as mensagens por contato. 
+ Permitir alterar e excluir uma mensagem. 
+ Permitir alterar os dados de um contato. 
+ Validar os campos postados. 
+ Permitir excluir um contato. 
+ Criar um repositório no GitHub.

O que esperamos ver:

- Boa noção de arquitetura
- Código pronto para produção

## Dependências

## Instruções para rodar

Você pode optar rodar de duas formas

### 1) Execute o arquivo `run.sh` da pasta raiz, podendo ser via terminal com por exemplo:

`sh ./run.sh`

Este comando ira executar uma série de passos que você poderá acompanhar via terminal, referente a:
1) Build
2) Install das dependências do framework lumen
3) Run migrations para a criação das tabelas

### 2) Execute os seguintes passos separadamente no seu terminal dentro da pasta do projeto:

`docker-compose up --build -d`

`docker run --rm --interactive --tty -v $PWD/lumen:/app composer install`

`docker exec -it php php /var/www/html/artisan migrate`

### Material complementar

A documentação dos endpoints pode ser utilizada via Postman com o arquivo `send4.postman_collection.json`