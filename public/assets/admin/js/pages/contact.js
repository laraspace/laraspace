var DataTables = (function () {
  var handleTables = function () {
    $('#contact-datatable').DataTable({
      responsive: true,
      select: true
    })
  }
  var handleLeftSidebar = function () {
    $('.left-sidebar-btn').on('click', function () {
      $('.contact-sidebar').toggleClass('pull-right-side')
      $(this).find('i').toggleClass('icon-fa-angle-right')
      $(this).find('i').toggleClass('icon-fa-angle-left')
    })
  }
  return {
    // main function to initiate the module
    init: function () {
      handleTables()
      handleLeftSidebar()
    }
  }
})()

jQuery(document).ready(function () {
  DataTables.init()
})
