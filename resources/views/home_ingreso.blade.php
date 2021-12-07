<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  </head>
  <body>
    <main class="container-fluid">
      <div class="text-center pt-5">

        <img src="img/logo.png" class="img-fluid" alt="" >

      </div>
        

      

        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="col-12 col-md-12 col-lg-12">
                <form>
                    <div class="mb-3">
                      <label for="usuario_nombre" class="form-label">Nombre de Usuario</label>
                      <input type="text" class="form-control" id="usuario_nombre">
                    </div>
                    <div class="mb-3">

                      <label for="usuario_pass" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="usuario_pass">

                    </div>
                    <div class="text-center">

                    <button type="button" id="btn_usuario" class="btn btn-danger">Ingresar</button>
                
                    <a type="button" href="{{route("rdi_registro")}}" class="btn btn-danger">Registrarse</a>
                    
                    </div>
                  </form>
            </div>
            
        </div>

    </main>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- codigo personal -->
    <script src="{{asset('js/rdi_ingreso.js')}}"></script>
  </body>
</html>