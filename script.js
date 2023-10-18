document.addEventListener("DOMContentLoaded", function() {
    const contactForm = document.getElementById("contactForm");
    const responseDiv = document.getElementById("response");

    contactForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const formData = new FormData(contactForm);

        // Add form validation here, e.g., check for a valid email address.

        fetch("process.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            responseDiv.innerHTML = data;
            contactForm.reset();
        })
        .catch(error => {
            responseDiv.innerHTML = "An error occurred. Please try again.";
        });
    });
});
