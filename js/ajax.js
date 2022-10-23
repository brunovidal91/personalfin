$(document).ready(function(){

    list();
    expMonth();
    expense();
    billedMonth();
    amBilled();
})


$(".form-EntMont").submit(function(e){
    e.preventDefault();

        $.ajax({
            url: 'ent.php',
            type: 'POST',
            data: {
                title: $("#title").val(),
                date: $("#date").val(),
                reco: $("#reco").val(),
                amount: $("#amount").val(),
                obs: $("#obs").val(),
                dif: $("#dif").val(),
                id_user: $('#id_user').val()
            },

            success: (function(result){
                $(".msg").html(result);
                $(".form-EntMont")[0].reset();
                list();
                billedMonth();
                amBilled();

            }),

        });




})

$(".form-Exp").submit(function(e){
    e.preventDefault();

        $.ajax({
            url: 'ent.php',
            type: 'POST',
            data: {
                title: $("#title-Exp").val(),
                date: $("#date-Exp").val(),
                reco: $("#reco-Exp").val(),
                amount: $("#amount-Exp").val(),
                obs: $("#obs-Exp").val(),
                dif: $("#dif-Exp").val(),
                id_user: $('#id_user').val()
            },

            success: (function(result){
                $(".msgExp").html(result);
                $(".form-Exp")[0].reset();
                list();
                expMonth();
                expense();



            }),

        });




})

function list(){
    $.ajax({
        url: 'load.php',

        success: function(result){
            $(".table-container").html(result);
        }
    });
}

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



$('#form-edit-user').on('submit', (e) => {
    e.preventDefault();

    $.ajax({
        url: './edit.php',
        type: 'POST',
        data: {
            name: $('#name').val(),
            lastname: $('#lastname').val(),
            email: $('#email').val(),
            pass1: $('#pass1').val(),
            pass2: $('#pass2').val(),
            id: $('#id').val()
        },

    success: function(result){
            $('.msgEdit').html(result);
            
            if(($('#pass1').val() == $('#pass2').val()) && $('#pass1').val() != "" && $('#pass2').val() != "" ){
                $('#drop').html($('#name').val() + ' ' + $('#lastname').val());
            }
            

        },
    error: function(result){
            $('.msgEdit').html(result);
            $('.msgEdit').css('color', '#ff0000')
        }

    });
});

