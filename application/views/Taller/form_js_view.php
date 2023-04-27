<script>
    $(function(){
       //$("#div_trabaja").hide();
       $('#trabaja_1').on('click', function(){
        //muestra el div cuando la respuesta sea "si"
            $("#div_trabaja").show(300);
            $("#donde").attr('required', 'required');
       });
       $('#trabaja_2').on('click', function(){
        //oculta el div cuando la respuesta sea "si"
            $("#div_trabaja").hide(300);
            $("#donde").removeAttr('required');
       });
    })
</script>