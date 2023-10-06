const div = document.querySelector('div');
div.addEventListener("mouseover", () => {
    div.style.backgroundColor = 'yellow';
});
div.addEventListener("mouseout", () => {
    div.style.backgroundColor = '';
});