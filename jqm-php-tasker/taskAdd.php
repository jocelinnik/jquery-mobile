<?php
    include 'config.php';
    include 'functions.php';
    include 'DB.php';
    include 'Task.php';

    if (empty($_SESSION['user_id'])){
        echo showDialog("Erro", "Necessário Login.", "index.php");
    }else{
        if (!empty($_POST['title'])){
            $t = new Task();
            $t->create($_POST['title']);
            $html = showDialog("Sucesso", "Tarefa criada com sucesso", "tasks.php");
            echo $html;
        }
    }
?>

<div data-role="page">
    <div data-role="header">
        <a href="index.php" class="ui-btn" data-rel="back">Voltar</a>
        <h1> Adicionar Tarefa </h1>
    </div>
    <div data-role="content">
        <form action="taskAdd.php" method="POST">
            <div class="ui-field-contain">
                <label for="title">Título:</label>
                <input type="text" name="title" id="title" value="<?php echo $_POST['title']?>">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>