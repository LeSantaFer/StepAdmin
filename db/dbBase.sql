/* RELATED TABLES */

/* create user table */
create table User (
  id integer not null,
  name varchar(50) not null,
  primary key(id));

/* create friendship table */
create table Friendship (
  id integer not null,
  idUserAdded integer not null,
  idUserAdding integer not null,
  primary key(id),
  foreign key(idUserAdded) references tbUser (id),
  foreign key(idUserAdding) references tbUser (id));

/* creating country table */
create table Country (
  id integer not null,
  cdCountry varchar(10) not null,
  nmCountry varchar(50) not null,
  primary key(id));

/* creating area table */
create table Area (
  id integer not null,
  cdArea varchar(10) not null,
  nmArea varchar(50) not null,
  primary key(id));

/* creating phone table */
create table Phone (
  idPhone integer primary key not null,
  nbPhone varchar(20) not null,
  idCountryCode integer not null,
  idAreaCode integer not null,
  idUser integer,
  foreign key(idCountryCode) references tbCountryCode(idCountryCode),
  foreign key(idAreaCode) references tbAreaCode(idAreaCode),
  foreign key(idUser) references tbUser(idUser));

/* creating notification table */
create table tbNotification (
  idNotification integer primary key not null,
  idPhone integer not null,
  idUserNotified integer not null,
  foreign key(idPhone) references tbPhone(idPhone),
  foreign key(idUserNotified) references tbUser(idUserNotified));

/* creating denunciation table */
create table tbDenunciation (
  idDenunciation integer primary key not null,
  idPhone integer not null,
  foreign key(idPhone) references tbPhone(idPhone));

/* creating description table */
create table tbDescription (
  idDescription integer primary key not null,
  description varchar(50) not null);

/* creating denunciation/description table */
create table tbDenunciationDescription (
  idDenunciation integer not null,
  idDescription integer not null,
  primary key(idDenunciation, idDescription),
  foreign key(idDenunciation) references tbDenunciation(idDenunciation),
  foreign key(idDescription) references tbDescription(idDescription));

/* creating suspicious treatment table */
create table tbSuspiciousTreatment (
  idSuspiciousTreatment integer primary key not null,
  nmSuspiciousTreatment varchar(20) not null);

/* creating treatment configuration table */
create table tbConfigTreatment (
  idDescription integer not null,
  idSuspiciousTreatment integer not null,
  primary key(idDescription, idSuspiciousTreatment),
  foreign key(idDescription) references tbDescription(idDescription),
  foreign key(idSuspiciousTreatment) references tbSuspiciousTreatment(idSuspiciousTreatment));

/* NON-RELATED TABLES

/* creating feedback configuration table */
create table tbConfigFeedback (
  nmCallKind varchar(20) primary key not null,
  showFeedback integer not null);

/* creating service blocking configuration table */
create table tbConfigServiceBlock (
  nmService varchar(20) primary key not null,
  block integer not null);

/* creating guide configuration table */
create table tbConfigGuide (
  nmView varchar(20) primary key not null,
  showGuide integer not null);

/* creating intro configuration table */
create table tbConfigIntro (
  showIntro integer primary key not null);

insert into tbConfigIntro values(1);

/* creating network to download DB configuration table */
create table tbConfigNetworkDownloadDB (
  nmNetworkDownload varchar(20) primary key not null,
  downloadIt integer not null);

/* creating suspicious denunciations amount configuration table */
create table tbSuspiciousDenunciationsAmount (
  denunciationAmount integer primary key not null);

/* creating theme configuration table */
create table tbConfigTheme (
  isDark integer primary key not null,
  accentColor char(7) not null,
  defaultAccentColor char(7) not null);

insert into tbConfigTheme values(0, '#00BCD4', '#00BCD4');