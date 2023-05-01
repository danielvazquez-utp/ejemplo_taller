<script>
    $(function(){
        //$("#div_donde").hide();
        //Muestra el div con la pregunta Donde trabaja?
        $("#trabaja_1").on('click', function(){
            $("#div_donde").show(300);
            $("#donde").attr('required', 'required');
        });
        $("#trabaja_2").on('click', function(){
            $("#div_donde").hide(300);
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
    })
</script>

