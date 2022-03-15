<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready( function () {
    $('#datatable1').DataTable();
} );
</script>
<script>
  $(document).ready(function () {
    $('.confirm-delete').click(function (e) { 
      e.preventDefault();
      //for test alert('I am here');

      confirmDialog = confirm('Are you sure? Do you want to delete this data?');
      if (confirmDialog) 
      {
        var id = $(this).val();
        //alert(id);
        $.ajax({
          type: "DELETE",
          url: "/employee/confirmdelete/"+id,
          success: function (response) {
            alert("Data deleted Successfully");
            window.location.reload();
          }
        });
      }
    });
  });
</script>

</body>
</html>