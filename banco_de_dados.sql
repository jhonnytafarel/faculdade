-- banco de dados do sistema de cadastro de veiculos
-- criado para o desafio profissional da faculdade

CREATE DATABASE IF NOT EXISTS sistema_comercial;
USE sistema_comercial;

-- tabela de veiculos
CREATE TABLE IF NOT EXISTS veiculos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    placa VARCHAR(10) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    cor VARCHAR(30) NOT NULL,
    ano_fabricacao INT NOT NULL,
    ano_modelo INT NOT NULL,
    combustivel VARCHAR(20) NOT NULL,
    chassi VARCHAR(50) NOT NULL,
    renavam VARCHAR(50) NOT NULL,
    quilometragem INT NOT NULL,
    data_cadastro DATE NOT NULL,
    observacoes TEXT NOT NULL
);

-- alguns dados de exemplo para testar a listagem
INSERT INTO veiculos (placa, marca, modelo, cor, ano_fabricacao, ano_modelo, combustivel, chassi, renavam, quilometragem, data_cadastro, observacoes) VALUES
('ABC1D23', 'Chevrolet', 'Onix', 'Prata', 2020, 2021, 'Flex', '9BWZZZ377VT004251', '12345678901', 45000, '2025-04-20', 'Veiculo em bom estado, unico dono'),
('XYZ9K87', 'Fiat', 'Argo', 'Branco', 2019, 2019, 'Gasolina', '9BWFZ69Z0E6081234', '98765432109', 62000, '2025-04-22', 'Revisao em dia, pneus novos'),
('JKL4M56', 'Volkswagen', 'Gol', 'Vermelho', 2018, 2018, 'Etanol', '9BWCA05W6TP076543', '45678912345', 78000, '2025-04-24', 'Possui pequenos arranhoes na lateral');
