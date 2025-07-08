@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<div class="relative h-96 bg-cover bg-center" style="background-image: url('{{ asset('images/agric.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="text-5xl font-bold mb-4">Our Focus</h1>
            <p class="text-xl">Promoting food safety across Uganda's agricultural value chain</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="max-w-4xl mx-auto">        
        <div class="prose lg:prose-xl mx-auto">
            <p class="text-lg text-gray-600 mb-8">
                The Food Safety Coalition Uganda (FoSCU) focuses on promoting food safety awareness, 
                policy development, and capacity building across Uganda's agricultural and food systems.
            </p>
            
            <div class="grid md:grid-cols-2 gap-8 mt-12">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-primary rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-primary">Food Safety Awareness</h3>
                    <p class="text-gray-600">
                        Educating farmers, processors, and consumers about safe food handling practices 
                        and the importance of food safety in the value chain.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-primary rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-gavel text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-primary">Policy Development</h3>
                    <p class="text-gray-600">
                        Working with government and stakeholders to develop and implement 
                        comprehensive food safety policies and regulations.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-primary rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-tools text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-primary">Capacity Building</h3>
                    <p class="text-gray-600">
                        Strengthening the capabilities of organizations and individuals 
                        involved in food production and safety management.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-primary rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-microscope text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-primary">Research & Innovation</h3>
                    <p class="text-gray-600">
                        Conducting research and promoting innovative solutions to address 
                        food safety challenges in Uganda's context.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
