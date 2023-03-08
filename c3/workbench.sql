SELECT *
FROM transactions;

SELECT id, transaction_number, sum, sum + 10 * 100 'zgolemena suma'
FROM transactions;

SELECT DISTINCT transaction_number
FROM transactions;

SELECT *
FROM studenti
WHERE lastname LIKE '%ski';

SELECT *
FROM transactions
WHERE sum IN (2500,8000,20000);

SELECT *
FROM transactions
WHERE sum >= 8000 AND sum <= 20000


SELECT *
FROM transactions
WHERE sum BETWEEN 8000 AND 20000;


SELECT *
FROM transactions;

SELECT id, transaction_number, sum, sum + 10 * 100 'zgolemena suma'
FROM transactions;

SELECT DISTINCT transaction_number
FROM transactions;

SELECT *
FROM studenti
WHERE lastname LIKE '%ski';

SELECT *
FROM transactions
WHERE sum IN (2500,8000,20000);

SELECT *
FROM transactions
WHERE sum >= 8000 AND sum <= 20000


SELECT *
FROM transactions
WHERE sum BETWEEN 8000 AND 20000;

SELECT *
FROM studenti
WHERE studenti.lastname REGEXP 'ski$';


SELECT *
FROM studenti
WHERE studenti.lastname REGEXP '[a-z]ki|ov$|^Ma';
^ znaci mora da zapocne so zborceto vpisano vo stringot
$ znaci mora da zavrsi so karakterite vpisani vo stringot

USE phpmyadmin;


SELECT s.name, s.lastname, t.transaction_number, t.type, t.date
FROM studenti as s
JOIN transactions as t ON s.id = t.student_id
GROUP BY t.date, s.name;


SELECT s.name, s.lastname, s.age , t.date
FROM studenti as s
JOIN transactions as t ON s.id = t.student_id
ORDER BY t.date
LIMIT 3;

SELECT s.id, s.name, s.lastname, t.type, t.sum
FROM studenti s
JOIN transactions t ON s.id = t.student_id
JOIN sobi s ON s.id = t.student_id -- ne postoi treta tabela, ovoj join e teoretski so cel da se objasni joinovi na poveke od 2 tabeli
where t.type = 'deposit';


SELECT s.id, s.name, s.lastname, t.transaction_number, t.sum, t.type
FROM studenti as s
JOIN transactions as t ON s.id = t.student_id
WHERE t.sum <= 8000 AND t.type = 'withdraw';

DELIMITER  //
CREATE FUNCTION sobiranje(i1 INT, i2 INT)
RETURNS INT
BEGIN
	DECLARE i3 INT;
    DECLARE i4 INT;
    DECLARE result INT;
	
    SET i3 = 20;
    SET i4 = 6;
	
    SET result = i1 + i2 + i3 + i4;
	
    RETURN result;
END//
DELIMITER ;

SELECT sobiranje(4,15);

DROP FUNCTION sobiranje;

