function validation() {
    var first_name, last_name, phone, email, expresion;
    first_name = document.getElementById("first_name").value;
    last_name = document.getElementById("last_name").value;
    phone = document.getElementById("phone").value;
    email = document.getElementById("email").value;
    expresion = /\w+@\w+\.+[a-z]/;
    if (first_name === "") {
        alert("El campo nombre es obligatorio");
        return false;
    } else if (last_name === "") {
        alert("El campo apellido es obligatorio");
        return false;
    } else if (phone === "") {
        alert("El campo teléfono es obligatorio");
        return false;
    } else if (email === "") {
        alert("El campo correo electronico es obligatorio");
        return false;
    } else if (first_name.length > 18) {
        alert("Nombre no debe llevar más de 18 caracteres");
        return false;
    } else if (last_name.length > 18) {
        alert("Apellido no debe llevar más de 18 caracteres");
        return false;
    } else if (phone.length > 10) {
        alert("Teléfono no debe llevar más de 10 caracteres");
        return false;
    } else if (email.length > 25) {
        alert("Coreo electronico no debe llevar más de 25 caracteres");
        return false;
    } else if (isNaN(phone)) {
        alert("El Teléfono ingresado contiene alguna letra, o el número no es valido");
        return false;
    } else if (!expresion.test(email)) {
        alert("El formato del correo electronico no es valido");
        return false;
    }
}