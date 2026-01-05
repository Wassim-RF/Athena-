<header class="w-full h-12 bg-white border-b border-gray-100 shadow-[4px_0_24px_rgba(0,0,0,0.05)] sticky top-0 right-0 flex items-center justify-between p-[1%] pt-[2%] pb-[2%]">
    <div class="group flex items-center text-gray-900 bg-gray-100 rounded-lg border-none p-[0.4%] gap-5 w-[30%] pl-[1%]">
        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
        <input type="search" class="outline-0 w-full" placeholder="Search projects, tasks, or people...">
    </div>

    <div class="flex items-center gap-6 ml-4">
        
        <button class="relative p-1 text-gray-400 hover:text-gray-600 transition-colors cursor-pointer">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
            </svg>
            <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-white transform translate-x-1/4 -translate-y-1/4 bg-indigo-500 rounded-full border-2 border-white">
                2
            </span>
        </button>

        <div class="flex items-center gap-3 cursor-pointer border-l border-gray-200 pl-5 p-1 hover:bg-gray-100 hover:border-0">
            <div class="text-right hidden sm:block">
                <div class="text-sm font-semibold text-gray-900"><?= $_SESSION['user']['full_name'] ?></div>
                <div class="text-xs text-gray-500"><?= $_SESSION['user']['role'] ?></div>
            </div>
            <div class="flex items-center justify-center w-7 h-7 rounded-full bg-linear-to-tr from-purple-600 to-indigo-600 text-white font-medium text-lg ring-2 ring-white shadow-sm">
                <?= $_SESSION['user']['full_name'][0] ?>
            </div>
        </div>
    </div>
</header>