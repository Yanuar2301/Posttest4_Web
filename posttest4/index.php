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
        <div class = "form">
            <h1>Registration</h1>
            <form action="profile.php" method="post">
                <div class = "isi">
                    <label  for="">Nama</label>
                    <input  type="text" name="nama" required>
                    <label for="">Password</label>
                    <input type="password" name="password" required>
                    <label  for="">Email</label>
                    <input  type="email" name="email" required>
                    <label  for="">No Hp</label>
                    <input  type="text" name="nohp" required>
                    <button type="submit" name="submit"><b>Submit</b></button>

                </div>
            </form>
        </div>
    </div>
</body>
</html>