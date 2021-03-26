create table persona (
    id_persona integer primary key,
    correo varchar (100) not null,
    clave varchar (15) not null,
    nombre varchar (30) not null,
    ap_pat varchar (30) not null,
    ap_mat varchar (30) not null,
    edad integer not null,
    privilegio integer
);


create table reporte(
	id_reporte integer primary key,
	id_persona_reporte integer,
	foreign key (id_persona_reporte) references persona (id_persona) on update cascade on delete cascade
	fecha_reporte date,
	reporte varchar (255)
);

create table sensor (
	id_sensor integer primary key,
	area varchar (30),
	fecha_instalacion date
);

create table temperatura (
	id_temperatura integer primary key,
	valor_temperatura integer,
	id_sensor integer,
	foreign key (id_sensor) references sensor (id_sensor) on update cascade on delete cascade
	fecha_lectura date,
	hora_lectura time,
);

create table ventilador (
	id_ventilador integer primary key,
	area varchar (30),
	fecha_instalacion date
);

create table persona_mantenimiento (
	id_persona_mantenimiento integer primary key,
	nombre varchar (30) not null,
    ap_pat varchar (30) not null,
    ap_mat varchar (30) not null,
    edad integer not null,
    empresa_de_mantenimiento varchar (30)
);

create table mantenimiento (
	id_mantenimiento integer primary key,
	fecha_matenimiento date,
	id_persona_mantenimiento integer
	foreign key (id_persona_mantenimiento) references persona_mantenimiento (id_persona_mantenimiento) 
		on update cascade on delete cascade,
	precio_mantenimiento integer
);


insert into ventilador values (1, 'local', '2020/08/02');


