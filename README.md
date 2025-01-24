# Notes - Sistema de Gerenciamento de Notas

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

</div>

## 📋 Sobre o Projeto

Sistema de gerenciamento de notas desenvolvido em Laravel 11 e PHP 8.2, permitindo que usuários autenticados criem, visualizem, editem e excluam suas próprias notas de forma segura.

## 🚀 Funcionalidades

### Autenticação e Segurança

-   Sistema completo de autenticação de usuários
-   Proteção contra CSRF
-   Middleware personalizado para controle de acesso
-   Logout seguro

### Gerenciamento de Notas

-   Criação de novas notas
-   Visualização de notas existentes
-   Edição de notas
-   Exclusão de notas (soft delete)
-   Formatação automática de datas
-   IDs encriptados para maior segurança

### Interface e Usabilidade

-   Layout responsivo e intuitivo
-   Barra de topo consistente em todas as views
-   Validação de formulários
-   Feedback visual de erros
-   Manutenção de dados preenchidos em caso de erro

## 🛠 Tecnologias Utilizadas

-   **Laravel 11** - Framework PHP
-   **PHP 8.2** - Linguagem de programação
-   **MySQL** - Sistema de gerenciamento de banco de dados
-   **Blade** - Engine de templates
-   **Migration & Seeding** - Versionamento de banco de dados

## ⚙️ Instalação

1. Clone o repositório

    ```bash
    git clone https://github.com/ItamarJuniorDEV/notepad-complex-laravel
    ```

2. Instale as dependências

    ```bash
    composer install
    ```

3. Configure o ambiente

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure o banco de dados no arquivo `.env`

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=seu_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```

5. Execute as migrations e seeds

    ```bash
    php artisan migrate --seed
    ```

6. Inicie o servidor
    ```bash
    php artisan serve
    ```

## 🎯 Uso

1. Acesse a aplicação através do navegador
2. Faça login com suas credenciais
3. Na dashboard, você poderá:
    - Visualizar todas as suas notas
    - Criar novas notas
    - Editar notas existentes
    - Excluir notas indesejadas

## 🤝 Contribuição

Contribuições são sempre bem-vindas! Para contribuir:

1. Fork o projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📝 Licença

Este projeto está sob a licença MIT.

## 📧 Contato

Itamar Junior - [cdajuniorf@gmail.com](mailto:cdajuniorf@gmail.com)

Link do Projeto: [https://github.com/ItamarJuniorDEV/notepad-complex-laravel](https://github.com/ItamarJuniorDEV/notepad-complex-laravel)
