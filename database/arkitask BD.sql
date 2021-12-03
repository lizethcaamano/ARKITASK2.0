drop database JCCC;
-- creamos la basede datos JCCC
create database JCCC;
use JCCC;

-- Creacion de tablas


-- Tabla Usuario

create table usuario (
IdUsuario int primary key auto_increment not null,
Nombre varchar(40) not null,
Apellido varchar (40) not null,
email varchar (40) unique not null,
NumeroDocumento int unique not null,
FechaNacimiento date not null,
Telefono varchar (13) unique not null,
password varchar (250) ,
Estado varchar (10) ,
Imagen varchar (50) 
 );
 
 
 -- Tabla Grupos de trabajo
 create table GrupoTrabajo (
IdGrupo int primary key auto_increment not null,
CodigoGrupo varchar (40) unique not null,
FechaInicio date not null,
FechaDesactivacion date not null
 );
 

-- Tabla Catalogo

 create table Catalogo (
IdCatalogo int primary key auto_increment not null,
NombreParticipantes varchar (150),
EmpresaContratante varchar (50) not null,
Area varchar (30) 
 );
 




-- Tabla Rol
 create table Rol (
IdRol int primary key auto_increment not null,
NombreRol varchar (25)  not null
 );
 


-- Tipo de proyecto

 create table TipoProyecto (
IdTipoProyecto int primary key auto_increment not null,
NombreTipoProyecto varchar (30) not null
 );
 
 
 -- Imagen
 
  create table Imagen (
IdImagen int primary key auto_increment not null,
URLimagen varchar (50) not null,
IdCatalogoFK INT not null
 );
 
 
 
 -- Tabla Asignar Rol
 
  create table AsignarRol (
  IdAsignarRol int primary key auto_increment,
  IdUsuarioFK int not null,
  IdRolFK int not null
 );
 
 -- Tabla Asistencia
 
create table Asistencia (
IdAsistencia int primary key auto_increment not null,
FechaIngreso date not null,
HoraIngreso time not null,
FechaSalida date not null,
HoraSalida time not null,
IdUsuarioFK int not null
);



-- Tabla Seguimiento de Proyecto--
create table SeguimientoProyecto(
IdSeguimiento int primary Key auto_increment,
IdUsuarioFK int not null,
IdGrupoFK int not null,
IdActividadesFK INT
);

-- Tabla Actividades--
create table Actividades(
IdActividad int primary key auto_increment not null,
NombreActividad varchar(50) ,
Descripcion varchar(100) not null,
FechadePublicacion date not null,
FechalimitedeEntrega date not null,
Estado varchar(15) not null,
IdProyectoFK int
);

-- Tabla Archivo Solucion--
create table ArchivoSolucion (
IdArchivo int primary key auto_increment not null,
IdUsuarioFK int ,
IdActividadesFK int ,
FechaEntrega date ,
URLarchivo varchar(255) not null,
comentariosEntrega varchar(60),
Estado varchar (15)
);




-- Tabla Proyecto--
create table Proyecto(
IdProyecto int primary key auto_increment ,
NombreProyecto varchar(40)  ,
FechaRealizacion date  ,
CodigoProyecto varchar(30) unique ,
FechaEntrega date ,
Estado varchar(15) ,
Descripcion varchar (250),
IdCatalogoFK int ,
IdGrupoFK int ,
IdTipoProyectoFK int
);

-- Tabla Encargado de Proyecto--
create table EncargadoProyecto(
IdEncargado int primary key auto_increment not null,
FechaInicio date not NULL,
FechaFinal date not null,
Observaciones varchar(100) not null,
IdProyectoFK int not null,
IdUsuarioFK int 
);

-- Relaciones --

-- Imagen (IdCatalogoFK) y catalogo

alter TABLE IMAGEN add
CONSTRAINT IdCatalogoFK
 foreign key (IdCatalogoFK)
 references Catalogo (IdCatalogo);
 
 -- Asignar Rol (IdUsuarioFK) y Usuario
 
 alter TABLE AsignarRol add
CONSTRAINT RolUsuarioFK
 foreign key (IdUsuarioFK)
 references usuario (IdUsuario);
 
 -- Asignar Rol (IdRolFK) y Rol
  alter TABLE AsignarRol add
CONSTRAINT AsigRolFK
 foreign key (IdRolFK)
 references Rol (IdRol);
 
 

 -- Asistencia (IdUsuarioFK) y Usuario
  alter TABLE Asistencia add
CONSTRAINT AsistenciaUsuarioFK
 foreign key (IdUsuarioFK)
 references usuario (IdUsuario);
 

 
 

 
 
 -- SeguimientoProyecto (IdGrupoFK) y Grupos
    alter TABLE SeguimientoProyecto add
CONSTRAINT SeguimientoProGruposFK
 foreign key (IdGrupoFK)
 references GrupoTrabajo (IdGrupo);
 
  -- Seguimiento Proyecto (IdUsuarioFK) y Usuario
     alter TABLE SeguimientoProyecto add
CONSTRAINT SeguimientoProUsuario
 foreign key (IdUsuarioFK)
 references usuario (IdUsuario);
  
  -- Archivo Solucion (IdActividadFK) y Actividades
  
alter table ArchivoSolucion
add constraint ArchivoActividadesFK
foreign key (IdActividadesFK)
references Actividades (IdActividad);

-- (IdUsuarioFK) y Usuario
/*
alter table Proyecto
add constraint ProyectoUsuarioFK
foreign key (IdUsuarioFK)
references usuario (IdUsuario);
*/

-- Proyecto (IdGrupoFK) y Grupo de trabajo


alter table Proyecto
add constraint ProyectoGrupoTrab
foreign key (IdGrupoFK)
references GrupoTrabajo (IdGrupo);
 
 
 -- Proyecto (IdTipoProyectoFK) y Tipo de Proyecto
 alter table Proyecto
add constraint ProyectoTipoProyecto
foreign key (IdTipoProyectofk)
references TipoProyecto (IdTipoProyecto);
 
 -- Proyecto (IdCatalogoFK) y Catalogo
 
  alter table Proyecto
add constraint ProyectoCatalogo
foreign key (IdCatalogoFK)
references Catalogo (IdCatalogo);


-- Encargado de proyecto (IdUsuarioFK) y usuario

alter table EncargadoProyecto
add constraint EncargadoUsuario
foreign key (IdUsuarioFK)
references usuario (idUsuario);


-- Encargado de proyecto (IdProyectoFK) y Proyecto
alter table EncargadoProyecto
add constraint EncargadoProyecto
foreign key (IdProyectoFK)
references Proyecto (IdProyecto);

-- Seguimiento de proyecto y actividades
/*alter table Actividades
add constraint ActiSegui
foreign key (IdSeguimientoFK)
references SeguimientoProyecto (IdSeguimiento);*/


-- Seguimiento de proyecto y actividades
alter table SeguimientoProyecto
add constraint SeguiActi
foreign key (IdActividadesFK)
references Actividades (IdActividad);

-- Proyecto  y actividades
 alter table Actividades
add constraint ActividadProyecto
foreign key (IdProyectoFK)
references Proyecto (IdProyecto);




-- Insertar datos --

-- Grupos de Trabajo

select * from GrupoTrabajo;


insert into GrupoTrabajo (CodigoGrupo,FechaInicio,FechaDesactivacion) values 
('01','2021-05-11','2021-05-18'),
('02','2021-05-06','2021-07-28'),
('03','2021-04-08','2021-05-08'),
('04','2021-03-08','2021-04-10'),
('05','2021-02-08','2021-03-11');


-- Catalogo -----------------------
Select * from Catalogo;
insert into Catalogo (NombreParticipantes, EmpresaContratante, Area ) values
('Lizeth Daniela Caamaño,Diana Khaterin Sanchez,Ruth Daniela Bertran,Johan Santiago Garavito','Colpatria','22*45^2'),
('Nataly Garavito, Juan Carlos Cortes,Maria Gomez','Jumbo','1500*300^2'),
('Heidy Julieth Garavito,Tatiana Lopez,Eduardo Caldo','Restaurante Don Jose','1800*600^2'),
('Jose Antonio Perez, Luisa Fernanda Cruz, Sofia Rodriguez','Nasa','2000*1000^2'),
('Nicolas Andres Rosero,Julio Luis Monterey','Colombina','800*600^2');



-- TipoProyecto ------------------------------------
select * from TipoProyecto;
insert into TipoProyecto (NombreTipoProyecto) values
('Comunitario'),
('Educativo'),
('Residenciales'),
('Estatales'),
('Hidraulalicas'),
('Salud'),
('Comercial');


-- usuario -------------


select * from usuario ;

Insert into usuario (Nombre, Apellido, email,NumeroDocumento,FechaNacimiento,Telefono,password,Estado,Imagen) values
( 'Lizeth', 'Cruz ','ldcaamano@misena.edu.co','52012354','1996-04-19',',3407630216' ,'$2y$10$L1zS8SlfAHXKuLz01sRY4.iVdDx6fabIp8F22xKUystlONvM67qXy', 'activo', 'img/imagenperfil/kathe.jpg'),
( 'Johan', 'Garavito', 'jsgaravito90@misena.edu.co', '54012844','1990-09-30', '329678345', '$2y$10$L1zS8SlfAHXKuLz01sRY4.iVdDx6fabIp8F22xKUystlONvM67qXy', 'activo', 'img/imagenperfil/petro.jpg'),
( 'Diana', 'Sanchez', 'dksanchez476@misena.edu.co','1026456013','2000-10-28', '3107830130','$2y$10$L1zS8SlfAHXKuLz01sRY4.iVdDx6fabIp8F22xKUystlONvM67qXy','inactivo', 'img/imagenperfil/daniela.jpg'),
( 'Daniela', 'Beltran', 'rdbeltran164@misena.edu.co', '1044899453','2000-03-13', '3408935130', '$2y$10$L1zS8SlfAHXKuLz01sRY4.iVdDx6fabIp8F22xKUystlONvM67qXy', 'activo', 'img/imagenperfil/andres.jpg'),
('Claudia flor', 'Pacheco', 'pachecoflor@gmail.com' , '539014993','1990-07-20','3125562530','$2y$10$L1zS8SlfAHXKuLz01sRY4.iVdDx6fabIp8F22xKUystlONvM67qXy', 'activo', 'img/imagenperfil/claudia.jpg'),
('Marina Calzado', 'Arevalo', 'marinacalzado@gmail.com' , '519014993','1990-07-20','3135562530','$2y$10$L1zS8SlfAHXKuLz01sRY4.iVdDx6fabIp8F22xKUystlONvM67qXy', 'activo', 'img/imagenperfil/claudia.jpg');

-- PROYECTO-------------- 
SELECT * FROM Proyecto;
insert into Proyecto ( NombreProyecto, FechaRealizacion, CodigoProyecto, FechaEntrega, Estado, IdCatalogoFK,IdGrupoFK, IdTipoProyectoFK) Values
('Colegio Millenials', '2020-04-05', 'Col200', '2020-05-12', 'Terminado','1','1','1'),
('Arquitectura Centro Americas', '2021-04-05', 'CA2021', '2021-12-12', 'Proceso', '2', '2', '2'),
('Conjuntos La Pasca', '2021-12-06', 'Con021', '2022-02-12', 'Pendiente', '3', '3', '3'),
('Casa Quinta La violeta', '2022-04-20', 'Caqui2', '2022-06-19', 'Pendiente', '4', '4', '4'),
('Estructura La playita hotel', '2021-04-20-', 'PlayHo', '2021-05-27', 'Terminado', '5', '5', '5');

-- Actividades --------------------

select * from Actividades;

insert into Actividades (NombreActividad,Descripcion,FechadePublicacion,FechalimitedeEntrega,Estado, IdProyectoFK) values
('Estructura Hidraulica','Columnas de 35*35','2021-02-03','2021-02-10','Pendiente', '1'),
('Paredes traseras','Revisar y ajustar  Zapatas de acuerdo a la hoja de diseño','2021-01-07','2021-02-03','Terminado', '2'),
('Escaleras principales','Dibujar vigas','2021-02-06','2021-03-03','Terminado', '3'),
('Fachadas','Poner cotas e indicativos de placas','2021-03-04','2021-04-03','Terminado', '4'),
('Escaleras de emergencia','Realizar cortes de escaleras','2021-04-02','2021-05-03','Pendiente', '5');






-- Asistencia --------------
select * from Asistencia;
insert into Asistencia (FechaIngreso, HoraIngreso, FechaSalida, HoraSalida, IdUsuarioFK) value 
( '2021-04-10', '18:30:50', '2021-04-10', ' 18:30:04', '1'),
( '2021-05-10', '20:40:50', '2021-05-11', ' 3:00:04', '2'),
( '2021-06-10', '14:50:50', '2021-06-10', ' 18:40:04', '3'),
( '2021-07-10', '2:09:50', '2021-07-10', ' 7:30:04', '4'),
( '2021-08-10', '7:45:50', '2021-08-10', ' 14:14:04', '5');





-- imagen -----------

select * from imagen;
Insert into imagen (URLimagen,IdCatalogoFK) values
 ('img/imagenCatalogo/ima10.jpg', '1'),
( 'img/imagenCatalogo/ima11.jpg', '2'), 
( 'img/imagenCatalogo/ima12.jpg', '3'),
( 'img/imagenCatalogo/ima13.png', '4'),
( 'img/imagenCatalogo/ima14.png', '5');


-- seguimientoproyecto -------------
select * from SeguimientoProyecto;
Insert into SeguimientoProyecto (IdUsuarioFK,IdGrupoFK,IdActividadesFK) values 
('1', '1','1'), 
('2', '2','2'), 
('3', '3','3'), 
('4', '4','4'), 
('5', '5','5');
 
 

-- ROL: ------------------
select * from Rol;
insert into Rol (IdRol, NombreRol) values 
('1','Gerente'),
('2','Administrador'),
('3','Ingeniero'),
('4','Encargado Proyecto'),
('5','Delineante');


-- ASIGNAR ROL------------------
select * from AsignarRol; 
insert into AsignarRol (IdUsuarioFK,IdRolFK) values 
('1','1'),
('2','2'),
('3','3'),
('4','4'),
('5','5');





-- ARCHIVO SOLUCION ---------

select * from ArchivoSolucion;
insert into ArchivoSolucion (IdUsuarioFK,IdActividadesFK,FechaEntrega,URLarchivo,Estado) values
('1','1', '2021-06-14', 'archivo/Planos3D.png','Publicado'),
('2','2', '2021-08-18', 'archivo/PlanosColegio.pdf', 'Desaprobado' ),
('3','3', '2021-04-25', 'archivo/Arquitectura.rar', 'Aprobado' ),
('4','4', '2021-12-24', 'archivo/EstructuraPabellón.rar', 'Tardio' ),
('5','5', '2021-08-18', 'archivo/PlanosColegio.pdf', 'Aprobado' );




 
 
-- EncargadoProyecto ----------------------------------
select * from EncargadoProyecto;
insert into EncargadoProyecto (FechaInicio,FechaFinal,Observaciones,IdProyectoFK,IdUsuarioFK) values
('2020-05-19', '2020-07-20', 'el nivel del segundo piso no coincide con arquitectura','1', '1'),
('2020-10-25', '2021-01-13', 'El nombre del revisor estructural no es el correcto , rectificar', '2', '2'),
('2020-04-10', '2020-09-14', 'Revisar parametros sismicos no coinciden con estudios de suelos', '3', '3');

select * from usuario;



-- --------------------------------------------Vistas----------------------
-- Vista Consultar catalogos --
create view Consultar_Catalogos as select NombreProyecto,FechaEntrega as Fecha_de_realizacion,NombreParticipantes,EmpresaContratante,Area,URLImagen from 
Catalogo as c inner join 
imagen as i
inner join Proyecto as p on p.IdProyecto=i.IdImagen on p.IdProyecto=c.IdCatalogo;
select * from Consultar_Catalogos;

-- Vista  Consultar Proyectos

create view Consultar_Proyectos as select CodigoProyecto,CodigoGrupo,NombreProyecto,NombreTipoProyecto,Estado,FechaEntrega from
 GrupoTrabajo as g inner join
 TipoProyecto as t inner join 
 Proyecto as pr   on pr.IdProyecto=t.IdTipoProyecto on pr.IdProyecto=g.IdGrupo ;

 select * from Consultar_Proyectos;

-- vista ProyectosTerminados--

create view ProyectosTerminados as  select * from Proyecto where Estado='Terminado';

 
 
 
 -- Procedimientos Almacenados-------------------
 
 -- Crear Grupos de trabajo 

Delimiter $$
CREATE  PROCEDURE CrearGrupoTrabajo(
CodigoGrupoU VARCHAR (40),
FechaInicioU date,
FechaDesactivacionU date)
BEGIN
insert into GrupoTrabajo (CodigoGrupo,FechaInicio,FechaDesactivacion) VALUES (CodigoGrupoU,FechaInicioU,FechaDesactivacionU);
END $$
Delimiter $$;

call CrearGrupoTrabajo ('7','2021-05-06','2021-05-28');
select * from GrupoTrabajo;

-- Modificar estado de Proyecto

delimiter $$
CREATE PROCEDURE ModificarEstado(in IdProyectoU int,
in EstadoU varchar (40))
BEGIN

update
Proyecto
set 
Estado = EstadoU
where
IdProyecto= IdProyectoU;

END $$
delimiter $$

call ModificarEstado ('1','Proceso');

select * from Proyecto;



-- Trigger Historial Encargado Proyecto;









-- ruth--------------
-- view---------
create view mostrar_actividades as select CodigoGrupo,FechaInicio,FechaDesactivacion,NombreProyecto,CodigoProyecto,FechaRealizacion,FechaEntrega,Estado
 from GrupoTrabajo as G inner join Proyecto as P on G.IdGrupo=P.IdProyecto; 

select*from mostrar_actividades;
select*from encargadoProyecto; 
-- Procedimientos almacenados ----
select * from actividades;
-- Crear_Asistencia
delimiter $$
CREATE  PROCEDURE crear_asistencias(in IdAsistencia1 int, fecha_hora_ingreso datetime, fecha_hora_salida datetime, IdUsuarioFK1  int)
BEGIN
insert into Asistencia (IdAsistencia, FechaHoraIngreso, FechaHoraSalida, IdUsuarioFK) values
 (IdAsistencia1,fecha_hora_ingreso ,fecha_hora_salida ,IdUsuarioFK1);
END $$
delimiter $$;
call crear_asistencias ('','2021-02-19 12:05:00','2021-02-19 17:05:52','6');

-- crear encargado de proyecto
delimiter $$
CREATE  PROCEDURE crear_encargado(fecha_inicio date, fecha_fin date, observacioness varchar(100), idProyectoFK1 int, idUsuario1 int)
BEGIN
 insert into EncargadoProyecto (FechaInicio, FechaFinal, Observaciones, IdProyectoFK, IdUsuarioFK) values
 (nombre_encargado,fecha_inicio,fecha_fin,observacioness,idProyectoFK1,idUsuario1);
END $$
delimiter $$
call crear_encargado ('Lizkasaru Gomez','2020-05-19','2021-02-12','Poner cuidado en el diseño','4','4');


select * from asistencia;

select NombreProyecto from proyecto;




-- Procedimientos almacenados --------------------

Delimiter $$
Create Procedure  InsertDatosUsuario (

PIdUsuario int,
PNombre varchar(40),
PApellido varchar (40),
PCorreo varchar (40),
PNumeroDocumento int,
PFechaNacimiento date,
PTelefono varchar (13),
PNombreUsuario varchar (40),
PContraseña varchar (16),
PEstado varchar (10),
PImagen BLOB
)

Begin

Insert into Usuario (IdUsuario, Nombre, Apellido, Correo, NumeroDocumento, FechaNacimiento, Telefono, NombreUsuario, Contraseña, Estado, Imagen ) 
values (PIdUsuario, PNombre, PApellido, PCorreo, PNumeroDocumento, PFechaNacimiento, PTelefono, PNombreUsuario, PContraseña, PEstado, PImagen);

END $$

CALL DatosUsuario ('', 'Kyliam', 'Sanchez', 'kyliam23@gmail.com', '1026450366', '2021-04-03', '3407654623', 'KyliamA', 'K12345', 'Activo', 'img/imagenperfil/Kyliam.jcc');

select * from Usuario;

Delimiter $$
Create Procedure  UpdateDatosUsuario (

PNombre varchar(40),
PApellido varchar (40),
PCorreo varchar (40),
PNumeroDocumento int,
PFechaNacimiento date,
PTelefono varchar (13),
PNombreUsuario varchar (40),
PContraseña varchar (16),
PEstado varchar (10),
PImagen BLOB
)

Begin

Update  Usuario set Nombre = 'Camilo'
where IdUsuario = '1';

END $$

call UpdateDatosUsuario ( 'Camilo', 'López ','kathecita200@gmail.com','52012354','1996-04-19',',3407630216', 'kathe' ,'soylinda123', 'activo', 'img/imagenperfil/kathe.jcc');

Select * From Usuario;


Delimiter $$
Create Procedure  SelectDatosUsuario (

PIdUsuario int,
PNombre varchar(40),
PApellido varchar (40),
PCorreo varchar (40),
PNumeroDocumento int,
PFechaNacimiento date,
PTelefono varchar (13),
PNombreUsuario varchar (40),
PContraseña varchar (16),
PEstado varchar (10),
PImagen BLOB
)

Begin
Select * From Usuario where IdUsuario; 
END $$

Call SelectDatosUsuario ('', 'Daniela', 'Nuñez', 'daninu@gmai','1026456013','2000-10-28', '3107830130', 'Danii', '03Núñez067','inactivo', 'img/imagenperfil/daniela.jcc');
Kate Sanchez
Kate
Kate envió Hoy a las 8:08


-- Triggers ----------------

Create table DatosUsuario (
idDatosUsuario int AUTO_INCREMENT primary key,
usuario varchar (12),
claveUsuario varchar(😎
);
Drop TRIGGER DatosUsuario
DELIMITER $$
CREATE TRIGGER DatosUsuario AFTER INSERT ON Usuario
FOR EACH ROW 
BEGIN
INSERT INTO DatosUsuario(idDatosUsuario,usuario, claveUsuario) VALUES
('', (CONCAT(SUBSTRING(NEW.nombreUsuario, 1,2), SUBSTRING(NEW.apellidoUsuario, 1,2))), 
(REPLACE(NEW.contraseñaUsuario, '-', '')));
END$$



-- ---------------------------------------------------------------------------------

INSERT INTO Usuario VALUES ('',"Sandra","Mojica","SAM2005","sandra@gmail.com",'2001/04/10',1001577863,1,3 )
SELECT * FROM DatosUsuario;
SELECT * FROM Usuario;
/Crear una tabla para almacenar las contraseñas cambiadas/
Create table Log_Usuario (
idLogUsuario int AUTO_INCREMENT primary key,
NombreUsuario varchar (50),
passwordAntigua varchar (😎,
passwordNueva varchar (😎,
FechaCambio date
);
DELIMITER $$
CREATE TRIGGER cambiarContraseñaUsuario AFTER UPDATE ON Usuario
FOR EACH ROW 
BEGIN
INSERT INTO Log_Usuario (idLogUsuario,NombreUsuario,passwordAntigua,passwordNueva,FechaCambio)VALUES 
(null,(CONCAT(SUBSTRING(NEW.nombreUsuario, 1,2), SUBSTRING(NEW.apellidoUsuario, 1,2))), OLD.contraseñaUsuario, NEW.contraseñaUsuario, NOW());
END $$
UPDATE Usuario SET contraseñaUsuario='santiago1520' WHERE idUsuario=1; 
select * from Usuario ;
select * from Log_Usuario ;
/Proceso para el cambio de la contraseña/
DELIMITER $$
CREATE TRIGGER contraseñaUsuario AFTER UPDATE ON DatosUsuario
FOR EACH ROW 
BEGIN
INSERT INTO Log_Usuario VALUES 
(null,(NEW.usuario), (OLD.claveUsuario), (NEW.claveUsuario), NOW());
END $$
UPDATE DatosUsuario SET claveUsuario='sar1860' WHERE idDatosUsuario=1; 
