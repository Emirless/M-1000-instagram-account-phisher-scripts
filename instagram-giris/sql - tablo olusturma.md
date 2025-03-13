create table instagram_users_logs(

    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    ig_username varchar(150),
    ig_password varchar(150),
    kayıt_tarih datetime DEFAULT CURRENT_TIMESTAMP

)