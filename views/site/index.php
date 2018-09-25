<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;

?>

<div id="preloader" class="loaderArea">
    <div class="block-elem">
        <div class="element"></div>
        <div class="element"></div>
        <div class="element"></div>
        <div class="element"></div>
        <div class="textgeco">
            <div class="imgpreloader">
                <img src="/img/logopreloader.jpg" alt="">
            </div>
        </div>

    </div>
    <div class="dws-progress-bar"></div>
</div>
<header class="wrapp blueText dark-bg" id="home">
    <div class="navbar-fixed">
        <nav class="nav">
            <div class="bg"></div>
            <div class="nav-wrapper">
                <a href="#home" class="brand-logo center">
                    <div class="block-elem disp2">
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="textgeco">
                            <h3 class="colorh3 h3color">geco</h3>
                            <h4 class="colorh3 h3color">innovations</h4>
                        </div>
                    </div>
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger colorh3 h3color">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="left hide-on-med-and-down">
                    <li><a class="colorh3 h3color" href="#companiy">О КОМПАНИИ</a></li>
                    <li><a class="colorh3 h3color" href="#product">ПРОДУКЦИЯ</a></li>
                    <li><a class="colorh3 h3color" href="#gallery">ГАЛЕРЕЯ</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li class="right-align"><a  class="colorh3 h3color" href="#uslugi">УСЛУГИ</a></li>
                    <li class="right-align"><a class="colorh3 h3color" href="#otziv">ОТЗЫВЫ</a></li>
                    <li class="right-align"><a class="colorh3 h3color" href="#zakaz">КОНТАКТЫ</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- mobile nav -->
    <ul class="sidenav" id="mobile-demo">
        <li>
            <div class="user-view center-align">
                <a href="#home"><img src="img/logo.png" alt=""></a>

            </div>
        </li>
        <li>
            <div class="divider"></div>
        </li>
        <li class=""><a class="waves-effect" href="#companiy"><i class="icons icon-briefcase blueText"></i>О
                КОМПАНИИ</a></li>
        <li class=""><a class="waves-effect" href="#product"><i class="icons icon-cart blueText"></i>ПРОДУКЦИЯ</a></li>
        <li class=""><a class="waves-effect" href="#gallery"><i class="icons icon-images blueText"></i>ГАЛЕРЕЯ</a></li>
        <li class=""><a class="waves-effect" href="#uslugi"><i class="icons icon-wrench blueText"></i>УСЛУГИ</a></li>
        <li class=""><a class="waves-effect" href="#otziv"><i class="icons icon-bubbles3 blueText"></i>ОТЗЫВЫ</a></li>
        <li class=""><a class="waves-effect" href="#zakaz"><i class="icons icon-address-book blueText"></i>КОНТАКТЫ</a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">

            </ul>
        </li>
    </ul>
    <div class="backg">
        <h2 class="center-align">Достоинство</h2>
        <h1 class="center-align">Бесценно</h1>
    </div>
</header>
<div class="container" id="companiy">
    <div class="row">
        <div class="col s12 m4">
            <div class="card blueBgGradient greyText" style="z-index:3;">
                <div class="card-image">
                    <img src="/icon/innovation.png">
                </div>
                <div class="card-content">
                    <h4 class="card-title">инновации</h4>
                    <p>Инновационная компания в сфере отопительных систем на рынке Узбекистана.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card greyBgGradient blueText" style="z-index:2;">
                <div class="card-image">
                    <img src="/icon/качество.png">
                </div>
                <div class="card-content">
                    <h4 class="card-title">качество</h4>
                    <p>Качество, отвечающее мировым стандартам, теперь на рынке Узбекистана</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card blueBgGradient greyText" style="z-index:1;">
                <div class="card-image">
                    <img src="/icon/уникальность.png">
                </div>
                <div class="card-content">
                    <h4 class="card-title">уникальность</h4>
                    <p>Уникальный продукт в сфере отопительных систем не имеющий аналогов</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="slideTwo had-container">
    <div class="row">
        <aside class="col s12 m6 asideBg">
            <img src="/img/logo.png" alt="">
        </aside>
        <aside class="col s12 m6">
            <p>Компания, которая выходит за рамки распространенных тенденций и вносит инновационные изменения на рынок интерьерного дизайна и строительства.</p>
            <p>Одним из основных направлений стала имплементация новой отопительной системы «Термоплинтуса» на рынке Ташкента и всего Узбекистана в целом. Исключительное качество Термоплинтусов с использованием цветных металлов: меди, латуни и аллюминия, большая вариация цветов и полная интеграция с любым интерьером, делает его неповторимым решением для обогрева помещения.</p>
        </aside>
    </div>
</section>

<section class="slideThree">
    <div class="row">
        <h2 class="blueText" id="product">Продукция</h2>
        <div class="container">
            <aside class="col s12 m12">
                <h4 class="blueText">Термоплинтус</h4>
                <p class="blueText">
                    Термоплинтус – это первое в истории Узбекистана отопительное оборудование, которое эффективно
                    преобразовывает тепловую энергию конвективного потока в лучистое тепло солнечного спектра, что
                    означает, более 80% тепловой энергии передается в помещение излучением от поверхности стен, потолка
                    и пола.
                </p>
                <div class="col s12 m6 l3 img1">
                    <img class="center-align" src="/icon/эффективность.png" alt="">
                    <h4>эффективность</h4>
                    <p>Отопительная система «Термоплинтус» рассчитана на максимальную передачу энергии от нагретой стены
                        и пола в само помещение.</p>
                </div>
                <div class="col s12 m6 l3 img1">
                    <img class="center-align" src="/icon/эконосия.png" alt="">
                    <h4>экономичность</h4>
                    <p>Снижение температуры в помещении на 3-4°(при сохранении высокого уровня комфорта) дает 25-30%
                        экономию энергоресурсов.</p>
                </div>
                <div class="col s12 m6 l3 img1">
                    <img class="center-align" src="/icon/долгостойкость.png" alt="">
                    <h4>долговечность</h4>
                    <p>В Термоплинтусе используются только самые лучшие материалы: греющий модуль — медь и латунь,
                        наружный профиль — горячепрессованный ударопрочный алюминий</p>
                </div>
                <div class="col s12 m6 l3 img1 margin">
                    <img class="center-align" src="/icon/эстетичность.png" alt="">
                    <h4>эстетичность</h4>
                    <p>Не съедает пространство и не ограничивает расстановку мебели. С большим спектром разных текстур и
                        цветов его можно использовать в любом интерьере</p>
                </div>

            </aside>
        </div>
        <div class="col s12 m12 product carousel">
            <img class="carousel-item" src="/img/products/product1.jpg" alt="">
            <img class="carousel-item" src="/img/products/product2.jpg" alt="">
            <img class="carousel-item" src="/img/products/product6.jpg" alt="">
            <img class="carousel-item" src="/img/products/product15.jpg" alt="">
            <img class="carousel-item" src="/img/products/product17.jpg" alt="">
            <img class="carousel-item" src="/img/products/product4.jpg" alt="">
            <img class="carousel-item" src="/img/products/product10.jpg" alt="">
            <img class="carousel-item" src="/img/products/product11.jpg" alt="">
            <img class="carousel-item" src="/img/products/product13.jpg" alt="">
            <img class="carousel-item" src="/img/products/product14.jpg" alt="">
            <img class="carousel-item" src="/img/products/product18.jpg" alt="">
            <img class="carousel-item" src="/img/products/product3.jpg" alt="">
            <img class="carousel-item" src="/img/products/product5.jpg" alt="">
            <img class="carousel-item" src="/img/products/product7.jpg" alt="">
            <img class="carousel-item" src="/img/products/product8.jpg" alt="">
            <img class="carousel-item" src="/img/products/product9.jpg" alt="">
            <img class="carousel-item" src="/img/products/product12.jpg" alt="">
            <img class="carousel-item" src="/img/products/product16.jpg" alt="">
        </div>
        <div class="col s12 m12 center-aligni text blueText"><p><span>*</span>Стандартные цвета: белый и темно-коричневый, остальные под заказ.</p></div>
    </div>
</section>
<section class="container">
    <div class="row block-card2">
        <h3 class="blueText">Варианты Термоплинтусов</h3>
        <div class="col s12 m6">
            <div class="vodtermo">
                <img class="center-align" src="icon/vod.png" alt="">
                <h4 class="blueText">Жидкостный</h4>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="electtermo">
                <img class="center-align" src="icon/elect.png" alt="">
                <h4 class="blueText"> электрический</h4>
            </div>
        </div>
    </div>
</section>
<h3 class="blueText center-align">Преимущества</h3>
<div class="compare-basket">
    <button class="action action--button action--compare"><i class="fa fa-check"></i><span
            class="action__text">Сравнить</span></button>
</div>
<div class="view">
    <section class="grid">
        <div class="product3 blueBg" style="z-index:4;">
            <div class="product__info">
                <div class="product__image greyText valign-wrapper"><i class="icon-radiator2"></i></div>
                <div class="product__title_container "><h4 class="product__title greyText">Термоплинтус</h4></div>
                <div class="product__title_container"><p class="product__year extra highlight greyText"><span>+</span> Вписывается в любой интерьер</p></div>
                <div class="product__title_container"><p class="product__year extra highlight greyText"><span>+</span> Не занимает лишнего пространства</p></div>
                <div class="product__title_container"><p class="product__region extra highlight greyText"><span>+</span> Максимальная эффективность</p></div>
                <div class="product__title_container"><p class="product__varietal extra highlight greyText"><span>+</span> Не поднимает пыль</p></div>
                <div class="product__title_container"><p class="product__alcohol extra highlight greyText"><span>+</span> Прост в монтаже и ремонтопригоден</p></div>
                <div class="product__title_container"><p class="product__alcohol extra highlight greyText"><span>+</span> Комфорт и здоровье</p></div>
            </div>
            <label class="action action--compare-add"><input id="firstCheckbox" class="check-hidden" type="checkbox"/><i
                    class="fa fa-plus greyText"></i><i class="fa fa-check"></i><span
                    class="action__text action__text--invisible">Добавить для сравнения</span></label>
        </div>
        <div class="product3 greyBg" style="z-index:3;">
            <div class="product__info">
                <div class="product__image blueText valign-wrapper"><i class="icon-geco1"></i></div>
                <div class="product__title_container"><h4 class="product__title blueText">Радиаторы</h4></div>
                <div class="product__title_container"><p class="product__year extra highlight blueText"><span>-</span> Не вписываются в интерьер</p></div>
                <div class="product__title_container"><p class="product__year extra highlight greyText"><span>-</span> Занимает много пространства</p></div>
                <div class="product__title_container"><p class="product__region extra highlight blueText"><span>-</span> Высокие теплопотери</p></div>
                <div class="product__title_container"><p class="product__varietal extra highlight blueText"><span>-</span> Поднимает пыль</p></div>
                <div class="product__title_container"><p class="product__alcohol extra highlight blueText"><span>-</span> Не ремонтируется</p></div>
                <div class="product__title_container"><p class="product__alcohol extra highlight blueText"><span>-</span> Сушит воздух</p></div>
            </div>
            <label class="action action--compare-add"><input class="check-hidden" type="checkbox"/><i
                    class="fa fa-plus blueText"></i><i class="fa fa-check"></i><span
                    class="action__text action__text--invisible">Добавить для сравнения</span></label>
        </div>
        <div class="product3 blueBg" style="z-index:2;">
            <div class="product__info">
                <div class="product__image greyText valign-wrapper"><i class="icon-geco2"></i></div>
                <div class="product__title_container"><h4 class="product__title greyText">Теплые полы<br/></h4></div>
                <div class="product__title_container"><p class="product__year extra highlight greyText"><span>+</span> Незаметны в интерьере</p></div>
                <div class="product__title_container"><p class="product__year extra highlight greyText"><span>+</span> Не занимает лишнего пространства</p></div>
                <div class="product__title_container"><p class="product__region extra highlight greyText"><span>-</span> Не для холодных зим</p></div>
                <div class="product__title_container"><p class="product__varietal extra highlight greyText"><span>+</span> Не поднимает пыль </p></div>
                <div class="product__title_container"><p class="product__alcohol extra highlight greyText"><span>-</span> Не ремонтируется</p></div>
                <div class="product__title_container"><p class="product__alcohol extra highlight greyText"><span>-</span> Вредит здоровью</p></div>

            </div>
            <label class="action action--compare-add"><input class="check-hidden" type="checkbox"/><i
                    class="fa fa-plus greyText"></i><i class="fa fa-check"></i><span
                    class="action__text action__text--invisible">Добавить для сравнения</span></label>
        </div>
        <div class="product3 greyBg" style="z-index:1;">
            <div class="product__info">
                <div class="product__image blueText valign-wrapper"><i class="icon-radiator"></i></div>
                <div class="product__title_container"><h4 class="product__title blueText"> Внутрипольный<br/> конвектор
                    </h4></div>
                <div class="product__title_container"><p class="product__year extra highlight blueText"><span>+</span> Незаметны в интерьере</p></div>
                <div class="product__title_container"><p class="product__year extra highlight greyText"><span>-</span> Требует дополнительного пространства в полу</p></div>
                <div class="product__title_container"><p class="product__region extra highlight blueText"><span>+</span> Хорошая эффективность</p></div>
                <div class="product__title_container"><p class="product__varietal extra highlight blueText"><span>-</span> Поднимает пыль </p></div>
                <div class="product__title_container"><p class="product__alcohol extra highlight blueText"><span>+</span> Ремонтопригоден.</p></div>
                <div class="product__title_container"><p class="product__alcohol extra highlight blueText"><span>+</span> Сушит воздух.</p></div>

            </div>
            <label class="action action--compare-add"><input class="check-hidden" type="checkbox"/><i
                    class="fa fa-plus blueText"></i><i class="fa fa-check"></i><span
                    class="action__text action__text--invisible">Добавить для сравнения</span></label>
        </div>
    </section>
</div>

<!-- блок сравнения продуктов -->
<section class="compare">
    <button class="action action--close"><i class="fa fa-remove"></i><span class="action__text action__text--invisible">Закрыть окно сравнения</span>
    </button>
</section>

<section class="slide" id="gallery">
    <!--<div class="full-slider">-->
    <h2 class="blueText">Галерея</h2>
    <div class="full-width">
        <div class="owl-carousel">
            <div><img src="/img/gallery/20.jpg"></div>
            <div><img src="/img/gallery/2.jpg"></div>
            <div><img src="/img/gallery/3.jpg"></div>
            <div><img src="/img/gallery/4.jpg"></div>
            <div><img src="/img/gallery/5.jpg"></div>
            <div><img src="/img/gallery/6.jpg"></div>
            <div><img src="/img/gallery/7.jpg"></div>
            <div><img src="/img/gallery/8.jpg"></div>
            <div><img src="/img/gallery/9.jpg"></div>
            <div><img src="/img/gallery/10.jpg"></div>
            <div><img src="/img/gallery/11.jpg"></div>
            <div><img src="/img/gallery/12.jpg"></div>
            <div><img src="/img/gallery/13.jpg"></div>
            <div><img src="/img/gallery/14.jpg"></div>
            <div><img src="/img/gallery/15.jpg"></div>
            <div><img src="/img/gallery/16.jpg"></div>
            <div><img src="/img/gallery/17-1.jpg"></div>
            <div><img src="/img/gallery/18.jpg"></div>
            <div><img src="/img/gallery/19.jpg"></div>

            <!--<div class="prev"><i class="material-icons large">navigate_before</i></div>-->
            <!--<div class="next"><i class="material-icons large">navigate_next</i></div>-->
        </div>
        <!--</div>-->
    </div>
    </div>
</section>
<div class="container card2" id="uslugi">
    <div class="row">
        <div class="col s12 m3">
            <div class="card  blueBgGradient greyText" style="z-index:4;">
                <div class="card-image aligen-center">
                    <img src="/icon/Замер.png">
                </div>
                <div class="card-content">
                    <h4 class="card-title greyText">замер и расчет</h4>
                    <p>При заказе Термоплинтуса наш специалист выедет на объект и снимет точные размеры. Мы сделаем
                        эскизный проект и проведем расчеты.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card  greyBgGradient blueText" style="z-index:3;">
                <div class="card-image">
                    <img src="/icon/brush.png" alt="">
                </div>
                <div class="card-content">
                    <h4 class="card-title">Покраска</h4>
                    <p>Покраска по индивидуальному заказу покупателя</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card  blueBgGradient greyText" style="z-index:2;">
                <div class="card-image">
                    <img src="/icon/Доставка.png">
                </div>
                <div class="card-content">
                    <h4 class="card-title greyText">доставка</h4>
                    <p>После всех расчетов и оформления заказа мы доставим Термоплинтус в любую точку Ташкента
                        (Узбекистана).
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card  greyBgGradient blueText" style="z-index:1;">
                <div class="card-image">
                    <img src="/icon/Монтаж.png">
                </div>
                <div class="card-content">
                    <h4 class="card-title">монтаж</h4>
                    <p>Наши специалисты быстро и качественно установят Плинтусы в любое помещение с любой сложностью
                        монтирования.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="cor" id="otziv">
    <div class="container">
        <h2 class="otv blueText">Отзывы</h2>
        <div class="reviews carousel">
            <div class="carousel-item">
                <div class="card  blueBgGradient greyText" style="z-index:8888;">
                    <div class="card-image">
                        <img src="img/avatar.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Теплый плинтус</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card  greyBgGradient blueText" style="z-index:2;">
                    <div class="card-image">
                        <img src="img/avatar.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Теплый плинтус</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card   blueBgGradient greyText" style="z-index:1;">
                    <div class="card-image">
                        <img src="img/avatar.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Теплый плинтус</h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col s12 m4">
                <div class="card  greyBgGradient blueText" style="z-index:3;">
                    <div class="card-image">
                        <img src="img/avatar.jpg">
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Теплый плинтус</h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="sertiv">
    <div class="container">
        <div class="row">
            <div class="col s12 m12 carousel blag">
                <h2 class="blueText" style="text-align: center;">Благодарственные письма</h2>
                <a class="carousel-item item" href="img/letter_1.jpg"><img src="/img/letter_1.jpg" alt=""></a>
                <a class="carousel-item item" href="img/letter_2.jpg"><img src="/img/letter_2.jpg" alt=""></a>
                <a class="carousel-item item" href="img/letter_3.png"><img src="/img/letter_3.png" alt=""></a>
                <a class="carousel-item item" href="img/letter_4.jpg"><img src="/img/letter_4.jpg" alt=""></a>
                <a class="carousel-item item" href="img/letter_5.jpg"><img src="/img/letter_5.jpg" alt=""></a>
                <a class="carousel-item item" href="img/letter_6.jpg"><img src="/img/letter_6.jpg" alt=""></a>
                <a class="carousel-item item" href="img/letter_7.jpg"><img src="/img/letter_7.jpg" alt=""></a>
                <a class="carousel-item item" href="img/letter_8.jpg"><img src="/img/letter_8.jpg" alt=""></a>
                <a class="carousel-item item" href="img/letter_9.jpg"><img src="/img/letter_9.jpg" alt=""></a>
            </div>
        </div>
    </div>
</div>
<div class="client">
    <h2 class="blueText">Довольные покупатели</h2>
    <div class="container">
        <div class="row valign-wrapper">
            <div class="col s6 m4 center-align valign-wrapper">
                <img src="/img/Безымянный-5.png" alt="">
            </div>
            <div class="col s6 m4 center-align valign-wrapper">
                <img src="/img/Fazenda.png" alt="">
            </div>
            <div class="col s6 m4 center-align valign-wrapper">
                <img src="/img/801_2ee6c2c57e.png" alt="">
            </div>
            <div class="col s6 m4 center-align valign-wrapper">
                <img src="/img/Политический музей.png" alt="">
            </div>
            <div class="col s6 m6 center-align valign-wrapper">
                <img src="/img/pervyi_kanal.png" alt="">
            </div>
        </div>
    </div>

</div>
<div class="zayav" id="zakaz">
    <div class="row">
        <div class="col s12 m12 l4  contact">
            <h3 class="greyText">Контакты</h3>
            <a href="#"><i class="icos material-icons prefix">location_on</i></a>
            <h4 class="greyText center-align">4, Осие, Юнусабадский р-он, Ташкент, Узбекистан</h4>
            <a href="#"><i class="icos material-icons prefix">phone</i></a>
            <div class="center-align"><a class="greyText familiy" href="tel:+998951692626">998 95 169 2626</a></div>
            <a href="#"><i class="icos material-icons prefix">local_post_office</i></a>
            <div class="center-align"><a class="greyText familiy" href="">info@geco.uz</a></div>
            <h4 class="greyText center-align">Время работ с (пн-сб) 10:00 : 19:00</h4>
            <a href="https://www.facebook.com/GECO-Innovations-2152244791662870" target="_blank"><i class="ico icon-facebook"></i></a>
            <a href="https://www.instagram.com/geco.innovations" target="_blank"><i class="ico icon-instagram"></i></a>
            <a href="https://www.instagram.com/geco.innovations" target="_blank"><i class="ico icon-twitter"></i></a>
        </div>
        <form class="col s12 m6 l4">
            <div class="row">
                <h3 class="greyText">заявка</h3>
                <div class="input-field col s12"><p class="p1 greyText">Оставьте заявку, и мы обязательно Вам перезвоним</p></div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix"><p class="greyText">Ваше имя</p></label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" class="validate">
                    <label for="icon_telephone"><p class="greyText">Ваш номер телефона</p></label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">local_post_office</i>
                    <input id="email" type="email" class="validate">
                    <label for="email"><p class="greyText">Ваш e-mail</p></label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">location_on</i>
                    <input id="first_name2" type="text" class="validate">
                    <label for="first_name2"><p class="greyText">Ваш город</p></label>
                </div>
            </div>
            <div class="button center-align"><a class="waves-effect greyBg btn-large">отправить</a></div>
        </form>
        <div class="col s12 m6 l4  logoBar">
            <div class="row">
                <div class="col s12 center-align"><img src="img/logo_white2.png" alt=""></div>
                <div class="col s12 valign-wrapper">
                    <img src="img/footer-logo%20.png" alt="">
                    <img src="img/footer-logo-alden%20.png" alt="">
                </div>
            </div>
        </div>

        <div class="col s12">
            <ul class="collapsible">
                <li class="active">
                    <div class="collapsible-header center-align"><h4 class="greyText">Развернуть карты</h4></div>
                    <div class="collapsible-body no-padding">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.206872431825!2d69.29312384592937!3d41.32611470775571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef4cbd5591e2b%3A0x31a0279a22a206bb!2z0YPQu9C40YbQsCDQntGB0LjRkSwg0KLQsNGI0LrQtdC90YIsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1537813487039" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                </li>
            </ul>
        </div>
    </div>
</div>

<footer class="page-footer" id="contacts">
    <div class="row">
        <div class="col s12 m6 blueText center-align"><h6>© Все права защищены | 2018 GECO Innovations</h6></div>
        <div class="col s12 m6 blueText right-align"><h6>Разработано и поддерживается |</h6> <a class="madetec" href="http://madetec.uz">Madetec-Solution</a></div>
    </div>
</footer>
