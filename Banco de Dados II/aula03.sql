INSERT INTO TbClientes(nome_cliente, email_cliente, telefone_cliente, cidade_cliente)
VALUES
('Ana Silva', 'ana.silva@exemplo.com', '(11)9999-0001', 'São Paulo'),
('Bruno Lima', 'bruno.lima@exemplo.com', '(21)9999-0002', 'Rio de Janeiro'),
('Carla Souza', 'carla.souza@exemplo.com', '(31)9999-0003', 'Belo Horizonte');

INSERT INTO TbProdutos(nome_produto, descricao_produto, preco_produto, estoque_produto)
VALUES
('Notebook', 'Notebook 15" com 8GB RAM', 4500.00, 10),
('Mouse', 'Mouse Óptico USB', 75.00, 50),
('Teclado', 'Teclado Mecânico', 250.00, 20);

INSERT INTO TbPedidos(id_cliente, data_pedido, valor_total)
VALUES
(1, '2026-03-01', 4575.00),
(2, '2026-03-02', 250.00),
(3, '2026-03-03', 4825.00);         

INSERT INTO TbItensPedido(id_pedido, id_produtos, quantidade, preco_unitario)
VALUES
(1, 1, 1, 4575.00),
(2, 3, 1, 250.00),
(3, 2, 1, 75.00),
(3, 1, 1, 4575.00),
(3, 3, 1, 175.00);