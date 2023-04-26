<script>
  $(function () {
    $("#tabla").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabla_wrapper .col-md-6:eq(0)');
  /*  $('#tabla').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,S
      "autoWidth": false,
      "responsive": true,
    });*/
  });
</script>