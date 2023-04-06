<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Newsletters') }}
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('newsletters.create') }}">
                    Create New Newsletter
                </a> 
            </div>
        </h2>
    </x-slot>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                
                
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Description</th>
                <th>Status</th>
                <th>Date Updated</th>
                <th>&nbsp;</th>
            </tr>
            @foreach ($newsletters as $item)
                <tr>
                    {{-- ->TableColumn --}}
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Author }}</td>
                    <td>{{ $item->Description }}</td>
                    <td>{{ $item->Status }}</td>
                    <td>{{ $item->updated_at->format('d.m.Y') }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('articles.indices', $item->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('newsletters.edit', $item->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('newsletters.destroy', $item->id) }}">Delete</a>
                        <a class="btn btn-warning" href="{{ route('articles.create', $item->id) }}">Add Article</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $newsletters->links() }}
    </div>
</x-app-layout>
