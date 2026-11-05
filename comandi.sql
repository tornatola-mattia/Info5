CREATE TABLE libri(
    isbn CHAR(13) PRIMARY KEY,
    titolo VARCHAR(200) NOT NULL, 
    sottotitolo VARCHAR(300), 
    prezzo DECIMAL(6, 2) NOT NULL DEFAULT 10,
    sconto TINYINT CHECK (sconto >= 0 AND sconto <=100),
    genere SET ('giallo', 'horror', 'rosa', 'infanzia', 'saggio'),
    casa_editrice ENUM('giunti', 'Einaudi', 'feltrinelli', 'mondadori'),
    data_pubblicazione DATE NOT NULL
);


-- CHECK il varole che inserisco controlla che sia valido
-- TINYINT indica un valore intero mo piccolo 
-- SET indica se può appartenere a più valori inidcati nel set. Esempio un libro appartiene più generi
-- ENUM può assumere un solo valore

CREATE TABLE brani(
    id SERIAL PRIMARY KEY,
        -- SERIAL = BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE
    artista VARCHAR(100),
    anno YEAR, 
    album VARCHAR(100), 
    titolo VARCHAR(100),
    durata TIME,
    UNIQUE (artista, album, titolo)
);