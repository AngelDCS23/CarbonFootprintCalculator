fetch('/emisiones')
    .then(response => response.json())
    .then(data => {
        const select = document.getElementById('tipo');
        const selectSubtipo = document.getElementById('subtipo')

        data.forEach(emision => {
            const option = document.createElement('option');
            option.value = emision.Nombre;
            option.textContent = emision.Nombre;
            select.appendChild(option);
        });

        // Agregar evento change al select
        select.addEventListener('change', function() {
            // Obtener el nombre seleccionado
            const selectedNombre = this.value;

            // Buscar el objeto con el nombre seleccionado en los datos
            const selectedObj = data.find(emision => emision.Nombre === selectedNombre);

            // Obtener el id asociado al nombre seleccionado
            const selectedId = selectedObj ? selectedObj.id : null;
            // Realizar una solicitud AJAX para obtener los subtipos
            console.log('Token CSRF:', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

            fetch('/subtipos', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ id: selectedId }) //Enviar el id seleccionado al controlador
            })
            .then(response => response.json())
            .then(data => {
                data.forEach(subtipo => {
                    const option = document.createElement('option');
                    option.value = subtipo.Nombre;
                    option.textContent = subtipo.Nombre;
                    selectSubtipo.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error al obtener los subtipos:', error);
            });
        });

    })
    .catch(error => {
        console.error('No llega el json con los valores', error);
    });
