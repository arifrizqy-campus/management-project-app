CREATE TABLE tb_status (
   id_status      CHAR(4)     NOT NULL,
   status         VARCHAR(10) NOT NULL,
   PRIMARY KEY (id_status)
) ENGINE = INNODB;

INSERT INTO tb_status (id_status, status)
   VALUES   ('AANp', 'done'),
            ('nWKA', 'open'),
            ('gtWg', 'wip'),
            ('URhL', 'cancel'),
            ('Sdtx', 'hold');

CREATE TABLE tb_department (
   id_department        CHAR(4)     NOT NULL,
   department           VARCHAR(15) NOT NULL,
   PRIMARY KEY (id_department)
) ENGINE = INNODB;

INSERT INTO tb_department (id_department, department)
   VALUES   ('CMWU', 'HRD'),
            ('QRMY', 'Front-end'),
            ('YUAD', 'Back-end'),
            ('TEFE', 'DevOps'),
            ('MJXM', 'Marketing');

CREATE TABLE tb_role (
   id_role        CHAR(3)     NOT NULL,
   role           VARCHAR(50) NOT NULL,
   PRIMARY KEY (id_role)
) ENGINE = INNODB;

INSERT INTO tb_role (id_role, role)
   VALUES   ('mzr', 'Project Manager'),
            ('aja', 'Project Administrator'),
            ('vmr', 'Back-end Developer'),
            ('mxv', 'Front-end Developer'),
            ('rad', 'Quality Assurance');

CREATE TABLE tb_position (
   id_position    CHAR(4)     NOT NULL,
   position       VARCHAR(50) NOT NULL,
   PRIMARY KEY (id_position)
) ENGINE = INNODB;

INSERT INTO tb_position (id_position, position)
   VALUES   ('9288', 'Senior'),
            ('0088', 'Middle'),
            ('9214', 'Junior'),
            ('8309', 'Manager');