<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show_Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../public/icon/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
</head>

<body>
    <section class="bg-sky-600 py-3 px-2">
        <?php include_once $VIEW_ADMIN = 'header.php'; ?>
    </section>
    <section class=" px-2">
        <div>
            <?php include_once $VIEW_ADMIN = 'menu.php'; ?>
        </div>
        <div>
            <?php include_once $VIEW_AD ?>
        </div>
    </section>
</body>

</html>