function popup(event) {
    event.preventDefault();
    var link = event.target;
    var div = link.closest('.prikazi').nextElementSibling;
    if (div.style.display === 'block') {
        div.style.display = 'none';
        link.innerHTML = '+';
    } else {
        div.style.display = 'block';
        link.innerHTML = '-';
    }
}