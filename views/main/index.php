    
<div class="container">
    <div class='row mt-5'>
        <p>В данной работе вам необходимо с помощью PHP реализовать проект интернет-ресурса 
        с простейшими элементами навигации и вывода информации. Полностью выполненные задания до звёздочки — оценка «4» (хорошо).</p>
    </div>
    <div class="row">
        <div>
            <?php if (empty($list)): ?>
                <p>Список постов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                        <a href="/post/<?= $val['id']; ?>">
                            <h2 class="post-title"><?= $val['title'] ?></h2>
                            <h5 class="post-subtitle text-black-50"><?= substr(rtrim($val['text'], "!,.-"), 0, 125)."..." ?></h5>
                        </a>
                    </div>
                    <hr>
                <?php endforeach; ?>
             
            <?php endif; ?>
        </div>
    </div>
</div>