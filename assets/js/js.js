window.addEventListener('load', function () {

    // Слайдер (переключение картинок) на jQuery
    
    let slides = $('.main-slide'); // div-ы с картинками

    let slideClone = slides.eq(slides.length - 1).clone(); // клонируем последний
    slideClone.css({   // делаем его самым нижним
        'z-index': 0
    });
    slideClone.prependTo($('.picture')) // вставляем в начало блока picture


    let i = slides.length - 1;

    setInterval(() => {  // каждые 5 сек
        if (i == 0) {  // если счетчик дошел до 0
            slides.eq(i).animate({  // анимируем предпоследнюю картинку (исчезновение)
                'opacity': 0
            }, 700, () => { // в течении 0,7 секунд и после этого
                i = slides.length - 1; // счетчик в исходное значение
                slides.css({  // всем div-ам возвращаем полную видимость 
                    'opacity': 1
                });
            });
        } else { // если еще не 0
            slides.eq(i).animate({  // анимируем картинку (исчезновение)
                'opacity': 0
            }, 700);
            i--;
        }
    }, 5000)


    // Выплывающее мобильное меню
    // jQuery
    let menuButton = $('.menu-button'),
        menuNav = $('.menu-nav');
    menuButton.click( function () {
        menuNav.slideToggle();
    } );



    // Проверка ввода Имени

    let userName = document.querySelectorAll('input[name="name"]');

    userName.forEach(function (v, i) {

        v.addEventListener('keyup', function (event) {

            // v.style.border = "2px solid #0e2038";

            if (
                (this.value.indexOf('<') != `-1`) ||
                (this.value.indexOf('>') != `-1`) ||
                (this.value.indexOf('.') != `-1`) ||
                (this.value.indexOf('|') != `-1`) ||
                (this.value.indexOf('%') != `-1`) ||
                (this.value.indexOf('!') != `-1`) ||
                (this.value.indexOf('(') != `-1`) ||
                (this.value.indexOf(')') != `-1`) ||
                (this.value.indexOf('$') != `-1`) ||
                (this.value.indexOf('@') != `-1`) ||
                (this.value.indexOf('#') != `-1`) ||
                (this.value.indexOf('&') != `-1`) ||
                (this.value.indexOf('?') != `-1`) ||
                (this.value.indexOf('*') != `-1`) ||
                (this.value.indexOf('_') != `-1`) ||
                (this.value.indexOf('-') != `-1`) ||
                (this.value.indexOf('+') != `-1`) ||
                (this.value.indexOf('/') != `-1`) ||
                (this.value.indexOf('1') != `-1`) ||
                (this.value.indexOf('2') != `-1`) ||
                (this.value.indexOf('3') != `-1`) ||
                (this.value.indexOf('4') != `-1`) ||
                (this.value.indexOf('5') != `-1`) ||
                (this.value.indexOf('6') != `-1`) ||
                (this.value.indexOf('7') != `-1`) ||
                (this.value.indexOf('8') != `-1`) ||
                (this.value.indexOf('9') != `-1`) ||
                (this.value.indexOf('0') != `-1`) ||
                (this.value.indexOf('~') != `-1`) ||
                (this.value.indexOf('`') != `-1`) ||
                (this.value.indexOf('№') != `-1`) ||
                (this.value.indexOf(';') != `-1`) ||
                (this.value.indexOf(':') != `-1`) ||
                (this.value.indexOf('=') != `-1`)
            ) {
                this.value = this.value.slice(0, this.value.length - 1);
            }

            if (
                (this.value.indexOf('INSERT IN') != `-1`) ||
                (this.value.indexOf('insert in') != `-1`) ||
                (this.value.indexOf('ALERT') != `-1`) ||
                (this.value.indexOf('alert') != `-1`)
            ) {
                this.value = this.value.slice(0, this.value.length - 100);
            }

        });

    });

    $('.faq-quest').click( function () {
        let faqItem = $(this).parent('.faq-item');
        if (!faqItem.hasClass('active')) {
            faqItem.addClass('active');
        } else {
            faqItem.removeClass('active');
        }
    } );
});