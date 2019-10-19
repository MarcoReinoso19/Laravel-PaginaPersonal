function agregarDatos(nombre, email, password){

  cadena ="nombre=" + nombre +
          "&email=" + email +
          "&password" + password;

  $.ajax({
    type:"POST",
    url:"agregarDatos.php",
    data:cadena,
    success:function(r){
      if(r==1){
        alertify.success("Agregado con Exito ");
      }else{
        alertify.error("Fallo el servidor");
      }
    }
  })
}
