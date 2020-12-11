let elements = document.getElementsByTagName("p");
console.log(elements);


/**
 * Génère un id HTML
 * @param basename
 * @param paragraphe
 * @param index
 */
function loadID(basename, paragraphe, index){
    paragraphe.id = basename + index;
}

for(let x=0; x < elements.length ; x++) {
    loadID("id-", elements.item(x) , x);
}

for (let element of elements){

}