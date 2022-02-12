<?php
    session_start();
    if($_SESSION['status_login']!=true){header('location: login.php');}
?>
<header>
    <div class="left-area">
        <h1>Perpus Online</h1>
    </div>
    <div>
        <a href="logout.php" class="logout">LOG OUT</a>
    </div>
</header>