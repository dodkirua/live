// Obtenton d'informations.
const xhr = new XMLHttpRequest();
xhr.onload = function() {
    let contenu = JSON.parse(xhr.responseText);

    let pMessage = document.createElement('p');
    let spanUser = document.createElement('span');

    pMessage.innerHTML = contenu.message;
    spanUser.innerHTML = contenu.user + ' ' + contenu.profile.address + ' ' + contenu.profile.sex;

    document.body.appendChild(pMessage);
    document.body.appendChild(spanUser);
};

xhr.open("GET", "/api-obtention-get.php");
xhr.send();

// Envoi informations
const xhrEnvoi = new XMLHttpRequest();
xhrEnvoi.onload = function() {
    let contenu = JSON.parse(xhrEnvoi.responseText);
    console.log(contenu.resp);
};

let body = {
    message: 'Hello',
    user: 'Doe Jane'
}

xhrEnvoi.open("POST", "/api-envoi.php");
xhrEnvoi.send(JSON.stringify(body));