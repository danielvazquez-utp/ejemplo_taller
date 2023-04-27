<script>

    $(function(){
        //$("#div_trabaja").hide();

        //Muestra el div con la pregunta donde trabaja
        $("#trabaja_1").on('click', function(){
            $("#div_trabaja").show(300);
            $("#donde").attr('required', 'required');
        });
        $("#trabaja_2").on('click', function(){
            $("#div_trabaja").hide(300);
            $("#donde").removeAttr('required');
        });
        
    })

</script>