<x-layouts.main>
    <div class="container-fluid">

        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">category_id</th>
                    <th scope="col">title</th>
                    <th scope="col">short_content</th>
                    <th scope="col">content</th>
                    <th scope="col">photo</th>
                    <th scope="col">Operatsiya</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{{ $new->id }}</th>
                        <th>{{ $new->category_id}}</th>
                        <th>{{ $new->title}}</th>
                        <th>{{ $new->short_content }}</th>
                        <th>{{ $new->content }}</th>
                        <th><img style="height: 70px; width: 100px;" src="{{ asset('storage/' . $new->photo) }}" alt=""></th>
                        <th>
                            <div class="d-flex">
                                <a href="{{ route('news.edit', ['news' => $new->id]) }}" class="mt-2 mx-1"><i class="fa fa-edit"></i></a>
                                <a href="">
                                    @auth
                                        <form action="{{ route('news.destroy', $new->id) }}" method="post" onsubmit="return confirm('ochirishga ruxsat berasizmi')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-danger"><i class="fa fa-trash-can"></i></button>
                                        </form>
                                    @endauth
                                </a>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</x-layouts.main>
