To make it work you need a database with this two tables

- Table ejercicios, with this fields: "ejercicio" (which contains the name of the exercise you want to book)
and "reservado" (which is a boolean field to know if the exercise is already booked or not)

- Table usuarios to login and begin to use the application. This table contains two fields: "usuario"
- (which is the name of the user to login) and "password.

Of course, you need to change the variable "$con" with the information of the database that you are using.

--------------------------------------------------------------------------------------------------------------------

Para hacer que funcione necesitas una base de datos con dos tablas.

-Tabla ejercicios que tiene los siguientes campos: "ejercicio" (contiene el nombre del ejercicio que quieres
reservar) y el campo "reservado" (es de tipo boolean y sirve para saber si un ejercicio está o no reservado).

-Tabla usuarios para conectarte y poder usar la aplicación. Esta tabla contiene otros dos campos: el campo
"usuario" (que es el nombre de usuario para conectarte) y el campo password que es la contraseña de usuario.

Por supuesto, tienes que modificar el valor de la variable "$con" con la información necesaria para conectarte
a tu base de datos.
