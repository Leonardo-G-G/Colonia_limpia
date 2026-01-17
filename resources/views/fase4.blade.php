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
                        <p class="small">Actividades, tareas,<br>
                            recursos y procesos</p>
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
                        <p class="small"> Diagrama de Gantt<br>
                            para gestión del proyecto
                        </p>
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
            A partir de esta fase del proyecto <strong>“Colonia Limpia”</strong>, se identifican los
            apoyos necesarios y se asignan responsabilidades claras a cada perfil, lo que permite
            que las acciones planeadas se realicen de forma práctica y eficiente.
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
                        <td><strong>Coordinador del proyecto</strong></td>
                        <td>Responsable, organizado, con capacidad de liderazgo y toma de decisiones.</td>
                        <td>Supervisar actividades, coordinar al equipo, dar seguimiento al plan de acción.</td>
                        <td>Todas las fases</td>
                    </tr>
                    <tr>
                        <td><strong>Equipo de diagnóstico</strong></td>
                        <td>Observadores, comunicativos y comprometidos con la comunidad.</td>
                        <td>Realizar recorridos, aplicar encuestas y registrar puntos críticos.</td>
                        <td>Fase 1 y 3</td>
                    </tr>
                    <tr>
                        <td><strong>Vecinos voluntarios</strong></td>
                        <td>Participativos, solidarios y con disposición de colaborar.</td>
                        <td>Apoyar en campañas de limpieza y uso de contenedores.</td>
                        <td>Fase 3 y 4</td>
                    </tr>
                    <tr>
                        <td><strong>Facilitador ambiental</strong></td>
                        <td>Con conocimientos en reciclaje y educación ambiental.</td>
                        <td>Impartir talleres y orientar sobre separación de residuos.</td>
                        <td>Fase 3</td>
                    </tr>
                    <tr>
                        <td><strong>Responsable tecnológico</strong></td>
                        <td>Con habilidades digitales y manejo de herramientas tecnológicas.</td>
                        <td>Diseñar y administrar la herramienta digital de reportes.</td>
                        <td>Fase 3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ESQUEMA DE ORGANIZACIÓN -->
    <div class="card p-4">
        <h2 class="text-success text-center mb-4">Esquema de organización del proyecto</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="perfil-box">
                    <h5>Coordinador del proyecto</h5>
                    <p>Dirige y supervisa todas las fases del proyecto.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="perfil-box">
                    <h5>Equipo de diagnóstico</h5>
                    <p>Identifica problemáticas y recopila información clave.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="perfil-box">
                    <h5>Facilitador ambiental</h5>
                    <p>Capacita a la comunidad en reciclaje y manejo de residuos.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="perfil-box">
                    <h5>Vecinos voluntarios</h5>
                    <p>Participan activamente en campañas y actividades comunitarias.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="perfil-box">
                    <h5>Responsable tecnológico</h5>
                    <p>Gestiona la herramienta digital y el seguimiento de reportes.</p>
                </div>
            </div>
        </div>
        
    </div><br>

 <!-- PREGUNTAS FINALES -->
    <div class="card p-4">
        <h2 class="text-success mb-4">Reflexión sobre la división del trabajo</h2>

        <h5>¿Cuál es la importancia de la división del trabajo en la etapa de la organización?</h5>
        <p>
            Es importante porque permite que cada persona sepa exactamente qué tiene que hacer dentro
            del proyecto. Al repartir las actividades, el trabajo se vuelve más ordenado, se aprovecha
            mejor el tiempo y se evitan confusiones. Además, al tener responsabilidades claras, el
            proyecto puede avanzar de manera más eficiente y se logran mejor los objetivos planteados.
        </p>

        <h5>¿Es necesario integrar colaboradores en tu proyecto? ¿Por qué?</h5>
        <p>
            Sí, es necesario integrar colaboradores porque un proyecto comunitario no puede ser
            realizado por una sola persona. Cada actividad requiere apoyo, organización y participación
            de varias personas para que todo funcione correctamente. Contar con colaboradores permite
            que las tareas se repartan, se trabaje en equipo y se tenga un mayor impacto en la comunidad.
        </p>

        <h5>En caso de no contar con colaboradores, ¿qué consecuencias habría?</h5>
        <p>
            Si no se contara con colaboradores, el proyecto sería mucho más difícil de realizar, las
            actividades tardarían más tiempo en completarse, habría sobrecarga de trabajo y algunas
            acciones, como las limpiezas o la capacitación, podrían no llevarse a cabo, afectando el
            cumplimiento de los objetivos.
        </p>

        <h5>¿Qué tecnologías podrían ayudarte a encontrar personas interesadas?</h5>
        <p>
            Las tecnologías son una gran ayuda para encontrar personas interesadas en participar.
            Aplicaciones como WhatsApp y Facebook permiten difundir información rápidamente a través
            de grupos vecinales. También se pueden usar formularios en línea y el correo electrónico
            para registrar a los interesados y mantener una buena comunicación con los participantes.
        </p>
    </div>

</div>

<footer>
    <p class="mb-0">Proyecto Colonia Limpia © 2026</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>