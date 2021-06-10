# CRUD-Contenido-y-apunte
Repositorio de documentos php, para la creación de una pagina web vinculada a una base de datos mysql mediante WAMP(apache).

Paso a paso.
1.-Primero que nada se debe tener instalado WAMP o XAMP.
2.-Una vez instalado se debe abrir WAMP o XAMP para iniciar los servicios que otorgan ( servidor y base de datos).
3.-Luego se debe ingresar a localhost/phpmyadmnin e ingresar o crear un usuario para utilizar la base de datos.
4.-Si desea solo ingresar debe utilizar los siguientes datos 
 usuario = "root"
 contraseña= ""
5. Una vez dentro debe crear una base de datos (el nombre es a su elección).
6. Dentro de su base de datos debe ingresar la siguiente consulta:
   CREATE TABLE CONTENIDO 
(
	ID INTEGER NOT NULL,
	NOMBRE VARCHAR(200),
	DESCRIPCION TEXT,
	FECHA_CREACION DATETIME,
	FECHA_ACTUALIZACION DATETIME
);
ALTER TABLE CONTENIDO ADD CONSTRAINT CONTENIDO_PK PRIMARY KEY (ID_CONTENIDO);

CREATE TABLE APUNTE
(
	ID INTEGER NOT NULL,
	CONTENIDO_ID INTEGER,
	NOMBRE VARCHAR(200),
	URL VARCHAR(200),
	FECHA_CREACION DATETIME,
	FECHA_ACTUALIZACION DATETIME
); 
ALTER TABLE APUNTE ADD CONSTRAINT APUNTE_PK PRIMARY KEY (ID_APUNTE);
ALTER TABLE APUNTE ADD CONSTRAINT CONTENIDO_APUNTE_FK FOREIGN KEY (CONTENIDO_ID) REFERENCES CONTENIDO(ID);

CREATE TABLE APUNTE_TIPO
(
	ID INTEGER NOT NULL,
	NOMBRE VARCHAR(200),
	FECHA_CREACION DATETIME,
	FECHA_ACTUALIZACION DATETIME,
);	
ALTER TABLE APUNTE_TIPO ADD CONSTRAINT APUNTE_TIPO_PK PRIMARY KEY (ID_APUNTE_TIPO);
ALTER TABLE APUNTE_TIPO ADD CONSTRAINT APUNTE_TIPO_APUNTE_FK FOREIGN KEY (ID) REFERENCES APUNTE(TIPO);

CREATE TABLE USUARIO 
(
	ID INTEGER NOT NULL,
	EMAIL VARCHAR(300),
	CODIGO VARCHAR(300),
	FECHA_CREACION DATETIME,
	FECHA_ACTUALIZACION DATETIME,
	FECHA_CODIGO DATETIME
);
ALTER TABLE ID_USUARIO ADD CONSTRAINT USUARIO_PK PRIMARY KEY (ID);
7.- Si tiene problemas con ingresar la consulta , la interfaz de mysqli le dara la opción de ingresar las tablas una por una (esa opcion se utilizo en nuestro proyecto).
8.- Luego de crear las tablas se debe actualizar cada id de las tablas para que tengan la caracteristica de auto_increment.
9.- Si se realizaron los pasos correctamente la pagina deberia funcionar correctamente, en caso de no funcionar la pagina, crear las tablas otra vez mediante la opcion de mysqli para evitar fallos.

