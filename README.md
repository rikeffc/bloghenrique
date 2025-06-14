# Blog Pessoal - Henrique

## Sobre o Autor

- **Nome:** Henrique de Jesus Freitas Pereira
- **Turma:** 41
- **Instituição:** Colégio Santo Inácio

## Sobre o Projeto

Este é um projeto de blog desenvolvido individualmente, como parte dos estudos com o professor André. O projeto utiliza PHP e o framework Laravel, implementando funcionalidades de CRUD (Create, Read, Update, Delete) e seguindo o padrão de arquitetura MVC (Model-View-Controller).

## Tecnologias Utilizadas

- PHP
- Laravel
- MySQL
- Composer
- Blade (para templates HTML)

## Pré-requisitos

Antes de começar, garanta que você tem os seguintes softwares instalados:
- PHP (versão compatível com a do projeto Laravel)
- Composer
- Servidor Web (XAMPP, WAMP, MAMP, Laragon, ou similar)
- MySQL (ou outro SGBD compatível, com ajustes no `.env`)

## Guia de Instalação

Siga os passos abaixo para configurar o projeto em seu ambiente local:

1.  **Clonar o repositório:**
    Navegue até o diretório onde deseja clonar o projeto (por exemplo, `c:/xampp/htdocs/`) e execute o comando abaixo no seu terminal (Git Bash, PowerShell, CMD):
    ```bash
    git clone <URL_DO_REPOSITORIO_AQUI> nome_do_projeto
    cd nome_do_projeto
    ```
    *Substitua `<URL_DO_REPOSITORIO_AQUI>` pela URL do seu repositório no GitHub e `nome_do_projeto` pelo nome que deseja dar à pasta do projeto.*

    Alternativamente, se preferir usar o **GitHub Desktop**:
    Vá até a página do projeto no GitHub, clique no botão verde `<> Code` e selecione "Open with GitHub Desktop". Siga as instruções para clonar o repositório no diretório desejado (ex: `c:/xampp/htdocs/`).

2.  **Abrir o projeto no seu editor de código:**
    Recomendamos o Visual Studio Code, mas sinta-se à vontade para usar seu editor preferido.

3.  **Criar o arquivo de configuração de ambiente (`.env`):**
    No terminal, dentro da pasta raiz do projeto, copie o arquivo de exemplo:
    ```bash
    # No Windows (CMD ou PowerShell)
    copy .env.example .env

4.  **Configurar o banco de dados no arquivo `.env`:**
    Abra o arquivo `.env` recém-criado e atualize as seguintes variáveis com as informações do seu banco de dados MySQL. Primeiro, crie um banco de dados (por exemplo, `bloghenrique`) no seu servidor MySQL (DBeaver).

    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=bloghenrique  # Coloque o nome do banco de dados que você criou
    DB_USERNAME=root          # Seu usuário do MySQL (padrão do XAMPP é 'root')
    DB_PASSWORD=             
    
    O arquivo `.env.example` já define `DB_DATABASE=bloghenrique`. Certifique-se de que este banco de dados exista ou altere para o nome do banco que você criou.*

5.  **Instalar as dependências do projeto:**
    Com o Composer instalado, execute o seguinte comando no terminal, na raiz do projeto:
    `composer install`

6.  **Gerar a chave de aplicação (APP_KEY):**
    Esta chave é essencial para a segurança da sua aplicação Laravel (criptografia, sessões, etc.).
    `php artisan key:generate`
    
7.  **Executar as migrações (criação das tabelas):**
    Este comando criará todas as tabelas definidas no seu banco de dados.
    `php artisan migrate`

8.  **Executar os Seeders (popular o banco com dados iniciais, opcional):**
    Se o projeto tiver seeders para popular o banco com dados de exemplo, execute:
    `php artisan db:seed`
    
## Acessando o Projeto

Após a instalação, se estiver usando XAMPP (ou similar), você pode acessar o projeto pelo navegador no endereço:
`http://localhost/bloghenrique/public/login`

Alternativamente, você pode usar o servidor de desenvolvimento embutido do Laravel:
`php artisan serve`

E acessar o projeto em `http://localhost:8000` (ou a URL que o comando indicar).
