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
    <main class="h-[75%] w-full flex flex-col gap-5">
        <div class="<?= $_SESSION['user']['role'] === 'admin' ? 'pb-10 border-b border-b-[#c0c0c0]' : '' ?> flex flex-col gap-3 items-center font-medium px-8">
            <a href="/<?= $_SESSION['user']['role'] ?>/dashboard" class="w-full flex items-center gap-1.5 p-1.5 rounded-lg duration-300 cursor-pointer text-sm font-semibold <?= strcmp($uri, "/{$_SESSION['user']['role']}/dashboard") === 0 ? 'bg-blue-100 text-blue-400 hover:bg-blue-200' : 'hover:bg-[rgba(192,192,192,0.25)]' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M9.333 14a.667.667 0 0 1-.666-.667V8c0-.368.298-.667.666-.667h4c.368 0 .667.299.667.667v5.333a.667.667 0 0 1-.667.667zM2.667 8.667A.667.667 0 0 1 2 8V2.667C2 2.298 2.298 2 2.667 2h4c.368 0 .666.298.666.667V8a.667.667 0 0 1-.666.667zM6 7.333v-4H3.333v4zM2.667 14A.667.667 0 0 1 2 13.333v-2.666c0-.368.298-.667.667-.667h4c.368 0 .666.299.666.667v2.666a.667.667 0 0 1-.666.667zm.666-1.333H6v-1.334H3.333zm6.667 0h2.667v-4H10zm-1.333-10c0-.369.298-.667.666-.667h4c.368 0 .667.298.667.667v2.666a.667.667 0 0 1-.667.667h-4a.667.667 0 0 1-.666-.667zM10 3.333v1.334h2.667V3.333z"/></svg>
                Dashboard
            </a>
            <a href="/projects" class="w-full flex items-center gap-1.5 p-1.5 rounded-lg duration-300 cursor-pointer text-sm font-semibold <?= strcmp($uri, "/projects") === 0 ? 'bg-blue-100 text-blue-400 hover:bg-blue-200' : 'hover:bg-[rgba(192,192,192,0.25)]' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="currentColor" fill-rule="evenodd" d="m256 34.347l192 110.851v132.135h-42.667v-85.331l-128 73.9v199.533L256 477.752L64 366.901V145.198zm149.333 264.32v64h64v42.667l-64-.001v64h-42.666l-.001-64h-64v-42.666h64v-64zM106.666 192.001v150.266l128 73.9V265.902zM256 83.614l-125.867 72.67L256 228.952l125.867-72.67z"/></svg>                
                Projects
            </a>
            <a href="/settings" class="w-full flex items-center gap-1.5 p-1.5 rounded-lg duration-300 cursor-pointer text-sm font-semibold <?= strcmp($uri, "/settings") === 0 ? 'bg-blue-100 text-blue-400 hover:bg-blue-200' : 'hover:bg-[rgba(192,192,192,0.25)]' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#000000"><g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066-2.573c-.94-1.543.826-3.31 2.37-2.37c1 .608 2.296.07 2.572-1.065z"/><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0-6 0"/></g></svg>
                settings
            </a>
        </div>
        <div class="<?= $_SESSION['user']['role'] === 'admin' ? 'flex' : 'hidden'?> flex-col gap-3 items-center font-medium px-8">
            <a href="/<?= $_SESSION['user']['role'] ?>/adminSpace" class="whitespace-nowrap w-full flex items-center gap-1.5 p-1.5 rounded-lg duration-300 cursor-pointer text-sm font-semibold <?= strcmp($uri, "/{$_SESSION['user']['role']}/adminSpace") === 0 ? 'bg-blue-100 text-blue-400 hover:bg-blue-200' : 'hover:bg-[rgba(192,192,192,0.25)]' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20c0-1.657-2.239-3-5-3s-5 1.343-5 3m14-3c0-1.23-1.234-2.287-3-2.75M3 17c0-1.23 1.234-2.287 3-2.75m12-4.014a3 3 0 1 0-4-4.472m-8 4.472a3 3 0 0 1 4-4.472M12 14a3 3 0 1 1 0-6a3 3 0 0 1 0 6Z"/></svg>
                Espace d'admine
            </a>
        </div>
    </main>
    <footer class="h-[10%] w-full flex items-center px-8 bg-white border-t border-gray-100">
        <a href="/logout" class="w-full flex items-center gap-3 group px-4 py-2 rounded-lg hover:bg-red-50 duration-300 cursor-pointer text-sm font-semibold text-gray-500 hover:text-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </div>
            Logout
        </a>
    </footer>
</nav>