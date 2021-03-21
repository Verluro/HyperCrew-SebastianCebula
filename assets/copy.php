<section class="t-post-news">
    <div class="t-post-news__bg">
        <h1 class="c-text c-text--green c-text--center">Co nowego</h1>
        <div class="o-container-2">
            <div class="o-row">
                    <?php 
                    $colors = ["red", "blue", "yellow"];
                    $badge = ["lorem", "ipsum", "dolor"];
                    for($i=0; $i<=2; $i++)
                    {
                        echo '
                        <div class="o-col o-col--lg33">
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
                                                <a href="#" class="c-btn c-btn--primary">Więcej >></a>
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