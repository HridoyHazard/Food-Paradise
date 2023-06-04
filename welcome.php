<?php 
 session_start();
 if(!isset($_SESSION['username']) && $_SESSION['logged'] != true){
 	header("Location: sign.php");
 }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Food Paradies</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- header -->
    <header>

        <a href="#" class="logo"><img src="img/logo1.png" alt="logo">
        </a>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#recipe">Recipe</a>
            <a href="#gallery">Gallery</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <div class="dropdown">
                <button class="dropbtn">
                    <?php if(isset($_SESSION['username'])){ echo$_SESSION['username'];}?>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
  
                </div>
            </div>
        </nav>

    </header>

    <!-- Home Page Section-->

    <section class="home" id="home">
        <div class="video-container">
            <video src="img/v1.mp4" type="video/mp4" autoplay loop muted class="vid"></video>
        </div>

        <div class="content">
            <h1>Welcome To Food Paradies</h1>
            <p>A Complete Food Related Website Along With Various Different Culture Foods of various Categroies.Also
                There Are Various Food Recipes, Articles,Video Tutorials</p>
            <a href="service.php"><button class="btn">get started</button></a>
        </div>

    </section>

    <!-- Recipe Section-->

    <section class="recipe" id="recipe">

        <h1 class="heading">Featured Recipes</h1>

        <div class="box-container">

            <div class="box" data-aos="fade-left">
                <img src="img/p1.jpg" alt="">
                <h3>Chicken Chowmin</h3>
                <div class="icons">
                    <a href="https://natashaskitchen.com/chicken-chow-mein/" class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=0DHodNO-AnI&t=17s" class="fab fa-youtube"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/p2.jpg" alt="">
                <h3>Hyderabadi Biryani</h3>
                <div class="icons">
                    <a href="https://www.licious.in/blog/recipe/hyderabadi-chicken-biryani-recipe/"
                        class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=3OSQdcVoXqo" class="fab fa-youtube"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/p3.jpg" alt="">
                <h3>Hilsha Curry</h3>
                <div class="icons">
                    <a href="https://www.licious.in/blog/recipe/hilsa-curry-the-flavour-of-bengal/"
                        class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=w0JYuG1wZT8" class="fab fa-youtube"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/p7.jpg" alt="">
                <h3>Ichiraku Ramen</h3>
                <div class="icons">
                    <a href="https://brannewdayanime.wordpress.com/2017/08/04/anime-recipe-how-to-make-ichiraku-ramen-from-naruto/"
                        class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=0py3YKRZSwE" class="fab fa-youtube"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/p10.jpg" alt="">
                <h3>Sushi Roll</h3>
                <div class="icons">
                    <a href="https://secretsofsushi.com/sushi-roll-recipes" class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=ll7bFxr-kag" class="fab fa-youtube"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="img/p12.jpeg" alt="">
                <h3>sizzling pancakes</h3>
                <div class="icons">
                    <a href="http://pho-vietnam.com/banh-xeo/?lang=en" class="far fa-newspaper"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="https://www.youtube.com/watch?v=V8dhQQYvWR0" class="fab fa-youtube"></a>
                </div>
            </div>

        </div>

    </section>

    <!-- Gallyer Section-->
    <section class="gallery" id="gallery">

        <h1>Gallery</h1>
        <ul>
            <li class="list active" data-filter="All">All</li>
            <li class="list" data-filter="dessert">Dessert</li>
            <li class="list" data-filter="soup">Soup</li>
            <li class="list" data-filter="salad">Salad</li>
            <li class="list" data-filter="biryani">Biryani</li>
            <li class="list" data-filter="fastfood">FastFood</li>
        </ul>
        <div class="ps" data-aos="zoom-in">
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert1.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup1.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad1.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani1.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood1.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert2.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup2.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad2.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani2.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood2.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert3.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup3.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad3.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani3.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood3.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert4.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad4.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani4.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood4.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert6.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup4.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad5.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood5.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert7.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup5.jpg"></div>
            <div class="itemBox salad" data-cat="salad"><img src="img/salad6.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani5.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup6.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani7.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood7.jpg"></div>
            <div class="itemBox soup" data-cat="soup"><img src="img/soup7.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood8.jpg"></div>
            <div class="itemBox biryani" data-cat="biryani"><img src="img/biryani6.jpg"></div>
            <div class="itemBox fastfood" data-cat="fast food"><img src="img/fastfood9.jpg"></div>
            <div class="itemBox dessert" data-cat="dessert"><img src="img/dessert8.jpg"></div>

        </div>
    </section>

    <!-- About Us Section-->
    <section class="about" id="about">

        <h1>about us</h1>

        <div class="row">

            <div class="image" data-aos="fade-right">
                <img src="img/mmmmm.png" alt="">
            </div>

            <div class="content" data-aos="fade-up">
                <p>We are two undergrad students majoring in Computer Science and Engineering. My friend and I share
                    some common interests that include hanging out to different restaurants in the town, checking out
                    different cuisines, talking hours and hours about food, and sometimes writing reviews on them on
                    social media platforms. These reviews were primarily intended for the fellow foodies. Still, they
                    were being appreciated by anyone who would read them, and many of the restaurant owners suggested
                    that we try their food and review them. Some of our friends and relatives would also read them and
                    suggest that we keep copies of these writings. So the idea was already at the back of our heads. But
                    it started kicking when we got the "Web Programming" course, and we were assigned a task to create a
                    website on something of our interest. So, we decided to team up instantly, and no wonder the idea
                    was already there! </p>
                <div class="up"></div>
                <a href="#"><button class="btn">learn more</button></a>
            </div>


        </div>
        <h1 class="ser">Our Services</h1>
        <div class="box-container">

            <div class="box">
                <img src="img/icon/chef.svg" alt="">
                <h3>Recipe</h3>
                <p>We offer recipes and cooking advice for Everyone.We are here to help you cook delicious meals with
                    less stress and more joy.</p>
            </div>

            <div class="box">
                <img src="img/icon/articles.svg" alt="">
                <h3>Article</h3>
                <p>We give the articles of any recipe.By reading our articles,people can easily learn basic skills of
                    cooking.People will get a lot of advantages by reading the articles because it will increase their
                    cooking skills.</p>
            </div>

            <div class="box">
                <img src="img/icon/review.svg" alt="">
                <h3>Review</h3>
                <p>We give the food reviews of any good restaurant.We try our best not to forget to write a review,
                    Especially when satisfied with the service and food in a restaurant.</p>
            </div>

            <div class="box">
                <img src="img/icon/quality.svg" alt="">
                <h3>Premium Membership</h3>
                <p>We provide live cooking courses.We have our premium membership.So people can learn cooking by
                    joining our live classes.</p>
            </div>

            <div class="box">
                <img src="img/icon/camera.svg" alt="">
                <h3>Food Photography</h3>
                <p>we provide food photography for restaurants.If a restaurant wants to highlight their featured
                    recipe,it can hire us for the photoshoot.after the photoshoot we highlight those Photo in our
                    gallery section.</p>
            </div>

            <div class="box">
                <img src="img/icon/earphones.svg" alt="">
                <h3>24x7 Support</h3>
                <p>We provide the best user support to our valued users, and We offer 24/7 support.They will get help
                    and will find answers to questions as soon as possible. </p>
            </div>
        </div>
    </section>

    <!-- Contact Us-->
    <section class="contact" id="contact">

        <h1 class="heading">contact us</h1>

        <div class="Full">

            <div class="image" data-aos="fade-right">
                <img src="img/box.jpg" alt="">
            </div>

            <form action="" data-aos="fade-left">

                <div class="inputBox">
                    <h3>full name</h3>
                    <input type="text" placeholder="enter your name">
                </div>

                <div class="inputBox">
                    <h3>email</h3>
                    <input type="email" placeholder="enter your email">
                </div>

                <div class="inputBox">
                    <h3>Subject</h3>
                    <input type="text" placeholder="enter subject">
                </div>

                <div class="inputBox">
                    <h3>message</h3>
                    <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
                </div>

                <input type="submit" value="send" class="btn">

            </form>
        </div>
        <div class="box-container">

            <div class="box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712697.9788653674!2d86.66989219564695!3d24.669084974601557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505508d80dcf0f%3A0xefe9ba10987e77d1!2sFood%20Paradise!5e0!3m2!1sen!2sbd!4v1627316002209!5m2!1sen!2sbd"
                    width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <div class="box">
                <h3>contact details</h3>
                <p> <i class="fas fa-phone"></i>+88009999999</p>
                <p> <i class="fas fa-envelope"></i>paradisefood@gmail.com</p>
                <p> <i class="fas fa-map-marker-alt"></i>Sylhet, Bangladesh - 32000</p>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <div class="up">
                    <a href="#" class="fab fa-youtube"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>Food Paradise @ All Right Reserved!</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/gallary.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 60, once: false, duration: 2000,
            useClassNames: false,
            disableMutationObserver: false,
            debounceDelay: 50,
            throttleDelay: 99,
        });
    </script>

</body>

</html>