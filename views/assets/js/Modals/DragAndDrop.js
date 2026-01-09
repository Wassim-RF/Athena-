export function dragAndDrop() {
    const ToDo_task = document.getElementById("ToDo_task--container");
    const InProgresse_task = document.getElementById("InProgresse_task--container");
    const Done_task = document.getElementById("Done_task--container");

    const containers = [];
    if (ToDo_task) containers.push(ToDo_task);
    if (InProgresse_task) containers.push(InProgresse_task);
    if (Done_task) containers.push(Done_task);

    if (containers.length) {
        dragula(containers);
    }
}