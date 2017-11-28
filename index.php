<?php
/*
if (!($_POST['logout']=="")) {

    echo "osman";
    header("Location:login.php",true);
}
else{
    $php_errormsg = "E-mail Veya Şifre Yanlış.";
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="icon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
    <title>OsmanHub</title>
    <script src="https://unpkg.com/vue"></script>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
</head>
<body>

<div id="anadiv" class="mx-2 my-2">
    <form action="login.php" method="post">
        <div class="input-group input-inline float-right">
            <button class="btn btn-primary input-group-btn" name="logout">Logout</button>
        </div>
    </form>
</div>
<div align="center">
    <a href="index.php"><img src="icon.png" width="90" height="90"></a>
    <a href="index.php"><img src="banner.png" width="200"></a>
</div>
<div class="divider"></div>
<div id="app" >
    <div class="columns">
        <div class="column col-3 col-xs-12">
            <ul class="menu">
                <li class="menu-item">
                    <div class="tile tile-centered">
                        <div class="tile-icon avatar avatar-xl">
                            <img src="avatar-1.png" class="avatar" alt="avatar">
                        </div>
                        <div class="tile-content">
                            Osman Cansız
                        </div>
                    </div>
                </li>
                <!-- menu header çizgisi -->
                <li class="divider"></li>
                <!-- menu itemleri -->
                <li class="menu-item">
                    <div class="menu-badge">
                        <label class="label label-primary">3</label>
                    </div>
                    <a href="#" class="active" v-on:click="seen = !seen" >
                        Bağlantılar
                    </a>

                </li>
                <!-- menu divider çizgisi -->
                <li class="divider"></li>
                <li class="menu-item">
                    <a href="profil.html">
                        Profilim
                    </a>
                </li>
            </ul>
        </div>
        <div class="column col-4 col-xs-12">
            <ul class="menu" v-if="seen">
                <li class="divider" data-content="Bağlantılar"></li>
                <li class="menu-item">
                    <a href="https://github.com/osmancansiz"target="_blank">GitHub</a>
                </li>
                <li class="menu-item">
                    <a href="https://instagram.com/osmanncansiz"target="_blank">Instagram</a>
                </li>
                <li class="menu-item">
                    <a href="https://twitter.com/osmanncansiz"target="_blank">Twitter</a>
                </li>
            </ul>
        </div>
    </div><br><br>
</div>
</body>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            seen: false
        }
    })
</script>

</html>
