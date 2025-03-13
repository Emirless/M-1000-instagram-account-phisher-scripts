CREATE TABLE instagram_2fa(

    id SMALLINT AUTO_INCREMENT PRIMARY KEY,
    2FA_Code varchar(6) NOT NULL,
    Kayıt_Tarih datetime DEFAULT CURRENT_TIMESTAMP
    
);