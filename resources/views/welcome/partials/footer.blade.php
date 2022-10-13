<footer id="footer" class="relative z-10 footer-area pt-120">
    <div class="footer-bg" style="background-image: url(assets/images/footer-bg.svg);"></div>
    <div class="container">
        
        @include('welcome.partials.footer.subscribe')
        
        <div class="footer-widget pb-120">
            <div class="row">

                @include('welcome.partials.footer.social')

                @include('welcome.partials.footer.resources')

                @include('welcome.partials.footer.contacts')                
                
            </div>
        </div>

        @include('welcome.partials.footer.copyright') 
        
    </div> <!-- container -->
    <div id="particles-2" class="particles"></div>
</footer> 