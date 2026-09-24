-- Script de criação do banco de dados e tabela
CREATE DATABASE IF NOT EXISTS ponto_eletronico CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ponto_eletronico;

CREATE TABLE IF NOT EXISTS registro_ponto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    funcionario_nome VARCHAR(100) NOT NULL,
    tipo VARCHAR(20) NOT NULL, -- 'entrada', 'intervalo_inicio', 'intervalo_fim', 'saida'
    data_hora DATETIME NOT NULL,
    observacao TEXT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
