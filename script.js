document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('feedbackForm');

    form.addEventListener('submit', function (event) {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const feedback = document.getElementById('feedback').value.trim();
        const rating = document.getElementById('rating').value;

        if (name === '' || email === '' || feedback === '' || rating === '') {
            alert('All fields are required.');
            event.preventDefault();
        }
    });
});