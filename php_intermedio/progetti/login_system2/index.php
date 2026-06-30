<?php
include "header.php";
?>

<body>
    <div class="container">
        <h1>🗝️ Login System 2</h1>
        
        <form action="controlla_login.php" method="post">

            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Es. user@gmail.com" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Es. 1234" id="password" required>

            <button type="submit">Login</button>
            <a href="registrazione.php" class="btn btn-online-primary">Register</a>
        </form>
    </div>

</body>

</html>