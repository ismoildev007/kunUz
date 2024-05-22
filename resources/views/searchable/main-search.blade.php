<x-layouts.mainpage>
    <div class="container">
        <div class="row">
            @if($news->isNotEmpty())
            @foreach($news as $new)
                <div class="card mb-3 mt-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ 'storage/' . $new->photo }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <div>
                    <h2>bunaqa so'z topilmadi</h2>
                </div>
            @endif
        </div>
    </div>
</x-layouts.mainpage>
