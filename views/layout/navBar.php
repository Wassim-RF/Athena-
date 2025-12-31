<nav class="w-[15%] h-screen bg-white flex flex-col justify-between border-r border-gray-100 shadow-[4px_0_24px_rgba(0,0,0,0.05)] sticky top-0">
    <header class="h-20 w-full flex items-center justify-start bg-white border-b border-gray-200 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07)]">
        <div class="flex items-center gap-0.5">
            <div>
                <img src="/views/assets/image/logo.png" alt="athena" class="w-24 h-24">
            </div>
            <div class="flex flex-col">
                <p class="text-2xl font-extrabold tracking-[0.15em] text-slate-800 font-sans leading-none">
                    ATHENA
                </p>
                <span class="text-[9px] uppercase tracking-[0.4em] text-gray-400 mt-1 font-medium">
                    Official Platform
                </span>
            </div>
        </div>
    </header>
    <main class="h-[75%] w-full"></main>
    <footer class="h-[10%] w-full flex items-center px-8 bg-white border-t border-gray-100">
        <a href="/logout" class="w-full flex items-center gap-3 group px-4 py-2 rounded-lg hover:bg-red-50 transition-all duration-300 cursor-pointer">
            <div class="text-gray-400 group-hover:text-red-500 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </div>
            <span class="text-sm font-semibold tracking-wide text-gray-500 group-hover:text-red-600 transition-colors">
                LOGOUT
            </span>
        </a>
    </footer>
</nav>