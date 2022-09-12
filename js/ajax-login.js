
/*$("#form-login").on('submit', (e) => {
    e.preventDefault();

    $.ajax({
        url: 'secure.php',
        type: 'POST',
        data: {
            email: $('#email').val(),
            pass: $('#pass').val()
        },

        error: function(result){
            $('.msg').html(result);
        }
    });
})*/


$("#form-recovery").on('submit', (e) => {
    e.preventDefault();

    $.ajax({
        url: './recovery.php',
        type: 'POST',
        data: { emailRec: $('.emailRec').val(),
        },

        success: function(result){
            $('.msg-recovery').html(result);
        },

        error: function(result){
            $('.msg-recovery').html(result);
        }
    
    
    });
})