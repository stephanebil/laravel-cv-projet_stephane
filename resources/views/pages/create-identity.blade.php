@php
    $style = "rounded w-full block mb-3"
@endphp

<x-layouts.layout title="CV home">    
    <div class="px-20 py-20">
        <h1 class="py-5 text-xl text-orange-700 font-black">Create new identity</h1>
        <form action="{{ route('identities.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="">
                        <input type="text" name="firstName" placeholder="Votre prénom" value="{{ old('firstName') }}" class="{{ $style }}">
                        {{-- <x-error-msg name="title" /> --}}
                </div>
                <div class="">
                        <input type="text" name="lastName" placeholder="Votre nom" value="{{ old('lastName') }}" class="{{ $style }}">
                        {{-- <x-error-msg name="title" /> --}}
                </div>
                <div class="">
                        <textarea name="address" placeholder="Votre adresse" id="" cols="30" rows="10">{{ old('address') }}</textarea>
                        {{-- <x-error-msg name="description" /> --}}
                </div>
                <div class="">
                        <input type="number" name="zip_code" placeholder="code postal" value="{{ old('zip_code') }}" class="{{ $style }}">
                        {{-- <x-error-msg name="nationality" /> --}}
                </div>
                <div class="">
                        <input type="text" name="city" placeholder="Ville" value="{{ old('city') }}" class="{{ $style }}">
                        {{-- <x-error-msg name="year_created" /> --}}
                </div>
                <div class="">
                        <input type="number" name="tel" placeholder="tel" value="{{ old('tel') }}" class="{{ $style }}">
                        {{-- <x-error-msg name="actor" /> --}}
                </div>
                <div class="">
                        <input type="email" name="email" placeholder="email" value="{{ old('email') }}" class="{{ $style }}">
                        {{-- <x-error-msg name="actor" /> --}}
                </div>
                <div class="">
                        <textarea name="about" placeholder="à propos de vous" id="" cols="30" rows="10">{{ old('about') }}</textarea>
                        {{-- <x-error-msg name="description" /> --}}
                </div>
                <button type="submit" class="bg-indigo-500 text-white mt-5 rounded p-2">Envoyer</button>
            </form>
        </div>
</x-layouts.layout>