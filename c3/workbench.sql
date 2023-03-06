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
