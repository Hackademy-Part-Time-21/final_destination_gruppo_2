import 'bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';






document.addEventListener("DOMContentLoaded", function() {
    let titleElements = document.getElementsByClassName('truncateTitlecard-title');
    let descriptionElements = document.getElementsByClassName('truncateDescription');

    function truncateDescription(description) {
        if (description.length > 15) {
            return description.split(' ')[0] + '...';
        } else {
            return description;
        }
    }

    function truncateTitle(title) {
        if (title.length > 12) {
            return title.substring(0, 12) + '...';
        } else {
            return title;
        }
    }

    Array.from(titleElements).forEach(element => {
        element.textContent = truncateTitle(element.textContent);
    });

    Array.from(descriptionElements).forEach(element => {
        element.textContent = truncateDescription(element.textContent);
    });
});





