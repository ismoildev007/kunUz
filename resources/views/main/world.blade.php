<x-layouts.mainpage>
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

                <div class="editor-choice mt-3">

                    <div class="row">
                        @foreach($latestNews as $new)
                            <div class="col-md-4 mt-3">
                                <div class="news">
                                    <div class="news__img ">
                                        <a href="/news/2023/12/04/nurmat-otabekov-mavsumiy-kasalliklar-sabab-oquv-muassasalarida-talim-jarayonini-toxtatishga-asos-yoq">
                                            <img src="{{ 'storage/' . $new->photo }}">
                                        </a>
                                    </div>
                                    <div class="news-meta"><span>{{ $new->created_at->format('H:i d F Y') }}</span></div>
                                    <a class="news__title" href="">{{ $new->short_content }}</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <a href="/news/list" class="block-title"><span>Сўнгги янгиликлар</span></a>
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
</x-layouts.mainpage>
