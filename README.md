## Acerca del Proyecto BackEnd

El proyecto construido con Laravel 8 fue basicamente la instalación de:
    xampp version 7.4.33
    composer apuntando a la ruta php.exe

Finalmente estan las rutas, controladores, modelos y migraciones.

Se requiere realizar antes de correr el programa.
    1. Ubicarse en la carpeta del proyecto
    2. Crear la base de datos mysql con el nombre "abitmedia"
    3. Poner las variables de entorno en el archivo env y guardar
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=abitmedia
        DB_USERNAME=root
        DB_PASSWORD=

    4. Abrir una terminal y correr el comando php artisan migrate
    5. Se migraran las bases para la persistencia de datos
    6. Ejecutar el comando "php artisan serve" para empezar el BackEnd




## Acerca del Proyecto FrontEnd

Primeramente debemos ubicar la carpeta "paginaFrontend" que esta en raiz y sacarla a otro lugar del proyecto donde el Backend y frontend esten en diferentes lugares.
El archivo index.html es uso de vue js
Por lo que para correr y simplificar las cosas tendremos que instalar
    1. Visual Estudio
    2. Dentro de Visual instalamos la extensión "Live Server"
    3. Dentro del index.html en visual Estudio damos click derecho 
    4. Presionamos la opción "Open with Live Server"
    5. Estará el Front End en el puerto 5500
