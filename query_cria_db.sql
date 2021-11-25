CREATE DATABASE rede_social_curso_devweb20;
USE rede_social_curso_devweb20;

CREATE TABLE amizades (
	id INT(11) NOT NULL PRIMARY KEY,
    enviou INT(11) NOT NULL,
    recebeu INT(11) NOT NULL,
    status INT(11) NOT NULL
);

CREATE TABLE posts (
	id INT(11) NOT NULL PRIMARY KEY,
    usuario_id INT(11) NOT NULL,
    post TEXT NOT NULL,
    date DATETIME NOT NULL
);

CREATE TABLE usuarios (
	id INT(11) NOT NULL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha TEXT NOT NULL,
    ultimo_post DATETIME NOT NULL,
    img TEXT NOT NULL
);

