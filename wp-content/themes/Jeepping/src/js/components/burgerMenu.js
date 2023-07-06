export function BurgerMenu() {
    let downAfter = document.querySelector('.burger-menu_lines')
    function burgerMenu(selectors) {
        let menu = document.querySelector(selectors);
        let button = document.querySelector('.burger-menu_button');

        button.onclick = (e) => {
            e.preventDefault();
            toggleMenu();
        };

        function toggleMenu() {
            menu.classList.toggle('burger-menu_active');
            downAfter.classList.toggle('active');
            button.classList.toggle('active')

            if (menu.classList.contains('burger-menu_active')) {
                document.querySelector('body').style.overflow = 'hidden';
            } else {
                document.querySelector('body').style.overflow = 'visible';
            }
        }
    }
    burgerMenu('.burger-menu');
}