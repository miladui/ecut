$('[data-megamenu]:not([data-megamenu=""])').each(function () {
    let navLink = this;
    let target = $(navLink).attr('data-megamenu');

    $(navLink).hover(function () {
        $(navLink).addClass('nav-active');
        $(target).addClass('nav-active');
    }, function (/*unhover*/) {

        if (!$(target).is(':hover')) {
            $(navLink).removeClass('nav-active');
            $(target).removeClass('nav-active');
        }
    });

    $(target).hover(function () {
    }, function (/*unhover*/) {
        $(navLink).removeClass('nav-active');
        $(target).removeClass('nav-active');
        // $('.category-slider-item').removeClass('active');
        // $('.megamenu-products').addClass('active');
    });
});


// tab-colors
function changeImage(imageId, imageSrc, element) {
    // تغییر تصویر
    document.getElementById(imageId).src = imageSrc;

    // حذف کلاس 'active' از سایر رنگ‌ها
    const colorOptions = document.querySelectorAll('.color-option');
    colorOptions.forEach(option => {
        option.classList.remove('active');
        option.style.border = '';
    });

    element.classList.add('active');
    element.style.border = '2px solid #c7c7c7';
    element.style.padding = '1px';
}

function changeImage2(imageId2, imageSrc2, element) {
    // تغییر تصویر
    document.getElementById(imageId2).src = imageSrc2;

    // حذف کلاس 'active' از سایر رنگ‌ها
    const colorOptions = document.querySelectorAll('.color-option');
    colorOptions.forEach(option => {
        option.classList.remove('active');
        option.style.border = '';
    });

    element.classList.add('active');
    element.style.border = '2px solid #c7c7c7';
    element.style.padding = '3px';
}
$(document).ready(function () {
    $('.moreless-button').click(function () {
        if ($('.moreless-button').text() == "کمتر ") {
            $(this).text("بیشتر")
        } else {
            $(this).text("کمتر ")
        }
    });


    $('.moreless-button').click(function () {
        $('.article').toggleClass('quadradomaior');
    });

});


// When any accordion title is clicked...
$(".accordion__title").click(function () {
    const $accordion_wrapper = $(this).parent();
    const $accordion_content = $(this).parent().find(".accordion__content").first();
    const $accordion_open = "accordion--open";

    // If this accordion is already open
    if ($accordion_wrapper.hasClass($accordion_open)) {
        $accordion_content.slideUp();                     // Close the content.
        $accordion_wrapper.removeClass($accordion_open);  // Remove the accordionm--open class.
    }
    // If this accordion is not already open
    else {
        $accordion_content.slideDown();                 // Show this accordion's content.
        $accordion_wrapper.addClass($accordion_open);   // Add the accordion--open class.
    }
});


$(document).ready(function () {
    $(".btn-open-menu-mobi").click(function () {
        $(".open_menu").css('right', '0')
    });
    $(".menu-btn-close").click(function () {
        $(".open_menu").css('right', '-100%')
    });
});


$(document).ready(function () {
    $('.search-modal').hide()

    $('.btn-search').click(function () {
        $('.search-modal').fadeToggle()
    })
})
$(document).ready(function () {
    $('.search-modal').hide()

    $('.btn-open-search-mobi').click(function () {
        $('.search-modal').fadeToggle()
        $('.search-modal').toggleClass('active-opacity')

    })
    $('.btn-close-search').click(function () {
        $('.search-modal').fadeOut()
    })
})


$(document).ready(function () {
    $('.loginModal').hide()

    $('.openModal').click(function () {
        $('.loginModal').fadeIn()
    })
    $('.closeModal').click(function () {
        $('.loginModal').fadeOut()
    })
})


$(document).ready(function () {

    $('.close-modal-size').click(function () {
        $('.open_menu4').removeClass('opened')

    })
    $('.btn-show-step-two').click(function () {
        $('.step-one').removeClass('js-active')
        $('.step-two').addClass('js-active')
    })
    $('.btn-step-two').click(function () {
        $('.step-two').removeClass('js-active')
        $('.step-three').addClass('js-active')
    })

    $('.btn-sep-four').click(function () {
        $('.step-three').removeClass('js-active')
        $('.step-four').addClass('js-active')
    })
    $('.btn-step-five').click(function () {
        $('.step-four').removeClass('js-active')
        $('.step-five').addClass('js-active')
    })
    $('.bt-step-six').click(function () {
        $('.step-five').removeClass('js-active')
        $('.step-six').addClass('js-active')
    })
    $('.btn-back-step-four').click(function () {
        $('.step-five').removeClass('js-active')
        $('.step-four').addClass('js-active')
    })
    $('.btn-show-step-seven').click(function () {
        $('.step-six').removeClass('js-active')
        $('.step-seven').addClass('js-active')
    })
    $('.btn-step-one').click(function () {
        $('.step-seven').removeClass('js-active')
        $('.step-one').addClass('js-active')
    })
})


$(document).ready(function () {
    $('.p-subscribe-modal').hide()
    $('.btn-subscribe').click(function () {
        $('.p-subscribe-modal').fadeIn()
        $('.p-subscribe-modal').css('display', 'flex')
    })
    $('.btn-close-subscribe').click(function () {
        $('.p-subscribe-modal').fadeOut()
    })
})


function showOverlay() {
    document.getElementById('overlay').style.display = 'block'; // Show the overlay
}

function hideOverlay() {
    document.getElementById('overlay').style.display = 'none'; // Hide the overlay
}

document.addEventListener('click', (event) => {
    event.preventDefault(); // جلوگیری از اسکرول به عنصر
    // کد برای باز کردن تب
});


$(document).ready(function () {
    $('.p-modal-gallery-product').hide()
    $('.img-gallery').click(function () {
        $('.p-modal-gallery-product').fadeIn()
        $('.p-modal-gallery-product').addClass('active-gallery')
    })
    $('.p-modal-gallery-product .bg-overly').click(function () {
        $('.p-modal-gallery-product').fadeOut()
        $('.p-modal-gallery-product').removeClass('active-gallery')

    })
    $('.close-modal-gallery').click(function () {
        $('.p-modal-gallery-product').fadeOut()
        $('.p-modal-gallery-product').removeClass('active-gallery')

    })
})


$(document).ready(function () {
    // $('.acc-container .acc:nth-child(1) .acc-head').addClass('active');
    // $('.acc-container .acc:nth-child(1) .acc-content').slideDown();
    $('.p-modal-gallery-product .acc-head').on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).siblings('.p-modal-gallery-product .acc-content').slideUp();
            $(this).removeClass('active');
        } else {
            $('.p-modal-gallery-product .acc-content').slideUp();
            $('.p-modal-gallery-product .acc-head').removeClass('active');
            $(this).siblings('.p-modal-gallery-product .acc-content').slideToggle();
            $(this).toggleClass('active');
        }
    });
});


(function ($) {

        "use strict";

        var DEBUG = false, // make true to enable debug output
            PLUGIN_IDENTIFIER = "RangeSlider";

        var RangeSlider = function (element, options) {
            this.element = element;
            this.options = options || {};
            this.defaults = {
                output: {
                    prefix: '', // function or string
                    suffix: '', // function or string
                    format: function (output) {
                        return output;
                    }
                },
                change: function (event, obj) {
                }
            };
            // This next line takes advantage of HTML5 data attributes
            // to support customization of the plugin on a per-element
            // basis.
            this.metadata = $(this.element).data('options');
        };

        RangeSlider.prototype = {

            ////////////////////////////////////////////////////
            // Initializers
            ////////////////////////////////////////////////////

            init: function () {
                if (DEBUG && console) console.log('RangeSlider init');
                this.config = $.extend(true, {}, this.defaults, this.options, this.metadata);

                var self = this;
                // Add the markup for the slider track
                this.trackFull = $('<div class="track track--full"></div>').appendTo(self.element);
                this.trackIncluded = $('<div class="track track--included"></div>').appendTo(self.element);
                this.inputs = [];

                $('input[type="range"]', this.element).each(function (index, value) {
                    var rangeInput = this;
                    // Add the ouput markup to the page.
                    rangeInput.output = $('<output>').appendTo(self.element);
                    // Get the current z-index of the output for later use
                    rangeInput.output.zindex = parseInt($(rangeInput.output).css('z-index')) || 1;
                    // Add the thumb markup to the page.
                    rangeInput.thumb = $('<div class="slider-thumb">').prependTo(self.element);
                    // Store the initial val, incase we need to reset.
                    rangeInput.initialValue = $(this).val();
                    // Method to update the slider output text/position
                    rangeInput.update = function () {
                        if (DEBUG && console) console.log('RangeSlider rangeInput.update');
                        var range = $(this).attr('max') - $(this).attr('min'),
                            offset = $(this).val() - $(this).attr('min'),
                            pos = offset / range * 100 + '%',
                            transPos = offset / range * -100 + '%',
                            prefix = typeof self.config.output.prefix == 'function' ? self.config.output.prefix.call(self, rangeInput) : self.config.output.prefix,
                            format = self.config.output.format($(rangeInput).val()),
                            suffix = typeof self.config.output.suffix == 'function' ? self.config.output.suffix.call(self, rangeInput) : self.config.output.suffix;

                        // Update the HTML
                        $(rangeInput.output).html(prefix + '' + format + '' + suffix);
                        $(rangeInput.output).css('left', pos);
                        $(rangeInput.output).css('transform', 'translate(' + transPos + ',0)');

                        // Update the IE hack thumbs
                        $(rangeInput.thumb).css('left', pos);
                        $(rangeInput.thumb).css('transform', 'translate(' + transPos + ',0)');

                        // Adjust the track for the inputs
                        self.adjustTrack();
                    };

                    // Send the current ouput to the front for better stacking
                    rangeInput.sendOutputToFront = function () {
                        $(this.output).css('z-index', rangeInput.output.zindex + 1);
                    };

                    // Send the current ouput to the back behind the other
                    rangeInput.sendOutputToBack = function () {
                        $(this.output).css('z-index', rangeInput.output.zindex);
                    };

                    ///////////////////////////////////////////////////
                    // IE hack because pointer-events:none doesn't pass the
                    // event to the slider thumb, so we have to make our own.
                    ///////////////////////////////////////////////////
                    $(rangeInput.thumb).on('mousedown', function (event) {
                        // Send all output to the back
                        self.sendAllOutputToBack();
                        // Send this output to the front
                        rangeInput.sendOutputToFront();
                        // Turn mouse tracking on
                        $(this).data('tracking', true);
                        $(document).one('mouseup', function () {
                            // Turn mouse tracking off
                            $(rangeInput.thumb).data('tracking', false);
                            // Trigger the change event
                            self.change(event);
                        });
                    });

                    // IE hack - track the mouse move within the input range
                    $('body').on('mousemove', function (event) {
                        // If we're tracking the mouse move
                        if ($(rangeInput.thumb).data('tracking')) {
                            var rangeOffset = $(rangeInput).offset(),
                                relX = event.pageX - rangeOffset.left,
                                rangeWidth = $(rangeInput).width();
                            // If the mouse move is within the input area
                            // update the slider with the correct value
                            if (relX <= rangeWidth) {
                                var val = relX / rangeWidth;
                                $(rangeInput).val(val * $(rangeInput).attr('max'));
                                rangeInput.update();
                            }
                        }
                    });

                    // Update the output text on slider change
                    $(this).on('mousedown input change touchstart', function (event) {
                        if (DEBUG && console) console.log('RangeSlider rangeInput, mousedown input touchstart');
                        // Send all output to the back
                        self.sendAllOutputToBack();
                        // Send this output to the front
                        rangeInput.sendOutputToFront();
                        // Update the output
                        rangeInput.update();
                    });

                    // Fire the onchange event
                    $(this).on('mouseup touchend', function (event) {
                        if (DEBUG && console) console.log('RangeSlider rangeInput, change');
                        self.change(event);
                    });

                    // Add this input to the inputs array for use later
                    self.inputs.push(this);
                });

                // Reset to set to initial values
                this.reset();

                // Return the instance
                return this;
            },

            sendAllOutputToBack: function () {
                $.map(this.inputs, function (input, index) {
                    input.sendOutputToBack();
                });
            },

            change: function (event) {
                if (DEBUG && console) console.log('RangeSlider change', event);
                // Get the values of each input
                var values = $.map(this.inputs, function (input, index) {
                    return {
                        value: parseInt($(input).val()),
                        min: parseInt($(input).attr('min')),
                        max: parseInt($(input).attr('max'))
                    };
                });

                // Sort the array by value, if we have 2 or more sliders
                values.sort(function (a, b) {
                    return a.value - b.value;
                });

                // call the on change function in the context of the rangeslider and pass the values
                this.config.change.call(this, event, values);
            },

            reset: function () {
                if (DEBUG && console) console.log('RangeSlider reset');
                $.map(this.inputs, function (input, index) {
                    $(input).val(input.initialValue);
                    input.update();
                });
            },

            adjustTrack: function () {
                if (DEBUG && console) console.log('RangeSlider adjustTrack');
                var valueMin = Infinity,
                    rangeMin = Infinity,
                    valueMax = 0,
                    rangeMax = 0;

                // Loop through all input to get min and max
                $.map(this.inputs, function (input, index) {
                    var val = parseInt($(input).val()),
                        min = parseInt($(input).attr('min')),
                        max = parseInt($(input).attr('max'));

                    // Get the min and max values of the inputs
                    valueMin = (val < valueMin) ? val : valueMin;
                    valueMax = (val > valueMax) ? val : valueMax;
                    // Get the min and max possible values
                    rangeMin = (min < rangeMin) ? min : rangeMin;
                    rangeMax = (max > rangeMax) ? max : rangeMax;
                });

                // Get the difference if there are 2 range input, use max for one input.
                // Sets left to 0 for one input and adjust for 2 inputs
                if (this.inputs.length > 1) {
                    this.trackIncluded.css('width', (valueMax - valueMin) / (rangeMax - rangeMin) * 100 + '%');
                    this.trackIncluded.css('left', (valueMin - rangeMin) / (rangeMax - rangeMin) * 100 + '%');
                } else {
                    this.trackIncluded.css('width', valueMax / (rangeMax - rangeMin) * 100 + '%');
                    this.trackIncluded.css('left', '0%');
                }
            }
        };

        RangeSlider.defaults = RangeSlider.prototype.defaults;

        $.fn.RangeSlider = function (options) {
            if (DEBUG && console) console.log('$.fn.RangeSlider', options);
            return this.each(function () {
                var instance = $(this).data(PLUGIN_IDENTIFIER);
                if (!instance) {
                    instance = new RangeSlider(this, options).init();
                    $(this).data(PLUGIN_IDENTIFIER, instance);
                }
            });
        };

    }
)(jQuery);


var rangeSlider = $('#facet-price-range-slider');
if (rangeSlider.length > 0) {
    rangeSlider.RangeSlider({
        output: {
            format: function (output) {
                return output.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
            },

        }
    });
}


$(document).ready(function () {
    if (window.innerWidth > 1000) {
        $('.main-box-product .grid-cols-3 .p-img').css('height', '80vh')
    }
})


$(document).ready(function () {
    $('.ecut-modal').hide()
    $('.basket-button').click(function () {
        $('.ecut-modal').fadeIn()
        $('.ecut-modal').addClass('active-ecut')
    })
    $('.bg-overly-ecut').click(function () {
        $('.ecut-modal').fadeOut()
        $('.ecut-modal').removeClass('active-ecut')
    })
    $('.close-modal-ecut').click(function () {
        $('.ecut-modal').fadeOut()
        $('.ecut-modal').removeClass('active-ecut')
    })
})


$(document).ready(function () {
    $('.ecut-modal .acc-head').on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).siblings('.ecut-modal .acc-content').slideUp();
            $(this).removeClass('active');
        } else {
            $('.ecut-modal .acc-content').slideUp();
            $('.ecut-modal .acc-head').removeClass('active');
            $(this).siblings('.ecut-modal .acc-content').slideToggle();
            $(this).toggleClass('active');
        }
    });
});



    const pricePerItem = 147000000;
    function changeQuantity(amount) {
    const quantityInput = document.getElementById('quantity-input');
    let currentQuantity = parseInt(quantityInput.value);
    currentQuantity += amount;
    if (currentQuantity < 1) currentQuantity = 1;
    quantityInput.value = currentQuantity;
    updatePrice();
}

    function updatePrice() {
    const quantityInput = document.getElementById('quantity-input');
    const totalPriceElement = document.getElementById('total-price');
    const totalPrice = pricePerItem * parseInt(quantityInput.value);
    totalPriceElement.textContent = totalPrice.toLocaleString('fa-IR') + ' ریال';
}



setTimeout(function (){
    $('.loading-page').fadeOut()
} , 2000)




$(document).ready(function() {
    $('a[href]').on('click', function(e) {
        if ($(this).attr('href') !== '#' && $(this).attr('href') !== '') {
            e.stopPropagation();
            window.location.href = $(this).attr('href');
        }
    });
});


