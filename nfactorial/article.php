<?php
require_once 'database/connection.php';
$news_id = $_GET['id'];
$sql = "SELECT * FROM news WHERE news_id = :news_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':news_id', $news_id);
$stmt->execute();
$news = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $news['title']; ?></title>
    <link rel="icon" href="assets/square-logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <nav>
        <div class="main-nav container flex">
            <div class="left-nav flex">
                <ul class="flex">
                    <li class="nav-links hover-link">NEWS</li>
                    <li class="nav-links hover-link">LIFE</li>
                    <li class="nav-links hover-link">SPORT</li>
                    <li class="nav-links hover-link">TRAVEL</li>
                    <li class="nav-links hover-link">GUIDE</li>
                    <li class="nav-links hover-link">EDU</li>
                    <li class="nav-links hover-link">AUTO</li>
                </ul>
            </div>
    
            <div class="right-nav flex">
                <ul class="flex">
                    <li class="weather-widget">
                        <div class="flex">
                            <i class="material-icons">cloud</i>
                            <p class="nav-text">18°C</p>
                        </div>
                    </li>
                    <li class="dollar-course">
                        <div class="flex">
                            <span class="material-symbols-outlined">attach_money</span>
                            <p class="nav-text">445</p>
                            <img src="assets/icons/course-up.svg" class="course" alt="course-up">
                        </div>
                    </li>
                    <li class="euro-course">
                        <div class="flex">
                            <span class="material-symbols-outlined">euro_symbol</span>
                            <p class="nav-text">483</p>
                            <img src="assets/icons/course-up.svg" class="course" alt="course-up">
                        </div>
                    </li>
                    <li class="ruble-course">
                        <div class="flex">
                            <span class="material-symbols-outlined">currency_ruble</span>
                            <p class="nav-text">4.85</p>
                            <img src="assets/icons/course-down.svg" class="course" alt="course-down">
                        </div>
                    </li>
                </ul>
                <ul class="flex">
                    <li class="flex">
                        <a href="https://tengrinews.kz/page/contact/">
                            <div class="flex hover-link">
                                <p class="nav-text">Редакция</p>
                                <i style="font-size:24px; color: white; padding-right: 10px;" class="fa">&#xf232;</i>
                            </div>
                        </a>
                    </li>
                    <li class="flex hover-link">
                        <a href="https://alashmg.kz/ru/advertising/project/tengrinews">
                            <p class="nav-text">Реклама</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="menu flex container">
            <div class="menu-nav flex container">
                <a href="http://localhost/nfactorial/"><img src="assets/icons/long-logo-small.svg" alt="logo_long" ></a>
                <a href="http://localhost/nfactorial/" class="menu-nav-item">Новости</a>
                <a href="http://localhost/nfactorial/" class="menu-nav-item">Статьи</a>
                <a href="http://localhost/nfactorial/" class="menu-nav-item">Что будет с Казахстаном?</a>
            </div>
        </div>

        
        <div class="full-article container">
            <div class="date-time"></div>
            <h1 class="head-single"><?php echo $news['title']; ?></h1>
            <div class="article-main-content">
                <img style="width: 60%;margin: auto;display: block; padding-top: 30px; padding-bottom: 30px;" src="<?php echo $news['photo_url']; ?>" alt="intro-image">
                <h3 style="padding-bottom: 10px;"><?php echo $news['title']; ?></h3>
                <p style="padding-bottom: 20px;"><?php echo $news['content']; ?></p>
            </div>
        </div>
    </main>

    <footer>
            <div class="footer-top flex container">
                <div class="footer-top-links flex container">
                    <a href="https://tengrinews.kz/page/about/">О проекте</a>
                    <a href="https://tengrinews.kz/page/contact/">Контакты редакции</a>
                    <a href="https://tengrinews.kz/job/">Вакансии</a>
                    <a href="https://alashmg.kz/ru/advertising/project/tengrinews">Реклама</a>
                </div>
                <div class="footer-top-media flex container">
                    <div class="redac">
                        <a href="https://tengrinews.kz/page/contact/">
                            <div class="flex hover-link">
                                <p style="color: white;" class="nav-text">Редакция</p>
                                <i style="font-size:24px; color: white; padding-right: 10px;" class="fa">&#xf232;</i>
                            </div>
                        </a>
                    </div>
                    <div class="reclam">
                        <a href="https://alashmg.kz/ru/advertising/project/tengrinews">
                            <div class="flex hover-link">
                                <p style="color: white;" class="nav-text">Реклама</p>
                                <i style="font-size:24px; color: white; padding-right: 10px;" class="fa">&#xf232;</i>
                            </div>
                        </a>
                    </div>
                    <div class="media-icons container">
                        <a href="https://www.instagram.com/tengrinewskz/"><img src="assets/footer/footer-in.svg"></a>
                        <a href="https://telegram.me/tengrinews/"><img src="assets/footer/footer-tg.svg"></a>
                        <a href="https://vk.com/tengrinews"><img src="assets/footer/footer-vk.svg"></a>
                        <a href="https://www.facebook.com/Tengrinews.kz/"><img src="assets/footer/footer-fb.svg"></a>
                        <a href="https://twitter.com/tengrinewskz"><img src="assets/footer/footer-x.svg"></a>
                        <a href="https://www.youtube.com/@TengrinewsTVKZ"><img src="assets/footer/footer-yt.svg"></a>
                        <a href="https://www.tiktok.com/@tengrinewskz"><img src="assets/footer/footer-tk.svg"></a>
                        <a href="https://www.whatsapp.com/channel/0029VaC8d1M3AzNVm4DlYk2H"><img src="assets/footer/footer-wa.svg"></a>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>