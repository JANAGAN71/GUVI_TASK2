$(document).ready(function(){
    $('#login-form').submit(function(event){
        event.preventDefault();

        var email = $('#email').val();
        var pass = $('#pass').val();
        $user = localStorage.getItem('email');
localStorage.getItem('email');
localStorage.getItem('pass');
localStorage.setItem('email', email);
localStorage.setItem('pass', pass);

        $.jax({
            url: 'http://localhost/GUVI/php/login.php',
            type:'POST',
            data:{email_id: email, password: pass},
            success: function(response){
                
                if(response == "success"){
                    $('#message').text("Login Successful");
                }
                else{
                    $('#message').text("Invalid username or passoword.");
                }
            },
            error: function(){
                $('#message').text("An error occured while processing.");
            }
        });
    });

});