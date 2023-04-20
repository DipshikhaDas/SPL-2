
const cards = document.querySelectorAll('.card');
cards.forEach((card) => {
    card.addEventListener('mouseover', () => {
        const text = card.querySelector('.stat-text');
        text.classList.add('black');
    });
    card.addEventListener('mouseout', () => {
        const text = card.querySelector('.stat-text');
        text.classList.remove('black');
    });
});

