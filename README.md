# Proyecto_2ev

Mejoras Obligatorias Implementadas:

1. Control de acceso 
•	Inicio de sesión mediante usuario y contraseña.
•	Validación de credenciales contra la base de datos.
•	Almacenamiento de contraseñas utilizando contraseña cifrada (password_hash).
•	Acceso restringido: El usuario debe autenticarse para acceder a todo el contenido de la aplicación.
•	Control de sesión: Si el usuario no interactúa durante 10 minutos, la sesión expira y el usuario debe volver a identificarse.
•	Cierre de sesión disponible en cualquier momento, mediante un botón que redirige al formulario de login.

2. Visualización de información almacenada en la base de datos
Una vez autenticado, el usuario puede acceder al contenido:
•	Datos obtenidos desde la base de datos (usuarios).
•	Imágenes cargadas desde ficheros auxiliares.
•	Las secciones de galería y blog se generan de forma dinámica a través del contenido de la base de datos.


Mejoras Optativas Implementadas:

3. Registro de nuevos usuarios 
La aplicación permite crear nuevas cuentas mediante un formulario de registro. Las contraseñas se almacenan cifradas y se comprueba que no existan usuarios duplicados.

4. Gestión de contenido 
Los usuarios autenticados con permisos pueden:
•	Añadir imágenes
•	Modificar imágenes
•	Eliminar imágenes

5. Acceso como invitado 
Se ha añadido un modo invitado, que permite acceder a una versión limitada de la web: El invitado solo puede ver la sección de home.
