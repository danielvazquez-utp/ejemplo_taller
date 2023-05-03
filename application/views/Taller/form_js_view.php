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
            alert(id);
            const datos = {
                'id_taller' : id,
            }
            $.ajax({
                type: 'POST',
                url: '<?php base_url('recupera_taller') ?>',
                data: datos,
                success: function( data ){
                    alert('Datos actualizados');
                }
            })
        });

    })

</script>
