<?php
  include "../../../../components/pages/header.php";
  include "../../../../components/pages/footer.php";
  include "../../../../database/varification.php";
  include "../../../../database/connection.php";
?>
<link rel="stylesheet" href="../../../../css/diary.css">

<main id="writer">
  <div class="entry-details">
    <h1 id="title"></h1>
    <p id="content"></p>
  </div>

  <script>
    var currentTitle = sessionStorage.getItem("currentTitle");
    var currentContent = sessionStorage.getItem("currentContent");

    document.getElementById("title").innerText = currentTitle;
    document.getElementById("content").innerText = currentContent;
  </script>
</main>