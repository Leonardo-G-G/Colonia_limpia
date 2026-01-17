<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fase 4 | Dirección</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root{
            --verde-oscuro:#1b5e20;
            --verde-principal:#2e7d32;
            --verde-claro:#66bb6a;
            --gris-fondo:#f2f4f7;
        }

        body{
            background:var(--gris-fondo);
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header{
            background:linear-gradient(135deg,var(--verde-oscuro),var(--verde-claro));
            color:white;
            padding:60px 20px;
            text-align:center;
        }

        .card{
            border:none;
            border-radius:18px;
            box-shadow:0 10px 25px rgba(0,0,0,0.08);
        }

        .fase-card{
            transition:transform 0.3s ease, box-shadow 0.3s ease;
        }

        .fase-card:hover{
            transform:translateY(-6px);
            box-shadow:0 12px 25px rgba(0,0,0,0.15);
        }

        .fase-icon{
            font-size:2.5rem;
            color:var(--verde-principal);
        }

        .perfil-box{
            border-left:6px solid var(--verde-principal);
            background:white;
            border-radius:14px;
            padding:20px;
            height:100%;
        }

        footer{
            background:var(--verde-oscuro);
            color:white;
            text-align:center;
            padding:20px;
            margin-top:50px;
        }
    </style>
</head>
<body>

<header>
    <h1>Fase 4: Dirección</h1>
    <p class="lead">División del trabajo y asignación de responsabilidades</p>
</header>

<!-- MENÚ DE FASES -->
<section class="container my-5">
    <div class="row g-4 text-center">

        <div class="col-md-3">
            <a href="{{ route('inicio') }}" class="text-decoration-none text-dark">
                <div class="card fase-card h-100">
                    <div class="card-body">
                        <i class="bi bi-house-fill fase-icon"></i>
                        <h5 class="mt-3">Inicio</h5>
                        <p class="small">Presentación del proyecto</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('fase3') }}" class="text-decoration-none text-dark">
                <div class="card fase-card h-100">
                    <div class="card-body">
                        <i class="bi bi-diagram-3-fill fase-icon"></i>
                        <h5 class="mt-3">Fase 3</h5>
                        <p class="small">Actividades, tareas,<br>recursos y procesos</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('fase4') }}" class="text-decoration-none text-dark">
                <div class="card fase-card h-100 border border-success">
                    <div class="card-body">
                        <i class="bi bi-people-fill fase-icon"></i>
                        <h5 class="mt-3">Fase 4: Dirección</h5>
                        <p class="small">División del trabajo</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('fase5') }}" class="text-decoration-none text-dark">
                <div class="card fase-card h-100">
                    <div class="card-body">
                        <i class="bi bi-bar-chart-steps fase-icon"></i>
                        <h5 class="mt-3">Fase 5: Control</h5>
                        <p class="small">Diagrama de Gantt<br>para gestión del proyecto</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</section>

<div class="container my-5">

    <!-- INTRODUCCIÓN -->
    <div class="card p-4 mb-4">
        <h2 class="text-success">Introducción</h2>
        <p>
            A partir de esta fase del proyecto <strong>“Colonia Limpia”</strong>, se identifican los apoyos
            necesarios y se asignan responsabilidades claras a cada perfil, lo que permite que las
            acciones planeadas se realicen de forma práctica y eficiente.
        </p>
        <p>
            Esta organización es clave para lograr la participación de la comunidad, optimizar los
            recursos disponibles y alcanzar los objetivos propuestos, asegurando que cada integrante
            conozca su función dentro del proyecto.
        </p>
    </div>

    <!-- TABLA DEL PERSONAL -->
    <div class="card p-4 mb-5">
        <h2 class="text-success">Tabla del personal del proyecto</h2>

        <div class="table-responsive mt-3">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th>Perfil</th>
                        <th>Características</th>
                        <th>Actividades que realiza</th>
                        <th>Fase del proyecto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Responsable del proyecto</strong></td>
                        <td>Persona con capacidad de organización, análisis y toma de decisiones.</td>
                        <td>
                            Coordina las actividades del proyecto, analiza la información recabada,
                            elabora registros de puntos críticos y evalúa el funcionamiento de la
                            herramienta digital.
                        </td>
                        <td>
                            Primera fase: Actividades previas<br>
                            Tercera fase: Actividades de concreción
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Integrantes del proyecto</strong></td>
                        <td>Equipo comprometido con el cuidado del medio ambiente y el trabajo comunitario.</td>
                        <td>
                            Realizan recorridos de observación, apoyan en la recolección de información
                            y participan en la difusión de acciones del proyecto.
                        </td>
                        <td>
                            Primera fase: Actividades previas<br>
                            Segunda fase: Actividades de desarrollo
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Vecinos voluntarios</strong></td>
                        <td>Habitantes de la colonia interesados en mejorar su entorno.</td>
                        <td>
                            Responden encuestas, participan en jornadas de limpieza y promueven el uso
                            adecuado de los contenedores de basura.
                        </td>
                        <td>
                            Primera fase: Actividades previas<br>
                            Segunda fase: Actividades de desarrollo<br>
                            Tercera fase: Actividades de concreción
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Facilitador ambiental</strong></td>
                        <td>Persona con conocimientos en educación ambiental y reciclaje.</td>
                        <td>
                            Imparte talleres de capacitación sobre reciclaje y manejo adecuado de residuos.
                        </td>
                        <td>
                            Segunda fase: Actividades de desarrollo
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Equipo del proyecto</strong></td>
                        <td>Grupo de apoyo operativo y de difusión.</td>
                        <td>
                            Distribuye material informativo, difunde campañas y da seguimiento a los
                            reportes ciudadanos.
                        </td>
                        <td>
                            Segunda fase: Actividades de desarrollo<br>
                            Tercera fase: Actividades de concreción
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Autoridades municipales</strong></td>
                        <td>Personal del gobierno local con facultad para apoyar acciones comunitarias.</td>
                        <td>
                            Apoyan en la instalación de contenedores y en la disposición adecuada de los residuos.
                        </td>
                        <td>
                            Tercera fase: Actividades de concreción
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- ESQUEMA DE ORGANIZACIÓN -->
<div class="card p-4 mb-5">
    <h2 class="text-success text-center mb-4">Esquema de organización del proyecto</h2>

    <div class="text-center">
        <img 
            src="organigrama_proyecto.png" 
            alt="Organigrama del proyecto Colonia Limpia"
            class="img-fluid rounded shadow mb-3"
        >

        <p class="text-muted fst-italic">
            Figura. Organigrama correspondiente a la estructura de organización y asignación de 
            responsabilidades de la Fase 4 del proyecto Colonia Limpia.
        </p>
    </div>
</div>


  

    <!-- PREGUNTAS FINALES -->
    <div class="card p-4">
        <h2 class="text-success mb-4">Reflexión sobre la división del trabajo</h2>

        <h5>¿Cuál es la importancia de la división del trabajo en la etapa de la organización?</h5>
        <p>
            La división del trabajo es importante porque permite que cada persona conozca claramente
            sus responsabilidades dentro del proyecto. Esto facilita la organización, mejora el uso
            del tiempo y evita confusiones, logrando que el proyecto se desarrolle de manera eficiente.
        </p>

        <h5>¿Es necesario integrar colaboradores en tu proyecto? ¿Por qué?</h5>
        <p>
            Sí, es necesario integrar colaboradores porque un proyecto comunitario requiere la
            participación de varias personas. El trabajo en equipo permite repartir tareas, fortalecer
            las acciones y generar un mayor impacto positivo en la comunidad.
        </p>

        <h5>En caso de no contar con colaboradores, ¿qué consecuencias habría?</h5>
        <p>
            Sin colaboradores, el proyecto tendría retrasos, sobrecarga de trabajo y dificultades para
            cumplir con las actividades planeadas, lo que afectaría el logro de los objetivos.
        </p>

        <h5>¿Qué tecnologías podrían ayudarte a encontrar personas interesadas?</h5>
        <p>
            Tecnologías como redes sociales, aplicaciones de mensajería y formularios digitales
            permiten difundir información rápidamente y facilitar la comunicación con personas
            interesadas en participar en el proyecto.
        </p>
    </div>

</div>

<footer>
    <p class="mb-0">Proyecto Colonia Limpia © 2026</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
