$(document).ready(function () {
  $('.choiceSlider').slick({
    infinite: true,
    speed: 700,
    slidesToShow: 3,
    centerMode: true,
    adaptiveHeight: false,
    variableWidth: false,
    prevArrow:
      '<button type="button" class="prev-arrow"><img src="img/arrow.svg" alt=""></button>',
    nextArrow:
      '<button type="button" class="next-arrow"><img src="img/arrow.svg" alt=""></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  })

  $('.featuresSlider').slick({
    infinite: true,
    speed: 700,
    slidesToShow: 2,
    centerMode: true,
    prevArrow:
      '<button type="button" class="prev-arrow"><img src="img/arrow.svg" alt=""></button>',
    nextArrow:
      '<button type="button" class="next-arrow"><img src="img/arrow.svg" alt=""></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  })

  $('.open-modal').on('click', function () {
    $('.filter, .modal').fadeIn(200)
  })
  $('.modal-close, .filter').on('click', function () {
    $('.filter, .modal').fadeOut(200)
  })

  function getQueryVariable(variable, key) {
    const query = window.location.search.substring(1)
    const vars = query.split('&')

    for (let i = 0; i < vars.length; i++) {
      let pair = vars[i].split('=')
      if (pair[0] === variable && pair[1] === key) {
        return true
      }
    }
    return false
  }
  if (getQueryVariable('slider1', 'off') === true) {
    $('.choice').fadeOut()
  }
  if (getQueryVariable('slider2', 'off') === true) {
    $('.features').fadeOut()
  }
})
