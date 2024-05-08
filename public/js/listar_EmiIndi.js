fetch('/emisionesIndi')
    .then(response => response.json())
    .then(data =>{
        const select = document.getElementById('emiIndi');

        data.forEach(emis => {
            const option = document.createElement('option');
            option.value = emis.nombre;
            option.textContent = emis.nombre;
            select.appendChild(option);
        })
    })