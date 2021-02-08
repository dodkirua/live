let div1= document.getElementById("premierDiv");
let div2 = document.getElementById("secondDiv");

// le premier objectif ser ade créer un nouvel élément <span> et de la'jouter au premier div
let nouveauSpan = document.createElement("span"); // phase 1 ==> je crée l'élément.
nouveauSpan.id = "jsAjout"; // je lui ajoute une Id.
nouveauSpan.className= "spanBackground"; // Eventuellement je lui rajoute une classe
nouveauSpan.classList.add("spanTextColor"); // Ajoute une classe css ( utilise si une autre classe a deja été donnée pour ne pas supprimer celle qui existe déja ).
nouveauSpan.classList.remove("blabla");// Supprime une classe css de la liste des classes de l'élément
nouveauSpan.innerHTML="quelque chose a mettre";

// Phase 2 ==> je le place le bon parent.

//div1.append(nouveauSpan); // ajoute à la fin du parent
//div1.prepend(nouveauSpan); // ajoute au debut
let p2= document.getElementById("p2");
div1.insertBefore(nouveauSpan, p2);



// Je veux une fonction qui crée TOUT le temps un span on pourra juste lui donner en paramètre l'ID qu'on lui donnera.

function createSpanElement(id, text, parent) {
    let element = document.createElement("span");
    element.id = id;
    element.innerHTML = text;
    parent.append(element);
}

createSpanElement("lesGeeks","Mon nouveau span !",div1);
createSpanElement("lesStudent","JS c'est cool !",div2);
createSpanElement("lesStudent","JS c'est cool, pour sur !",document.body);