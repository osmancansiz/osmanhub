<?php

if (isset($_POST['login']) && !empty($_POST['email'])
&& !empty($_POST['pass'])){
    
    if ($_POST['email'] == 'ocansiz@osmanhub.com' &&
        $_POST['pass'] == '1234'){
            header("Location:index.php",true);
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("E-Mail veya Şifre Yanlış!")';
        echo '</script>';
    }
}

if(isset($_POST['login']) && empty($_POST['email']) && empty($_POST['pass'])){
    echo '<script language="javascript">';
    echo 'alert("Alanları Boş Bırakmayın!")';
    echo '</script>';
}

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
<div align="center">
    <a href="login.php"><img src="icon.png" width="90" height="90"></a>
    <a href="login.php"><img src="banner.png" width="200"></a>
</div>
<div class="divider text-center" data-content="Giriş Yap-Kaydol"></div>
<div id="login">
    <div class="columns p-2">
        <div class="column">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label class="form-label" for="e-mail">Email</label>
                    <input class="form-input" type="text" name="email" placeholder="Email" >
                </div>
                <div class="form-group">
                    <label class="form-label" for="pass">Şifre</label>
                    <input class="form-input" type="password" name="pass" placeholder="Şifre">
                </div>
                <div class="form-group">
                    <label class="form-checkbox">
                        <input type="checkbox">
                        <i class="form-icon"></i> Beni Hatırla
                    </label>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="login" name="login">Giriş Yap</button>
                </div>
            </form>
        </div>
        <div class="divider-vert" data-content="VEYA"></div>
        <div class="column">
            <form>
                <div class="form-group">
                    <label class="form-label" for="input-example-3">Email</label>
                    <input class="form-input" type="text" id="input-example-3" placeholder="Email">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Kaydol</button>
                    <button class="btn btn-link btn-block">Daha Fazlası İçin</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div><div class="divider"></div><br>
<div class="column col-sm-12 col-8 col-mx-auto">
    <div class="off-canvas">
        <a class="off-canvas-toggle btn btn-primary btn-action" href="#sidebar-demo">
            <i class="icon icon-menu"></i>
        </a>
        <div class="column col-sm-12 col-3 col-mx-auto">
            <div class="parallax">
                <div class="parallax-top-left"></div>
                <div class="parallax-top-right"></div>
                <div class="parallax-bottom-left"></div>
                <div class="parallax-bottom-right"></div>
                <div class="parallax-content">
                    <div class="parallax-front">
                        <h3>Dualcore Programmer</h3>
                    </div>
                    <div class="parallax-back">
                        <img src="222.png" class="img-responsive rounded" ...>
                    </div>
                </div>
            </div>
        </div>
        <a class="off-canvas-overlay" href="#close"></a>
        <div class="off-canvas-content">
            <div class="content">
                <h4>Dualcore Programmer</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.</p>
                <p>Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up on goofballs.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>



