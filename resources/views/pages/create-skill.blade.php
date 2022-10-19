@php
    $style = "rounded w-full block mb-3"
@endphp

<x-layouts.layout title="CV home">    
    <div class="px-20 py-20">
        <h1 class="py-5 text-xl text-orange-700 font-black">Create new skill</h1>
        <form action="{{ route('skills.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="">
                        <input type="text" name="name" placeholder="skill" value="{{ old('name') }}" class="{{ $style }}">
                        {{-- <x-error-msg name="title" /> --}}
                </div>
                {{-- <button><a href="" class="">coucou</a></button> --}}
                <button type="submit" class="bg-indigo-500 text-white mt-5 rounded p-2">Envoyer</button>
            </form>
        </div>
</x-layouts.layout>