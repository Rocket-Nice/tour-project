export function MasonryFunction() {
    // Отзывы
    const reviewsGrid = document.querySelector('.reviews-grid');
    let layout; // Объявляем переменную layout здесь

    if (reviewsGrid) {
        layout = new Masonry(reviewsGrid, {
            columnWidth: '.reviews-item',
            gutter: 24,
            horizontalOrder: true,
            percentPosition: true
        });

        layout.layout();
        layout.reloadItems();

        layout.once('layoutComplete', function () {
            layout.layout();
            layout.reloadItems();
        });

        window.addEventListener('resize', () => {
            layout.layout();
            layout.reloadItems();
        });
        document.addEventListener('scroll', () => {
            layout.layout();
            layout.reloadItems();
        });
    }

    const selectorPoster = document.querySelector('.reviews__button-all');
    const reviewsItemActive = document.querySelectorAll('.reviews-item--active');
    if (selectorPoster) {
        const btnSee = selectorPoster.querySelector('.reviews__btn-see-more');
        btnSee.addEventListener('click', function () {
            selectorPoster.style.display = "none";
            reviewsItemActive.forEach((el) => {
                el.style.display = "block";
            });
            layout.layout();
            layout.reloadItems();
        });
    }
}