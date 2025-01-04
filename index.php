
<?php
// Directorios donde están las imágenes

$directorio1 = 'recursosvisuales/profesores/';
$directorio2 = 'recursosvisuales/alumnos/';

$imagenes1 = glob($directorio1 . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$imagenes2 = glob($directorio2 . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="recursosvisuales/imagenes/newton-escudo.png" type="image/x-icon">

    <title>Newton en red</title>

    <link rel="stylesheet" href="mainpage/MPstyle.css">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alatsi&display=swap" rel="stylesheet">

</head>
<body>
    <!--fbinject-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v21.0&appId=570145292047137"></script>

    <!--particulas-->
    <div id="particles-js"></div>

    <div class="maincontent">   

        <!--navbar-->

        <div class="indeximage">
            <nav class="navContainer">

                <div class="navImage" id="navImage">
                    <img src="recursosvisuales/imagenes/LOGO-PARA-ZOOM2.png" alt="">
                </div>

                <div class="navUtilities" id="navBar">
                    <a href=""><img src="recursosvisuales/imagenes/casa.png" class="navImage">INICIO</a>
                    <a href=""><img src="recursosvisuales/imagenes/libro (1).png" class="navImage">MATERIALES</a>
                    <a href="testvocacional.html"><img src="recursosvisuales/imagenes/documento.png" class="navImage">TEST VOCACIONAL</a>
                    <a href="#sedesContainer"><img src="recursosvisuales/imagenes/telefono.png" class="navImage">CONTACTENOS</a>
                </div>

                <button class="menu-icon" id="menu-button" onclick="toggleMenu()">
                    <div></div>
                    <div></div>
                    <div></div>
                </button>

            </nav>

            <!--banners-->

            <div class="bannerContainer">
                <div class="bannerTextContainer">
                    <p>PREPARATE CON NOSOTROS</p> <br>
                    <p>"porque no sera facil, pero valdra la pena"</p><br>
                    <p>SOMOS LA ACADEMIA MAS COMPLETA</p><br>
                </div>
            </div>
        
        <!--redes-->

            <div class="redesContainer">
                <p>SIGUENOS EN NUESTRAS REDES:</p>
                <a href="https://www.facebook.com/Newtonenred"><img src="recursosvisuales/imagenes/facebooklogo.png" alt=""></a>
                <a href="https://www.instagram.com/newtonenred?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="recursosvisuales/imagenes/instagramlogo.png" alt=""></a>
                <a href="https://www.youtube.com/@NewtonenredHuaura"><img src="recursosvisuales/imagenes/youtubelogo.png" alt=""></a>
                <a href="https://www.tiktok.com/@academia_newtonenredoff"><img src="recursosvisuales/imagenes/tiktoklogo.png" alt=""></a>
            </div>

        </div>

        <!--video-->

        <div class="Support alone">
            <div class="header" id="videoHeader">
                <img src="recursosvisuales/imagenes/tropy.png" alt="">
                <p>NUESTRA GRAN FAMILIA</p>
                <img src="recursosvisuales/imagenes/tropy.png" alt="">
            </div>
        </div>
        <div class="videoBody">
            <div class="videoBodyright">
            <img src="recursosvisuales/imagenes/newton-escudo.png" alt="" class="">
                <div class="videoText">
                    <p> En la Academia Newton en Red, 
                        sabemos  que la educación va 
                        más allá de los libros y  
                        las clases. Creemos en crear 
                        un entorno  cálido y acogedor 
                        donde cada estudiante se  
                        sienta valorado y motivado a 
                        superar sus  límites. Nuestro 
                        compromiso con la  excelencia 
                        se refleja en nuestros 
                        resultados:  el 85% de 
                        nuestros postulantes logran  
                        ingresar a la universidad. 
                        Únete a nuestra  comunidad y 
                        descubre cómo, juntos,  
                        podemos vencer cualquier 
                        desafío y alcanzar  grandes 
                        metas. En Newton en Red, no 
                        solo  somos una academia, 
                        somos una familia.
                    </p>
                </div>
            </div>
            <div class="videoContainer">
                <video autoplay="true" muted="true" loop="true">
                    <source src="recursosvisuales/video/carabana.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <!--servicios-->

        <div class="servicesContainer">

            <div class="Support alone">
                <div class="servicesHeader header">
                    <img src="recursosvisuales/imagenes/tropy.png" alt="">
                    <p>NUESTROS SERVICIOS</p>
                    <img src="recursosvisuales/imagenes/tropy.png" alt="">
                </div>
            </div>

            <div class="servicesElementContainer">
                <div class="servicesElement SE1">
                    <img src="recursosvisuales/imagenes/libro.png" alt="">
                    <h3>ASIGNATURAS DISPONIBLES</h3>
                    <p>Química | Biología | Física | Matemáticas de 
                    Ciencias y Sociales | Biología, Geología y
                    C. Ambientales | Física y Química</p>
                </div>

                <div class="servicesElement SE2">
                    <img src="recursosvisuales/imagenes/masculino.png" alt="">
                    <h3>PROFESORES EXPERTOS</h3>
                    <p>Los mejores docentes del país especializados
                    en cada una de los cursos de los 4 bloques
                    .</p>
                </div>

                <div class="servicesElement SE3">
                    <img src="recursosvisuales/imagenes/metodologia.png" alt="">
                    <h3>GRUPOS SELECTIVIDAD</h3>
                    <p>Contamos con los grupos ordinario,
                    modalidad especial y kids. en cada
                    una de nuestras sedes
                    .</p>
                </div>
                
                <div class="servicesElement SE4">
                    <img src="recursosvisuales/imagenes/camara-de-video.png" alt="">
                    <h3>ACCESO AULA VIRTUAL</h3>
                    <p>Todo el temario explicado para sacar tu mejor 
                    puntaje, accede cuando quieras 
                    y donde quieras
                    </p>
                </div>

                <div class="servicesElement SE5">
                    <img src="recursosvisuales/imagenes/calendario.png" alt="">
                    <h3>TURNOS FLEXIBLES</h3>
                    <p>Turno mañana y tarde  todos los días
                    de la semana
                    .</p>
                </div>

                <div class="servicesElement SE6">
                    <img src="recursosvisuales/imagenes/personas.png" alt="">
                    <h3>METODOLOGIA UNICA</h3>
                    <p>
                    Basados en nuestros exitosos libros y con un
                    94% de tasa de éxito para acceder
                    a la carrera que quieras
                    .</p>
                </div>
            </div>
            
        </div>

        <!--contactos servicios-->

        <div class="contactsContainer">
            <a href="https://api.whatsapp.com/send?phone=51930848507&text=Hola%20quisiera%20informaci%C3%B3n%20sobre%20la%20preparaci%C3%B3n%20pre%20universitaria%20de%20NEWTON%20EN%20RED"><div class="contacts"><img src="recursosvisuales/imagenes/logoblanco.png" alt=""></div></a>
            <a href="https://api.whatsapp.com/send?phone=51930848507&text=Hola%20quisiera%20informaci%C3%B3n%20sobre%20la%20preparaci%C3%B3n%20escolar%20anual%20de%20NEWTON%20COLLAGE%20y%20NEWTON%20KIDS"><div class="contacts"><img src="recursosvisuales/imagenes/logoblanco2.png" alt=""></div></a>
        </div>

        <!--noticias-->

        <div class="noticiasContainer relative">

            <div class="Support group">
                <div class="header" id="noticiasTextHeader">
                    <img src="recursosvisuales/imagenes/tropy.png" alt="">
                    <p>NOTICIAS EN RED</p>
                    <img src="recursosvisuales/imagenes/tropy.png" alt="">
                </div>
            </div>

            <div class="containerCentrado">
                <div class="bodytext" id="noticiasTextBody">
                    <p> En este espacio encontrarás información 
                        completa sobre programas de financiamiento, 
                        fechas clave de aplicación y los requisitos 
                        específicos para cada beca. Además, 
                        te mantendremos informado sobre descuentos 
                        exclusivos, promociones y eventos que te 
                        ayudarán a avanzar en tu formación. ¡No dejes 
                        pasar la oportunidad de acceder a una educación 
                        de calidad a precios accesibles! Mantente 
                        actualizado y aprovecha todo tu potencial académico.
                    </p>
                </div>
            </div>

            <div class="noticiasFBcontainer">
                <div class="noticiasizquierda">
                    <h1 class="noticiastextizquierda">NEWTON EN RED</h1>
                </div>
                <div class="fb-page" data-href="https://www.facebook.com/Newtonenred" data-tabs="timeline" data-width="600" data-height="640" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Newtonenred" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Newtonenred">Academia Preuniversitaria Newton en red</a></blockquote></div>
                <div class="noticiasderecha">
                    <img class="noticiasimagenderecha" src="recursosvisuales/imagenes/whitelogo.png">
                </div>
            </div>

        </div>

        <!--docentes-->

        <div class="docentesContainer relative">
            <div class="Support group">
                <div class="header" id="noticiasTextHeader">
                    <img src="recursosvisuales/imagenes/tropy.png" alt="">
                    <p>NUESTROS DOCENTES 2024</p>
                    <img src="recursosvisuales/imagenes/tropy.png" alt="">
                </div>
            </div>

            <div class="containerCentrado">
                <div class="bodytext" id="noticiasTextBody">
                    <p> ¡Tus Profes Favoritos! En Newton en Red, 
                        cada estudiante es el protagonista de 
                        su propio crecimiento. Acompañado de 
                        profesionales altamente capacitados en 
                        preparación preuniversitaria, hemos 
                        diseñado un programa innovador que se 
                        distingue por sus resultados. Este 
                        programa garantiza un enfoque personalizado, 
                        efectivo y orientado a alcanzar 
                        tus metas académicas.
                    </p>
                </div>
            </div>

            <div id="carrusel-profesores" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="hover">
                <div class="carousel-inner">
                    <?php foreach ($imagenes1 as $index => $imagen1): ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>">
                            <img src="<?= $imagen1; ?>" alt="Imagen Profesor <?= $index + 1; ?>" class="d-block w-100">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <!--cachimbos-->

        <div class="cachimbosContainer relative">

            <div class="Support group">
                <div class="header" id="noticiasTextHeader">
                    <img src="recursosvisuales/imagenes/tropy.png" alt="">
                    <p>NUESTROS CACHIMBOS</p>
                    <img src="recursosvisuales/imagenes/tropy.png" alt="">
                </div>
            </div>

            <div class="containerCentrado">
                <div class="bodytext" id="noticiasTextBody">
                    <p> En nuestra academia, los estudiantes no solo adquieren conocimientos, 
                        sino que también construyen amistades y redes que serán fundamentales 
                        en su futuro académico. Con el respaldo de docentes apasionados y 
                        comprometidos, te invitamos a un espacio donde tus desafíos se 
                        transforman en logros. ¡Tu experiencia académica comienza aquí, 
                        donde todo es posible!
                    </p>
                </div>
            </div>

            <div id="carrusel-alumnos" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="hover">
                <div class="carousel-inner">
                    <?php foreach ($imagenes2 as $index => $imagen2): ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>">
                            <img src="<?= $imagen2; ?>" alt="Imagen Alumno <?= $index + 1; ?>" class="d-block w-100">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <!--universidades-->
        <div class="universidadCarrousel">
            <div class="slidercss">
                <div class="slidecss-track">
                    <div class="slidecss-copy">
                        <div class="slidecss">
                            <img src="recursosvisuales/imagenes/ucss_logo.png" alt="">
                            <div><h2>Universidad catolica sedes sapientae</h2></div>
                        </div>
                        <div class="slidecss">
                            <img src="recursosvisuales/imagenes/unab_logo.png" alt="">
                            <div><h2>Universidad nacional de Barranca</h2></div>
                        </div>
                        <div class="slidecss">
                            <img src="recursosvisuales/imagenes/images.png" alt="">
                            <div><h2>Universidad Jose Faustino Sanchez Carrion</h2></div>
                        </div>
                        <div class="slidecss">
                            <img src="recursosvisuales/imagenes/logo-villareal.png" alt="">
                            <div><h2>Universidad Nacional Federico Villareal</h2></div>
                        </div>
                        <div class="slidecss">
                            <img src="recursosvisuales/imagenes/logo-uni.png" alt="">
                            <div><h2>Universidad Nacional de ingeneria</h2></div>
                        </div>
                        <div class="slidecss">
                            <img src="recursosvisuales/imagenes/logo-sanmarcos.png" alt="">
                            <div><h2>Universidad Nacional mayor de san marcos</h2></div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                var copy =document.querySelector(".slidecss-copy").cloneNode(true);
                document.querySelector(".slidecss-track").appendChild(copy);
            </script>
            
        </div>

        <!--sedes-->

        <div class="sedesContainer" id="sedesContainer">
            <div class="sedesHeader">
                <button onclick="changeColor(`#00BFFF`);huaura()" class="huaura sedesHflex">Huaura</button>
                <button onclick="changeColor(`#01ABFF`);sayan()" class="sayan sedesHflex">Sayan</button>
                <button onclick="changeColor(`#0196FF`);huacho()" class="huacho sedesHflex">Huacho</b>
                <div></div>
            </div>

            <div class="sedesBody" id="sedesBody">
                <div class="sedesBodytext">
                    <div class="direccion sedesBTE">
                        <h1>Direccion:</h1>
                        <h2 id="direccionh2">Av. las malvinas 633, frente al triolet inicial</h2>
                    </div>
                    <div class="telefono sedesBTE">
                        <h1>Telefono:</h1>
                        <h2 id="telefonoh2">987-654-321</h2>
                    </div>
                    <button onclick="redirigir('https://api.whatsapp.com/send?phone=51930848507&text=Hola%2C%20quisiera%20información%20sobre%20la%20preparación%20preuniversitaria%20de%20Newton%20en%20Red')" class="masinformacion sedesBTE" id="masinformacion">
                        <img src="recursosvisuales/imagenes/whatsapp.png" alt="">
                        <h2>Enviar mensaje</h2>
                    </button>
                </div>
                <div class="sedesBodymap" id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d244.72510144591885!2d-77.60059220332359!3d-11.068465128162229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9107206421081925%3A0x58ca434b6288db2a!2sAv%20Las%20Malvinas%20633%2C%20Huaura%2015138!5e0!3m2!1ses-419!2spe!4v1731951259287!5m2!1ses-419!2spe" width="90%" height="90%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    <!--footer-->

        <div class="footerbody">
            <div class="footerleft">
                <img src="recursosvisuales/imagenes/logoblanco.png" alt="">
            </div>
            <div class="footercenter">
                <a href="https://www.facebook.com/Newtonenred"><img src="recursosvisuales/imagenes/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/newtonenred"><img src="recursosvisuales/imagenes/instagram.png" alt=""></a>
                <a href="https://www.youtube.com/@NewtonenredHuaura"><img src="recursosvisuales/imagenes/youtube.png" alt=""></a>
                <a href="https://www.tiktok.com/@academia_newtonenredoff"><img src="recursosvisuales/imagenes/tiktok.png" alt=""></a>
            </div>
            <div class="footerright">
                <ul>
                    <li><a href=""><img src="recursosvisuales/imagenes/whatsapp.png" alt=""><p>Huaura</p></a></li>
                    <li><a href=""><img src="recursosvisuales/imagenes/whatsapp.png" alt=""><p>Sayan</p></a></li>
                    <li><a href=""><img src="recursosvisuales/imagenes/whatsapp.png" alt=""><p>Huacho</p></a></li>
                    <li><a href=""><img src="recursosvisuales/imagenes/whatsapp.png" alt=""><p>Barranca</p></a></li>
                </ul>
            </div>
        </div>

        <!--chatbot-->

        <div class="chatbothtml" id="chatbothtml">
            <!-- Botón flotante -->
            <button class="floating-btn" id="abrirchatbot" onclick="abrir()">💬</button>

            <!-- Modal flotante -->
            <div class="chat-modal" id="chatModal">
            <div class="chat-modal-header">
                Chat Newton
                <button class="close-chat-btn" id="cerrarchatbot" onclick="cerrar()">X</button>
            </div>
            <div id="chat-container">
                <div id="chatbox">
                    <!-- Aquí se mostrarán los mensajes -->
                </div>
                <div id="buttons-container">
                    <!-- Aquí se mostrarán los botones -->
                    <button class="button" onclick="userReply('formacion academica')">Formacion academica</button>
                    <button class="button" onclick="userReply('costos y horarios')">Costos y horarios</button>
                    <button class="button" onclick="userReply('seguimiento educativo')">Seguimiento educativo</button>
                    <button class="button" onclick="userReply('contacto')">Contacto</button>
                </div>
            </div>
            </div>
        </div>

    </div>

    <footer>
        Copyright @ 2024 Newton en Red - Todos los derechos reservados
    </footer>

    <script src="mainpage/funciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
    
    <script>

    //responsive navbar

    function toggleMenu() {
      var navbar = document.getElementById('navBar');
      var navbarimg =document.getElementById("navImage");

      if (navbar.style.display === 'flex') {
        navbar.style.display = 'none'; // Ocultar la barra de navegación
        navbarimg.style.display = "block";
      } else {
        navbar.style.display = 'flex'; // Mostrar la barra de navegación
        navbarimg.style.display = "none";
      }
    }

    //particles config

    particlesJS("particles-js", {
            particles: {
                number: {
                    value: 100,  /* Número de partículas */
                    density: {
                        enable: true,
                        value_area: 800  /* Densidad de las partículas */
                    }
                },
                shape: {
                    type: "circle",  /* Forma de las partículas */
                },
                opacity: {
                    value: 0.5,  /* Opacidad de las partículas */
                    random: true, /* Variabilidad en la opacidad */
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,  /* Mínima opacidad */
                    }
                },
                size: {
                    value: 3,  /* Tamaño de las partículas */
                    random: true,  /* Tamaño aleatorio para las partículas */
                    anim: {
                        enable: true,
                        speed: 2,
                        size_min: 0.1  /* Tamaño mínimo */
                    }
                },
                line_linked: {
                    enable: true, /* Habilita la conexión entre las partículas */
                    distance: 150,  /* Distancia a la que las partículas se conectan */
                    color: "#00BFFF",  /* Color de las líneas de conexión */
                    opacity: 0.4,  /* Opacidad de las líneas de conexión */
                    width: 2  /* Ancho de las líneas de conexión */
                },
                move: {
                    enable: true,
                    speed: 6,  /* Velocidad de movimiento de las partículas */
                    direction: "none",  /* Movimiento aleatorio de las partículas */
                    random: true,
                    straight: false,
                    out_mode: "out",  /* Las partículas se "escapan" del área visible */
                    bounce: false
                }
            },
            interactivity: {
                detect_on: "canvas",  /* Detectar interacciones sobre el canvas */
                events: {
                    onhover: {
                        enable: true,
                        mode: "repulse"  /* Efecto al pasar el mouse sobre las partículas */
                    },
                    onclick: {
                        enable: true,
                        mode: "push"  /* Efecto al hacer click sobre las partículas */
                    }
                }
            },
            retina_detect: true  /* Detectar pantallas retina */
        });
    </script>


</body>
</html>