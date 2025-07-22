@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<div class="relative h-96 bg-cover bg-center" style="background-image: url('{{ asset('posters/Poster5.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="text-5xl font-bold mb-4">Audio Resources</h1>
            <p class="text-xl">Audio resources and radio programs on food safety awareness in multiple languages</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="max-w-6xl mx-auto">
        <div class="mb-8">
            <a href="{{ route('information-resources') }}" class="text-primary hover:text-orange-600 font-semibold">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Information Resources
            </a>
        </div>
        
        <!-- Role of Consumers in Food Safety -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold mb-6 text-primary">Role of Consumers in Food Safety</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="mb-4">
                        <audio controls class="w-full">
                            <source src="{{ asset('audio-files/Consumers/Audio_English_food_safety_hazards_CONSUMER_ROLE.mp3') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">English</h3>
                    <p class="text-gray-600 text-sm">Food safety hazards and consumer role</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="mb-4">
                        <audio controls class="w-full">
                            <source src="{{ asset('audio-files/Consumers/Audio_luganda_food_safety_hazards_CONSUMER_ROLE.mp3') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Luganda</h3>
                    <p class="text-gray-600 text-sm">Food safety hazards and consumer role</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="mb-4">
                        <audio controls class="w-full">
                            <source src="{{ asset('audio-files/Consumers/Audio_Lumasaba_food_safety_hazards_CONSUMER_ROLE.mp3') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Lumasaba</h3>
                    <p class="text-gray-600 text-sm">Food safety hazards and consumer role</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="mb-4">
                        <audio controls class="w-full">
                            <source src="{{ asset('audio-files/Consumers/Audio_Runyoro_food_safety_hazards_CONSUMER_ROLE.mp3') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Runyoro</h3>
                    <p class="text-gray-600 text-sm">Food safety hazards and consumer role</p>
                </div>
            </div>
        </div>
        
        <!-- Role of Farmers in Food Safety -->
        <div>
            <h2 class="text-2xl font-semibold mb-6 text-primary">Role of Farmers in Food Safety</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="mb-4">
                        <audio controls class="w-full">
                            <source src="{{ asset('audio-files/Farmers/Audio_English_Chemical_food_contamination_FARMER_ROLE.mp3') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">English</h3>
                    <p class="text-gray-600 text-sm">Chemical food contamination and farmer role</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="mb-4">
                        <audio controls class="w-full">
                            <source src="{{ asset('audio-files/Farmers/Audio_luganda_Chemical_food_contamination_FARMER_ROLE.mp3') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Luganda</h3>
                    <p class="text-gray-600 text-sm">Chemical food contamination and farmer role</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="mb-4">
                        <audio controls class="w-full">
                            <source src="{{ asset('audio-files/Farmers/Audio_lumasaba_Chemical_food_contamination_FARMER_ROLE.mp3') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Lumasaba</h3>
                    <p class="text-gray-600 text-sm">Chemical food contamination and farmer role</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="mb-4">
                        <audio controls class="w-full">
                            <source src="{{ asset('audio-files/Farmers/Audio_Runyoro_Chemical_food_contamination_FARMER_ROLE.mp3') }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Runyoro</h3>
                    <p class="text-gray-600 text-sm">Chemical food contamination and farmer role</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
