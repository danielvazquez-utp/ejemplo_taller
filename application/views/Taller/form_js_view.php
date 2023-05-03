<script>

    $(function(){
    
        // Muestra el div con la pregunta ¿Donde trabaja?
        $("#trabaja_1").on('click', function(){
            $("#div_trabaja").show(300);
            $("#donde").attr('required', 'required');
        });

        // Oculta el div con la pregunta ¿Donde trabaja?
        $("#trabaja_2").on('click', function(){
            $("#div_trabaja").hide(300);
            $("#donde").removeAttr('required');
        });

        // Mensaje de confirmacion
        $('.btn-borrar').on('click', function(){
            //alert('Presionaste el botón para borrar');
            const name = $(this).attr('data-name');
            if (confirm('¿Deseas borrar el taller '+ name +'?')) {
                return true;
            }
            else{
                return false;   
            }
        });

        $('.btn-actualizar').on('click', function(){
            const id = $(this).attr('data-id');
            const datos = {
                'id_taller' : id,
            }
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('recupera_taller') ?>',
                data: datos,
                success: function( data ){
                    console.log(data);
                    const obj = JSON.parse(data);
                    $('#id_modal').val(obj.id_taller);
                    $('#nombre_modal').val(obj.nombre);
                    $('#lugar_modal').val(obj.lugar);
                    $('#cupo_modal').val(obj.cupo);
                    $('#hora_modal').val(obj.hora);
                    $('#fecha_modal').val(obj.fecha);
                    $('#tipo_modal').val(obj.tipo);
                    $('#correo_modal').val(obj.email);
                }
            })
        });

        $('#btn-actualiza').on('click', function(){
            const id = $('#id_modal').val();
            const nombre = $('#nombre_modal').val();
            const lugar = $('#lugar_modal').val();
            const cupo = $('#cupo_modal').val();
            const hora = $('#hora_modal').val();
            const fecha = $('#fecha_modal').val();
            const tipo = $('#tipo_modal').val();
            const correo = $('#correo_modal').val();
            const datos = {
                'id' :   id,
                'nombre'    :   nombre,
                'lugar'     :   lugar,
                'cupo'      :   cupo,
                'hora'      :   hora,
                'fecha'     :   fecha,
                'tipo'      :   tipo,
                'email'     :   correo,
            }
            console.log(datos);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('actualiza_taller') ?>',
                data: datos,
                success: function( data ){
                    alert('Taller actualizado');
                    //document.location = '<?php echo base_url('formulario') ?>'
                    $('#r_' + id).html('<td>'+ id +'</td>' + 
                    '<td>'+ nombre +'</td>' + 
                    '<td>'+ fecha +'</td>' + 
                    '<td><a href="'+id+'" title="Actualizar taller" class="">'+
                        '<i class="fas fa-edit"></i>'+
                      '</a>'+
                      '<a href="'+id+'" title="Borrar taller" class="btn-borrar" data-name="'+nombre+'">'+
                        '<i class="fas fa-trash"></i>'+
                      '</a>'+
                      '<a href="" title="Actualizar taller" class="btn-actualizar" data-id="'+id+'" data-toggle="modal" data-target="#modal-default">'+
                        '<i class="fas fa-edit text-purple"></i>'+
                      '</a></td>'
                    );
                    $('#modal-default').modal('hide');
                }
            })
        });

    })

</script>
