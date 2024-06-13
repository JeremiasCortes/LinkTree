<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Jeremías</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?=base_url('resources/css/style.css')?>" type="text/css">

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>

<style>

</style>

<body>

    <audio id="myAudio" controls autoplay>
        <source src="<?=base_url('resources/mp3/background.mp3')?>" type="audio/mpeg">
    </audio>
    <!-- <p>
        <button class="text-black" onclick="playAudio()">Play Audio</button>
        <button class="text-black" onclick="pauseAudio()">Pause Audio</button>
    </p> -->
    <div class="fixed-top text-center py-4 ">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
            aria-controls="offcanvasTop">Toggle top offcanvas</button>
    </div>




    <div class="offcanvas offcanvas-top text-center" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel"
        data-bs-theme="dark">
        <div class="offcanvas-header ">
            <h5 class="offcanvas-title" id="offcanvasTopLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ¿Desea habilitar el audio?
            <button class="btn btn-primary btn-minimalista" onclick="playAudio()">Play Audio</button>
            <button class="btn btn-primary btn-minimalista" onclick="pauseAudio()">Pause Audio</button>
        </div>
    </div>

    <div class="container text-center mt-5">
        <div class="position-relative">
            <div class="bubbles text-center position-absolute top-50 start-50 translate-middle" id="a">
                <?php
                $numSpans = 50;
                for ($i = 0; $i < $numSpans; $i++) {
                    $randomValue = rand(10, 28);
                    echo "<span style=\"--i:$randomValue\"></span>\n";
                }?>
            </div>
        </div>
        <div class="d-block p-5 b-5"></div>

        <img src='<?=base_url('resources/img/perfil.jpg');?>' class="riunded">

        <h1 class="mt-3 fs-2">Jeremías Cortés</h1>
        <h2 class="fs-6">🚀 Creador Digital | 💻 Desarrollador Apasionado | 🌐 Explorador Tecnológico</h2>

        <div class="text-center">
            <div class="d-grid gap-3 col-6 mx-auto mt-5">
                <?php foreach ($enlaces as $enlace): ?>
                <a class="btn btn-primary btn-minimalista" href="<?=$enlace->Enlace_Website;?>" type="button"
                    target="_blank"><?=$enlace->Icono_Website;?> <?=$enlace->Nombre_Website;?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

<script>
function playAudio() {
    var audio = document.getElementById("myAudio");
    audio.muted = false;
    audio.play();
}

function pauseAudio() {
    var audio = document.getElementById("myAudio");
    audio.pause();
    audio.muted = true;
}
</script>

</html>