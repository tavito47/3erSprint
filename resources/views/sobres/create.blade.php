
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/editor.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/editor.css">
	
</head>
<header class="p-3 bg-custom text-white">
            
	<div class="container">
		<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
				<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
					<use xlink:href="#bootstrap"></use>
				</svg>
			</a>

			<ul class="nav col-10 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
				<li><a href="{{url('/pliegos')}}" class="nav-link px-2 text-blue">P-Especificacion</a></li>
				<li><a href="/convocatoria" class="nav-link px-2 text-blue">Convocatoria</a></li>
				<li><a href="{{url('/grupoempresa')}}" class="nav-link px-2 text-blue">Grupo-Empresa</a></li>
				<li><a href="{{url('/planificacion')}}" class="nav-link px-2 text-blue">Grupo-Empresa</a></li>
				<li><a href="#" class="nav-link px-2 text-blue">Calendario</a></li>
				<li><a href="#" class="nav-link px-2 text-blue">Contactos</a></li>
			</ul>

			<!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
				<input type="search" class="form-control form-control-dark" placeholder="Buscar..."
					aria-label="Search">
			</form> -->

			<div class="text-end">
				<button type="button" class="btn btn-warning">Iniciar Sesion</button>
				<button type="button" class="btn btn-warning">Registrase</button>
			</div>
		</div>
	</div>
</header>


    <body>
        
        <div class="container">
            <div class= "row">
            
        
                <form action= "{{ route('sobres.store') }}" method="POST" enctype="multipart/form-data" >
                    
                    @csrf

                                        
					<h2 class="text-center p-2">Fase de Publicaciones</h2>
					<div class="container">
						<div class= "row">
							<div class="row g-2">
								<div class="col-md" >
									<label for="exampleFormControlTextarea1" class="form-label">SOBRE "A"</label>
							        <div class="" >
						
						             <textarea class="form-control" name="sobreA" id="exampleFormControlTextarea1" rows="19"></textarea>

                                    </div>
    
					            </div>
						
                                <div class="col-md">
                                    <label for="exampleFormControlTextarea1" class="form-label">SOBRE "B"</label>
                                    <div class="">
                                        
                                        <textarea class="form-control" name="sobreB" id="exampleFormControlTextarea1" rows="19"></textarea>
                                    </div> 
                                </div>
                            </div>
				        </div>
			
		
                        <div >
                            <label for="exampleFormControlTextarea1" class= "row" class="form-label">FECHAS DE PRESENTACION</label>
                            <input class="form-control" name="fecha" style="justify-content: center;"id="exampleFormControlTextarea1" rows="1"></input>
                            
                        </div>
		
                        <div class="d-grid gap-2 col-3 mx-auto mt-4">
                            <button class="btn btn-primary" type="submit" >Publicar </button>
                            
                        </div>
        

                        <footer class="my-2 pt-5 text-muted text-center text-small">
                            <p class="mb-1">© 2021 Company B.Tec_TIS</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#">Privacy</a></li>
                                <li class="list-inline-item"><a href="#">Terms</a></li>
                                <li class="list-inline-item"><a href="#">Support</a></li>
                            </ul>
                        </footer>                 
                        
                    </div>
            	</form>
        	</div>
    	</div>
	
	</body>
</html>