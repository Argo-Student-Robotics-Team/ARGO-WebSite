function popup(event) {
    event.preventDefault();
    var link = event.target;
    var div = link.closest('.prikazi').nextElementSibling;
    if (div.classList.contains('show')) {
        div.classList.remove('show');
        link.innerHTML = '+';
    } else {
        div.classList.add('show');
        link.innerHTML = '-';
    }
}
