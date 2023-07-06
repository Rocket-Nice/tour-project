export function PersonalOffer() {

    const choosingPerformance = document.querySelectorAll('.choosing-performance');
    const chipItemSelect = document.querySelector('.chip_item-select');
    let thisSelect = '';

    let selectProject = function () {
        let selectHeader = document.querySelectorAll('.select__header');
        let selectItem = document.querySelectorAll('.select__item');

        selectHeader.forEach(item => {
            item.addEventListener('click', selectToggle)
        });

        selectItem.forEach(item => {
            item.addEventListener('click', selectChoose)
        });

        function selectToggle() {
            this.parentElement.classList.toggle('is-active');
        }
        function selectChoose() {
            let text = this.innerText,
                select = this.closest('.container-select'),
                currentText = select.querySelector('.select__current');
            currentText.innerText = text;
            select.classList.remove('is-active');
            chipItemSelect.textContent = text;

            choosingPerformance.forEach((sel) => {
                sel.value = text;
                thisSelect = sel.value;
                choosingPerformance.forEach((el) => {
                    el.value = thisSelect;
                });
            });
        }

    };

    selectProject();

    // Взрослые
    const firstStepButtonMinusAdults = document.querySelector('.first-step__button-minus-adults');
    const adultsCount = document.querySelector('.first-step__count-adults');
    const firstStepButtonPlusAdults = document.querySelector('.first-step__button-plus-adults');
    // Дети
    const firstStepButtonMinusChildren = document.querySelector('.first-step__button-minus-children');
    const childrenCount = document.querySelector('.first-step__count-children');
    const firstStepButtonPlusChildren = document.querySelector('.first-step__button-plus-children');
    // Транспорт
    const firstStepButtonMinusTransport = document.querySelector('.first-step__button-minus-transport');
    const transportCount = document.querySelector('.first-step__count-transport');
    const firstStepButtonPlusTransport = document.querySelector('.first-step__button-plus-transport');

    let countAdults = parseInt(adultsCount?.innerHTML);
    let countChildren = parseInt(childrenCount?.innerHTML);
    let countTransport = parseInt(transportCount?.innerHTML);

    if (adultsCount || childrenCount || transportCount) {

        firstStepButtonMinusAdults.addEventListener('click', function () {
            if (countAdults > 0) {
                countAdults--;
                adultsCount.innerHTML = countAdults;
            }
        });

        firstStepButtonPlusAdults.addEventListener('click', function () {
            countAdults++;
            adultsCount.innerHTML = countAdults;
        });

        firstStepButtonMinusChildren.addEventListener('click', function () {
            if (countChildren > 0) {
                countChildren--;
                childrenCount.innerHTML = countChildren;
            }
        });

        firstStepButtonPlusChildren.addEventListener('click', function () {
            countChildren++;
            childrenCount.innerHTML = countChildren;
        });

        firstStepButtonMinusTransport.addEventListener('click', function () {
            if (countTransport > 0) {
                countTransport--;
                transportCount.innerHTML = countTransport;
            }
        });

        firstStepButtonPlusTransport.addEventListener('click', function () {
            countTransport++;
            transportCount.innerHTML = countTransport;
        });
    }

    // Получаем кнопки "Next" и "Back"
    var nextButton = document.querySelector('.personal-offer__button-next');
    var backButton = document.querySelector('.personal-offer__button-back');

    // Получаем все блоки personal-offer__
    var offerSteps = document.querySelectorAll('.personal-offer__');

    // Получаем все блоки persona-offer__step
    var personaSteps = document.querySelectorAll('.persona-offer__step');

    // Устанавливаем начальный индекс и класс активного блока
    var currentIndex = 0;

    if (offerSteps[currentIndex] || personaSteps[currentIndex]) {
        offerSteps[currentIndex].classList.add('active-offer-step');
        personaSteps[currentIndex].classList.add('active-step-js');

        let countClickButtonNext = 1; //Переменная для проверки количества нажатий на кнопку "вперед"
        if (countClickButtonNext > 1) {
            backButton.style.display = 'block';
        } else {
            backButton.style.display = 'none';
        }

        // Обработчик события при нажатии на кнопку "Next"
        nextButton.addEventListener('click', function () {
            // Проверяем, если текущий блок не последний, то переключаемся на следующий блок
            if (currentIndex < offerSteps.length - 1) {
                offerSteps[currentIndex].classList.remove('active-offer-step');
                personaSteps[currentIndex].classList.remove('active-step-js');
                currentIndex++;
                offerSteps[currentIndex].classList.add('active-offer-step');
                personaSteps[currentIndex].classList.add('active-step-js');
                personaSteps[currentIndex - 1].style.backgroundColor = '#2057E5';
                personaSteps[currentIndex - 1].style.color = 'white';
            }

            countClickButtonNext++;

            if (countClickButtonNext > 1) {
                backButton.style.display = 'block';
            } else {
                backButton.style.display = 'none';
            }

            // Передача чекбосов тут

            // Получить все выбранные элементы чекбокса
            const checkedCheckboxes = document.querySelectorAll('input[type="checkbox"].checkbox-location:checked');
            // Получить элемент списка, в который будут добавляться пункты
            const list = document.querySelector('.left__location-items');

            if (countClickButtonNext === 3) {
                // Пройтись по каждому выбранному элементу чекбокса
                checkedCheckboxes.forEach(function (checkbox) {
                    let labelChecked = document.querySelector('label[for="' + checkbox.id + '"]');
                    // Создать новый пункт списка
                    const listItem = document.createElement('li');
                    listItem.classList.add('left__location-item');
                    // Установить содержимое пункта списка как значение чекбокса
                    listItem.textContent = labelChecked.textContent;
                    // Добавить пункт списка в список
                    list.appendChild(listItem);
                });
            }

            // Передача дат тут

            // Дата заезда
            document.querySelector('.arrival-date-recount').innerHTML = document.querySelector('.arrival-date').value;
            // Дата выезда
            document.querySelector('.departure-date-result').innerHTML = document.querySelector('.departure-date-id').value;

            // Передача количества людей и машин тут

            document.querySelector('.right__adult').innerHTML = adultsCount.textContent + " взрослых";
            document.querySelector('.right__child').innerHTML = childrenCount.textContent + " детей";
            document.querySelector('.right__transport').innerHTML = transportCount.textContent;


            // При четвертом шаге
            if (countClickButtonNext === 4) {
                nextButton.style.display = 'none';
                document.querySelector('.personal-offer-submit').style.display = "block";
                document.querySelector('.personal-offer__btn-container').style.maxWidth = '862.77px';

                document.querySelector('.personal-offer__title').textContent = "Оставьте заявку и мы свяжемся с вами";
                document.querySelector('.before-4-step').style.display = 'none';
                document.querySelector('.after-4-step').style.display = 'block';
            }
        });
    
        // Обработчик события при нажатии на кнопку "Back"
        backButton.addEventListener('click', function () {
            // Проверяем, если текущий блок не первый, то переключаемся на предыдущий блок
            if (currentIndex > 0) {
                offerSteps[currentIndex].classList.remove('active-offer-step');
                personaSteps[currentIndex].classList.remove('active-step-js');
                currentIndex--;
                offerSteps[currentIndex].classList.add('active-offer-step');
                personaSteps[currentIndex].classList.add('active-step-js');
                personaSteps[currentIndex].style.backgroundColor = '';
                personaSteps[currentIndex].style.color = '#2057E5';
            }

            countClickButtonNext--;
            if (countClickButtonNext > 1) {
                backButton.style.display = 'block';
            } else {
                backButton.style.display = 'none';
            }

            if (countClickButtonNext !== 4) {
                nextButton.style.display = 'block';
                document.querySelector('.personal-offer-submit').style.display = "none";
                document.querySelector('.personal-offer__btn-container').style.maxWidth = 'unset';

                document.querySelector('.personal-offer__title').textContent = "Хотите персональное предложение?";
                document.querySelector('.before-4-step').style.display = 'block';
                document.querySelector('.after-4-step').style.display = 'none';
            }

            //Обнуление списка. Добавлено для возможности выбирать новые в случае, если нажата кнопка "назад"
            const listContainer = document.querySelector('.left__location-items');

            listContainer.innerHTML = '';
        });
    }

    // Валидация формы на главной
    const connectBtn = document.querySelectorAll("[id='connect-btn']");
    let personalAccountCheckbox = document.getElementById("personal-account-info");
    let personalAccountCheckboxMain = document.getElementById("personal-account-info-main");
    let checkBoxLocation = document.querySelectorAll('.checkbox-location');

    // Добавляем обработчик события изменения состояния чекбокса
    function addRemoveCheckBox(checkbox) {
        checkbox?.forEach((check) => {
            check?.addEventListener('change', function() {
                let parent = this.closest('.this-checkbox');
                let thisLabel = parent.querySelector('.personal-account-info__not-checked');
                if (parent !== null) {
                    if (this.checked) {
                        thisLabel.classList.add('checked-info');
                    } else {
                        thisLabel.classList.remove('checked-info');
                    }
                }
            });
        });
    }

    addRemoveCheckBox([personalAccountCheckbox]);
    addRemoveCheckBox([personalAccountCheckboxMain]);
    addRemoveCheckBox(checkBoxLocation);

    connectBtn?.forEach((el) => {
        el.addEventListener('click', function () {
            const parentSection = el.closest('.form-container');
            var checkValidate = 1;
            const nameInput = parentSection.querySelector('.user-name')?.value;
            const nameBox = parentSection.querySelector('.name-box');
            const emailInput = parentSection.querySelector(".user-email")?.value;
            const emailBox = parentSection.querySelector('.email-box');
            const phone = parentSection.querySelector(".user-telephone")?.value;
            const phoneBox = parentSection.querySelector('.phone-box');
            const commentInput = parentSection.querySelector('.user-comment')?.value;
            const arrivalDate = parentSection.querySelector('.arrival-date')?.value;
            const departureDate = parentSection.querySelector('.departure-date-id')?.value;
            const userCity = parentSection.querySelector('.user-cuty')?.value;
            const tourTitleSearchParent = document.querySelector('.tour-page__block-title');
            const parentBlockTour = tourTitleSearchParent?.closest('.tour-page__block');
            const firstTitleTour = parentBlockTour?.querySelector('.title_tour_first')?.textContent;
            const secondTitleTour = parentBlockTour?.querySelector('.title_tour_second')?.textContent;
            const tourTitle = firstTitleTour + "" + secondTitleTour;
            const ageFromTo = parentBlockTour?.querySelector('.age_from_to')?.textContent;
            const countPeopleFrom = parentBlockTour?.querySelector('.count_people_from')?.textContent;
            const countDayTour = parentBlockTour?.querySelector('.count_day_tour')?.textContent;
            const priceWithInterest = parentBlockTour?.querySelector('.price_with_interest')?.textContent;
            const PrivacyPolicy = document.getElementById("personal-account-info-main");
            const PrivacyPolicyTour = document.getElementById("personal-account-info");
            const btnType = el.dataset.formType;
            // Получить все выбранные элементы чекбокса
            const checkedCheckboxes = document.querySelectorAll('input[type="checkbox"].checkbox-location:checked');
            var regx = /^[a-zA-Zа-яА-Я]+$/;
            var regex = /\+7\(\d{3}\)\d{3}-\d{2}-\d{2}/;
            const EMAIL_REGEXP = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;

            // Успешная валидация формы
            function CompleteForm() {
                const modal = document.querySelector('.modals-complete');
                const mod = document.querySelector('.modal-complete');
                const closeBtn = document.querySelector('.modal__btn-complete');

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

                openModalDesktop();
                mod.style.animationName = 'form-modal'
                mod.style.animationDuration = '1s'
                mod.style.animationFillMode = 'forwards'
                mod.style.animationIterationCount = '1'
            }

            // валидация имени
            if (regx.test(nameInput)) {
                nameBox.classList.remove('input-error-name');
            }
            else {
                nameBox.classList.add('input-error-name');
                checkValidate = 0;
            }

            // валидация email
            if (emailInput) {
                if (EMAIL_REGEXP.test(emailInput)) {
                    emailBox.classList.remove('input-error-email');
                }
                else {
                    emailBox.classList.add('input-error-email');
                    checkValidate = 0;
                }
            }

            // валидация телефона
            if (regex.test(phone)) {
                phoneBox.classList.remove('input-error-phone');
            }
            else {
                phoneBox.classList.add('input-error-phone');
                checkValidate = 0;
            }

            // валидация чекбокса
            const notCheckedElements = parentSection.querySelectorAll('.personal-account-info__not-checked');

            if (PrivacyPolicyTour?.checked || PrivacyPolicy?.checked) {
                notCheckedElements.forEach(element => {
                    element.classList.remove('checked-info-error');
                });
            } else {
                notCheckedElements.forEach(element => {
                    element.classList.add('checked-info-error');
                });
            }


            // общая валидация
            if (checkValidate === 1) {
                if (btnType === "mainpage") {
                    let valueCheckbox = "";
                    let arrayCheckbox = [];
                    // Пройтись по каждому выбранному элементу чекбокса
                    checkedCheckboxes.forEach(function (checkbox) {
                        let labelChecked = document.querySelector('label[for="' + checkbox.id + '"]');
                        valueCheckbox = labelChecked.textContent;
                        arrayCheckbox.push(valueCheckbox + " ");
                    });
                    if (PrivacyPolicy?.checked) {
                        if (sendForm(arrayCheckbox, userCity, nameInput, arrivalDate, departureDate, countAdults, countChildren, countTransport, commentInput, emailInput, phone, btnType)) {
                            CompleteForm()
                            parentSection.querySelector('.modals').classList.remove('is-open');
                            console.log("Форма валидирована");
                        }
                    }
                } else if (btnType === 'tourpage') {
                    if (PrivacyPolicyTour?.checked) {
                        parentSection.querySelector('.personal-account-info__not-checked').style.display = "none;";
                        if (sendFormTourPage(userCity, nameInput, commentInput, emailInput, phone, btnType, thisSelect, tourTitle, ageFromTo, countPeopleFrom, countDayTour, priceWithInterest)) {
                            CompleteForm()
                            document.querySelector('.modals').classList.remove('is-open');
                            console.log("Форма валидирована");
                        }
                    }
                }
            }
        });
    });

    async function sendFormTourPage(userCity, nameInput, commentInput, emailInput, phone, btnType, thisSelect, tourTitle, ageFromTo, countPeopleFrom, countDayTour, priceWithInterest) {
        const data = new FormData();
        data.append('action', 'feedbackFunction'); // название функции, которая обработает все на бэкенде
        if (btnType === "tourpage") {
            data.append('btnType', btnType);
            data.append('name', nameInput);
            data.append('review', commentInput);
            data.append('emailInput', emailInput);
            data.append('phone', phone);
            data.append('userCity', userCity);
            if (thisSelect !== ""){
                data.append('thisSelect', thisSelect);
                data.append('tourTitle', tourTitle);
                data.append('ageFromTo', ageFromTo);
                data.append('countPeopleFrom', countPeopleFrom);
                data.append('countDayTour', countDayTour);
                data.append('priceWithInterest', priceWithInterest);
            }
        }

        await fetch("/wp-admin/admin-ajax.php", {
            method: "POST",
            body: data,
        })

            .then((response) => {
                if (response.status !== 200) {
                    return Promise.reject();
                }
                return response.text()
            })
            .then((response) => {
                console.log(response);
                return true;
            })
            .catch(() => {
                console.log('ошибка');
                return false;
            });
    }

    async function sendForm(arrayCheckbox, userCity, nameInput, arrivalDate, departureDate, countAdults, countChildren, countTransport, commentInput, emailInput, phone, btnType) {
        const data = new FormData();
        data.append('action', 'feedbackFunction'); // название функции, которая обработает все на бэкенде
        if (btnType === "mainpage") {
            data.append('btnType', btnType);
            data.append('name', nameInput);
            data.append('review', commentInput);
            data.append('tourChaked', arrayCheckbox);
            data.append('arrivalDate', arrivalDate);
            data.append('departureDate', departureDate);
            data.append('countAdults', countAdults);
            data.append('countChildren', countChildren);
            data.append('countTransport', countTransport);
            data.append('emailInput', emailInput);
            data.append('phone', phone);
            data.append('userCity', userCity);
        }

        await fetch("/wp-admin/admin-ajax.php", {
            method: "POST",
            body: data,
        })

            .then((response) => {
                if (response.status !== 200) {
                    return Promise.reject();
                }
                return response.text()
            })
            .then((response) => {
                console.log(response);
                return true;
            })
            .catch(() => {
                console.log('ошибка');
                return false;
            });
    }
};