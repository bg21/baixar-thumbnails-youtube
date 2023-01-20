<?php

if (isset($_POST["video_link"])) {
    $video_link = $_POST["video_link"];
    $video_id = explode(".be/", $video_link);
    $count_array = count($video_id);
    if ($count_array == 2) {
        $vi = $video_id[1];
    } else {
        $video_id = explode("watch?v=", $video_link);
        $vi = $video_id[1];
    }
    $tl_max_res = "https://img.youtube.com/vi/{$vi}/maxresdefault.jpg";
    $tl_mid_res = "https://img.youtube.com/vi/{$vi}/sddefault.jpg";
    $tl_sm_res = "https://img.youtube.com/vi/{$vi}/hqdefault.jpg";

    $img["lg"] = $tl_max_res;
    $img["md"] = $tl_mid_res;
    $img["sm"] = $tl_sm_res;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-light {
            background-color: #110F17 !important;
        }
    </style>
    <title>Projeto - Download Thumbnail Youtube</title>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto bg-white border p-5 rounder">
                <h2 class="text-center mb-3 fw-bold">Projeto - Download Thumbnail Youtube</h2>
                <h2 class="text-center mb-3 fw-bold">💜 Danki Code 💜</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="video_link" class="form-label">Link do Vídeo do YouTube</label>
                        <input type="text" class="form-control" placeholder="exemplo: https://youtu.be/-O09S3oF_Y4" name="video_link" id="video_link" required>
                        <br>
                        <p>Teste: https://youtu.be/-O09S3oF_Y4</p>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Baixar</button>
                    </div>
                </form>
                <?php if (isset($img)) { ?>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <img src="<?php echo $img["lg"]; ?>" alt="" class="img-fluid">
                                <h5>Resolução Máxima - 1920x1080</h5>
                            </div>
                            <div class="col-md-6 mb-3">
                                <img src="<?php echo $img["md"]; ?>" alt="" class="img-fluid">
                                <h5>Qualidade Alta - 1280x720</h5>
                            </div>
                            <div class="col-md-6 mb-3">
                                <img src="<?php echo $img["sm"]; ?>" alt="" class="img-fluid">
                                <h5>Resolução Baixa - 640x480</h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>