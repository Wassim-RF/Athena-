import {addProjectTitleLetterNumber} from './Modals/letterNumber.js';
import {addProjectDescriptionLetterNumber} from './Modals/letterNumber.js';

export function setupEvent() {
    const project_AddTitleInput = document.getElementById("project_Add--title--input");
    const project_AddDescriptionInput = document.getElementById("project_Add--Description--input");

    if (project_AddTitleInput) {
        project_AddTitleInput.addEventListener("input" , addProjectTitleLetterNumber);
    }

    if (project_AddDescriptionInput) {
        project_AddDescriptionInput.addEventListener("event" , addProjectDescriptionLetterNumber);
    }
}