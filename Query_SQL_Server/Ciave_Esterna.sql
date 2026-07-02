use GestionaleCorsi;

ALTER TABLE Iscrizioni
ADD CONSTRAINT FK_Iscrizione_Utenti
	FOREIGN KEY (UtenteId) REFERENCES Utenti(UtenteId);