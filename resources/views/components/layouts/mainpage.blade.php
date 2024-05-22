<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangiliklar</title>
    <link rel="icon" href="./images/favicon32x32.png" />
    <script src="https://kit.fontawesome.com/dd5559ee21.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">

</head>

<body>
<!-- header start -->
<div class="container">
    <div class="navbar align-items-center">
        <div class="logo">
            <a href="/"> <img src="./images/kun-uz-logo.svg" alt=""></a>
        </div>
        <ul class="d-flex navabar-ul  ">
            <li>
                <a href="{{ route('uzbek') }}"> ЎЗБЕКИСТОН</a>
            </li>
            <li>
                <a href="{{ route('world') }}">ЖАҲОН</a>

            </li>
            <li>
                <a href="">ИҚТИСОДИЁТ</a>
            </li>
            <li>
                <a href="">ЖАМИЯТ</a>
            </li>
            <li>
                <a href="">ФАН-ТЕХНИКА</a>
            </li>
            <li>
                <a href="">СПОРТ</a>
            </li>
            <li>

                <a href=""> НУҚТАЙИ НАЗАР</a>
            </li>
            <li>
                <a href="">АУДИО</a>
            </li>
        </ul>
        <select name="select" class="navabar-select form-select-sm">
            <option value="value1" selected>Uzbekcha</option>
            <option value="value2">Русский</option>
            <option value="value3">English</option>
        </select>
        <form class="form-inline ml-3" action="{{ route('main-search') }}" method="GET">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="lime ">

        <ul class="d-flex justify-content-between  align-items-center  link-ul">
            <li>
                <a class="link-ul-li-a-1">
                    <p class="link-ul-li-p-1">Ҳудудлар</p>
                </a>
            </li>
            <li>
                <a href="{{ route('tashkent') }}">
                    <p class="link-ul-li-p">Тошкент ш.</p>
                </a>

            </li>
            <li>
                <a href="{{ route('nukus') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Қорақалпоғистон</p>
                </a>
            </li>
            <li>
                <a href="{{ route('andijan') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Андижон</p>
                </a>
            </li>
            <li>
                <a href="{{ route('fargana') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Фарғона</p>
                </a>
            </li>
            <li>
                <a href="{{ route('namangan') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Наманган</p>
                </a>
            </li>
            <li>

                <a href="{{ route('samarkand') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Самарқанд</p>
                </a>
            </li>
            <li>
                <a href="{{ route('bukhara') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Бухоро</p>
                </a>
            </li>
            <li>
                <a href="{{ route('xiva') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Хоразм</p>
                </a>
            </li>
            <li>
                <a href="{{ route('termiz') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Сурхондарё</p>
                </a>
            </li>
            <li>
                <a href="{{ route('karshi') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Қашқадарё</p>
                </a>
            </li>
            <li>

                <a href="{{ route('jizzax') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Жиззах</p>
                </a>
            </li>
            <li>
                <a href="{{ route('sirdaryo') }}" class="link-ul-li-a">
                    <p class="link-ul-li-p">Сирдарё</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- header end -->

{{ $slot }}

<!-- footer start -->
<footer class="page-footer mt-4">

    <div class="page-footer__bottom">
        <div class="footer-menu-list">
            <div class="container space-between">
                <ul class="footer-menu reset-list">
                    <li class="footer-menu__item"><a href="{{ route('about') }}">Сайт ҳақида</a>
                    </li>
                    <li class="footer-menu__item"><a href="/news/rss">RSS</a>
                    </li>
                    <li class="footer-menu__item"><a href="{{ route('contact') }}">Алоқа</a>
                    </li>
                    <li class="footer-menu__item"><a href="/page/reklama">Реклама</a>
                    </li>
                    <li class="footer-menu__item"><a href="/time/news">Кун мавзулари</a></li>
                    <li class="footer-menu__item"><a href="/our-team">Kun.uz жамоаси</a>
                    </li>
                </ul><a class="d-flex" href="/page/privacy-18"><img src="./images/18plus-v2.svg"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container space-between">
                <div class="footer-text"> «KUN.UZ» сайтида эълон қилинган материаллардан нусха кўчириш, тарқатиш ва
                    бошқа шаклларда фойдаланиш фақат таҳририят ёзма розилиги билан амалга оширилиши
                    мумкин.<br>Гувоҳнома: №0987. Берилган санаси: 22.06.2015 йил. Муассис: «WEB EXPERT» МЧЖ.
                    Таҳририят манзили: 100043, Тошкент шаҳри, К. Ёрматов кўчаси, 12-уй. Электрон манзил:
                    info@kun.uz.<br>Сайтда эълон қилинаётган муаллифлик мақолаларида келтирилган фикрлар муаллифга
                    тегишли ва улар Kun.uz таҳририяти нуқтаи назарини ифода этмаслиги мумкин.<br>Ⓣ - мақола ва
                    материалларда қўйилган мазкур белги уларнинг тижорат ва реклама ҳуқуқлари асосида эълон
                    қилинганлигини билдиради. </div>
                <ul class="social-items reset-list">
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                    <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                                target="_blank"><img src="./images/social-youtube.svg"></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- footer end -->

</body>

</html>
