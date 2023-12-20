<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>О нас</h3>
    <p> <a href="home.php">Главная страница</a> / О нас </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>Почему Выбрали Нас?</h3>
            <p>Сама компания очень успешная. Он ненавидит другие удовольствия, но в нем нет ничего, кроме нашей мягкости.</p>
            <a href="shop.php" class="btn">Делать покупки сейчас</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>Что Мы Предоставляем?</h3>
            <p>Сама компания очень успешная. Он ненавидит другие удовольствия, но в нем нет ничего, кроме нашей мягкости.</p>
            <a href="contact.php" class="btn">Связаться с нами</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>Кто Мы?</h3>
            <p>Сама компания очень успешная. Он ненавидит другие удовольствия, но в нем нет ничего, кроме нашей мягкости.</p>
            <a href="#reviews" class="btn">Отзывы клиентов</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">ОТЗЫВЫ КЛИЕНТОВ</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/qqq.jpg" alt="">
            <p>Мне очень нравятся букеты этого места, дизайн красивый. </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Айман Жомарт</h3>
        </div>

        <div class="box">
            <img src="images/qqq.jpg" alt="">
            <p>На праздники всегда покупаю здесь букеты, да и сайты удобные.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Тоғысова Тұмар</h3>
        </div>

        <div class="box">
            <img src="images/qqq.jpg" alt="">
            <p>Нам нравятся цветы этого места,так как я стал постоянным клиентом, нам проводит акции.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Асқар Қанатов</h3>
        </div>

    

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>