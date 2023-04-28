<script>
    $(function(){
        //$("#lugar_trabajo").hide();
        //Muestra la pregunta ¿Dónde trabaja?
        $("#trabaja1").on('click', function () { 
            $("#lugar_trabajo").show(300); 
            $("#donde").attr('required', 'required');
        });

        //Oculta la pregunta ¿Dónde trabaja?
        $("#trabaja2").on('click', function () { 
            $("#lugar_trabajo").hide(300);
            $("#donde").removeAttr('required');
        });
    })
</script>