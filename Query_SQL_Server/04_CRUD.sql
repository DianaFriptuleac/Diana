use GestionaleCorsi;

-- Select per restituire i record di una tabella

/*  SELECT *
          colonne
          FROM tabella;
*/
SELECT 
     *
     FROM Corsi;

     -- Select Solo le col: NomeCorso, Descrizione, Durata
     SELECT 
     NomeCorso,
     Descrizione,
     Durata
     FROM Corsi;

-- Concatenazione di due colonne
    SELECT 
     NomeCorso + ' ' + Descrizione, Durata
     FROM Corsi;

     --ALIASS per definire il nome di una colonna (di concatenazione) 
        SELECT 
     NomeCorso + ' ' + Descrizione AS Corso, Durata 
     FROM Corsi;

     
     --ALIASS per definire il nome di una colonna (di concatenazione) 
        SELECT 
     NomeCorso + ' ' + Descrizione AS 'Nome Corso e Descrizione', Durata 
     FROM Corsi;

          --ALIASS per definire il nome di una colonna (di concatenazione) 
        SELECT 
     NomeCorso + ' ' + Descrizione AS Nome_Corso_Descrizione, Durata 
     FROM Corsi;
          --ALIASS per definire il nome di una colonna (di concatenazione) 
        SELECT 
     NomeCorso + ' ' + Descrizione AS [Nome Corso e Descrizione], Durata 
     FROM Corsi;


