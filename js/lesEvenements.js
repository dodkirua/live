let button = document.getElementById("bouton");
let label = document.getElementById("label1");
let input = document.getElementById("input1");
let buttonDelete = document.getElementById("bouton2");

// Ajout évenement (listener) de type click, sur le bouton
button.addEventListener("click",function (){
    console.log("le texte en console");
});



// Ajout évenement (listener) de type mouseenter, sur le input
input.addEventListener("mouseenter", function(){
    label.style.backgroundColor="red";
});
// Ajout évenement (listener) de type mouseleave, sur le input
input.addEventListener("mouseleave", function(){
    label.style.backgroundColor="initial";
});


function buttonClick(){
    this.style.width = "500px";
}

button.addEventListener("click", buttonClick);

// Ajout d'un événement sur le bouton Supprimer Evenement click+ buttonclick() de button
buttonDelete.addEventListener("click", function () {
    button.removeEventListener("click", buttonClick);
});