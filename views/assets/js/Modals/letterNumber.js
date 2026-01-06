export function addProjectTitleLetterNumber() {
    const project_AddTitleInput = document.getElementById("project_Add--title--input");
    const letter_numberProjectTitleInput = document.getElementById("letter_number--project--Title--input");

    letter_numberProjectTitleInput.innerText = project_AddTitleInput.value.length + "/100";
}

export function addProjectDescriptionLetterNumber() {
    const project_AddDescriptionInput = document.getElementById("project_Add--Description--input");
    const letter_numberProjectDescriptionInput = document.getElementById("letter_number--project--Description--input");

    letter_numberProjectDescriptionInput.innerText = project_AddDescriptionInput.value.length + "/1000";
}