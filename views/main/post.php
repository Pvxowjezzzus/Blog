<div class="container" style="background-image: url('/public/materials/<?php echo $data['id']; ?>.jpg')">
    <div class="row">
        <div class="col-lg-11 mx-auto">
            <h2><?=htmlspecialchars($data['title'], ENT_QUOTES); ?></h2>
            <p><?=htmlspecialchars($data['text'], ENT_QUOTES); ?></p>
        </div>
    </div>
</div>