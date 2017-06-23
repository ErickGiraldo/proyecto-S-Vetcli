CREATE DATABASE veterinaria;

USE veterinaria;

CREATE TABLE especie
(
	idEspecie int primary key auto_increment,
	nomEspecie varchar(45) not null
);

CREATE TABLE raza
(
	idRaza int primary key auto_increment,
	nomRaza  varchar(45) not null
);
CREATE TABLE TipoDocumento(
	idTipoDocu int not null primary key auto_increment,
	documento char(20) not null
);

CREATE table propietario
(
	idPropietario int primary key auto_increment,
	nombres varchar(50) not null,
	codDocumento int not null,
	numDocumento varchar(10) not null,
    telefono char(7) not null,
    celular char(10) not null,
    direccion text not null,
    correo varchar(70) not null,
    foreign key(codDocumento) references TipoDocumento(idTipoDocu)
);

CREATE TABLE mascota
(
	idMascota int primary key auto_increment,
	nombreMas varchar(45) not null,
	sexo char(6) not null,
    color varchar(45) not null,
    fechaNaci date not null,
    codPropietario int,
    codEspecie int,
    codRaza int,
    foreign key (codPropietario) references propietario(idPropietario),
    foreign key (codEspecie) references especie (idEspecie),
    foreign key (codRaza) references raza (idRaza)
);

CREATE TABLE diagnostico
(
	idDiagno int primary key auto_increment,
	diagnostico text not null,
	codMascota int,
	foreign key(codMascota) references mascota (idMascota)
);

CREATE TABLE chequeo
( 
	idChequeo int primary key auto_increment,
	fc char(4) not null,
	fr char(4) not null,
	tllc char (4) not null,
	temperatura char(10) not null,
	peso varchar(10) not null,
	entero char(2) null,
	vacunas varchar(45) not null,
	alimentacion varchar(45) not null,
	desparacitacion varchar(45) not null,
	anamnesicos text not null,
	codMascota int,
	fecha date not null,
	foreign key(codMascota) references mascota (idMascota)
);

CREATE TABLE rol(
idRol int primary key auto_increment,
rol varchar(11) not null
);

CREATE TABLE usuario
(
	idUsuario int primary key auto_increment,
	nombreUsu varchar(50) not null,
	usuario varchar(20) not null,
	clave varchar(80) not null,
	codRol int,
	telefono char(7) null,
	celular char(10) not null,
	correo varchar(70) not null,
	foreign key(codRol) references rol(idRol)
);

---------------view----------------------------
CREATE VIEW Login 
AS 
Select *
FROM usuario;

CREATE VIEW ListadoEspecie
AS 
Select *
FROM especie;


CREATE VIEW listadoRaza
AS
Select *
FROM raza;

CREATE VIEW listadoDocumento
AS
Select *
FROM tipoDocumento;

CREATE VIEW rPropietario AS
Select  nombres,numDocumento,telefono,celular,correo
from propietario; 

CREATE VIEW ReporteUsuarios AS
Select  nombreUsu,celular,correo
from usuario; 

CREATE VIEW reportes
	AS
	Select c.fecha,p.nombres as propietario,p.numDocumento,m.nombreMas as Mascota,m.sexo
	from chequeo c
	inner join mascota m on(m.idMascota=c.codMascota)
	inner join propietario p on(p.idPropietario=m.codPropietario)
	where year(curDate())= year(fecha) 
	and month(curDate()) = month(fecha);
----------------------inserciones---------------------------------------------	


insert into ListadoEspecie (nomEspecie) values('canino');
insert into listadoRaza (nomRaza) values('pitbull');
insert into listadoDocumento (documento) values('Cedula de ciudadania'),('Tarjeta de identidad');
insert into rol(rol)values('Veterinario'),('Auxiliar');
	insert into usuario(nombreUsu,usuario,clave,codRol,telefono,celular,correo) 
		values('fabio andres','veterinario','$2y$10$j1mb7m0GClyAfYq.QS5I/.HLeC.xzWPzeb5VO2rtLX5f0s2Zojqgu','1','','3212314422','fagaince@misena.edu.co');
  	
