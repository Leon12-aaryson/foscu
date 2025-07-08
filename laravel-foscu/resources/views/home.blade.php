@extends('layouts.main')

@section('content')
<!-- Hero Video Section -->
<div class="main relative" style="background-image: url('{{ asset('images/banner.png') }}'); background-size: cover; background-position: center;">
    <video autoplay muted loop class="w-full h-screen object-cover opacity-80">
        <source src="{{ asset('video/foscu_video.mp4') }}" type="video/mp4">
        <!-- Fallback image if video doesn't work -->
        <img src="{{ asset('images/foscu1.jpg') }}" alt="FoSCU Background" class="w-full h-screen object-cover">
    </video>
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="text-center text-white px-4 max-w-4xl">
            <h1 class="text-5xl font-bold mb-6 drop-shadow-lg">Food Safety Coalition Uganda</h1>
            <p class="text-xl mb-8 drop-shadow-md">Promoting food safety awareness and policies across Uganda</p>
            <div class="space-x-4">
                <a href="{{ route('who-we-are') }}" class="bg-primary hover:bg-orange-600 text-white px-8 py-3 rounded-lg text-lg transition-colors inline-block shadow-lg">
                    Learn More About Us
                </a>
                <a href="{{ route('our-work') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary px-8 py-3 rounded-lg text-lg transition-colors inline-block">
                    Our Work
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Events Section -->
<div class="container mx-auto px-4 py-16">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Events</h2>
        
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
<div class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Partners</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6">
                @foreach($logos->where('status', 'active')->sortBy('display_order') as $logo)
                <div class="bg-white rounded-lg p-4 shadow-md hover:shadow-lg transition-shadow">
                    @if($logo->image)
                        @if($logo->website_url)
                            <a href="{{ $logo->website_url }}" target="_blank" class="block">
                                <img src="{{ asset($logo->image) }}" alt="{{ $logo->partner_name }}" class="w-full h-20 object-contain mx-auto">
                            </a>
                        @else
                            <img src="{{ asset($logo->image) }}" alt="{{ $logo->partner_name }}" class="w-full h-20 object-contain mx-auto">
                        @endif
                    @else
                        <div class="w-full h-20 bg-gray-200 flex items-center justify-center rounded">
                            <span class="text-gray-500 text-sm">{{ $logo->partner_name }}</span>
                        </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif

<!-- Call to Action Section -->
<div class="bg-primary py-16">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-white mb-4">Join Us in Promoting Food Safety</h2>
            <p class="text-xl text-white mb-8">
                Together, we can create a safer food environment for all Ugandans. 
                Learn about our initiatives and how you can get involved.
            </p>
            <div class="space-x-4">
                <a href="{{ route('our-work') }}" class="bg-white text-primary px-8 py-3 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-colors inline-block">
                    Our Work
                </a>
                <a href="{{ route('information-resources') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-white hover:text-primary transition-colors inline-block">
                    Resources
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function toggleAccordion(id) {
    const element = document.getElementById(id);
    element.classList.toggle('hidden');
}

// Auto-show the first accordion item
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('upcoming').classList.remove('hidden');
});
</script>
@endpush
