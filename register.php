<?php
include 'navbar.php';
?>

<main>
    <h1>Registration To Admin</h1>
    <form method="post" action="register-to-database.php">
        <fieldset class="form-group">
            <label for="email">Email:</label>
            <input name="email" id="email" required type="email" placeholder="emailaddress@email.com" required />
        </fieldset>
        <fieldset class="form-group">
            <label for="fname">First Name:</label>
            <input name="fname" id="fname"  placeholder="John" required />
        </fieldset>
        <fieldset class="form-group">
            <label for="lname">Last Name:</label>
            <input name="lname" id="lname" placeholder="Smith" required />
        </fieldset>
        <fieldset class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
        </fieldset>
        <fieldset class="form-group">
            <label for="passwordCheck">Confirm Password:</label>
            <input type="password" name="passwordCheck" id="passwordCheck" required
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
        </fieldset>
        <div>
            <button>Register</button>
        </div>
    </form>
</main>