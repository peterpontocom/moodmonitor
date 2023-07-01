<?php
include "../../../../components/pages/header.php";
include "../../../../database/connection.php";
include "../../../../database/varification.php";

?>
<link rel="stylesheet" href="../../../../css/diary.css">


<main>
  <div class="entry-form">
    <input type="text" id="titleInput" placeholder="Título">
    <textarea id="contentInput" placeholder="É uma prática terapêutica que nos permite processar, compreender e transformar nossos sentimentos. Ao dar voz às nossas emoções por meio da escrita, abrimos caminho para o crescimento pessoal, a cura emocional e a construção de uma vida mais plena e significativa."></textarea>
    <button onclick="addEntry()">Adicionar Página</button>
  </div>

  <div class="entries" id="entriesContainer">
    <!-- Aqui serão exibidas as entradas do diário -->
  </div>
</main>
<script src="js/diary.js"></script>
<?php include "../../../../components/pages/footer.php";
?>
