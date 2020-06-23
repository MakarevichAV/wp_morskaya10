window.addEventListener('load', function () {
 
    let photos = document.querySelectorAll('.gallery .photo'), // Все фото на странице
        slider = document.querySelector('.popup-slider'),  // Выплывающий слайдер
        container = document.querySelector('.carousel-inner'), // Контэйнер для слайдов
        crose = document.querySelector('.crose');  // Крестик для закрытия слайдера
        
    photos.forEach( function (val, ind) { // на каждую из фоток
        val.addEventListener('click', function () { // вешаем обработчик клик  // при клике
            let card_id = val.parentNode.parentNode.getAttribute('id'); // получаю id блока cards
            let number = val.getAttribute('data-number'); // Получаем значение атрибута data-number (порядковый номер картинки в альбоме), чтобы знать какую выводить в слайдер

            slider.style.display = 'block';  // Показываем всплывающий слайдер
            
            // Достаем названия фоток для данной категории, чтобы подгрузить их в слайдер
            let xhr = new XMLHttpRequest();
            let link = 'handlers/getPhotos.php?id=' + card_id;
            xhr.open('GET', link); // в GET запросе отправляем id категории фотографий в обработчик
            xhr.send();

            xhr.addEventListener('load', () => {  // когда придет ответ
                let data = JSON.parse(xhr.responseText);  // берем данные из ответа и заносим в массив data
                
                data.forEach( function (val, ind) {
                    let value = `background: url(images/photo/${val}.jpg) no-repeat center center / contain;`;
                    let slide = document.createElement('div');
                    slide.classList.add('carousel-item');
                    if (ind == number) {
                        slide.classList.add('active');
                    }
                    slide.setAttribute('style', value);
                    container.append(slide);
                } );

            });

        });
    } );

    crose.addEventListener('click', function () {
        slider.style.display = 'none';  // Скрываем слайдер
        document.querySelectorAll('.carousel-item').forEach( function (v, i) {
            v.remove();
        } );
    });

});