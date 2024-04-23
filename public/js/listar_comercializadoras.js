fetch('/comercializadoras')
    .then(response => response.json())
    .then(data =>{
        const select = document.getElementById('comerci');

        data.forEach(comer => {
            const option = document.createElement('option');
            option.value = comer.Comercializadora;
            option.textContent = comer.Comercializadora;
            select.appendChild(option);
        })
    })