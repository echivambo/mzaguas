--Cria primeira factura que é uma factura nula
DELIMITER //
CREATE OR REPLACE DEFINER=root@localhost TRIGGER primeira_factura
AFTER INSERT ON contratos
FOR EACH ROW 
BEGIN

  INSERT INTO faturas(
	leitura, 
	consumo_registado, 
	valor_pagar, 
	data_leitura, 
	data_limite, 
	user_id, 
	contrato_id, 
	multa,
    created_at,
    updated_at
	) VALUES (
	new.leitura_inicial,
	0,
	0,
	CURDATE(),
	DATE_ADD(CURDATE(), INTERVAL 1 MONTH),
	new.user_id,
	new.id,
	0.00,
    CURRENT_TIMESTAMP(),
    CURRENT_TIMESTAMP()
	);
END; //
DELIMITER ;

----------------------------------------------
------------------Efectua o pagamento-------------
DELIMITER //
CREATE OR REPLACE DEFINER=root@localhost TRIGGER pagamento
AFTER INSERT ON pagamentos
FOR EACH ROW 
BEGIN
	DECLARE valor_p double;
	
	SELECT valor_pagar into valor_p FROM faturas where status=1 and id=new.idfaturas;
	
	if(new.valor == valor_p) then
		UPDATE franquias SET estado_pagamento=1 WHERE new.idfacturas=facturas.id;
	else if(new.valor > valor_p) then	
		UPDATE clientes SET saldo=(new.valor - valor_p) WHERE clientes.id=(select cliente_id from contratos_V where contratos_v.contrato_id=new.id);
	end if;	
END; //
DELIMITER ;

----------------------------------------------
------------------Actualizar nome-------------
DELIMITER //
CREATE OR REPLACE DEFINER=root@localhost TRIGGER update_nome_cliente
AFTER UPDATE ON clientes
FOR EACH ROW 
BEGIN
	UPDATE contratos SET nome_cliente=nem.nome WHERE cliente_id=new.id;
END; //
DELIMITER ;

-----------------------------------------------------------
-------------------Procedimento Facturar-------------------

DELIMITER //
CREATE PROCEDURE facturar(
	IN contrato_id integer, 
	IN leitura integer,
	IN data_leitura date,
	IN user_id integer
)
BEGIN
	DECLARE leitura_anterior int;
	DECLARE u_dia int;
	DECLARE consumo double;
	DECLARE taxa_activ double;
	DECLARE valor double;
	
	SELECT dia into u_dia FROM dia_limite_pagamentos where status=1;
	SELECT taxa into taxa_activ FROM taxa_por_metros where status=1;
	SELECT leitura into leitura_anterior FROM factura where status=1 and id = (select max(id) from factura where status=1);
	
    SELECT (leitura - leitura_anterior) into consumo from DUAL;
    SELECT (consumo * taxa_activ) into valor from DUAL;
    
IF (consumo>0) THEN
	INSERT INTO faturas(
	leitura, 
	consumo_registado, 
	valor_pagar, 
	data_leitura, 
	data_limite, 
	user_id, 
	contrato_id, 
	multa, 
	created_at, 
	updated_at
	) 
	VALUES (
	leitura,
	consumo,
	valor,
	data_leitura,
	DATE_ADD(u_dia||'-'||MONTH(data_leitura)||'-'||YEAR(data_leitura), INTERVAL 1 YEAR),
	user_id,
	contrato_id,
	0.00,
    CURRENT_TIMESTAMP(),
    CURRENT_TIMESTAMP()
	);
END IF;	
END//
DELIMITER ;


---------------------------------------------------------------------------------
------------------------------------VENDAS VIEW----------------------------------

CREATE VIEW contratos_V AS
SELECT co.id as contrato_id, co.bairro as bairro, co.casa as casa, co.rua as rua, co.nome_cliente as cliente, 
co.data as contrato_data, co.created_at as data_reg, co.nr_contador as nr_contador, co.leitura_inicial as leitura_inicial,
cl.apelido as cliente_apelido, cl.nome as cliente_nome,cl.id as cliente_id ,cl.email as cliente_email, cl.tel1 as clente_tel1,
cl.tel2 as cliente_tel2, cl.saldo as saldo, u.name as usuario, u.email as user_email, u.grupo as user_grupo, 
f.nome as fontenaria_nome , f.endereco as fontenaria_endereco, f.email as franquia_email, f.tel1 as franquia_tel1, f.tel2 as tel2, d.nome as distrito, d.provincia as provincia
FROM (((contratos co join clientes cl on co.cliente_id = cl.id) join users u on co.user_id = u.id) join
fontenarias f on u.fontenaria_id = f.id) join distritos d on f.distrito_id = d.id
WHERE co.status=1;

-------------------------------------------------------
-------------------------Sequencia------------------------------
CREATE SEQUENCE sequencia START WITH 200100 INCREMENT BY 1;
REATE SEQUENCE s3 START WITH 2017 INCREMENT BY 1 MINVALUE=1 MAXVALUE=1000;



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