
DELIMITER //
CREATE TRIGGER primeira_fatura
BEFORE INSERT ON contratos
FOR EACH ROW BEGIN
	INSERT INTO `facturas` (`metodo`, `id`) VALUES
	()
END//
DELIMITER ;


------------------------------------------------------------------------------------
------------------------------------VENDAS VIEW----------------------------------
--(`id`, `pagina`, `valor`, `header_id`, `user_id`, `Metodos_id`, `status`, `data_registo`)

CREATE VIEW fontenaria_V AS
SELECT r.id as id, pagina, valor, m.metodo as metodo, data_registo, f.franquia as franquia, f.provincia as provincia, f.distrito as distrito, h.data_DQA as data_DQA,  
h.data_inicio_periodo_sob_avaliacao as data_inicio, h.data_fim_periodo_sob_avaliacao as data_fim, u.nome as user
FROM (((registo_por_pagina r join header h on r.header_id=h.id) join franquia f on h.franquia_id = f.id)
join metodos m on r.metodos_id=m.id) join user u on r.user_id=u.id
WHERE r.status=1;

-------------------------------Metosdos insert-------------------------------
INSERT INTO `metodos` (`metodo`, `id`) VALUES
('Distribuição de contraceptivos 25+ e 25-', 'contraceptivos'),
('Nova utente de PF Pilula <=19 anos', 'novasPfPilulaXIX'),
('Nova utente de PF Pilula 20-24 anos', 'novasPfPilulaXXIV'),
('Nova utente de PF Pilula >=25 anos', 'novasPfPilulaXXV'),
('Nova utente de PF Injectaveis <=19 anos', 'novasPfInjectaveisXIX'),
('Nova utente de PF Injectaveis 20-24 anos', 'novasPfInjectaveisXXIV'),
('Nova utente de PF Injectaveis >=25 anos', 'novasPfInjectaveisXXV'),
('Nova utente de PF Implante <=19 anos', 'novasPfImplanteXIX'),
('Nova utente de PF Implante 20-24 anos', 'novasPfImplanteXXIV'),
('Nova utente de PF Implante >=25 anos', 'novasPfImplanteXXV'),
('Nova utente de PF DIU <=19 anos', 'novasPfDiuXIX'),
('Nova utente de PF DIU 20-24 anos', 'novasPfDiuXXIV'),
('Nova utente de PF DIU >=25 anos', 'novasPfDiuXXV'),
('Nova utente de PF N/A', 'novasPfNa'),
('Continuadora de PF Pilula <=19 anos', 'continuadoraPfPilulaXIX'),
('Continuadora de PF Pilula 20-24 anos', 'continuadoraPfPilulaXXIV'),
('Continuadora de PF Pilula >=25 anos', 'continuadoraPfPilulaXXV'),
('Continuadora de PF Injectaveis <=19 anos', 'continuadoraPfInjectaveisXIX'),
('Continuadora de PF Injectaveis 20-24 anos', 'continuadoraPfInjectaveisXXIV'),
('Continuadora de PF Injectaveis >=25 anos', 'continuadoraPfInjectaveisXXV'),
('Continuadora de PF Implante <=19 anos', 'continuadoraPfImplanteXIX'),
('Continuadora de PF Implante 20-24 anos', 'continuadoraPfImplanteXXIV'),
('Continuadora de PF Implante >=25 anos', 'continuadoraPfImplanteXXV'),
('Continuadora de PF DIU <=19 anos', 'continuadoraPfDiuXIX'),
('Continuadora de PF DIU 20-24 anos', 'continuadoraPfDiuXXIV'),
('Continuadora de PF DIU >=25 anos', 'continuadoraPfDiuXXV'),
('Continuadora de PF N/A', 'continuadoraPfNa'),
('Pilula Utentes Novas no metodo <=19 anos', 'pilulaNovasXIX'),
('Pilula Utentes Novas no metodo 20-24 anos', 'pilulaNovasXXIV'),
('Pilula Utentes Novas no metodo >=25 anos', 'pilulaNovasXXV'),
('Pilula Utentes que continuam o metodo <=19 anos', 'pilulaContinuamXIX'),
('Pilula Utentes que continuam o metodo 20-24 anos', 'pilulaContinuamXXIV'),
('Pilula Utentes que continuam o metodo >=25 anos', 'pilulaContinuamXXV'),
('Pilula Total de ciclos <=19 anos', 'pilulaTotalCiclosXIX'),
('Pilula Total de ciclos 20-24 anos', 'pilulaTotalCiclosXXIV'),
('Pilula Total de ciclos >=25 anos', 'pilulaTotalCiclosXXV'),
('Pilula N/A', 'pilulaNa'),
('Injectaveis Utentes novos <=19 anos', 'InjectaveisNovasXIX'),
('Injectaveis Utentes novos 20-24 anos', 'InjectaveisNovasXXIV'),
('Injectaveis Utentes novos >=25 anos', 'InjectaveisNovasXXV'),
('Injectaveis Utentes seguintes <=19 anos', 'InjectaveisContinuamXIX'),
('Injectaveis Utentes seguintes 20-24 anos', 'InjectaveisContinuamXXIV'),
('Injectaveis Utentes seguintes >=25 anos', 'InjectaveisContinuamXXV'),
('Injectaveis Total de injectaveis por tipo <=19 anos', 'InjectaveisTotalCiclosXIX'),
('Injectaveis Total de injectaveis por tipo 20-24 anos', 'InjectaveisTotalCiclosXXIV'),
('Injectaveis Total de injectaveis por tipo >=25 anos', 'InjectaveisTotalCiclosXXV'),
('Injectaveis  N/A', 'InjectaveisNa'),
('Implantes Utentes novos <=19 anos', 'ImplantesNovasXIX'),
('Implantes Utentes novos 20-24 anos', 'ImplantesNovasXXIV'),
('Implantes Utentes novos >=25 anos', 'ImplantesNovasXXV'),
('Implantes Utentes que continuam o metodo <=19 anos', 'ImplantesContinuamXIX'),
('Implantes Utentes que continuam o metodo 20-24 anos', 'ImplantesContinuamXXIV'),
('Implantes Utentes que continuam o metodo >=25 anos', 'ImplantesContinuamXXV'),
('Implantes Total de Implantes por tipo <=19 anos', 'ImplantesTotalCiclosXIX'),
('Implantes Total de Implantes por tipo 20-24 anos', 'ImplantesTotalCiclosXXIV'),
('Implantes Total de Implantes por tipo >=25 anos', 'ImplantesTotalCiclosXXV'),
('Implantes N/A', 'ImplantesNa'),
('DIU Utentes novos <=19 anos', 'DIUNovasXIX'),
('DIU Utentes novos 20-24 anos', 'DIUNovasXXIV'),
('DIU Utentes novos >=25 anos', 'DIUNovasXXV'),
('DIU Utentes que continuam o metodo <=19 anos', 'DIUContinuamXIX'),
('DIU Utentes que continuam o metodo 20-24 anos', 'DIUContinuamXXIV'),
('DIU Utentes que continuam o metodo >=25 anos', 'DIUContinuamXXV'),
('DIU Total de Implantes por tipo <=19 anos', 'DIUTotalCiclosXIX'),
('DIU Total de Implantes por tipo 20-24 anos', 'DIUTotalCiclosXXIV'),
('DIU Total de Implantes por tipo >=25 anos', 'DIUTotalCiclosXXV'),
('DIU N/A', 'DIUNa');
