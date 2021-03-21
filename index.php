<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sebastian Cebula</title><link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script src="//code.jquery.com/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <script src="form.js"></script>
</head>
<body>

<header class="t-site-header">

    <nav role="navigation" class="t-site-header__hamburger">
        <div class="t-site-header__hamburger-toogle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>

            <ul class="t-site-header__hamburger-toogle--menu">
                <a href="#"><li>poznaj nas</li></a>
                <a href="#"><li>oferty pracy</li></a>
                <a href="#"><li>po godzinach</li></a>
                <a href="#"><li>blog</li></a>
                <a href="#"><li>kontakt</li></a>
            </ul>
        </div>
    </nav>

    <div class="t-site-header__top">
        <div class="t-site-header__logo">
            <img src="images/LOGO.png" alt="LOGO">
        </div>
        <nav class="t-site-header__menu">
            <a href="#">Poznaj nas</a>
            <a href="#">Oferta pracy</a>
            <a href="#">Po godzinach</a>
            <a href="#">Blog</a>
            <a href="#">Kontakt</a>
            <a href="#">Otherpage.com</a>
            <a href="#">EN</a>
        </nav>
    </div>
    <div class="c-social">
        <div class="c-social__icon">
            <a href="#">
                <img src="images/facebook.png" alt="Facebook">
            </a>
            <a href="#">
                <img src="images/twitter.png" alt="Twitter">
            </a>
            <a href="#">
                <img src="images/linkedin.png" alt="Linkedin">
            </a>
            <a href="#">
                <img src="images/ellipse.png" alt="Ellipse">
            </a>
        </div>
    </div>
    <div class="t-site-header__slideshow">
        <div class="t-site-header__slideshow-text">
            <h1 class="c-text c-text--green c-text--extra-bold">sunrise</h1>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</span>
        </div>  
        <div class="t-site-header__slideshow-image">
            <img src="images/slide001.png" alt="Slide001" class="t-site-header__slideshow-image--normal">
            <div class="t-site-header__slideshow-image--small">
                <img src="images/slide001-small.png" alt="Slide001 Small">
            </div>
            
        </div>
        
    </div>

    <div class="c-color-shape">
        <img src="images/COLOR SHAPE [RIGHT].png" alt="Color Shape">
    </div>
</header>

<section class="t-site-company-info">
    <div class="t-site-company-info__card">
        <div class="t-site-company-info__card-shape">
            <img src="images/COLOR SHAPE [LEFT].png" alt="Left Shape">
        </div>
        <div class="t-site-company-info__card-text">
            <div class="t-site-company-info__card-content">
                Zobacz jak z LIT staliśmy się SUNRISE
            </div>
            <a href="#" class="c-btn c-btn--primary">Więcej <span class="u-text-white">></span>></a>
        </div>
    </div>
</section>

<section class="t-site-about-us">
    
    <h1 class="c-text c-text--green c-text--center">5 powodów, lorem ipsum dolor sit amet</h1>
    <div class="o-row">
    <?php 

    for($i=1; $i<=5; $i++)
    {
        echo '
        <div class="o-col o-col--lg20 o-col--md33">
            <div class="t-site-about-us__card">
                <div class="t-site-about-us__card-icon">
                    <img src="images/icon00'. $i .'.png" alt="Icon '. $i .'">
                </div>
                <div class="t-site-about-us__card-text">
                    Lorem ipsum 
                </div>
            </div>
        </div>
        ';
    }

    ?>
    </div>
    <div class="o-container">
        <div class="o-row">
            <div class="o-col u-text-center">
                <a href="#" class="c-btn c-btn--primary">Więcej <span class="u-text-white">></span>></a>
            </div>
        </div>
    </div>
</section>

<section class="t-site-job-offer">
    <div class="t-site-job-offer__bg">
        <div class="c-color-shape-left u-mt-3">
            <img src="images/COLOR SHAPE [LEFT] 2.png" alt="Color Shape">
        </div>
        <div class="o-container">
            <h1 class="c-text c-text--center t-site-job-offer__header">Aktualne oferty pracy</h1>
            <div class="o-row">
                <?php 
                $string = file_get_contents("jobOffers.json");
                $array = json_decode($string, true);
    
                for($i=0;$i<=2;$i++)
                {
                    echo '
                    <div class="o-col o-col--md50 o-col--lg33">
                        <div class="t-site-job-offer__item">
                            <div class="t-site-job-offer__item-title">
                                '. $array[$i]["title"] .'
                            </div>
                            <div class="t-site-job-offer__item-city">
                                '. $array[$i]["city"] .'
                            </div>
                            <a href="'. $array[$i]["url"] .'" class="c-btn c-btn--primary t-site-job-offer__item-readmore">Więcej <span class="u-text-white">></span>></a>
                            <div class="t-site-job-offer__item-image">
                                <div class="t-site-job-offer__item-image-icon">
                                    <img src="images/job'. $i .'.png" alt="Job">
                                    
                                </div>
                            </div>
                            
                        </div>           
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
        <div class="o-container">
            <div class="o-row">
                <div class="o-col u-text-center">
                    <a href="#" class="c-btn c-btn--primary t-site-job-offer__btn">Zobacz wszystkie <span class="u-text-white">></span>></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="t-site-friends">
    <div class="t-site-friends__top">
        <div class="t-site-friends__text">
            <h1 class="c-text c-text--green c-text--extra-bold c-text--right">Zaufali <br>nam</h1>
        </div>
        <div class="t-site-friends__right-bg">
            <div class="t-site-friends__right-bg--sponsors">
                <img src="images/f01.png" alt="F01">
                <img src="images/f03.png" alt="F03">
                <img src="images/f02.png" alt="F02">
            </div>
        </div>
    </div>

    <div class="t-site-friends__bottom">
        <div class="t-site-friends__content">
            <h1 class="c-text c-text--center">a nasi ludzie są z tego dumni</h1>
            <div class="o-container">
                <div class="o-row">
                <?php
                    for($i=0;$i<=2;$i++)
                    {
                        echo '
                        <div class="o-col o-col--md33 o-col--lg33">
                            <div class="t-site-friends__item">
                                <div class="t-site-friends__item-image">
                                    <img src="images/person'. $i .'.png" alt="Person '. $i .'">
                                </div>
                                <div class="t-site-friends__item-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut lacus porttitor, luctus magna consequat, sodales mauris. Ut et volutpat quam. In molestie laoreet augue et consequat. Donec vel elementum odio. Suspendisse pretium rhoncus.
                                </div>
                                <div class="t-site-friends__item-person">
                                    <span>Imię i nazwisko</span><br>
                                    <span>Stanowisko</span>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                ?>
                
                </div>
            </div>
        </div>
    </div>
</section>
<section class="t-post-news">
    <div class="t-post-news__bg">
        <h1 class="c-text c-text--green c-text--center">Co nowego</h1>
        <div class="o-container">
            <div class="o-row">
                    <?php 
                    $colors = ["red", "blue", "yellow"];
                    $badge = ["lorem", "ipsum", "dolor"];
                    for($i=0; $i<=2; $i++)
                    {
                        echo '
                        <div class="o-col o-col--md33 o-col--lg33">
                            <div class="t-post-news__item">
                                <div class="t-post-news__image">
                                    <img src="images/news'. $i .'.png" alt="News">
                                    <span class="t-post-news__badge t-post-news__badge-'. $colors[$i] .'">'. $badge[$i] .'</span>
                                </div>
                                <div class="t-post-news__description">
                                    Lorem ipsum dolor sit amet, consectetur dipiscing elit Vestibulum fermentum enim et massa porta
                                </div>
                                <div class="o-row o-row--center-y">
                                    <div class="t-post-news__container">
                                        <div class="o-col o-col--lg50">
                                            <div class="t-post-news__date">
                                                5 lipca 2020
                                            </div>
                                        </div>
                                        <div class="o-col o-col--lg50">
                                            <div class="t-post-news__readmore">
                                                <a href="#" class="c-btn c-btn--primary">Więcej <span class="u-text-white">></span>></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="t-site-contact-us">
    <div class="t-site-contact-us__image">
        <img src="images/FORM IMAGE.png" alt="Form image">
    </div>
    <div class="t-site-contact-us__form">
        <h1 class="c-text c-text--green">Porozmawiajmy</h1>
        <form action="sendform.php" method="POST">
            <div class="o-row">
                <div class="o-col">
                    <div id="firstname-group" class="t-site-contact-us__form-input">
                        <input type="text" name="firstname" id="firstname" class="c-input" placeholder="Imię">
                    </div>
                    <div id="lastname-group" class="t-site-contact-us__form-input">
                        <input type="text" name="lastname" id="lastname" class="c-input" placeholder="Nazwisko">
                    </div>
                    <div id="phone-group" class="t-site-contact-us__form-input">
                        <input type="text" name="phone" id="phone" class="c-input" placeholder="Telefon">
                    </div>
                </div>
            </div>
            <div class="o-row">
                <div class="o-col">
                    <div id="message-group" class="t-site-contact-us__form-textarea">
                        <textarea name="message" id="message" class="c-textarea" placeholder="Wiadomość"></textarea>
                    </div>
                </div>
            </div>
            <div class="o-row">
                <div class="o-col">
                    <div class="t-site-contact-us__form-checkbox">
                        <label for="rodo">
                            <input type="checkbox" id="rodo" class="c-checkbox" name="rodo" value="1"> Lorem ipsum color sit amet, consectetur adipisicig elit, sed do eiusmod tempor incididunt ut labore et
                        </label>
                        <a href="#" class="t-site-contact-us__form-more c-text c-text--green">rozwiń >></a>
                    </div>
                    <div class="t-site-contact-us__form-submit">
                        <input type="submit" name="send" class="c-btn c-btn--primary" value="Wyślij >>">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<footer class="t-site-footer">
    

    <div class="o-container-3">
        <div class="o-row">
            <div class="t-site-footer__item">

                <div class="t-site-footer__image">
                    <img src="images/GREEN SHAPE.png" alt="Green shape">
                </div>
                <div class="t-site-footer__index">
                    <p class="c-text--bold">Wrocław</p>
                    <p>Sunrise Center</p>
                    <p>ul. Lorem Ipsum 124</p>
                    <p>50-000 Wrocław, Poland</p>
                </div>
            </div>
            <div class="t-site-footer__item">
                <p class="c-text--bold">Wrocław</p>
                <p>Sunrise Center</p>
                <p>ul. Lorem Ipsum 124</p>
                <p>50-000 Wrocław, Poland</p>
            </div>
            <div class="t-site-footer__item">
                <p class="c-text--bold">Wrocław</p>
                <p>Sunrise Center</p>
                <p>ul. Lorem Ipsum 124</p>
                <p>50-000 Wrocław, Poland</p>
            </div>
            <div class="t-site-footer__item">
                <p class="c-text--bold">Wrocław</p>
                <p>Sunrise Center</p>
                <p>ul. Lorem Ipsum 124</p>
                <p>50-000 Wrocław, Poland</p>
            </div>
            <div class="t-site-footer__item">
                <p class="c-text--bold">Wrocław</p>
                <p>Sunrise Center</p>
                <p>ul. Lorem Ipsum 124</p>
                <p>50-000 Wrocław, Poland</p>
            </div>
        </div>
        <div class="o-row">
            <div class="t-site-footer__logotypes">
                <div class="t-site-footer__logotypes--item">
                    <img src="images/logo001.png" alt="LOGO 1">
                </div>
                <div class="t-site-footer__logotypes--item">
                    <img src="images/logo002.png" alt="LOGO 2">
                </div>
                <div class="t-site-footer__logotypes--item">
                    <img src="images/logo003.png" alt="LOGO 3">
                </div>
                <div class="t-site-footer__logotypes--item">
                    <img src="images/logo004.png" alt="LOGO 4">
                </div>
            </div>
        </div>
        <div class="o-row">
            <div class="t-site-footer__copyright">
                <div class="t-site-footer__copyright-link">
                    Copyright &copy; 2021
                    <a href="#">Polityka prywatności</a>
                    <a href="#">Ochrona Danych Osobowych</a>
                </div>
                <div class="t-site-footer__copyright-social">
                    <a href="#">
                        <img src="images/facebook.png" alt="Facebook">
                    </a>
                    <a href="#">
                        <img src="images/twitter.png" alt="Twitter">
                    </a>
                    <a href="#">                
                        <img src="images/linkedin.png" alt="LinkedIn">
                    </a>
                    <a href="#">
                        <img src="images/ellipse.png" alt="Ellipse">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>


<?

/*


*/

?>