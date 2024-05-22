<x-layouts.mainpage>
<!-- section start -->
<div class="container mt-3">
    <div class="row">
        <div class="col-md-9">
            @if($regions->count() > 0)
                @php
                    $latestRegion = $regions->shift(); // Eng so'nggi elementni olish
                @endphp

                <div class="row section-card">
                    <div class="col-md-6">
                        <div class="section-card-img">
                            <img src="{{ 'storage/' . $latestRegion->photo }}" style="max-height: 400px" alt="" class="card-img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-meta"><span><i class="fa fa-calendar"></i> {{ $latestRegion->created_at }}</span></div>
                        <span class="big-news__title">{{ $latestRegion->title }}</span>
                        <span class="big-news__description">{{ $latestRegion->short_content }}</span>
                    </div>
                </div>
            @endif
            <div class="row mt-3">
                @foreach($editorChoice as $new)

                <div class="col-md-6 mt-3">
                    <div class="small-news d-flex">

                        <a class="small-news__img" href="">
                            <img src="{{ 'storage/' . $new->photo }}" class="small-news__img">
                        </a>


                        <div class="small-news__content">
                            <div class="news-meta-2">
                                <span><i class="fa fa-calendar"></i> {{ $new->created_at }}</span>
                            </div>
                            <a class="small-news__title">
                                {{ $new->title }}
                            </a>
                        </div>


                    </div>
                </div>
                @endforeach
            </div>

            <div class="editor-choice">
                <div class="block-title"><a href="/news/list?f=selected"><span>Муҳаррир танлови</span></a></div>
                <div class="row">

                    @foreach($editors as $editor)
                        <div class="col-md-4">
                            <div class="news">
                                <div class="news__img ">
                                    <a href="">
                                        <img src="{{ 'storage/' . $editor->photo }}">
                                    </a>
                                </div>
                                <div class="news-meta"><span>{{ $editor->created_at->format('H:i d F Y') }}</span></div><a class="news__title"
                                                                                               href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">Нурмат
                                    Отабеков: Мавсумий касалликлар сабаб ўқув муассасаларида таълим жараёнини
                                    тўхтатишга асос йўқ</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
        <div class="col-md-3">
            <a href="{{ route('latest-news') }}" class="block-title"><span>Сўнгги янгиликлар</span></a>
            <div class="mb-25">
                @foreach($news as $region)
                    <a class="news-lenta" href="">
                        <div class="news-meta"><span><i class="fa fa-calendar"></i> {{ $region->created_at }}</span></div>
                        <span class="news-lenta__title">
                                {{ $region->title }}
                            </span>

                    </a>
                    <hr>
                @endforeach
            </div>

        </div>
    </div>
</div>
<div class="container" id="actual-news-content">
    <div class="block-title"><span>Долзарб хабарлар</span></div>
    <div class="row">
        <div class="col-md-6">
            @foreach($currentNews as $current)
                <div class="big-news big-news_column">
                    <div class="big-news__img p-relative">
                        <a href="/news/2023/12/06/yandex-go-soliq-tolashi-vaji-bilan-haydovchilardan-undiradigan-komissiyasini-oshirdi">
                            <img src="{{'storage/' . $current->photo}}">
                        </a>
                    </div>
                    <div class="big-news__content">
                        <a class="big-news__title" href="/news/2023/12/06/yandex-go-soliq-tolashi-vaji-bilan-haydovchilardan-undiradigan-komissiyasini-oshirdi">
                            {{ $current->title }}
                        </a>
                        <div class="big-news__description">
                            {{ $current->short_content }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-6">
            <div class="row">
                @foreach($currentLatest as $latest)
                    <div class="col-md-6 mb-25">
                        <div class="news">
                            <div class="news__img p-relative"><a href="/news/2023/12/06/baxti-tashkenskiy-15-sutkaga-qamaldi">
                                    <img src="{{ 'storage/' . $latest->photo }}">
                                </a>
                            </div>
                            <a class="news__title" href="/news/2023/12/06/baxti-tashkenskiy-15-sutkaga-qamaldi">{{ $latest->short_content }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container" id="day-theme-content-c"
     data="{&quot;url&quot;:&quot;\/time\/news\/main&quot;,&quot;btn_title&quot;:&quot;\u0411\u0430\u0440\u0447\u0430 \u043c\u0430\u049b\u043e\u043b\u0430\u043b\u0430\u0440&quot;}">
    <div class="block-title mt-30 mb-30">
        <a href="/news/time/hamasning-isroilga-hujumi">
            <span>ҲАМАС–Исроил
                    уруши
            </span>
        </a>
    </div>
    <div class="row">
        @foreach($hamasone as $war)
            <div class="col-md-6">
                <div class="inquiry-post"><a class="post-box"
                                             href="/news/2023/12/05/isroil-gazoda-harbiy-operatsiyaning-uchinchi-bosqichi-boshlanganini-elon-qildi">
                        <div class="post-thumb">
                            <img src="{{ 'storage/' . $war->photo }}">
                        </div>
                        <div class="post-body">
                            <h4>{{ $war->title }}&nbsp;</h4>
                        </div>
                    </a></div>
            </div>
        @endforeach
        <div class="col-md-6">
            @foreach($hamas as $wars)
                <div class="small-post-content">
                    <div class="small-post">
                        <a class="d-flex" href="/news/2023/12/05/oav-isroil-hamas-tunnellarini-dengiz-suviga-boktirish-haqida-oylamoqda">
                            <div class="sm-thumbnail">
                                <img src="{{ 'storage/' . $wars->photo }}">
                            </div>
                            <div class="post-title">
                                <h4>{{ $wars->title }}</h4>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container" id="authored-news"
     data="{&quot;title_all&quot;:&quot;\u0411\u0430\u0440\u0447\u0430\u0441\u0438&quot;,&quot;url&quot;:&quot;\/news\/list?f=authored&quot;,&quot;img&quot;:&quot;\/assets\/99110d40\/img\/blue-right-arrow.svg&quot;}">
    <div class="row">
        <div class="col-md-12">
            <div class="block-title mt-30 mb-30"><span>Мақолалар</span></div>
            <div class="row">
                @foreach($article as $articles)
                    <div class="col-md-4 mb-30">
                        <div class="news">
                            <div class="news__imgs p-relative">
                                <a href="/news/2023/12/05/oxiri-korinmayotgan-mojaro-adolat-sari-yurayotgan-todakol-ishi-yana-tosiqlarga-uchramoqda">
                                    <img src="{{ 'storage/' . $articles->photo }}">
                                </a>
                            </div>
                            <a class="news__title" href="/news/2023/12/05/oxiri-korinmayotgan-mojaro-adolat-sari-yurayotgan-todakol-ishi-yana-tosiqlarga-uchramoqda">
                                {{ $articles->title }}
                            </a>
                            <div class="news__desc">
                                {{ $articles->short_content }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- section end -->
</x-layouts.mainpage>
