<?php
    require_once __DIR__ . '/../../../views/layout/head.php';
?>
<body class="w-full min-h-screen flex flex-row">
    <?php
        require_once __DIR__ . '/../../../views/layout/navBar.php';
    ?>
    <main class="w-[85%] min-h-screen bg-[#F5F8FF]">
        <?php
            require_once __DIR__ . '/../../../views/layout/header.php';
        ?>
        <section class="p-[4%] flex flex-col gap-10">
            <div class="flex flex-col gap-5">
                <a href="/projects" class="flex items-center gap-2 text-gray-600 text-lg hover:text-blue-600">
                    <span class="text-2xl">←</span>
                    <span class="text-xl font-medium">Back</span>
                </a>
                <div>
                    <h2 class="text-2xl font-bold">Creer un projet</h2>
                    <p class="text-sm text-gray-400">Ajouter des noveaux projets...</p>
                </div>
            </div>
            <form method="POST" action="/projects" class="w-full p-[2%] bg-white rounded-4xl shadow-sm flex flex-col gap-10">
                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-2">
                        <label for="">Titre du project <span class="text-red-500">*</span></label>
                        <div class="w-full bg-gray-100 rounded-2xl p-[2%] flex items-center">
                            <input type="text" name="input_add_project--Title" class="w-full outline-0" minlength="8" maxlength="100" id="project_Add--title--input" placeholder="E-Commerce Platform..." required>
                            <p class="text-xs text-gray-400 text-end" id="letter_number--project--Title--input">0/100</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="">Statu du projet <span class="text-red-500">*</span></label>
                        <div class="w-full bg-gray-100 rounded-2xl p-[2%] flex items-center">
                            <select id="" class="w-full outline-0" required name="input_add_project--Status">
                                <option value="active" selected>Active</option>
                                <option value="disabled">Disabled</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="">Description du projet <span class="text-red-500">*</span></label>
                    <div class="w-full bg-gray-100 rounded-2xl p-[2%] flex flex-col h-32 gap-2">
                        <textarea name="input_add_project--Description" class="w-full outline-0 h-full" id="project_Add--Description--input" minlength="0" maxlength="1000" placeholder="Building a modern e-commerce platform with React and Node.js..."></textarea>
                        <p class="text-xs text-gray-400 text-end" id="letter_number--project--Description--input">0/1000</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-2">
                        <label for="">Date de deput <span class="text-red-500">*</span></label>
                        <div class="w-full bg-gray-100 rounded-2xl p-[2%] flex items-center">
                            <input type="date" name="input_add_project--StartDate" id="" class="w-full outline-0" required>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="">Date de terminer <span class="text-red-500">*</span></label>
                        <div class="w-full bg-gray-100 rounded-2xl p-[2%] flex items-center">
                            <input type="date" name="input_add_project--EndDate" id="" class="w-full outline-0" required>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-4 justify-end">
                    <button type="submit" class="cursor-pointer px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200 focus:ring-4 focus:ring-blue-300">
                        Ajouter
                    </button>
                    <a href="/projects" type="button" class="cursor-pointer px-5 py-2.5 bg-white border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-50 transition-colors duration-200 focus:ring-4 focus:ring-gray-100">
                        Cancel
                    </a>
                </div>
            </form>
        </section>
    </main> 
    <script type="module" src="/views/assets/js/script.js"></script>
</body>
</html>