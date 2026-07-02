-- Chiamata del Database 
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
        nome_colonna tipo_colonna [opzioni_colonna]
    );
*/


-- creazione della tabella Utenti(STUDENTI) in mysql
CREATE TABLE Utenti(
    UtenteId INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome NVARCHAR(100) NOT NULL,
    Cognome NVARCHAR(100) NOT NULL,
    Email NVARCHAR(150) UNIQUE NOT NULL,  
    PasswordHach NVARCHAR(255) NOT NULL,
    Sesso ENUM('M', 'F') NOT NULL,
    DataNascita DATE NULL,
    Telefono NVARCHAR(20) UNIQUE NOT NULL,
    Citta NVARCHAR(100) NOT NULL,
    Nazione NVARCHAR(100) NULL,

    Ruolo ENUM('Studente', 'Docente', 'Admin')
    	NOT NULL DEFAULT 'Studente',

    DataRegistrazione TIMESTAMP DEFAULT CURRENT_TIME
);


-- CREAZIONE DELLA TABELLA CORSI IN MYSQL
CREATE TABLE Corsi (
    CorsoId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(150) NOT NULL,
    Descrizione TEXT,
    DurataOre INT,
    DataInizio DATE,
    DataFine DATE
);

-- CREAZIONE DELLA TABELLA ISCRIZIONI IN MYSQL
CREATE TABLE Iscrizioni (
    IscrizioneId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    UtenteId INT NOT NULL,
    CorsoId INT NOT NULL,
    DataIscrizione DATE DEFAULT CURRENT_DATE,

    FOREIGN KEY (UtenteId) REFERENCES Utenti(UtenteId),
    FOREIGN KEY (CorsoId) REFERENCES Corsi(CorsoId)
);


-- CREAZIONE DELLA TABELLA LEZIONI IN MYSQL
CREATE TABLE Lezioni (
    LezioneId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    CorsoId INT NOT NULL,
    Titolo VARCHAR(150) NOT NULL,
    Descrizione TEXT,
    DataLezione DATE NOT NULL,
    OraInizio TIME NOT NULL,
    OraFine TIME NOT NULL,

    FOREIGN KEY (CorsoId) REFERENCES Corsi(CorsoId)
);

-- CREAZIONE DELLA TABELLA PRESENZE IN MYSQL
CREATE TABLE Presenze (
    PresenzaId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    LezioneId INT NOT NULL,
    UtenteId INT NOT NULL,
    Presente BOOLEAN NOT NULL DEFAULT TRUE,

    FOREIGN KEY (LezioneId) REFERENCES Lezioni(LezioneId),
    FOREIGN KEY (UtenteId) REFERENCES Utenti(UtenteId)
);

-- CREAZIONE DELLA TABELLA CERTIFICATI IN MYSQL
CREATE TABLE Certificati(
    CertificatoId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    UtenteId INT NOT NULL,
    CorsoId INT NOT NULL,
    Tipo NVARCHAR(100),
    DataRilascio DATE,
    DataScadenza DATE,

    FOREIGN KEY(UtenteId) REFERENCES Utenti(UtenteId),
    FOREIGN KEY(CorsoId) REFERENCES Corsi(CorsoId)
);
