# Imagen Ubuntu
FROM ubuntu:20.04

# Evitar interacción durante instalación
ENV DEBIAN_FRONTEND=noninteractive

# Actualizar repositorios e instalar Apache y PHP
RUN apt-get update && \
    apt-get install -y apache2 php git curl && \
    apt-get clean

# Descargar una aplicación PHP sencilla
RUN git clone https://github.com/DiegoDM02/Practica-4-DevSecOps /tmp/instalacionapachephp && \ 
    rm -rf /var/www/html/* && \
    mv /tmp/instalacionapachephp/* /var/www/html/

# Puerto 80
EXPOSE 80

# Iniciar Apache en primer plano
CMD ["apachectl", "-D", "FOREGROUND"]
