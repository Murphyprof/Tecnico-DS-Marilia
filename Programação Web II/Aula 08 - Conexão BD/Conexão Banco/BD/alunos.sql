CREATE DATABASE IF NOT EXISTS alunos
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE alunos;

CREATE TABLE IF NOT EXISTS alunos (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(120) NOT NULL,
    email VARCHAR(160) NOT NULL,
    data_nascimento DATE NULL,
    criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY uk_alunos_email (email)
) ENGINE=InnoDB
  DEFAULT CHARACTER SET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;
