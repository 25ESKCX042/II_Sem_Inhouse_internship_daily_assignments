$(document).ready(function () {
 
    // ---- STEP 1: Our "database" - an array of student objects ----
    const students = [
        { name: "Rahul", branch: "CSE", year: 2, cgpa: 8.4, city: "Jaipur" },
        { name: "Ankit", branch: "ECE", year: 3, cgpa: 7.9, city: "Delhi" },
        { name: "Priya", branch: "IT",  year: 2, cgpa: 9.1, city: "Mumbai" },
        { name: "Sara",  branch: "CSE", year: 1, cgpa: 8.7, city: "Pune" },
        { name: "Dev",   branch: "ME",  year: 4, cgpa: 7.5, city: "Bengaluru" }
    ];
 
    // ---- STEP 2: Build ONE Bootstrap card from ONE student object ----
    // i is the loop index - used for the serial number badge and the
    // alternating background color, exactly like the Loops mission asked.
    function buildCard(student, i) {
        const serial = i + 1;                                    // Serial Number bonus
        const altClass = i % 2 === 0 ? "bg-teal-soft" : "";       // Alternate Colors bonus (i % 2 === 0)
        const cgpaBadgeClass = student.cgpa > 8 ? "bg-success" : "bg-secondary"; // CGPA Badge bonus
 
        return `
            <div class="col-md-4">
                <div class="card shadow h-100 ${altClass}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-dark">#${serial}</span>
                            <span class="badge ${cgpaBadgeClass}">CGPA ${student.cgpa}</span>
                        </div>
                        <h4>${student.name}</h4>
                        <p class="text-muted mb-2">${student.branch} &middot; Year ${student.year}</p>
                        <button class="btn btn-primary toggle-btn w-100">Show Details</button>
                        <div class="details mt-3" style="display:none;">
                            <hr>
                            <p><strong>Branch:</strong> ${student.branch}</p>
                            <p><strong>Year:</strong> ${student.year}</p>
                            <p><strong>CGPA:</strong> ${student.cgpa}</p>
                            <p><strong>City:</strong> ${student.city}</p>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }
 
    // ---- STEP 3: Loop through the array and render every card ----
    function renderCards(list) {
        let html = "";
        list.forEach(function (student, i) {
            html += buildCard(student, i);
        });
        $("#cardContainer").html(html);
        $("#cardContainer .card").hide().fadeIn(400); // jQuery bonus: fade in when page loads
 
        // "Display total number of students" bonus - recalculated for
        // whatever list is currently showing (e.g. after a search).
        $("#studentCount").text(`Total Students: ${list.length}`);
    }
 
    renderCards(students); // build the page on load
 
    // ---- STEP 4: Show / Hide toggle + button color animation ----
    // Cards are created AFTER the page loads, so a plain
    // $(".toggle-btn").click() would miss them entirely. We attach the
    // listener to the parent container instead - this is EVENT DELEGATION.
    $("#cardContainer").on("click", ".toggle-btn", function () {
        const $btn = $(this);
        const $details = $btn.siblings(".details");
 
        $details.slideToggle(300, function () {
            const isOpen = $details.is(":visible");
            $btn.text(isOpen ? "Hide Details" : "Show Details");
            // jQuery code challenge: animate the button's background color on toggle
            $btn.css("background-color", isOpen ? "#198754" : "#0d6efd");
        });
    });
 
    // ---- BONUS: live search box (filters by name in real time) ----
    $("#searchBox").on("keyup", function () {
        const query = $(this).val().toLowerCase();
        const filtered = students.filter(s => s.name.toLowerCase().includes(query));
        renderCards(filtered);
    });
 
});
 