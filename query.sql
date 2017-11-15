
select * from axa_juego_intento_vida where id_detalle_usuario=50 and id_titulo_encuesta=15
select *  from axa_juego_respuesta_pregunta where id= 6 and estado =2
select *  from axa_juego_respuesta_pregunta rp
inner join axa_juego_intento_vida iv on iv.id = rp.id_intento_vida
where rp.id_intento_vida=6 and rp.id_detalle_persona_responde=50

select * from poll_usuarios;
