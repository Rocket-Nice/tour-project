export function ToursList() {
    const tabsMedia = document.querySelectorAll('.tab');

    if (tabsMedia) {
        tabsMedia.forEach((tab) => {
            tab.addEventListener('click', function () {
                const slider = document.querySelector(`#${this.dataset.tab}`);
                if (!slider) {
                    return;
                }
                const parentSection = this.closest('.main-content__item');
                const showSlider = parentSection.querySelector('.show-tab');
                if (showSlider) {
                    showSlider.classList.remove('show-tab');
                }

                const activeElem = parentSection.querySelector('.tab-active');
                if (activeElem) {
                    activeElem.classList.remove('tab-active');
                }
                this.classList.add('tab-active');
                slider.classList.add('show-tab');

            });
        });
    }
}
