import Swiper, { Autoplay } from 'swiper';
Swiper.use([Autoplay]);

export function initializeSwiper() {
    const swiper = new Swiper('.second-step__checkbox-container', {
        // Опциональные параметры
        direction: 'horizontal',
        spaceBetween: 0,
        loop: false,
        draggable: true,
        slidesPerView: 1,
    });

    const swiperAdventures = new Swiper('.adventures-program__container', {
        // Опциональные параметры
        direction: 'horizontal',
        spaceBetween: 0,
        loop: false,
        draggable: true,
        slidesPerView: 1,
    });

    const sectionGallery = document.querySelector('.personal-offer__second-step');
    const sectionDayAdventures = document.querySelector('.adventure-program');
    if (sectionGallery) {
        const btnPrev1 = document.querySelector('.pagination__back');
        const btnNext1 = document.querySelector('.pagination__next');

        btnPrev1.addEventListener('click', function () {
            const thisClosest = document.querySelector('.second-step__checkbox-container').swiper;
            thisClosest.slidePrev(1000, true);
            updatePagination();
        });

        btnNext1.addEventListener('click', function () {
            const thisClosest = document.querySelector('.second-step__checkbox-container').swiper;
            thisClosest.slideNext(1000, true);
            updatePagination();
        });

        swiper.on('slideChange', function () {
            if (swiper.isEnd) {
                btnNext1.setAttribute('disabled', 'disabled'); // Добавить атрибут disabled для кнопки btnNext1 при достижении конца слайдера
            } else {
                btnNext1.removeAttribute('disabled'); // Удалить атрибут disabled для кнопки btnNext1, если есть возможность листать дальше
            }

            if (swiper.isBeginning) {
                btnPrev1.setAttribute('disabled', 'disabled'); // Добавить атрибут disabled для кнопки btnPrev1 при достижении начала слайдера
            } else {
                btnPrev1.removeAttribute('disabled'); // Удалить атрибут disabled для кнопки btnPrev1, если есть возможность листать назад
            }
        });

        function updatePagination() {
            const paginationItems = document.querySelectorAll('.pagination__item');
            const activeIndex = document.querySelector('.second-step__checkbox-container').swiper.activeIndex + 1;

            paginationItems.forEach(item => {
                item.classList.remove('active-item');

                if (item.dataset.index == activeIndex) {
                    item.classList.add('active-item');
                }
            });
        }
    }
    if (sectionDayAdventures) {
        const btnPrev1 = document.querySelector('.pagination__back-adventures');
        const btnNext1 = document.querySelector('.pagination__next-adventures');

        btnPrev1.addEventListener('click', function () {
            const thisClosest = document.querySelector('.adventures-program__container').swiper;
            thisClosest.slidePrev(1000, true);
        });

        btnNext1.addEventListener('click', function () {
            const thisClosest = document.querySelector('.adventures-program__container').swiper;
            thisClosest.slideNext(1000, true);
        });

        swiperAdventures.on('slideChange', function () {
            if (swiperAdventures.isEnd) {
                btnNext1.setAttribute('disabled', 'disabled');
            } else {
                btnNext1.removeAttribute('disabled');
            }

            if (swiperAdventures.isBeginning) {
                btnPrev1.setAttribute('disabled', 'disabled');
            } else {
                btnPrev1.removeAttribute('disabled');
            }
        });

    }
}
