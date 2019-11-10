   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="<?= base_url('assets/'); ?>jquery/jquery.min.js"></script>

    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/myscript.js"></script>

    <!-- DataTables -->
    <script src="<?= base_url('assets/'); ?>datatable/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets/'); ?>datatable/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/scriptmodal.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->


    <script>
        $(function () {
    $('#mhs').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
    </script>

  </body>
</html>