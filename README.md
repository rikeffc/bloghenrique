##--------------------------------------##

Nome: Henrique de Jesus Freitas Pereira
Turma:41
Instituição: Colégio Santo inácio
##--------------------------------------##

##--------------------------------------------------------------------------------------------------------------------------------------------##
Esté é um projeto de um blog que foi feito de forma individual acompanhando as aulas com o professor andré usando PHP, Laravel com CRUD E MVC
##--------------------------------------------------------------------------------------------------------------------------------------------##




##---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------##
1) Clonar o repositório do GitHub
Vá até o projeto no GitHub que deseja clonar e clique no botão verde escrito "<> Code" em seguida vai abrir um submenu e você deve clicar em "Open with GitHub Desktop". O GitHub Desktop vai abrir, em sua máquina, perguntando onde deve clonar o repositório. Clone no diretório "c:/xampp/htdocs/"

2) Abra o projeto no Visual Studio Code
3) Crie o arquivo .env com base no arquivo .env.example
Abra o terminal e execute o código entre aspas "copy .env.example .env"

4) Mude o nome do banco no arquivo .env
Altere esta parte do código para ficar igual esta abaixo.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=meuprojeto
DB_USERNAME=root
DB_PASSWORD=
5) Instale as depedências
Abra o terminal e execute o código entre aspas "composer install"

6) Gere a APP_KEY (chave de criptografia)
Abra o terminal e execute o código entre aspas "php artisan key:generate"

7) Rode as migrations (criação das tabelas)
Abra o terminal e execute o código entre aspas "php artisan migrate"

8) Rode os SEEDs (inserção dos dados nas tabelas)
Abra o terminal e execute o código entre aspas "php artisan db:seed"
##---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------##
