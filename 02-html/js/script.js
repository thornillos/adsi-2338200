var username = document.getElementById('username');
const question = prompt("What's your user name ?");
if (question) {
    username.innerText = "Welcome: " + question;
} else {
    username.innerText = "Welcome: Guess";
}