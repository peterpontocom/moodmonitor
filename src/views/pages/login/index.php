<?php
include "../../../components/header.php";

$emailValue = "";

if (isset($_POST["send"])) {
  $emailValue = $_POST["useremail"];
}
?>

<link rel="stylesheet" href="../../../css/login.css">
<link rel="stylesheet" href="../../../css/components/main.css">


    <div class="field-form">
        <div class="logo">
        <img src="https://i.ibb.co/1fXJNt9/moodmonitor.png" alt="moodmonitor">
        <p>
            Monitores suas emoções
        </p>
        </div>
        <form action="./src/views/pages/main" method="post" autocomplete="on">
            <div class="field-input">
                <label for="useremail">Email</label>
                <input type="email" name="useremail" id="useremail" required value="<?php echo $emailValue; ?>">
            </div>
            <div class="field-input">
                <label for="userpassword">Palavra-passe</label>
                <input type="password" name="userpassword" id="userpassword" required>
            </div>
            <p class="text-end">
                Não tem conta? <a href="../createAccount/">Crie uma.</a>
            </p>
            <button name="send" id="send">Entrar</button>
        </form>
    </div>
<?php include "../../../components/footer.php";
?>
