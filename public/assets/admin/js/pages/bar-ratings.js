var BarRating = (function () {
  var handleNumber = function () {
    $('#bar-number').barrating('show', {
      theme: 'bars-1to10'
    })
  }

  var handleMovie = function () {
    $('#bar-movie').barrating('show', {
      theme: 'bars-movie'
    })

    $('#bar-movie').barrating('set', 'Mediocre')
  }

  var handleSquare = function () {
    $('#bar-square').barrating('show', {
      theme: 'bars-square',
      showValues: true,
      showSelectedRating: false
    })
  }

  var handlePill = function () {
    $('#bar-pill').barrating('show', {
      theme: 'bars-pill',
      initialRating: 'A',
      showValues: true,
      showSelectedRating: false,
      allowEmpty: true,
      emptyValue: '-- no rating selected --',
      onSelect: function (value, text) {
        alert('Selected rating: ' + value)
      }
    })
  }

  var handleReversed = function () {
    $('#bar-reversed').barrating('show', {
      theme: 'bars-reversed',
      showSelectedRating: true,
      reverse: true
    })
  }

  var handleHorizontal = function () {
    $('#bar-horizontal').barrating('show', {
      theme: 'bars-horizontal',
      reverse: true,
      hoverState: false
    })
  }

  var handleFontAwesome = function () {
    $('#bar-fontawesome').barrating({
      theme: 'fontawesome-stars',
      showSelectedRating: false
    })
  }

  var handleCSS = function () {
    $('#bar-css').barrating({
      theme: 'css-stars',
      showSelectedRating: false
    })
  }

  return {
    // main function to initiate the module
    init: function () {
      handleNumber()
      handleMovie()
      handleSquare()
      handlePill()
      handleReversed()
      handleHorizontal()
      handleFontAwesome()
      handleCSS()
    }
  }
})()

jQuery(document).ready(function () {
  BarRating.init()
})
