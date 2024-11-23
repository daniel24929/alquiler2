<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herramientas</title>
    <link href="<?php echo base_url; ?>Assets/css/styles2.css" rel="stylesheet">
    <style>
        iframe {
            width: 100%;
            height: 400px;
            border: none;
            margin-bottom: 20px;
        }
        .tool-title {
            font-size: 1.5rem; 
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid px-4 mt-4">
        <h1></h1>
        
        <div class="card mb-4">
            <div class="card-header">
                <h2>Herramientas Digitales</h2>
            </div>
                <!-- Kahoot -->
                <div class="tool-item">
                    <h2 class="tool-title">Kahoot</h2>
                    <iframe src="https://kahoot.it/challenge/?quiz-id=cc8b68d7-6d50-4f5e-96cb-95a615b09d5f&single-player=true" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="600px" allowfullscreen></iframe>
                </div>
                <!-- Presentación Canva -->
                <div class="tool-item">
                    <h2 class="tool-title">Presentación en Canva</h2>
                    <iframe 
                        src="https://www.canva.com/design/DAGW9X3mhsw/pB0Xd7YMpf9AmutpV6oH1Q/view?embed" 
                        title="Presentación Canva FlexiDrive">
                    </iframe>
                </div>

                <!-- Juego Scratch -->
                <div class="tool-item">
                    <h2 class="tool-title">Juego en Scratch</h2>
                    <iframe 
                        src="https://scratch.mit.edu/projects/1097267668/embed" 
                        allowtransparency="true" 
                        scrolling="no" 
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- Herramienta 4 (Placeholder) -->
                <div class="tool-item">
                    <h2 class="tool-title">Avatar</h2>
                    <iframe src="https://share.vidnoz.com/aivideo?id=aishare-EyzU9aKAyYrgnk3UNpFa3Ftn173195183011242729" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- Herramienta 5 (Placeholder) -->
                <div class="tool-item">
                    <h2 class="tool-title">Video Animoto</h2>
                    <iframe id="vp11xhaG" title="Video Player" width="432" height="243" frameborder="0" src="https://s3.amazonaws.com/embed.animoto.com/play.html?w=swf/production/vp1&e=1732127911&f=1xhaGjz4VDJDGgavL50w8g&d=0&m=p&r=360p&volume=100&start_res=720p&i=m&asset_domain=s3-p.animoto.com&animoto_domain=animoto.com&options=" allowfullscreen></iframe>
                </div>

                <!-- Herramienta 6 (Placeholder) -->
                <div class="tool-item">
                    <h2 class="tool-title">App Inventor</h2>
                    <iframe id="vp1Lunwv" title="Video Player" width="432" height="243" frameborder="0" src="https://s3.amazonaws.com/embed.animoto.com/play.html?w=swf/production/vp1&e=1732208149&f=LunwvCjvfvn6Is7NKsbjUw&d=0&m=p&r=360p&volume=100&start_res=720p&i=m&asset_domain=s3-p.animoto.com&animoto_domain=animoto.com&options=" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</body>
</html>