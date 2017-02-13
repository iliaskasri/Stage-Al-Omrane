/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  12/08/2015 12:52:15                      */
/*==============================================================*/
create database parcinfo;
use parcinfo;

drop table if exists COMPTE;

drop table if exists AFFECTER;

drop table if exists FOURNISSEUR;

drop table if exists MAINTENANCE;

drop table if exists MAINTENEUR;

drop table if exists MARQUE;

drop table if exists MATERIEL;

drop table if exists POSTEUTILISATEUR;

drop table if exists TYPEMATERIEL;

drop table if exists UTILISATEUR;

/*==============================================================*/
/* Table : COMPTE                                               */
/*==============================================================*/
create table COMPTE
(
   ID            numeric(8,0) not null,
   LOGIN        numeric(8,0) not null,
   PASSWORD      date,
   primary key (ID)
);

/*==============================================================*/
/* Table : AFFECTER                                             */
/*==============================================================*/
create table AFFECTER
(
   MATRICULE            numeric(8,0) not null,
   NUMINVENTAIRE        numeric(8,0) not null,
   DATEDEBAFF      date,
   DATEFINAFF	   date,
   primary key (MATRICULE, NUMINVENTAIRE)
);

/*==============================================================*/
/* Table : FOURNISSEUR                                          */
/*==============================================================*/
create table FOURNISSEUR
(
   ID                  int NOT NULL AUTO_INCREMENT,
   NOMF                 char(20) not null,
   ADRESSE              text,
   CODEPOSTAL           numeric(8,0),
   VILLE                text,
   TEL                  numeric(8,0),
   EMAIL                text,
   primary key (ID)
);

/*==============================================================*/
/* Table : MAINTENANCE                                          */
/*==============================================================*/
create table MAINTENANCE
(
   NUMMAINTENANCE       int NOT NULL AUTO_INCREMENT,
   NUMINVENTAIRE        numeric(8,0) not null,
   NOMMAINTENEUR        char(20) not null,
   DATEENVOIEMAINT      date,
   DATERETOURMAINT      date,
   TYPEPANNE            text,
   PRIXMAINTENANCE      float(8,2),
   TYPEMAINTENANCE      text,
   primary key (NUMMAINTENANCE)
);

/*==============================================================*/
/* Table : MAINTENEUR                                           */
/*==============================================================*/
create table MAINTENEUR
(
   ID                  int NOT NULL AUTO_INCREMENT,
   NOMMAINTENEUR        char(20) not null,
   ADRESSE              text,
   VILLE                text,
   TEL                  numeric(8,0),
   EMAIL                text,
   CODEPOSTAL           numeric(8,0),
   primary key (ID)
);

/*==============================================================*/
/* Table : MARQUE                                               */
/*==============================================================*/
create table MARQUE
(
   NOMMARQUE            char(20) not null,
   primary key (NOMMARQUE)
);

/*==============================================================*/
/* Table : MATERIEL                                             */
/*==============================================================*/
create table MATERIEL
(
   NUMINVENTAIRE        numeric(8,0) not null,
   NOMMARQUE            char(20) not null,
   NOMF                 char(20) not null,
   TYPEMATERIEL         char(20) not null,
   SERIALNUMBER         numeric(8,0),
   PRIXACHAT            float(8,2),
   DATEACHAT            date,
   DUREEGARANTIE        text,
   DATEFINGARANTIE      date,
   CARACTERISTIQUE      text,
   primary key (NUMINVENTAIRE)
);

/*==============================================================*/
/* Table : POSTEUTILISATEUR                                     */
/*==============================================================*/
create table POSTEUTILISATEUR
(
   NOMPOSTE             char(20) not null,
   primary key (NOMPOSTE)
);

/*==============================================================*/
/* Table : TYPEMATERIEL                                         */
/*==============================================================*/
create table TYPEMATERIEL
(
   TYPEMATERIEL         char(20) not null,
   primary key (TYPEMATERIEL)
);

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR
(
   MATRICULE            numeric(8,0) not null,
   NOMPOSTE             char(20),
   NOM                  text,
   PRENOM               text,
   ROLE                 text,
   TEL_                 numeric(8,0),
   EMAIL                text,
   primary key (MATRICULE)
);

alter table AFFECTER add constraint FK_AFFECTER foreign key (NUMINVENTAIRE)
      references MATERIEL (NUMINVENTAIRE) on delete restrict on update restrict;

alter table AFFECTER add constraint FK_AFFECTER2 foreign key (MATRICULE)
      references UTILISATEUR (MATRICULE) on delete restrict on update restrict;

alter table MAINTENANCE add constraint FK_FAIRE_L_OBJET foreign key (NUMINVENTAIRE)
      references MATERIEL (NUMINVENTAIRE) on delete restrict on update restrict;

alter table MAINTENANCE add constraint FK_MAINTIENT foreign key (NOMMAINTENEUR)
      references MAINTENEUR (NOMMAINTENEUR) on delete restrict on update restrict;

alter table MATERIEL add constraint FK_AVOIIR foreign key (TYPEMATERIEL)
      references TYPEMATERIEL (TYPEMATERIEL) on delete restrict on update restrict;

alter table MATERIEL add constraint FK_AVOIR foreign key (NOMMARQUE)
      references MARQUE (NOMMARQUE) on delete restrict on update restrict;

alter table MATERIEL add constraint FK_FOURNI foreign key (NOMF)
      references FOURNISSEUR (NOMF) on delete restrict on update restrict;

alter table UTILISATEUR add constraint FK_APPARTENIR foreign key (NOMPOSTE)
      references POSTEUTILISATEUR (NOMPOSTE) on delete restrict on update restrict;

