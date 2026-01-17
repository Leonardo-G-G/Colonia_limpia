<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fase 5 | Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{
            background:#f2f4f7;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header{
            background:linear-gradient(135deg,#1b5e20,#66bb6a);
            color:white;
            padding:60px 20px;
            text-align:center;
        }
        .card{
            border:none;
            border-radius:18px;
            box-shadow:0 10px 25px rgba(0,0,0,0.08);
        }
        footer{
            background:#1b5e20;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:50px;
        }
    </style>
</head>
<body>

<header>
    <h1>Fase 5: Control</h1>
    <p class="lead">Seguimiento y supervisión del proyecto mediante Diagrama de Gantt</p>
</header>

<!-- MENÚ -->
<section class="container my-5">
    <div class="row g-4 text-center">

        <div class="col-md-3">
            <a href="{{ route('inicio') }}" class="text-decoration-none text-dark">
                <div class="card h-100 p-3">
                    <i class="bi bi-house-fill fs-1 text-success"></i>
                    <h5 class="mt-3">Inicio</h5>
                    <p class="small">Presentación del proyecto</p>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('fase3') }}" class="text-decoration-none text-dark">
                <div class="card h-100 p-3">
                    <i class="bi bi-diagram-3-fill fs-1 text-success"></i>
                    <h5 class="mt-3">Fase 3</h5>
                    <p class="small">Actividades, tareas,<br>
                            recursos y procesos</p>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('fase4') }}" class="text-decoration-none text-dark">
                <div class="card h-100 p-3">
                    <i class="bi bi-people-fill fs-1 text-success"></i>
                    <h5 class="mt-3">Fase 4: Dirección</h5>
                    <p class="small">División del trabajo</p>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('fase5') }}" class="text-decoration-none text-dark">
                <div class="card h-100 p-3 border border-success">
                    <i class="bi bi-bar-chart-steps fs-1 text-success"></i>
                    <h5 class="mt-3">Fase 5: Control</h5>
                    <p class="small"> Diagrama de Gantt<br>
                            para gestión del proyecto
                        </p>
                </div>
            </a>
        </div>

    </div>
</section>

<div class="container my-5">

    <!-- INTRODUCCIÓN -->
    <div class="card p-4 mb-5">
        <h2 class="text-success">Introducción</h2>
        <p>
            Cada proyecto es un emprendimiento, una posibilidad de iniciar un negocio, llevar a cabo
            una idea para lograr beneficios en la comunidad o generar autoempleo, ya sea para
            desarrollar un producto o un servicio.
        </p>
        <p>
            El proyecto está delimitado por objetivos claros, metas por cumplir, el tiempo y el dinero.
            Para poder llevarlo a cabo, es necesario supervisar el proceso y dar seguimiento puntual
            para identificar desviaciones y proponer correcciones en el momento que se requieren.
        </p>
    </div>

    <!-- FASE INICIAL -->
    <div class="card p-4 mb-5">
        <h3 class="text-success">Fase inicial – Duración total: 5 semanas</h3>
        <p><strong>Periodo:</strong> 3 de marzo al 6 de abril de 2026</p>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th>Actividad</th>
                        <th>Tiempo total</th>
                        <th>Inicio</th>
                        <th>Cierre</th>
                        <th>Tareas</th>
                        <th>Recursos materiales</th>
                        <th>Recursos tecnológicos</th>
                        <th>Recursos financieros</th>
                        <th>Responsable</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2"><strong>Diagnóstico de zonas con acumulación de basura</strong></td>
                        <td>2 semanas</td>
                        <td>Semana 1 (03/03/26)</td>
                        <td>Semana 2 (16/03/26)</td>
                        <td>Tarea 1: Recorridos de observación para identificar puntos críticos</td>
                        <td>Libreta, pluma</td>
                        <td>Teléfono y cámara</td>
                        <td>$0.00</td>
                        <td>Integrantes del proyecto</td>
                    </tr>
                    <tr>
                        <td>2 semanas</td>
                        <td>Semana 2 (10/03/26)</td>
                        <td>Semana 3 (23/03/26)</td>
                        <td>Tarea 2: Aplicar encuestas a vecinos.</td>
                        <td>Hojas y plumas</td>
                        <td>Formularios digitales</td>
                        <td>$150.00</td>
                        <td>Vecinos voluntarios</td>
                    </tr>
                    <tr>
                        <td rowspan="2"><strong>Análisis de información recabada</strong></td>
                        <td>1 semana</td>
                        <td>Semana 4 (24/03/26)</td>
                        <td>Semana 4 (30/03/26)</td>
                        <td>Tarea 1: Clasificar la información obtenida.</td>
                        <td>Computadora</td>
                        <td>Software ofimático</td>
                        <td>$0.00</td>
                        <td>Responsable del proyecto</td>
                    </tr>
                    <tr>
                        <td>1 semana</td>
                        <td>Semana 5 (31/03/26)</td>
                        <td>Semana 5 (06/04/26)</td>
                        <td>Tarea 2: Elaborar registro de puntos críticos.</td>
                        <td>Papelería básica</td>
                        <td>Word</td>
                        <td>$50.00</td>
                        <td>Responsable del proyecto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- FASE DESARROLLO -->
    <div class="card p-4 mb-5">
        <h3 class="text-success">Fase de desarrollo – Duración total: 5 semanas</h3>
        <p><strong>Periodo:</strong> 7 de abril al 12 de mayo de 2026</p>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th>Actividad</th>
                        <th>Tiempo</th>
                        <th>Inicio</th>
                        <th>Cierre</th>
                        <th>Tareas</th>
                        <th>Recursos materiales</th>
                        <th>Recursos tecnológicos</th>
                        <th>Recursos financieros</th>
                        <th>Responsable</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2"><strong>Campañas de limpieza comunitaria</strong></td>
                        <td>3 semanas</td>
                        <td>Semana 6 (07/04/26)</td>
                        <td>Semana 8 (27/04/26)</td>
                        <td>Tarea 1: Organizar jornadas de limpieza con vecinos.</td>
                        <td>Bolsas, guantes</td>
                        <td>WhatsApp, redes</td>
                        <td>$1,200.00</td>
                        <td>Vecinos voluntarios</td>
                    </tr>
                    <tr>
                        <td>2 semanas</td>
                        <td>Semana 7 (14/04/26)</td>
                        <td>Semana 9 (04/05/26)</td>
                        <td>Tarea 2: Recolección y disposición de residuos.</td>
                        <td>Carretillas</td>
                        <td>Teléfono</td>
                        <td>$800.00</td>
                        <td>Integrantes del proyecto y Autoridades municipales</td>
                    </tr>
                    <tr>
                        <td rowspan="2"><strong>Capacitación en reciclaje</strong></td>
                        <td>1 semana</td>
                        <td>Semana 9 (28/04/26)</td>
                        <td>Semana 9 (04/05/26)</td>
                        <td>Tarea 1: Realizar talleres de educación ambiental.</td>
                        <td>Material didáctico</td>
                        <td>Proyector</td>
                        <td>$500.00</td>
                        <td>Facilitador</td>
                    </tr>
                    <tr>
                        <td>1 semana</td>
                        <td>Semana 10 (05/05/26)</td>
                        <td>Semana 10 (12/05/26)</td>
                        <td>Tarea 2: Distribuir material informativo.</td>
                        <td>Folletos, trípticos</td>
                        <td>Redes sociales</td>
                        <td>$400.00</td>
                        <td>Equipo del proyecto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- FASE CONSECUSIÓN -->
    <div class="card p-4">
        <h3 class="text-success">Fase de consecución – Duración total: 6 semanas</h3>
        <p><strong>Periodo:</strong> 13 de mayo al 23 de junio de 2026</p>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th>Actividad</th>
                        <th>Tiempo</th>
                        <th>Inicio</th>
                        <th>Cierre</th>
                        <th>Tareas</th>
                        <th>Recursos materiales</th>
                        <th>Recursos tecnológicos</th>
                        <th>Recursos financieros</th>
                        <th>Responsable</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2"><strong>Instalación de contenedores</strong></td>
                        <td>2 semanas</td>
                        <td>Semana 11 (13/05/26)</td>
                        <td>Semana 12 (26/05/26)</td>
                        <td>Tarea 1: Gestión con el municipio.</td>
                        <td>Oficios, señalética</td>
                        <td>Correo</td>
                        <td>$300.00</td>
                        <td>Autoridades municipales</td>
                    </tr>
                    <tr>
                        <td>1 semana</td>
                        <td>Semana 13 (27/05/26)</td>
                        <td>Semana 13 (02/06/26)</td>
                        <td>Tarea 2: Promover uso adecuado del contenedor</td>
                        <td>Carteles</td>
                        <td>Redes</td>
                        <td>$250.00</td>
                        <td>Vecinos voluntarios</td>
                    </tr>
                    <tr>
                        <td rowspan="3"><strong>Herramienta digital</strong></td>
                        <td>1 semana</td>
                        <td>Semana 14 (03/06/26)</td>
                        <td>Semana 14 (09/06/26)</td>
                        <td>Tarea 1: Diseñar formulario digital.</td>
                        <td>Computadora</td>
                        <td>Formularios</td>
                        <td>$0.00</td>
                        <td>Responsable del proyecto</td>
                    </tr>
                    <tr>
                        <td>1 semana</td>
                        <td>Semana 15 (10/06/26)</td>
                        <td>Semana 15 (16/06/26)</td>
                        <td>Tarea 2: Difusión, seguimiento y evaluación de reportes.</td>
                        <td>Registros</td>
                        <td>Hojas de cálculo</td>
                        <td>$0.00</td>
                        <td>Equipo del proyecto</td>
                    </tr>
                    <tr>
                        <td>1 semana</td>
                        <td>Semana 16 (17/06/26)</td>
                        <td>Semana 16 (23/06/26)</td>
                        <td>Tarea 3. Evaluar el funcionamiento de la herramienta digital</td>
                        <td>Libreta</td>
                        <td>Formularios</td>
                        <td>$0.00</td>
                        <td>Responsable del proyecto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- DIAGRAMA DE GANTT -->
    <div class="card p-4 mt-5">
        <h2 class="text-success mb-4">Diagrama de Gantt del Proyecto “Colonia Limpia”</h2>

        <img src="{{ asset('ghant.png') }}"
             alt="Diagrama de Gantt del proyecto Colonia Limpia"
             class="img-fluid rounded shadow"
             style="max-width:85%; height:auto;">
        <br><p class="text-muted fst-italic">
        Figura. Diagrama de Gantt que muestra la planeación, duración y seguimiento de las actividades
        correspondientes a las fases inicial, de desarrollo y de consecución del proyecto
        comunitario “Colonia Limpia”.
    </p>     
    </div>
    

</div>

<footer>
    <p class="mb-0">Proyecto Colonia Limpia © 2026</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>