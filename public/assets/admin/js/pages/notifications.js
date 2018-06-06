var Notifications = (function () {
  var handleToastrNotifs = function () {
    toastr.options = {
      'closeButton': true,
      'debug': false,
      'positionClass': 'toast-top-right',
      'onclick': null,
      'showDuration': '1000',
      'hideDuration': '1000',
      'timeOut': '5000',
      'extendedTimeOut': '1000',
      'showEasing': 'swing',
      'hideEasing': 'linear',
      'showMethod': 'fadeIn',
      'hideMethod': 'fadeOut'
    }

    $('[data-toastr]').on('click', function () {
      var type = $(this).data('toastr')
      var message = $(this).data('message')
      var title = $(this).data('title')
      toastr[type](message, title)
    })
  }

  var handleNotieNotifs = function () {
    $('[data-notie]').on('click', function () {
      var type = $(this).data('notie')
      var message = $(this).data('message')
      var title = $(this).data('title')

      switch (type) {
        case 'success':
          notie.alert({ type: 1, text: 'Success!' })
          break
        case 'warning':
          notie.alert({ type: 2, text: 'Warning!' })
          break
        case 'error':
          notie.alert({ type: 3, text: 'Error!' })
          break
        case 'info':
          notie.alert({ type: 4, text: 'Info!' })
          break
        case 'confirm':
          notie.confirm({
            text: 'Are you sure you want to do that?<br><b>That\'s a bold move...</b>',
            cancelCallback: function () {
              notie.alert({ type: 3, text: 'Aw, why not? :(', time: 2 })
            },
            submitCallback: function () {
              notie.alert({ type: 1, text: 'Good choice! :D', time: 2 })
            }
          })
          break
        case 'input':
          notie.input({
            text: 'Please enter your email:',
            submitText: 'Submit',
            cancelText: 'Cancel',
            cancelCallback: function (value) {
              notie.alert({ type: 3, text: 'You cancelled with this value: ' + value })
            },
            submitCallback: function (value) {
              notie.alert({ type: 1, text: 'You entered: ' + value })
            },
            value: 'jane@doe.com',
            type: 'email',
            placeholder: 'name@example.com'
          })
          break
        case 'select':
          notie.select({
            text: 'Demo item #1, owner is Jane Smith',
            cancelText: 'Close',
            cancelCallback: function () {
              notie.alert({ type: 5, text: 'Cancel!' })
            },
            choices: [
              {
                text: 'Share',
                handler: function () {
                  notie.alert({ type: 1, text: 'Share item!' })
                }
              },
              {
                text: 'Open',
                handler: function () {
                  notie.alert({ type: 1, text: 'Open item!' })
                }
              },
              {
                type: 2,
                text: 'Edit',
                handler: function () {
                  notie.alert({ type: 2, text: 'Edit item!' })
                }
              },
              {
                type: 3,
                text: 'Delete',
                handler: function () {
                  notie.alert({ type: 3, text: 'Delete item!' })
                }
              }
            ]
          })
          break

        default:
          notie.alert(1, 'Success!')
      }
    })
  }

  return {
    // main function to initiate the module
    init: function () {
      handleToastrNotifs()
      handleNotieNotifs()
    }
  }
})()

jQuery(document).ready(function () {
  Notifications.init()
})
