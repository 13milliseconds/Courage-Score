import 'datatables.net';

export default {
  init() {
    // JavaScript to be fired on the about us page
    $('#representativesTable').DataTable({
      searching: false,
      paging: false,
      responsive: true,
      columnDefs: [
        { visible: false, targets: 0 },
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 },
      ],
    });

    // table
    // .column( 0 )
    // .data()
    // .filter( function ( value ) {
    //     return value == 'assembly' ? true : false;
    // });

    $('.filters button').on('click', function () {
      $('.filters button').removeClass('active');
      $(this).addClass('active');
      let filterItem = $(this).attr('id');
      $('.rep').hide();
      $('.rep.' + filterItem).show();
    });
    
  },
};
