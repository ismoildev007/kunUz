<x-layouts.main>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('news.update', ['news' => $news->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title" placeholder="Title" value="{{ $news->title }}" />
                        @error('title')
                        <label for="if" class="text-danger">Title to'ldiring</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
{{--                    <select name="category_id" class="form-control mt-3 mb-3">--}}
{{--                        @foreach($regions as $new)--}}
{{--                            <option value="{{ $new->id }}">{{ $new->region_name }}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content" placeholder="Short Content" value="{{ $news->short_content }}" />
                        @error('short_content')
                        <label for="if" class="text-danger">Short Contentni to'ldiring</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('photo')
                    <label for="if" class="text-danger">faylni yuklashni unutdingiz3</label>
                    @enderror
                    <div class="control-group">
                        <textarea class="form-control" rows="3" name="content" placeholder="Content" data-validation-required-message="Please enter your message">{{ $news->content }}</textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                        <a href="{{ route('news.index') }}" class="btn btn-outline-info" type="submit" id="sendMessageButton">Orqada</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.main>
<x-layouts.main>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title" placeholder="Title" value="{{ old('title') }}" />
                        @error('title')
                        <label for="if" class="text-danger">Title to'ldiring</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <select name="category_id" class="form-control mt-3 mb-3">
                        @foreach($regions as $new)
                            <option value="{{ $new->id }}">{{ $new->region_name }}</option>
                        @endforeach
                    </select>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content" placeholder="Short Content" value="{{ old('short_content') }}" />
                        @error('short_content')
                        <label for="if" class="text-danger">Short Contentni to'ldiring</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('photo')
                    <label for="if" class="text-danger">faylni yuklashni unutdingiz3</label>
                    @enderror
                    <div class="control-group">
                        <textarea class="form-control" rows="3" name="content" placeholder="Content" data-validation-required-message="Please enter your message">{{ old('content') }}</textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.main>

