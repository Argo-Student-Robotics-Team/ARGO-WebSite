function popup(event) {
    event.preventDefault();
    var link = event.target;
    var div = link.closest('.prikazi').nextElementSibling;
    if (div.classList.contains('show')) {
        div.classList.remove('show');
        setTimeout(function() {
            div.style.display = 'none';
        }, 500);
        link.innerHTML = '+';
    } else {
        div.style.display = 'block';
        setTimeout(function() {
            div.classList.add('show');
        }, 10); 
        link.innerHTML = '-';
    }
}
