<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="p-6 text-gray-900">
                        <span style="font-size:xx-large;">Good News!</span>

                        <hr>
                    
                        {{-- <p><a href="{{ route('newsletters.index') }}">Newsletters</a></p> --}}
                    
                        <hr>
                    
                        <p>Andrew Anca: &emsp; &emsp; A00991715</p>
                        <p>Isaac Rudy: &emsp; &emsp; &emsp; A01261260</p>
                        <p>Kasra Esfahanian: &emsp; A01306289</p>
                        <p>Germanpreet Singh: A01312851</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
