# Curso de Laravel Devjobs

## Localizacion del curso

[Link a Udemy](https://www.udemy.com/course/curso-laravel-crea-aplicaciones-y-sitios-web-con-php-y-mvc)
por Juan Pablo De la torre Valdez

## Pasos para iniciar laravel

<p>Podriamos inicializarlo con ./vendor/sail up</p>
<p>O directamente levantando el docker compose up</p>
<h4>Para crear un alias en la base de wsl para iniciar los contenedores de devstagram</h4>
<pre>alias devstagram='dir=$(pwd); cd _projects/Laravel9-Php8-MVC/devstagram && [ -f sail ] && sh sail up || sh vendor/bin/sail up; cd $dir'</pre>

## Traducir los lang al español

Desde consola usando la libreria [Laravel Lang](https://github.com/Laravel-Lang/lang)

```bash
sail composer require --dev laravel-lang/common
sail artisan lang:add es
```

o combinandola con [MarcoGomesr
/
laravel-validation-en-espanol](https://github.com/MarcoGomesr/laravel-validation-en-espanol)

```bash
git clone https://github.com/MarcoGomesr/laravel-validation-en-espanol.git lang/
```

### **Y si deseamos que el español este por defecto**

En la carpeta <code>/config/app.php</code> remplazar la variable <code>'locale' => 'en'
</code> por <code>'locale' => 'es'</code>

## Despliegue en DomCloud

Sin deploy por el momento

<https://my.domcloud.co/user/host/> <- Panel de deploy in domcloud

## Si queremos hacer un deploy completo borrando base de datos

```deployment
features:
  -
    create:
      domain: cartago-devstagram.domcloud.io
      user: cartago-devstagram
      pass: MN-84tox-k22_Aq9BB
      email: cv2mario@gmail.com
  - 'php latest'
  - mysql
  - ssl
  - 'ssl always'
nginx:
  root: public_html/public
  fastcgi: 'on'
  locations:
    -
      match: /
      try_files: '$uri $uri/ /index.php$is_args$args'
commands:
  - 'cp .env.example .env'
  - 'sed -i "s/DB_HOST=127.0.0.1/DB_HOST=localhost/g" .env'
  - 'sed -ri "s/DB_DATABASE=.*/DB_DATABASE=${DATABASE}/g" .env'
  - 'sed -ri "s/DB_USERNAME=.*/DB_USERNAME=${USERNAME}/g" .env'
  - 'sed -ri "s/DB_PASSWORD=.*/DB_PASSWORD=${PASSWORD}/g" .env'
  - 'sed -ri "s/APP_URL=.*/APP_URL=http:\/\/${DOMAIN}/g" .env'
  - 'composer install'
  - 'php artisan migrate:fresh || true'
  - 'php artisan key:generate'
  - 'php artisan storage:link'
source: 'https://github.com/CartagoGit/Curso-Laravel-devstagram.git'
```

## Para hacer deploy sin borrar la BD en domcloud

`````deployment
features:
  - ssl
  - 'ssl always'
nginx:
  root: public_html/public
  fastcgi: 'on'
  locations:
    -
      match: /
      try_files: '$uri $uri/ /index.php$is_args$args'
commands:
  - 'cp .env.example .env'
  - 'sed -i "s/DB_HOST=127.0.0.1/DB_HOST=localhost/g" .env'
  - 'sed -ri "s/DB_DATABASE=.*/DB_DATABASE=${DATABASE}/g" .env'
  - 'sed -ri "s/DB_USERNAME=.*/DB_USERNAME=${USERNAME}/g" .env'
  - 'sed -ri "s/DB_PASSWORD=.*/DB_PASSWORD=${PASSWORD}/g" .env'
  - 'sed -ri "s/APP_URL=.*/APP_URL=http:\/\/${DOMAIN}/g" .env'
  - 'composer install'
  - 'php artisan key:generate'
  - 'php artisan storage:link'
source: 'https://github.com/CartagoGit/Curso-Laravel-devstagram.git'````
`````
