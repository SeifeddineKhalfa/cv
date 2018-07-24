	INSERT INTO Profile (ProfileId ,name, DateOfBirth, PlaceOfBirth, Adresse, Phone, E_mail, GitHub_Profile, Description)
	VALUES ('01' ,'Seifeddine Khalfa' , '1997-07-18', 'Nabeul,Tunisia' , 'Rue d algerie Soliman' , '26013541', 'khalfaseifeddine@gmail.com' , 'github',
	'My goal is to be a part of reputed organization which can utilize my talents for the growth of the organization
							and looking for the challenging opportunitiy where i can serve to my full ability and grow strong into a great hman.');
							
	
	INSERT INTO Skills (SkillsId, ProfileId, langues, ITskills, socialLife, Hobbies)
	VALUES ('01', '01','Arabe : Native language, English and French','Programming : PHP, Javascript,Html et css , Design: Illustrator, Modelisation:UML',
	'-Active Member at AZIMOUN Assoiation, -Event Manager at ISIMA Google Club', 'Swimming , Traveling,');
	
	INSERT INTO Education (id ,ProfileId ,period ,description)
	VALUES ('01', '01', '2016-Present', 'ESPRIT High Private School of Engineering and Technology, COMPUTER SCIENCE ENGENEERING'),
			('02','01', '2014-2016' , 'FST Preparatory Engineering Institute: university of Manar Campus, MATHEMATICS AND PHYSICS SCIENCES.'),
			('03','01', '2010-2014' , 'Hay El khathra High School ,MATHEMATICS AND PHYSICS ,Baccalareate diploma. Qualification: good');
	
	INSERT INTO Experience (ExperienceId, ProfileId, period, titre, description ,tools)
	VALUES	('01', '01', '02/2018-05/2018', 'Case Di Fair' , 'Design ,Developement and implementation of a Web and Desktop application for online fairs
			offering multiservices for clients and companies.', 'Tools : JavaEE , EJB ,JSF, JavaFX'),
			
			('02', '01', '10/2017-01/2018', 'Esprit For All' , 'Developement and implementation of a web, mobile and desktop application aiming to 
			facilitate the campus life.', 'Tools: Web: Symfony/Desktop: Java, JavaFX /Mobile: CodenameOne'),
			
			('03', '01', '09/2016-01/2017', 'Kinder Garden' , 'Developement of a desktop application to monitor children activities using 
			convenient sensors and cameras.', 'ools : C Language, Linux GTK,Glade');
			
	INSERT INTO academic (graduation , note)
	VALUES ('licence' , '12');
	
	INSERT INTO professional (certificat)
	Values ('linux');