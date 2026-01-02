<?php
    require_once __DIR__ . '/../../views/layout/head.php'
?>
<body class="w-full min-h-screen flex flex-row">
    <?php
        require_once __DIR__ . '/../../views/layout/navBar.php';
    ?>
    <main class="w-[85%] min-h-screen bg-[#F5F8FF]">
        <?php var_dump($_SESSION['user']);?>
    </main>
</body>