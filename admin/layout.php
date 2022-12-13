<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show_Product</title>
    <link href="style/style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../public/icon/fontawesome-free-6.1.1-web/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../site/src/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../site/src/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- responsive -->

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript">
    </script>

</head>

<body>

    <section class="">

        <div class=" h-[70px] bg-gray-200">
            <div class="">
            <?php include 'header.php'; ?>
            
            </div>
        </div>
        
        <div class="main-panel bg-white ">
            <?php if(isset($VIEW_AD)) include_once $VIEW_AD ?>
        </div>
        <div class="">
            <div class="" id="main-menu" >
                <?php include 'menu.php'; ?>
            </div>
        </div>

        </div>
    </section>
</body>

</html>