# Cómo ejecutar el código

    - abrimos una terminal y nos posicionamos en el directorio public. Desde ahí, ejecutar un servidor web
    $ php -S localhost:8000 -t .

    - con Postman, hacemos una petición POST a http://localhost:8000/index.php?action=login


# Cómo depurar el código con Xdebug

    - abrimos una terminal y nos posicionamos en el directorio public. Desde ahí, ejecutar un servidor web
    $ php -S localhost:8000 -t .

    - ejecutamos el depurador con la opción Listen for Xdebug. La configuración de launch.json es esta:

        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003
        }

    - con Postman, hacemos una petición POST a http://localhost:8000/index.php?action=login