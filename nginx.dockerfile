#Instalação e configuração do NGINX
FROM nginx:latest

EXPOSE 80 443

ENTRYPOINT [ "nginx" ]
