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

    })

</script>
