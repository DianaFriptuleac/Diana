<?php
include "header.php";
?>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="enter your email" id="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="enter your password" id="password" required>
            <button type="submit">Login</button>

        </form>
    </div>

</body>

</html>