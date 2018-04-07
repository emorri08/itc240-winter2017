/* 
	Contacts db table - stores 
	contacts made via contact_us.php in a database table 
	for safe keeping!
	11/22/2010
*/
drop table if exists Contacts;
create table Contacts
( ContactID int unsigned not null auto_increment primary key,
Name varchar(50),
Email varchar(80),
Comment text,
DateAdded datetime
);	