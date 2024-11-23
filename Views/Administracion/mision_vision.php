<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes Somos</title>
    <link href="<?php echo base_url; ?>Assets/css/styles2.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            font-size: 2.5rem;
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #007BFF;
            color: #fff;
            padding: 15px;
        }

        .card-header h2 {
            margin: 0;
            font-size: 1.8rem;
        }

        .card-body {
            padding: 20px;
        }

        .card-body p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .card-body ul {
            padding-left: 20px;
            list-style: disc;
        }

        .card-body ul li {
            font-size: 1rem;
            margin-bottom: 10px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            .card-header h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid px-4 mt-4">
        <h1>¿Quiénes Somos?</h1>
        
        <div class="card mb-4">
            <div class="card-header">
                <h2>Misión</h2>
            </div>
            <div class="card-body">
                <p>Nuestra misión es proporcionar servicios de alquiler de vehículos de alta calidad, asegurando la satisfacción de nuestros clientes mediante un proceso rápido, seguro y eficiente.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Visión</h2>
            </div>
            <div class="card-body">
                <p>Ser la empresa líder en alquiler de vehículos a nivel nacional, destacándonos por nuestro compromiso con el servicio al cliente, la innovación y la sostenibilidad ambiental.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Objetivos</h2>
            </div>
            <div class="card-body">
                <ul>
                    <li>Ampliar nuestra flota con vehículos ecológicos y de bajo consumo.</li>
                    <li>Implementar un sistema de fidelización para nuestros clientes.</li>
                    <li>Reducir los tiempos de espera en la entrega y devolución de vehículos.</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
