<?php
include "../../../../components/pages/header.php";
?>

<link rel="stylesheet" href="../../../../css/habit.css">
<link rel="stylesheet" href="css/margin.css">

<main>
  <h1>Meditação</h1>
  <h2>Fique sozinho por 30 minutos.</h2>
  <p>
    Coloque seu telemóvel no silêncio.
    Foque sua atenção no momento presente, observe seus pensamentos e emoções sem julgamento e cultive a calma e a clareza mental. Faça pausas ao longo do dia para praticar a respiração consciente. Respire profundamente, prestando atenção à sua respiração e permitindo-se relaxar e se acalmar.
  </p>
  <div class="d-flex gap-5 justify-content-center align-items-center">
    <div id="timer">
      <div id="liquid"></div>
      <span id="countdown">30:00</span>
    </div>
    <img src="../../../../../public/Mental health-bro.svg" alt="" class="med">
  </div>
  <script src="js/timer.js"></script>
</main>
<?php
include "../../../../components/pages/footer.php";
?>