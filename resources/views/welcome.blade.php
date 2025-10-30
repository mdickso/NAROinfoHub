<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NARO InfoHub</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind (Laravel Mix) -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Helpers -->
    <style>[x-cloak]{ display:none !important; }</style>



    <!-- Livewire -->
    @livewireStyles
</head>
<body class="antialiased text-gray-900">

<!-- =========================== NAVBAR =========================== -->
<header x-data="{ open:false }" class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Brand -->
            <div class="flex items-center space-x-3">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <svg class="w-8 h-8 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2l7 4v6c0 5-7 10-7 10S5 17 5 12V6l7-4z"/></svg>
                    <span class="text-xl font-semibold">NARO InfoHub</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <nav class="md:flex items-center space-x-8">
                <a href="{{ route('livestock.index') }}" class="text-sm font-medium {{ request()->routeIs('livestock.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">Livestock</a>
                <a href="{{ route('crops.index') }}" class="text-sm font-medium {{ request()->routeIs('crops.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">Crops</a>
                <a href="{{ route('forestry.index') }}" class="text-sm font-medium {{ request()->routeIs('forestry.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">Forestry</a>
                <a href="{{ route('fisheries.index') }}" class="text-sm font-medium {{ request()->routeIs('fisheries.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">Fisheries</a>
                <a href="{{ route('facilities.index') }}" class="text-sm font-medium {{ request()->routeIs('facilities.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">Facilities</a>
            </nav>

            <!-- Mobile toggle -->
            <div class="flex items-center md:hidden">
                <button @click="open = !open" type="button" class="p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none">
                    <svg x-show="!open" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg x-show="open" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <nav x-show="open" x-cloak class="md:hidden border-t">
        <div class="px-4 pt-2 pb-3 space-y-1">
            <a href="{{ route('livestock.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('livestock.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">Livestock</a>
            <a href="{{ route('crops.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('crops.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">Crops</a>
            <a href="{{ route('forestry.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('forestry.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">Forestry</a>
            <a href="{{ route('fisheries.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('fisheries.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">Fisheries</a>
            <a href="{{ route('facilities.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('facilities.*') ? 'text-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">Facilities</a>
        </div>
    </nav>
</header>

<main>
    <!-- =========================== HERO (EnterpriseSurveys-style) =========================== -->
    <section class="relative w-full">
        <img src="{{ asset('images/infohub_banner2.png') }}" alt="NARO InfoHub" class="block w-full h-56 sm:h-72 md:h-[420px] object-cover" loading="lazy">
        <div class="pointer-events-none absolute inset-0 bg-black/40"></div>
        
    </section>

    <!-- =========================== PROGRAM BLOCKS (Formal/Informal/Micro analogs) =========================== -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl font-bold">Formal Sector Surveys</h2>
            <p class="mt-4 text-gray-600">Nationally representative studies of registered enterprises and research facilities—methodology and indicators aligned for comparisons over time.</p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('facilities.index') }}" class="inline-flex items-center px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">Browse by Facility</a>
                <a href="{{ route('livestock.index') }}" class="inline-flex items-center px-4 py-2 rounded-lg bg-white border hover:bg-gray-50">Browse by Topic</a>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl font-bold">Informal Sector Studies</h2>
            <p class="mt-4 text-gray-600">Tailored approaches to characterize unregistered producers and value-chain actors not captured in formal listings.</p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('crops.index') }}" class="inline-flex items-center px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">Explore Indicators</a>
                <a href="{{ url('#surveys') }}" class="inline-flex items-center px-4 py-2 rounded-lg bg-white border hover:bg-gray-50">Browse Surveys</a>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl font-bold">Micro Studies & Other Surveys</h2>
            <p class="mt-4 text-gray-600">Deep dives into micro-enterprises (1–4 workers) and specialized topics like innovation, climate, and animal health.</p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ url('#indicators') }}" class="inline-flex items-center px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">Indicators</a>
                <a href="{{ url('#surveys') }}" class="inline-flex items-center px-4 py-2 rounded-lg bg-white border hover:bg-gray-50">Browse Surveys</a>
            </div>
        </div>
    </section>

    <!-- =========================== HIGHLIGHTS (cards) =========================== -->
    <section id="news" class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl font-bold">Highlights</h2>
            <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <article class="bg-white rounded-2xl shadow hover:shadow-md transition overflow-hidden">
                    <img src="{{ asset('images/highlight-1.jpg') }}" alt="Highlight 1" class="w-full h-40 object-cover" onerror="this.style.display='none'">
                    <div class="p-5">
                        <p class="text-xs uppercase text-gray-500">Data publication update</p>
                        <h3 class="mt-1 text-lg font-semibold"><a href="#" class="hover:underline">New data available for 10+ institutes</a></h3>
                        <a href="#" class="mt-3 inline-flex items-center text-indigo-600 hover:text-indigo-700">Read more →</a>
                    </div>
                </article>
                <!-- Card 2 -->
                <article class="bg-white rounded-2xl shadow hover:shadow-md transition overflow-hidden">
                    <img src="{{ asset('images/highlight-2.jpg') }}" alt="Highlight 2" class="w-full h-40 object-cover" onerror="this.style.display='none'">
                    <div class="p-5">
                        <p class="text-xs uppercase text-gray-500">Data collection update</p>
                        <h3 class="mt-1 text-lg font-semibold"><a href="#" class="hover:underline">New round launched across regions</a></h3>
                        <a href="#" class="mt-3 inline-flex items-center text-indigo-600 hover:text-indigo-700">Read more →</a>
                    </div>
                </article>
                <!-- Card 3 -->
                <article class="bg-white rounded-2xl shadow hover:shadow-md transition overflow-hidden">
                    <img src="{{ asset('images/highlight-3.jpg') }}" alt="Highlight 3" class="w-full h-40 object-cover" onerror="this.style.display='none'">
                    <div class="p-5">
                        <p class="text-xs uppercase text-gray-500">Symposium</p>
                        <h3 class="mt-1 text-lg font-semibold"><a href="#" class="hover:underline">Watch: Research & Productivity Forum</a></h3>
                        <a href="#" class="mt-3 inline-flex items-center text-indigo-600 hover:text-indigo-700">Watch video →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- =========================== LATEST RESEARCH (list) =========================== -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-bold">Latest Research</h2>
                <a href="#" class="text-indigo-600 hover:text-indigo-700">View more</a>
            </div>
            <ul class="mt-6 space-y-6">
                <li class="border-b pb-4">
                    <span class="text-xs uppercase text-gray-500">Policy Brief • Feb 19, 2025</span>
                    <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Technology adoption and standards in agro-processing</a>
                </li>
                <li class="border-b pb-4">
                    <span class="text-xs uppercase text-gray-500">Working Paper • Jan 13, 2025</span>
                    <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Returns to micro‑entrepreneurship in rural markets</a>
                </li>
                <li class="border-b pb-4">
                    <span class="text-xs uppercase text-gray-500">Working Paper • Jan 08, 2025</span>
                    <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Informality and certification in agribusiness</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- =========================== BLOGS & BRIEFS =========================== -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-bold">Blogs & Briefs</h2>
                <a href="#" class="text-indigo-600 hover:text-indigo-700">View more</a>
            </div>
            <ul class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <li class="bg-white rounded-xl p-5 shadow">
                    <span class="text-xs uppercase text-gray-500">Mar 04, 2025</span>
                    <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Field insights from tea value‑chains</a>
                </li>
                <li class="bg-white rounded-xl p-5 shadow">
                    <span class="text-xs uppercase text-gray-500">Nov 25, 2024</span>
                    <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Financing constraints and productivity</a>
                </li>
                <li class="bg-white rounded-xl p-5 shadow">
                    <span class="text-xs uppercase text-gray-500">Oct 23, 2024</span>
                    <a href="#" class="mt-1 block text-lg font-semibold hover:underline">Revealing tax evasion in agrifood sectors</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- =========================== VIDEOS =========================== -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl font-bold">Videos</h2>
            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="aspect-video bg-gray-100 rounded-xl overflow-hidden">
                    <!-- Replace with your YouTube/Stream embed -->
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/MQ1P8J7p6n8" title="Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="aspect-video bg-gray-100 rounded-xl overflow-hidden">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== NEWSLETTER =========================== -->
    <section id="datasets" class="py-12 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl font-bold">Subscribe to our newsletter</h2>
            <form class="mt-6 grid gap-3 sm:grid-cols-3" action="#" method="post" onsubmit="return false;">
                <input type="email" name="email" placeholder="Enter email to subscribe" class="w-full rounded-lg border-0 px-4 py-3 text-gray-900" required>
                <input type="text" name="first_name" placeholder="First Name" class="w-full rounded-lg border-0 px-4 py-3 text-gray-900">
                <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-indigo-600 px-6 py-3 font-semibold hover:bg-indigo-700">Subscribe</button>
            </form>
        </div>
    </section>
</main>

<!-- =========================== FOOTER =========================== -->
<footer class="bg-gray-100 border-t">
    <div class="max-w-7xl mx-auto px-6 py-10 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
        <div>
            <h3 class="font-semibold">About</h3>
            <ul class="mt-3 space-y-2 text-gray-600 text-sm">
                <li><a href="#" class="hover:text-indigo-600">Team</a></li>
                <li><a href="#" class="hover:text-indigo-600">FAQ</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold">Data</h3>
            <ul class="mt-3 space-y-2 text-gray-600 text-sm">
                <li><a href="{{ route('livestock.index') }}" class="hover:text-indigo-600">Livestock</a></li>
                <li><a href="{{ route('crops.index') }}" class="hover:text-indigo-600">Crops</a></li>
                <li><a href="{{ route('forestry.index') }}" class="hover:text-indigo-600">Forestry</a></li>
                <li><a href="{{ route('fisheries.index') }}" class="hover:text-indigo-600">Fisheries</a></li>
                <li><a href="{{ route('facilities.index') }}" class="hover:text-indigo-600">Facilities</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold">Resources</h3>
            <ul class="mt-3 space-y-2 text-gray-600 text-sm">
                <li><a href="#" class="hover:text-indigo-600">Methodology</a></li>
                <li><a href="#" class="hover:text-indigo-600">Project Schedule</a></li>
                <li><a href="#" class="hover:text-indigo-600">Publications</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold">Legal</h3>
            <ul class="mt-3 space-y-2 text-gray-600 text-sm">
                <li><a href="#" class="hover:text-indigo-600">Privacy</a></li>
                <li><a href="#" class="hover:text-indigo-600">Accessibility</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t py-6 text-center text-sm text-gray-500">© {{ date('Y') }} NARO. All rights reserved.</div>
</footer>

@livewireScripts
</body>
</html>
