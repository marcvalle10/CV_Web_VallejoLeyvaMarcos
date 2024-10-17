<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Proyectos - Marcos Vallejo Leyva</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
         /* Estilos del modal */
         .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            background-color: rgba(0,0,0,0.9); 
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s;
        }

        /* Animación suave de aparición del modal */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            max-width: 90%;
            max-height: 90%;
            margin: auto;
            display: block;
        }
        .modal-content:hover {
            opacity: 0.8;
        }
        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            color: white;
            font-size: 40px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        .proyecto {
            margin-bottom: 20px;
        }
        .imagenes-proyecto {
            display: flex;
            flex-wrap: wrap;
        }
        .imagenes-proyecto img {
            width: 150px;
            height: auto;
            cursor: pointer;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .info-proyecto {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Sidebar con información personal -->
        <div class="sidebar">
            <div class="profile-image">
                <img src="foto.jpg" alt="Foto de Marcos Vallejo Leyva">
            </div>
            <h1>Marcos Vallejo Leyva</h1>
            <p class="info"><i class="fas fa-map-marker-alt"></i> CP 85350, Col. Oriente, Calle 7, Lote 4, Manzana 47</p>
            <p class="info"><i class="fas fa-phone-alt"></i> 6221724807</p>
            <p class="info"><i class="fas fa-envelope"></i> marcosvalle546@gmail.com</p>
            <p class="info"><i class="fas fa-birthday-cake"></i> 23 Octubre de 2004</p>
            <p class="info"><i class="fas fa-flag"></i> Mexicana</p>
            <a href="https://github.com/marcvalle10/INOXSON.git" target="_blank" class="linkedin-btn"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
        

        <!-- Contenido principal -->
        <div class="content">
            <h2 id="proyectos">Mis Proyectos Universitarios</h2>
            <div class="proyectos">
                <!-- Proyecto 1 con varias imágenes -->
                <div class="proyecto">
                    <div class="info-proyecto">
                        <h3>Proyecto 1: App Web para INOXSON</h3>
                        <p>Actualmete estoy diseñando una app web para INOXSON, un negocio local de Hermosillo, Son. El proyecto consiste en una app web para un negocio de fabricacion de muebles de acero inoxidable con la finalidad de que manejen sus procesos internos, como lo seria la gestion de los clientes, sus cotizacion, facturas, transacciones financieras, registro de usuarios(solo por el admin), entre otras funciones que se agregaran para ir gestionando el manejo del negocio puesto que de momento lo hacen de forma mas analoga o en excel.</p>
                        <p>Lenguajes utilizados:</p>
                        <p>HTML, CSS, JavaScript, PHP, MySQL, Bootstrap</p>
                        
                    </div>
                    <div class="imagenes-proyecto">
                        <img src="p1f1.png" alt="App Web para INOXSON 1" onclick="openModal('p1f1.png')">
                        <img src="p1f2.png" alt="App Web para INOXSON 2" onclick="openModal('p1f2.png')">
                        <img src="p1f3.png" alt="App Web para INOXSON 3" onclick="openModal('p1f3.png')">
                        <img src="p1f4.png" alt="App Web para INOXSON 4" onclick="openModal('p1f4.png')">
                    </div>
                <div>
                    <a href="https://github.com/marcvalle10/Software-De-ventas-QuickStop.git" target="_blank" class="linkedin-btn"><i class="fab fa-linkedin"></i> Ver en GitGub</a>               
                </div>
                
                <div class="proyecto">
                <h3>Proyecto 2: App Gestion De Ligas Gamer. </h3>
                    <p>Igual que el proyecto 1, acttualmente estoy mejorando este proyecto en cuanto a diseño y agregando funcionalidades extras o que me faltaban al inicio; a pesar de ser de mi 4 semestre en universidad. Esto con la finalidad de poder realizar testeos como QA para una materia de la carrera, esta aplicación es un "Sistema de Gestión Deportiva de ligas gamer" que permite gestionar diferentes aspectos relacionados con partidas y competiciones referentes a videojuegos, entre otras funcionalidades. Está diseñada con una interfaz gráfica de usuario (GUI) utilizando la biblioteca Swing de Java y MySQL con postgreSQL.</p>
                    <p>Lenguajes utilizados:</p>
                    <p>Java, MySQL con postgreSQL</p>

                </div>
                <div class="imagenes-proyecto">
                        <img src="p2f1.png" alt="App Web para INOXSON 1" onclick="openModal('p2f1.png')">
                        <img src="p2f2.png" alt="App Web para INOXSON 2" onclick="openModal('p2f2.png')">
                    </div>
                <div>
                    <a href="https://github.com/marcvalle10/Gaming_Leagues.git" target="_blank" class="linkedin-btn"><i class="fab fa-linkedin"></i> Ver en GitGub</a>   
                </div>
                <div class="proyecto">
                <h3>Proyecto 3: PokeApi. </h3>
                    <p>La aplicación desarrollada con PokeAPI permite visualizar datos de Pokémon en formato de tarjetas coleccionables usando Java. El usuario puede filtrar personajes por especie u otras características, y al seleccionar una opción, se cargan los personajes correspondientes en un combo-box para su visualización. También es posible buscar Pokémon por nombre. El programa incluye manejo de excepciones, configuración mediante archivos de propiedades, bitácoras (Logger), uso de hilos, acceso a la API REST con URL/URLConnection y procesamiento de JSON con GSON.</p>
                    <p>Lenguajes utilizados:</p>
                    <p>Java, JSON - GSON</p>
                </div>
                <div class="imagenes-proyecto">
                        <img src="p3.png" alt="App Web para INOXSON 1" onclick="openModal('p3.png')">
                    </div>
                <div>
                    <a href="https://github.com/marcvalle10/PokeApi.git" target="_blank" class="linkedin-btn"><i class="fab fa-linkedin"></i> Ver en GitGub</a>            
                </div>
                <div class="proyecto">
                <h3>Proyecto 4: Juego de Breakout. </h3>
                    <p>El BreakoutGame es una implementación del clásico juego Breakout, donde el jugador controla una barra que mueve de izquierda a derecha para golpear una pelota que destruye ladrillos en la parte superior de la pantalla. El juego se desarrolla en una ventana de 800x600 píxeles, con una segunda ventana que muestra los puntos y el tiempo. Se puede pausar con la tecla "P" y reanudar con la barra espaciadora. El jugador puede ajustar la velocidad del juego con las teclas "+" y "-", ganando puntos tanto por golpear la pelota como por romper ladrillos.</p>
                    <p>Lenguajes utilizados:</p>
                    <p>Java</p>
                </div>
                <div class="imagenes-proyecto">
                        <img src="p4.png" alt="App Web para INOXSON 1" onclick="openModal('p4.png')">
                    </div>
                <div>
                    <a href="https://github.com/marcvalle10/BreakoutGame.git" target="_blank" class="linkedin-btn"><i class="fab fa-linkedin"></i> Ver en GitGub</a>            
                </div>
                <div class="proyecto">
                <h3>Proyecto 5: Software De ventas QuickStop. </h3>
                    <p>El software de ventas QuickStop fue creado en la materia de Desarrollo de Sistemas 2 para resolver problemas en la gestión de ventas en supermercados, como errores en el registro de productos y clientes, mejorando la eficiencia y organización. Su desarrollo abarca etapas clave: identificación del problema, recopilación de información, análisis de propuestas, definición de requisitos, diseño del sistema, programación, pruebas, implementación, mantenimiento y, eventualmente, su retiro planificado. Cada etapa garantiza un sistema funcional y eficiente, optimizando la gestión comercial y brindando una mejor experiencia tanto para los usuarios internos como para los clientes.</p>
                    <p>Lenguajes utilizados:</p>
                    <p>Java, MySQL</p>
                </div>
                <div class="imagenes-proyecto">
                        <img src="p5f1.png" alt="App Web para INOXSON 1" onclick="openModal('p5f1.png')">
                        <img src="p5f2.png" alt="App Web para INOXSON 2" onclick="openModal('p5f2.png')">
                    </div>
                <div>
                    <a href="https://github.com/marcvalle10/Software-De-ventas-QuickStop.git" target="_blank" class="linkedin-btn"><i class="fab fa-linkedin"></i> Ver en GitGub</a>               
                </div>
            </div>
            <!-- Sección de Certificaciones -->
            <div class="certificaciones">
                <h2>Certificaciones</h2>
                <div class="certificacion">
                    <h3>Certificación 1: Elements of AI (50h)</h3>
                    <p>Descripción de la certificación:</p>
                    <p>La certificación consiste en una introducción a la inteligencia artificial, donde se explican las bases de la inteligencia artificial.</p>
                    <p>Elements of AI es una serie de cursos gratuitos en línea creados por MinnaLearn y la Universidad de Helsinki. Queremos animar a un grupo de personas lo más amplio posible a aprender qué es la IA, qué se puede (y no se puede) hacer con la IA, y cómo empezar a crear métodos de IA. Los cursos combinan la teoría con ejercicios prácticos</p>
                    <a href="https://certificates.mooc.fi/validate/yp819p14s5o?classId=7f898b21-afd6-4832-97f4-449a65fe172b&assignmentId=0a93adad-841a-42fe-9744-75f6b6637883&submissionId=50fd22fc-2c27-468a-7e23-e3973ebd626d" target="_blank" class="linkedin-btn"><i class="fab fa-linkedin"></i> Ver Certificación</a>
                </div>
                <div class="certificacion">
                    <h3>Certificación 2: Gestion de Proyectos con Metodologias Agiles y Enfoques Lean (40h)</h3>
                    <p>Descripción de la certificación:</p>
                    <p>La certificación "Gestión de Proyectos con Metodologías Ágiles y Enfoques Lean" se enfoca en preparar a los profesionales para adaptarse rápidamente a entornos de trabajo dinámicos y cambiantes, especialmente en la era digital. A través de esta formación, aprendiste a implementar metodologías ágiles como Scrum y Kanban, lo que te capacita para gestionar proyectos de manera eficiente y flexible.</p>
                    <p>Esta certificación te brinda herramientas clave para mejorar la gestión de proyectos en entornos de negocio y tecnología.</p>
                    <a href="GPMAEL - Certificado.pdf" target="_blank" class="linkedin-btn"><i class="fab fa-linkedin"></i> Ver Certificación</a>
                </div>
                <div class="certificacion">
                    <h3>Certificación 3: Habilidades para el Empleo (30h)</h3>
                    <p>Descripción de la certificación</p>
                    <p>El curso "Herramientas para la nueva Empleabilidad" te proporciona los recursos y conocimientos para mejorar tus habilidades y oportunidades de empleo. Te guía en el desarrollo de todas las etapas del proceso de selección, desde la elaboración del currículum hasta la preparación para entrevistas y la creación de un perfil profesional en línea.</p>
                    <a href="FT MX - Certificado.pdf" target="_blank" class="linkedin-btn"><i class="fab fa-linkedin"></i> Ver Certificación</a>
                </div>
                <div class="certificacion">
                    <h3>Certificación 4: Herramientas para la Nueva Empleabilidad (8h)</h3>
                    <p>Descripción de la certificación</p>
                    <p>El curso "Habilidades para el Empleo" está diseñado para que adquieras las competencias clave que te convertirán en un candidato atractivo para las mejores oportunidades laborales. En el entorno laboral actual, las empresas buscan profesionales que sean autónomos, proactivos, productivos, adaptables y grandes comunicadores. Este curso reúne a expertos que te guían para desarrollar estas habilidades esenciales.</p>
                    <a href="HNE - Certificado.pdf" target="_blank" class="linkedin-btn"><i class="fab fa-linkedin"></i> Ver Certificación</a>
                </div>                                              
            </div>
            <a href="index.php" class="button"><i class="fas fa-arrow-left"></i> Regresar al Currículum</a>
        </div>
        <!-- Modal para ampliar imagen -->
        <div id="myModal" class="modal">
                <span class="close" onclick="closeModal()">&times;</span>
                <img class="modal-content" id="imgModal">
            </div>
        </div>
    </div>

    <script>
        // Abre el modal con la imagen ampliada
        function openModal(src) {
            var modal = document.getElementById("myModal");
            var imgModal = document.getElementById("imgModal");
            
            modal.style.display = "flex";
            imgModal.src = src;
        }

        // Cierra el modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
    </div>
</body>
</html>
