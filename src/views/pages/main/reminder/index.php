<?php
include "../../../../components/pages/header.php"; ?>
<link rel="stylesheet" href="../../../../css/reminder.css">
<main>
    <form id="metaForm" autocomplete="off">
        <input type="hidden" id="metaId">
        <input type="text" id="titulo" required placeholder="Titulo">
        <textarea id="descricao" required placeholder="Descrição"></textarea>
        <label for="data">Data de Término:</label>
        <input type="date" id="data">
        <button type="submit">Salvar</button>
    </form>

    <table id="metaTable">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data de Término</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <!-- Os registros serão preenchidos dinamicamente com JavaScript -->
        </tbody>
    </table>
</main>
<script src="js/goals.js"></script>
<?php include "../../../../components/pages/footer.php";
?>
