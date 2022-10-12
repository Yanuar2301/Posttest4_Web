<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingIt</title>
    <link rel="stylesheet" href="stylesheet/style.css?v5">
</head>
<body>
    <div class = "container" >
        <div class = "container_tulisan">
            <div class = "h1">
                <h1>Sing It</h1>
            </div>
            <div class = "p">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Nostrum vero odit illo itaque quaerat ullam veritatis error, quia nesciunt incidunt.</p>
            </div>
        </div>
        <div class = "container_profile">
            <h1>Profile</h1>
            <div class = "profile">
                <div>
                    <label  >Nama</label><br>
                    <?php echo $_POST['nama'] ?>
                </div>
                <div>
                    <label  >Email</label><br>
                    <?php echo $_POST['email'] ?>
                </div>
                <div>
                    <label  >No HP</label><br>
                    <?php echo $_POST['nohp'] ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>