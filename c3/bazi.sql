CREATE TABLE studenti (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(45) NULL,
	lastname VARCHAR(45) NULL,
	age INT NULL,
	email VARCHAR(45) NULL,
	phone VARCHAR(45) NULL,
	PRIMARY KEY (id),
	UNIQUE INDEX id_UNIQUE ( id ASC )
);

INSERT INTO `studenti` (`id`, `name`, `lastname`, `age`, `email`, `phone`) VALUES
(1, 'Mia', 'Koluci', 30, 'm.k@hotmail.com', '072321321'),
(2, 'Andrej', 'Dimitrov', 45, 'a.d@yahoo.com', '075151515'),
(3, 'Klara', 'Manasieva', 27, 'k.m@outlook.com', '075325476'),
(4, 'Melina', 'Melinovska', 22, 'm.m@gmail.com', '078789456'),
(5, 'Ognen', 'Pozarovski', 38, 'o.p@hotmail.com', '070707200'),
(6, 'Andrej', 'Vlahovski', 18, 'a.v@outlook.com', '072225789'),
(7, 'Blagojce', 'Solenovski', 49, 'b.s@yahoo.com', '078784512');

CREATE TABLE `transactions` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`transaction_number` varchar(50) NOT NULL,
	`type` varchar(50) NOT NULL,
	`sum` bigint NOT NULL,
	`date` datetime DEFAULT CURRENT_TIMESTAMP,
	`student_id` int(11) NOT NULL,
	PRIMARY KEY (`id`),
	CONSTRAINT FK_transaction_student FOREIGN KEY (student_id) REFERENCES studenti (id) ON DELETE CASCADE
);


INSERT INTO transactions ( id , transaction_number, type, sum , date , student_id )
VALUES
( 1, '5454-3251-4781-5522' , 'deposit' , 35000, '2020-04-01 00:00:00', 3 ),
( 2, '5454-3251-4781-5522' , 'withdraw' , 2500, '2020-04-02 00:00:00', 3 ),
( 3, '5454-3251-4781-5522' , 'withdraw' , 6000, '2020-04-04 00:00:00', 3 ),
( 4, '5454-3251-4781-5522' , 'deposit' , 20000, '2020-04-15 00:00:00', 3 ),
( 5, '1212-8765-4897-1235' , 'deposit' , 35000, '2020-04-07 00:00:00', 7 ),
( 6, '1212-8765-4897-1235' , 'withdraw' , 8000, '2020-04-09 00:00:00', 7 );