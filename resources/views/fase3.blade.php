<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fase 3 | Organización</title>
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
        .diagrama-img{
    max-width:100%;
    max-height:800px;   /* 👈 tamaño ideal */
    height:auto;
    border-radius:18px;
    box-shadow:0 15px 35px rgba(0,0,0,0.25);
    background:white;
}


        .fase-card{
            transition:transform 0.3s ease, box-shadow 0.3s ease;
            cursor:pointer;
        }

        .fase-card:hover{
            transform:translateY(-6px);
            box-shadow:0 12px 25px rgba(0,0,0,0.15);
        }

        .fase-icon{
            font-size:2.5rem;
            color:var(--verde-principal);
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
    <h1>Fase 3: Organización</h1>
    <p class="lead">Plan de acción del proyecto comunitario Colonia Limpia</p>
</header>

<!-- MENÚ DE NAVEGACIÓN -->
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
                <div class="card fase-card h-100 border border-success">
                    <div class="card-body">
                        <i class="bi bi-diagram-3-fill fase-icon"></i>
                        <h5 class="mt-3">Fase 3: Organización</h5>
                        <p class="small">Actividades, tareas,<br>
                            recursos y procesos</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('fase4') }}" class="text-decoration-none text-dark">
                <div class="card fase-card h-100">
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
        <h2 class="text-success">Descripción de la fase</h2>
        <p>
            Como parte de la gestión y administración de proyectos, cuyo propósito es planificar,
            organizar y llevar el control de las actividades y recursos que requiere la ejecución
            de un proyecto, en la etapa de <strong>organización</strong> es necesario definir qué
            acciones deben llevarse a cabo para cumplir las metas y objetivos propuestos.
        </p>
        <p>
            A este conjunto estructurado de actividades, tareas, recursos y responsables se le
            denomina <strong>Plan de acción</strong>, el cual permite guiar el desarrollo del
            proyecto <em>Colonia Limpia</em> de manera ordenada y eficiente.
        </p>
    </div>

    <!-- PRIMERA FASE -->
    <div class="card p-4 mb-5">
        <h3 class="text-success">Primera fase: Actividades previas</h3>

        <div class="table-responsive mt-3">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th>Actividades</th>
                        <th>Tareas</th>
                        <th>Recursos materiales</th>
                        <th>Recursos tecnológicos</th>
                        <th>Recursos financieros<br>(monto estimado)</th>
                        <th>Recursos humanos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2"><strong>Actividad 1.<br>Diagnóstico de zonas con acumulación de basura</strong></td>
                        <td>Tarea 1.1 Realizar recorridos de observación en la colonia para identificar puntos críticos.</td>
                        <td>Libreta y pluma</td>
                        <td>Teléfono celular y cámara</td>
                        <td>$0.00 MXN (recursos propios)</td>
                        <td>Integrantes del proyecto</td>
                    </tr>
                    <tr>
                        <td>Tarea 1.2 Aplicar encuestas a vecinos sobre problemáticas de basura.</td>
                        <td>Hojas impresas, plumas</td>
                        <td>Formularios digitales, acceso a internet</td>
                        <td>$150.00 MXN (impresión de encuestas)</td>
                        <td>Vecinos voluntarios</td>
                    </tr>

                    <tr>
                        <td rowspan="2"><strong>Actividad 2.<br>Análisis de información recabada</strong></td>
                        <td>Tarea 2.1 Clasificar la información obtenida en recorridos y encuestas.</td>
                        <td>Computadora</td>
                        <td>Software de ofimática</td>
                        <td>$0.00 MXN (uso de equipo personal)</td>
                        <td>Responsable del proyecto</td>
                    </tr>
                    <tr>
                        <td>Tarea 2.2 Elaborar un registro de los principales puntos críticos.</td>
                        <td>Papelería básica</td>
                        <td>Procesador de texto (Word)</td>
                        <td>$50.00 MXN (papelería)</td>
                        <td>Responsable del proyecto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- SEGUNDA FASE -->
    <div class="card p-4 mb-5">
        <h3 class="text-success">Segunda fase: Actividades de desarrollo</h3>

        <div class="table-responsive mt-3">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th>Actividades</th>
                        <th>Tareas</th>
                        <th>Recursos materiales</th>
                        <th>Recursos tecnológicos</th>
                        <th>Recursos financieros<br>(monto estimado)</th>
                        <th>Recursos humanos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2"><strong>Actividad 3.<br>Campañas de limpieza comunitaria</strong></td>
                        <td>Tarea 3.1 Organizar jornadas de limpieza con vecinos.</td>
                        <td>Bolsas de basura, guantes, escobas</td>
                        <td>Mensajería digital, redes sociales</td>
                        <td>$1,200.00 MXN (materiales de limpieza)</td>
                        <td>Vecinos y voluntarios</td>
                    </tr>
                    <tr>
                        <td>Tarea 3.2 Recolectar y disponer adecuadamente los residuos.</td>
                        <td>Carretillas, contenedores</td>
                        <td>Teléfono celular</td>
                        <td>$800.00 MXN (transporte y apoyo logístico)</td>
                        <td>Participantes y apoyo municipal</td>
                    </tr>

                    <tr>
                        <td rowspan="2"><strong>Actividad 4.<br>Capacitación en reciclaje</strong></td>
                        <td>Tarea 4.1 Realizar talleres de educación ambiental.</td>
                        <td>Material didáctico, carteles</td>
                        <td>Proyector, presentaciones digitales</td>
                        <td>$500.00 MXN (impresión de materiales)</td>
                        <td>Facilitador y asistentes</td>
                    </tr>
                    <tr>
                        <td>Tarea 4.2 Distribuir material informativo a las familias.</td>
                        <td>Folletos, trípticos</td>
                        <td>Redes sociales</td>
                        <td>$400.00 MXN (impresión)</td>
                        <td>Equipo del proyecto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- TERCERA FASE -->
    <div class="card p-4">
        <h3 class="text-success">Tercera fase: Actividades de concreción</h3>

        <div class="table-responsive mt-3">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th>Actividades</th>
                        <th>Tareas</th>
                        <th>Recursos materiales</th>
                        <th>Recursos tecnológicos</th>
                        <th>Recursos financieros<br>(monto estimado)</th>
                        <th>Recursos humanos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2"><strong>Actividad 5.<br>Instalación de contenedores diferenciados</strong></td>
                        <td>Tarea 5.1 Gestionar la instalación de contenedores con el municipio.</td>
                        <td>Oficios, señalética</td>
                        <td>Correo electrónico</td>
                        <td>$300.00 MXN (gestión y papelería)</td>
                        <td>Autoridades y coordinador</td>
                    </tr>
                    <tr>
                        <td>Tarea 5.2 Promover el uso adecuado de los contenedores.</td>
                        <td>Carteles informativos</td>
                        <td>Redes sociales</td>
                        <td>$250.00 MXN (impresión de señalización)</td>
                        <td>Vecinos voluntarios</td>
                    </tr>

                    <tr>
                        <td rowspan="3"><strong>Actividad 6.<br>Implementación de herramienta digital</strong></td>
                        <td>Tarea 6.1 Diseñar un formulario digital para reportes de basura.</td>
                        <td>Computadora</td>
                        <td>Formularios en línea</td>
                        <td>$0.00 MXN (plataforma gratuita)</td>
                        <td>Responsable del proyecto</td>
                    </tr>
                    <tr>
                        <td>Tarea 6.2 Difundir y dar seguimiento a los reportes ciudadanos.</td>
                        <td>Material informativo</td>
                        <td>Internet, teléfono celular</td>
                        <td>$0.00 MXN (medios digitales)</td>
                        <td>Equipo del proyecto</td>
                    </tr>
                    <tr>
                        <td>Tarea 6.3 Evaluar el funcionamiento de la herramienta digital mediante el análisis de los reportes recibidos.</td>
                        <td>Libreta, registros</td>
                        <td>Hojas de cálculo</td>
                        <td>$0.00 MXN (recursos existentes)</td>
                        <td>Responsable del proyecto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <!-- DIAGRAMA DE FLUJO -->
    <div class="card p-4 mt-5">
        <h2 class="text-success text-center mb-4">
            Diagrama de flujo de la Fase 1
        </h2>

        <div class="text-center">
            <img
                src="{{ asset('Diagrama_flujo.png') }}"
                alt="Diagrama de flujo de la Fase 1"
                class="diagrama-img img-fluid"
            >
        </div>

        <p class="text-muted text-center mt-3">
            Figura. Diagrama de flujo correspondiente a las actividades de diagnóstico y análisis
            de la Fase 1 del proyecto Colonia Limpia.
        </p>
    </div>

</div>
 
</div>

<footer>
    <p class="mb-0">Proyecto Colonia Limpia © 2026</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
