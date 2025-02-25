<script src="assets/js/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="themes.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/Flip.min.js"></script>
<script>


    var swiperHeader = new Swiper(".swiperHeader", {
        pagination: {
            el: ".swiper-pagination-c",
        },
        slidesPerView: 1,
    });


    var swiperMain = new Swiper(".swiperMain", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: {
            releaseOnEdges: true,
        },
        speed: 900,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        effect: "creative",
        creativeEffect: {
            prev: {
                translate: [0, "-20%", -1],
            },
            next: {
                translate: [0, "100%", 0],
            },
        },
    });
</script>

<script>
    $(document).ready(function () {

        // MARK: SWIPER INIT BY ATTRIBUTE
        $('[swiper]').each(function () {
            try {
                let options = $(this).attr('swiper');
                eval('options=' + options);
                if (typeof options == 'object') {
                    new Swiper(this, options);
                }
            } catch (err) {
                console.error('Check swiper options', err);
            }
        });

        // MARK: CATEGORY SLIDER
        $('[category-slider]').each(function (_, cat) {
            let name = $(cat).attr('category-slider');

            $(cat).hover(function () {
                $('.category-slider-wrap').each(function (_, wrap) {
                    let item = $(`[category-slider-item=${name}]`, wrap);

                    if (item.length > 0) {
                        this.swiper.slideTo(item.index());
                    }
                });
            });
        });

    });
</script>

<script>



    function showTab(tabId) {
        const tabs = document.querySelectorAll('.tab-content');
        tabs.forEach(tab => {
            tab.style.display = 'none';
        });
        document.getElementById(tabId).style.display = 'block';

        const buttons = document.querySelectorAll('.tab-buttons button');
        buttons.forEach(button => {
            button.classList.remove('active');
        });
        event.target.classList.add('active');
    }
</script>
<script>
    Fancybox.bind("[data-fancybox]", {
        buttons: [
            "zoom",
            "close"
        ],
        video: {
            autoplay: true,
            loop: true
        }
    });
</script>
