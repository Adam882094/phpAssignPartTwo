<?php 
include 'navbar.php';
?>
<main>
    <head>
        <h1>Login To The Webpage!</h1>
        <form method="post" action="login-check.php">
        <fieldset class="form-group">
            <label for="email">Email:</label>
            <input name="email" id="email" required type="email" placeholder="emailaddress@email.com" required />
        </fieldset>
        <fieldset class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
        </fieldset>
        <div>
            <button>Login</button>
        </div>
    </head>
</main>