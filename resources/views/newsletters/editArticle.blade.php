<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Article') }}
        </h2>
    </x-slot>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $article->id }}" />
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Author:</strong>
                        <input type="text" name="Title" value="{{ $article->Title }}" class="form-control"
                            placeholder="Title"  required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <div class="form-group row">
                            <strong>Content:</strong>
                            <div class="col-sm-12">
                                <textarea id="Content" name="Content" class="blog-post form-control @error('blog-post') is-invalid @enderror"
                                rows="10" cols="80" placeholder="{{ $article->Content }}" required></textarea>
                            </div>
                        </div
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ImageURL</strong>
                        <input type="text" name="ImageURL" value="{{ $article->ImageURL}}" class="form-control" placeholder="Image Url for the article" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        str = "@php echo $article->Content @endphp";
        editor = CKEDITOR.replace('Content', { toolbar: 'Basic' });
        CKEDITOR.instances['Content'].setData(str)
</script>
</x-app-layout>
