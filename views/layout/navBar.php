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
    <main class="h-[75%] w-full p-3">
        <div class="<?= $_SESSION['user']['role'] === 'admin' ? 'pb-10 border-b border-b-[#c0c0c0]' : '' ?> flex flex-col gap-3 items-center text-[18px] font-medium">
            <a href="/<?= $_SESSION['user']['role'] ?>/dashboard" class="w-[85%] p-[2.5%] rounded-xl text-start flex items-center gap-2 <?= strcmp($uri, "/{$_SESSION['user']['role']}/dashboard") === 0 ? 'bg-blue-100 text-blue-400 hover:bg-blue-200' : 'hover:bg-[rgba(79,70,229,0.5)]' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M9.333 14a.667.667 0 0 1-.666-.667V8c0-.368.298-.667.666-.667h4c.368 0 .667.299.667.667v5.333a.667.667 0 0 1-.667.667zM2.667 8.667A.667.667 0 0 1 2 8V2.667C2 2.298 2.298 2 2.667 2h4c.368 0 .666.298.666.667V8a.667.667 0 0 1-.666.667zM6 7.333v-4H3.333v4zM2.667 14A.667.667 0 0 1 2 13.333v-2.666c0-.368.298-.667.667-.667h4c.368 0 .666.299.666.667v2.666a.667.667 0 0 1-.666.667zm.666-1.333H6v-1.334H3.333zm6.667 0h2.667v-4H10zm-1.333-10c0-.369.298-.667.666-.667h4c.368 0 .667.298.667.667v2.666a.667.667 0 0 1-.667.667h-4a.667.667 0 0 1-.666-.667zM10 3.333v1.334h2.667V3.333z"/></svg>
                Dashboard
            </a>
            <a href="/<?= $_SESSION['user']['role'] ?>/projects" class="w-[85%] p-[2.5%] rounded-xl text-start flex items-center gap-2 <?= strcmp($uri, "/{$_SESSION['user']['role']}/projects") === 0 ? 'bg-blue-100 text-blue-500 hover:bg-blue-200' : 'hover:bg-gray-100' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="currentColor" fill-rule="evenodd" d="m256 34.347l192 110.851v132.135h-42.667v-85.331l-128 73.9v199.533L256 477.752L64 366.901V145.198zm149.333 264.32v64h64v42.667l-64-.001v64h-42.666l-.001-64h-64v-42.666h64v-64zM106.666 192.001v150.266l128 73.9V265.902zM256 83.614l-125.867 72.67L256 228.952l125.867-72.67z"/></svg>                
                Projects
            </a>
            <a href="/<?= $_SESSION['user']['role'] ?>/tasks" class="w-[85%] p-[2.5%] rounded-xl text-start flex items-center gap-2 <?= strcmp($uri, "/{$_SESSION['user']['role']}/tasks") === 0 ? 'bg-blue-100 text-blue-500 hover:bg-blue-200' : 'hover:bg-gray-100' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="currentColor" fill-rule="evenodd" d="m256 34.347l192 110.851v132.135h-42.667v-85.331l-128 73.9v199.533L256 477.752L64 366.901V145.198zm149.333 264.32v64h64v42.667l-64-.001v64h-42.666l-.001-64h-64v-42.666h64v-64zM106.666 192.001v150.266l128 73.9V265.902zM256 83.614l-125.867 72.67L256 228.952l125.867-72.67z"/></svg>                
                Tasks
            </a>
        </div>
        <div class="<?= $_SESSION['user']['role'] === 'admin' ? 'flex' : 'hidden'?> flex-col gap-3 items-center text-[18px] font-medium"></div>
    </main>
    <footer class="h-[10%] w-full flex items-center px-8 bg-white border-t border-gray-100">
        <a href="/logout" class="w-full flex items-center gap-3 group px-4 py-2 rounded-lg hover:bg-red-50 transition-all duration-300 cursor-pointer">
            <div class="text-gray-400 group-hover:text-red-500 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </div>
            <span class="text-sm font-semibold tracking-wide text-gray-500 group-hover:text-red-600 transition-colors">
                Logout
            </span>
        </a>
    </footer>
</nav>