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
        </section>
    </main> 
    <script type="module" src="/views/assets/js/script.js"></script>
</body>
</html>