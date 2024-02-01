
#### Exam UNB




## Dependencias 

- Tener instalado Composer version 2.6.6 https://getcomposer.org/download/
- Tener instalado Node https://nodejs.org/en
- Tener instalado y en funcionamiento Mysql 






## Comandos en la terminal
Clonar el proyecto

```bash
  git clone https://github.com/mathiuzdev/Exam-UNB.git
```

Ubicarse en el directorio que se encuentre el proyecto

```bash
  cd Exam-UNB
```

Instalar dependencias

```bash
  composer install npm install
```




## Variable de entorno

Cuando clonen el proyecto, solo va a estar ".env.example", tendrán que copiar y pegar ese archivo y que quede solo como ".env" como se indica en la foto.



![App Screenshot](https://i.imgur.com/4ZUIfow.jpeg)


## Generar key

Una vez teniendo el archivo ".env" habrá que lanzar este comando en la terminal.

```bash
  php artisan key:generate
```

## Asociar base de datos

Cambiar las variables de entorno en el archivo ".env" haciendo referencia a nuestra base de datos.

![App Screenshot](https://i.imgur.com/g9aOcCV.png)

## Migrar la base de datos

Una vez teniendo en funcionamiento nuestra base de datos, escribir el siguiente comando.

```bash
  php artisan migrate
```

## Ejecutar el proyecto

Por último para levantar el servidor escribir estos últimos dos comandos

```bash
  php artisan serve
```

```bash
  npm run dev
```



