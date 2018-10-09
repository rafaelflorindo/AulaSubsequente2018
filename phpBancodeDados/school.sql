//Criação da base de dados
create database school;

//criando tabela
create table alunos
(
    ra int PRIMARY key AUTO_INCREMENT,
    nome varchar (80),
    idade int,
    dataNascimento date,
    rg char(15),
    endereco varchar (150),
    telefone char (12),
    idTurma int
);

//listando Registros
SELECT * FROM alunos;	

//inserindo registro único
INSERT INTO alunos (nome, idade, dataNascimento, rg, endereco, telefone) VALUES ('Rafael A. Florindo', 38, '1982-12-02', '12547893', 'José Granado Parra, 374','44 3027-6360');
INSERT INTO alunos (nome, idade, dataNascimento, rg, endereco, telefone) VALUES ('Ricardo A. Florindo', 38, '1982-12-02', '12547893', 'José Granado Parra, 374','44 3027-6360')

//inserindo mais do que um registro
INSERT INTO alunos (nome, idade, dataNascimento, rg, endereco, telefone) VALUES 
('Arthur A. Florindo', 38, '1982-12-02', '12547893', 'José Granado Parra, 374','44 3027-6360'),
('Murilo A. Florindo', 38, '1982-12-02', '12547893', 'José Granado Parra, 374','44 3027-6360'),
('Davi A. Florindo', 38, '1982-12-02', '12547893', 'José Granado Parra, 374','44 3027-6360'),
('Helton', 20, '2010-12-02', '12547893', 'José Granado Parra, 374','44 3027-6360'), ('Guilher', 48, '2012-12-02', '12547893', 'José Granado Parra, 374','44 3027-6360'), ('Manco', 14, '2018-12-02', '12547893', 'José Granado Parra, 374','44 3027-6360')

UPDATE alunos set dataNascimento='1982-12-02' where ra=12;

UPDATE alunos set dataNascimento='1982-12-02', idade=78 where ra=12;