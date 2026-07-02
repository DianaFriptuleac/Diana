               utenti
     +------------------------+
     | utenteId PK            |
     | nome                   |
     | cognome                |
     | email                  |
     | password               |
     | ruolo                  |
     +-----------+------------+
                 |
      +----------+-----------+
      |                      |
      |1:N                   |1:N
      ▼                      ▼

iscrizioni             certificati
+-----------------+    +-------------+
| iscrizioneId PK |    | certificatoId|
| utenteId FK     |    | utenteId FK  |
| corsoId FK      |    | tipo         |
+------+-----------+   +-------------+
       |
       |N:1
       ▼

corsi
+----------------+
| corsoId PK     |
| nome           |
| durataOre      |
+-------+--------+
        |
        |1:N
        ▼

lezioni
+----------------+
| lezioneId PK   |
| corsoId FK     |
| titolo         |
+-------+--------+
        |
        |1:N
        ▼

presenze
+----------------+
| presenzaId PK  |
| lezioneId FK   |
| utenteId FK    |
| presente       |
+----------------+