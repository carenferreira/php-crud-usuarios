# CRUD de Usuários em PHP

Projeto simples de CRUD (Create, Read, Update, Delete) desenvolvido em PHP com MySQL.

## Funcionalidades

- Cadastro de usuários
- Listagem de usuários
- Visualização
- Edição de usuários
- Exclusão de usuários
- Interface com Bootstrap

## Tecnologias

- PHP
- MySQL
- HTML/CSS
- Bootstrap

## Como rodar o projeto

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/php-crud-usuarios.git
````

2. Configure o banco de dados:
- Crie um banco MySQL
- Crie uma tabela "usuarios" com os campos: idusuarios, nome, email, data_nascimento e senha

3. Configure a conexão:
- Renomeie o arquivo:
conexao.example.php → conexao.php
- Preencha com seus dados do banco

4. Inicie o servidor
5. Acesse no navegador:
```bash
http://localhost/seu-projeto
````

## Segurança
Senhas devem ser armazenadas com hash (password_hash) e arquivos sensíveis não estão versionados (.gitignore)

## Objetivo
Projeto desenvolvido para fins de estudo, praticando conceitos de:
- PHP
- Integração com banco de dados
- Estrutura CRUD
