import './bootstrap';


const getActiveWindow = () => {
    const windowTitle = document.title;
    const navLinks = document.querySelectorAll('#nav>a');
    
    navLinks.forEach(link => {
        if (link.textContent == windowTitle){
            link.classList.add('border-b')
            link.classList.add('border-red-600')
        }else{
            link.classList.remove('border-b')
            link.classList.remove('border-red-600')
        }
    })
}


document.addEventListener("DOMContentLoaded", getActiveWindow);