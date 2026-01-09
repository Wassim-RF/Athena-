<?php
    $sprintStatuses = [
        'upcoming'  => 'bg-yellow-100 text-yellow-700',
        'active'    => 'bg-green-100 text-green-700',
        'completed' => 'bg-blue-100 text-blue-700',
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
            <div class="flex flex-col gap-5">
                <a href="/projects/show?id=" class="flex items-center gap-2 text-gray-600 text-lg hover:text-blue-600">
                    <span class="text-2xl">←</span>
                    <span class="text-xl font-medium">Back</span>
                </a>
            </div>
            <div class="w-full">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                    <div class="flex flex-col gap-5">
                        <h1 class="text-3xl font-bold mb-1">Sprint <?= $taskNumber ?>: <?= $sprint['name'] ?></h1>
                        
                        <div class="flex items-center gap-3 text-sm">
                            <span class="inline-block px-3 py-1 text-sm font-medium rounded-full <?= $sprintStatuses[$sprint['status']] ?? '' ?>">
                                <?= ucfirst($sprint['status']) ?>
                            </span>
                            <span class="text-gray-500 flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <?= $sprint['start_date'] . " - " . $sprint['end_date'] ?>
                            </span>
                        </div>
                    </div>
                    <a href="/sprint/ajouteTask" class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg font-medium transition-colors shadow-sm">
                        + New Task
                    </a>
                </div>
            </div>

            <div class="w-full grid grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm text-center hover:scale-[1.01] hover:shadow-lg w-full">
                    <h3 class="text-gray-500 font-medium mb-1">To Do</h3>
                    <span class="text-3xl font-bold text-gray-900"><?= $taskService->todoTaskNumBySprint($id) ?></span>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm text-center hover:scale-[1.01] hover:shadow-lg w-full">
                    <h3 class="text-gray-500 font-medium mb-1">In Progress</h3>
                    <span class="text-3xl font-bold text-gray-900"><?= $taskService->inProgresseTaskNumBySprint($id) ?></span>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm text-center hover:scale-[1.01] hover:shadow-lg w-full">
                    <h3 class="text-gray-500 font-medium mb-1">Done</h3>
                    <span class="text-3xl font-bold text-gray-900"><?= $taskService->doneTaskNumBySprint($id) ?></span>
                </div>
            </div>
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-gray-100 p-4 rounded-xl">
                    <div class="flex justify-between items-center mb-4 px-2">
                        <h2 class="font-bold text-gray-700">To Do</h2>
                        <span class="text-gray-500 text-sm font-medium"><?= $taskService->todoTaskNumBySprint($id) ?></span>
                    </div>

                    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-200 mb-4 hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-gray-900 leading-snug">Implement authentication</h3>
                            <button class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                            </button>
                        </div>
                        <p class="text-gray-500 text-sm mb-4">Add JWT-based authentication with refresh tokens</p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="bg-red-100 text-red-700 text-xs px-2.5 py-1 rounded-md font-medium">high</span>
                            <div class="w-8 h-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-xs font-bold">E</div>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-200 mb-4 hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-gray-900 leading-snug">Create product catalog UI</h3>
                            <button class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                            </button>
                        </div>
                        <p class="text-gray-500 text-sm mb-4">Build responsive product listing and detail pages</p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="bg-yellow-100 text-yellow-700 text-xs px-2.5 py-1 rounded-md font-medium">medium</span>
                            <div class="w-8 h-8 rounded-full bg-purple-600 flex items-center justify-center text-white text-xs font-bold">J</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 p-4 rounded-xl">
                    <div class="flex justify-between items-center mb-4 px-2">
                        <h2 class="font-bold text-gray-700">In Progress</h2>
                        <span class="text-gray-500 text-sm font-medium"><?= $taskService->inProgresseTaskNumBySprint($id) ?></span>
                    </div>

                    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-200 mb-4 hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-gray-900 leading-snug">Design database schema</h3>
                            <button class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                            </button>
                        </div>
                        <p class="text-gray-500 text-sm mb-4">Create database models for users, products, and orders</p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="bg-red-100 text-red-700 text-xs px-2.5 py-1 rounded-md font-medium">high</span>
                            <div class="w-8 h-8 rounded-full bg-pink-600 flex items-center justify-center text-white text-xs font-bold">M</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 p-4 rounded-xl">
                    <div class="flex justify-between items-center mb-4 px-2">
                        <h2 class="font-bold text-gray-700">Done</h2>
                        <span class="text-gray-500 text-sm font-medium"><?= $taskService->doneTaskNumBySprint($id) ?></span>
                    </div>

                    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-200 mb-4 hover:shadow-md transition-shadow cursor-pointer">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-gray-900 leading-snug">Setup project repository</h3>
                            <button class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                            </button>
                        </div>
                        <p class="text-gray-500 text-sm mb-4">Initialize Git repository and setup CI/CD pipeline</p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="bg-red-100 text-red-700 text-xs px-2.5 py-1 rounded-md font-medium">high</span>
                            <div class="w-8 h-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-xs font-bold">E</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main> 
    <script type="module" src="/views/assets/js/script.js"></script>
</body>
</html>