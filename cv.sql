
CREATE DATABASE cv;
DROP TABLE IF EXISTS Profile;
Create TABLE Profile(
	ProfileId integer(10),
	name varchar(50),
	DateOfBirth date,
	PlaceOfBirth varchar(30),
	Adresse varchar(20),
	Phone double,
	E_mail varchar(30),
	GitHub_Profile varchar(30),
	Description varchar(100),
	CONSTRAINT PRIMARY KEY(ProfileId)
);

DROP TABLE IF EXISTS skills;
create TABLE skills(
	SkillsId integer,
	ProfileId integer(10),
	langues varchar(500),
	ITskills varchar(500),
	socialLife varchar(500),
	Hobbies varchar (200),
	PRIMARY KEY (SkillsId),
	CONSTRAINT FOREIGN KEY(ProfileId) REFERENCES Profile(ProfileId)
	
	
);

DROP TABLE IF EXISTS Education;
create TABLE Education(
	id integer,
	ProfileId integer(10),
	period varchar(50),
	description varchar(500),
	FOREIGN KEY(ProfileId) REFERENCES Profile(ProfileId),
	PRIMARY KEY (id)
);


DROP TABLE IF EXISTS Experience;
create TABLE Experience(
	ExperienceId integer,
	ProfileId integer(10),
	period varchar(15),
	titre varchar(50) ,
	description varchar(200),
	tools varchar(200),
	PRIMARY KEY (ExperienceId),
	FOREIGN KEY(ProfileId) REFERENCES Profile(ProfileId)
	
);



CREATE TABLE Academic(
	ProfileId integer(10),
	graduation varchar(50),
	note float ,
	PRIMARY KEY (ProfileId)
) ;


DROP TABLE IF EXISTS Professional;
CREATE TABLE Professional(
	certificat varchar (50),
	PRIMARY KEY(certificat)
) ;

ADD CONSTRAINT 


