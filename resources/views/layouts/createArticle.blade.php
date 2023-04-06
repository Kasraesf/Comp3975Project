<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Articles') }}
        </h2>
    </x-slot>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 margin-tb">

                <div class="pull-left">
                    <h2>Add New Article</h2>
                </div>

                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('newsletters.index') }}"> Back</a>
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

        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="row">
                <input type="hidden" name="newsletter_id" value="{{ $newsletter->id }}" />
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="Title" class="form-control" placeholder="Title" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Content</strong>
                        <textarea id="Content" name="Content" class="blog-post form-control @error('blog-post') is-invalid @enderror"
                        rows="10" cols="80" placeholder="Write Article Here..." required></textarea>                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image URL</strong>
                        <input type="text" name="ImageURL" class="form-control" placeholder="Url of an image" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        CKEDITOR.replace('Content', { toolbar: 'Basic' });
    </script>
</x-app-layout>
