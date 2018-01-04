var Gallery = (function () {
  var handleImageGallery = function () {
    $('.image-gallery').gallery()
  }

  var handleVideoGallery = function () {
    $('.demo').videoBox({
      loop: false,
      autoplay: false,
      byline: true,
      color: '00adef',
      portrait: true,
      title: ''
    })

    // masonry image gallery
    $('.my-gallery-container').mpmansory(
      {
        childrenClass: 'item', //  default is a div
        columnClasses: 'group', // add classes to items
        breakpoints: {
          lg: 3,
          md: 4,
          sm: 6,
          xs: 12
        },
        distributeBy: { order: false, height: false, attr: 'data-order', attrOrder: 'asc' }, // default distribute by order, options => order: true/false, height: true/false, attr => 'data-order', attrOrder=> 'asc'/'desc'
        onload: function (items) {
          // make somthing with items
        }
      }
    )
  }

  return {
    // main function to initiate the module
    init: function () {
      handleImageGallery()
      handleVideoGallery()
    }
  }
})()

jQuery(document).ready(function () {
  Gallery.init()
})
