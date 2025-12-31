<?php
    require_once __DIR__ . '/../../views/layout/head.php'
?>
<body class="w-full h-screen bg-[#F5F8FF] flex justify-center items-center flex-row p-[10%] pb-0 pt-0 overflow-hidden">
    <div class="bg-white w-2/5 h-[90%] rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] p-[2%] flex flex-col gap-5">
        <h1 class="text-2xl font-semibold">Connection</h1>
        <form method="POST" class="flex flex-col gap-7">
            <div class="flex flex-col gap-4">
                <label for="">Adresse email <span class="text-red-500">*</span></label>
                <div class="w-full flex flex-col">
                    <input type="email" class="outline-none w-full border border-gray-300 p-[3%] rounded-xl transition-all duration-300 focus:border-[#6366F1] focus:ring-4 focus:ring-blue-100" required name="email_login_upload--input">
                    
                    <div class="flex items-center gap-1 mt-2 ml-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <p class="text-xs text-gray-500 italic">
                            Format: <span class="font-semibold text-gray-600">exemple@mail.com</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <label for="">Mot de passe <span class="text-red-500">*</span></label>
                <div class="w-full flex flex-col">
                    <input type="password" class="outline-none w-full border border-gray-300 p-[3%] rounded-xl transition-all duration-300 focus:border-[#6366F1] focus:ring-4 focus:ring-blue-100" required name="password_login_upload--input">
                    <div class="flex items-center gap-1 mt-2 ml-1">
                        <a href="#" class="text-xs text-gray-500 hover:text-blue-600 hover:underline transition-all duration-200 cursor-pointer">
                            Mot de passe oublié ?
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <button type="submit" class="w-full cursor-pointer bg-[#6366F1] text-white text-xl font-semibold py-3 px-6 rounded-xl shadow-[0_4px_14px_0_rgba(99,102,241,0.5)] hover:bg-[#4F46E5] hover:shadow-[0_6px_20px_rgba(99,102,241,0.35)] active:scale-[0.98] transition-all duration-200 ease-in-out">
                    Se connecter
                </button>
            </div>
        </form>
        <div class="w-full p-5 pb-1 bg-gray-50 rounded-2xl border border-gray-100">
            <h3 class="text-sm font-bold text-gray-800 mb-2">
                Vous n'avez pas encore vos identifiants ?
            </h3>
            <p class="text-xs text-gray-600 mb-3 leading-relaxed">
                Demandez votre invitation à :
            </p>
            <ul class="space-y-2">
                <li class="flex items-start gap-2 text-xs text-gray-500">
                    <span class="text-blue-500">•</span>
                    <span>Votre <span class="font-semibold text-gray-700">chef</span> si vous êtes member</span>
                </li>
                <li class="flex items-start gap-2 text-xs text-gray-500">
                    <span class="text-blue-500">•</span>
                    <span>Votre <span class="font-semibold text-gray-700">admin</span> si vous êtes chef</span>
                </li>
            </ul>
            <div class="mt-4 pt-3 border-t border-gray-200">
                <a href="mailto:lmhaidrat@simplon.co" class="group flex items-center gap-2 text-xs">
                    <span class="text-gray-500 italic">Pour un accès admin :</span>
                    <span class="text-blue-600 font-semibold group-hover:underline">admin@athena.ma</span>
                </a>
            </div>
        </div>
    </div>
</body>