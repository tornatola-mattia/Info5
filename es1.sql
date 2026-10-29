--Collegati al DBMS come utente root:
--1. cd C:\xampp\mysql\bin
--2.mysql -u root -p

--Mostra l’elenco dei database presenti:
SHOW database; 

--Crea un nuovo database chiamato negozio_videogiochi:
CREATE DATABASE negozio_videogiochi;

--Parte B: prima tabella
--Prova a creare una tabella gioco senza specificare alcuna colonna. Annota l’errore ottenuto:
CREATE TABLE gioco;
--ERROR 1113 (42000): A table must have at least 1 column

--Prova a creare la tabella gioco con tre colonne codice, titolo, prezzo, senza indicarne il tipo. Annota l’errore.