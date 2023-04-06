@extends('layouts.master')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="clearfix">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $item)
                            <tr>
                                <td>
                                    <div class="page-wrapper">
                                        <div class="blog-title-area text-center">

                                            <h3>{{ $item->Title }}</h3>

                                            <div class="blog-meta big-meta">
                                                <small>{{ $item->updated_at->format('d.m.Y') }}</small>
                                            </div><!-- end meta -->
                                        </div><!-- end title -->
                                        <center><img src="{{ $item->ImageURL }}" alt="" class="img-fluid"></center>
                                        <div class="blog-content">
                                            <div class="pp">
                                                <p>{{ $item->Content }}</p>
                                            </div><!-- end pp -->
                                        </div><!-- end content -->
                                        <center>
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-primary"
                                                    href="{{ route('articles.edit', $item->id) }}">Edit</a>
                                                <a class="btn btn-danger"
                                                    href="{{ route('articles.destroy', $item->id) }}">Delete</a>
                                            </div>
                                        </center>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-lg-12 margin-tb">
                        {{-- <div class="pull-left">
                            <h2>Show Newsletters</h2>
                        </div> --}}
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('newsletters.index') }}">Back</a>
                        </div>
                    </div>
                    {{ $articles->links() }}
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end clearfix -->
    </div>
</x-app-layout>
