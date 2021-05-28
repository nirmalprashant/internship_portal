CREATE SCHEMA `assignment` ;

CREATE TABLE company(
cid INT NOT NULL PRIMARY KEY AUTO INCREMENT,
company_name varchar(225) NOT NULL,
description varchar(225) NULL,
category varchar(225) NULL,
experience varchar(25) NULL,
country varchar(25) NULL,
state varchar(25) NULL);


CREATE TABLE search(
sid INT NOT NULL PRIMARY KEY AUTO INCREMENT,
category varchar(225) NOT NULL,
experience varchar(25) NULL,
country varchar(25) NULL,
state varchar(25) NULL);


INSERT INTO company (company, description, category, experience, country, state)
VALUES ('abc', 'b.tech engineering in computer science', 'computer science', 'fresher', 'india', 'uttarakhand'),
('def', 'b.tech engineering in mechanical', 'mechanical', 'fresher', 'usa', 'texas'),
('ghi', 'b.tech engineering in electrical', 'electrical', 'freelancer', 'india', 'punjab'),
('jkl', 'b.tech engineering in civil', 'civil', 'fresher', 'india', 'tamil nadu'),
('mno', 'b.tech engineering in computer science', 'computer science', 'freelancer', 'india', 'maharashtra');


SELECT * FROM assignment.company
RIGHT JOIN search ON
(company.category=search.category AND
company.experience=search.experience AND
company.country=search.country AND
company.state=search.state);


CREATE TRIGGER assign   
ON assignment.search
AFTER INSERT
assignment
AS 