<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayt haqida</title>
    <link rel="icon" href="./images/favicon32x32.png" />
    <script src="https://kit.fontawesome.com/dd5559ee21.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">

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
            <option value="value1">Значение 1</option>
            <option value="value2" selected>uzbek</option>
            <option value="value3">Значение 3</option>
        </select>
    </div>

</div>
<!-- header end -->

<!-- section start -->
<div class="wrapper">
    <main>
        <div class="container">
            <div class="contact-block">
                <div class="contact-block__left">



                    <h3> Мурожаат йўлланг</h3>
                    <form id="contact-form" class="contact-form" action="/contact" method="post">
                        <input type="hidden" name="_csrf"
                               value="KJXl3XtBy7dg8E5zq4rUByQzmsmW8G0TmQ7UFTNDuL1hx4S_AnL78le6exXasqJpFwuvs_K8GXTuZ4NdCzLQ8w==">
                        <div class="form-field field-contactmobile-name required">
                            <input type="text" id="contactmobile-name" class="label-top-animation"
                                   name="ContactMobile[name]" placeholder="Исмингиз" aria-required="true">
                            <div class="help-block"></div>
                        </div>
                        <div class="form-field field-contactmobile-email required">
                            <input type="text" id="contactmobile-email" class="label-top-animation"
                                   name="ContactMobile[email]" placeholder="Эл.почта" aria-required="true">
                            <div class="help-block"></div>
                        </div>
                        <div class="form-field field-contactmobile-phone required">
                            <input type="text" id="contactmobile-phone" class="label-top-animation phone-number"
                                   name="ContactMobile[phone]" placeholder="Телефон рақамингиз" aria-required="true">
                            <div class="help-block"></div>
                        </div>
                        <div class="form-field field-contactmobile-subject required">
                            <input type="text" id="contactmobile-subject" class="label-top-animation"
                                   name="ContactMobile[subject]" placeholder="Мавзу" aria-required="true">
                            <div class="help-block"></div>
                        </div>
                        <div class="form-field textarea field-contactmobile-body required">
                                <textarea id="contactmobile-body" class="form-control" name="ContactMobile[body]"
                                          rows="4" placeholder="Хабар" aria-required="true"></textarea>
                            <div class="ui error message">
                                <p></p>
                            </div>
                        </div>
                        <div class="width-50">
                            <div class="form-group margin-bottom-70 field-contactmobile-verifycode required">
                                <label class="control-label" for="contactmobile-verifycode">Хавфсизлик коди</label>
                                <div style="width: 60%;"><img id="contactmobile-verifycode-image"
                                                              src="/site/captcha?v=657226bd75de67.14930954" alt=""></div><input
                                    type="text" id="contactmobile-verifycode" class="form-control"
                                    name="ContactMobile[verifyCode]">

                                <p></p>
                            </div>
                        </div>
                        <button type="submit" class="main-btn-solid" name="contact-button">Юбориш</button>

                    </form>
                </div>
                <div class="contact-block__right">
                    <div class="short-info">Телеграм орқали: <a href="https://t.me/kunuzmurojaat"
                                                                target="_blank">@kunuzmurojaat</a>

                        <div class="work-time-info">Мурожаатни фақат матнли кўринишда, қисқа ва лўнда ёзиб
                            қолдиринг. Овозли хабарлар кўриб (эшитиб) чиқилмайди.</div>
                        <div class="info-item"><span>Email:</span><span><a
                                    href="mailto:info@kun.uz">info@kun.uz</a></span></div>
                        <div class="info-item"><span>Ижтимоий тармоқлар:</span>
                            <div class="social-items">
                                <a href="https://www.facebook.com/kunuznews/" target="_blank"><img
                                        src="/assets/3d48c862/img/facebook-r.svg"></a>
                                <a href="https://ok.ru/kunuznews" target="_blank"><img
                                        src="/assets/3d48c862/img/odnoklasnik-r.svg"></a>
                                <a href="https://twitter.com/KunUzNews" target="_blank"><img
                                        src="/assets/3d48c862/img/twitter-r.svg"></a>
                                <a href="https://www.instagram.com/kun.uz" target="_blank"><img
                                        src="/assets/3d48c862/img/instagram-r.svg"></a>
                            </div>
                        </div>
                        <div class="info-item"><span>Мобил иловаларимиз:</span>
                            <div class="store"><a href="https://itunes.apple.com/us/app/kun.uz/id1042740093?mt=8"
                                                  target="_blank"><img src="/assets/3d48c862/img/appleStore-w.svg"></a><a
                                    href="https://play.google.com/store/apps/details?id=uz.kun.app"
                                    target="_blank"><img src="/assets/3d48c862/img/googlePlay-w.svg"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>


<!-- section end -->




<!-- footer start -->
<footer class="page-footer mt-4">

    <div class="page-footer__bottom">
        <div class="footer-menu-list">
            <div class="container space-between">
                <ul class="footer-menu reset-list">
                    <li class="footer-menu__item"><a href="/page/about">Сайт ҳақида</a>
                    </li>
                    <li class="footer-menu__item"><a href="/news/rss">RSS</a>
                    </li>
                    <li class="footer-menu__item"><a href="/contact">Алоқа</a>
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
<link rel="icon" href="./images/favicon32x32.png" />
<script src="https://kit.fontawesome.com/dd5559ee21.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ mix('/css/main.css') }}">

</html>
