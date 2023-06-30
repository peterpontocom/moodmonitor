<?php
include "../../../../components/pages/header.php";
?>

<link rel="stylesheet" href="../../../../css/habit.css">

<main>
  <h1>Hábitos essencias para uma boa saúde mental</h1>
  <h2>Hoje</h2>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>">
      <div class="habits">
        <div class="head">
          <div class="d-flex align-items-center gap-3 w-100">
            <input class="form-check-input checkok" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label done" for="defaultCheck1">Meditação/mindfulness</label>
          </div>
          <a href="mindfulness.php" class="btn-start">Começar</a>
        </div>
      </div>
      <div class="habits">
        <div class="head">
          <div class="d-flex align-items-center gap-3 w-100">
            <input class="form-check-input checkok" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label done" for="defaultCheck2">Desconexão digital: Fique uma 4 horas sem despositivos eletrônicos</label>
          </div>
        </div>
      </div>
      <div class="habits">
        <div class="head">
          <div class="d-flex align-items-center gap-3 w-100">
            <input class="form-check-input checkok" type="checkbox" value="" id="defaultCheck3">
            <label class="form-check-label done" for="defaultCheck3">Aprenda algo novo</label>
          </div>
        </div>
      </div>
      <div class="habits">
        <div class="head">
          <div class="d-flex align-items-center gap-3 w-100">
            <input class="form-check-input checkok" type="checkbox" value="" id="defaultCheck4">
            <label class="form-check-label done" for="defaultCheck4">Caminhe ao ar livre</label>
          </div>
        </div>
      </div>
  </form>
  <script src="js/congrats.js" defer></script>
  <script src="js/description.js"></script>
</main>
<?php
include "../../../../components/pages/footer.php";
?>