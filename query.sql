select * from axa_juego_intento_vida where id_detalle_usuario=50 and id_titulo_encuesta=15
select *  from axa_juego_respuesta_pregunta where id= 6 and estado =2
select *  from axa_juego_respuesta_pregunta rp
inner join axa_juego_intento_vida iv on iv.id = rp.id_intento_vida
where rp.id_intento_vida=6 and rp.id_detalle_persona_responde=50

select * from poll_usuarios;
select  TIMESTAMPDIFF(SECOND,iv.fecha_visualizacion,iv.fecha_finalizacion) as tiempo,iv.id,iv.vidas from axa_juego_intento_vida iv where iv.estado=2 and iv.id_titulo_encuesta = 14

select  TIMESTAMPDIFF(SECOND,iv.fecha_visualizacion,iv.fecha_finalizacion) as tiempo,iv.id,iv.vidas,count(iv.intento) from axa_juego_intento_vida iv where iv.estado=2 and iv.id_titulo_encuesta = 14 group by iv.id_detalle_usuario

select  TIMESTAMPDIFF(SECOND,iv.fecha_visualizacion,iv.fecha_finalizacion) as tiempo,iv.id,iv.vidas,iv.id_detalle_usuario from axa_juego_intento_vida iv where iv.estado=2 and iv.id_titulo_encuesta = 14

update axa_juego_intento_vida set id_detalle_usuario = 53 where id =18

select * from axa_detalle_usuario limit 10

select  TIMESTAMPDIFF(SECOND,iv.fecha_visualizacion,iv.fecha_finalizacion) as tiempo,iv.id,iv.vidas,iv.id_detalle_usuario from axa_juego_intento_vida iv where iv.estado=2  and iv.id_titulo_encuesta = 14  -- group by iv.id_detalle_usuario -- ORDER  BY iv.id desc


select  TIMESTAMPDIFF(SECOND,iv.fecha_visualizacion,iv.fecha_finalizacion) as tiempo,iv.id,iv.vidas,iv.id_detalle_usuario from axa_juego_intento_vida iv where iv.estado=2  and iv.id_titulo_encuesta = 14  -- group by iv.id_detalle_usuario -- ORDER  BY iv.id desc

SELECT  iv.id,TIMESTAMPDIFF(SECOND,iv.fecha_visualizacion,iv.fecha_finalizacion) as tiempo,iv.vidas,iv.id_detalle_usuario
FROM axa_juego_intento_vida iv
  INNER JOIN ( select MAX(id) as maxid from axa_juego_intento_vida group by id
) ajiv ON iv.id = ajiv.maxid
-- WHERE tbl.id=1


SELECT  iv.id,TIMESTAMPDIFF(SECOND,iv.fecha_visualizacion,iv.fecha_finalizacion) as tiempo,iv.vidas,iv.id_detalle_usuario
FROM axa_juego_intento_vida iv
  INNER JOIN ( select MAX(id) as maxid from axa_juego_intento_vida group by id_detalle_usuario
) ajiv ON iv.id = ajiv.maxid
-- where iv.estado=2  and iv.id_titulo_encuesta = 14

--Ultima consulta
SELECT count(rp.valor) correta,iv.id,iv.id_detalle_usuario,iv.id,iv.intento,iv.vidas,
TIMESTAMPDIFF(SECOND,iv.fecha_visualizacion,iv.fecha_finalizacion) as tiempo
FROM axa_juego_intento_vida iv
  INNER JOIN ( select MAX(id) as maxid from axa_juego_intento_vida  where estado=2  and id_titulo_encuesta = 14  group by id_detalle_usuario
) ajiv ON iv.id = ajiv.maxid
inner join axa_juego_respuesta_pregunta rp on rp.id_intento_vida = iv.id
where rp.valor = 1
group by iv.id
order by 1 desc , iv.intento,iv.vidas desc,tiempo

select * from poll_usuarios where nombre_usuario like '%SARMIENTO%'
http://190.242.126.12:3000/admin
