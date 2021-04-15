
<?php
    foreach($tasks as $task){
        // echo "Tarea: {$task->name} - Descripción: {$task->description} - Fecha {$task->date}";
        echo "<div class='alert alert-primary' role='alert'>
        Tarea: {$task->name} - Descripción: {$task->description} - Fecha {$task->date}
        </div>";
    }
?>