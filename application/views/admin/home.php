<style type="text/css">
  .status
  {
    height: 27px;
  }
</style>
<div class="container">
  <div class="col-md-12">
    <link rel="stylesheet" type="text/css" href="<?= $this->config->item('cdn'); ?>css/jquery-ui.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?= $this->config->item('cdn'); ?>css/jquery.dataTables.min.css" media="screen">

  

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="<?= $this->config->item('cdn'); ?>js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

 <script>
    $('#example').DataTable({
        "pageLength": 50
    });
</script>
<script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker({
        timePickerIncrement: 30,
        locale: {
            format: 'YYYY'
        }
    });
});
</script>
<script type="text/javascript">
  document.querySelector('#delete').onclick = function(){
  swal("Good job!", "You clicked the button!", "success");
};
</script>


  </div>
</div>

</body>
</html>
