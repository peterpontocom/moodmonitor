<?php
include "src/components/header.php"; ?>

<link rel="stylesheet" href="./src/css/login.css">

    <div class="field-form">
        <div class="logo">
        <img src="https://i.ibb.co/1fXJNt9/moodmonitor.png" alt="moodmonitor">
        <p>
            Monitores suas emoções
        </p>
        </div>
        <form action="./src/views/pages/main" method="post" autocomplete="on">
            <div class="field-input">
                <label for="username">Email</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="field-input">
                <label for="userpassword">Palavra-passe</label>
                <input type="password" name="userpassword" id="userpassword" required>
            </div>
            <p class="text-end">
                Não tem conta? <a href="/">Crie uma.</a>
            </p>
            <button name="send">Entrar</button>
        </form>
    </div>
<?php include "src/components/footer.php";
?>
