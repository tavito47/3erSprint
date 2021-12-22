<!DOCTYPE html>
<html lang="en">

      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Listado</title>
      </head>
      
<header class="p-3 bg-custom text-white">
            
  <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                  <use xlink:href="#bootstrap"></use>
              </svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{url('/pliegos')}}" class="nav-link px-2 text-blue">P-Especificacion</a></li>
                    <li><a href="/convocatoria" class="nav-link px-2 text-blue">Convocatoria</a></li>
                    <li><a href="{{url('/grupoempresa')}}" class="nav-link px-2 text-blue">Grupo-Empresa</a></li>
                    <li><a href="#" class="nav-link px-2 text-blue">Calendario</a></li>
                    <li><a href="#" class="nav-link px-2 text-blue">Contactos</a></li>
          </ul>
          
          <div class="text-end">
              <button type="button" class="btn btn-warning">Iniciar Sesion</button>
              <button type="button" class="btn btn-warning">Registrase</button>
          </div>
      </div>
  </div>
</header>
  <body>
    <h2 class="text-center p-2">Contratos enviados por Grupo_Empresa</h2>
      <table class="table table-bordered">
      <thead>
          <tr>
            <th scope="col">#</th>
            
            <th scope="col">Nombre de Grupo-Empresa</th>
            
            <th scope="col">Representante legal</th>
            
            <th scope="col">Creado</th>

            <th scope="col">Documento</th>
   
          </tr>
        </thead>
        <tbody>
          <?php $i=0;
              
              ?>
            @foreach ($contratos as $item)
              
              <tr>
                  <td><?php  $i++;echo $i ;?></td>
                  
                  <td>{{@$item->nombre}}</td>
                  
                  <td>{{@$item->representante}}</td>
                  
                  <td>{{@$item->created_at}}</td>
                  
                  <!-- <td>
                      
                      
                      <form action="{{ route('convocatoria.destroy',$item->id) }}" method="POST">
                        <a href="{{ route('convocatoria.edit',$item->id)}}" class="btn btn-white btn-sm" ><i class="fas fa-edit"></i> </a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-white btn-sm"><i class="fas fa-trash-alt"></i></button>
                       </form>
                  </td> -->
                  
                  <td>
                    
                  <a href= "{{@$item->PathFile}} " class="btn btn-danger" target="_blank">Ver Documento</a>
                  
                  

                </td>
              </tr>
            @endforeach
            
            

        </tbody>

      </table>
          <!-- <div>
            <a class="btn btn-danger" href="{{ route('contrato.create') }}" target="blank_">RegistrarNuevo</a>
          </div> -->
                
    </body>
</html>