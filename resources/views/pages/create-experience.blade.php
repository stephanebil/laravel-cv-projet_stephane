@php
    $style = "rounded w-full block mb-3"
@endphp

<x-layouts.layout title="CV home">    
    <div class="px-20 py-20">
        <h1 class="py-5 text-xl text-orange-700 font-black">Create new experience</h1>
        <form action="{{ route('experiences.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="">
                        <input type="text" name="name" placeholder="Job title" value="{{ old('name') }}" class="{{ $style }}">
                        {{-- <x-error-msg name="title" /> --}}
                </div>
                <div class="">
                        <input type="text" name="location" placeholder="Society" value="{{ old('location') }}" class="{{ $style }}">
                        {{-- <x-error-msg name="title" /> --}}
                </div>
                <div class="">
                        <input type="number" name="year" placeholder="Job year" value="{{ old('year') }}" class="{{ $style }}">
                        {{-- <x-error-msg name="nationality" /> --}}
                </div>
                <button type="submit" class="bg-indigo-500 text-white mt-5 rounded p-2">Envoyer</button>
            </form>
        </div>
</x-layouts.layout>