USE GestionaleCorsi;

--modifica nome tabella in sql server
EXEC sp_rename 'Partecipanti', 'Utenti';

--modifica colonna NomeCosro
EXEC sp_rename 'Corsi.Nome', 'NomeCorso';

--modifica colonna NomeCosro
EXEC sp_rename 'Lezioni.OdaFine', 'OraFine';


--modifica Descrizione
ALTER TABLE Corsi
ALTER  COLUMN Descrizione NVARCHAR(300) NULL

-- modifica tipo colonna -- parola chiave ALTER 
-- MAX - text no limit
ALTER TABLE Corsi
ALTER  COLUMN NomeCorso NVARCHAR(MAX) NOT NULL


