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
                <a href="/project/show?id=<?= $id ?>" class="flex items-center gap-2 text-gray-600 text-lg hover:text-blue-600">
                    <span class="text-2xl">←</span>
                    <span class="text-xl font-medium">Back</span>
                </a>
                <div>
                    <h2 class="text-2xl font-bold">Creer un sprint</h2>
                    <p class="text-sm text-gray-400">Ajouter des noveaux sprint a votre project...</p>
                </div>
            </div>
            <form method="POST" class="w-full p-[2%] bg-white rounded-4xl shadow-sm flex flex-col gap-10">
                <div class="flex flex-col gap-2">
                    <label>Task title <span class="text-red-500">*</span></label>
                    <div class="w-full bg-gray-100 rounded-2xl p-[2%] flex items-center">
                        <input
                            type="text"
                            name="title"
                            class="w-full outline-0"
                            minlength="5"
                            maxlength="100" placeholder="Create login page..." require>
                        <p class="text-xs text-gray-400 text-end">0/100</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-2">
                        <label>Status <span class="text-red-500">*</span></label>
                        <div class="w-full bg-gray-100 rounded-2xl p-[2%] flex items-center">
                            <select name="status" class="w-full outline-0" required>
                                <option value="todo" selected>To do</option>
                                <option value="in_progress">In progress</option>
                                <option value="done">Done</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label>Priority <span class="text-red-500">*</span></label>
                        <div class="w-full bg-gray-100 rounded-2xl p-[2%] flex items-center">
                            <select name="priority" class="w-full outline-0" required>
                                <option value="low">Low</option>
                                <option value="medium" selected>Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label>Description <span class="text-red-500">*</span></label>
                    <div class="w-full bg-gray-100 rounded-2xl p-[2%] flex flex-col h-32 gap-2">
                        <textarea
                            name="description"
                            class="w-full outline-0 h-full"
                            maxlength="1000"
                            placeholder="Describe the task details..."
                        ></textarea>
                        <p class="text-xs text-gray-400 text-end">0/1000</p>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-4 justify-end">
                    <button type="submit" class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg">
                        Add
                    </button>
                    <a href="/tasks" class="px-5 py-2.5 border border-gray-300 rounded-lg">
                        Cancel
                    </a>
                </div>

            </form>

        </section>
    </main>
</body>