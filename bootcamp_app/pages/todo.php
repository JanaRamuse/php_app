<?php include "../bootcamp_app/components/head.php"; ?>
<title>Uzdevumu saraksts</title>


<?php include "../bootcamp_app/components/navigation.php"; ?>

<h1>todo page</h1>
<a href="<?php get_url('?page=logout'); ?>">logout</a>

<form action="" class="new-task">
    <textarea name="task" required></textarea>
    <button type="submit">Izveidot</button>
</form>
<div class="task-list">
    
</div>
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