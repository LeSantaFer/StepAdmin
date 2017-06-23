/* RELATED TABLES */

/* create user table */
create table user (
  id integer not null auto_increment,
  name varchar(50) not null,
  primary key(id));

/* create friendship table */
create table friendship (
  id integer not null auto_increment,
  idUserAdded integer not null,
  idUserAdding integer not null,
  primary key(id),
  foreign key(idUserAdded) references user(id),
  foreign key(idUserAdding) references user(id));

/* creating country table */
create table country (
  id integer not null auto_increment,
  name varchar(50) not null,
  primary key(id));

/* creating country code table */
create table country_code (
  code varchar(10) not null,
  idCountry integer not null,
  primary key(code),
  foreign key(idCountry) references country(id));

/* creating area code table */
create table area_code (
  code varchar(10) not null,
  name varchar(50) not null,
  primary key(code));

/* creating phone table */
create table phone (
  id integer not null auto_increment,
  number varchar(20) not null,
  countryCode varchar(10) not null,
  areaCode varchar(10) not null,
  idUser integer not null,
  primary key(id),
  foreign key(countryCode) references country_code(code),
  foreign key(areaCode) references area_code(code),
  foreign key(idUser) references user(id));

/* creating notification table */
create table notification (
  id integer not null auto_increment,
  idPhone integer not null,
  idUserNotified integer not null,
  primary key(id),
  foreign key(idPhone) references phone(id),
  foreign key(idUserNotified) references user(id));

/* creating denunciation table */
create table denunciation (
  id integer not null auto_increment,
  idPhone integer not null,
  primary key(id),
  foreign key(idPhone) references phone(id));

/* creating description table */
create table description (
  id integer not null auto_increment,
  description varchar(50) not null,
  primary key(id));

/* creating denunciation/description table */
create table denunciation_description (
  idDenunciation integer not null,
  idDescription integer not null,
  primary key(idDenunciation, idDescription),
  foreign key(idDenunciation) references denunciation(id),
  foreign key(idDescription) references description(id));

/* creating suspicious treatment table */
create table suspicious_treatment (
  id integer not null auto_increment,
  name varchar(20) not null,
  primary key(id));

/* creating treatment configuration table */
create table config_treatment (
  idDescription integer not null,
  idSuspiciousTreatment integer not null,
  primary key(idDescription, idSuspiciousTreatment),
  foreign key(idDescription) references description(id),
  foreign key(idSuspiciousTreatment) references suspicious_treatment(id));

/* NON-RELATED TABLES

/* creating feedback configuration table */
create table config_feedback (
  nmCallKind varchar(20) not null,
  showFeedback integer not null,
  primary key(nmCallKind));

/* creating service blocking configuration table */
create table config_service_block (
  nmService varchar(20) not null,
  block integer not null,
  primary key(nmService));

/* creating guide configuration table */
create table config_guide (
  nmView varchar(20) not null,
  showGuide integer not null,
  primary key(nmView));

/* creating intro configuration table */
create table config_intro (
  showIntro integer not null,
  primary key(showIntro));

insert into config_intro values(1);

/* creating network to download DB configuration table */
create table config_network_download_db (
  nmNetwork varchar(20) not null,
  downloadIt integer not null,
  primary key(nmNetwork));

/* creating suspicious denunciations amount configuration table */
create table suspicious_denunciations_amount (
  amount integer not null,
  primary key(amount));

/* creating theme configuration table */
create table config_theme (
  isDark integer not null,
  accentColor char(7) not null,
  defaultAccentColor char(7) not null,
  primary key(isDark));

insert into config_theme values(0, '#00BCD4', '#00BCD4');