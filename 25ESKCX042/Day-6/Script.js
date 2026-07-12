
const API_URL = "https://jsonplaceholder.typicode.com/users";
 
let allUsers = [];
 
function buildCard(user, index) {
    const photo = `https://i.pravatar.cc/150?img=${(index % 70) + 1}`;
    const altClass = index % 2 === 0 ? "bg-teal-soft" : "";
 
    return `
        <div class="col-md-4">
            <div class="card shadow h-100 ${altClass}">
                <div class="card-body text-center">
                    <img src="${photo}" class="rounded-circle mb-3" width="80" height="80" alt="${user.name}">
                    <h5>${user.name}</h5>
                    <p class="mb-1"><strong>Email:</strong> ${user.email}</p>
                    <p class="text-muted mb-0"><strong>Company:</strong> ${user.company.name}</p>
                </div>
            </div>
        </div>
    `;
}
 
function renderUsers(users) {
    const cards = users.map(buildCard).join("");
    $("#userContainer").html(cards);
    $("#userContainer .card").hide().fadeIn(400);
    $("#userCount").text(`Showing ${users.length} users`);
}
 
function loadUsers() {
    $("#statusMsg").html('<p class="text-muted">Loading users...</p>');
    $("#userContainer").empty();
    $("#userCount").text("");
 
    setTimeout(function () {
        fetch(API_URL)
            .then(res => {
                if (!res.ok) {
                    throw new Error("Server responded with status " + res.status);
                }
                return res.json();
            })
            .then(data => {
                allUsers = data;
                $("#statusMsg").empty();
                renderUsers(allUsers);
            })
            .catch(error => {
                $("#userContainer").empty();
                $("#userCount").text("");
                $("#statusMsg").html(`
                    <p class="text-danger mb-2">Unable to load users. Please try again.</p>
                    <button class="btn btn-outline-danger btn-sm" id="retryBtn">Retry</button>
                `);
                console.error("Fetch error:", error);
            });
    }, 500);
}
 
$(document).ready(function () {
    loadUsers();
 
    $(document).on("click", "#retryBtn", function () {
        loadUsers();
    });
 
    $("#searchBox").on("keyup", function () {
        const query = $(this).val().toLowerCase();
        const filtered = allUsers.filter(u => u.name.toLowerCase().includes(query));
        renderUsers(filtered);
    });
 
    $("#sortBtn").on("click", function () {
        allUsers.sort((a, b) => a.name.localeCompare(b.name));
        renderUsers(allUsers);
    });
});
 