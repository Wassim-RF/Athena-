<?php
    $uri = $_SERVER['REQUEST_URI'];
    $projects = $projectService->showAllProject();
    $statuses = [
        'active' => 'text-emerald-600 bg-emerald-50',
        'disabled' => 'text-gray-500 bg-gray-100',
        'completed' => 'text-blue-600 bg-blue-50',
    ];
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
            <div class=" flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-bold">Projets</h2>
                    <p class="text-sm text-gray-400">Gérez et suivez tous vos projets...</p>
                </div>
                <a href="/projects/ajouteProject" class="<?= $_SESSION['user']['role'] === 'member' ? 'hidden' : 'block'  ?> bg-[rgba(79,57,246,1)] text-white rounded-xl p-[1%] text-xl font-medium cursor-pointer hover:bg-[#3a22f5]">+ Ajoute Projet</a>
            </div>
            <form method="GET" class="flex items-center gap-4">
                <span class="text-gray-500 text-sm font-medium">
                    Filter:
                </span>
                <div class="flex items-center gap-2">
                    <label class="cursor-pointer">
                        <input type="radio" name="status" value="all" class="hidden peer" checked>
                        <span class="px-4 py-1.5 text-sm font-medium rounded-lg bg-white text-gray-700 border border-gray-200 peer-checked:bg-indigo-600 peer-checked:text-white">
                            All
                        </span>
                    </label>

                    <label class="cursor-pointer">
                        <input type="radio" name="status" value="active" class="hidden peer">
                        <span class="px-4 py-1.5 text-sm font-medium rounded-lg bg-white text-gray-700 border border-gray-200 peer-checked:bg-indigo-600 peer-checked:text-white" >
                            Active
                        </span>
                    </label>

                    <label class="cursor-pointer">
                        <input type="radio" name="status" value="on_hold" class="hidden peer">
                        <span class="px-4 py-1.5 text-sm font-medium rounded-lg bg-white text-gray-700 border border-gray-200 peer-checked:bg-indigo-600 peer-checked:text-white">
                            Disabled
                        </span>
                    </label>

                    <label class="cursor-pointer">
                        <input type="radio" name="status" value="completed" class="hidden peer">
                        <span class="px-4 py-1.5 text-sm font-medium rounded-lg bg-white text-gray-700 border border-gray-200 peer-checked:bg-indigo-600 peer-checked:text-white">
                            Completed
                        </span>
                    </label>
                </div>
            </form>
            <div class="grid grid-cols-3 gap-6">
                <?php foreach($projects as $project) : ?>
                <div class="max-w-sm p-6 bg-white border border-gray-100 rounded-3xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-xl font-bold text-gray-900"><?= $project['title'] ?></h3>
                        <button class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                        </svg>
                        </button>
                    </div>

                    <span class="inline-block px-3 py-1 mb-6 text-sm font-medium  rounded-full <?= $statuses[$project['status']] ?? '' ?>">
                        <?= ucfirst($project['status']) ?>
                    </span>

                    <p class="text-gray-500 mb-6 leading-relaxed">
                        <?= $project['description'] ?>
                    </p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-400 gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-sm font-medium">2 sprints</span>
                        </div>
                    </div>

                    <a href="/project/<?= $project['id'] ?>" class="w-full py-3 flex items-center justify-center gap-2 border border-gray-200 rounded-xl text-gray-900 font-semibold bg-gray-50/50 group-hover:bg-indigo-600 group-hover:text-white group-hover:border-indigo-600 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        View Details
                    </a>

                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main> 
</body>