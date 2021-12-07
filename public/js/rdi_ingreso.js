console.log("Js Ingreso")
document.querySelector("#btn_usuario").addEventListener("click", ()=>{
    //Variable del nombre de usuario
   let usuario_id = document.querySelector("#usuario_nombre").value;
   console.log(usuario_id);

   let usuario_pass_id = document.querySelector("#usuario_pass").value;
   console.log(usuario_pass_id);
});