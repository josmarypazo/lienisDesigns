window.addEventListener("load", function() {
    var formulario = document.querySelector('.validacion');

    var campos = Array.from(formulario.elements);

    campos.pop();

    var errores= {};

    campos.forEach(function (campo) {
        // div del error
        var divError = null;

        // si el type del campo no tiene valor file, le asignaremos el mensaje de error a su elemento hermano menor.
        // De lo contario pasaremos al padre y de su padre, el hermano menor. 
        if (campo.type !== 'file') {
            divError = campo.nextElementSibling;
        } else {
            divError = campo.parentElement.nextElementSibling;
        } 
        
        campo.addEventListener('blur', function () {
            var valor = campo.value.trim();

            if (valor === '') {
                this.classList.add('is-invalid');
                divError.style.display = 'block';
                divError.innerText = `Este campo no puede quedar vacío.`;
    
                // Sumar una key al objeto de errores
                errores[this.name] = true;
            } else {
                // Si no está vacío revierto lo anterior
                this.classList.remove('is-invalid');
                divError.style.display = 'none';
                divError.innerText = '';
    
                // Si no hay error elimino la key en el objeto de errores
                delete errores[this.name];

            }

        });

        if (campo.name === 'image') {
            campo.addEventListener('change', function () {
                // obtenemos el nombre del archivo
                var nombreArchivo = this.value.split('\\').pop();
                this.nextElementSibling.innerText = nombreArchivo
    
                // sacamos la extensión del archivo
                var extensionArchivo = this.value.split('.').pop();
    
                // Array de extensiones permitidas
                var extensionesAceptadas = ['jpg', 'jpeg', 'png'];

               // Buscamos la extension en el array de extensiones permitidas. Si no lo encuentra, retorna undefined
                var extensionEncontrada = extensionesAceptadas.find(function (ext) {
                    return ext === extensionArchivo;
                });
    
                // Si no encuentra la extensión, habilitamos el divError y mostramos un error.
                if (extensionEncontrada === undefined) {
                    this.classList.add('is-invalid');
                    divError.style.display = 'block';
                    divError.innerText = 'Formato inválido. Los formatos soportados son jpg, jpeg y png';

                    errores[this.name] = true;
                }
                // Caso contrario deshabilitamos el divError y mostramos un texto vacío.
                 else {
                    this.classList.remove('is-invalid');
                    divError.style.display = 'none';
                    divError.innerText = '';
    
                    delete errores[this.name];
                }
            })
        }
    });

    formulario.addEventListener('submit', function (event) {
        campos.forEach(function (campo) {
            var valorFinal = campo.value.trim();
    
            if (valorFinal === '') {
                errores[campo.name] = true;
            }
        });
    
        if (Object.keys(errores).length > 0) {
            alert('¡Hay campos vacíos! Por favor, completar.');
            console.log(errores);
            event.preventDefault();
        }
    })

});