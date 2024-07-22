
# Modelo Docker com NGNIX [PHP 7 e PHP 8] , Database [MySQL and PostgreSQL]

# Passos para importação de dados para o MySQL:

1. Faça o dump da base de dados.
2. Remova as inormações de que ligue ao database original
3. Renomeie o arquivo dump.sql e coloque em docker/mysql/
4. Execute o comando:

~~~bash
docker-compose up -d
~~~

Isso já monta todo o ambiente e importa a base de dados.

# Acesso via browser

| PHP  | Endereço | Alternativo |
| :---:   | ------------- | --- |
| 7  | http://sis87.localhost/  | http://localhost/  |
| 8  | http://sis8.localhost/  |  - |

> [!NOTE]
> Ambos tem acessos aos Databases ( MySQL e PostgreSQL )



# Informações

## Arquivos
* .env : contém informações de conexão entre outros
* docker/ contém em seus subdiretórios configurações para cada container

## Estrutura de diretórios
<pre>
PastaRAIZ/
├── docker/
│   ├── mysql/
│   │   ├── my.cnf
│   │   └── dump.sql
│   ├── php/
│   │   ├── Dockerfile
│   │   └── php.ini
│   └── ngnix/
│       └── nginx.conf
├── www/
│   ├── php7/
│   │   ├── assets/
│   │   ├── index.php  
│   │   ├── info.php      phpinfo()
│   │   ├── dbteste.php   Teste de DB
│   │   └── outrasPastas/
│   └── php8/
│   │   ├── assets/
│   │   ├── index.php  
│   │   ├── info.php      phpinfo()
│   │   ├── dbteste.php   Teste de DB
│   │   └── outrasPastas/
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






