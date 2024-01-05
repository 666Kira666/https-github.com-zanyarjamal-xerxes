DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS usrlog;
DROP TABLE IF EXISTS comentario;
DROP TABLE IF EXISTS resposta;

CREATE TABLE IF NOT EXISTS usuarios (
    id              INTEGER PRIMARY KEY,
    nome            TEXT    NOT NULL,
    dataNascimento  TEXT,
    tipo            INTEGER,
    ativado         INTEGER
);
CREATE TABLE IF NOT EXISTS comentario (
    usrlog_id INTEGER,
    id INTEGER PRIMARY key,
    texto text not null,
    foreign key (usrlog_id)
        references usrlog(id)

);

INSERT INTO usuarios (id, nome, dataNascimento, tipo, ativado) values (1,'teste 1','01-01-2000',1,1);
INSERT INTO usuarios (id, nome, dataNascimento, tipo, ativado) values (2,'teste 2','01-01-2001',1,1);
INSERT INTO usuarios (id, nome, dataNascimento, tipo, ativado) values (3,'teste 3','01-01-2003',1,1);

CREATE TABLE IF NOT EXISTS usrlog (
    id              INTEGER PRIMARY KEY,
    dataNascimento  TEXT,
    nome            TEXT    NOT NULL,
    email           TEXT,
    tipo            INTEGER,
    senha           TEXT,
    postagem        TEXT

);

CREATE TABLE IF NOT EXISTS resposta (
    comentario_id INTEGER,
    id INTEGER PRIMARY key,
    usrlog_id INTEGER,
    resposta text not null,
    foreign key (comentario_id)
        references comentario(id),
    foreign key (usrlog_id)
        references usrlog(id)
);

INSERT INTO usrlog (id, nome, email, 5, senha, 'xxx')
values (1,'teste 1','allandaviddearaujo@gmail.com', 12345);

