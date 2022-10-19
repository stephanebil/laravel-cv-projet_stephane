<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class=""><a href="{{ route('identities.create') }}" class="">Gérer son identité</a></div> 
                    <div class=""><a href="{{ route('formations.create') }}" class="">Gérer ma formation</a></div>
                    <div class=""><a href="{{ route('experiences.create') }}" class="">Gérer mon expérience</a></div>
                    <div class=""><a href="{{ route('skills.create') }}" class="">Gérer mes skills</a></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
