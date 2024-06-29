document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("feedbackForm");
    form.addEventListener("submit", function(event) {
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const feedback = document.getElementById("feedback").value;
        const rating = document.getElementById("rating").value;

        if (!name || !email || !feedback || !rating) {
            alert("Please fill in all fields.");
            event.preventDefault();
        }
    });
});
