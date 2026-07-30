-- DDL(DATA DEFINITION LANGUEGE) LINGUAGEM DE DEFINIÇÃO DE DADOS.
-- Criação, alteração e exclusão no banco e nas tabelas.

-- Criar o Banco.
CREATE DATABASE IF NOT EXISTS Loja_db;

-- Selecionar o Banco.
use Loja_db;

-- Criar tabelas.
CREATE TABLE TbClientes(
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome_cliente VARCHAR(100) NOT NULL,
    email_cliente VARCHAR(100) NOT NULL UNIQUE,
    telefone_cliente VARCHAR(20),
    cidade_cliente VARCHAR(50)
);

CREATE TABLE TbProdutos(
    id_produtos INT PRIMARY KEY AUTO_INCREMENT,
    nome_produto VARCHAR(100) NOT NULL,
    descricao_produto TEXT,
    preco_produto DECIMAL(10,2) NOT NULL,
    estoque_produto INT NOT NULL
);

CREATE TABLE TbPedidos(
    id_pedido INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT,
    data_pedido DATE NOT NULL,
    valor_total DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES TbClientes(id_cliente)
);

CREATE TABLE TbItensPedido(
    id_item INT PRIMARY KEY AUTO_INCREMENT,
    id_pedido INT,
    id_produtos INT,
    quantidade INT NOT NULL,
    preco_unitario DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_pedido) REFERENCES TbPedidos(id_pedido),
    FOREIGN KEY (id_produtos) REFERENCES TbProdutos(id_produtos)
);

-- Ver tabelas criadas.
show tables;

-- Ver a estrutura da tabela.
desc TbClientes;