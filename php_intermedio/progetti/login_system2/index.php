<?php
include "header.php";
?>

<body>
    <div class="container">
        <h1>🗝️ Login System 2</h1>
        
        <form action="login.php" method="post">

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Es. user@gmail.com" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Es. 1234" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>