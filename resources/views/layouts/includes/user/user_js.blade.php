
<script src="{{asset('assets/js/gsap/gsap.min.js')}}"></script>
<script src="{{asset('assets/js/gsap/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('assets/js/gsap/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/simplebar.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/tippy-bundle.umd.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/grid/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/grid/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/charts/circle-progress.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/charts/echarts.common.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/charts/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/cleave/cleave.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/cleave/addons/cleave-phone.us.js')}}"></script>
<script src="{{asset('assets/js/vendor/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jqvmap/jquery.vmap.world.js')}}"></script>
<script src="{{asset('assets/js/vendor/jqvmap/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.star-rating-svg.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/calendar/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/calendar/flatpickr/en.js')}}"></script>
<script src="{{asset('assets/js/vendor/select2.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/editors/quill.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/filepond/filepond-plugin-image-preview.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/filepond/filepond.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/scrollmagic/debug.addIndicators.min.js')}}"></script>
<script src="{{asset('assets/js/components.js')}}"></script>
<script src="{{asset('assets/js/common.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 
<script>
    @if(session()->has('success'))
        toastr.success('{{session()->get('success')}}')
    @endif
    @if(session()->has('error'))
        toastr.success('{{session()->get('error')}}')
    @endif
    @if($errors->any())
        @foreach($errors->all() as $error)
            toastr.error('{{$error}}')
        @endforeach
    @endif
</script>