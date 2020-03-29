<div class="flex items-center">
    <div class="flex-shrink-0">
        <h1 class="text-white">CLGFS Volunteering</h1>
    </div>
    <div class="hidden md:block">
        <div class="ml-10 flex items-baseline">
            <a href="/home" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->is('home') ? 'text-white bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700' }} focus:outline-none focus:text-white focus:bg-gray-700">Dashboard</a>
            <a href="/events" class="ml-4 px-3 py-2 rounded-md text-sm font-medium {{ request()->is('events') ? 'text-white bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700' }} focus:outline-none focus:text-white focus:bg-gray-700">Available Events</a>
        </div>
    </div>
</div>
