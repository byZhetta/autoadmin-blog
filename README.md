<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Blog autoadministrable

## Descripción

Desarrollo de un blog con laravel y vite. Se utilizó para el frontend tailwind y alpine, además se integró livewire para la construcción de interfaces dinámicas y adminLTE3 para el dashboard de usuario, para almacenar datos de utilizó MySQL, la autenticación se realizó con jetstream. Para implementar los roles y permisos dentro del sistema se uso el paquete de laravel permission. Se crearon factorys como herramienta para generar datos de prueba.

El blog permite mostrar y filtrar todas las categorias disponibles, mostrar por etiquetas de los posts disponibles, además permite iniciar sesión y registrarse. Para la parte administrativa, se accede mediante permisos previamente asignados por el administrador principal del sistema, una vez ingresado se detallan las siguientes opciones:

- Usuarios: se detallan todos los usuarios disponibles y se le permite asignar un rol.
- Roles: se detallan los roles disponibles, como también se puede crear, editar y eliminar un rol.
- Categorías: se detallan todas las categorías y permite crear una nueva categoría, adicionalmente permite editar o eliminar dicha categoría.
- Etiquetas: se detallan todas las etiquetas desponibles y permite crear una nueva etiqueta, como también editar y eliminar una etiqueta.
- Lista de post: Se detallan todos los posts asociados a dicho usuario, el mismo puede ver, editar y eliminar un post.
- Crear nuevo post: se muestra un formulario para llenar con todos los datos para un nuevo post.

## Screenshots

|Pantalla Principal|Categoría|
|:----------------:|:-------:|
|![image1](https://res.cloudinary.com/dhpf7lthd/image/upload/v1682197020/projects/blogimg1_sqdv6f.jpg)|![image2](https://res.cloudinary.com/dhpf7lthd/image/upload/v1682197048/projects/blogimg2_ehhziq.jpg)| 

|Descripción|Dashboard|
|:---------:|:-------:|
|![image3](https://res.cloudinary.com/dhpf7lthd/image/upload/v1682197064/projects/blogimg3_dtczgd.jpg)|![image4](https://res.cloudinary.com/dhpf7lthd/image/upload/v1682197080/projects/blogimg4_yf0eqc.jpg)|  

## Instalación

```bash
git clone https://github.com/byZhetta/autoadmin-blog.git
cd autoadmin-blog
composer install
npm install
php artisan key:generate # genera automaticamente una key para la aplicación
```

### Migraciones

Luego de crear una base de datos y colocarla en el archivo `.env`, en la sección DB_DATABASE, continuar con las migraciones.

```bash
php artisan migrate
```

### Correr aplicación

```bash
php artisan serv # Correr el servidor
npm run dev # Correr los estilos de vite
```

## Tecnologías principales

- Laravel v10.3.3
- vite v4.2.0
- tailwindcss v3.1.0
- alpinejs v3.0.6
- nodejs v14.18.1

## Autor

[@byZhetta](https://github.com/byZhetta) - [MIT license](https://opensource.org/licenses/MIT). 
