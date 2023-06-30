<?php
  include "../../../../components/pages/header.php";
  include "../../../../components/pages/footer.php";
  include "../../../../database/varification.php";
  include "../../../../database/connection.php";
?>
<link rel="stylesheet" href="../../../../css/diary.css">

<main>
  <form action="../../../../database/varification.php" method="post" class="d-flex flex-column gap-3">
    <input type="text" name="diaryTitle" id="diaryTitle" placeholder="Titulo">
    <textarea name="diaryContent" id="diaryContent" cols="30" rows="10" placeholder="Escreva seus sentimentos"></textarea>
    <button class="save" name="save">Guardar</button>
  </form>
</main>