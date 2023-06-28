<?php
include "../../../database/connection.php";
include "../../../components/header.php";
?>
<link rel="stylesheet" href="../../../css/createAccount.css">

    <div class="field-form">
        <div class="logo">
        <img src="https://i.ibb.co/1fXJNt9/moodmonitor.png" alt="moodmonitor">
        <div class="fs-1">
            Crie uma Conta
        </div> 
        </div>
        <form action="./src/views/pages/main" method="post" autocomplete="on">
            <div class="field-input">
                <label for="useremail">Email</label>
                <input type="email" name="useremail" id="useremail" required placeholder="samara@gmail.com">
            </div>
            <div class="field-input">
                <label for="username">Nome do usuario</label>
                <input type="text" name="username" id="username" required placeholder="Samara da Cunha">
            </div>
            <div class="field-input">
                <label for="userpassword">Palavra-passe</label>
                <input type="password" name="userpassword" id="userpassword" required placeholder="*********">
            </div>
            <div class="field-input">
                <label for="userpassword">Confirmar Palavra-passe</label>
                <input type="password" name="userpassword" id="userpassword" required placeholder="*********">
            </div>
            <button name="send" id="send">Criar Conta</button>
        </form>
    </div>

<?php include "../../../components/footer.php";
?>
