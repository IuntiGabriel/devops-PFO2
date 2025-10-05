# PRACTICA FORMATIVA NRO 2 – Docker, Nginx, PHP y MySQL

## Autor
**Nombre:** Gabriel Iunti  
**Carrera:** Tecnicatura Superior en Desarrollo de Software  
**Instituto:** IFTS NRO 29  
**Año:** 2025  
**Materia:** DevOps
**Docente** Javier Blanco


---

## Descripción general
Esta práctica tiene como objetivo **dockerizar un proyecto web** integrando un servidor web (Nginx), un intérprete PHP y una base de datos MySQL, logrando un entorno reproducible y portable.

El proyecto demuestra la conexión entre PHP y MySQL mostrando los registros de una tabla dentro de una página web simple.

---

## Servicios definidos

### nginx
- Imagen base: `nginx:latest`
- Función: servidor web que entrega el contenido PHP a través de PHP-FPM.
- Puerto publicado: `20080:80`

### php
- Imagen personalizada: `iuntigabriel/app_devops-php:1.0`
- Construida desde `php/Dockerfile`
- Contiene PHP 8.2 y la extensión `mysqli` para conexión con MySQL.

### db
- Imagen base: `mysql:8`
- Variables de entorno:
  - `MYSQL_ROOT_PASSWORD=root`
  - `MYSQL_DATABASE=testdb`
- Puerto publicado: `23306:3306` (modificado para evitar conflictos locales)
- Red: `redweb`

---

## Acceso desde el navegador
Aplicación web disponible en:  
[http://localhost:20080](http://localhost:20080)

---

## Conexión a MySQL
- Host: `127.0.0.1`  
- Puerto: `23306`  
- Usuario: `root`  
- Contraseña: `root`  
- Base de datos: `testdb`

---

## Imagen publicada en Docker Hub
Repositorio público de la imagen PHP personalizada:  
[https://hub.docker.com/r/iuntigabriel/app_devops-php](https://hub.docker.com/r/iuntigabriel/app_devops-php)

---

## Repositorio en GitHub
Código fuente y configuración de la práctica:  
[https://github.com/IuntiGabriel/devops-PFO2.git](https://github.com/IuntiGabriel/devops-PFO2.git)

---

## Utilización

Clonar el repositorio desde GitHub:
```bash
git clone https://github.com/IuntiGabriel/devops-PFO2.git
cd devops-PFO2
docker-compose build
docker-compose up -d




