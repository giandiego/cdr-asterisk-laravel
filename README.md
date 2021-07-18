# CDR LARAVEL CURSO ASTERISK (CENTOS 7 - PHP 7.4)

El siguiente ejemplo puede cambiar según el desarrollo, en este caso la instalación sería la siguiente:

Actualizar mariadb:

```bash
tee /etc/yum.repos.d/MariaDB.repo<<EOF 
[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.4/centos7-amd64
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1
EOF
```

```bash
yum makecache fast
yum -y install MariaDB-server MariaDB-client
systemctl enable --now mariadb
```


Instalamos dependencias: php y composer.

```bash
sudo yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm
yum install -y yum-utils
yum-config-manager --enable remi-php74
yum update -y
yum install -y php php-fpm php-common php-xml php-mbstring php-json php-zip mariadb-server php-mysqlnd php-mysql php-mcrypt
php -v
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/bin/composer
chmod +x /usr/bin/composer
```
Descargamos las fuentes:

```bash
cd /opt/
git clone https://github.com/giandiego/cdr-asterisk-laravel.git
cd cdr-asterisk-laravel
cp .env.example .env

#Antes de estos pasos validar la información en .env
composer install
php artisan migrate --seed
php artisan key:generate
php artisan storage:link
```

Para ingresar a la interfaz web lo podemos hacer usando laravel, con el comando "php artisan serve", tener en cuenta que se debe desactivar el firewall o agregar el puerto 8000.

```bash
php artisan serve --host=localhost
```
`(*) Remplazar localhost por la ip del servidor`

Ingresar por web con los datos: admin@admin.com - password

#Agregar cambios a GITHUB

```bash
git add .
commit -m "fix tittle"
git push
```
#Obtener los cambios en producción

```bash
git pull
```

# Info
Gian Diego Javes Leccas
cel: +51989929541
