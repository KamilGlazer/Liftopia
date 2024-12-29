const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');

function isEmail(email){
    return /\S+@\S+\.\S+/.test(email);
}

function markValidation(element,condition) {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

emailInput.addEventListener('keyup',function () {
    setTimeout( function() {
            markValidation(emailInput,isEmail(emailInput.value));
        }
        ,1000
    );
});
