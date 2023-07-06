export function DataLink() {
    function gotoLinkAnyPlaceInCard(e) {
        // data-link на области
        const target = e.currentTarget;
        const link = target.querySelector('a[data-link]');
        link.click();
    }

    const linksInCards = document.querySelectorAll('*[data-place]');
    if (linksInCards.length) {
        Array.prototype.slice.call(linksInCards).forEach((el) => {
            el.addEventListener('click', gotoLinkAnyPlaceInCard);
        });
    }
}
