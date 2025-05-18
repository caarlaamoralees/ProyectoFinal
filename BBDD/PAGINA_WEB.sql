CREATE SCHEMA PROYECTO_FINAL;

# base de datos del proyecto final de lenguajes de marcas
CREATE TABLE USUARIOS(
ID INT NOT NULL auto_increment,
NOMBRE VARCHAR(50) NOT NULL,
APELLIDO VARCHAR(150) NOT NULL,
CORREO VARCHAR(150) NOT NULL,
CONTRASENA TEXT NOT NULL,
FECHA_NACIMIENTO DATE NOT NULL,
GENERO CHAR NOT NULL,
CONSTRAINT PK_USARIOS PRIMARY KEY (ID)
);

SELECT * FROM USUARIOS;

DROP TABLE USUARIOS;

DESCRIBE productos;

INSERT INTO PROYECTO_FINAL.USUARIOS (NOMBRE, APELLIDO, CORREO, CONTRASENA, FECHA_NACIMIENTO, GENERO) VALUES
('Carla', 'Morales','carla.morales.j2@gmail.com', '1234','2006-03-28','F');

INSERT INTO PROYECTO_FINAL.USUARIOS (NOMBRE, APELLIDO, CORREO, CONTRASENA, FECHA_NACIMIENTO, GENERO) VALUES
('Andrés', 'López', 'andres.lopez@gmail.com','1234', '1992-04-11', 'M'),
('Lucía', 'Santos', 'lucia.santos@gmail.com','1234', '1996-08-25', 'F'),
('Miguel', 'Ramírez', 'miguel.ramirez@yahoo.com','1234', '1985-02-14', 'M'),
('Ana', 'Castro', 'ana.castro@hotmail.com','1234', '1999-07-02', 'F'),
('Javier', 'Moreno', 'javier.moreno@outlook.com','1234', '1993-10-09', 'M'),
('Elena', 'Torres', 'elena.torres@gmail.com', '1234','1997-01-19', 'F'),
('Raúl', 'Domínguez', 'raul.dominguez@gmail.com', '1234', '1989-05-27', 'M'),
('Natalia', 'Navarro', 'natalia.navarro@gmail.com','1234', '2001-03-17', 'F');

CREATE TABLE PRODUCTOS(
ID INT NOT NULL AUTO_INCREMENT,
MARCA VARCHAR(100) NOT NULL,
MODELO VARCHAR(150) NOT NULL,
COLOR VARCHAR(50) NOT NULL,
PESO VARCHAR(20) NOT NULL,
PRECIO DOUBLE NOT NULL,
IMAGEN TEXT,
DESCRIPCION TEXT,
CONSTRAINT PK_PRODUCTO PRIMARY KEY (ID)
);

SELECT * FROM PRODUCTOS;

DROP TABLE PRODUCTOS;


INSERT INTO PROYECTO_FINAL.PRODUCTOS (MARCA, MODELO, COLOR, PESO, PRECIO, IMAGEN, DESCRIPCION) VALUES
('Suzuki', 'GSX-R1000R', 'Azul', '202 kg', 19990, 'https://www.motofichas.com/images/phocagallery/Suzuki/gsx-r1000r-2019/01-suzuki-gsx-r1000r-2019-estudio-azul.jpg',
 'Moto deportiva con motor de 999cc, diseñada para ofrecer un rendimiento excepcional en pista y carretera, con tecnología avanzada de electrónica y chasis ligero.'),
('Aprilia', 'RSV4 Factory', 'Negro', '199 kg', 26500, 'https://crm-img.stcrm.it/images/31697583/1000x/01-rsv4-factory-jpg.jpg',
 'Superdeportiva italiana equipada con motor V4, suspensión Öhlins y electrónica de última generación para máxima precisión y potencia.'),
('Triumph', 'Daytona Moto2 765', 'Gris', '189 kg', 18500, 'https://integralmoto.com/wp-content/uploads/2024/01/Triumph_Daytona765_CRT-Carbonio_3-4Anteriore.jpg',
 'Inspirada en Moto2, esta naked deportiva combina un motor de 765cc con un chasis ágil para un manejo óptimo y diversión garantizada.'),
('MV Agusta', 'F3 800', 'Rojo/Plata', '173 kg', 22500, 'https://soymotero.net/wp-content/uploads/2018/09/MV-Agusta-F3-800-3.jpg',
 'Moto naked deportiva de 800cc con diseño italiano exclusivo, perfecta para quienes buscan potencia y estilo en cada curva.'),
('KTM', 'RC 8C', 'Naranja', '180 kg', 31500, 'https://www.simonellimoto.it/wp-content/uploads/2021/07/KTM-RC-8C-3.jpg',
 'Superdeportiva limitada con chasis de carbono y motor 999cc, enfocada en máxima ligereza y prestaciones de competición.'),
('Yamaha', 'R7', 'Azul', '188 kg', 9700, 'https://cdn2.yamaha-motor.eu/prod/product-assets/2024/YZF700R7/2024-Yamaha-YZF700R7-EU-Icon_Blue-360-Degrees-001-03_Mobile.jpg',
 'Deportiva accesible con motor de 689cc, ideal para pilotos que buscan rendimiento y facilidad de manejo en una moto ligera.'),
('Honda', 'CBR650R', 'Rojo', '207 kg', 9500, 'https://moto86.com/wp-content/uploads/2023/10/CBR650R-2024-Rojo-Grand-Prix-Tricolor.jpg',
 'Naked deportiva de media cilindrada, que combina diseño agresivo con confort para uso diario y espíritu deportivo.'),
('Ducati', 'SuperSport 950', 'Blanco', '210 kg', 16500, 'https://www.motofichas.com/images/phocagallery/ducati/supersport-950-s-2024/01-ducati-supersport-950-s-2024-estudio-blanco-01.jpg',
 'Sport-turismo con motor 950cc que ofrece un equilibrio perfecto entre confort, potencia y manejo deportivo.'),
('Yamaha', 'YZF-R1', 'Negra', '200 kg', 22000, 'https://cdn2.yamaha-motor.eu/prod/product-assets/2025/YZF1000R1COMP/2025-Yamaha-YZF1000R1COMP-EU-Tech_Black-360-Degrees-001-03_Mobile.jpg',
 'Moto de competición con motor 1000cc, sistema de control de tracción avanzado y electrónica para máxima potencia y control.'),
('Honda', 'CBR1000RR-R Fireblade', 'Rojo', '201 kg', 23500, 'https://www.motofichas.com/images/phocagallery/Honda/cbr1000rr-r-fireblade-2024/10-honda-cbr1000rr-r-fireblade-2024-estudio-rojo-01.jpg',
 'Superdeportiva legendaria, equipada con tecnología de MotoGP para un rendimiento espectacular en carretera y pista.'),
('Kawasaki', 'Ninja ZX-10R', 'Verde', '207 kg', 21500, 'https://centromotopalma.es/storage/app/uploads/public/638/a27/e84/638a27e84c8d1911254119.jpg',
 'Deportiva con motor 998cc y electrónica avanzada, diseñada para ofrecer potencia y estabilidad en cualquier situación.'),
('BMW', 'S1000RR', 'Blanco', '197 kg', 25000, 'https://dhqlmcogwd1an.cloudfront.net/images/phocagallery/BMW_Motorrad/s-1000-rr-2023/01-bmw-s-1000-rr-2023-estudio-blanco.jpg',
 'Superdeportiva alemana con motor 999cc, tecnología de punta y un diseño agresivo para máxima precisión en pista.'),
('Ducati', 'Panigale V4', 'Rojo', '198 kg', 27000, 'https://images5.1000ps.net/images_bikekat/2024/5-Ducati/10103-Panigale_V4_Superleggera/001-638404743657685768-ducati-panigale-v4-superleggera.jpg',
 'Moto deportiva con motor V4, que combina potencia extrema, ligereza y diseño exclusivo para pilotos exigentes.'),
('Kawasaki', 'Z900', 'Verde/Negro', '210 kg', 9800, 'https://storage.kawasaki.eu/public/kawasaki.eu/en-EU/model/2020_Z900_GY1_STR.002.jpg',
 'Moto naked con motor 948cc, que destaca por su equilibrio entre potencia, agilidad y confort para uso diario.');


INSERT INTO PROYECTO_FINAL.PRODUCTOS (MARCA, MODELO, COLOR, PESO, PRECIO, IMAGEN, DESCRIPCION) VALUES
('Akrapovič', 'Escape Slip-On Yamaha R1', 'Negro', '3 kg', 950, 'https://www.nilmoto.com/imagenes/image/productos/s-y10so14-hhx2t_1_escape-akrapovic-titanio-yamaha-yzfr1-15-16.jpg',
 'Escape Slip-On en carbono y titanio, diseñado para mejorar el rendimiento y el sonido de la Yamaha R1.'),
('Termignoni', 'Escape Ducati Panigale V4', 'Titanio', '2.8 kg', 1200, 'https://static1.wrs.it/464615-large_default/terminal-de-acero-inoxidable-titanio-termignoni-honda-x-adv-750-2017-2020-aprobado.jpg',
 'Escape homologado en titanio para Ducati Panigale V4 que mejora potencia y reduce peso.'),
('Arrow', 'Escape Honda CBR650R', 'Negro', '3.2 kg', 780, 'https://www.motorraiz.com/images/products/arrow_71217pr_6.jpg',
 'Escape deportivo Arrow para Honda CBR650R que aporta mejor sonido y un ligero aumento de potencia.'),
('SC Project', 'Escape Kawasaki ZX-10R', 'Carbono', '2.5 kg', 990, 'https://motocentar.com/wp-content/uploads/2020/07/Conic_70s.jpg',
 'Escape de alto rendimiento con carcasa de carbono, optimizado para la Kawasaki ZX-10R.'),
('Leovince', 'Escape Suzuki GSX-R1000', 'Gris', '3.1 kg', 720, 'https://www.rwn-moto.es/media/image/99/07/20/LeoVince-Auspuffanlage-GP-STYLE-Edelstahl-Slip-On_Side.jpg',
 'Escape Leovince GP Style para Suzuki GSX-R1000, fabricado en acero inoxidable con diseño agresivo.'),
('Puig', 'Cúpula Yamaha R7', 'Negra', '0.9 kg', 110, 'https://www.motosmanu.com/651134-medium_default/mra-racing-r-yamaha-r7-1114843003.jpg',
 'Cúpula deportiva Puig para Yamaha R7 que mejora aerodinámica y protege del viento.'),
('Rizoma', 'Retrovisores Naked Universales', 'Negro', '0.5 kg', 140, 'https://m.media-amazon.com/images/I/51SVveXU2iL.jpg',
 'Retrovisores universales Rizoma, con diseño elegante y materiales premium para motos naked.'),
('Brembo', 'Maneta de freno ajustable', 'Rojo', '0.3 kg', 95, 'https://www.todoescape.es/35463-large_default/maneta-frenoembrague-ajustable-eco-gp-1-yamaha.jpg',
 'Maneta Brembo ajustable para freno, fabricada en aluminio, que ofrece mayor control y comodidad.'),
('Öhlins', 'Amortiguador trasero Yamaha MT-07', 'Amarillo', '4 kg', 690, 'https://dosspa.com/289913-large_default/amortiguador-oehlins-mt-07-14-23.jpg',
 'Amortiguador trasero Öhlins para Yamaha MT-07, que mejora la estabilidad y el confort en la conducción.');

