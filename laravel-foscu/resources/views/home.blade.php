@extends('layouts.main')

@section('content')
<!-- Hero Video Section -->
<div class="main relative">
    <video autoplay muted loop class="w-full h-screen object-cover">
        <source src="{{ asset('video/foodharzards.mp4') }}" type="video/mp4">
        <!-- Fallback image if video doesn't work -->
        <img src="{{ asset('images/foscu1.jpg') }}" alt="FoSCU Background" class="w-full h-screen object-cover">
    </video>
</div>

<!-- Twitter Feed Section -->
<div class="bg-white py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-3xl font-bold text-center mb-8 text-primary">Food Safety News</h3>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
                    <blockquote class="twitter-tweet" data-media-max-width="560">
                        <p lang="en" dir="ltr">FOOD SAFETY ALERT!!<br><br>Watch and learn how SEX-PHEROMONE TRAPS are used to manage
                            FRUIT FLIES!!!<br>NON-CHEMICAL PEST MANAGEMENT promotes food safety.<br><br>Full video 👉 <a
                                href="https://t.co/GIpjuvfZXv">https://t.co/GIpjuvfZXv</a><a
                                href="https://twitter.com/hashtag/FoodSafey?src=hash&amp;ref_src=twsrc%5Etfw">#FoodSafey</a> | <a
                                href="https://twitter.com/foscu23?ref_src=twsrc%5Etfw">@foscu23</a> | <a
                                href="https://t.co/TSeOuEwiKQ">https://t.co/TSeOuEwiKQ</a> <a
                                href="https://t.co/l99rhat6c8">pic.twitter.com/l99rhat6c8</a></p>&mdash; ESAU (@Esau_Matsiko) <a
                            href="https://twitter.com/Esau_Matsiko/status/1769301327522206199?ref_src=twsrc%5Etfw">March 17, 2024</a>
                    </blockquote>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
                    <blockquote class="twitter-tweet" data-media-max-width="560">
                        <p lang="en" dir="ltr">FOOD SAFETY ALERT!!<br><br>Watch and learn how SEX-PHEROMONE TRAPS are used to manage
                            FRUIT FLIES!!!<br>NON-CHEMICAL PEST MANAGEMENT promotes food safety.<br><br>Full video 👉 <a
                                href="https://t.co/GIpjuvfZXv">https://t.co/GIpjuvfZXv</a><a
                                href="https://twitter.com/hashtag/FoodSafey?src=hash&amp;ref_src=twsrc%5Etfw">#FoodSafey</a> | <a
                                href="https://twitter.com/foscu23?ref_src=twsrc%5Etfw">@foscu23</a> | <a
                                href="https://t.co/TSeOuEwiKQ">https://t.co/TSeOuEwiKQ</a> <a
                                href="https://t.co/l99rhat6c8">pic.twitter.com/l99rhat6c8</a></p>&mdash; ESAU (@Esau_Matsiko) <a
                            href="https://twitter.com/Esau_Matsiko/status/1769301327522206199?ref_src=twsrc%5Etfw">March 17, 2024</a>
                    </blockquote>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
                    <blockquote class="twitter-tweet" data-media-max-width="560">
                        <p lang="en" dir="ltr">FOOD SAFETY ALERT!!<br><br>PESTICIDES ARE DESIGNED TO HARM!!<br>Watch and learn how
                            their lifecycle can be properly managed to protect human health and the environment!!<br><br>Full video 👉
                            <a href="https://t.co/JSRxhEZAqQ">https://t.co/JSRxhEZAqQ</a><a
                                href="https://twitter.com/hashtag/FoodSafey?src=hash&amp;ref_src=twsrc%5Etfw">#FoodSafey</a> | <a
                                href="https://twitter.com/foscu23?ref_src=twsrc%5Etfw">@foscu23</a> | <a
                                href="https://t.co/TSeOuEwiKQ">https://t.co/TSeOuEwiKQ</a> <a
                                href="https://t.co/0DhugUGeBJ">pic.twitter.com/0DhugUGeBJ</a>
                        </p>&mdash; ESAU (@Esau_Matsiko) <a
                            href="https://twitter.com/Esau_Matsiko/status/1769984057482363209?ref_src=twsrc%5Etfw">March 19, 2024</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- YouTube Video Section -->
<div class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-3xl font-bold text-center mb-8 text-primary">Featured Videos</h3>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video 1: Food Safety for Consumers -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe 
                            src="https://youtube.com/embed/ckqaq-Bd1Yo?si=dnQVptnFaTg4QyEN" 
                            title="Food Safety for Consumers" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen
                            class="w-full h-48"
                        ></iframe>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-gray-800 mb-2">Food Safety for Consumers</h4>
                        <p class="text-gray-600 text-sm">Essential food safety practices for consumers.</p>
                    </div>
                </div>
                
                <!-- Video 2: Agricultural Food Safety -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe 
                            src="https://www.youtube.com/embed/DWUmASq_9V0?si=_sQARHbkV_OXkMSN" 
                            title="Agricultural Food Safety" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen
                            class="w-full h-48"
                        ></iframe>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-gray-800 mb-2">Agricultural Food Safety</h4>
                        <p class="text-gray-600 text-sm">Food safety practices in agriculture.</p>
                    </div>
                </div>
                
                <!-- Video 3: Food Processing Safety -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe 
                            src="https://www.youtube.com/embed/QQ7G1vUicYc?si=8YHwZ9Tt1nu88W-G" 
                            title="Food Processing Safety" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen
                            class="w-full h-48"
                        ></iframe>
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-gray-800 mb-2">Food Processing Safety</h4>
                        <p class="text-gray-600 text-sm">Safe food processing and handling practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Events Section -->
<div class="container mx-auto px-4 py-12">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Our Events</h2>
        
        <!-- Events Accordion -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Upcoming Events -->
            <div class="border-b">
                <button 
                    class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 transition-colors"
                    onclick="toggleAccordion('upcoming')"
                >
                    <h3 class="text-xl font-semibold text-gray-800">Upcoming Events</h3>
                </button>
                <div id="upcoming" class="hidden px-6 py-4">
                    @if($upcomingEvents->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                @foreach($upcomingEvents as $event)
                                <tr class="border-b border-gray-200 last:border-b-0">
                                    <td class="py-3">
                                        <h6 class="font-semibold text-gray-800">{{ $event->eventname }}</h6>
                                        <p class="text-gray-600 text-sm">
                                            <span>{{ $event->formatted_event_date }} to {{ $event->formatted_end_date }}</span>
                                        </p>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    @else
                        <p class="text-gray-600">No upcoming events at this time.</p>
                    @endif
                </div>
            </div>

            <!-- Recent Events -->
            <div>
                <button 
                    class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 transition-colors"
                    onclick="toggleAccordion('recent')"
                >
                    <h3 class="text-xl font-semibold text-gray-800">Recent Events</h3>
                </button>
                <div id="recent" class="hidden px-6 py-4">
                    @if($recentEvents->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                @foreach($recentEvents as $event)
                                <tr class="border-b border-gray-200 last:border-b-0">
                                    <td class="py-3">
                                        <h6 class="font-semibold text-gray-800">{{ $event->eventname }}</h6>
                                        <p class="text-gray-600 text-sm">
                                            <span>{{ $event->formatted_event_date }}</span>
                                        </p>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    @else
                        <p class="text-gray-600">No recent events to display.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
@if($logos->count() > 0)
<div class="bg-gradient-to-r from-gray-50 to-gray-100 py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-10 text-gray-800">Our Partners</h2>
            
            <!-- Enhanced Carousel Container -->
            <div class="relative">
                <!-- Carousel Wrapper -->
                <div class="overflow-hidden rounded-2xl bg-white shadow-xl">
                    <div class="relative">
                        <!-- Gradient Overlays -->
                        <div class="absolute left-0 top-0 w-16 h-full bg-gradient-to-r from-white to-transparent z-10"></div>
                        <div class="absolute right-0 top-0 w-16 h-full bg-gradient-to-l from-white to-transparent z-10"></div>
                        
                        <!-- Carousel Track -->
                        <div id="partners-carousel" class="flex py-4 animate-scroll-smooth">
                            @foreach($logos->where('status', 'active')->sortBy('display_order') as $logo)
                            <div class="flex-shrink-0 mx-3">
                                <div class="bg-white rounded-lg p-3 shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 w-32 h-24 border border-gray-100">
                                    @if($logo->image)
                                        @if($logo->website_url)
                                            <a href="{{ $logo->website_url }}" target="_blank" class="block h-full">
                                                <img src="{{ asset($logo->image) }}" alt="{{ $logo->partner_name }}" class="w-full h-full object-contain filter hover:brightness-110 transition-all duration-300">
                                            </a>
                                        @else
                                            <img src="{{ asset($logo->image) }}" alt="{{ $logo->partner_name }}" class="w-full h-full object-contain filter hover:brightness-110 transition-all duration-300">
                                        @endif
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center rounded">
                                            <span class="text-gray-500 text-xs text-center font-medium">{{ $logo->partner_name }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            
                            <!-- Duplicate for seamless loop -->
                            @foreach($logos->where('status', 'active')->sortBy('display_order') as $logo)
                            <div class="flex-shrink-0 mx-3">
                                <div class="bg-white rounded-lg p-3 shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 w-32 h-24 border border-gray-100">
                                    @if($logo->image)
                                        @if($logo->website_url)
                                            <a href="{{ $logo->website_url }}" target="_blank" class="block h-full">
                                                <img src="{{ asset($logo->image) }}" alt="{{ $logo->partner_name }}" class="w-full h-full object-contain filter hover:brightness-110 transition-all duration-300">
                                            </a>
                                        @else
                                            <img src="{{ asset($logo->image) }}" alt="{{ $logo->partner_name }}" class="w-full h-full object-contain filter hover:brightness-110 transition-all duration-300">
                                        @endif
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center rounded">
                                            <span class="text-gray-500 text-xs text-center font-medium">{{ $logo->partner_name }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Buttons -->
                <button id="carousel-prev" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-50 rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 z-20 border border-gray-200">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="carousel-next" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-50 rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 z-20 border border-gray-200">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Partnership CTA -->
            <div class="text-center mt-8">
                <p class="text-gray-600 mb-4">Interested in partnering with us?</p>
                <a href="{{ route('our-work') }}" class="bg-primary hover:bg-orange-600 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-200 inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                    Learn More
                </a>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@push('styles')
<style>
    @keyframes scroll-smooth {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
    
    .animate-scroll-smooth {
        animation: scroll-smooth 40s linear infinite;
    }
    
    .animate-scroll-smooth:hover {
        animation-play-state: paused;
    }
    
    /* Smooth carousel transition */
    .carousel-transition {
        transition: transform 0.5s ease-in-out;
    }
</style>
@endpush

@push('scripts')
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script>
function toggleAccordion(id) {
    const element = document.getElementById(id);
    element.classList.toggle('hidden');
}

// Auto-show the first accordion item
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('upcoming').classList.remove('hidden');
    
    // Enhanced carousel functionality
    const carousel = document.getElementById('partners-carousel');
    const prevBtn = document.getElementById('carousel-prev');
    const nextBtn = document.getElementById('carousel-next');
    
    if (carousel && prevBtn && nextBtn) {
        let isAnimating = false;
        let currentPosition = 0;
        
        // Pause animation on hover
        carousel.addEventListener('mouseenter', () => {
            carousel.style.animationPlayState = 'paused';
        });
        
        carousel.addEventListener('mouseleave', () => {
            carousel.style.animationPlayState = 'running';
        });
        
        // Manual navigation
        function slideCarousel(direction) {
            if (isAnimating) return;
            
            isAnimating = true;
            carousel.style.animationPlayState = 'paused';
            carousel.classList.add('carousel-transition');
            
            const slideWidth = 152; // 32 (w-32) + 12 (mx-3) * 2
            
            if (direction === 'next') {
                currentPosition -= slideWidth;
            } else {
                currentPosition += slideWidth;
            }
            
            carousel.style.transform = `translateX(${currentPosition}px)`;
            
            setTimeout(() => {
                carousel.classList.remove('carousel-transition');
                carousel.style.animationPlayState = 'running';
                isAnimating = false;
            }, 500);
        }
        
        prevBtn.addEventListener('click', () => slideCarousel('prev'));
        nextBtn.addEventListener('click', () => slideCarousel('next'));
        
        // Reset position periodically to prevent drift
        setInterval(() => {
            if (!isAnimating) {
                currentPosition = 0;
                carousel.style.transform = 'translateX(0)';
            }
        }, 20000);
    }
});
</script>
@endpush
