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
    })
</script>