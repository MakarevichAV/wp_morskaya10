window.addEventListener('load', function () {

    // Клик по вопросу и раскрытие/скрытие ответа
    $('.faq-quest').click( function () {
        let faqItem = $(this).parent('.faq-item');
        if (!faqItem.hasClass('active')) {
            faqItem.addClass('active');
        } else {
            faqItem.removeClass('active');
        }
    } );

});