<div class="container">
    <div class="row">
        <?php
        foreach ($tasks as $item) {
            // echo "Tarea: {$task->name} - Descripción: {$task->description} - Fecha {$task->date}";
            $template = "
        <div class='col-12 col-sm-12 col-md-6 col-lg-4'>
            <div class='card' style='width: 18rem;'>
            <img src='{$item->image_url}' class='card-img-top'>
            <div class='card-body'>
            <h5 class='card-title'>{$item->task}</h5>
            <p class='card-text'>{$item->description}</p>
            <a href='#' class='btn btn-primary'>Go somewhere</a>
            </div>
            </div>
        </div>
        ";
            echo $template;
        }
        ?>
    </div>
</div>