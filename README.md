# SISTEMA DE GERENCIAMENTO DE PRATOS

Sistema desenvolvido em **PHP, MySQL, HTML e CSS** para o gerenciamento de usuários e pratos de um restaurante.

## Funcionalidades

- Cadastro de usuários;
- Cadastro de pratos;
- Listagem de pratos;
- Edição e exclusão de pratos;
- Identificação do usuário responsável por cada prato;
- Visualização dos pratos cadastrados por cada usuário;
- Validação dos campos obrigatórios;
- Uso de Prepared Statements para maior segurança.

## Tecnologias

- PHP
- MySQL
- HTML
- CSS
- XAMPP

## Como executar

1. Coloque a pasta do projeto dentro da pasta `htdocs` do XAMPP.
2. Inicie o **Apache** e o **MySQL** no XAMPP.
3. Acesse o `phpMyAdmin`.
4. Crie o banco de dados e importe o arquivo `banco.sql`.
5. Configure a conexão com o banco no arquivo PHP responsável pela conexão.
6. Acesse o projeto pelo navegador:

```text
http://localhost/cadstro_pratos