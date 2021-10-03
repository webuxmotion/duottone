let burderElements = document.querySelectorAll('.burger');
let headerElement = document.querySelector('.header');

if (burderElements.length) {
    burderElements.forEach((el) => {
        el.addEventListener('click', () => {
            headerElement.classList.toggle('is-active');
        });
    })
}