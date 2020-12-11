let resultatP = document.getElementById("resultat");
let testStringP = document.getElementById("testString");

resultatP.innerHTML = "Mon paragraphe contient "+ testStringP.innerHTML.length + " caractères";
let test = testStringP.innerHTML.trim().toLowerCase();
if (testStringP.innerHTML.trim().toLowerCase().startsWith("lorem")){
    let span = document.createElement("span");
    span.innerHTML= "le texte de mon choix, je ne sais pas quoi mettre dedans !";
    testStringP.prepend(span);
}

if (test.endsWith("?")){
    //testStringP.querySelector("span").remove();
    //testStringP.removeChild(testStringP.querySelector("span"));
    //testStringP.removeChild((testStringP.firstElementChild));
    testStringP.removeChild(testStringP.firstChild);
}
