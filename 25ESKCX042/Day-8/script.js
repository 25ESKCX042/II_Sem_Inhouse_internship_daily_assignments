// Display the name of the uploaded file
document.getElementById("resume").addEventListener("change", function() {
    if (this.files.length > 0) {
        document.getElementById("fileName").innerHTML = "Selected: " + this.files[0].name;
    }
});

// Form validation before submission
document.querySelector("form").addEventListener("submit", function(e) {
    let errors = [];
    let name = document.getElementById("name").value;
    let address = document.getElementById("address").value;
    let shift = document.querySelector('input[name="shift"]:checked');

    // Validation Rules
    if (/\d/.test(name)) {
        errors.push("Name cannot contain numbers.");
    }
    if (address.length < 15) {
        errors.push("Home Address must be at least 15 characters long.");
    }
    if (!shift) {
        errors.push("Please select a Shift Preference.");
    }

    // If there are errors, stop submission and show them
    if (errors.length > 0) {
        e.preventDefault(); // Stops the form from submitting
        let box = document.getElementById("errorBox");
        box.style.display = "block";
        box.innerHTML = errors.join("<br>");
        window.scrollTo(0, 0); // Scroll to top to see errors
    }
});