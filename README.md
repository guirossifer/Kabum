# DESCRIÇÃO
Ambiente de containers, trabalhando com docker e docker-compose.

# AMBIENTE:

1 Container NGINX: que seria o servidor web;

1 Container com PHP: que seria a aplicação;

1 Container com MySQL: seria o bando de dados para armazenar dados da aplicação;

1 Container com Grafana: monitoramento do Ambiente;

1 Container com Graylog: registro de logs;

1 Container com ElasticSearch: integrado com graylog;

1 Container com Mongo: armazenamento dos dados de Grafana e Graylog;

1 Rede em modo bridge: redekabum


# CONFIGURAÇÕES:

* Configuração Container Nginx

Exposição de portas: 80, 443

Utilização como servidor Web, fazendo toda a parte de configuração e direcionamento de portas, aonde todo o trafego de requisições passaria por ele.


* Configuração Container Php

Exposição de portas: 9000

Aplicação para recolher dados dos clientes, que se comunica com o container MySql para salvar os dados.

Aplicação: Pasta PHP


* Configuração Container Mysql

Exposição de portas: 3306

Container que vai armazenar os dados colhidos na aplicação.


* Configuração Container Grafana

Exposição de portas: 3000

Grafana vai fazer a parte de monitoramento dos containers.


* Configuração Container Graylog

Exposição de portas: 9001, 1514 tcp/udp, 12201 tcp/up 

Graylog é responsavel pela gerencia de logs.


* Configuração Container Elastic

Exposição de portas: 9200, 9300

Esta ligado ao Graylog.


* Configuração Mongo

Exposição de portas: 27017

Mongo vai fazer a parte de armazenamento dos logs do Grafana e Graylog.


# COMO UTILIZAR

Clone o repositório usando o comando: git clone https://github.com/guirossifer/Kabum.git

Rode o ambiente com: docker-compose up -d

Acessar o shell de cada container: docker exec -it "nomedocontainer" bash
