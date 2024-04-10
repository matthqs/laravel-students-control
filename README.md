# Laravel 11 CRUD Application with MySQL

Este é um aplicativo web desenvolvido em Laravel 11 que permite realizar operações CRUD (Create, Read, Update, Delete) em alunos, cursos e matrículas. O aplicativo também possui um sistema de autenticação acesso do sistema.

## Funcionalidades

- **Alunos**: 
  - Adicionar novos alunos
  - Visualizar a lista de alunos
  - Editar informações dos alunos
  - Excluir alunos

- **Cursos**: 
  - Adicionar novos cursos
  - Visualizar a lista de cursos
  - Editar informações dos cursos
  - Excluir cursos

- **Matrículas**: 
  - Vincular alunos e cursos
  - Visualizar a lista de matrículas
  - Editar informações das matrículas
  - Excluir matrículas

- **Autenticação**: 
  - Login
  - Armazenamento em cache de token auth

## Tecnologias Utilizadas

- Laravel 11
- MySQL
- Bootstrap (para o front-end)

## Pré-requisitos

- PHP >= 8.0
- Composer
- MySQL
- Node.js e npm (opcional, caso deseje compilar os assets front-end)

## Instalação

1. Clone este repositório: `git clone https://github.com/seu-usuario/nome-do-repositorio.git`
2. Entre no diretório do projeto: `cd nome-do-repositorio`
3. Instale as dependências do Composer: `composer install`
4. Configure o arquivo `.env` com suas credenciais de banco de dados MySQL
5. Gere a chave de aplicativo Laravel: `php artisan key:generate`
6. Execute as migrações do banco de dados para criar as tabelas: `php artisan migrate`
7. Execute esta seeder para inserir dados de teste: `php artisan db:seed --class=MatriculaTableSeeder`
8. Inicie o servidor: `php artisan serve`
9. Acesse o aplicativo em seu navegador: `http://localhost:8000`

- Usuário Admin criado pela seed:
- Login: admin@localhost
- Senha: admin

## Licença

Este projeto está licenciado sob a Licença [MIT](https://opensource.org/licenses/MIT).