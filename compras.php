<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Programacion Web</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/LogoSoftPNG.png" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html"><img src="assets/logo upt.png" alt="" height="50%" width="30%"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">

                        <!--modificar-->
                        <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="compras.php">Ventas</a></li>
                        <li class="nav-item"><a class="nav-link" href="ModeloVistaControlador.html">MVC</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Compras</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5"></p>
                        <a class="btn btn-primary btn-xl" href="#services">ver</a>
                    </div>
                </div>
            </div>
        </header>



        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">
                <hr class="divider" />

                <h1 class="text-center mt-0">Base de datos Compras Tabla Tienda</h1>
    <?php
        //Este es el bueno
        
        //Se incluye libreria
        require 'conexion.php';
        //Declaracion de variables con sus repectivas consultas
        $sqlconsulta="select * from tienda";
        //Se declara varible y se asigna valor
        $salida=mysqli_query($conexion, $sqlconsulta);

    ?>
    <div class="text-center mt-0">
    <h2>Venta Online</h2><br>
        <form action="insertar.php" method="POST" >
            <label>ID PRODUCTO</label><br>
            <input type="text" name="id_producto" value=""><br>

            <label>PRODUCTO</label><br>
            <input type="text" name="producto" value=""><br>

            <label>PRECIO</label><br>
            <input type="text" name="precio" value=""><br>

            <label>CANTIDAD</label><br>
            <input type="text" name="cantidad" value=""><br><br><br>

            <input type="submit" name="" value="Insertar" class="btn btn-primary btn-block">
        </form>
    </div>


    
<div id="imp1">
	<div style="background-color:#d4eefd;padding:12px;margin:12px 0 12px 0;">
	
<div class="container mt-5"><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID_PRODUCTO</th>
                    <th scope="col">PRODUCTO</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">CANTIDAD</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($filas=mysqli_fetch_array($salida)){
            ?>
            <tr>
                <td scope="col"><?php echo $filas['id_producto']?></td>
                <td scope="col"><?php echo $filas['producto']?></td>
                <td scope="col"><?php echo $filas['precio']?></td>
                <td scope="col"><?php echo $filas['cantidad']?></td>
                <td>
                   
                </td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>

	</div>
</div>
<button type="button" onclick="javascript:imprim1(imp1);" class="btn btn-primary btn-xl">Imprimir</button>


<script>
function imprim1(imp1){
var printContents = document.getElementById('imp1').innerHTML;
        w = window.open();
        w.document.write(printContents);
        w.document.close(); // necessary for IE >= 10
        w.focus(); // necessary for IE >= 10
		w.print();
		w.close();
        return true;}
</script>
                </h2>
            </div>
        </section>
        
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">¡Exelente carrera Universitaria!</h2>
                <a class="btn btn-light btn-xl" href="http://uptecamac.edomex.gob.mx/ingenieria_en_software"><img src="assets/LogoSoftPNG.png" alt="" height="40%" width="45%"></a>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted"><img src="assets/Logo2.png" alt="" height="10%" width="15%">MASF Copyright &copy; 2021 - Sanchez Fermin Marco Antonio</div></div>
            
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
