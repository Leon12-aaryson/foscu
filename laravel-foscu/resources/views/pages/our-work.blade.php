@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<div class="relative h-96 bg-cover bg-center" style="background-image: url('{{ asset('images/work.png') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="text-5xl font-bold mb-4">Our Work</h1>
            <p class="text-xl">Building food safety capacity across Uganda</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="max-w-4xl mx-auto">
        
        <div class="prose lg:prose-xl mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-lg mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">What We Do</h2>
                <p class="text-lg text-gray-600 mb-6">
                    FoSCU works across multiple areas to strengthen food safety systems in Uganda. 
                    Our comprehensive approach addresses the entire food value chain from production to consumption.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-center mb-4">
                        <i class="fas fa-users text-4xl text-primary mb-2"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-center">Stakeholder Engagement</h3>
                    <p class="text-gray-600">
                        Building partnerships with government agencies, civil society organizations, 
                        academic institutions, and private sector players to create a unified approach to food safety.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-center mb-4">
                        <i class="fas fa-graduation-cap text-4xl text-primary mb-2"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-center">Training & Education</h3>
                    <p class="text-gray-600">
                        Delivering comprehensive training programs on food safety practices, 
                        regulatory compliance, and best practices for farmers, processors, and traders.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-center mb-4">
                        <i class="fas fa-microscope text-4xl text-primary mb-2"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-center">Research & Analysis</h3>
                    <p class="text-gray-600">
                        Conducting research on food safety challenges and opportunities 
                        across various agricultural value chains in Uganda.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-center mb-4">
                        <i class="fas fa-bullhorn text-4xl text-primary mb-2"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-center">Advocacy & Policy</h3>
                    <p class="text-gray-600">
                        Advocating for improved food safety policies and regulations, 
                        and supporting their implementation at national and local levels.
                    </p>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-lg mt-8">
                <h3 class="text-2xl font-semibold mb-6 text-primary">Our Impact</h3>
                <div class="grid md:grid-cols-3 gap-6 text-center">
                    <div>
                        <div class="text-3xl font-bold text-primary mb-2">50+</div>
                        <p class="text-gray-600">Member Organizations</p>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary mb-2">1000+</div>
                        <p class="text-gray-600">People Trained</p>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary mb-2">15+</div>
                        <p class="text-gray-600">Research Reports</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
