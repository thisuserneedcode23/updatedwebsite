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
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/img1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Welcome to D'Hidden Brew, where every cup is a celebration of craftsmanship, community, and the love for exceptional coffee. 
                Our cozy ambiance invites you to unwind, connect, and savor the essence of freshly brewed excellence. 
                Here, we go beyond being a mere coffee destination we're a hub of culture, a place where conversations flourish, friendships brew, and memories are crafted. 
                Our baristas are more than experts they're passionate artisans dedicated to delivering the perfect brew tailored to your preferences. 
                From our ethically sourced beans to the artisanal preparation, we prioritize quality, sustainability, and the enchanting flavors that dance in every cup. 
                Join us on a journey of taste, where every sip narrates the story of our commitment to unparalleled coffee experiences.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>At D'Hidden Brew, we offer more than just a cup of coffee we provide an immersive experience tailored to delight all your senses. 
                Our menu boasts an array of meticulously crafted coffee beverages, from classic espresso drinks to inventive specialty concoctions that cater to diverse palates. 
                We take pride in sourcing premium, ethically-sourced beans, ensuring that every sip embodies the essence of quality and sustainability. 
                Beyond our exceptional brews, our welcoming ambiance serves as a haven for coffee enthusiasts and casual visitors alike, fostering a space where connections are forged and moments are savored. 
                Alongside our delectable coffee offerings, we provide a range of delectable pastries and light bites, complementing our beverages and enhancing the overall experience. 
                From the first whiff of our freshly ground beans to the last sip of your favorite brew, D'Hidden Brew promises an unforgettable journey into the world of coffee.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/img2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/img3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>At D'Hidden Brew, we're more than just purveyors of exceptional coffee; we're a vibrant community hub steeped in the artistry of bringing people together over a shared love for great brews. 
                Born from a passion for quality and a dedication to fostering connections, we embody the essence of a welcoming neighborhood gathering spot. 
                Our team comprises passionate coffee aficionados who curate an experience that transcends a mere caffeine fix. 
                We believe in the power of a perfectly brewed cup to spark conversations, inspire creativity, and create moments worth savoring. 
                Committed to sustainability, we carefully select ethically sourced beans, ensuring that our commitment to excellence aligns with our responsibility towards the planet and the communities we serve. 
                Whether you're a dedicated coffee connoisseur or a casual passerby, at D'Hidden Brew, you're not just a customer – you're a valued member of our coffee-loving family.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">Team Members</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/eric.png" alt="">
            <h3>Eric Diangkinay</h3>
            <p>Documentation</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/darwin.jpg" alt="">
            <h3>Darwin Urriza</h3>
            <p>Web Dev(Backend)</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/lita.jpg" alt="">
            <h3>Joshua Lita</h3>
            <p>Web Dev(Front End)</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/hotdog.jpg" alt="">
            <h3>Reign Mercado</h3>
            <p>Research</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/patrick.jpg" alt="">
            <h3>Patrick Mercado</h3>
            <p>Statistical</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>