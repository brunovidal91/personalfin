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