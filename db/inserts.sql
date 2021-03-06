/* Inserts de usuários */
INSERT INTO user (name) VALUES ('Adelaide Siebra');
INSERT INTO user (name) VALUES ('Adelino Piratininga');
INSERT INTO user (name) VALUES ('Aida Queiroga');
INSERT INTO user (name) VALUES ('Aires Ximenes');
INSERT INTO user (name) VALUES ('Amadeu Lisboa');
INSERT INTO user (name) VALUES ('Arnaldo Freiria');
INSERT INTO user (name) VALUES ('Artur Brites');
INSERT INTO user (name) VALUES ('Artur Espargosa');
INSERT INTO user (name) VALUES ('Branco Trindade');
INSERT INTO user (name) VALUES ('Carlota Fonseca');
INSERT INTO user (name) VALUES ('Cid Conceição');
INSERT INTO user (name) VALUES ('Clarisse Proenzo');
INSERT INTO user (name) VALUES ('Claudemira Torcato');
INSERT INTO user (name) VALUES ('Constantino Quental');
INSERT INTO user (name) VALUES ('Cosme Pimienta');
INSERT INTO user (name) VALUES ('Daniela Cartaxo');
INSERT INTO user (name) VALUES ('Davide Barrios');
INSERT INTO user (name) VALUES ('Delfina Frois');
INSERT INTO user (name) VALUES ('Audie Crowl');
INSERT INTO user (name) VALUES ('Edgar Noguera');
INSERT INTO user (name) VALUES ('Estela Pais');
INSERT INTO user (name) VALUES ('Lizzette Renner');
INSERT INTO user (name) VALUES ('Thomas Blann');
INSERT INTO user (name) VALUES ('Faustino Correa');
INSERT INTO user (name) VALUES ('Fausto Cardozo');
INSERT INTO user (name) VALUES ('Filipa Ventura');
INSERT INTO user (name) VALUES ('Frutuoso Magallanes');
INSERT INTO user (name) VALUES ('Pennie Villicana');
INSERT INTO user (name) VALUES ('Celestine Boutte');
INSERT INTO user (name) VALUES ('Jessie Verret');

/* Inserts de países */
INSERT INTO country (name) VALUES  ("Brasil");

/* Inserts de códigos de países */
INSERT INTO country_code VALUES  ("55", 1);

/* Inserts de códigos de países */
INSERT INTO state (name, idCountry) VALUES  ("São Paulo", 1);
INSERT INTO state (name, idCountry) VALUES  ("Rio de Janeiro", 1);
INSERT INTO state (name, idCountry) VALUES  ("Espírito Santo", 1);
INSERT INTO state (name, idCountry) VALUES  ("Minas Gerais", 1);

/* Inserts de códigos de áreas */
INSERT INTO area_code VALUES  ("11", "Região metropolitana de São Paulo", 1);
INSERT INTO area_code VALUES  ("12", "São José dos Campos e região", 1);
INSERT INTO area_code VALUES  ("13", "Região retropolitana da Baixada Santista", 1);
INSERT INTO area_code VALUES  ("14", "Bauru, Jaú, Marília, Botucatu e região", 1);
INSERT INTO area_code VALUES  ("15", "Sorocaba e região", 1);
INSERT INTO area_code VALUES  ("16", "Ribeirão Preto, São Carlos, Araraquara e região", 1);
INSERT INTO area_code VALUES  ("17", "São José do Rio Preto e região", 1);
INSERT INTO area_code VALUES  ("18", "Presidente Prudente, Araçatuba e região", 1);
INSERT INTO area_code VALUES  ("19", "Região metropolitana de Campinas", 1);
INSERT INTO area_code VALUES  ("22", "Campos dos Goytacazes e Região", 2);
INSERT INTO area_code VALUES  ("21", "Região metropolitana do Rio de Janeiro", 2);
INSERT INTO area_code VALUES  ("24", "Volta Redonda, Petrópolis e região", 2);
INSERT INTO area_code VALUES  ("27", "Região metropolitana de Vitória", 3);
INSERT INTO area_code VALUES  ("28", "Cachoeiro de Itapemirim e região", 3);
INSERT INTO area_code VALUES  ("31", "Região metropolitana de Belo Horizonte", 4);
INSERT INTO area_code VALUES  ("32", "Juiz de Fora e região", 4);
INSERT INTO area_code VALUES  ("33", "Governador Valadares e região", 4);
INSERT INTO area_code VALUES  ("34", "Uberlândia e região", 4);
INSERT INTO area_code VALUES  ("35", "Poços de Caldas, Pouso Alegre, Varginha e região", 4);
INSERT INTO area_code VALUES  ("37", "Divinópolis, Itaúna e região", 4);
INSERT INTO area_code VALUES  ("38", "Montes Claros e região", 4);

/* Inserts de telefones */
INSERT INTO phone (number, areaCode, idUser) VALUES  ("961288581", "11", 1);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("964212283", "12", 2);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("978637334", "13", 3);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("991382668", "14", 4);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("996444512", "15", 5);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("997442662", "16", 6);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("966654463", "17", 7);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("957673183", "18", 8);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("983253248", "19", 9);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("958468113", "22", 10);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("978451959", "21", 11);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("988368683", "24", 12);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("939626633", "27", 13);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("963589938", "28", 14);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("929447324", "31", 15);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("932814179", "32", 16);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("929213215", "33", 17);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("971377829", "34", 18);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("916444595", "35", 19);
INSERT INTO phone (number, areaCode, idUser) VALUES  ("937352248", "37", 20);