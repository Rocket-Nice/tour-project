export function Header() {
    // Получаем ссылки на элементы
    let header = document.querySelector('.header');
    let recolorHeaderWhiteItems = document.querySelectorAll('.bg-white');
    let isScrolling = false;
    let animationFrameId = null;

    function checkHeaderContact() {
        let headerRect = header.getBoundingClientRect();

        let isContact = Array.from(recolorHeaderWhiteItems).some(function (item) {
            let itemRect = item.getBoundingClientRect();
            return (
                headerRect.bottom > itemRect.top && headerRect.top < itemRect.bottom
            );
        });

        if (isContact) {
            header.classList.add('header-dark');
        } else {
            header.classList.remove('header-dark');
        }
    }

    function hideHeader() {
        header.style.opacity = '1';
    }

    function showHeader() {
        header.style.opacity = '0';
    }


    function handleScroll() {
        if (!isScrolling) {
            showHeader();
            clearTimeout(animationFrameId);
            animationFrameId = setTimeout(function () {
                hideHeader();
                isScrolling = false;
            }, 500);
        }
        isScrolling = true;
    }

    window.addEventListener('scroll', function () {
        checkHeaderContact();
        handleScroll();
    });

    window.addEventListener('resize', checkHeaderContact);

    checkHeaderContact();

    // Форма при нажатие на "Подобрать тур"
    const openBtn = document.querySelectorAll('.open-btn');
    const modal = document.querySelector('.modals');
    const mod = document.querySelector('.modal');
    const closeBtn = document.querySelector('.modal__btn');

    openBtn.forEach(function (item) {
        item.addEventListener('click', () => {
            openModalDesktop();
            mod.style.animationName = 'form-modal'
            mod.style.animationDuration = '1s'
            mod.style.animationFillMode = 'forwards'
            mod.style.animationIterationCount = '1'
        });
    });

    modal.addEventListener('click', (e) => {
        if (e.target == modal) {
            closeModal();
        }
    });

    closeBtn.addEventListener('click', () => {
        closeModal();
    });

    const openModalDesktop = () => {
        modal.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    }

    const closeModal = () => {
        modal.classList.remove('is-open');
        document.body.style.overflow = 'unset';
    }

    // Форма изменяет размер в зависимости от экрана

    var thisBlock = document.querySelector('.modal');

    // Проверяем высоту экрана
    if (window.innerHeight < 700) {
        // Если высота меньше 700px, добавляем стиль
        thisBlock.style.height = '100vh';
    } else {
        // Если высота больше или равна 700px, удаляем стиль
        thisBlock.style.height = '';
    }
}