<div class="container">
    <form method="POST" action="<?php echo base_url() . '/add-task' ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tarea</label>
            <input type="text" class="form-control" name="task" id="task" aria-describedby="emailHelp">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripción</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <input type="file" name="imageTask" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>