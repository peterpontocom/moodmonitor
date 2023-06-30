<?php
include "../../../../components/pages/header.php";
include "../../../../database/connection.php";
?>
<link rel="stylesheet" href="../../../../css/diary.css">


<ul class="diary-list">
  <li><a href="#" class="justify-content-between"><span>Titulo</span> <span><button>Apagar</button><button>Editar</button></span></a></li>
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
