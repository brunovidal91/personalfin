
const closeModalRecovery = document.querySelector('.closeModalRecovery');
const modalRecovery = document.querySelector('.modalRecovery');
const forgotPass = document.querySelector('.f-pass');

forgotPass.addEventListener('click', () => {
    modalRecovery.style.display = "flex";
});

closeModalRecovery.addEventListener('click', () => {
    modalRecovery.style.display = "none";
});