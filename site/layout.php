<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="">Trang chủ</a>
            </li>
            <li>
                <a href="<?= SITE_URL . "?danh-muc"?>">Danh mục</a>
            </li>
        </ul>
    </nav>
    <main>
        <?php include_once $VIEW_NAME ?>
    </main>

    <footer>
        Chân trang
    </footer>
</body>
</html>