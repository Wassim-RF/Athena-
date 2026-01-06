<?php
    $uri = $_SERVER['REQUEST_URI'];
    require_once __DIR__ . '/../../views/layout/head.php';
?>
<body class="w-full min-h-screen flex flex-row">
    <?php
        require_once __DIR__ . '/../../views/layout/navBar.php';
    ?>
    <main class="w-[85%] min-h-screen bg-[#F5F8FF]">
        <?php
            require_once __DIR__ . '/../../views/layout/header.php';
        ?>
        <section class="p-[4%] flex flex-col gap-10">
            <div>
                <h2 class="text-2xl font-bold">Dashboard</h2>
                <p class="text-sm text-gray-400">Aperçu de vos projets et de l'activité de votre équipe...</p>
            </div>
            <div class="grid grid-cols-4 gap-6 w-full">
                <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm h-44"></div>
                <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm h-44"></div>
                <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm h-44"></div>
                <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm h-44"></div>
            </div>
            <div class="grid grid-cols-2 gap-6 w-full">
                <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm h-96"></div>
                <div class="bg-white rounded-2xl p-5 border border-gray-200 shadow-sm h-96"></div>
            </div>
            <div class="w-full h-96 bg-white border border-gray-200 rounded-2xl shadow-sm"></div>
            <div class="w-full h-96 bg-white border border-gray-200 rounded-2xl shadow-sm"></div>
        </section>
    </main>
</body>
</html>