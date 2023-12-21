//desc untuk event card
function showEventDesc(clickedCard) {
    const allCards = document.querySelectorAll('.card-body');

    clickedCard.querySelector('.card-body p').classList.toggle('show-desc');

    allCards.forEach(card => {
        if (card !== clickedCard && card.querySelector('.card-body p').classList.contains('show-desc')) {
            card.querySelector('.card-body p').classList.remove('show-desc');
        }
    });
}