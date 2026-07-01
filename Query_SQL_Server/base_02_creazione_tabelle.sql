-- Chiamata del DB
USE GestionaleCorsi;
GO

/* 
    Tipi di dati in SQL Server
    INT => Numeri interi
    FLOAT => Numeri decimali
    CHAR => Stringa di lunghezza fissa
    VARCHAR => Stringa di lunghezza variabile
    NVARCHAR => Stringa di lunghezza variabile con supporto Unicode
    DATE => Data
    DATETIME => Data e ora 
*/
/*
    TIP I DI DATI IN MYSQL
    INTEGER => Numeri interi
    FLOAT => Numeri decimali
    CHAR => Stringa di lunghezza fissa
    VARCHAR => Stringa di lunghezza variabile
    TEXT => Stringa di lunghezza variabile
    DATE => Data
    DATETIME => Data e ora
*/


/*
    Sintassi per la creazione delle tabelle in sql e mysql
    CREATE TABLE nome_tabella(
        nome_colonna tipo_colonna [opzioni_colonna],
        nome_colonna tipo_colonna [opzioni_colonna],
        ...
        PRIMARY KEY(nome_colonna)
    );
*/

-- creazione della tabella utenti
CREATE TABLE Utenti(
UtenteId INT NOT NULL PRIMARY KEY IDENTITY(1,1),
Nome NVARCHAR(100) NOT NULL,
Cognome NVARCHAR(100) NOT NULL,
Email NVARCHAR(150) UNIQUE NOT NULL,
PasswordHach NVARCHAR(255) NOT NULL,
Sesso CHAR(1) NOT NULL,
DataNascita DATE NULL,
Telefono NVARCHAR(30) UNIQUE NOT NULL,
Citta NVARCHAR(100) NOT NULL,
Nazione NVARCHAR(100) NULL,

Ruolo NVARCHAR(20) NOT NULL
CHECK (Ruolo IN ('Studente', 'Docente', 'Admin')),

DataRegistrazione DATETIME DEFAULT GETDATE() -- NULL  (SI PUO LASCIARE NULL -> NON OBBLIGATORIO)


);
-- VISULIZZARE LA TABELLA CREATA
-- PER ESSEGUIRE UN SOLO COMMANDO, SELEZIONA COMMANDO E ESEGUI!
SELECT * FROM Utenti;

-- cREAZIONE TABELLA IN MySql
/* 
CREATE TABLE Utenti(
UtenteId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nome NVARCHAR(100) NOT NULL,
Cognome NVARCHAR(100) NOT NULL,
Email NVARCHAR(150) UNIQUE NOT NULL,
PasswordHach NVARCHAR(255) NOT NULL,
Sesso ENUM('M','F') NOT NULL,
DataNascita DATE NULL,
Telefono NVARCHAR(30) UNIQUE NOT NULL,
Citta NVARCHAR(100) NOT NULL,
Nazione NVARCHAR(100) NULL,

Ruolo ENUM('Studente', 'Docente', 'Admin')
    NOT NULL DEFAULT 'Studente',

DataRegistrazione TIMESTAMP DEFAULT CURRENT_TIME
);*/


-- ESERCIZIO 1: CREARE LA TABELLA CORSI
/*
    CREATE TABLE Corsi
        CorsoId ....
        NomeCorso ....
        Descrizione ....TEXT - ilimitato
        DataInizio ....
        DataFine ....
        Durata ....

        CREATE TABLE Corsi(
    CorsoId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NomeCorso VARCHAR(200) NOT NULL,
    Descrizione TEXT NOT NULL,
    DataInizio TIMESTAMP NOT NULL,
    DataFine TIMESTAMP NOT NULL,
    Durata INTEGER NOT NULL
    );
     MySQL ha restituito un insieme vuoto (i.e. zero righe). (La query ha impiegato 0,0004 secondi.)
CREATE TABLE Corsi( CorsoId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
 NomeCorso VARCHAR(200) NOT NULL, Descrizione TEXT NOT NULL, DataInizio DATETIME NOT
  NULL, DataFine DATETIME NOT NULL, Durata INTEGER NOT NULL );
*/
-- Chiamata del DB

CREATE TABLE Corsi(
        CorsoId INT NOT NULL PRIMARY KEY IDENTITY(1,1),
        NomeCorso NVARCHAR(100) NOT NULL,
        Descrizione TEXT NULL,
        DataInizio DATE NULL,
        DataFine DATE NULL,
        Durata INT NULL
);
SELECT * FROM Corsi;


-- CREAZIONE DELLA TABELLA CORSI Iscrizioni
-- Se sevessimo 1 nel utenti avremmo 1 anche in iscrizioni, quindi la chiave
-- esterna serve a collegare le due tabelle.
-- Iscrizioni.UtenteId = Utenti.UtenteId 
CREATE TABLE Iscrizioni(
    IscrizioneId INT NOT NULL PRIMARY KEY IDENTITY(1,1),
    UtenteId INT NOT NULL,
    CorsoId INT NOT NULL,
    DataIscrizione DATETIME DEFAULT GETDATE(),

    -- chiave esterna per la tabella Utenti
    -- REFERENCES Utenti sta faccendo referenza alla tabella Utenti
    FOREIGN KEY (UtenteId) REFERENCES Utenti(UtenteId),
    -- chiave esterna per la tabella Corsi
    FOREIGN KEY (CorsoId) REFERENCES Corsi(CorsoId)
);

SELECT * FROM Iscrizioni;

-- creazione della tabella lezioni
CREATE TABLE lezioni
(
  LezioneId INT NOT NULL PRIMARY KEY IDENTITY(1, 1),
  CorsoId INT NOT NULL,
  Titolo NVARCHAR(200) NOT NULL,
  Descrizione TEXT,
  DataLezione Date,
  OraInizio TIME,
  OdaFine TIME,
  FOREIGN KEY (CorsoId) REFERENCES Corsi(CorsoId)
);
SELECT * FROM Lezioni;

--Creazione tabella presenze
CREATE TABLE Presenze(
PresenzeId INT NOT NULL PRIMARY KEY IDENTITY(1,1),
LezioneId INT NOT NULL,
UtenteId INT NOT NULL,
Presente BIT DEFAULT 1,  /* 1 per true, 0 per falso*/

FOREIGN KEY (LezioneId) REFERENCES Lezioni(LezioneId),
FOREIGN KEY (UtenteId) REFERENCES Utenti(UtenteId),
);
SELECT * FROM Presenze;

-- Creazione della tabella certificati
CREATE TABLE Certificati(
CertificatoId INT NOT NULL PRIMARY KEY IDENTITY(1,1),
UtenteId INT NOT NULL,
CorsoId INT NOT NULL,
Tipo NVARCHAR(100),
DataRilascio DATE,
DataScadenza DATE,

FOREIGN KEY (UtenteId) REFERENCES Utenti(UtenteId),
FOREIGN KEY (CorsoId) REFERENCES Corsi(CorsoId)
);
SELECT * FROM Certificati;

CREATE TABLE corsii (
    CorsiId INT NOT NULL PRIMARY KEY IDENTITY(1,1),
    Nome_Corso NVARCHAR(100) NOT NULL,
    Descrizione TEXT NULL,
    DataInizio DATE NULL,
    DataFine DATE NULL,
    Durata INT NULL
);

/*Rinomina tabella*/
EXEC sp_rename 'corsii', 'Corso';
/*Rinuomina nome coll della tabella Corso il CorsiId in CorsoId*/
EXEC sp_rename 'Corso.CorsiId', 'CorsoId';
/*Rinuomina nome coll della tabella Corso il Nome_Corso in NomeCorso*/
EXEC sp_rename 'Corso.Nome_Corso', 'NomeCorso';

SELECT * FROM Corso;

/*Cancella tabella */
DROP TABLE Corso;