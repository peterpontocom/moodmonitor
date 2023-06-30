<?php
include "../../../../components/pages/header.php";
include "../../../../database/connection.php";
include "../../../../database/varification.php";

?>
<link rel="stylesheet" href="../../../../css/diary.css">


<ul class="diary-list d-none">
  <li><a href="#"><span class="diary-list-title">Titulo do diário</span></a></li>
</ul>
<main>
  <div class="d-flex flex-column">
    <p class="text-center">
    </p>
    <a href="writer.php" class="d-block write">Escrever</a>
  </div>
</main>

<?php include "../../../../components/pages/footer.php";
?>
