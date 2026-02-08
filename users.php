<div class="p-6">
    <h2 class="text-xl font-bold mb-4">User List</h2>
    <div id="displayArea" class="bg-gray-100 p-4 rounded">
        </div>
    <button onclick="getUsers()" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
        Fetch Users via REST
    </button>
</div>

<script>
async function getUsers() {
    const res = await fetch('api/users.php');
    const result = await res.json();
    
    if(result.status === "success") {
        let html = '<ul>';
        result.data.forEach(user => {
            html += `<li>${user.username} - <span class="text-sm text-gray-500">${user.role}</span></li>`;
        });
        html += '</ul>';
        document.getElementById('displayArea').innerHTML = html;
    }
}
</script>