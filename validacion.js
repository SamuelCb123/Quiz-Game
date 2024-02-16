"use strict";

const nombre = document.getElementById("nombre");
const contraseña = document.getElementById("contrasena"); // Corrección aquí
const email = document.getElementById("email");
const form = document.getElementById("form");
const parrafo = document.getElementById("warnings");

form.addEventListener("submit", e => {
    e.preventDefault(); 
    let warnings = "";
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
    parrafo.innerHTML = ""; 

    if (!nombre.value || nombre.value.length < 3) {
        warnings += `El nombre es obligatorio y debe tener al menos 3 caracteres <br>`;
    } else if (!/^[a-zA-Z]+$/.test(nombre.value)) {
        warnings += `El nombre solo debe contener letras <br>`;
    }

    if (!contraseña.value) {
        warnings += `La contraseña es obligatoria <br>`;
    }

    if (!email.value || !regexEmail.test(email.value)) {
        warnings += `El email es obligatorio y debe tener un formato válido <br>`;
    }

    if (warnings !== "") {
        parrafo.innerHTML = warnings; 
    } else {
        
        form.submit(); 
    }
});
