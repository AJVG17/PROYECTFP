CREATE TABLE propietarios(
id INT PRIMARY KEY AUTO_INCREMENT,
nombre_propietario VARCHAR(50) NOT NULL,
cc_propietario VARCHAR(50) NOT NULL,
image_c1 longblob not null
);
CREATE TABLE propiedades(
id INT PRIMARY KEY AUTO_INCREMENT,
direccion VARCHAR(50) NOT NULL,
estado VARCHAR(80) NOT NULL
);

drop table contrato;

CREATE TABLE contratos(
id_contrato INT AUTO_INCREMENT,
id_propietario INT,
id_propiedad INT,
nom_arrendatario VARCHAR(50) NOT NULL,
cc_arrendatario VARCHAR(50) NOT NULL,
image_c2 longblob not null,
num_arrendatario INT(10) NOT NULL,
email_arrendatario VARCHAR(50) NOT NULL,
nom_fiador VARCHAR(50) NOT NULL,
cc_fiador VARCHAR(50) NOT NULL,
image_c3 longblob not null,
num_fiador INT(10) NOT NULL,
email_fiador VARCHAR(50) NOT NULL,
date_star date not null,
image_contrato longblob not null,
PRIMARY KEY (id_contrato),
foreign key (id_propietario) references propietarios(id),
foreign key (id_propiedad) references propiedades(id)
);


