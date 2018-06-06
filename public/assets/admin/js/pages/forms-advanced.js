var FormsAdvanced = (function () {
  var handleSelect2 = function () {
    $('.js-example-basic-single').select2()

    $('.js-example-basic-multiple').select2()
  }

  var handleSwitchToggles = function () {
    var elems = $('.js-switch')

    elems.each(function (index, element) {
      var color = $(this).data('color') ? $(this).data('color') : '#ffde00'
      var switchery = new Switchery(this, {
        color: color
      })
    })
  }

  return {
    // main function to initiate the module
    init: function () {
      handleSelect2()
      handleSwitchToggles()
    }
  }
})()

jQuery(document).ready(function () {
  FormsAdvanced.init()
})
