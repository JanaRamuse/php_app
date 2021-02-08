
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Uzdevumu saraksts</title>
<link rel="stylesheet" href="style.css" />

<?php include "../bootcamp_app/pages/navigation.php"; ?>

<h1>todo page</h1>
<a href="?page=logout">logout</a>

<form action="" class="new-task">
    <textarea name="task" required></textarea>
    <button type="submit">Izveidot</button>
</form>
<div class="task-list">
    <div class="template">
    <pre></pre>
    <a href="#" class="option" >OPT</a>
    <a href="#" class="save">Save</a>
    <div class="options">
        <a href="#" class="edit">edit</a>
        <a href="#" class="remove">remove</a>
    </div>
    </div>
</div>
<script>let action = "<?php get_url("?page=request") ?>";</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>