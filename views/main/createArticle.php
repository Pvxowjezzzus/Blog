<div class="container mt-5">
    <h2>Создание статьи<h2>
    <form class="flex-column d-flex"  action="/createArticle" id='test-form' method="post">
        <input  class='mb-5 form-control' type='text' name='title' placeholder="Заголовок статьи" autocomplete="off">
        <input class='mb-5 form-control' type='text' name='description' placeholder="Описание" autocomplete="off">
        <input  class='mb-5 form-control' type="file" name='image' accept='.png, .jpg, .jpeg' value='Загрузить изображение'>
        <input class='mb-5 mx-5 ' type='submit' value="Создать статью">
    </form>   
    <p class='test'></p>
    <p><?= $_FILES['image']['tmp_name']?></p>
</div>
<script  src='resource/scripts/form.js'></script>
