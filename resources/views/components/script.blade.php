<!-- ======= jQuery Library ======= -->
<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/animation/wow.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/parallax/parallaxie.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/niceselect/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/anime/anime.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/tilt/vanilla-tilt.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/fancybox/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('../../../swiper%409.0.4/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/dependencies/hoverdir/jquery.hoverdir.js') }}"></script>

<!-- ======= Main JS ======= -->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>

<!-- ======= Custom JS ======= -->
<script src="{{ asset('assets/frontend/js/custom.js') }}"></script>

<!-- ======= Copy Link ======= -->
<script>
    const copyBtn = document.querySelector('#copyBtn');
    copyBtn.addEventListener('click', e => {
        const input = document.createElement('input');
        input.value = copyBtn.dataset.text;
        document.body.appendChild(input);
        input.select();
        if(document.execCommand('copy')) {
            document.body.removeChild(input);
        }
    });
</script>
