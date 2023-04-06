<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Newsletters') }}
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
        <form action="{{ route('newsletters.update', $newsletter->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $newsletter->id }}" />
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Author:</strong>
                        <input type="text" name="Author" value="{{ $newsletter->Author }}" class="form-control"
                            placeholder="Author"  required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Content:</strong>
                        <input type="text" name="Description" value="{{ $newsletter->Description }}" class="form-control"
                            placeholder="Description" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status</strong>
                        <input type="text" name="Status" value="{{ $newsletter->Status }}" class="form-control" placeholder="Article Status (0 for inactive and 1 for active)" required pattern="[01]" required>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
