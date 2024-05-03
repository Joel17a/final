// public/js/starships.js

document.addEventListener("DOMContentLoaded", function() {
    // Hacer una solicitud Ajax a la API de SWAPI para obtener datos de las naves espaciales
    fetch('https://swapi.dev/api/starships/')
        .then(response => response.json())
        .then(data => {
            // Procesar los datos y mostrarlos en la página
            const starshipsList = document.getElementById('starships-list');
            data.results.forEach(starship => {
                const listItem = document.createElement('li');
                listItem.textContent = starship.name;
                starshipsList.appendChild(listItem);
            });
        })
        .catch(error => {
            console.error('Error fetching starships data:', error);
        });
});