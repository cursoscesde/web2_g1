<?php
var_dump($task);
?>
<div class="container">
    <form method="POST" action="<?php echo base_url()?>/update-edited-task?id=<?php echo $task->id?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tarea</label>
            <input type="text" value="<?php echo $task->task; ?>" class="form-control" name="task" id="task" aria-describedby="emailHelp">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripción</label>
                <input type="text" value="<?php echo $task->description; ?>" name="description" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Url Imagen</label>
                <input type="text" value="<?php echo $task->image_url; ?>" name="imageUrl" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
    </form>
</div>