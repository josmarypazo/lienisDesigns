window.addEventListener("load", function() {
  var nombre = document.querySelector("[name=fullName]");
  var user = document.querySelector("[name=user]");
  var birthdate = document.querySelector("[name=birthdate]");
  var email = document.querySelector("[name=email]");
  var password = document.querySelector("[name=password]");
  var repassword = document.querySelector("[name=password_confirmation]");
  var country = document.querySelector("[name=country]");
  var state = document.querySelector("[name=state]");
  var avatar = document.querySelector("[name=avatar]");

  document.querySelector(".form").addEventListener("submit", function(event) {
    if(nombre.value == ""){
      event.preventDefault()
      return alert("Completa el campo Nombre Completo, por favor");
    } if(user.value == ""){
      event.preventDefault()
      return alert("Completa el campo Nombre de Usuario, por favor");
    } if(birthdate.value == ""){
      event.preventDefault()
      return alert("Completa el campo Fecha de Nacimiento, por favor");
    } if(email.value == ""){
      event.preventDefault()
      return alert("Completa el campo E-mail, por favor");
    } if(password.value == ""){
      event.preventDefault()
      return alert("Completa el campo Contraseña, por favor");
    } if(repassword.value == ""){
      event.preventDefault()
      return alert("Completa el campo Repetir Contraseña, por favor");
    } if(country.value == "Elige un país"){
      event.preventDefault()
      return alert("No eligiste ningún país");
    } if(state.value == "Elige una ciudad"){
      event.preventDefault()
      return alert("No eligiste ninguna provincia de Argentina");
    } if(avatar.value == ""){
      event.preventDefault()
      return alert("No seleccionaste ningún archivo de tipo Imagen de Perfil");
    }
    
  })
});
