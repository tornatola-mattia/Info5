CREATE TABLE libri(
    isbn CHAR(13) NOT NULL UNIQUE,
    titolo VARCHAR(200) NOT NULL, 
    sottotitolo VARCHAR(300), 
    prezzo DECIMAL(6, 2) NOT NULL DEFAULT 10,
    sconto TINYINT CHECK (sconto >= 0 AND sconto <=100),
    genere SET ('giallo', 'horror', 'rosa', 'infanzia', 'saggio')
    casa_editrice ENUM('giunti', 'Einaudi', 'feltrinelli', 'mondadori')
);


-- CHECK il varole che inserisco controlla che sia valido
-- TINYINT indica un valore intero mo piccolo 
-- SET indica se può appartenere a più valori inidcati nel set. Esempio un libro appartiene più generi
-- ENUM può assumere un solo valore

