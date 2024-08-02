import './bootstrap'; // Laravel axios
import 'bootstrap';  // Bootstrap Framework
import 'bootstrap/dist/css/bootstrap.min.css';

// Your custom JavaScript code or additional imports
document.querySelector('#navbarSideCollapse').addEventListener('click', () => {
    document.querySelector('.offcanvas-collapse').classList.toggle('open')
})

