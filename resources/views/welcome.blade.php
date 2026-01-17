<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colonia Limpia | Inicio</title>

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
            --gris-texto:#333;
        }

        body{
            background:var(--gris-fondo);
            color:var(--gris-texto);
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header{
            background:linear-gradient(135deg,var(--verde-oscuro),var(--verde-claro));
            color:white;
            padding:70px 20px;
            text-align:center;
        }

        .hero-image{
            width:220px;
            aspect-ratio:169 / 256;
            object-fit:cover;
            border-radius:24px;
            box-shadow:0 16px 40px rgba(0,0,0,0.35);
            border:6px solid rgba(255,255,255,0.9);
            background:white;
        }

        .card{
            border:none;
            border-radius:18px;
            box-shadow:0 10px 25px rgba(0,0,0,0.08);
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
    <h1 class="mb-3">Proyecto Comunitario: Colonia Limpia</h1>
    <p class="lead">Participación ciudadana para un entorno más limpio y saludable</p>
    <a href="#fases" class="btn btn-light btn-lg mt-4 shadow">
        Conocer el proyecto
    </a>
</header>

<section class="container my-5" id="fases">
    <div class="row g-4 text-center">

        <!-- INICIO -->
        <div class="col-md-3">
            <a href="{{ route('inicio') }}" class="text-decoration-none text-dark">
                <div class="card fase-card h-100 border border-success">
                    <div class="card-body">
                        <i class="bi bi-house-fill fase-icon"></i>
                        <h5 class="mt-3">Inicio</h5>
                        <p class="small">Presentación del proyecto</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- FASE 3 -->
        <div class="col-md-3">
            <a href="{{ route('fase3') }}" class="text-decoration-none text-dark">
                <div class="card fase-card h-100">
                    <div class="card-body">
                        <i class="bi bi-diagram-3-fill fase-icon"></i>
                        <h5 class="mt-3">Fase 3: Organización</h5>
                        <p class="small">
                            Actividades, tareas,<br>
                            recursos y procesos
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <!-- FASE 4 -->
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

        <!-- FASE 5 -->
        <div class="col-md-3">
            <a href="{{ route('fase5') }}" class="text-decoration-none text-dark">
                <div class="card fase-card h-100">
                    <div class="card-body">
                        <i class="bi bi-bar-chart-steps fase-icon"></i>
                        <h5 class="mt-3">Fase 5: Control</h5>
                        <p class="small">
                            Diagrama de Gantt<br>
                            para gestión del proyecto
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</section>

<!-- CONTENIDO -->
<div class="container mb-5">

    <!-- FASE 1 -->
    <div class="card p-4 mb-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="text-success">Fase 1: Planificación</h2>
                <p>
                    El proyecto <strong>“Colonia Limpia”</strong> busca atender la problemática de la acumulación
                    de basura y la falta de cultura de reciclaje en la colonia.
                </p>
                <p>
                    El propósito principal es fomentar la participación ciudadana y promover hábitos responsables
                    de separación y manejo de residuos.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('Colonia_limpia.png') }}" alt="Proyecto Colonia Limpia" class="hero-image img-fluid">
            </div>
        </div>
    </div>
    <!-- OBJETIVO GENERAL -->
    <div class="card p-4 mb-4">
        <h2 class="text-success">Objetivo General</h2>
        <p>
            Fomentar la participación ciudadana y los hábitos de reciclaje en la colonia, mediante acciones de educación ambiental, campañas de limpieza comunitaria y el uso de herramientas digitales, durante el desarrollo del proyecto, con el fin de reducir la acumulación de basura y mejorar el entorno ambiental y social de la comunidad.
        </p>
    </div>

    <!-- OBJETIVOS ESPECIFICOS -->
    <div class="card p-4">
        <h2 class="text-success">Objetivos específicos y metas</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover mt-3 align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th style="width:35%">Objetivo específico</th>
                        <th>Metas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Diagnosticar las zonas de la colonia con mayor acumulación de basura para identificar puntos críticos de intervención.</td>
                        <td>
                            <ul>
                                <li>Realizar al menos 3 recorridos de observación en la colonia durante el primer mes del proyecto.</li>
                                <li>Aplicar mínimo 20 encuestas a vecinos en un periodo de 4 semanas.</li>
                                <li>Elaborar un registro de los 5 puntos con mayor acumulación de basura al finalizar el primer mes.</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>Organizar e implementar campañas de limpieza comunitaria para disminuir la presencia de residuos en espacios públicos.</td>
                        <td>
                            <ul>
                                <li>Organizar 2 jornadas de limpieza comunitaria durante los primeros dos meses del proyecto.</li>
                                <li>Lograr la participación de al menos 15 vecinos en cada jornada.</li>
                                <li>Retirar residuos de calles, parques y áreas comunes identificadas como puntos críticos.</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>Capacitar a los habitantes de la colonia sobre la correcta separación de residuos y el reciclaje.</td>
                        <td>
                            <ul>
                                <li>Realizar mínimo 2 talleres de educación ambiental en un periodo de un mes.</li>
                                <li>Distribuir material informativo a al menos 30 familias.</li>
                                <li>Lograr que el 70 % de los asistentes identifique correctamente la separación de residuos.</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>Instalar y promover el uso de contenedores diferenciados para facilitar el reciclaje en la colonia.</td>
                        <td>
                            <ul>
                                <li>Instalar al menos 3 contenedores diferenciados en puntos estratégicos durante dos meses.</li>
                                <li>Colocar señalización básica en cada contenedor.</li>
                                <li>Promover su uso mediante reuniones vecinales y difusión en redes sociales.</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>Implementar una herramienta digital para el reporte de puntos con acumulación de basura.</td>
                        <td>
                            <ul>
                                <li>Diseñar y poner en funcionamiento un formulario o aplicación digital en un plazo de un mes.</li>
                                <li>Difundir su uso durante las primeras dos semanas.</li>
                                <li>Recibir al menos 20 reportes ciudadanos durante el primer mes de uso.</li>
                            </ul>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>

<footer>
    <p class="mb-0">Proyecto Colonia Limpia © 2026</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
