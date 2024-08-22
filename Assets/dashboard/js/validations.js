//Funcion de casas
hacerClic = document.getElementById("container");
hacerClic.addEventListener('click', function (event) {
    id = event.target.getAttribute("id");
    if (id === "submit-house") {
        validar_house();
    }
});

function validar_house() {
    house_name = document.getElementById('house_name').value;
    event.preventDefault();
    if (house_name === "") {
        swal({
            title: "Verifique el campo Nombre de la Casa",
            text: "El Nombre de la Casa NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('house_name').focus();
            });
    } else {
        swal({
            title: "Nueva Casa Creada",
            text: "La casa se ha creado con éxito",
            icon: "success",
            button: "Aceptar",
        }).then((result) => {
            if (result) {
                document.form_house.submit();
            }
        });
    }
}

//Fncion de lugares
hacerClic = document.getElementById("container");
hacerClic.addEventListener('click', function (event) {
    id = event.target.getAttribute("id");
    if (id === "submit-place") {
        validar_place();
    }
});

function validar_place() {
    place_name = document.getElementById('place_name').value;
    event.preventDefault();
    if (place_name === "") {
        swal({
            title: "Verifique el campo Nombre del Lugar",
            text: "El Nombre del Lugar NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('place_name').focus();
            });
    } else {
        swal({
            title: "Nuevo Lugar Creado",
            text: "El lugar se ha creado con éxito",
            icon: "success",
            button: "Aceptar",
        }).then((result) => {
            if (result) {
                document.form_place.submit();
            }
        });
    }
}
