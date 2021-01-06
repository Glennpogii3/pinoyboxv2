<footer class="footer-blck">
    <div class="row footer-2">
        <div class="col-md-3 col-sm-4 footer-brand animated fadeInLeft">
            <a href="{{ route('welcome') }}">
                <img src="..\asset\STATIC\FOOTER\logo-footer.svg" class="logo-footer-svg">
            </a>

        </div>
        <div class="col-md-3 col-sm-4 footer-nav animated fadeInUp">
            <h4 class="footer-head" >INFO</h4>
                <ul class="pages">
                    <li class="footer-item"><a class="footer-link" href="">About Pinoyboxdelivery</a></li>
                    <li class="footer-item"><a class="footer-link" href="{{ route('howitworks') }}">How it works</a></li>
                    <li class="footer-item"><a class="footer-link" href="{{ route('rates') }}">Rates</a></li>
                    <li class="footer-item"><a class="footer-link" href="{{ route('services') }}">Services</a></li>
                    <li class="footer-item"><a class="footer-link" href="{{ route('faqs') }}">FAQs</a></li>
                </ul>
        </div>
        <div class="col-md-3 col-sm-4 footer-contact animated fadeInDown">
            <h4 class="footer-head" >Contact US</h4>
            <ul class="pages">
                <li class="footer-item"><a class="footer-link" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>  wedeliver@pinoyboxdelivery.com</a></li>
                <li class="footer-item"><a class="footer-link" ><i class="fa fa-home" aria-hidden="true"></i>
                    Open from 10AM-6PM from</a></li>
                <li class="footer-item"><a class="footer-link" > <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    Monday to Friday</a></li>
            </ul>

        </div>
        <div class="col-md-3 footer-ns animated fadeInRight">
            <h4 class="footer-head">Get new promos and updates!</h4>
            <ul class="pages">
                <li class="footer-item"><a class="footer-subs">Subscribe to pinoyboxdelivery newsletter</a></li>
            </ul>
            <p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                   <button  class="btn btn-sml btn-primary" type="button">Subscribe</button>
                  </span>
                </div><!-- /input-group -->
             </p>
        </div>
    </div>
</footer>
