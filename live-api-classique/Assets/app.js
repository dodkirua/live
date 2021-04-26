/**
 * Populating available schools in student add form.
 */
const form = document.querySelector('#student-add-form form');
const submitButton = form.querySelector('button[type="submit"]');
const schoolsSelect = form.querySelector('select');

let xhr = new XMLHttpRequest();
xhr.onload = function() {
    const schools = JSON.parse(xhr.responseText);
    schools.forEach(school => {
        schoolsSelect.innerHTML += `
            <option value="${school.id}">${school.name}</option>
        `;
    });
}

xhr.open('GET', '/api/schools.php');
xhr.send();

/**
 * Ajout d'un student en base de données.
 */
// Affichage du form d'ajout d'un étudiant.
document.getElementById('student-add-button').addEventListener('click', function() {
    form.parentElement.style.display = 'block';
});

// Sending form.
submitButton.addEventListener('click', function(e) {
    e.preventDefault();
    const firstname = form.querySelector('input[name="firstname"]').value;
    const lastname = form.querySelector('input[name="lastname"]').value;
    let school = form.querySelector('select[name="school"]');
    school = school.options[school.selectedIndex].value;

    if(!firstname || !lastname || !school){
        // TODO Afficher un message plus propre :-)
        console.log("All data are not set");
    }
    else {
        let xhr = new XMLHttpRequest();
        xhr.onload = function () {
            const response = JSON.parse(xhr.responseText);
            if(response.hasOwnProperty('error') && response.hasOwnProperty('message')){
                const div = document.createElement('div');
                div.classList.add('alert', `alert-${response.error}`);
                div.setAttribute('role', 'alert');
                div.innerHTML = response.message;
                document.body.appendChild(div);
            }
        }

        const studentData = {
            'firstname': firstname,
            'lastname': lastname,
            'school': school
        };

        xhr.open('POST', '/api/students.php');
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.send(JSON.stringify(studentData));
    }
});


/**
 * Récupération de la liste des utilisateurs au click du bouton.
 */
let studentListButton = document.getElementById('students-list');
studentListButton.addEventListener('click', function(e) {
    let xhr = new XMLHttpRequest();
    xhr.onload = function() {
        // Les données sont la :-)
        const students = JSON.parse(xhr.responseText);
        const table = document.querySelector('#student-list-content tbody');
        table.innerHTML = '';

        for(let student of students) {
            table.innerHTML += `
                <tr>
                    <td>${student.id}</td>
                    <td>${student.firstname}</td>
                    <td>${student.lastname}</td>
                    <td>${student.school.name}</td>
                    <td>
                        <a class="get-student" href="/api/students?id=${student.id}">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
            `;
        }

        table.parentElement.style.display = 'table';

        /**
         * Récupération de tous les neneuils.
         */
        let eyes = document.getElementsByClassName('get-student');
        for(let eye of eyes) {
            const studentXhr = new XMLHttpRequest();
            eye.addEventListener('click', function(e) {
                // On annule l'action par défaut.
                e.preventDefault();
                studentXhr.onload = function() {
                    const student = JSON.parse(studentXhr.responseText);
                    const divStudent = document.getElementById('student-content');
                    divStudent.innerHTML = `
                        <div class="card w-75 shadow-lg p-3 mb-5 bg-white rounded">
                            <h5 class="card-header">Informations de l'élève</h5>
                              <div class="card-body">
                                <h5 class="card-title">${student.firstname} ${student.lastname}</h5>
                                <p class="card-text">ID: ${student.id}</p>
                                <p class="card-text">Ecole: ${student.school.name}</p>
                                <a href="#" class="btn btn-primary">Supprimer</a>
                                <a href="#" class="btn btn-primary">Modifier</a>
                              </div>
                        </div>
                    `;
                    divStudent.style.display = 'block';
                }

                studentXhr.open('GET', this.href);
                studentXhr.send();
            });
        }
    };

    xhr.open('GET', '/api/students.php');
    xhr.send();
});