document.getElementById("contactForm").addEventListener("submit", function(event) {
    // Validate form fields here if needed
    // Example: check if email is in valid format
    var emailInput = document.getElementsByName("email")[0];
    if (!validateEmail(emailInput.value)) {
        alert("Please enter a valid email address.");
        event.preventDefault();
    }
});

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
