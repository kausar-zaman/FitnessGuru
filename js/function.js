
    $(function () {
        var width = 720;
        var animationSpeed = 2500;
        var pause = 5000;
        var currentSlide = 1;
        var $sdr1445 = $('#sdr1445');
        var $slideContainer = $('.sld', $sdr1445);
        var $sld = $('.slide', $sdr1445);
        var interval;

        function startsdr1445() {
            interval = setInterval(function () {
                $slideContainer.animate({'margin-left': '-=' + width}, animationSpeed, function () {
                    if (++currentSlide === $sld.length) {
                        currentSlide = 1;
                        $slideContainer.css('margin-left', 0);
                    }
                });
            }, pause);
        }

        function pausesdr1445() {
            clearInterval(interval);
        }

        $slideContainer.on('mouseenter', pausesdr1445).on('mouseleave', startsdr1445);
        startsdr1445();
//add code

    });
    