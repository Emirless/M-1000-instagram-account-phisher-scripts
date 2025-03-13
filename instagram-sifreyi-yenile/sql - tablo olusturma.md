create table insta_reset_password (

	id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    insta_old_password varchar(120),
    insta_new_password varchar(120),
    Kayıt_Tarih datetime default CURRENT_TIMESTAMP
    
)