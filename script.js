const elements = document.querySelectorAll('.fade');

function mostrar() {
    elements.forEach(el => {
        const top = el.getBoundingClientRect().top;
        if (top < window.innerHeight - 50) {
            el.classList.add('show');
        }
    });
}

window.addEventListener('scroll', mostrar);
window.addEventListener('load', mostrar);