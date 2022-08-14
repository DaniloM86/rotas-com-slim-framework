CREATE DATABASE sysagenda;
use sysagenda;
CREATE TABLE tb_agenda(
    idContato int AUTO_INCREMENT PRIMARY KEY
        nomeContato VARCHAR(100),
            emailContato VARCHAR(50),
              telefoneContato VARCHAR(20),
        sexoContato CHAR(1),
    dataNascContato date
);