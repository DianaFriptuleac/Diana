-- Commento di una riga

/*
	Commenti 
	Commenti
	Commenti
	Commenti
	Commenti

	IF()
	{
	};
*/ 

-- Creazione del Database in sql e MySql
IF DB_ID('GestionaleCorsi') IS NOT NULL
BEGIN
	ALTER DATABASE GestionaleCorsi SET SINGLE_USER WITH ROLLBACK IMMEDIATE;
	DROP DATABASE GestionaleCorsi;
END;
GO

--CREAZIONE DEL DATABASE
CREATE DATABASE GestionaleCorsi;
GO

-- USO DEL DATABASE
USE GestionaleCorsi;
GO