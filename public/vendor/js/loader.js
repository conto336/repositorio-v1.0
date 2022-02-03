const container = document.getElementById('contenedor');
const loader = document.getElementById('loader');

const body = () => {
    container.style.opacity = '0';
    loader.style.opacity = '0';
    container.style.visibility = 'hidden';
    loader.style.visibility = 'hidden';
}

window.onload = body;
