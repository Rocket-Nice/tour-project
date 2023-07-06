export function TourPage() {
    // block-for-bottom

    let bottomBlock = document.querySelector('.tour-page__fixed-block-for-info-tour');
    let trigerHeader = document.querySelectorAll('.triger-class-for-bottom-block');
    let trigerFooter = document.querySelectorAll('.triger-class-for-bottom-block-footer');
    let isScrolling = false;

    if (bottomBlock) {
        function debounce(callback, delay) {
            let timer;
            return function () {
                clearTimeout(timer);
                timer = setTimeout(callback, delay);
            };
        }
    
        function checkHeaderContact() {
            let bottomBlockRect = bottomBlock.getBoundingClientRect();
    
            let isContactHead = Array.from(trigerHeader).some(function (item) {
                let itemRect = item.getBoundingClientRect();
                return (bottomBlockRect.top < itemRect.bottom);
            });
    
            let isContactFooter = Array.from(trigerFooter).some(function (item) {
                let itemRect = item.getBoundingClientRect();
                return (bottomBlockRect.bottom > (itemRect.top + 250));
            });
    
            if (isContactHead || isContactFooter) {
                bottomBlock.classList.remove('active-fixed-bottom-block');
            } else {
                bottomBlock.classList.add('active-fixed-bottom-block');
            }
        }
    
        function handleScroll() {
            if (!isScrolling) {
                window.requestAnimationFrame(function () {
                    checkHeaderContact();
                    isScrolling = false;
                });
            }
            isScrolling = true;
        }
    
        window.addEventListener('scroll', debounce(handleScroll, 100));
        window.addEventListener('resize', debounce(handleScroll, 100));
    }
}