let lukKnap = document.querySelector(".popupCloseButton");
let plugin = document.querySelector(".login-form");

lukKnap.addEventListener("click", myFunction);

function myFunction(){
   plugin.style.display= "none"; 
}