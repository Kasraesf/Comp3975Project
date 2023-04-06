<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article info') }}
        </h2>
    </x-slot>
    <div class="container">
        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="text-center">
                                <strong>Title:</strong>
                                {{ $article->Title }}
                            </div><!-- end title -->
                            <div class="blog-content">
                                <div class="pp">
                                    <strong>Content:</strong>
                                    {{ $article->Content }}
                                </div><!-- end pp -->
                            </div><!-- end content -->
                            <div class="single-post-media">
                                <img src="{{ $article->ImageURL }}" alt="{{ $article->Title }}" style="max-width: 100%">
                            </div><!-- end media -->
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    {{-- <div class="pull-left">
                                        <h2>Show Newsletters</h2>
                                    </div> --}}
                                    <div class="pull-right">
                                        <a class="btn btn-primary" href="{{ route('articles.index') }}">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
