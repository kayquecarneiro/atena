# Projeto Atena

O projeto Atena consiste em uma ferramenta de apoio a o usuário que deseja se cadastrar na base de dados das lojas **Bemol**, a ferramenta conta com a possibilidade de criação de contas e visualização de informações.

# Instruções para funcionamento

<<<<<<< HEAD
A ferramenta é construída com as tecnologias *Laravel, Bootstrap e jQuery*, assim fazendo necessário a instalação de um servidor Web. a utilização de um servidor local como [*XAMPP*](https://www.apachefriends.org/pt_br/index.html) ou o próprio uso do servidor embutido como o *Artisan* presente no *Framework*. Para armazenar as informações das contas foi utilizado o *SGBD MySQL*.O esquema e diagrama ERP da tabela do banco está armazenado na raiz do projeto na pasta. 
=======
- Nome Banco de Dados: atena_bd
- usuário = root 
- senha = “” (vazia)
>>>>>>> eb2ad9ac17d10133bd6479c4514c3ddedecdbaf4

- *bdsql/127_0_0_1.sql*
- *bddiagrama/atena_diagrama.mwb* 

o Script está pronto para a importação, é importante ressaltar que a aplicação está configurada para procurar o banco com as seguintes informações.

- *Nome Banco de Dados: atena_bd*
- *usuário = root* 
- *senha = “” (vaziia)*

Caso seja necessária a modificação de algum dos atributos apresentados anteriormente, basta fazer as alterações no arquivo .env na raiz do projeto.Após a configuração do ambiente basta abrir o terminal do Sistema operacional e navegar até a pasta do projeto é iniciar o servidor web através do comando.

`php artisan serve`

A aplicação vai responder através do endereço.

- http://127.0.0.1:8000

>**Obs: para o pleno funcionamento é necessário que as [variáveis de ambiente da linguagem PHP](https://www.php.net/manual/pt_BR/faq.installation.php#:~:text=Clique%20no%20bot%C3%A3o%20'Vari%C3%A1veis%20de,por%20exemplo%2C%20C%3A%5Cphp)) estejam devidamente configuradas no Sistema operacional que será usado para rodar os serviços da aplicação.**
