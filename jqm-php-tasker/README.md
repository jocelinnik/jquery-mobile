# Tasker 

## Introdução

Esta é uma aplicação de exemplo para jQuery Mobile utilizando PHP puro, sem frameworks. O objetivo é ilustrar como criar uma aplicação simples utilizando o jQuery Mobile e o php.

Para Windows recomendamos o uso do Wamp Server. Para Linux, use `apt-get` para instalar apache, php e mySql. Estes procedimentos estão escritos no livro. 

## Instalação

O objetivo desta aplicação é ser *simples*, então estaremos utilizando um conjunto de arquivos mínimo para criar as taleas do sistema de tarefas. Para os arquivos javascript e css, utilizaremos CDN. Para acesso ao banco de dados, utilizaremos PDO. 

Para a correta instalação, acesse primeiramente o arquivo `config.php` que contém as configurações de acesso ao banco de dados. Altere as informações caso seje necessário. 

Após alterar o `config.php`, acesse `install.php` e siga as instruções. Primeiro, teste a conexão. Depois crlique em `Criar tabelas` para que o banco de dados `tasker` e as 2 tabelas sejam criadas. Pode-se retornar ao `install.php` para apagar ou consultar os dados.

### Virtual Host

Pode-se criar um virtual host para a sua aplicação. Neste caso estamos criando um domínio `tasker.com` que apontará para a pasta `jqm-php-tasker`. Acesse o arquivo `http.conf ` do seu apache e acidione o seguinte código no final do arquivo:

```xml
<VirtualHost *>
    ServerName tasker.com
    DocumentRoot ".............\jqm-php-tasker"
    <Directory ".............\jqm-php-tasker">
        Options FollowSymLinks
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>
```

Lembre de trocar o `.........` pelo caminho correto. Após alterar o http.conf, altere o arquivo `hosts` do windows localizado em 'C:\Windows\System32\drivers\etc\hosts'. Abra este arquivo em modo de administrador e inclua a seguinte linha:

```
127.0.0.1   tasker.com
```

Reinice o apache e acesse `tasker.com`.


