@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-center mb-12 text-gray-800">Who We Are</h1>
        
        <div class="prose lg:prose-xl mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-lg mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-primary">About FoSCU</h2>
                <p class="text-lg text-gray-600 mb-6">
                    The Food Safety Coalition Uganda (FoSCU) is a multi-stakeholder platform 
                    bringing together organizations and individuals committed to improving food safety 
                    standards across Uganda's agricultural and food systems.
                </p>
                
                <p class="text-gray-600 mb-6">
                    Established to address the growing concerns about food safety in Uganda, 
                    FoSCU serves as a coordinating body that facilitates collaboration between 
                    government agencies, civil society organizations, academic institutions, 
                    and private sector players.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-primary">Our Mission</h3>
                    <p class="text-gray-600">
                        To promote safe food systems in Uganda through advocacy, capacity building, 
                        research, and multi-stakeholder collaboration.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-primary">Our Vision</h3>
                    <p class="text-gray-600">
                        A Uganda where all people have access to safe, nutritious food throughout 
                        the value chain from farm to fork.
                    </p>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-lg mt-8">
                <h3 class="text-2xl font-semibold mb-6 text-primary">Our Values</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                            <span><strong>Collaboration:</strong> Working together with all stakeholders</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                            <span><strong>Transparency:</strong> Open and honest communication</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                            <span><strong>Innovation:</strong> Embracing new ideas and technologies</span>
                        </li>
                    </ul>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                            <span><strong>Inclusivity:</strong> Ensuring all voices are heard</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                            <span><strong>Sustainability:</strong> Long-term impact and viability</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                            <span><strong>Excellence:</strong> Commitment to quality in all we do</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
