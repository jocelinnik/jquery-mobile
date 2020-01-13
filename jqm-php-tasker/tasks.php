<?php
    include 'config.php';
    include 'functions.php';
    include 'DB.php';
    include 'Task.php';

    $t = new Task();
    $tasks = $t->getByStatus("0");
    $tasks_list = "";
    foreach ($tasks as $task) {
        $tasks_list .= "<li id='{$task->id}'>{$task->title}</li>";
    }
?>
<div data-role="page">
    <div data-role="header">
        <h1> Tarefas </h1>
        <a href="taskAdd.php" class="ui-btn ui-btn-right">Adicionar</a>
    </div>
    <div data-role="content">
        <ul id="list" data-role="listview">
            <?php echo $tasks_list?>
        </ul>
    </div>
    <script type="text/javascript">
        $("#list").on("swiperight",">li",function(event){
            var li = $(this);
            var span = li.children();
            console.log("Excluindo " + span.html());
            var idTask = li.attr('id');
            $(this).animate({
                marginLeft: parseInt($(this).css('marginLeft'),10) === 0 ? $(this).outerWidth() : 0 
            }).fadeOut('fast', function(){
                li.remove();
            });
            //completa a tarefa
            $.ajax({
                url: "doCompleteTask.php?taskId=" + idTask, 
                success: function(result){
                    console.log(result);
                }
            });
        });
    </script>
</div>