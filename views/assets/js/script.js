import {setupEvent} from './event.js';
import {dragAndDrop} from './Modals/DragAndDrop.js';

window.addEventListener("DOMContentLoaded" , () => {
    setupEvent();
    dragAndDrop();
});