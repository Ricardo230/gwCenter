create database gw;

use gw;

create table alumno(
id_alumno int(4) primary key,
matricula varchar(10),
nombre varchar(30),
ap_paterno varchar(15),
ap_materno varchar(15),
cuatrimestre int(1),
id_grupo_gs int(2),
id_grupo_ws int(2),
activo int(1),
FOREIGN KEY (id_grupo_gs) REFERENCES grupo_gs(id_grupo_gs),
FOREIGN KEY (id_grupo_ws) REFERENCES grupo_ws(id_grupo_ws)
);

create table grupo_gs(
id_grupo_gs int(2) primary key,
grado int(2),
grupo int(2),
nivel_gs int(1),
id_profesor int(2),
FOREIGN KEY (id_profesor) REFERENCES profesor(id_profesor)
);

create table grupo_ws(
id_grupo_ws int(2) primary key,
grado int(2),
grupo int(2),
nivel_ws int(1)
);

create table sesion_gs(
id_sesion_gs int(4) primary key,
id_grupo_gs int(2),
id_tema int(3),
fecha_sesion datetime,
parcial int(1),
activo int(1),
FOREIGN KEY (id_grupo_gs) REFERENCES grupo_gs(id_grupo_gs),
FOREIGN KEY (id_tema) REFERENCES tema(id_tema)
);

create table sesion_ws(
id_sesion_ws int(4) primary key,
id_grupo_ws int(2),
id_tema int(3),
tipo_ws varchar(25),
id_profesor int(2),
fecha_sesion datetime,
parcial int(1),
activo int(1),
FOREIGN KEY (id_grupo_ws) REFERENCES grupo_ws(id_grupo_ws),
FOREIGN KEY (id_tema) REFERENCES tema(id_tema),
FOREIGN KEY (id_profesor) REFERENCES profesor(id_profesor)
);

create table profesor(
id_profesor int(2) primary key,
matricula varchar(10),
nombre varchar(30),
ap_paterno varchar(15),
ap_materno varchar(15),
conductor int(1),
activo int(1)
);

create table sesion(
matricula int(10),
contraseña varchar(25),
nivel int(1)
);

create table admin(
id_admin int(2) primary key,
matricula varchar(10),
nombre varchar(30),
ap_paterno varchar(15),
ap_materno varchar(15),
activo int(1)
);

create table calificacion_gs(
id_sesion_gs int(4),
calificacion_gs float,
id_alumno int,
FOREIGN KEY (id_sesion_gs) REFERENCES sesion_gs(id_sesion_gs)
);

create table calificacion_ws(
id_sesion_ws int(4),
id_alumno int,
calificacion_ws float,
FOREIGN KEY (id_alumno) REFERENCES alumno(id_alumno),
FOREIGN KEY (id_sesion_ws) REFERENCES sesion_ws(id_sesion_ws)
);

create table tema(
id_tema int primary key,
nombre varchar(50),
tipo_tema int(1),
nivel int(1),
fecha_vencimiento datetime,
activo int(2)
);