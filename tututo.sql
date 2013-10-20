use tututo;

CREATE TABLE usuario (
nickname varchar(50),
nombre varchar(50),
clave varchar(50),
direccion varchar(50),
imagen binary,
fecha_nac date,
primary key (nickname)
);

CREATE TABLE categoria (
id_categoria int(11),
categoria varchar(50) ,
primary key (id_categoria)
);

CREATE TABLE tipo (
id_tipo int(11),
tipo varchar(45),
primary key (id_tipo)
);

CREATE TABLE tutorial (
id_tutorial int(11),
autor varchar(50) ,
titulo varchar(75) ,
imagen binary,
contenido varchar(50),
valoracion int(11),
tipotut int(11),
primary key (id_tutorial),
foreign key (autor) references usuario (nickname),
foreign key (tipotut) references tipo (id_tipo)
);

CREATE TABLE tut_categoria (
id_tut_categoria int(11),
tutorial int(11),
categoria int(11),
primary key (id_tut_categoria),
foreign key (tutorial) references tutorial (id_tutorial),
foreign key (categoria) references categoria (id_categoria)
);

