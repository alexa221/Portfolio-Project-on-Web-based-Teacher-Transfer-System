DROP TABLE IF EXISTS account;

CREATE TABLE `account` (
  `u_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(40) NOT NULL,
  `status` varchar(23) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO account VALUES("9","metadel/9","81dc9bdb52d04dc20036dbd8313ed055","zmersu","1");
INSERT INTO account VALUES("10","mehari/10","81dc9bdb52d04dc20036dbd8313ed055","admin","1");
INSERT INTO account VALUES("11","yadelew/11","ea8d40e40c55ab8dd154f7e4ee46b636","wmersu","1");
INSERT INTO account VALUES("12","mengistu/12","f87cc5c72341e09f6102762f321f2f02","wmersu","1");
INSERT INTO account VALUES("13","tadesse/13","7a67c5d7628ddcd6e340328cf7bd1964","wmersu","1");
INSERT INTO account VALUES("14","mulugeta/14","51635089578f68fc9efdb61e6a760b64","wmersu","1");
INSERT INTO account VALUES("15","wudneh/15","81dc9bdb52d04dc20036dbd8313ed055","wmersu","1");
INSERT INTO account VALUES("16","hilena/16","81dc9bdb52d04dc20036dbd8313ed055","wmersu","1");
INSERT INTO account VALUES("17","yalew/17","d6d9dbd662b58c3e9aee21887ed66397","wmersu","1");
INSERT INTO account VALUES("18","debebe/18","b3d3cf1979cf9a989eeefe224bbb7ebb","wmersu","1");
INSERT INTO account VALUES("102","Aysey/102","ce90345b7128e7bfba1e66ec9626092c","teacher","0");
INSERT INTO account VALUES("103","kassahun/103","4bcea9d9e2eab0e7ca7657ca7d9ab9fe","teacher","1");
INSERT INTO account VALUES("108","gojame/108","e0012f1c0359e201a7d5ab4c680e5120","teacher","1");
INSERT INTO account VALUES("109","hiwot/109","e7a015e7a73f10eec1b2f94c2b92b5dd","teacher","1");
INSERT INTO account VALUES("110","Mezgebu/110","0e5151efd31c14fbdec4de4b9c28093d","director","1");
INSERT INTO account VALUES("111","mesert/111","ee239cd3f7b5c5aa4cf44070aef7c2c2","teacher","1");
INSERT INTO account VALUES("112","kelem/112","5f304229faea3c369c69e5830ed8198d","teacher","1");
INSERT INTO account VALUES("113","habtamu/113","aa9b5cab18f759e082d296ea9769afd5","teacher","1");
INSERT INTO account VALUES("114","habtie/114","721a51991badc292069f08d2c0100522","teacher","1");
INSERT INTO account VALUES("115","haimanot/115","b866700ce38e29e0bfedf0b9febef851","teacher","1");
INSERT INTO account VALUES("116","mandie/116","a90196bca61f5636ffc153b0fbf6ced5","teacher","1");
INSERT INTO account VALUES("117","marga/117","1cc3249efd67028367f9fb2699a9607f","teacher","1");
INSERT INTO account VALUES("118","muluken/118","cf0e2352ed5f2aca979778e3c23ff3f2","teacher","1");
INSERT INTO account VALUES("120","yonatan/120","74ee1363206bd6de6a21e8b3c36d5a60","director","1");
INSERT INTO account VALUES("121","zewdu/121","e7a015e7a73f10eec1b2f94c2b92b5dd","director","1");
INSERT INTO account VALUES("122","meskerem/122","af2ffd2b421acdf105d968f5bdc2f0b7","director","1");
INSERT INTO account VALUES("123","beti/123","5909ff08088582d6df84799cc91790b4","director","1");
INSERT INTO account VALUES("124","HIZKIEL/124","d134f3ee7f6fbe3b2f835c19e5149bab","teacher","1");
INSERT INTO account VALUES("125","ABAEL/125","6386c38805cffc5958d8dd6633c61c65","teacher","1");
INSERT INTO account VALUES("126","ABEBE/126","20d8c2e0c39848441511ab296e31df80","teacher","1");
INSERT INTO account VALUES("127","ABSRA/127","33090c938fbd3a93e1408da6d01ca746","teacher","1");
INSERT INTO account VALUES("128","ADDISIE/128","e9cc67148640b47e9759936cbc9cbdff","teacher","1");
INSERT INTO account VALUES("129","ADISU/129","60974896ef9b6f9ae2b831a29cd839be","teacher","1");
INSERT INTO account VALUES("130","AGUMAS/130","58688f5dba6296dd7be19b1fecd58bba","teacher","1");
INSERT INTO account VALUES("131","ALEMAYEHU/131","2db469965393d9f01946ae5c2f832ab8","teacher","1");
INSERT INTO account VALUES("132","AMANUEL/132","d134f3ee7f6fbe3b2f835c19e5149bab","teacher","1");
INSERT INTO account VALUES("133","SIMACHEW/133","12c210b3bae252518e35fbc2e902665d","teacher","1");
INSERT INTO account VALUES("134","ANDUAMLAK/134","46825c16e738eaed1c1514203a558654","director","1");
INSERT INTO account VALUES("135","MENGISTIE/135","e02c1725b6aa33cb1e711768368b62f8","director","1");
INSERT INTO account VALUES("136","GETU/136","a1efc455f83cbb65260a0fcf7ca8576d","director","1");
INSERT INTO account VALUES("137","GETAHUN/137","c09878b645cf71432cf4a41b99acc121","director","1");
INSERT INTO account VALUES("138","GEDAMU/138","57b3f01d8afda87cb4fafa529143fc8d","teacher","1");
INSERT INTO account VALUES("139","GASHAW/139","093d3a3aeda23046cf1cb94bac8bedf7","teacher","1");
INSERT INTO account VALUES("140","ESUBALEW/140","c42e86bf98ac6b23dfef514d83100be4","teacher","1");
INSERT INTO account VALUES("141","SELAMWIT/141","5109eebe341f7f1b51256a6fbc7f61ca","teacher","1");
INSERT INTO account VALUES("142","MOGES/142","fb00c606ca001414aebf7e176b6be4da","teacher","1");
INSERT INTO account VALUES("143","SOLOMON/143","5c732e0645b35fa0aa24242dd07d525f","director","1");
INSERT INTO account VALUES("144","MEKDES/144","49bade6eb65379cda09f6002661e8da1","director","1");
INSERT INTO account VALUES("145","ABEBECH/145","f9b971475bf2a8f1b7723bd75a5ef387","director","1");
INSERT INTO account VALUES("146","DESTA/146","a2c1e35febde7eb52e98668945d735ea","teacher","1");
INSERT INTO account VALUES("147","FIKADIE/147","d5b210684604b3b9063362f629a72425","teacher","1");
INSERT INTO account VALUES("148","ESUBALEW/148","c42e86bf98ac6b23dfef514d83100be4","teacher","1");
INSERT INTO account VALUES("149","ESKEDAR/149","9aebf2f51425162bdc266773d8e3a830","teacher","1");
INSERT INTO account VALUES("150","ENDALEW/150","3358c1330db6aea2d274eb4a1b61cb55","teacher","1");
INSERT INTO account VALUES("151","ELSA/151","eb5eebc91f459eac7d6ff8ae818b2b36","teacher","1");
INSERT INTO account VALUES("152","ELISABET/152","1473dfbe9cfdd43e77b7fda1d041da83","teacher","1");
INSERT INTO account VALUES("153","DEBASU/153","f05c8ee1d9592d8b51b56902c4c73fdd","director","1");
INSERT INTO account VALUES("154","BIRHANU/154","02e751a7ac6e37c2e0e10beb92900129","director","1");
INSERT INTO account VALUES("155","BELAYNESH/155","08dd7571253219a0dafacf1ba9a6fe75","director","1");
INSERT INTO account VALUES("156","AWOKE/156","170c3ad19942c394a1ba4fdccbf02b6d","director","1");
INSERT INTO account VALUES("157","ARAGAW/157","1068869bcbd61e3511710ec7397f5af4","teacher","1");
INSERT INTO account VALUES("158","molla/158","aba4cacb24c2033cd40fe4ae2c42cebb","teacher","1");
INSERT INTO account VALUES("159","zelalem/159","2194c4bfacf4b791cb9254be8a87ad91","teacher","1");
INSERT INTO account VALUES("160","desalegn/160","07e882e91e22b768b74751057ad610c1","teacher","1");
INSERT INTO account VALUES("161","geremew/161","e7a015e7a73f10eec1b2f94c2b92b5dd","teacher","1");
INSERT INTO account VALUES("162","kebede/162","4fe39f22d1834b3741612e0ff889c3c6","teacher","1");
INSERT INTO account VALUES("163","Lamesigin/163","2d81d10bb6a489cf78a3fd4ad5aff366","teacher","1");
INSERT INTO account VALUES("164","Ayalew/164","dc95ded7ae1ea210d0ce78de89a5227c","teacher","1");
INSERT INTO account VALUES("165","Abiriham/165","51832c871384cfec2b2821c76008198b","teacher","1");
INSERT INTO account VALUES("166","Alemu/166","d167aa2ba5399dae959f1981e6575a1e","teacher","1");
INSERT INTO account VALUES("167","melese/167","9a1282cc8a74b1c0dbbd793754ff90b0","teacher","1");
INSERT INTO account VALUES("168","seble/168","57e9794f925ee7aa5f25c422e5087573","teacher","1");
INSERT INTO account VALUES("169","tegaye/169","ddeb7bbba7807ec83e6e34d6a81ff4af","teacher","1");
INSERT INTO account VALUES("170","bewket/170","7bd78784e655ee6103f8b496df14c7b8","teacher","1");
INSERT INTO account VALUES("171","yalem/171","ab454e083e0ec1a8d58bc196247bfa27","teacher","1");
INSERT INTO account VALUES("172","emebet/172","0d556f3dd567654cad31131f8c93c3a4","teacher","1");
INSERT INTO account VALUES("173","Gashaw/173","1d3d328c0b60f51e3b9e5cdf6af4d2de","teacher","1");
INSERT INTO account VALUES("174","mihret/174","863cacfc0a399990a4db29dbd46dd31b","teacher","1");
INSERT INTO account VALUES("175","Tibeb/175","89f9d9948f95201582167d194cb39a17","teacher","1");
INSERT INTO account VALUES("179","gebre/179","bc814eaa35c259fa1e0e8934bca1d14e","teacher","1");
INSERT INTO account VALUES("180","chalachew/180","7b9611952aeaa5331c19420bf718dbc4","teacher","1");
INSERT INTO account VALUES("181","lalem/181","7714ce35304c954600e71a53d7c6b14e","teacher","1");
INSERT INTO account VALUES("182","seble/182","d8301bce7e989dcf281b92352c0b2c42","teacher","1");
INSERT INTO account VALUES("183","zelalem/183","46bdb3e96823b7cfe809854af0227d25","teacher","1");
INSERT INTO account VALUES("184","dawite/184","44b157962f396988bc09dd3307ef7ab7","teacher","1");
INSERT INTO account VALUES("185","Biniyam/185","0c78133aea1c106ed691ac25ed8cbd99","teacher","1");
INSERT INTO account VALUES("186","senayt/186","33959e995605e38512d6317e4e8b1636","teacher","1");
INSERT INTO account VALUES("187","Lijalem/187","518a1b98fc6e33668dd8de91af8ad701","teacher","1");
INSERT INTO account VALUES("189","gebere/189","1d6009fde4a980280a06cae2e1608a4e","teacher","1");


DROP TABLE IF EXISTS apply_date;

CREATE TABLE `apply_date` (
  `ApplyDateID` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  PRIMARY KEY (`ApplyDateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO apply_date VALUES("1","2022-06-30","2023-03-05");


DROP TABLE IF EXISTS archive_result;

CREATE TABLE `archive_result` (
  `Ar_id` int(11) NOT NULL AUTO_INCREMENT,
  `RID` int(11) NOT NULL,
  `wcode` varchar(88) NOT NULL,
  `Fname` varchar(45) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `major` varchar(50) NOT NULL,
  `T_woreda_id` varchar(88) NOT NULL,
  PRIMARY KEY (`Ar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8mb4;

INSERT INTO archive_result VALUES("127","113","Burie Zuriya","habtamu","asmare","Amharic","Burie Town");
INSERT INTO archive_result VALUES("128","114","Burie Zuriya","habtie","dagne","Physics","Burie Town");
INSERT INTO archive_result VALUES("129","115","Burie Zuriya","haimanot","genanew","Chemistry","Burie Town");
INSERT INTO archive_result VALUES("130","116","Burie Zuriya","mandie","Biyazn","ICT","North Achefer");
INSERT INTO archive_result VALUES("131","117","Burie Zuriya","marga","fenta","ICT","sekella");
INSERT INTO archive_result VALUES("132","124","Burie Zuriya","HIZKIEL","MENGISTIE","Chemistry","sekella");
INSERT INTO archive_result VALUES("133","127","Burie Town","ABSRA","GETALEM","English","Burie Zuriya");
INSERT INTO archive_result VALUES("134","128","Burie Town","ADDISIE","TENAW","Amharic","sekella");
INSERT INTO archive_result VALUES("135","131","Burie Town","ALEMAYEHU","SEFINEH","Biology","sekella");
INSERT INTO archive_result VALUES("136","132","Burie Town","AMANUEL","MENGISTIE","Chemistry","North Achefer");
INSERT INTO archive_result VALUES("137","133","Burie Town","SIMACHEW","ADMAS","Chemistry","Burie Zuriya");
INSERT INTO archive_result VALUES("138","147","sekella","FIKADIE","AMBAW","English","Burie Town");
INSERT INTO archive_result VALUES("139","148","sekella","ESUBALEW","GEBRIE","English","Burie Town");
INSERT INTO archive_result VALUES("140","149","sekella","ESKEDAR","MIKRIE","Biology","Burie Zuriya");
INSERT INTO archive_result VALUES("141","150","sekella","ENDALEW","WORKU","Biology","Burie Town");
INSERT INTO archive_result VALUES("142","151","sekella","ELSA","DEMILEW","ICT","Burie Town");
INSERT INTO archive_result VALUES("143","152","sekella","ELISABET","TILAHUN","ICT","Burie Zuriya");
INSERT INTO archive_result VALUES("144","157","sekella","ARAGAW","DAGNAW","Chemistry","Burie Town");
INSERT INTO archive_result VALUES("145","158","sekella","molla","gebeyehu","Amharic","Burie Zuriya");
INSERT INTO archive_result VALUES("146","161","Burie Town","geremew","worku","Chemistry","Burie Zuriya");
INSERT INTO archive_result VALUES("147","162","Burie Town","kebede","zelalem","ICT","sekella");
INSERT INTO archive_result VALUES("148","113","Burie Zuriya","habtamu","asmare","Amharic","Burie Town");
INSERT INTO archive_result VALUES("149","114","Burie Zuriya","habtie","dagne","Physics","Burie Town");
INSERT INTO archive_result VALUES("150","115","Burie Zuriya","haimanot","genanew","Chemistry","Burie Town");
INSERT INTO archive_result VALUES("151","116","Burie Zuriya","mandie","Biyazn","ICT","North Achefer");
INSERT INTO archive_result VALUES("152","117","Burie Zuriya","marga","fenta","ICT","sekella");
INSERT INTO archive_result VALUES("153","124","Burie Zuriya","HIZKIEL","MENGISTIE","Chemistry","sekella");
INSERT INTO archive_result VALUES("154","127","Burie Town","ABSRA","GETALEM","English","Burie Zuriya");
INSERT INTO archive_result VALUES("155","128","Burie Town","ADDISIE","TENAW","Amharic","sekella");
INSERT INTO archive_result VALUES("156","131","Burie Town","ALEMAYEHU","SEFINEH","Biology","sekella");
INSERT INTO archive_result VALUES("157","132","Burie Town","AMANUEL","MENGISTIE","Chemistry","North Achefer");
INSERT INTO archive_result VALUES("158","133","Burie Town","SIMACHEW","ADMAS","Chemistry","Burie Zuriya");
INSERT INTO archive_result VALUES("159","147","sekella","FIKADIE","AMBAW","English","Burie Town");
INSERT INTO archive_result VALUES("160","148","sekella","ESUBALEW","GEBRIE","English","Burie Town");
INSERT INTO archive_result VALUES("161","149","sekella","ESKEDAR","MIKRIE","Biology","Burie Zuriya");
INSERT INTO archive_result VALUES("162","150","sekella","ENDALEW","WORKU","Biology","Burie Town");
INSERT INTO archive_result VALUES("163","151","sekella","ELSA","DEMILEW","ICT","Burie Town");
INSERT INTO archive_result VALUES("164","152","sekella","ELISABET","TILAHUN","ICT","Burie Zuriya");
INSERT INTO archive_result VALUES("165","157","sekella","ARAGAW","DAGNAW","Chemistry","Burie Town");
INSERT INTO archive_result VALUES("166","158","sekella","molla","gebeyehu","Amharic","Burie Zuriya");
INSERT INTO archive_result VALUES("167","161","Burie Town","geremew","worku","Chemistry","Burie Zuriya");
INSERT INTO archive_result VALUES("168","162","Burie Town","kebede","zelalem","ICT","sekella");


DROP TABLE IF EXISTS archive_school_form;

CREATE TABLE `archive_school_form` (
  `Aid` int(11) NOT NULL AUTO_INCREMENT,
  `trid` int(11) NOT NULL,
  `Fname` varchar(45) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `dateofocp` date NOT NULL,
  `major` varchar(88) NOT NULL,
  `wcode` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `first_choice` varchar(110) NOT NULL,
  `second_choice` varchar(88) NOT NULL,
  `third_choice` varchar(45) NOT NULL,
  PRIMARY KEY (`Aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS archive_school_result;

CREATE TABLE `archive_school_result` (
  `Arid` int(11) NOT NULL AUTO_INCREMENT,
  `RID` int(11) NOT NULL,
  `sid` varchar(110) NOT NULL,
  `wcode` varchar(45) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(88) NOT NULL,
  `major` varchar(45) NOT NULL,
  `T_School_id` int(11) NOT NULL,
  PRIMARY KEY (`Arid`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

INSERT INTO archive_school_result VALUES("15","113","Burie Zuriya","7","habtamu","asmare","Amharic","110");
INSERT INTO archive_school_result VALUES("16","129","Mengescha","7","ADISU","KEBEDE","English","115");
INSERT INTO archive_school_result VALUES("17","163","Mengescha","7","Lamesigin","sewale","ICT","110");
INSERT INTO archive_school_result VALUES("18","164","Bure shikudad","7","Ayalew","Tariku","Physics","109");
INSERT INTO archive_school_result VALUES("19","165","burie damote","7","Abiriham","Abnate","Biology","109");
INSERT INTO archive_school_result VALUES("20","166","Bure shikudad","7","Alemu","chanie","Chemistry","109");
INSERT INTO archive_school_result VALUES("21","168","burie Abo","7","seble","balew","Amharic","110");
INSERT INTO archive_school_result VALUES("22","170","burie Abo","7","bewket","zewdu","English","116");
INSERT INTO archive_school_result VALUES("23","113","Burie Zuriya","7","habtamu","asmare","Amharic","110");
INSERT INTO archive_school_result VALUES("24","129","Mengescha","7","ADISU","KEBEDE","English","115");
INSERT INTO archive_school_result VALUES("25","163","Mengescha","7","Lamesigin","sewale","ICT","110");
INSERT INTO archive_school_result VALUES("26","164","Bure shikudad","7","Ayalew","Tariku","Physics","109");
INSERT INTO archive_school_result VALUES("27","165","burie damote","7","Abiriham","Abnate","Biology","109");
INSERT INTO archive_school_result VALUES("28","166","Bure shikudad","7","Alemu","chanie","Chemistry","109");
INSERT INTO archive_school_result VALUES("29","168","burie Abo","7","seble","balew","Amharic","110");
INSERT INTO archive_school_result VALUES("30","170","burie Abo","7","bewket","zewdu","English","116");


DROP TABLE IF EXISTS archive_transfer_form;

CREATE TABLE `archive_transfer_form` (
  `Ar_id` int(11) NOT NULL AUTO_INCREMENT,
  `wtrid` int(11) NOT NULL,
  `Fname` varchar(88) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  `dateofocp` date NOT NULL,
  `major` varchar(88) NOT NULL,
  `wcode` varchar(45) NOT NULL,
  `service` int(11) NOT NULL,
  `first_choice` varchar(50) NOT NULL,
  `second_choice` varchar(88) NOT NULL,
  PRIMARY KEY (`Ar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS request_table;

CREATE TABLE `request_table` (
  `R_id` int(11) NOT NULL AUTO_INCREMENT,
  `Did` int(11) NOT NULL,
  `wcode` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Amharic` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Biology` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `ICT` int(11) NOT NULL,
  `Total_teach` int(11) NOT NULL,
  PRIMARY KEY (`R_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

INSERT INTO request_table VALUES("28","153","8","105","DEBASU","0","1","0","1","0","1","7");
INSERT INTO request_table VALUES("30","154","8","106","BIRHANU","1","0","0","0","1","0","10");
INSERT INTO request_table VALUES("31","155","8","107","BELAYNESH","0","0","1","0","0","1","6");
INSERT INTO request_table VALUES("32","156","8","117","AWOKE","0","1","0","0","1","0","7");
INSERT INTO request_table VALUES("33","110","1","100","Mezgebu","0","1","1","0","1","1","7");
INSERT INTO request_table VALUES("34","143","1","102","SOLOMON","1","1","1","1","0","1","6");
INSERT INTO request_table VALUES("35","144","1","103","MEKDES","1","0","0","1","0","0","4");
INSERT INTO request_table VALUES("36","145","1","104","ABEBECH","0","0","0","1","1","1","6");
INSERT INTO request_table VALUES("37","120","6","111","yonatan","1","1","0","0","1","0","4");
INSERT INTO request_table VALUES("38","121","6","112","zewdu","0","1","0","0","1","0","4");
INSERT INTO request_table VALUES("39","122","6","113","meskerem","0","0","0","1","0","1","7");
INSERT INTO request_table VALUES("40","123","6","114","beti","0","0","1","1","0","0","5");
INSERT INTO request_table VALUES("42","135","7","110","MENGISTIE","1","0","0","0","0","1","4");
INSERT INTO request_table VALUES("43","136","7","116","GETU","0","1","0","0","1","0","6");
INSERT INTO request_table VALUES("44","137","7","115","GETAHUN","0","1","0","1","0","0","4");
INSERT INTO request_table VALUES("45","134","7","109","ANDUAMLAK","0","0","1","1","1","0","3");


DROP TABLE IF EXISTS result;

CREATE TABLE `result` (
  `RID` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `wcode` int(11) NOT NULL,
  `Fname` varchar(40) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `T_School_id` int(11) NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO result VALUES("125","fendika","6","ABAEL","BIZUAYEHU","Physics","111");
INSERT INTO result VALUES("129","Mengescha","7","ADISU","KEBEDE","English","115");
INSERT INTO result VALUES("163","Mengescha","7","Lamesigin","sewale","ICT","110");
INSERT INTO result VALUES("164","Bure shikudad","7","Ayalew","Tariku","Physics","109");
INSERT INTO result VALUES("165","burie damote","7","Abiriham","Abnate","Biology","109");
INSERT INTO result VALUES("166","Bure shikudad","7","Alemu","chanie","Chemistry","109");
INSERT INTO result VALUES("168","burie Abo","7","seble","balew","Amharic","110");
INSERT INTO result VALUES("170","burie Abo","7","bewket","zewdu","English","116");
INSERT INTO result VALUES("172","fendika","6","emebet","Menber","English","111");
INSERT INTO result VALUES("173","shaka","6","Gashaw","Workie","Chemistry","114");
INSERT INTO result VALUES("174","Giorgis","6","mihret","Abate","ICT","113");
INSERT INTO result VALUES("175","fendika","6","Tibeb","Biadig","Biology","114");


DROP TABLE IF EXISTS school;

CREATE TABLE `school` (
  `sid` int(1) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `slevel` varchar(100) NOT NULL,
  `wcode` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `wcode` (`wcode`),
  CONSTRAINT `school_ibfk_1` FOREIGN KEY (`wcode`) REFERENCES `woreda` (`wcode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

INSERT INTO school VALUES("100","Achefer","Secondary School","1","2","2022-06-16");
INSERT INTO school VALUES("101","yismala","Secondary School","2","2","2022-06-16");
INSERT INTO school VALUES("102","liben","Secondary School","1","2","2022-06-16");
INSERT INTO school VALUES("103","schoolB","Secondary School","1","2","2022-06-16");
INSERT INTO school VALUES("104","schoolC","Secondary School","1","2","2022-06-16");
INSERT INTO school VALUES("105","Abay Minch","Secondary School","8","2","2022-06-17");
INSERT INTO school VALUES("106","Gishi Abay","Secondary School","8","2","2022-06-17");
INSERT INTO school VALUES("107","Zeleke desta","Secondary School","8","3","2022-06-17");
INSERT INTO school VALUES("108","schoolD","Secondary School","1","4","2022-06-17");
INSERT INTO school VALUES("109","Mengescha","Secondary School","7","3","2022-06-17");
INSERT INTO school VALUES("110","Bure shikudad","Secondary School","7","2","2022-06-17");
INSERT INTO school VALUES("111","Alefa","Secondary School","6","2","2022-06-17");
INSERT INTO school VALUES("112","fendika","Secondary School","6","2","2022-06-17");
INSERT INTO school VALUES("113","shaka","Secondary School","6","3","2022-06-17");
INSERT INTO school VALUES("114","Giorgis","Secondary School","6","2","2022-06-17");
INSERT INTO school VALUES("115","burie Abo","Secondary School","7","4","2022-06-20");
INSERT INTO school VALUES("116","burie damote","Secondary School","7","3","2022-06-20");
INSERT INTO school VALUES("117","sekella","Primary School","8","2","2022-06-20");
INSERT INTO school VALUES("118","burie","Secondary School","7","2","2022-06-29");


DROP TABLE IF EXISTS teacher;

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `age` varchar(40) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `role` varchar(100) NOT NULL,
  `dateofocp` date NOT NULL,
  `levelofedu` varchar(30) NOT NULL,
  `major` varchar(100) NOT NULL,
  `wcode` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `service` int(11) DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `To_day` date NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `wcode` (`wcode`),
  KEY `sid` (`sid`),
  CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`wcode`) REFERENCES `woreda` (`wcode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=latin1;

INSERT INTO teacher VALUES("102","Aysey","lamesgin","23","male","teacher","2017-05-16","Degree","Biology","1","100","161654400","0","2022-06-30");
INSERT INTO teacher VALUES("103","kassahun","gebrie","23","male","teacher","2016-04-16","Degree","Amharic","1","100","195782400","0","2022-06-30");
INSERT INTO teacher VALUES("108","gojame","zeleke","23","femal","teacher","2016-04-16","Degree","Biology","1","102","195782400","1234","2022-06-30");
INSERT INTO teacher VALUES("109","hiwot","worku","23","femal","teacher","2019-05-16","Degree","English","1","102","98582400","1234","2022-06-30");
INSERT INTO teacher VALUES("110","Mezgebu","Melese","23","male","director","2017-05-16","Degree","ICT","1","100","161654400","5345","2022-06-30");
INSERT INTO teacher VALUES("111","mesert","melkamu","23","male","teacher","2016-12-09","Degree","Biology","1","103","175302000","3465","2022-06-30");
INSERT INTO teacher VALUES("112","kelem","getahun","20","femal","teacher","2019-05-17","Degree","Amharic","1","100","98496000","4906","2022-06-30");
INSERT INTO teacher VALUES("113","habtamu","asmare","23","male","teacher","2015-05-17","Degree","Amharic","6","111","224726400","5345","2022-06-30");
INSERT INTO teacher VALUES("114","habtie","dagne","23","male","teacher","2016-04-17","Degree","Physics","6","112","195696000","3465","2022-06-30");
INSERT INTO teacher VALUES("115","haimanot","genanew","23","male","teacher","2018-04-17","Degree","Chemistry","6","113","132624000","4906","2022-06-30");
INSERT INTO teacher VALUES("116","mandie","Biyazn","23","male","teacher","2018-04-17","Degree","ICT","6","114","132624000","5345","2022-06-30");
INSERT INTO teacher VALUES("117","marga","fenta","23","male","teacher","2018-12-17","Degree","ICT","6","114","111538800","5345","2022-06-30");
INSERT INTO teacher VALUES("118","muluken","bekele","24","male","teacher","2017-03-17","Degree","Amharic","6","111","166834800","5345","2022-06-30");
INSERT INTO teacher VALUES("120","yonatan","aduna","23","male","director","2016-02-17","Degree","Biology","6","111","200876400","5345","2022-06-30");
INSERT INTO teacher VALUES("121","zewdu","worku","25","male","director","2017-04-17","Degree","Physics","6","112","164160000","5345","2022-06-30");
INSERT INTO teacher VALUES("122","meskerem","fekadu","24","femal","director","2019-12-17","Degree","Amharic","6","113","80002800","6000","2022-06-30");
INSERT INTO teacher VALUES("123","beti","negrew","22","femal","director","2018-04-17","Degree","Biology","6","114","132624000","4900","2022-06-30");
INSERT INTO teacher VALUES("124","HIZKIEL","MENGISTIE","24","male","teacher","2016-02-08","Degree","Chemistry","6","113","201654000","4900","2022-06-30");
INSERT INTO teacher VALUES("125","ABAEL","BIZUAYEHU","25","male","teacher","2018-03-20","Degree","Physics","6","112","135039600","4900","2022-06-30");
INSERT INTO teacher VALUES("126","ABEBE","ALEM","23","male","teacher","2016-10-20","Degree","Amharic","7","109","179625600","4906","2022-06-30");
INSERT INTO teacher VALUES("127","ABSRA","GETALEM","20","femal","teacher","2018-02-28","Degree","English","7","109","136767600","4900","2022-06-30");
INSERT INTO teacher VALUES("128","ADDISIE","TENAW","23","femal","teacher","2015-02-28","Degree","Amharic","7","109","231462000","4906","2022-06-30");
INSERT INTO teacher VALUES("129","ADISU","KEBEDE","20","male","teacher","2015-11-20","Degree","English","7","115","208566000","4900","2022-06-30");
INSERT INTO teacher VALUES("130","AGUMAS","GETIE","20","male","teacher","2019-05-10","Degree","Biology","7","116","99100800","4900","2022-06-30");
INSERT INTO teacher VALUES("131","ALEMAYEHU","SEFINEH","24","male","teacher","2018-01-20","Degree","Biology","7","116","140137200","4906","2022-06-30");
INSERT INTO teacher VALUES("132","AMANUEL","MENGISTIE","20","male","teacher","2017-02-20","Degree","Chemistry","7","116","168994800","4900","2022-06-30");
INSERT INTO teacher VALUES("133","SIMACHEW","ADMAS","23","male","teacher","2017-04-20","Degree","Chemistry","7","116","163900800","4900","2022-06-30");
INSERT INTO teacher VALUES("134","ANDUAMLAK","TEMESGEN","24","male","director","2015-03-20","M.Sc","Biology","7","109","229734000","4906","2022-06-30");
INSERT INTO teacher VALUES("135","MENGISTIE","KELEMU","23","male","director","2015-03-20","Degree","Chemistry","7","110","229734000","6000","2022-06-30");
INSERT INTO teacher VALUES("136","GETU","WONDIMAGENE","23","male","director","2018-03-20","M.Sc","English","7","116","135039600","4900","2022-06-30");
INSERT INTO teacher VALUES("137","GETAHUN","MULU","20","male","director","2014-03-20","M.Sc","Chemistry","7","115","261270000","3465","2022-06-30");
INSERT INTO teacher VALUES("138","GEDAMU","GETAHUN","20","male","teacher","2017-02-08","Degree","English","7","115","170031600","3465","2022-06-30");
INSERT INTO teacher VALUES("139","GASHAW","ABYE","20","male","teacher","2022-04-30","Degree","Biology","7","115","5270400","4906","2022-06-30");
INSERT INTO teacher VALUES("140","ESUBALEW","GEBRIE","20","male","teacher","2021-01-20","Degree","Physics","7","115","45442800","6000","2022-06-30");
INSERT INTO teacher VALUES("141","SELAMWIT","BEKALU","23","femal","teacher","2017-03-20","Degree","English","1","102","166575600","4906","2022-06-30");
INSERT INTO teacher VALUES("142","MOGES","ABEBAW","20","male","teacher","2016-01-20","Degree","ICT","1","100","203295600","6000","2022-06-30");
INSERT INTO teacher VALUES("143","SOLOMON","YOHANS","20","male","director","2016-08-20","M.Sc","Chemistry","1","102","184896000","6000","2022-06-30");
INSERT INTO teacher VALUES("144","MEKDES","MOLLA","20","femal","director","2015-04-20","Degree","Biology","1","103","227059200","6000","2022-06-30");
INSERT INTO teacher VALUES("145","ABEBECH","HAILU","20","femal","director","2016-02-20","Degree","Physics","1","104","200617200","6000","2022-06-30");
INSERT INTO teacher VALUES("146","DESTA","TESFAYE","23","male","teacher","2017-04-20","Degree","Mathematics","1","102","163900800","4906","2022-06-30");
INSERT INTO teacher VALUES("147","FIKADIE","AMBAW","20","male","teacher","2015-04-20","Degree","English","8","105","227059200","4900","2022-06-30");
INSERT INTO teacher VALUES("148","ESUBALEW","GEBRIE","24","male","teacher","2016-04-20","Degree","English","8","105","195436800","6000","2022-06-30");
INSERT INTO teacher VALUES("149","ESKEDAR","MIKRIE","23","femal","teacher","2017-02-20","Degree","Biology","8","106","168994800","6000","2022-06-30");
INSERT INTO teacher VALUES("150","ENDALEW","WORKU","23","male","teacher","2016-04-20","Degree","Biology","8","106","195436800","6000","2022-06-30");
INSERT INTO teacher VALUES("151","ELSA","DEMILEW","23","femal","teacher","2017-03-20","Degree","ICT","8","107","166575600","4900","2022-06-30");
INSERT INTO teacher VALUES("152","ELISABET","TILAHUN","20","femal","teacher","2015-04-20","Degree","ICT","8","107","227059200","4906","2022-06-30");
INSERT INTO teacher VALUES("153","DEBASU","ADISIA","23","male","director","2016-04-20","M.Sc","Amharic","8","105","195436800","6000","2022-06-30");
INSERT INTO teacher VALUES("154","BIRHANU","WONDAY","23","male","director","2014-04-20","M.Sc","Chemistry","8","106","258595200","6000","2022-06-30");
INSERT INTO teacher VALUES("155","BELAYNESH","AYALEW","20","male","director","2016-05-20","Degree","Biology","8","107","192844800","6000","2022-06-30");
INSERT INTO teacher VALUES("156","AWOKE","MIHARI","23","male","director","2017-04-20","Degree","Physics","8","117","163900800","4906","2022-06-30");
INSERT INTO teacher VALUES("157","ARAGAW","DAGNAW","20","male","teacher","2016-03-20","Degree","Chemistry","8","117","198111600","4906","2022-06-30");
INSERT INTO teacher VALUES("158","molla","gebeyehu","20","male","teacher","2015-04-20","Degree","Amharic","8","117","227059200","4900","2022-06-30");
INSERT INTO teacher VALUES("159","zelalem","asefa","23","male","teacher","2018-02-22","Degree","Amharic","7","109","137286000","4900","2022-06-30");
INSERT INTO teacher VALUES("160","desalegn","ferede","20","male","teacher","2017-10-22","Degree","English","7","109","147916800","3465","2022-06-30");
INSERT INTO teacher VALUES("161","geremew","worku","23","male","teacher","2018-01-08","Degree","Chemistry","7","110","141174000","4906","2022-06-30");
INSERT INTO teacher VALUES("162","kebede","zelalem","23","male","teacher","2017-04-06","Degree","ICT","7","110","165110400","6000","2022-06-30");
INSERT INTO teacher VALUES("163","Lamesigin","sewale","23","male","teacher","2016-04-22","Degree","ICT","7","110","195264000","6000","2022-06-30");
INSERT INTO teacher VALUES("164","Ayalew","Tariku","23","male","teacher","2014-04-22","Degree","Physics","7","109","258422400","6000","2022-06-30");
INSERT INTO teacher VALUES("165","Abiriham","Abnate","23","male","teacher","2018-05-22","Degree","Biology","7","109","129600000","5345","2022-06-30");
INSERT INTO teacher VALUES("166","Alemu","chanie","23","male","teacher","2017-03-22","Degree","Chemistry","7","109","166402800","4900","2022-06-30");
INSERT INTO teacher VALUES("167","melese","gizachew","23","male","teacher","2016-03-22","Degree","ICT","7","110","197938800","4900","2022-06-30");
INSERT INTO teacher VALUES("168","seble","balew","20","femal","teacher","2016-03-22","Degree","Amharic","7","110","197938800","6000","2022-06-30");
INSERT INTO teacher VALUES("169","tegaye","mulu","23","male","teacher","2016-04-22","Degree","ICT","7","110","195264000","6000","2022-06-30");
INSERT INTO teacher VALUES("170","bewket","zewdu","24","male","teacher","2015-04-22","Degree","English","7","116","226886400","6000","2022-06-30");
INSERT INTO teacher VALUES("171","yalem","Getie","23","femal","teacher","2019-05-22","Degree","Amharic","6","111","98064000","4900","2022-06-30");
INSERT INTO teacher VALUES("172","emebet","Menber","23","femal","teacher","2020-04-22","Degree","English","6","112","69033600","4900","2022-06-30");
INSERT INTO teacher VALUES("173","Gashaw","Workie","23","male","teacher","2016-04-22","Degree","Chemistry","6","113","195264000","4900","2022-06-30");
INSERT INTO teacher VALUES("174","mihret","Abate","20","femal","teacher","2017-03-22","Degree","ICT","6","114","166402800","4900","2022-06-30");
INSERT INTO teacher VALUES("175","Tibeb","Biadig","20","male","teacher","2020-04-22","Degree","Biology","6","112","69033600","6000","2022-06-30");
INSERT INTO teacher VALUES("179","gebre","alemu","30","male","teacher","2017-06-03","Degree","English","7","110","160099200","700","2022-06-30");
INSERT INTO teacher VALUES("180","chalachew","alehegn","30","male","teacher","2016-05-27","Degree","Mathematics","8","106","192240000","3000","2022-06-30");
INSERT INTO teacher VALUES("181","lalem","yeneneh","30","male","teacher","2016-11-27","Degree","Biology","7","110","176338800","3000","2022-06-30");
INSERT INTO teacher VALUES("182","seble","meshesha","30","male","teacher","2016-08-27","Degree","Physics","7","110","184291200","3000","2022-06-30");
INSERT INTO teacher VALUES("183","zelalem","anmew","30","male","teacher","2017-06-28","Diploma","Amharic","8","106","157939200","3000","2022-06-30");
INSERT INTO teacher VALUES("184","dawite","minchile","20","male","teacher","2016-03-28","Degree","ICT","8","106","197424000","3000","2022-06-30");
INSERT INTO teacher VALUES("185","Biniyam","mengistie","20","male","teacher","2013-12-28","Degree","Biology","8","105","268354800","3000","2022-06-30");
INSERT INTO teacher VALUES("186","senayt","Alamiy","20","femal","teacher","2015-04-28","Degree","Biology","8","106","226368000","4000","2022-06-30");
INSERT INTO teacher VALUES("187","Lijalem","Gebru","23","male","teacher","2019-04-28","Degree","ICT","8","106","100137600","4000","2022-06-30");
INSERT INTO teacher VALUES("188","askal","geremew","39","femal","teacher","2015-12-28","Degree","Amharic","7","110","205282800","3000","2022-06-30");
INSERT INTO teacher VALUES("189","gebere","lamesgen","20","male","teacher","2013-04-29","Degree","English","7","109","289353600","3000","2022-06-30");


DROP TABLE IF EXISTS transfer_form;

CREATE TABLE `transfer_form` (
  `trid` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `age` varchar(40) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `dateofocp` date NOT NULL,
  `levelofedu` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `wcode` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `service` int(11) NOT NULL,
  `multiplayer` double NOT NULL,
  `sum_E` int(11) NOT NULL,
  `first_choice` varchar(100) NOT NULL,
  `second_choice` varchar(100) NOT NULL,
  `third_choice` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`trid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO transfer_form VALUES("102","Aysey","lamesgin","23","male","2017-05-16","Degree","Biology","1","Achefer","161654400","1.2","187574400","102","103","104","pandding");
INSERT INTO transfer_form VALUES("108","gojame","zeleke","23","femal","2016-04-16","Degree","Biology","1","liben","195782400","1.2","226886400","100","103","104","pandding");
INSERT INTO transfer_form VALUES("109","hiwot","worku","23","femal","2019-05-16","Degree","English","1","liben","98582400","1.2","114134400","100","103","104","pandding");
INSERT INTO transfer_form VALUES("111","mesert","melkamu","23","male","2016-12-09","Degree","Biology","1","schoolB","175302000","1.2","201222000","100","102","104","pandding");
INSERT INTO transfer_form VALUES("112","kelem","getahun","20","femal","2019-05-17","Degree","Amharic","1","Achefer","98496000","1.2","114048000","102","103","104","pandding");
INSERT INTO transfer_form VALUES("113","habtamu","asmare","23","male","2015-05-17","Degree","Amharic","6","Alefa","224726400","1.2","261014400","112","113","114","transfered");
INSERT INTO transfer_form VALUES("114","habtie","dagne","23","male","2016-04-17","Degree","Physics","6","fendika","195696000","1.2","226800000","111","114","113","transfered");
INSERT INTO transfer_form VALUES("115","haimanot","genanew","23","male","2018-04-17","Degree","Chemistry","6","shaka","132624000","1.2","153360000","111","114","112","transfered");
INSERT INTO transfer_form VALUES("116","mandie","Biyazn","23","male","2018-04-17","Degree","ICT","6","Giorgis","132624000","1.2","153360000","111","112","113","transfered");
INSERT INTO transfer_form VALUES("117","marga","fenta","23","male","2018-12-17","Degree","ICT","6","Giorgis","111538800","1.2","127090800","111","112","113","transfered");
INSERT INTO transfer_form VALUES("118","muluken","bekele","24","male","2017-03-17","Degree","Amharic","6","Alefa","166834800","1.2","192754800","112","114","113","pandding");
INSERT INTO transfer_form VALUES("124","HIZKIEL","MENGISTIE","24","male","2016-02-08","Degree","Chemistry","6","shaka","201654000","1.2","232758000","112","114","111","transfered");
INSERT INTO transfer_form VALUES("125","ABAEL","BIZUAYEHU","25","male","2018-03-20","Degree","Physics","6","fendika","135039600","1.2","155775600","111","113","114","pandding");
INSERT INTO transfer_form VALUES("126","ABEBE","ALEM","23","male","2016-10-20","Degree","Amharic","7","Mengescha","179625600","1.1","192585600","115","110","116","pandding");
INSERT INTO transfer_form VALUES("127","ABSRA","GETALEM","20","femal","2018-02-28","Degree","English","7","Mengescha","136767600","1.1","147135600","115","110","116","transfered");
INSERT INTO transfer_form VALUES("128","ADDISIE","TENAW","23","femal","2015-02-28","Degree","Amharic","7","Mengescha","231462000","1.1","249606000","115","116","110","transfered");
INSERT INTO transfer_form VALUES("129","ADISU","KEBEDE","20","male","2015-11-20","Degree","English","7","Mengescha","208566000","1.1","224118000","115","110","116","pandding");
INSERT INTO transfer_form VALUES("130","AGUMAS","GETIE","20","male","2019-05-10","Degree","Biology","7","burie damote","99100800","1.1","106876800","109","110","115","pandding");
INSERT INTO transfer_form VALUES("131","ALEMAYEHU","SEFINEH","24","male","2018-01-20","Degree","Biology","7","burie damote","140137200","1.1","150505200","109","110","115","transfered");
INSERT INTO transfer_form VALUES("132","AMANUEL","MENGISTIE","20","male","2017-02-20","Degree","Chemistry","7","burie damote","168994800","1.1","181954800","109","110","115","transfered");
INSERT INTO transfer_form VALUES("133","SIMACHEW","ADMAS","23","male","2017-04-20","Degree","Chemistry","7","burie damote","163900800","1.1","176860800","110","115","109","transfered");
INSERT INTO transfer_form VALUES("141","SELAMWIT","BEKALU","23","femal","2017-03-20","Degree","English","1","liben","166575600","1.2","192495600","100","103","104","pandding");
INSERT INTO transfer_form VALUES("142","MOGES","ABEBAW","20","male","2016-01-20","Degree","ICT","1","Achefer","203295600","1.2","234399600","102","104","103","pandding");
INSERT INTO transfer_form VALUES("147","FIKADIE","AMBAW","20","male","2015-04-20","Degree","English","8","Abay Minch","227059200","1.2","263347200","106","107","117","transfered");
INSERT INTO transfer_form VALUES("148","ESUBALEW","GEBRIE","24","male","2016-04-20","Degree","English","8","Abay Minch","195436800","1.2","226540800","106","107","117","transfered");
INSERT INTO transfer_form VALUES("149","ESKEDAR","MIKRIE","23","femal","2017-02-20","Degree","Biology","8","Gishi Abay","168994800","1.2","194914800","105","107","117","transfered");
INSERT INTO transfer_form VALUES("150","ENDALEW","WORKU","23","male","2016-04-20","Degree","Biology","8","Gishi Abay","195436800","1.2","226540800","105","117","107","transfered");
INSERT INTO transfer_form VALUES("151","ELSA","DEMILEW","23","femal","2017-03-20","Degree","ICT","8","Zeleke desta","166575600","1.2","192495600","105","106","117","transfered");
INSERT INTO transfer_form VALUES("152","ELISABET","TILAHUN","20","femal","2015-04-20","Degree","ICT","8","Zeleke desta","227059200","1.2","263347200","105","117","106","transfered");
INSERT INTO transfer_form VALUES("157","ARAGAW","DAGNAW","20","male","2016-03-20","Degree","Chemistry","8","sekella","198111600","1.2","229215600","105","106","107","transfered");
INSERT INTO transfer_form VALUES("158","molla","gebeyehu","20","male","2015-04-20","Degree","Amharic","8","sekella","227059200","1.2","263347200","105","107","106","transfered");
INSERT INTO transfer_form VALUES("159","zelalem","asefa","23","male","2018-02-22","Degree","Amharic","7","Mengescha","137286000","1.1","147654000","115","110","116","pandding");
INSERT INTO transfer_form VALUES("160","desalegn","ferede","20","male","2017-10-22","Degree","English","7","Mengescha","147916800","1.1","158284800","110","116","115","pandding");
INSERT INTO transfer_form VALUES("161","geremew","worku","23","male","2018-01-08","Degree","Chemistry","7","Bure shikudad","141174000","1.1","151542000","109","116","115","transfered");
INSERT INTO transfer_form VALUES("162","kebede","zelalem","23","male","2017-04-06","Degree","ICT","7","Bure shikudad","165110400","1.1","178070400","109","115","116","transfered");
INSERT INTO transfer_form VALUES("163","Lamesigin","sewale","23","male","2016-04-22","Degree","ICT","7","Mengescha","195264000","1.1","210816000","110","115","116","pandding");
INSERT INTO transfer_form VALUES("164","Ayalew","Tariku","23","male","2014-04-22","Degree","Physics","7","Bure shikudad","258422400","1.1","279158400","109","116","115","pandding");
INSERT INTO transfer_form VALUES("165","Abiriham","Abnate","23","male","2018-05-22","Degree","Biology","7","burie damote","129600000","1.1","139968000","109","110","115","pandding");
INSERT INTO transfer_form VALUES("166","Alemu","chanie","23","male","2017-03-22","Degree","Chemistry","7","Bure shikudad","166402800","1.1","179362800","109","115","116","pandding");
INSERT INTO transfer_form VALUES("167","melese","gizachew","23","male","2016-03-22","Degree","ICT","7","Bure shikudad","197938800","1.1","213490800","109","115","116","pandding");
INSERT INTO transfer_form VALUES("168","seble","balew","20","femal","2016-03-22","Degree","Amharic","7","burie Abo","197938800","1.1","213490800","109","116","110","pandding");
INSERT INTO transfer_form VALUES("169","tegaye","mulu","23","male","2016-04-22","Degree","ICT","7","Bure shikudad","195264000","1.1","210816000","116","109","115","pandding");
INSERT INTO transfer_form VALUES("170","bewket","zewdu","24","male","2015-04-22","Degree","English","7","burie Abo","226886400","1.1","245030400","110","109","116","pandding");
INSERT INTO transfer_form VALUES("171","yalem","Getie","23","femal","2019-05-22","Degree","Amharic","6","Alefa","98064000","1.2","113616000","113","112","114","pandding");
INSERT INTO transfer_form VALUES("172","emebet","Menber","23","femal","2020-04-22","Degree","English","6","fendika","69033600","1.2","79401600","113","111","114","pandding");
INSERT INTO transfer_form VALUES("173","Gashaw","Workie","23","male","2016-04-22","Degree","Chemistry","6","shaka","195264000","1.2","226368000","111","114","112","pandding");
INSERT INTO transfer_form VALUES("174","mihret","Abate","20","femal","2017-03-22","Degree","ICT","6","Giorgis","166402800","1.2","192322800","112","111","113","pandding");
INSERT INTO transfer_form VALUES("175","Tibeb","Biadig","20","male","2020-04-22","Degree","Biology","6","fendika","69033600","1.2","79401600","113","114","111","pandding");
INSERT INTO transfer_form VALUES("185","Biniyam","mengistie","20","male","2013-12-28","Degree","Biology","8","Abay Minch","268354800","1.2","309826800","117","106","107","pandding");


DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` text NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `wcode` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(40) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO user VALUES("9","metadel","amogne","23","female","0","zmersu","Hasaccount","2022-06-16");
INSERT INTO user VALUES("10","mehari","temesgen","23","male","0","admin","Hasaccount","2022-06-16");
INSERT INTO user VALUES("11","yadelew","lewoye","23","male","1","wmersu","Hasaccount","2022-06-16");
INSERT INTO user VALUES("12","mengistu","takele","25","male","2","wmersu","Hasaccount","2022-06-16");
INSERT INTO user VALUES("13","tadesse","tilahun","23","male","3","wmersu","Hasaccount","2022-06-16");
INSERT INTO user VALUES("14","mulugeta","walle","23","male","6","wmersu","Hasaccount","2022-06-16");
INSERT INTO user VALUES("15","wudneh","worku","25","male","7","wmersu","Hasaccount","2022-06-16");
INSERT INTO user VALUES("16","hilena","bekalu","23","female","8","wmersu","Hasaccount","2022-06-17");
INSERT INTO user VALUES("17","yalew","demelash","20","male","4","wmersu","Hasaccount","2022-06-28");
INSERT INTO user VALUES("18","debebe","alemu","20","male","12","wmersu","Hasaccount","2022-06-30");
INSERT INTO user VALUES("102","Aysey","lamesgin","23","male","1","teacher","Hasaccount","2022-06-16");
INSERT INTO user VALUES("103","kassahun","gebrie","23","male","1","teacher","Hasaccount","2022-06-16");
INSERT INTO user VALUES("108","gojame","zeleke","23","femal","1","teacher","Hasaccount","2022-06-16");
INSERT INTO user VALUES("109","hiwot","worku","23","femal","1","teacher","Hasaccount","2022-06-16");
INSERT INTO user VALUES("110","Mezgebu","Melese","23","male","1","director","Hasaccount","2022-06-16");
INSERT INTO user VALUES("111","mesert","melkamu","23","male","1","teacher","Hasaccount","2022-06-17");
INSERT INTO user VALUES("112","kelem","getahun","20","femal","1","teacher","Hasaccount","2022-06-17");
INSERT INTO user VALUES("113","habtamu","asmare","23","male","6","teacher","Hasaccount","2022-06-17");
INSERT INTO user VALUES("114","habtie","dagne","23","male","6","teacher","Hasaccount","2022-06-17");
INSERT INTO user VALUES("115","haimanot","genanew","23","male","6","teacher","Hasaccount","2022-06-17");
INSERT INTO user VALUES("116","mandie","Biyazn","23","male","6","teacher","Hasaccount","2022-06-17");
INSERT INTO user VALUES("117","marga","fenta","23","male","6","teacher","Hasaccount","2022-06-17");
INSERT INTO user VALUES("118","muluken","bekele","24","male","6","teacher","Hasaccount","2022-06-17");
INSERT INTO user VALUES("120","yonatan","aduna","23","male","6","director","Hasaccount","2022-06-17");
INSERT INTO user VALUES("121","zewdu","worku","25","male","6","director","Hasaccount","2022-06-17");
INSERT INTO user VALUES("122","meskerem","fekadu","24","femal","6","director","Hasaccount","2022-06-17");
INSERT INTO user VALUES("123","beti","negrew","22","femal","6","director","Hasaccount","2022-06-17");
INSERT INTO user VALUES("124","HIZKIEL","MENGISTIE","24","male","6","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("125","ABAEL","BIZUAYEHU","25","male","6","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("126","ABEBE","ALEM","23","male","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("127","ABSRA","GETALEM","20","femal","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("128","ADDISIE","TENAW","23","femal","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("129","ADISU","KEBEDE","20","male","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("130","AGUMAS","GETIE","20","male","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("131","ALEMAYEHU","SEFINEH","24","male","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("132","AMANUEL","MENGISTIE","20","male","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("133","SIMACHEW","ADMAS","23","male","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("134","ANDUAMLAK","TEMESGEN","24","male","7","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("135","MENGISTIE","KELEMU","23","male","7","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("136","GETU","WONDIMAGENE","23","male","7","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("137","GETAHUN","MULU","20","male","7","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("138","GEDAMU","GETAHUN","20","male","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("139","GASHAW","ABYE","20","male","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("140","ESUBALEW","GEBRIE","20","male","7","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("141","SELAMWIT","BEKALU","23","femal","1","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("142","MOGES","ABEBAW","20","male","1","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("143","SOLOMON","YOHANS","20","male","1","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("144","MEKDES","MOLLA","20","femal","1","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("145","ABEBECH","HAILU","20","femal","1","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("146","DESTA","TESFAYE","23","male","1","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("147","FIKADIE","AMBAW","20","male","8","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("148","ESUBALEW","GEBRIE","24","male","8","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("149","ESKEDAR","MIKRIE","23","femal","8","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("150","ENDALEW","WORKU","23","male","8","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("151","ELSA","DEMILEW","23","femal","8","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("152","ELISABET","TILAHUN","20","femal","8","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("153","DEBASU","ADISIA","23","male","8","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("154","BIRHANU","WONDAY","23","male","8","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("155","BELAYNESH","AYALEW","20","male","8","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("156","AWOKE","MIHARI","23","male","8","director","Hasaccount","2022-06-20");
INSERT INTO user VALUES("157","ARAGAW","DAGNAW","20","male","8","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("158","molla","gebeyehu","20","male","8","teacher","Hasaccount","2022-06-20");
INSERT INTO user VALUES("159","zelalem","asefa","23","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("160","desalegn","ferede","20","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("161","geremew","worku","23","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("162","kebede","zelalem","23","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("163","Lamesigin","sewale","23","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("164","Ayalew","Tariku","23","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("165","Abiriham","Abnate","23","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("166","Alemu","chanie","23","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("167","melese","gizachew","23","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("168","seble","balew","20","femal","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("169","tegaye","mulu","23","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("170","bewket","zewdu","24","male","7","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("171","yalem","Getie","23","femal","6","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("172","emebet","Menber","23","femal","6","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("173","Gashaw","Workie","23","male","6","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("174","mihret","Abate","20","femal","6","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("175","Tibeb","Biadig","20","male","6","teacher","Hasaccount","2022-06-22");
INSERT INTO user VALUES("179","gebre","alemu","30","male","7","teacher","Hasaccount","2022-06-26");
INSERT INTO user VALUES("180","chalachew","alehegn","30","male","8","teacher","Hasaccount","2022-06-27");
INSERT INTO user VALUES("181","lalem","yeneneh","30","male","7","teacher","Hasaccount","2022-06-27");
INSERT INTO user VALUES("182","seble","meshesha","30","male","7","teacher","Hasaccount","2022-06-27");
INSERT INTO user VALUES("183","zelalem","anmew","30","male","8","teacher","Hasaccount","2022-06-28");
INSERT INTO user VALUES("184","dawite","minchile","20","male","8","teacher","Hasaccount","2022-06-28");
INSERT INTO user VALUES("185","Biniyam","mengistie","20","male","8","teacher","Hasaccount","2022-06-28");
INSERT INTO user VALUES("186","senayt","Alamiy","20","femal","8","teacher","Hasaccount","2022-06-28");
INSERT INTO user VALUES("187","Lijalem","Gebru","23","male","8","teacher","Hasaccount","2022-06-28");
INSERT INTO user VALUES("189","gebere","lamesgen","20","male","7","teacher","Hasaccount","2022-06-29");


DROP TABLE IF EXISTS w_request_table;

CREATE TABLE `w_request_table` (
  `Wrid` int(11) NOT NULL,
  `wcode` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Amharic` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Biology` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `Physics` int(11) NOT NULL,
  `ICT` int(11) NOT NULL,
  `Total_teach` int(11) NOT NULL,
  PRIMARY KEY (`Wrid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO w_request_table VALUES("11","North Achefer","yadelew","2","2","1","3","2","3","13");
INSERT INTO w_request_table VALUES("14","Burie Zuriya","mulugeta","1","2","1","2","2","1","9");
INSERT INTO w_request_table VALUES("15","Burie Town","wudneh","1","2","1","2","2","1","9");
INSERT INTO w_request_table VALUES("16","sekella","hilena","1","2","1","1","2","2","9");


DROP TABLE IF EXISTS w_transfer_form;

CREATE TABLE `w_transfer_form` (
  `wtrid` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `age` varchar(40) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `dateofocp` date NOT NULL,
  `levelofedu` varchar(100) NOT NULL,
  `major` varchar(40) NOT NULL,
  `wcode` varchar(100) NOT NULL,
  `service` int(11) NOT NULL,
  `multiplayer` double NOT NULL,
  `sum_E` int(11) NOT NULL,
  `first_choice` varchar(40) NOT NULL,
  `second_choice` varchar(40) NOT NULL,
  PRIMARY KEY (`wtrid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO w_transfer_form VALUES("113","habtamu","asmare","23","mal","2015-05-17","Degree","Amharic","Burie Zuriya","223948800","1.2","260236800","Burie Town","sekella");
INSERT INTO w_transfer_form VALUES("114","habtie","dagne","23","mal","2016-04-17","Degree","Physics","Burie Zuriya","194918400","1.2","226022400","Burie Town","sekella");
INSERT INTO w_transfer_form VALUES("115","haimanot","genanew","23","mal","2018-04-17","Degree","Chemistry","Burie Zuriya","131846400","1.2","152582400","Burie Town","sekella");
INSERT INTO w_transfer_form VALUES("116","mandie","Biyazn","23","mal","2018-04-17","Degree","ICT","Burie Zuriya","131846400","1.2","152582400","Burie Town","North Achefer");
INSERT INTO w_transfer_form VALUES("117","marga","fenta","23","mal","2018-12-17","Degree","ICT","Burie Zuriya","110761200","1.2","126313200","Burie Town","sekella");
INSERT INTO w_transfer_form VALUES("118","muluken","bekele","24","mal","2017-03-17","Degree","Amharic","Burie Zuriya","166057200","1.2","191977200","Burie Town","sekella");
INSERT INTO w_transfer_form VALUES("124","HIZKIEL","MENGISTIE","24","mal","2016-02-08","Degree","Chemistry","Burie Zuriya","200876400","1.2","231980400","sekella","Burie Town");
INSERT INTO w_transfer_form VALUES("126","ABEBE","ALEM","23","mal","2016-10-20","Degree","Amharic","Burie Town","178848000","1.1","191808000","Burie Zuriya","sekella");
INSERT INTO w_transfer_form VALUES("127","ABSRA","GETALEM","20","fem","2018-02-28","Degree","English","Burie Town","135990000","1.1","146358000","Burie Zuriya","sekella");
INSERT INTO w_transfer_form VALUES("128","ADDISIE","TENAW","23","fem","2015-02-28","Degree","Amharic","Burie Town","230684400","1.1","248828400","sekella","Burie Zuriya");
INSERT INTO w_transfer_form VALUES("131","ALEMAYEHU","SEFINEH","24","mal","2018-01-20","Degree","Biology","Burie Town","139359600","1.1","149727600","sekella","Burie Zuriya");
INSERT INTO w_transfer_form VALUES("132","AMANUEL","MENGISTIE","20","mal","2017-02-20","Degree","Chemistry","Burie Town","168217200","1.1","181177200","sekella","North Achefer");
INSERT INTO w_transfer_form VALUES("133","SIMACHEW","ADMAS","23","mal","2017-04-20","Degree","Chemistry","Burie Town","163123200","1.1","176083200","sekella","Burie Zuriya");
INSERT INTO w_transfer_form VALUES("147","FIKADIE","AMBAW","20","mal","2015-04-20","Degree","English","sekella","226281600","1.2","262569600","Burie Town","Burie Zuriya");
INSERT INTO w_transfer_form VALUES("148","ESUBALEW","GEBRIE","24","mal","2016-04-20","Degree","English","sekella","194659200","1.2","225763200","Burie Town","Burie Zuriya");
INSERT INTO w_transfer_form VALUES("149","ESKEDAR","MIKRIE","23","fem","2017-02-20","Degree","Biology","sekella","168217200","1.2","194137200","Burie Zuriya","Burie Town");
INSERT INTO w_transfer_form VALUES("150","ENDALEW","WORKU","23","mal","2016-04-20","Degree","Biology","sekella","194659200","1.2","225763200","Burie Town","Burie Zuriya");
INSERT INTO w_transfer_form VALUES("151","ELSA","DEMILEW","23","fem","2017-03-20","Degree","ICT","sekella","165798000","1.2","191718000","Burie Town","Burie Zuriya");
INSERT INTO w_transfer_form VALUES("152","ELISABET","TILAHUN","20","fem","2015-04-20","Degree","ICT","sekella","226281600","1.2","262569600","Burie Zuriya","Burie Town");
INSERT INTO w_transfer_form VALUES("157","ARAGAW","DAGNAW","20","mal","2016-03-20","Degree","Chemistry","sekella","197334000","1.2","228438000","Burie Town","Burie Zuriya");
INSERT INTO w_transfer_form VALUES("158","molla","gebeyehu","20","mal","2015-04-20","Degree","Amharic","sekella","226281600","1.2","262569600","Burie Zuriya","Burie Town");
INSERT INTO w_transfer_form VALUES("161","geremew","worku","23","mal","2018-01-08","Degree","Chemistry","Burie Town","140482800","1.1","150850800","sekella","Burie Zuriya");
INSERT INTO w_transfer_form VALUES("162","kebede","zelalem","23","mal","2017-04-06","Degree","ICT","Burie Town","164419200","1.1","177379200","sekella","Burie Zuriya");


DROP TABLE IF EXISTS woreda;

CREATE TABLE `woreda` (
  `wcode` int(11) NOT NULL,
  `wname` varchar(50) NOT NULL,
  `multiplayer` double NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`wcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO woreda VALUES("1","North Achefer","1.2","2022-06-16");
INSERT INTO woreda VALUES("2","S/Achefer","1.2","2022-06-16");
INSERT INTO woreda VALUES("3","Bahirdar","1.2","2022-06-16");
INSERT INTO woreda VALUES("4","Y/densa","1.2","2022-06-16");
INSERT INTO woreda VALUES("5","Gongi kolela","1.2","2022-06-16");
INSERT INTO woreda VALUES("6","Burie Zuriya","1.2","2022-06-16");
INSERT INTO woreda VALUES("7","Burie Town","1.1","2022-06-16");
INSERT INTO woreda VALUES("8","sekella","1.2","2022-06-17");
INSERT INTO woreda VALUES("12","dembecha","1.2","2022-06-29");


DROP TABLE IF EXISTS wtow_result;

CREATE TABLE `wtow_result` (
  `RID` int(11) NOT NULL,
  `wcode` varchar(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `T_woreda_id` varchar(40) NOT NULL,
  `status` varchar(50) NOT NULL,
  `result_date` date NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



