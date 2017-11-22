--Cria primeira factura que é uma factura nula
DELIMITER //
CREATE OR REPLACE DEFINER=`root`@`localhost` TRIGGER primeira_factura
AFTER INSERT ON contratos
FOR EACH ROW 
BEGIN

  INSERT INTO `faturas`(
	`leitura`, 
	`consumo_registado`, 
	`valor_pagar`, 
	`data_leitura`, 
	`data_limite`, 
	`user_id`, 
	`contrato_id`, 
	`multa`,
    `created_at`,
    `updated_at`
	) VALUES (
	new.leitura_inicial,
	0,
	0,
	CURDATE(),
	DATE_ADD(CURDATE(), INTERVAL 1 YEAR),
	new.user_id,
	new.id,
	0.0,
    CURRENT_TIMESTAMP(),
    CURRENT_TIMESTAMP()
	);
END; //
DELIMITER ;

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TRIGGERS WHERE TRIGGER_NAME =  'tr_fnninio_censopersona_ins') THEN
    DROP TRIGGER tr_fnninio_censopersona_ins;
END IF;


DELIMITER //
CREATE PROCEDURE facturar(
	IN contrato_id integer, 
	IN leitura integer,
	IN user_id integer
)
BEGIN
	DECLARE leitura_anterior int;
	DECLARE u_dia int;
	DECLARE mes varchar(20);
	DECLARE ano int;
	
	ano = MONTH(date);
	mes = MONTH(date);
	
	IF EXISTS (SELECT `leitura` FROM `faturas` WHERE `contrato_id` = contrato_id) THEN
    DROP TRIGGER tr_fnninio_censopersona_ins;
	END IF;
	
	INSERT INTO `faturas`(
	`id`, 
	`leitura`, 
	`consumo_registado`, 
	`valor_pagar`, 
	`data_leitura`, 
	`data_limite`, 
	`user_id`, 
	`contrato_id`, 
	`multa`, 
	`status`, 
	`created_at`, 
	`updated_at`
	) 
	VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])
END//
DELIMITER ;

CALL facturar(11);

-----------------------------------
-------Exemplo de procedure--------
DELIMITER //

CREATE PROCEDURE simpleproc (OUT param1 INT)
 BEGIN
  SELECT COUNT(*) INTO param1 FROM t;
 END;
//

DELIMITER ;

CALL simpleproc(@a);

------------------------------------------------------------------------------------
------------------------------------VENDAS VIEW----------------------------------
--(`id`, `pagina`, `valor`, `header_id`, `user_id`, `Metodos_id`, `status`, `data_registo`)

CREATE VIEW fontenaria_V AS
SELECT r.id as id, pagina, valor, m.metodo as metodo, data_registo, f.franquia as franquia, f.provincia as provincia, f.distrito as distrito, h.data_DQA as data_DQA,  
h.data_inicio_periodo_sob_avaliacao as data_inicio, h.data_fim_periodo_sob_avaliacao as data_fim, u.nome as user
FROM (((registo_por_pagina r join header h on r.header_id=h.id) join franquia f on h.franquia_id = f.id)
join metodos m on r.metodos_id=m.id) join user u on r.user_id=u.id
WHERE r.status=1;

CREATE TRIGGER tr1 AFTER INSERT ON contratos
     FOR EACH ROW SET @sum = @sum + NEW.id