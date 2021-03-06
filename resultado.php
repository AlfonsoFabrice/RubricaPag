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
                        <li class="nav-item"><a class="nav-link" href="Zodiaco.html">Zodiaco</a></li>
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
                        <h1 class="text-white font-weight-bold">Zodiaco</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5"></p>
                        <a class="btn btn-primary btn-xl" href="#services">Mostrar</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Zodiaco</h2>
                <hr class="divider" />
                <?php
                    $d=$_POST["dia"];
                    $m=$_POST["mes"];

                    switch ($m)
                    {   
                        //Enero
                        case 1:
                            if($d<=20)
                            {
                                ?>
                                <h2 class="text-center mt-0">CAPRICORNIO
                                <br><img src="assets/capricornio.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">Capricornio es muy inteligente y tiene buen humor,
                                     por lo que puede ser un gran amigo. Quieren que sus amigos sean personas honestas y leales. 
                                     Para ellos no hay l??mites cuando se trata de amigos y familiares. Capricornio respeta las 
                                     tradiciones familiares y ama pasar las vacaciones con amigos y familiares. Capricornio no 
                                     tiene un gran c??rculo de amigos, lo que significa que sus amigos tienen que ser honestos y 
                                     coherentes. Los arrebatos de emoci??n son una cosa com??n para Capricornio, que suele expresar 
                                     sus sentimientos a trav??s de acciones.</p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">ACUARIO
                                <br><img src="assets/acuario.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Cuando se trata de la familia, sus expectativas son las mismas que las que tiene respecto a sus amistades. 
                                A pesar de que tienen un sentimiento de responsabilidad en relaci??n a sus parientes, no mantendr??n lazos con 
                                ellos si sus expectativas no son satisfechas.
                                La urgencia de su comportamiento en combinaci??n con sus fuertes puntos de vista, los convierte en un reto 
                                para conocer. Acuario har??a lo que fuera por un ser amado, tanto como sacrificarse a s?? mismo.
                                Sus amistades deben poseer estas tres cualidades: creatividad, intelecto e integridad
                                    </p>
                                <?php
                            }
                            break;




                        //Febrero
                        case 2:
                            if($d<=19)
                            {
                                ?>
                                <h2 class="text-center mt-0">ACUARIO
                                <br><img src="assets/acuario.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Cuando se trata de la familia, sus expectativas son las mismas que las que tiene respecto a sus amistades. 
                                A pesar de que tienen un sentimiento de responsabilidad en relaci??n a sus parientes, no mantendr??n lazos con 
                                ellos si sus expectativas no son satisfechas.
                                La urgencia de su comportamiento en combinaci??n con sus fuertes puntos de vista, los convierte en un reto 
                                para conocer. Acuario har??a lo que fuera por un ser amado, tanto como sacrificarse a s?? mismo.
                                Sus amistades deben poseer estas tres cualidades: creatividad, intelecto e integridad
                                    </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">PISCIS
                                <br><img src="assets/pisis.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Amables y cuidados, los Piscis pueden ser los mejores amigos que existen. De hecho, suelen poner las 
                                necesidades de sus amigos antes que las de ellos. Son leales y devotos, compasivos y cuando hay alg??n 
                                problema en la familia o entre los amigos, har??n lo mejor que puedan para resolverlo. Sumamente intuitivo, 
                                Piscis puede sentir cuando algo no va bien, incluso antes de que suceda. Los Piscis son expresivos y no 
                                dudar??n en expresar sus sentimientos a las personas que los rodean. Esperan que los dem??s sean tan 
                                abiertos como lo son ellos. La comunicaci??n con los seres queridos es algo muy importante para ellos.
                                </p>
                                <?php
                            }
                            break;




                        //Marzo
                        case 3:
                            if($d<=21)
                            {
                                ?>
                                <h2 class="text-center mt-0">PISCIS
                                <br><img src="assets/pisis.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Amables y cuidados, los Piscis pueden ser los mejores amigos que existen. De hecho, suelen poner las 
                                necesidades de sus amigos antes que las de ellos. Son leales y devotos, compasivos y cuando hay alg??n 
                                problema en la familia o entre los amigos, har??n lo mejor que puedan para resolverlo. Sumamente intuitivo, 
                                Piscis puede sentir cuando algo no va bien, incluso antes de que suceda. Los Piscis son expresivos y no 
                                dudar??n en expresar sus sentimientos a las personas que los rodean. Esperan que los dem??s sean tan 
                                abiertos como lo son ellos. La comunicaci??n con los seres queridos es algo muy importante para ellos.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">ARIES
                                <br><img src="assets/aries.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Aries est?? constantemente en movimiento, actividad es la palabra clave de este signo. Cuando se trata de los 
                                amigos, entre m??s diferentes sean entre s??, mejor. Aries necesita de un amplio rango de diferentes personalidades 
                                para poder completar su c??rculo de amistades. Ya que las personas nacidas bajo este signo pueden entablar 
                                comunicaci??n con otras personas f??cilmente, a lo largo de su vida tendr??n una incre??ble cantidad de amistades 
                                y conocidos. A pesar de ello los amigos reales y de largo plazo, son algo completamente diferente. Solo aquellos 
                                que son igual de en??rgicos y que se inclinen por la carrera larga los acompa??ar??n.
                                </p>
                                <?php
                            }
                            break;




                        //Abril
                        case 4:
                            if($d<=21)
                            {
                                ?>
                                <h2 class="text-center mt-0">ARIES
                                <br><img src="assets/aries.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Aries est?? constantemente en movimiento, actividad es la palabra clave de este signo. Cuando se trata de los 
                                amigos, entre m??s diferentes sean entre s??, mejor. Aries necesita de un amplio rango de diferentes personalidades 
                                para poder completar su c??rculo de amistades. Ya que las personas nacidas bajo este signo pueden entablar 
                                comunicaci??n con otras personas f??cilmente, a lo largo de su vida tendr??n una incre??ble cantidad de amistades 
                                y conocidos. A pesar de ello los amigos reales y de largo plazo, son algo completamente diferente. Solo aquellos 
                                que son igual de en??rgicos y que se inclinen por la carrera larga los acompa??ar??n.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">TAURO
                                <br><img src="assets/tauro.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Poderoso y confiable. Tauro es el primero cuando se trata de cosechar los frutos de su labor. 
                                Aman todo lo que sea bueno y hermoso y suelen rodearse de placeres materiales. Las personas 
                                nacidas bajo el signo de Tauro son muy sensuales y tienen un tacto mu agudo. El tacto es 
                                extremadamente importante para ellos, tanto en negocios como en el romance. Estables y conservadores, 
                                Tauro es uno de los signos m??s confiables del zodiaco. Su testarudez es un rasgo que le obliga a expulsar 
                                las cosas hasta el final, con el fin de cumplir con las normas.
                                </p>
                                <?php
                            }
                            break;




                        //Mayo
                        case 5:
                            if($d<=20)
                            {
                                ?>
                                <h2 class="text-center mt-0">TAURO
                                <br><img src="assets/tauro.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Poderoso y confiable. Tauro es el primero cuando se trata de cosechar los frutos de su labor. 
                                Aman todo lo que sea bueno y hermoso y suelen rodearse de placeres materiales. Las personas 
                                nacidas bajo el signo de Tauro son muy sensuales y tienen un tacto mu agudo. El tacto es 
                                extremadamente importante para ellos, tanto en negocios como en el romance. Estables y conservadores, 
                                Tauro es uno de los signos m??s confiables del zodiaco. Su testarudez es un rasgo que le obliga a expulsar 
                                las cosas hasta el final, con el fin de cumplir con las normas.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">GEMINIS
                                <br><img src="assets/geminis.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Les fascina casi todo en el mundo y tienen la percepci??n de que no les alcanzar?? la vida entera para ver 
                                todo lo que quieren ver. Esto los hace ser excelentes artistas, escritores y periodistas. 
                                El signo G??minis significa que las personas nacidas bajo este signo sienten que les falta 
                                su otra mitad, es por ello que siempre est??n buscando nuevos mentores, amigos y colegas. 
                                G??minis es vers??til, inquisitivo, amante de la diversi??n y quiere experimentar todo cuanto 
                                sea posible, por lo tanto su compa????a nunca es aburrida.
                                </p>
                                <?php
                            }
                            break;




                        //Junio
                        case 6:
                            if($d<=21)
                            {
                                ?>
                                <h2 class="text-center mt-0">GEMINIS
                                <br><img src="assets/geminis.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Les fascina casi todo en el mundo y tienen la percepci??n de que no les alcanzar?? la vida entera para ver 
                                todo lo que quieren ver. Esto los hace ser excelentes artistas, escritores y periodistas. 
                                El signo G??minis significa que las personas nacidas bajo este signo sienten que les falta 
                                su otra mitad, es por ello que siempre est??n buscando nuevos mentores, amigos y colegas. 
                                G??minis es vers??til, inquisitivo, amante de la diversi??n y quiere experimentar todo cuanto 
                                sea posible, por lo tanto su compa????a nunca es aburrida.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">CANCER
                                <br><img src="assets/cancer.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Ya que son regidos por la Luna, las fases de su ciclo lunar pueden hace m??s profundos 
                                sus misterios internos y crear patrones emocionales fugaces que el sensible de C??ncer no 
                                puede controlar, especialmente durante la ni??ez. Esto puede manifestarse como cambios de humor, 
                                ego??smo, manipulaci??n o arranques de ira. C??ncer gusta de ayudar a otros y evitar conflictos. 
                                Una de sus mayores fortalezas es su determinaci??n persistente. C??ncer no tiene grandes ambiciones, 
                                porque son felices teniendo una familia amorosa y un hogar tranquilo y harm??nico. Usualmente cuidan 
                                a sus compa??eros de trabajo y suelen tratarlos como si fueran parte de su familia.
                                </p>
                                <?php
                            }
                            break;




                        //Julio
                        case 7:
                            if($d<=21)
                            {
                                ?>
                                <h2 class="text-center mt-0">CANCER
                                <br><img src="assets/cancer.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Ya que son regidos por la Luna, las fases de su ciclo lunar pueden hace m??s profundos 
                                sus misterios internos y crear patrones emocionales fugaces que el sensible de C??ncer no 
                                puede controlar, especialmente durante la ni??ez. Esto puede manifestarse como cambios de humor, 
                                ego??smo, manipulaci??n o arranques de ira. C??ncer gusta de ayudar a otros y evitar conflictos. 
                                Una de sus mayores fortalezas es su determinaci??n persistente. C??ncer no tiene grandes ambiciones, 
                                porque son felices teniendo una familia amorosa y un hogar tranquilo y harm??nico. Usualmente cuidan 
                                a sus compa??eros de trabajo y suelen tratarlos como si fueran parte de su familia.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">LEO
                                <br><img src="assets/leo.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                El signo m??s generoso del zodiaco, Leo es un amigo confiable y leal, Leo 
                                tratar?? de ayudar a otros, incluso si ello representa mucho tiempo y energ??a. 
                                Fuerte y confiable, Leo tiene la habilidad de gustarle a casi todo el mundo. 
                                Humilde y agraciado, a Leo le gusta ser el anfitri??n de cualquier evento o 
                                celebraci??n. Leo no suele estar solo, ya que las interacciones son su segunda 
                                naturaleza.
                                </p>
                                <?php
                            }
                            break;




                        //Agosto
                        case 8:
                            if($d<=23)
                            {
                                ?>
                                <h2 class="text-center mt-0">LEO
                                <br><img src="assets/leo.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                El signo m??s generoso del zodiaco, Leo es un amigo confiable y leal, Leo 
                                tratar?? de ayudar a otros, incluso si ello representa mucho tiempo y energ??a. 
                                Fuerte y confiable, Leo tiene la habilidad de gustarle a casi todo el mundo. 
                                Humilde y agraciado, a Leo le gusta ser el anfitri??n de cualquier evento o 
                                celebraci??n. Leo no suele estar solo, ya que las interacciones son su segunda 
                                naturaleza.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">VIRGO
                                <br><img src="assets/virgo.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Tener un amigo Virgo es algo sumamente ??til. Los Virgos son excelentes consejeros 
                                y saben c??mo resolver un problema. Los Virgo siempre est??n ah?? para recordarte que 
                                debes cuidar de ti mismo, ya que est??n muy enfocados en la salud y el bienestar. Son 
                                muy dedicados a sus familias y muy atentos con las personas mayores y la gente enferma. 
                                Son padres incre??bles. Sin embargo, los Virgo no son el tipo de persona que muestra sus 
                                sentimientos de forma directa, prefieren hacerlo a trav??s de actos concretos.
                                </p>
                                <?php
                            }
                            break;




                        //Septiembre
                        case 9:
                            if($d<=23)
                            {
                                ?>
                                <h2 class="text-center mt-0">VIRGO
                                <br><img src="assets/virgo.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Tener un amigo Virgo es algo sumamente ??til. Los Virgos son excelentes consejeros 
                                y saben c??mo resolver un problema. Los Virgo siempre est??n ah?? para recordarte que 
                                debes cuidar de ti mismo, ya que est??n muy enfocados en la salud y el bienestar. Son 
                                muy dedicados a sus familias y muy atentos con las personas mayores y la gente enferma. 
                                Son padres incre??bles. Sin embargo, los Virgo no son el tipo de persona que muestra sus 
                                sentimientos de forma directa, prefieren hacerlo a trav??s de actos concretos.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">LIBRA
                                <br><img src="assets/libra.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Libra es divertido y siempre est?? dispuesto a ayudar, por lo cual cuenta con buenos amigos. 
                                Los Libra podr??n ser proclives a llegar tarde y a ser indecisos, pero son realmente buenos amigos 
                                y a las personas que los rodean les gusta mantenerse en su compa????a. Este flexible signo zodiacal, 
                                ama pasar tiempo con sus amigos y familia y no dudar?? ???cuando sea necesario- en organizar alguna reuni??n. 
                                Libra es sociable, amable y sabe c??mo crear un ambiente harmonioso y disfrutable. Cuando se trata de retos, 
                                Libra sabe encontrar la soluci??n a desacuerdos, lo que lo convierte en un excelente solucionador de problemas.
                                </p>
                                <?php
                            }
                            break;




                        //Octubre
                        case 10:
                            if($d<=23)
                            {
                                ?>
                                <h2 class="text-center mt-0">LIBRA
                                <br><img src="assets/libra.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Libra es divertido y siempre est?? dispuesto a ayudar, por lo cual cuenta con buenos amigos. 
                                Los Libra podr??n ser proclives a llegar tarde y a ser indecisos, pero son realmente buenos amigos 
                                y a las personas que los rodean les gusta mantenerse en su compa????a. Este flexible signo zodiacal, 
                                ama pasar tiempo con sus amigos y familia y no dudar?? ???cuando sea necesario- en organizar alguna reuni??n. 
                                Libra es sociable, amable y sabe c??mo crear un ambiente harmonioso y disfrutable. Cuando se trata de retos, 
                                Libra sabe encontrar la soluci??n a desacuerdos, lo que lo convierte en un excelente solucionador de problemas.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">ESCORPIO
                                <br><img src="assets/escorpio.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Honestidad y justicia son dos cualidades que hacen de Escorpio un gran amigo. 
                                Las personas nacidas bajo el signo de Escorpio son muy dedicadas y leales cuando 
                                se trata de trabajo. Son de mente r??pida e inteligentes, es por ello que se sentir??n 
                                mejor en compa????a de personas astutas y amantes de la diversi??n. Est??n llenos de sorpresas 
                                y te dar??n todo lo que necesites, pero si los decepcionas una vez, ya no habr?? vuelta atr??s. 
                                Los Escorpio son muy emocionales, cuando sufren, es simplemente imposible hacerlos sentir mejor. 
                                Son muy dedicados y cuidan muy bien a sus familias.
                                </p>
                                <?php
                            }
                            break;




                        //Noviembre
                        case 11:
                            if($d<=23)
                            {
                                ?>
                                <h2 class="text-center mt-0">ESCORPIO
                                <br><img src="assets/escorpio.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Honestidad y justicia son dos cualidades que hacen de Escorpio un gran amigo. 
                                Las personas nacidas bajo el signo de Escorpio son muy dedicadas y leales cuando 
                                se trata de trabajo. Son de mente r??pida e inteligentes, es por ello que se sentir??n 
                                mejor en compa????a de personas astutas y amantes de la diversi??n. Est??n llenos de sorpresas 
                                y te dar??n todo lo que necesites, pero si los decepcionas una vez, ya no habr?? vuelta atr??s. 
                                Los Escorpio son muy emocionales, cuando sufren, es simplemente imposible hacerlos sentir mejor. 
                                Son muy dedicados y cuidan muy bien a sus familias.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">SAGITARIO
                                <br><img src="assets/sagitario.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Cuando Sagitario visualiza algo en su mente, hace todo lo posible para hacerlo una realidad. 
                                Siempre saben qu?? decir en una situaci??n dada y son grandes vendedores. Sagitario favorece diferentes 
                                tareas y el ambiente din??mico. Puestos de trabajo como agente de viajes, fot??grafo, investigador, artista, 
                                embajador, importador y exportador, son perfectos para esta persona de esp??ritu libre. Sagitario, amante de 
                                la diversi??n, gusta de hacer y gastar dinero. Considerado como el signo m??s feliz del zodiaco, a Sagitario 
                                no le importa mucho de d??nde obtendr?? dinero. Toman riesgos y son muy optimistas. Ellos creen que el 
                                universo proporcionar?? todo lo que necesitan.
                                </p>
                                <?php
                            }
                            break;




                        //Diciembre
                        case 12:
                            if($d<=22)
                            {
                                ?>
                                <h2 class="text-center mt-0">SAGITARIO
                                <br><img src="assets/sagitario.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">
                                Cuando Sagitario visualiza algo en su mente, hace todo lo posible para hacerlo una realidad. 
                                Siempre saben qu?? decir en una situaci??n dada y son grandes vendedores. Sagitario favorece diferentes 
                                tareas y el ambiente din??mico. Puestos de trabajo como agente de viajes, fot??grafo, investigador, artista, 
                                embajador, importador y exportador, son perfectos para esta persona de esp??ritu libre. Sagitario, amante de 
                                la diversi??n, gusta de hacer y gastar dinero. Considerado como el signo m??s feliz del zodiaco, a Sagitario 
                                no le importa mucho de d??nde obtendr?? dinero. Toman riesgos y son muy optimistas. Ellos creen que el 
                                universo proporcionar?? todo lo que necesitan.
                                </p>
                                <?php
                            }
                            else
                            {
                                ?>
                                <h2 class="text-center mt-0">CAPRICORNIO
                                <br><img src="assets/capricornio.jpg" alt="" class="btn btn-primary btn-xl"></h2>
                                <p class="small text-center text-muted">Capricornio es muy inteligente y tiene buen humor,
                                     por lo que puede ser un gran amigo. Quieren que sus amigos sean personas honestas y leales. 
                                     Para ellos no hay l??mites cuando se trata de amigos y familiares. Capricornio respeta las 
                                     tradiciones familiares y ama pasar las vacaciones con amigos y familiares. Capricornio no 
                                     tiene un gran c??rculo de amigos, lo que significa que sus amigos tienen que ser honestos y 
                                     coherentes. Los arrebatos de emoci??n son una cosa com??n para Capricornio, que suele expresar 
                                     sus sentimientos a trav??s de acciones.</p>
                                <?php
                            }
                            break;

                    }

                ?>
                
            </div>
        </section>
        
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">??Exelente carrera Universitaria!</h2>
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
