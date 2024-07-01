#####APLICACION <INVENTARIO>
########################################################################################################################################
####INDICE
###DESCRIPCION
###REQUERIMIENTOS
##INSTALACION Y CONFIGURACION DE BASES DE DATOS
##INSTRUCCIONES DE USO
###PRUEBAS
########################################################################################################################################
###DESCRIPCION
#Esta aplicacion se construyo con el motivo de prueba tecnica para la empresa LAYER7 con motivo de demostracion de habilidad en entorno
de programacion LARAVEL

###REQUERIMIENTOS:
##LARAVEL 11
##COMPOSER
##SQLITE3
##NPM

###INSTALACION Y CONFIGURACION DE BASES DE DATOS


###INSTALACION Y CONFIGURACION DE BASES DE DATOS

##CONFIGURACION BASE DE DATOS
#DB_CONNECTION=sqlite
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=Localizar archivo database.sqlite que se encuentra dentro de la carpeta database y colocar ruta completa de dicho archivo en el archivo de configuracion.env
#DB_USERNAME=root
#DB_PASSWORD=

##Verificar que su compouser tenga libreria ui en caso de que no ejecutar el siguiente comando:
composer require laravel/ui

##ejecutar
npm run dev  de preferencia en consola secundaria a la del artisan
##instalacion de propiedades del NPM y librerias faltantes que utilize el proyecto
npm install
##Para inicializar la aplicacion ejecutar en consola comando
php artisan serve


###INSTRUCCIONES DE USO
##REGISTRO
#registre su usuario para poder ingresar a la aplicacion de inventario.
#una vez dentro se desplegara una lista de los productos que como usuario tiene registrados

##LOGIN
#Si ya cuenta con un usuario puede ingresar con el, colocando sus credenciales para acceder a la aplicacion.

##AGREGAR PRODUCTO
#se puede agregar productos dando click en el boton de agregar producto este desplegara un
#formulario el cual necesita rellenar para poder ingresar un producto nuevo presionando
#el boton de guardar
#una vez terminado de agregar sus productos dar click en el boton de regresar para volver a la lista de productos

##EDITAR PRODUCTO
#Se puede editar cada uno de los productos en el apartado de detalles, en este se puede visualizar el boton de editar
#al precionarlo puede visualizar los campos de producto que pueden ser editados, ingrese los nuevos valores y de click en el boton de guardar
#una vez terminado de haber editado los valores correctamente puede dar click en el boton de regresar para ver de nuevo la lista de productos

##ELIMINAR PRODUCTO
#se puede eliminar un producto dando click en el boton de eliminar el cual se encuentra en el apartado de detalles que tiene cada producto
#de la lista una vez presionado este desplegara un mensaje que si esta seguro de la eliminacion de dicho producto, no habra retorno de esa informacion
#al dar click en eliminar esta se borrara por completo

##USUARIO
#en el menu se puede apreciar el nombre de usuario, dar click en el boton de usuario para ver las opciones disponibles.

##SALIR
#de click en la opcion logout del usuario para salir del sistema de forma segura.

###PRUEBAS:
##Se hicieron pruebas de registros en la aplicacion de diversos usuarios de prueba.

###CREDITOS:
#GERARDO LEONARDO PUERTO RIEGOS

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


