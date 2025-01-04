
//FUNCION DEL CARRUSEL

// Selección de los contenedores de los carruseles de profesores y alumnos
const carruselProfesores = document.querySelector("#carrusel-profesores .carousel-inner");
const carruselAlumnos = document.querySelector("#carrusel-alumnos .carousel-inner");

// Función para controlar el desplazamiento automático de un carrusel
const startCarrusel = (carrusel) => {
    let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
    let intervalo = null;
    let step = 1; // 1 para mover a la derecha, -1 para mover a la izquierda
    console.log(maxScrollLeft)
// Función para mover el carrusel
    const start = () => {
        intervalo = setInterval(function () {
        carrusel.scrollLeft += step;
        //usar cantidad de imagenes pares(no se pq pero funciona)

      // Cambiar la dirección cuando se alcanza el final o el inicio
        if (carrusel.scrollLeft >= maxScrollLeft || carrusel.scrollLeft <= 0) {
            step = step * -1; // Invertir la dirección
        }
        }, 10); // Intervalo de 10ms para un desplazamiento suave
    };

// Función para detener el movimiento
    const stop = () => {
        clearInterval(intervalo);
    };

// Detener el movimiento cuando el ratón pasa sobre el carrusel
    carrusel.addEventListener("mouseover", stop);

// Reanudar el movimiento cuando el ratón sale del carrusel
    carrusel.addEventListener("mouseout", start);

// Iniciar el carrusel al cargar la página
    start();
};

// Iniciar ambos carruseles
startCarrusel(carruselProfesores);
startCarrusel(carruselAlumnos);

function changeColor(newColor) {
    const elem = document.getElementById("sedesBody");
    elem.style.backgroundColor = newColor;
}

function huaura(){
    document.getElementById('direccionh2').textContent = 'Av. las malvinas 103, frente al triolet inicial';
    document.getElementById('telefonoh2').textContent = '930-848-507';
    document.getElementById('mapa').innerHTML ='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d244.72510144591885!2d-77.60059220332359!3d-11.068465128162229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9107206421081925%3A0x58ca434b6288db2a!2sAv%20Las%20Malvinas%20633%2C%20Huaura%2015138!5e0!3m2!1ses-419!2spe!4v1731951259287!5m2!1ses-419!2spe" width="90%" height="90%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
}

function huacho(){
    document.getElementById('direccionh2').textContent = 'Av. Echenique 509, colegio Cayetano Heredia';
    document.getElementById('telefonoh2').textContent = '930-848-507';
    document.getElementById('mapa').innerHTML ='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d599.0276780455539!2d-77.61005006181414!3d-11.110221929738577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9106df918ed96335%3A0xf4ae9996a305276e!2sIEP.%20Cayetano%20Hetedia%20-%20Sede%20Huacho!5e0!3m2!1ses-419!2spe!4v1732030782013!5m2!1ses-419!2spe" width="90%" height="90%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
}

function sayan(){
    document.getElementById('direccionh2').textContent = 'Tupac Amaru S/N, colegio Manuel Tovar';
    document.getElementById('telefonoh2').textContent = '930-848-507';
    document.getElementById('mapa').innerHTML ='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.7360980273065!2d-77.1971606585717!3d-11.133021660860416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9106558ae7b1e9af%3A0xb1aff1e6874750e2!2sInstitucion%20Educativa%20Manuel%20Tovar!5e0!3m2!1ses-419!2spe!4v1735572948393!5m2!1ses-419!2spe" width="90%" height="90%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
}

function irSeccion(id) {
    const seccion = document.getElementById(id);
    seccion.scrollIntoView({ behavior: 'smooth' });
}

//chatbot

    //redirigir
    function redirigir(url){
        window.location.href = url;
    }

    // Obtener los elementos
    const abrirchatbot = document.getElementById('abrirchatbot');
    const cerrarchatbot = document.getElementById('cerrarchatbot');
    const chatbotmodal = document.getElementById('chatModal');

    // Mostrar el modal al hacer clic en el botón flotante
    function abrir() {
        chatbotmodal.style.display = 'block';
    };

    // Cerrar el modal al hacer clic en el botón de cierre
    function cerrar() {
        chatbotmodal.style.display = 'none';
    };

    // Cerrar el modal si el fondo es clickeado
    window.addEventListener('click', function(event) {
      if (event.target === chatbotmodal) {
        chatbotmodal.style.display = 'none';
      }
    });

//chat

    // Función para agregar mensajes al chat
    function addMessage(text, sender) {
        const chatbox = document.getElementById('chatbox');

        const message = document.createElement('div');
        message.classList.add('chat-bubble', sender);

        const messagetxt = document.createElement('p');
        messagetxt.classList.add('mensaje');
        messagetxt.innerText = text;

        const messageimgdiv = document.createElement('div');
        messageimgdiv.classList.add('avatar');
        messageimgdiv.setAttribute('id','imgdiv')

        const messageimg = document.createElement('img');
        if(sender=="bot"){
            messageimg.setAttribute('src','recursosvisuales/imagenes/newton-escudo.png')
        }else{
            messageimg.setAttribute('src','recursosvisuales/imagenes/avatar.png')
        }

        messageimgdiv.appendChild(messageimg);
        message.appendChild(messagetxt);
        message.appendChild(messageimgdiv);

        chatbox.appendChild(message);
        chatbox.scrollTop = chatbox.scrollHeight; // Hacer scroll hacia abajo
        }

        // Función para manejar la respuesta del usuario
        function userReply(choice) {
            // Limpiar los botones
            const buttonsContainer = document.getElementById('buttons-container');
            buttonsContainer.innerHTML = '';

            // Agregar mensaje de usuario
            addMessage(choice, 'user');

            // Responder dependiendo de la elección del usuario
            setTimeout(() => {

                //Formacion academica

                if (choice === 'formacion academica') {
                    addMessage('¿Que aspecto de la formacion academica desea revisar?', 'bot');
                    addButtons(['Servicios y programas', 'Estructura de clases', 'Formacion profesores','Programas especiales']);
                }
                else if((choice === 'servicios y programas')){
                    addMessage('Brindamos los servicios de modalidad 5to, modalidad ordinario, modalidad especial de 4to de primaria a 3ero de secundaria, modalidad cpu ', 'bot');
                    addButtons(['Volvamos al inicio'])
                }
                else if((choice === 'estructura de clases')){
                    addMessage('Contamos con los 19 cursos esenciales para el examen y dentro de la universidad, como: literatura, aritmética, biología, razonamiento verbal, física, filosofía economía, etc.', 'bot');
                    addButtons(['Volvamos al inicio'])
                }
                else if((choice === 'formacion profesores')){
                    addMessage('Nuestro equipo está compuesto por licenciados en educación, especializados en cada uno de sus campos respectivos. Cada uno cuenta con un sólido reconocimiento tanto a nivel regional como nacional, lo que avala su experiencia y conocimiento', 'bot');
                    addButtons(['Volvamos al inicio'])
                }
                else if((choice === 'programas especiales')){
                    addMessage('Ofrecemos programas como ciclos de experiencia y clases particulares para complementar las enseñanzas tanto del colegio como de la academia, enfocados en alumnos desde el 3er grado de primaria hasta los preuniversitarios', 'bot');
                    addButtons(['Volvamos al inicio'])
                }

                //Costos y horarios

                else if (choice === 'costos y horarios') {
                    addMessage('¿Qué dudas tienes respecto a los costos y horarios de nuestros programas?', 'bot');
                    addButtons(['Horarios y actividades', 'Flexibilidad en horarios', 'Costo de matricula', 'Formas de pago']);
                }

                else if((choice === 'horarios y actividades')){
                    addMessage('Nuestro ciclo ordinario ofrece clases de lunes a viernes desde las 7:50 de la mañana hasta la 1:00 de la tarde, además de repasos de 4:00 de la tarde hasta las 7:00 de la noche.', 'bot');
                    addButtons(['Volvamos al inicio'])
                }
                else if((choice === 'flexibilidad en horarios')){
                    addMessage('Sí, tenemos flexibilidad con los horarios, pero debe ser notificado al tutor. Además, contamos con clases virtuales, las cuales quedan grabadas para su posterior visualización.', 'bot');
                    addButtons(['Volvamos al inicio'])
                }
                else if((choice === 'costo de matricula')){
                    addMessage('Tenemos en promoción la matrícula a 800, que incluye la matrícula, el reforzamiento, el ciclo ordinario, además de 2 libros que contienen información y ejercicios de cada curso.', 'bot');
                    addButtons(['Volvamos al inicio'])
                }
                else if((choice === 'formas de pago')){
                    addMessage('Tenemos método de pago via plin, yape, cuenta bcp o pago directo en efectivo.', 'bot');
                    addButtons(['Volvamos al inicio'])
                }

                //Seguimiento educativo

                else if (choice === 'seguimiento educativo') {
                    addMessage('¿Cual es su duda respecto al seguimiento educativo?', 'bot');
                    addButtons(['Comunicacion con padres', 'Informes periodicos', 'Observacion del proceso', 'Justificacion de inasistencias']);
                }

                else if((choice === 'comunicacion con padres')){
                    addMessage('Mantenemos comunicación con los padres a través de grupos de WhatsApp: 2 grupos generales, uno de padres y uno de alumnos, además, de un chat directo con los padres y mensajes a través de nuestros tutores de cada sede.', 'bot');
                    addButtons(['Volvamos al inicio'])
                }
                else if((choice === 'informes periodicos')){
                    addMessage('Semanalmente enviamos un reporte de notas a su persona y también puede preguntar a nuestros tutores acerca del rendimiento del estudiante', 'bot');
                    addButtons(['Volvamos al inicio'])
                }
                else if((choice === 'observacion del proceso')){
                    addMessage('Cuando usted quiera puede entrar a visualizar las clases del menor, respetando siempre al profesor y a los demás alumnos.', 'bot');
                    addButtons(['Volvamos al inicio'])
                }
                else if((choice === 'justificacion de inasistencias')){
                    addMessage('Le comunica al tutor del respectivo turno acerca del inconveniente con el menor y el tutor le indicara que clases estaría faltando para que se ponga al corriente con sus compañeros', 'bot');
                    addButtons(['Volvamos al inicio'])
                }

                //contacto
                else if (choice === 'contacto') {
                    addMessage('¿Cómo prefieres contactarnos?', 'bot');
                    addButtons(['Facebook', 'Whatsapp', 'Instagram']);
                }
                //regresar al inicio
                else if (choice === 'volvamos al inicio'){
                    addMessage('¡Hola! Soy tu asistente virtual. ¿En qué puedo ayudarte hoy?', 'bot')
                    addButtons(['Formacion academica','Costos y horarios','Seguimiento educativo','Contacto'])
                }
            }, 1000); // Responder después de 1 segundo
        }

        // Función para agregar botones de opciones
        function addButtons(options) {
            const buttonsContainer = document.getElementById('buttons-container');
            options.forEach(option => {
                const button = document.createElement('button');
                button.classList.add('button');
                button.innerText = option;

                if(option==='Facebook'){
                    button.onclick = () => redirigir('https://www.facebook.com/Newtonenred');
                }else if(option==='Whatsapp'){
                    button.onclick = () => redirigir('https://api.whatsapp.com/send?phone=51930848507&text=Hola%2C%20quisiera%20información%20sobre%20la%20preparación%20preuniversitaria');
                }else if(option==='Instagram'){
                    button.onclick = () => redirigir('https://www.instagram.com/newtonenred');
                }else{
                    button.onclick = () => userReply(option.toLowerCase());
                }

                buttonsContainer.appendChild(button);
            });
        }

        // Iniciar el chatbot con el mensaje inicial
        addMessage('Chatbot: ¡Hola! Soy tu asistente virtual. ¿En qué puedo ayudarte hoy?', 'bot');



