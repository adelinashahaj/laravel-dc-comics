import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import { method } from 'lodash';
import.meta.glob([
    '../img/**'
])

/*

esempi alert:

const deleteButtons = document.querySelectorAll('.form_delete_pasta button[type="submit"]');

deleteButtons.forEach(button => {
    button.addEventListener('click', event => {
        event.preventDefault();

        const userResponse = confirm("Sei sicuro di voler eliminare l'elemento?");

        if (userResponse) {
            button.parentElement.submit();
        }

    })
});
*/

