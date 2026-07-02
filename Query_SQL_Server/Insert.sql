/*
    INSERIMENTO DEI DATI SU SQL SERVER E MYSQL

    SINTASSI DI BASE PER L'INSERIMENTO DEI DATI IN SQL SERVER
    INSERT INTO 
    nome_tabella 
        (nome_colonna1, nome_colonna2, nome_colonna3, colonna_intero) 
    VALUES
        ('VALORE1', 'VALORE2', NULL, 123..);
*/
USE GestionaleCorsi;
GO

-- inserimento dei dati nella tabela Corsi in sql server
select * from Corsi;

INSERT INTO Corsi
     (NomeCorso, Descrizione, DataInizio, DataFine, Durata)
VALUES
    ('Corso di SQL Server', 'Descrizione del corso di SQL Server', '2023-01-01', '2023-06-01', 120);

    INSERT INTO Corsi
(NomeCorso, Descrizione, DataInizio, DataFine, Durata)
VALUES
('Corso Frontend Developer', 'Descrizione corso FE...', '2026/09/10', '2026/12/10', 240),
('Corso Backend Developer', 'Descrizione corso di Backend...', '2026/08/12', '2026/09/12', 150),
('PHP Base','Corso introduttivo','2026/09/01','2026/09/30', 100),
('Laravel Base','Framework Laravel','2026/10/01','2026/10/30', 120),
('MySQL','Database relazionali','2026/11/01','2026/11/20', 90),
('Git e GitHub','Versionamento','2026/11/21','2026/11/30', 80),
('Power BI','Business Intelligence','2026/12/01','2026/12/20', 90),
('Corso di cucina creativa', 'Impara L''arte di cucinare e mangiare bene', '2026/07/03', '2026/07/31', 90);

SELECT * FROM Corsi;

-- INSERIMENTO DEI DATI UTENTI
INSERT INTO Utenti (Nome, Cognome, Email, PasswordHach, Sesso, DataNascita, Telefono, Citta, Nazione, Ruolo)
VALUES
('Mario','Rossi','mario.rossi@example.com','hash1','M','1990-01-10','3331110001','Roma','Italia','Studente'),
('Luca','Bianchi','luca.bianchi@example.com','hash2','M','1988-03-22','3331110002','Milano','Italia','Docente'),
('Anna','Verdi','anna.verdi@example.com','hash3','F','1995-07-15','3331110003','Napoli','Italia','Studente'),
('Sara','Neri','sara.neri@example.com','hash4','F','1992-11-02','3331110004','Torino','Italia','Admin'),
('Paolo','Ferrari','paolo.ferrari@example.com','hash5','M','1991-05-12','3331110005','Bologna','Italia','Studente'),
('Giulia','Russo','giulia.russo@example.com','hash6','F','1996-09-18','3331110006','Firenze','Italia','Studente'),
('Marco','Gallo','marco.gallo@example.com','hash7','M','1989-12-01','3331110007','Roma','Italia','Docente'),
('Elena','Fontana','elena.fontana@example.com','hash8','F','1993-04-20','3331110008','Genova','Italia','Studente'),
('Davide','Greco','davide.greco@example.com','hash9','M','1994-06-11','3331110009','Verona','Italia','Studente'),
('Chiara','Longo','chiara.longo@example.com','hash10','F','1997-08-25','3331110010','Padova','Italia','Studente'),
('Stefano','Martini','stefano.martini@example.com','hash11','M','1987-02-14','3331110011','Roma','Italia','Docente'),
('Laura','Moretti','laura.moretti@example.com','hash12','F','1998-10-30','3331110012','Trieste','Italia','Studente'),
('Andrea','Riva','andrea.riva@example.com','hash13','M','1990-03-03','3331110013','Bergamo','Italia','Studente'),
('Valentina','Sanna','valentina.sanna@example.com','hash14','F','1995-12-12','3331110014','Cagliari','Italia','Studente'),
('Giorgio','Testa','giorgio.testa@example.com','hash15','M','1986-07-07','3331110015','Roma','Italia','Admin'),
('Martina','Serra','martina.serra@example.com','hash16','F','1999-01-21','3331110016','Pisa','Italia','Studente'),
('Roberto','Villa','roberto.villa@example.com','hash17','M','1993-09-09','3331110017','Como','Italia','Studente'),
('Silvia','Rossi','silvia.rossi@example.com','hash18','F','1994-05-05','3331110018','Lecce','Italia','Studente'),
('Fabio','Costa','fabio.costa@example.com','hash19','M','1988-04-04','3331110019','Roma','Italia','Docente'),
('Ilaria','Ferri','ilaria.ferri@example.com','hash20','F','1997-06-06','3331110020','Bari','Italia','Studente'),
('Tommaso','Gatti','tommaso.gatti@example.com','hash21','M','1992-02-02','3331110021','Modena','Italia','Studente'),
('Serena','Piras','serena.piras@example.com','hash22','F','1996-03-13','3331110022','Cagliari','Italia','Studente'),
('Alessio','Sala','alessio.sala@example.com','hash23','M','1991-08-08','3331110023','Monza','Italia','Studente'),
('Beatrice','Lodi','beatrice.lodi@example.com','hash24','F','1998-09-09','3331110024','Parma','Italia','Studente'),
('Riccardo','Fabbri','riccardo.fabbri@example.com','hash25','M','1989-10-10','3331110025','Ferrara','Italia','Docente'),
('Elisa','Monti','elisa.monti@example.com','hash26','F','1995-11-11','3331110026','Rimini','Italia','Studente'),
('Daniele','Sarti','daniele.sarti@example.com','hash27','M','1993-12-12','3331110027','Forlì','Italia','Studente'),
('Marta','Gori','marta.gori@example.com','hash28','F','1997-01-01','3331110028','Arezzo','Italia','Studente'),
('Nicola','Pellegrini','nicola.pellegrini@example.com','hash29','M','1990-02-02','3331110029','Livorno','Italia','Studente'),
('Francesca','Rizzi','francesca.rizzi@example.com','hash30','F','1996-03-03','3331110030','Perugia','Italia','Studente');

SELECT * FROM Utenti;

SELECT * FROM Corsi;
-- INSERIMENTO DEI DATI CORSI

INSERT INTO Corsi (NomeCorso, Descrizione, DataInizio, DataFine, Durata)
VALUES
('SQL Base','Introduzione SQL','2024-01-10','2024-02-10',30),
('SQL Avanzato','Query complesse','2024-02-15','2024-03-20',35),
('C# Base','Fondamenti C#','2024-03-01','2024-04-01',30),
('C# Avanzato','OOP avanzata','2024-04-05','2024-05-10',40),
('Java Base','Fondamenti Java','2024-05-15','2024-06-20',45),
('Java Avanzato','Programmazione avanzata','2024-06-25','2024-07-30',50),
('Python Base','Introduzione Python','2024-01-05','2024-02-05',30),
('Python Avanzato','Analisi dati','2024-02-10','2024-03-15',35),
('HTML & CSS','Web design','2024-03-20','2024-04-25',30),
('JavaScript','Programmazione web','2024-04-30','2024-06-05',35),
('React','Frontend moderno','2024-06-10','2024-07-15',40),
('Node.js','Backend JS','2024-07-20','2024-08-25',45),
('PHP Base','Fondamenti PHP','2024-01-12','2024-02-12',30),
('PHP Avanzato','Sviluppo web','2024-02-18','2024-03-25',35),
('MySQL','Database relazionali','2024-03-30','2024-05-01',40),
('SQL Server','Gestione DB','2024-05-05','2024-06-10',35),
('Linux Base','Fondamenti Linux','2024-06-15','2024-07-20',30),
('Linux Avanzato','Amministrazione','2024-07-25','2024-08-30',40),
('Docker','Containerizzazione','2024-01-20','2024-02-25',35),
('Kubernetes','Orchestrazione','2024-03-01','2024-04-10',40),
('Git','Controllo versione','2024-04-15','2024-05-20',30),
('DevOps','Pipeline CI/CD','2024-05-25','2024-06-30',35),
('Cybersecurity','Sicurezza informatica','2024-07-05','2024-08-10',40),
('AI Base','Fondamenti IA','2024-08-15','2024-09-20',35),
('Machine Learning','Modelli ML','2024-09-25','2024-11-01',45),
('Data Science','Analisi avanzata','2024-11-05','2024-12-10',40),
('Excel Avanzato','Funzioni avanzate','2024-01-03','2024-02-03',30),
('Power BI','Dashboard interattive','2024-02-08','2024-03-10',35),
('Blazor','Web app .NET','2024-03-15','2024-04-20',40),
('ASP.NET Core','Backend .NET','2024-04-25','2024-06-01',45);

SELECT * FROM Corsi;

INSERT INTO Iscrizioni (UtenteId, CorsoId, DataIscrizione)
VALUES (1, 1, '2016/04/10');

INSERT INTO Iscrizioni (UtenteId, CorsoId, DataIscrizione)
VALUES (1, 1, '2016-04-10');

SELECT * FROM Iscrizioni;

SELECT * FROM Iscrizioni;


-- Inserimento dei dati della tabella Iscrizioni
INSERT INTO Iscrizioni (UtenteId, CorsoId, DataIscrizione)
VALUES
(1, 1, GETDATE()), (2, 1, '2016/04/10'), (3, 2, '2020/01/01'), (4, 2, '2025/10/04'),
(5, 3, '2016/04/10'), (6, 3, NULL), (7, 4, GETDATE()), (8, 4, '2016/12/10'),
(9, 5, GETDATE()), (10, 5, '2016/04/10'), (11, 6, '2016/04/10'), (12, 6, GETDATE()),
(13, 7, '2016/04/10'), (14, 7, null), (15, 8, '2016/04/10'), (16, 8, GETDATE()),
(17, 9, GETDATE()), (18, 9, NULL), (19, 10, GETDATE()), (20, 10, '2026/04/10'),
(21, 11, GETDATE()), (22, 11, NULL), (23, 12, GETDATE()), (24, 12, '2026/04/10'),
(25, 13, GETDATE()), (26, 13, '2025/01/01'), (27, 14, GETDATE()), (28, 14, '2026/05/12'),
(29, 15, GETDATE()), 
(30, 39, GETDATE());

select * from Iscrizioni;

select * from Lezioni;

-- INSERIMENTI DEI DATI DELLE LEZIONI
INSERT INTO Lezioni (CorsoId, Titolo, Descrizione, DataLezione, OraInizio, OraFine)
VALUES
(1,'Intro SQL','Concetti base','2024-01-12','10:00','12:00'),
(1,'SELECT','Query base','2024-01-15','10:00','12:00'),
(2,'Join','Join avanzate','2024-02-18','14:00','16:00'),
(2,'Subquery','Query nidificate','2024-02-20','14:00','16:00'),
(3,'Variabili','Fondamenti C#','2024-03-05','09:00','11:00'),
(3,'Classi','OOP base','2024-03-07','09:00','11:00'),
(4,'Ereditarietà','OOP avanzata','2024-04-10','15:00','17:00'),
(4,'Interfacce','Programmazione avanzata','2024-04-12','15:00','17:00'),
(5,'Java Intro','Fondamenti Java','2024-05-17','10:00','12:00'),
(5,'OOP Java','Classi e oggetti','2024-05-19','10:00','12:00'),
(6,'Java Avanzato','Stream API','2024-06-27','14:00','16:00'),
(6,'Lambda','Funzioni lambda','2024-06-29','14:00','16:00'),
(7,'Python Intro','Sintassi base','2024-01-07','09:00','11:00'),
(7,'Liste','Strutture dati','2024-01-09','09:00','11:00'),
(8,'Pandas','Analisi dati','2024-02-12','10:00','12:00'),
(8,'Numpy','Calcolo scientifico','2024-02-14','10:00','12:00'),
(9,'HTML Base','Struttura pagine','2024-03-22','09:00','11:00'),
(9,'CSS Base','Stile pagine','2024-03-24','09:00','11:00'),
(10,'JS Intro','Variabili e funzioni','2024-05-02','10:00','12:00'),
(10,'DOM','Manipolazione DOM','2024-05-04','10:00','12:00'),
(11,'React Intro','Componenti','2024-06-12','14:00','16:00'),
(11,'Hooks','Hooks base','2024-06-14','14:00','16:00'),
(12,'Node Intro','Server JS','2024-07-22','15:00','17:00'),
(12,'Express','Routing','2024-07-24','15:00','17:00'),
(13,'PHP Intro','Sintassi base','2024-01-14','09:00','11:00'),
(13,'Form','Gestione form','2024-01-16','09:00','11:00'),
(14,'PHP Avanzato','OOP PHP','2024-02-20','10:00','12:00'),
(14,'PDO','Database PHP','2024-02-22','10:00','12:00');

SELECT * FROM Lezioni;

-- INSERT PRESENZE
INSERT INTO Presenze (LezioneId, UtenteId, Presente)
VALUES
(1,1,1),(1,2,1),(2,1,0),(2,2,1),
(3,3,1),(3,4,1),(4,3,1),(4,4,0),
(5,5,1),(5,6,1),(6,5,1),(6,6,0),
(7,7,1),(7,8,1),(8,7,1),(8,8,1),
(9,9,1),(9,10,1),(10,9,0),(10,10,1),
(11,11,1),(11,12,1),(12,11,1),(12,12,0),
(13,13,1),(13,14,1),(14,13,1),(14,14,1),
(15,15,1),(15,16,1);

-- INSERT CERTIFICAZIONI
INSERT INTO Certificati (UtenteId, CorsoId, Tipo, DataRilascio, DataScadenza)
VALUES
(1,1,'Partecipazione','2024-02-15','2026-02-15'),
(2,1,'Merito','2024-02-15','2026-02-15'),
(3,2,'Avanzato','2024-03-25','2026-03-25'),
(4,2,'Partecipazione','2024-03-25','2026-03-25'),
(5,3,'Completamento','2024-04-05','2026-04-05'),
(6,3,'Partecipazione','2024-04-05','2026-04-05'),
(7,4,'Merito','2024-05-12','2026-05-12'),
(8,4,'Completamento','2024-05-12','2026-05-12'),
(9,5,'Partecipazione','2024-06-22','2026-06-22'),
(10,5,'Merito','2024-06-22','2026-06-22'),
(11,6,'Completamento','2024-07-30','2026-07-30'),
(12,6,'Partecipazione','2024-07-30','2026-07-30'),
(13,7,'Merito','2024-02-05','2026-02-05'),
(14,7,'Completamento','2024-02-05','2026-02-05'),
(15,8,'Partecipazione','2024-03-15','2026-03-15'),
(16,8,'Merito','2024-03-15','2026-03-15'),
(17,9,'Completamento','2024-04-25','2026-04-25'),
(18,9,'Partecipazione','2024-04-25','2026-04-25'),
(19,10,'Merito','2024-06-05','2026-06-05'),
(20,10,'Completamento','2024-06-05','2026-06-05'),
(21,11,'Partecipazione','2024-07-15','2026-07-15'),
(22,11,'Merito','2024-07-15','2026-07-15'),
(23,12,'Completamento','2024-08-25','2026-08-25'),
(24,12,'Partecipazione','2024-08-25','2026-08-25'),
(25,13,'Merito','2024-02-12','2026-02-12'),
(26,13,'Completamento','2024-02-12','2026-02-12'),
(27,14,'Partecipazione','2024-03-25','2026-03-25'),
(28,14,'Merito','2024-03-25','2026-03-25'),
(29,15,'Completamento','2024-05-01','2026-05-01'),
(30,15,'Partecipazione','2024-05-01','2026-05-01');

SELECT * FROM Certificati;