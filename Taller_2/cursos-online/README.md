Al clonar este repositorio no olvidar el archivo .env
ademas de crear la base de datos y despues correr estos codigos:

- intalar la carpeta vendor <code>composer instal</code
- php artisan migrate:fresh
- php artisan db:seed
- instalar laravel/ui con <code> composer require laravel/ui </code>
- intalar boobtrap --auth <code> php artisan ui bootstrap --auth  </code>
- en caso de ser nesesario editar el archivo vite.config 
<code>
    resolve : {
        alias : {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    }
</code>
- instalar npm <code>npm install</code>
- correr el codigo <code> npm run build </code>
- correr el codigo <code> npm run dev </code>
- correr el codigo  para generar una clave <code> php artisan key:generate </code>
- Inicializar el servidor <code> php artisan serve </code>
