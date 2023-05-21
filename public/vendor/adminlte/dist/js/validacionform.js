function validateAndSubmitForm() {
    let inputs = document.querySelectorAll('#updateForm input[required]');
    let allFilled = true;

    inputs.forEach(input => {
        if(input.value.trim() === '') {
            input.classList.add('is-invalid');
            allFilled = false;
        } else {
            input.classList.remove('is-invalid');
        }
    });

    if(allFilled && confirm("¿Estás seguro de que deseas guardar los cambios?")) {
        document.getElementById("updateForm").submit();
    } else {
        alert('Por favor, llena todos los campos requeridos en rojo.');
    }
}