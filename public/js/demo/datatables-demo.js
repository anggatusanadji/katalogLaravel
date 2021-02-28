// Call the dataTables jQuery plugin
$(document).ready(function () {
  $('#dataTable').DataTable({
    //Pagination code
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],

    // Searching code
    "bFilter": true
  })
});

