<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CAPTCHA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h3 class="title">PHP CAPTCHA</h3>
        </div>
    </div>
        <?php 
            if (isset($_GET['message'])){
                if ($_GET['message'] == 'success'){ ?>
                    <div class="alert alert-success">Captcha Benar!</div>
                <?php } else if ($_GET['message'] == 'failed'){ ?>
                    <div class="alert alert-danger">Captcha Salah!</div>
                <?php } else { ?>
                    <div class="alert alert-danger">Jawaban kosong!</div>
                <?php } 
            }
        ?>
    <div class="card">
        <form action="captcha.php" method="post">
            <div class="form-group">
                <label for="captcha">Captcha</label>
                <img src="captcha.php" alt="captcha">
            </div>
            <div class="form-group">
                <label for="input">Jawaban</label>
                <input type="text" name="input" id="input">
            </div>
            <div class="form-group">
                <button type="submit" class="btn">CEK CAPTCHA</button>
            </div>
        </form>
    </div>
</body>
</html>