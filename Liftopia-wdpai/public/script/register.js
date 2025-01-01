const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const passwordInput = form.querySelector('input[name="password"]');
const firstNameInput = form.querySelector('input[name="name"]');
const lastNameInput = form.querySelector('input[name="surname"]');
const dateOfBirthInput = form.querySelector('input[name="dateOfBirth"]');
const nickNameInput = form.querySelector('input[name="nickname"]');

function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function isPassword(password) {
    return password.length >= 5;
}

function isValidName(name) {
    return /^[A-Za-z]+$/.test(name) && name.length > 0;
}

function isValidNickname(nickname) {
    return /^[A-Za-z]+$/.test(nickname) && nickname.length > 0;
}

function isAtLeast16(dateOfBirth) {
    const birthDate = new Date(dateOfBirth);
    const today = new Date();

    const age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();
    const dayDiff = today.getDate() - birthDate.getDate();

    return (
        age > 16 ||
        (age === 16 && (monthDiff > 0 || (monthDiff === 0 && dayDiff >= 0)))
    );
}

function markValidation(element, condition, errorMessageText) {
    const errorMessage = element.nextElementSibling;

    if (!condition) {
        element.classList.add('no-valid');
        errorMessage.textContent = errorMessageText;
    } else {
        element.classList.remove('no-valid');
        errorMessage.textContent = '';
    }
}

emailInput.addEventListener('input', function () {
    markValidation(emailInput, isEmail(emailInput.value));
});

passwordInput.addEventListener('input', function () {
    markValidation(passwordInput, isPassword(passwordInput.value));
});

firstNameInput.addEventListener('input', function () {
    markValidation(firstNameInput, isValidName(firstNameInput.value));
});

lastNameInput.addEventListener('input', function () {
    markValidation(lastNameInput, isValidName(lastNameInput.value));
});

dateOfBirthInput.addEventListener('input', function () {
    markValidation(dateOfBirthInput, isAtLeast16(dateOfBirthInput.value));
});

dateOfBirthInput.addEventListener('input', function () {
    markValidation(nickNameInput, isValidNickname(nickNameInput.value));
});