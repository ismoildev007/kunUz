<x-layouts.main>
    <div class="container-fluid">

        <div class="row">
            <table class="table">
                <tbody>
                @if($news->isNotEmpty())
                @foreach($news as $new)
                    <tr>
                        <th>{{ $new->id }}</th>
                        <th>{{ $new->title}}</th>
                        <th>{{ $new->short_content }}</th>
                        <th>{{ $new->content }}</th>
                        <th><img style="height: 70px; width: 100px;" src="{{ asset('storage/' . $new->photo) }}" alt=""></th>
                        <th>
                            <div class="d-flex">
                                <a class="mt-2 mx-3" href="{{ route('news.show', ['news' => $new->id]) }}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('news.edit', ['news' => $new->id]) }}" class="mt-2 mx-1"><i class="fa fa-edit"></i></a>
                                <a href="">
                                    @auth
                                        <form action="{{ route('news.destroy', ['news'=> $new->id]) }}" method="post" onsubmit="return confirm('ochirishga ruxsat berasizmi')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-danger"><i class="fa fa-trash-can"></i></button>
                                        </form>
                                    @endauth
                                </a>
                            </div>
                        </th>
                    </tr>
                @endforeach
                @else
                    <div>
                        <h2>bunaqa so'z topilmadi</h2>
                    </div>
                @endif
                </tbody>
            </table>
        </div>

    </div>
</x-layouts.main>
