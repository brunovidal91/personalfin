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
                dif: $("#dif").val()
            },

            success: (function(result){
                $(".msg").html("Insert success!");
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
                dif: $("#dif-Exp").val()
            },

            success: (function(result){
                $(".msgExp").html("Insert success!");
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