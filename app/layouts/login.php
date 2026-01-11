
<h2>Access to Shooting Mood</h2>

<?= $message ?>

<?php if (isset($_GET['timeout'])): ?> 
    <p>Session expired</p> 
<?php endif; ?>

<form method="POST">
    <p>
        User: <input type="text" name="login">
    </p>
    <p>
        Password: <input type="password" name="password">
    </p>
    <input type="submit" name="order" value="Log in">
</form>



