<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link rel='stylesheet'  href="/resource/css/bootstrap.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light mx-sm-5" id="mainNav">
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <h1>Практическая по РКИС</h1>
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                                <a class="nav-link" href="/">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">Обо мне</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/createArticle">Создать статью</a>
                            </li>
                        </ul>
                </div>
            </nav>
        </header>
        <?php echo $content; ?>
        <hr>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="mx-auto">
                      
                        <p class="copyright text-muted">&copy; 2020, PvxowJezzzus</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>