function toggleSearchForm() {
    var search = document.getElementById('search-form');
    if(search.style.display !== 'inline-block') {
        search.style.display = 'inline-block';
        search.getElementsByClassName('search-field')[0].focus();
    }
    else
    {
        search.style.display = 'none';
    }
}