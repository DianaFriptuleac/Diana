<?php
include 'header.php';
?>
<body>
    <main>
        <div class="form-container">
            <h1>Login System 1</h1>

            <!--form, definisce il modulo, action = login.php con il metodo = POST-->
            <form action="login.php" method="post">

                <label for="email">Email:</label>
                <!--type="email_utente": fontamentale-->
                <input type="email" name="email_utente" placeholder="Es. user@gmail.com" id="email" required>

                <label for="password">Password:</label>
                <input type="password" name="password_utente" placeholder="Es. 1234" id="password" required>

                <button type="submit">Login</button>
            </form>
            <?php
            // If : controlla se la pag. e stata caricata ed eseguitadall'invio del form
            // $_SERVER["REQUEST_METHOD"] -> Contiene il metodo usato per la richiesta attuale (GET, POST) 
            //del form (<form action="login.php" method="post">)

            if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $email = $_POST["email_utente"];
                    $password = $_POST["password_utente"];

                    //Dati del Database
                    $emailCorrente = "studente@gmail.com";
                    $passwordCorrente = "password@123";

                    if($email === $emailCorrente && $password === $passwordCorrente){
                        echo"<div class='login_success'>";
                        echo "<p>Login effettuato con successo!</p>";
                         echo"</div>";
                    }else{
                         echo"<div class='login_error'>";
                         echo "<p>Email o password non corretti.</p>";
                          echo"</div>";
                    }

            }
            ?>
        </div>
    </main>

</body>

</html>