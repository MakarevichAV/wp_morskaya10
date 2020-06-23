<?php get_header(); ?>

    <div class="picture">

        <a class="wether" href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.ru/pogoda/27333"
            target="_blank"><img src="https://info.weather.yandex.net/27333/2.ru.png?domain=ru" border="0"
                alt="Яндекс.Погода" /><img width="1" height="1"
                src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt=""
                border="0" /></a>
        
        <!--Слайдер начало-->
        <?php //spawnSlider(); ?>
        
            <div class="main-slide cover" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/main1.jpg) center center / cover no-repeat; z-index: 10; opacity: 1;"></div>
          
            <div class="main-slide cover" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/main2.jpg) center center / cover no-repeat; z-index: 20; opacity: 1;"></div>
  
            <div class="main-slide cover" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/main3.jpg) center center / cover no-repeat; z-index: 30; opacity: 0;"></div>
        
            <div class="main-slide cover" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/main4.jpg) center center / cover no-repeat; z-index: 40; opacity: 0;"></div>
        <!--Слайдер конец-->

        <div class="top cover"></div>
        <!--Затемняющий блок, покрывает picture-->
        <div class="wrapper">
            <div class="hero-info">
                <h1 style="font-family: 'Lobster', cursive; font-style: italic;">
                    <?php 
                        $head1 = explode('/', get_theme_mod( 'morskaya10_h1' ));
                    ?>
                    <?php echo $head1[0];?><br />
                    <?php echo $head1[1];?><br />
                    <span class="underline">
                        <?php echo $head1[2];?>
                    </span><br />
                    <!-- Семейный отдых в Крыму <br />
                С комфортом! <br /> -->
                </h1>
                <ul>
                    <?php 
                        $marks = explode('/', get_theme_mod( 'morskaya10_marks' ));
                    ?>
                    <?php foreach( $marks as $i => $v ): ?>
                        <li><i class="far fa-check-circle"></i><?php echo $v?></li>    
                    <?php endforeach;?>
                    
                </ul>

            </div>
        </div>
    </div>

    <div class="section rooms">
        <div class="wrapper">
            <h2>Добро пожаловать!</h2>
            <div class="description">
                <p>
                    Гостевой Дом "Морская, 10" - это 10 уютных комнат для комфортного проживания от 2-х до 6-и человек
                    со
                    всеми удобствами
                </p>
                <p>
                    Во дворе находятся столики в беседке под виноградом, мангал, качели, настольный теннис в отдельном
                    павильоне, фонтан,
                    детская площадка, игрушки для детей.
                </p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="photo" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/info/photo1.jpg) no-repeat center center / cover">
                    </div>
                    <p class="title">Гостевой дом "Морская 10"</p>
                </div>
                <div class="card">
                    <div class="photo" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/info/photo2.jpg) no-repeat center center / cover">
                    </div>
                    <p class="title">Уютные номера от 2-ч до 6-ти человек</p>
                </div>
                <div class="card">
                    <div class="photo" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/info/photo3.jpg) no-repeat center center / cover">
                    </div>
                    <p class="title">Задний двор. Места отдыха на свежем воздухе</p>
                </div>
                <div class="card">
                    <div class="photo" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/info/photo4.jpg) no-repeat center center / cover">
                    </div>
                    <p class="title">Столики в беседке под виноградом</p>
                </div>
                <div class="card">
                    <div class="photo" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/info/photo5.jpg) no-repeat center center / cover">
                    </div>
                    <p class="title">Просторная столовая</p>
                </div>
                <div class="card">
                    <div class="photo" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/info/photo6.jpg) no-repeat center center / cover">
                    </div>
                    <p class="title">Протяженный песчаный пляж</p>
                </div>
            </div>
            <p class="relate-button">
                <a href="?page=order#" class="button">Предварительное бронирование</a>
            </p>

            <div class="screen"></div>

        </div>
    </div>

    <div class="section more-info">
        <div class="wrapper">
            <h2>Морская, 10</h2>
            <div class="description">
                <p>
                    Гостевой дом "Морская, 10" находится в поселке Витино, в 15-и километрах от города Евпатория, в 4-х
                    минутах ходьбы (300 метров) от песчаного пляжа.
                </p>
                <p>
                    Здесь нет прибрежной суеты, шума, громкой музыки, навязчивого приморского сервиса.
                    Отдыхающие наслаждаются тишиной, ходят на прогулки, ездят в Аквапарк в Евпаторию, на экскурсии,
                    ходят на
                    лечебное озеро Аирчинское.
                </p>
            </div>
            <div class="cards-vertical">
                <div class="card">
                    <div class="photo flex-el">

                    </div>
                    <div class="title flex-el">
                        <h3>Песчянный пляж</h3>
                        <p>
                            В 4-х минутах ходьбы (300 метров) находится чистый песчаный пляж, протяженностью около 500
                            метров. Вдоль побережья очень приятно совершать прогулки, особенно вечером, наблюдая за
                            живописным закатом.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="photo flex-el">

                    </div>
                    <div class="title flex-el">
                        <h3>Аквапарк в Евпатории</h3>
                        <p>
                            Это одно из любимых мест отдыха у крымчан и гостей курорта.
                            Аквапарк под открытым небом привлекает посетителей своими головокружительными аттракционами
                            и водными развлечениями, которые рассчитаны как на взрослых, так и на детей.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="photo flex-el">

                    </div>
                    <div class="title flex-el">
                        <h3>Озеро Аирчинское</h3>
                        <p>
                            В шаговой доступности находится соленое озеро Аирчинское с лечебными грязями, которая ничуть
                            не
                            уступает качеством знаменитому водоему города Саки.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="photo flex-el">

                    </div>
                    <div class="title flex-el">
                        <h3>Ночная Евпатория</h3>
                        <p>
                            Для тех, кто любит ночные прогулки и тусовки, в Евпатории есть большое количество ночных
                            клубов, баров и ресторанов, большинство из которых расположены на морском побережье. Почти
                            все они распологаются на територии парка имени Фрунзе. Каждое заведение имеет свои
                            особенности - музыку, шоу программу, кухню.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section gallery gallery1">
        <div class="wrapper">
            <h2 class="margin-bottom50">Фотографии</h2>
            <div class="cards" id="10000">
                <div class="container filled">
                    <div class="photo"
                        style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/gallery-main/photo1.jpg) no-repeat center center / cover"
                        data-number="0"></div>
                </div>
                <div class="container filled">
                    <div class="photo"
                        style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/gallery-main/photo2.jpg) no-repeat center center / cover"
                        data-number="1"></div>
                </div>
                <div class="container filled">
                    <div class="photo"
                        style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/gallery-main/photo3.jpg) no-repeat center center / cover"
                        data-number="2"></div>
                </div>
                <div class="container filled">
                    <div class="photo"
                        style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/gallery-main/photo4.jpg) no-repeat center center / cover"
                        data-number="3"></div>
                </div>
                <div class="container filled">
                    <div class="photo"
                        style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/gallery-main/photo5.jpg) no-repeat center center / cover"
                        data-number="4"></div>
                </div>
                <div class="container filled">
                    <div class="photo"
                        style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/gallery-main/photo6.jpg) no-repeat center center / cover"
                        data-number="5"></div>
                </div>
                <div class="container filled">
                    <div class="photo"
                        style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/gallery-main/photo7.jpg) no-repeat center center / cover"
                        data-number="6"></div>
                </div>
                <div class="container filled">
                    <div class="photo"
                        style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/gallery-main/photo8.jpg) no-repeat center center / cover"
                        data-number="7"></div>
                </div>
                <div class="container empty"></div>
                <div class="container empty"></div>
            </div>
            <p class="relate-button">
                <a href="?page=gallery" class="button">Смотреть больше фото</a>
            </p>
        </div>
    </div>
    <div class="popup-slider">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner"></div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="crose">
            <i class="far fa-times-circle"></i>
        </div>

    </div>

<?php get_footer(); ?>