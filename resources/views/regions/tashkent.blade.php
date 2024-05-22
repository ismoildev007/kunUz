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

                    <div class="editor-choice">
                        <div class="block-title"><a href="/news/list?f=selected"><span>Муҳаррир танлови</span></a></div>
                        <div class="row">
                            @foreach($editorChoice as $new)
                                <div class="col-md-4">
                                    <div class="news">
                                        <div class="news__img">
                                            <a href="/news/{{ $new->id }}">
                                                <img src="{{ 'storage/' . $new->photo }}" alt="{{ $new->title }}">
                                            </a>
                                        </div>
                                        <div class="news-meta"><span><i class="fa fa-calendar"></i> {{ $new->created_at }}</span></div>
                                        <a class="news__title" href="/news/{{ $new->id }}">
                                            {{ $new->title }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                <!-- xudud start -->
                <div class="post-line" style="margin-top: 30px;">
                        <div class="line-block" id="news-list">
                            @if(isset($latestNews) && $latestNews->count() > 0)
                                <div class="l-item">
                                    @foreach($latestNews as $new)
                                        <div class="start-date">{{ $new->created_at->format('d F') }}</div>
                                        <div class="line-post">
                                            <div class="lp-head"><span class="publish-date">{{ $new->created_at->format('H:i') }}</span>
                                                <a class="lp-title" href="/news/2023/12/06/zortv-jurnalisti-bilan-operatorini-kaltaklagan-shaxsga-hukm-oqildi">
                                                    {{ $new->title }}
                                                </a>
                                            </div>
                                            <div class="lp-body d-flex">
                                                <div class="post-thumb">
                                                    <img style="width: 200px" src="{{ 'storage/' . $new->photo }}">
                                                </div>
                                                <div class="post-desc">
                                                    <p>{{ $new->short_content }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    </div>

            </div>
            <div class="col-md-3">
                <a class="block-title"><span>Сўнгги янгиликлар</span></a>
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
