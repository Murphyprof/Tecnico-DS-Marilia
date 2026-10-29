CREATE DATABASE IF NOT EXISTS loja
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE loja;

CREATE TABLE IF NOT EXISTS item (
    idItem INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(120) NOT NULL,
    marca VARCHAR(100) NULL,
    precoDeCompra DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    unidadeDeMedida VARCHAR(30) NULL,
    tamanho DECIMAL(10,2) NULL,
    imagem VARCHAR(255) NULL,
    PRIMARY KEY (idItem)
) ENGINE=InnoDB
  DEFAULT CHARACTER SET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS pedido (
    idPedido INT UNSIGNED NOT NULL AUTO_INCREMENT,
    dataDoPedido DATE NOT NULL,
    PRIMARY KEY (idPedido)
) ENGINE=InnoDB
  DEFAULT CHARACTER SET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS PedidoPossuiItem (
    idPedido INT UNSIGNED NOT NULL,
    idItem INT UNSIGNED NOT NULL,
    quantidade INT UNSIGNED NOT NULL DEFAULT 1,
    PRIMARY KEY (idPedido, idItem),
    CONSTRAINT fk_pedido_item_pedido
        FOREIGN KEY (idPedido) REFERENCES pedido (idPedido)
        ON DELETE CASCADE,
    CONSTRAINT fk_pedido_item_item
        FOREIGN KEY (idItem) REFERENCES item (idItem)
        ON DELETE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARACTER SET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;
