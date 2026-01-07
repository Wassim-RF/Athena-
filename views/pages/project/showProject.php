<?php
    require_once __DIR__ . '/../../../views/layout/head.php';
    $statuses = [
        'active' => 'text-emerald-600 bg-emerald-50',
        'disabled' => 'text-gray-500 bg-gray-100',
        'completed' => 'text-blue-600 bg-blue-50',
    ];
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
            </div>
            <div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        <?= $project['title'] ?>
                    </h2>
                    <span class="mt-2.5 px-4 py-1 text-sm font-semibold rounded-full <?= $statuses[$project['status']] ?? 'bg-gray-100 text-gray-600' ?>">
                        <?= ucfirst($project['status']) ?>
                    </span>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-6">
                <div class="w-full col-span-2 bg-white h-72 rounded-2xl p-5 border border-gray-200 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">
                        Description
                    </h3>
                    <p class="text-gray-500 text-base leading-relaxed">
                        <?= $project['description'] ?>
                    </p>
                </div>
                <div class="w-full bg-white h-72 rounded-2xl p-5 border border-gray-200 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">
                        Tasks
                    </h3>
                </div>
            </div>
            <div class="w-full bg-white p-5 border border-gray-200 shadow-sm rounded-2xl">
                <div class="flex items-center justify-between p-4 bg-white border-b border-gray-100">
                    <div class="flex items-center gap-2">
                        <h2 class="text-xl font-semibold tracking-tight text-gray-900">Sprints</h2>
                    </div>
                    <a href="/project/addSprint?id=<?= $id ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all bg-indigo-600 rounded-lg hover:bg-indigo-700 shadow-sm hover:shadow-md active:scale-95">
                        + Ajouter un sprint
                    </a>
                </div>
                <?php foreach ($sprints as $sprint) : ?>
                    <div class="bg-white rounded-xl p-5 border border-gray-200 hover:border-blue-500 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900">
                                    Sprint 1: <?= $sprint['name'] ?>
                                </h2>
                                <div class="flex items-center gap-2 mt-1 text-sm text-gray-500">
                                    <span class="bg-green-100 text-green-600 px-2 py-0.5 rounded-full text-xs font-medium">
                                        active
                                    </span>
                                    <span class="flex items-center gap-1">
                                        📅 <?= $sprint['start_date'] ?> - <?= $sprint['end_date'] ?>
                                    </span>
                                </div>
                            </div>
                            <button class="text-sm font-medium text-gray-700 hover:text-blue-600">
                                View Sprint
                            </button>
                        </div>
                        <div class="mt-5">
                            <div class="flex justify-between text-sm text-gray-600 mb-2">
                                <span>Progress</span>
                                <span>1 / 4 tasks completed</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full w-1/4"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main> 
    <script type="module" src="/views/assets/js/script.js"></script>
</body>
</html>