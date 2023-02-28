# Gestor de cotizaciones
En este repositorio se encuentra un software destinado a la gestión de documentos relacionados a las cotizaciones que genera una empresa.

Las especificaciones y la arquitectura diseñada para el proyecto se encuentran en las siguientes ligas. [[SAD](https://docs.google.com/document/d/1QoEJ6ZdcmXwjTOQX5uS2afe99Ri4Mt2WRgwVkw90uV0/edit?usp=sharing "SAD"), [SRS](https://docs.google.com/document/d/1aqxYiGzyEf-DTz1IEu-IeKR4fjgVBwvdYePCAagYOqk/edit?usp=sharing "SRS")].

El proyecto puede ser descargado y se incluyen todos los archivos necesarios para poder realizar su ejecución. De igual forma, a continuación se indicará la serie de pasos para poder ejecutar el sistema en otros equipos.

### Requerimientos previos
- Contar con XAMPP en su versión v3.3.0 (PHP 8.0)
- Contar con MongoDB instalado
- Editor de texto o entorno de desarrollo (Se recomienda VSCode)

MongoDB y PHP requieren de una configuración especial para poder funcionar de manera  conjunta. Dicha configuración la puedes encontrar en el siguiente enlace [[Video](https://www.youtube.com/watch?v=pINgrJppImw "Video")].

Con esto terminado, podemos abrir la carpeta desde nuestro editor de texto y ejecutar la siguiente instrucción desde nuestra línea de comandos:

`composer require mongodb/mongodb`

Esto con la finalidad de obtener las dependencias que requiere nuestro proyecto.

### Configurando MongoDB
Deberemos instalar MongoDB en su versión community server y su herramienta de Compass también se deberá instalar (esta última solo en caso de querer utilizar interfaz visual).

La base de datos tendrá el nombre de cotizador y sus colecciones deberán ser levantamientos, materiales_electricos, materiales_red y usuarios. En el documento de SAD se encuentra el diagrama de la base de datos.

[![Imagen 1. Base de datos](https://www.linkpicture.com/q/1_1742.png "Foto")](https://www.linkpicture.com/q/1_1742.png "Foto")

[![Imagen 2. Levantamientos](https://www.linkpicture.com/q/2_1029.png "Imagen 2. Levantamientos")](https://www.linkpicture.com/q/2_1029.png "Imagen 2. Levantamientos")

[![Imagen 3. Materiales eléctricos](https://www.linkpicture.com/q/3_695.png "Imagen 3. Materiales electricos")](http://https://www.linkpicture.com/q/3_695.png "Imagen 3. Materiales electricos")

[![Imagen 4. Materiales de red](https://www.linkpicture.com/q/Captura-de-pantalla-2023-02-28-141823.png "Imagen 4. Materiales de red")](https://www.linkpicture.com/q/Captura-de-pantalla-2023-02-28-141823.png "Imagen 4. Materiales de red")

[![Imagen 5. Usuarios](https://www.linkpicture.com/q/5_376.png "Imagen 5. Usuarios")](https://www.linkpicture.com/q/5_376.png "Imagen 5. Usuarios")

NOTA: Para correr el proyecto debe de copiarse sobre la ruta htdocs de XAMPP. Además, se deberá ejecutar el servicio de Apache.

Con esto terminado podemos acceder al localhost de nuestro equipo en cualquier navegador y deberemos ser capaces de ver la ventana de login.

### Prueba de concepto

A continuación se muestran unas capturas sobre los módulos que se lograron poner a prueba y como estos se relacionan con la base de datos.

Lo primero que se buscó implementar es una simple pantalla de login la cual validara rápidamente, sin necesidad de tokens, si un usuario existe o no en la base de datos y de esta manera nos deje iniciar sesión, logrando así, acceder al cotizador.

[![Img 6. Login](https://www.linkpicture.com/q/6_303.png "Img 6. Login")](https://www.linkpicture.com/q/6_303.png "Img 6. Login")

Si ingresamos credenciales válidas podremos ver la siguiente interfaz. En esta se nos muestran los 3 módulos principales sobre los que se basa el sistema gestor de cotizaciones.

[![Img 7. Inicio](https://www.linkpicture.com/q/7_271.png "Img 7. Inicio")](https://www.linkpicture.com/q/7_271.png "Img 7. Inicio")

El único módulo que se implementó por cuestiones de tiempo fue el de levantamientos.

[![Img 8. Levantamientos](https://www.linkpicture.com/q/8_227.png "Img 8. Levantamientos")](https://www.linkpicture.com/q/8_227.png "Img 8. Levantamientos")

En este módulo ya existe una conexión hacia la base de datos, por que todo lo que exista en nuestra BD logrará ser mostrado en esta tabla.

Al querer ingresar una nueva cotización se nos muestra la siguiente ventana emergente.

[![Img 9. Nuevo levantamiento](https://www.linkpicture.com/q/9_191.png "Img 9. Nuevo levantamiento")](https://www.linkpicture.com/q/9_191.png "Img 9. Nuevo levantamiento")

En los campos que corresponden a los artículos se muestran listas ligadas a la base de datos (apuntando a las colecciones que les corresponde).

Esto sería toda la implementación que se logró avanzar por cuestiones de tiempo. 
