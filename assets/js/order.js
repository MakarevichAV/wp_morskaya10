window.addEventListener('load', function () {
    
    let inputs = document.querySelectorAll('#order-form input'),
        button = document.querySelector("input[type='submit']"),
        redTxt = document.querySelector('.red-txt');

    button.addEventListener('click', function(event) {
        inputs.forEach( function (v, i) {
            if (v.value == "" && i < inputs.length - 2) {
                event.preventDefault();
                v.style.border = '2px solid tomato';
                redTxt.style.display = 'block';
            }
        } );
    });

    inputs.forEach( function (v, i) {
        v.addEventListener( 'click', () => {
            if (i != inputs.length - 1) {
                v.style.border = '2px solid #4b81b7';
                redTxt.style.display = 'none';
            }
        } );
    } );

});