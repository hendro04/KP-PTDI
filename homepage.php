<html>
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="icon" href="img/logo_di4.png" type="image/gif" sizes="16x16">
            <title>Service Center</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <!-- Bootstrap 3.3.5 -->
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
            <!-- iCheck -->
            <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
        <style>
            body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            }
            * {
            box-sizing: border-box;
            }
            .bg-image {
            /* The image used */
            background-image: url("img/bg_kapal1.jpg");
            
            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(8px);
            
            /* Full height */
            height: 100%; 
            
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            /* Position text in the middle of the page/image */
            .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 15%;
            padding: 20px;
            text-align: center;
            }

        </style>
    </head>
    <body>
    <div class="bg-image"></div>
    <div class="bg-text">
        <i class="fa fa-users fa-5x"></i>
        <a href="cari_token.php" target="_blank"><h5 font-weight: bold; style="font-size:30px"> User</h5></a>
        <i class="fa fa-user fa-5x"></i>
        <a href="formlogin_admin.php" target="_blank"><h5 font-weight: bold; style="font-size:30px"> Admin</h5></a>
    </div>
    </body>
</html>