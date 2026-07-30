-- (DDL) Adicionar coluna, modificar campos e renomear tabela.
alter table TbClientes
ADD column data_cadastro date;

alter table TbClientes
modify column telefone_cliente varchar(30);

alter table TbClientes
rename to Tbcliente;

alter table Tbcliente
drop column data_cadastro;

-- Renomeia coluna e/ou modifica tipo de dados
alter table Tbcliente
change column telefone_cliente telefone_cliente varchar(20);

-- Adicionar restrição(chave estrangeira)
alter table TbPedidos
ADD CONSTRAINT fK_cliente foreign key(id_cliente) REFERENCES
Tbcliente(id_cliente);

-- Lock table read - bloaqueia leitura
-- Lock table write - bloqueia gravação

Lock tables Tbcliente WRITE;
alter table Tbcliente
ADD primary key(cod_cliente);
unlock tables;

-- DML Atualização e Exclusão
UPDATE TbProdutos
SET preco_produto = 4200.00
where id_produto = 1;
-- ou
where nome_produto = 'Notebook';

UPDATE Tbcliente
SET cidade_cliente = 'Campinas'
where id_cliente = 1;

UPDATE TbItensPedido
SET quantidade = 2
where id_pedido = 1 AND id_produto = 1;

-- Excluir um pedido
delete from TbItensPedido
where id_pedido = 1;

delete from TbPedidos
where id_pedido = 1;


-- Excluir dados sem excluir a tabela.
trucante table Tbcliente;

