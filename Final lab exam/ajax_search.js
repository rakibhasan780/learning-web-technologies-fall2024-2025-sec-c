document.getElementById('searchInput').addEventListener('input', function() {
    var searchQuery = this.value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'search_employer.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        document.getElementById('searchResults').innerHTML = xhr.responseText;
    };
    xhr.send('search_query=' + searchQuery);
});
