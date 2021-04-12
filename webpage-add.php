<?php
include 'navbar.php';
include 'check.php';
?>

<main>
    <h1>Add a webpage</h1>
    <form method="post" action="webpage-to-database.php">
        <fieldset class="form-group">
            <label for="title">Webpage Title:</label>
            <input name="title" id="title" placeholder="Title" required />
        </fieldset>
        <fieldset class="form-group">
            <label for="content">Content</label>
            <textarea name="content" placeholder="Enter Content Here" rows="5" cols="40" required >
            </textarea>
        </fieldset>
        <div>
            <button>Add</button>
        </div>
    </form>
</main>