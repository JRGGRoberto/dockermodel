
# Modelo Docker com NGNIX [PHP 7 e PHP 8] , Composer,  Database MariaDB e PostgreSQL

# Passos para importação de dados para o MariaDB:

1. Faça o dump da base de dados.
2. Remova as inormações de que ligue ao database original
3. Renomeie o arquivo dump.sql e coloque em docker/mariadb/
4. Execute o comando:

~~~bash
docker compose -p NOME up -d
~~~

Isso já monta todo o ambiente e importa a base de dados.

# Acesso via browser

| PHP  | Endereço |
| :---:   | ------------- |
| 7  | http://sis87.localhost/  |
| 8  | http://sis8.localhost/  |

> [!NOTE]
> Ambos tem acessos aos Databases ( MaridaDB PostgreSQL  )

# Informações

## Arquivos
* .env : contém informações de conexão entre outros
* docker/ contém em seus subdiretórios configurações para cada container

## Estrutura de diretórios
<pre>
PastaRAIZ/
├── docker/
│   ├── mariadb/
│   │   ├── my.cnf
│   │   └── dump.sql
│   ├── php/
│   │   ├── Dockerfile
│   │   ├── Dockerfile-php7
│   │   └── php.ini
│   └── ngnix/
│       ├── fastcgi_params
│       ├── nginx.conf
│       └── conf.d/
│           ├── sis7.conf
│           └── sis8.conf
├── www/
│   ├── php7/
│   │   ├── assets/
│   │   ├── index.php  
│   │   ├── info.php      phpinfo()
│   │   ├── dbteste.php   Teste de DB
│   │   └── outrasPastas/
│   └── php8/
│       ├── assets/
│       ├── index.php  
│       ├── info.php      phpinfo()
│       ├── dbteste.php   Teste de DB
│       └── outrasPastas/
├── .env
├── .gitignore
├── docker-compose.yml
└── README.md
</pre>

# Utilizando

* Copie a pasta do sistema para www/php7 ou www/php8 
* Veja se é necessário alterar dados de arquivos de sessão
* Veja se é necessário alterar dados de conexão com o DB

Altere o arquivo *hosts*

- Windows

~~~text
C:\Windows\System32\drivers\etc\hosts
~~~

- Linux

~~~text
 /etc/hosts
~~~

Adicionar a informação: 

~~~text
127.0.0.1 sis7
127.0.0.1 sis8
~~~

# Instalando bibliotecas nos projetos via Composer

Acessar o diretório o arquivo docker-composer.yml pelo PowerShell
Exemplo para adicionar a biblioteca do **PHPMailer**(ver. 7.0.2) no projeto **sisproec**

~~~bash
docker compose run --rm `
  -w /app/php7/sisproec `
  composer `
  require phpmailer/phpmailer:7.0.2
~~~
-- -- 

That's all for now, folks!

JRGG Roberto 
