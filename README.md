<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Self-Managed Blog

## Description

Development of a blog with laravel and vite. It was used for the tailwind and alpine frontend, in addition livewire was integrated for the construction of dynamic interfaces and adminLTE3 for the user dashboard, to store data of MySQL, the authentication was carried out with jetstream. To implement the roles and permissions within the system, the laravel permission package was used. Factorys were created as a tool to generate test data.

The blog allows to show and filter all available categories, show by tags of available posts, also allows you to log in and register. For the administrative part, it is accessed through permissions previously assigned by the main administrator of the system, once entered the following options are detailed:

- Users: All available users are listed and you are allowed to assign a role.
- Roles: The available roles are detailed, as well as you can create, edit, and delete a role.
- Categories: All categories are detailed and allows you to create a new category, additionally allows you to edit or remove this category. 
- Tags: All removable labels are detailed and allows you to create a new label, as well as edit and remove a tag.
- Post list: All posts associated with that user are detailed, he can view, edit and delete a post. 
- Create new post: A form is displayed to fill in with all the data for a new post.

## Screenshots

|Main screen|Category|
|:----------------:|:-------:|
|![image1](https://res.cloudinary.com/dhpf7lthd/image/upload/v1682197020/projects/blogimg1_sqdv6f.jpg)|![image2](https://res.cloudinary.com/dhpf7lthd/image/upload/v1682197048/projects/blogimg2_ehhziq.jpg)| 

|Description|Dashboard|
|:---------:|:-------:|
|![image3](https://res.cloudinary.com/dhpf7lthd/image/upload/v1682197064/projects/blogimg3_dtczgd.jpg)|![image4](https://res.cloudinary.com/dhpf7lthd/image/upload/v1682197080/projects/blogimg4_yf0eqc.jpg)|  

## Installation

```bash
git clone https://github.com/byZhetta/autoadmin-blog.git
cd autoadmin-blog
composer install
npm install
php artisan key:generate # genera automaticamente una key para la aplicación
```

### Migration

After creating a database and placing it in the `.env` file, in the DB_DATABASE section, proceed with the migrations.

```bash
php artisan migrate
```

### Run app

```bash
php artisan serv # Correr el servidor
npm run dev # Correr los estilos de vite
```

## Technologies

- Laravel v10.3.3
- vite v4.2.0
- tailwindcss v3.1.0
- alpinejs v3.0.6
- nodejs v14.18.1

## Author

[@byZhetta](https://github.com/byZhetta) - [MIT license](https://opensource.org/licenses/MIT). 
