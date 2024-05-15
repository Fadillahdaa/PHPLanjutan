<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
            padding: 10px;
        }

        .gallery img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <h1>Galery Saya</h1>

    <div class="gallery">
        <?php
        $folder_path = "gambar/";
        $files = scandir($folder_path);
        foreach($files as $file) {
            $file_path = $folder_path . $file;
            if(is_file($file_path) && pathinfo($file_path, PATHINFO_EXTENSION) == 'jpg') {
                echo '<img src="' . $file_path . '" alt="' . $file . '">';
            }
        }
        ?>
    </div>

</body>
</html>
