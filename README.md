# test-send4-lumen-crud

<p><img src="https://github.com/henriqueweiand/test-send4-lumen-crud/workflows/Laravel%20Workflow/badge.svg"></p>

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

- Docker

## Instruções para rodar

Você pode optar rodar de duas formas

Antes de tudo, entre na pasta lumen e renomeie o arquivo `.env.example` para `.env` e também o `phpunit.example.xml` para `phpunit.xml` afim de garantir que as variaveis de ambiente fiquem certas assim como para com os testes.

### 1) Execute o arquivo `run.sh` da pasta raiz, podendo ser via terminal com por exemplo:

`sh ./run.sh`

Este comando ira executar uma série de passos que você poderá acompanhar via terminal, referente a:
1) Build
2) Install das dependências do framework lumen
3) Run migrations para a criação das tabelas
4) O ambiente pode ser acessado no http://localhost

### 2) Execute os seguintes passos separadamente no seu terminal dentro da pasta do projeto:

`docker-compose up --build -d`

`docker run --rm --interactive --tty -v $PWD/lumen:/app composer install`

`docker exec -it php php /var/www/html/artisan migrate`

O ambiente pode ser acessado no http://localhost

### Material complementar

A documentação dos endpoints pode ser utilizada via Postman com o arquivo `send4.postman_collection.json` ou acesse para ter a base dos endpoint em https://app.swaggerhub.com/apis/henriqueweiand/send4/1.0

### Importante

Sempre fique atento que não exista outro processo rodando nas portas 80, 9000 e 3306 pois serão as portas utilizadas ao executar o docker

### Tests

Para rodar os testes, apos os containers estarem de "pé", na pasta `/lumen` execute em seu terminal:  ./vendor/bin/phpunit