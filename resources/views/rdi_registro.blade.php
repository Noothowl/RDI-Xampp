<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    

  </head>
  <body>
    <main class="container-fluid">
      <div class="text-center pt-5">
      <img src="img/logo.png" alt="">

      </div>
      

      <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5">

        <div class="card mt-5 border-danger " style="width: 50rem;">

          <div class="card-header text-center">
            <h2>Registro de Usuarios</h2>
  
          </div>
  
          <div class="card-body">
            <label class="form-label" for="usuario_nombre">Nombre </label>
            <input class="form-control" type="text" id="usuario_registro_nombre">

            <label class="form-label" for="usuario_apellido">Apellido </label>
            <input class="form-control" type="text" id="usuario_registro_apellido">

            <label class="form-label" for="usuario_rut">Rut </label>
            <input class="form-control" type="text" id="usuario_registro_rut">
            <small class="form-text text-muted">Ejemplo: 19158375-5 </small>

            

            <div class="pt-3">
              <label for="usuario_registro_especialidad" class="form-label">Seleccione Especialidad</label>
              <select class="form-select" id="usuario_registro_especialidad">
                <option value="calculista">Calculista</option>
                <option value="ingeniero">Ingeniero</option>
                <option value="arquitecto">Arquitecto</option>
                <option value="prevencionista">prevencionista de riesgos</option>
              </select>
            </div>

            

  
          </div>
  
          <div class="card-footer">
            <div class="pt-3 text-center">

            <button type="button" id="btn_registro" class="btn btn-danger">Registrar</button>

            </div>
          </div>
  
  
        </div>
      </div>
      
      
      
    </main>

    

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/rdi_registro.js"></script>
  </body>
</html>