const menu1 = document.querySelector("#menu1");
const menu2 = document.querySelector("#menu2");
const submenu1 = document.querySelector("#submenu1");
const submenu2 = document.querySelector("#submenu2");
const sinal1 = document.querySelector(".sinal1");
const sinal2 = document.querySelector(".sinal2");
const entradaAvulsa = document.querySelector(".singleProfit");
const modal = document.querySelector(".modalEntMont");
const closebutton = document.querySelector(".closebutton");
const modalExp = document.querySelector(".modalExp");
const closebuttonExp = document.querySelector(".closebuttonExp");
const despesaAvulsa = document.querySelector(".singleExpenditure");
const dropUserMenu = document.querySelector('#drop');
const modalUser = document.querySelector('.modalUser');
const editUserButton = document.querySelector('.editUserButton');
const modalEditUser = document.querySelector('.modalEditUser');
const closeButtonUser = document.querySelector('.closeButton-edit-user');
const mobileMenu = document.querySelector('.mobile-menu');
const modalMobile = document.querySelector('.modalMobile');
const editUserButtonMobile = document.querySelector('.editUserButtonMobile');
const despesaAvulsaMobile = document.querySelector(".singleExpenditureMobile");
const entradaAvulsaMobile = document.querySelector(".singleProfitMobile");
const deleteLink = document.querySelector('#delete');
const editLink = document.querySelector('#edit');





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

editUserButton.addEventListener('click', () => {
    modalEditUser.style.display = 'flex';
    modalUser.classList.remove('activeModal')
});

closeButtonUser.addEventListener('click', () => {
    modalEditUser.style.display = 'none';
});

mobileMenu.addEventListener('click', () => {
    modalMobile.classList.toggle('activeMobileModal');
});

editUserButtonMobile.addEventListener('click', () => {
    modalEditUser.style.display = 'flex';
});

despesaAvulsaMobile.addEventListener('click', () => {
    modalExp.style.display = 'block';
    modalMobile.classList.toggle('activeMobileModal');
});

entradaAvulsaMobile.addEventListener('click', () => {
    modal.style.display = 'block';
    modalMobile.classList.toggle('activeMobileModal');
});


function expMonth(){
    $.ajax({
        url: 'expMonth.php',

        success: function(result){
            $(".expMonth").html(result);
        }
    });
}

function expense(){
    $.ajax({
        url: 'expense.php',
        
        success: function(result){
            $(".amExpMonth").html(result);
        }
    });
}

function billedMonth(){
    $.ajax({
        url: 'billedMonth.php',

        success: function(result){
            $(".billedMonth").html(result);
        }
    });
}

function amBilled(){
    $.ajax({
        url: 'amBilled.php',

        success: function(result){
            $(".amBilled").html(result);
        }
    });
}
 

function list(){
    $.ajax({
        url: 'load.php',
        success: function(result){
            $('.table-container').html(result)
        }
    })
}

function exc(id){
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: {id: id},
        success: function(){
            list();
            expense();
            expMonth();
            amBilled();
            billedMonth();

        }
    })
}

function deleteItem(id, name){
   const resp = confirm("Do you really want to delete this item:\n--- " + name + " --- ?");

    if(resp == true){
        exc(id);

    }
}

/*
document.onclick = function(e) {
    if(e.target.id !== 'modalMobile' && e.target.id !== 'mobile-menu'){
        modalMobile.classList.remove('activeMobileModal')
    }
};*/

