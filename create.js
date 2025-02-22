document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("createAccountForm").addEventListener("submit", psp);
});

    function psp(event) {

    event.preventDefault();

    var user = document.getElementById("first_field").value.trim();
    var email_enter = document.getElementById("second_field").value.trim();
    var pass_enter = document.getElementById("third_field").value.trim();
    var confirm_pass_enter = document.getElementById("fourth_field").value.trim();
    
    if(user == "" || email_enter == "" || pass_enter == "" || confirm_pass_enter == ""){
        
        if(user === ""){
            alert("Please fill the username.");
            return;
        }

        else if(email_enter === ""){
            alert("Please fill the email.");
        }
        else if(pass_enter === ""){
            alert("Please fill the password.");
        }
        else if(confirm_pass_enter === ""){
            alert("Please enter the password again.");
        }
    }
    
    else{
        alert("Thank You for creating your account.");

        setTimeout(function() {
            window.location.href = "./index.html"; 
        }, 1000);
    }

}