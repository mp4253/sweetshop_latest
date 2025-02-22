document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("loginForm").addEventListener("submit", login);
});

function login(event) {
    event.preventDefault();

    var username = document.getElementById("user_name").value;
    var password = document.getElementById("pass_word").value;

    if (username === "meet" && password === "1234") {
        alert("Login successfully.");
        setTimeout(function(){
            window.location.href = "./home.html";
        }, 1000);
    } else {
        alert("Login failed");
    }
}
