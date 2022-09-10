const menu1 = document.querySelector("#menu1");
const menu2 = document.querySelector("#menu2");
const submenu1 = document.querySelector("#submenu1");
const submenu2 = document.querySelector("#submenu2");
const sinal1 = document.querySelector(".sinal1");
const sinal2 = document.querySelector(".sinal2");
const entradaAvulsa = document.querySelector("#entradaAvulsa");
const modal = document.querySelector(".modalEntMont");
const closebutton = document.querySelector(".closebutton");
const modalExp = document.querySelector(".modalExp");
const closebuttonExp = document.querySelector(".closebuttonExp");
const despesaAvulsa = document.querySelector("#despesaAvulsa");
const dropUserMenu = document.querySelector('#drop');
const modalUser = document.querySelector('.modalUser');
const editUserButton = document.querySelector('.editUserButton');
const modalEditUser = document.querySelector('.modalEditUser');
const closeButtonUser = document.querySelector('.closeButton-edit-user');

menu1.addEventListener('click', () => {
    submenu1.classList.toggle("active");


});

menu2.addEventListener('click', () => {
    submenu2.classList.toggle("active");
});


entradaAvulsa.addEventListener('click', () => {
    modal.style.display = "block";
});

closebutton.addEventListener('click', () => {
    modal.style.display = "none";
    menu1.click();
});


despesaAvulsa.addEventListener('click', () => {
    modalExp.style.display = "block";
});

closebuttonExp.addEventListener('click', () => {
    modalExp.style.display = "none";
    menu2.click();
});

dropUserMenu.addEventListener('click', () => {
    modalUser.classList.toggle('activeModal');
    
});

editUserButton.addEventListener('click', ()=>{
    modalEditUser.style.display = 'flex';
    modalUser.classList.remove('activeModal')
});

closeButtonUser.addEventListener('click', ()=>{
    modalEditUser.style.display = 'none';
});
