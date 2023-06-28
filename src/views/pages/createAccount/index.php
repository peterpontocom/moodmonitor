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
        <form action="../../../database/varification.php" method="post" autocomplete="on">
            <div class="field-input">
            <div class="field-input">
                <label for="username">Nome do usuario</label>
                <input type="text" name="username" id="username" required placeholder="Samara da Cunha">
            </div>
                <label for="useremail">Email</label>
                <input type="email" name="useremail" id="useremail" required placeholder="samara@gmail.com">
            </div>
            <div class="field-input">
                <label for="userpassword">Palavra-passe</label>
                <input type="password" name="userpassword" id="userpassword" required placeholder="*********">
            </div>
            <div class="field-input">
                <label for="confirmUserPassword">Confirmar Palavra-passe</label>
                <input type="password" name="confirmUserPassword" id="confirmUserPassword" required placeholder="*********">
            </div>
            <button name="addAccount" id="addAccount">Criar Conta</button>
        </form>
    </div>

<?php include "../../../components/footer.php";
?>
