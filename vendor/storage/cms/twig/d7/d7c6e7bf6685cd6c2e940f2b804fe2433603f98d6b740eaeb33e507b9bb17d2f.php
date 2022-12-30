<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/assets/scripts.htm */
class __TwigTemplate_6202a7402e30cc384e960f34031976e8dae00dbfaaf1118821f51f21f228eb73 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/assets/scripts.htm"));

        // line 1
        echo "<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js\"></script>

<script src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-2.2.4.min.js", 1 => "assets/js/jquery.appear.js", 2 => "assets/js/jquery-ui.js", 3 => "assets/js/app.js", 4 => "assets/js/site.js", 5 => "assets/js/hotel-booking.js", 6 => "assets/vendor/bootstrap/popper.min.js", 7 => "assets/vendor/bootstrap/bootstrap.min.js", 8 => "assets/vendor/easing/jquery.easing.1.3.js", 9 => "assets/vendor/imagesloaded/imagesloaded.pkgd.min.js", 10 => "assets/vendor/isotope/isotope.pkgd.min.js", 11 => "assets/vendor/instafeed/instafeed.min.js", 12 => "assets/vendor/waypoints/waypoints.min.js", 13 => "assets/vendor/jquerycounterup/jquery.counterup.min.js", 14 => "assets/vendor/jquerymagnificpopup/jquery.magnific-popup.min.js", 15 => "assets/vendor/jqueryscrollup/jquery.scrollUp.min.js", 16 => "assets/vendor/owlcarousel/owl.carousel.min.js", 17 => "assets/vendor/tweenmax/TweenMax.min.js", 18 => "assets/vendor/scrollax/scrollax.min.js", 19 => "assets/vendor/wow/wow.js", 20 => "assets/vendor/jqueryoverlayscrollbars/jquery.overlayScrollbars.min.js", 21 => "assets/vendor/select2/select2.min.js", 22 => "assets/vendor/slick/slick.min.js", 23 => "assets/vendor/slider-range/slider-range.js", 24 => "assets/vendor/vivus/vivus.min.js", 25 => "assets/vendor/tippy/tippy.all.min.js", 26 => "assets/vendor/sweetalert/sweetalert.min.js", 27 => "assets/js/jquery.mockjax.js", 28 => "assets/vendor/jqueryautocomplete/jquery.autocomplete.js", 29 => "assets/js/countries.js", 30 => "assets/vendor/hotel-datepicker/hotel-datepicker.js", 31 => "assets/vendor/fecha/fecha.min.js", 32 => "assets/vendor/toastr/js/toastr.min.js", 33 => "assets/vendor/jquery.countdown/jquery.countdown.min.js", 34 => "assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"]);
        // line 42
        echo "\"></script>


<!-- 
    <script type=\"text/javascript\" src=\"scripts/jquery-1.8.2.min.js\"></script>

    <script type=\"text/javascript\" src=\"scripts/jquery.mockjax.js\"></script>
    <script type=\"text/javascript\" src=\"src/jquery.autocomplete.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/countries.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/demo.js\"></script>

-->




";
        // line 58
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->assetsFunction('js');
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('scripts');
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/assets/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 58,  46 => 42,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js\"></script>

<script src=\"{{ [
    'assets/js/jquery-2.2.4.min.js',
    'assets/js/jquery.appear.js',
    'assets/js/jquery-ui.js',
    'assets/js/app.js',
    'assets/js/site.js',
    'assets/js/hotel-booking.js',
    'assets/vendor/bootstrap/popper.min.js',
    'assets/vendor/bootstrap/bootstrap.min.js',
    'assets/vendor/easing/jquery.easing.1.3.js',
    'assets/vendor/imagesloaded/imagesloaded.pkgd.min.js',
    'assets/vendor/isotope/isotope.pkgd.min.js',
    'assets/vendor/instafeed/instafeed.min.js',
    'assets/vendor/waypoints/waypoints.min.js',
    'assets/vendor/jquerycounterup/jquery.counterup.min.js',
    'assets/vendor/jquerymagnificpopup/jquery.magnific-popup.min.js',
    'assets/vendor/jqueryscrollup/jquery.scrollUp.min.js',
    'assets/vendor/owlcarousel/owl.carousel.min.js',
    'assets/vendor/tweenmax/TweenMax.min.js',
    'assets/vendor/scrollax/scrollax.min.js',
    'assets/vendor/wow/wow.js',
    'assets/vendor/jqueryoverlayscrollbars/jquery.overlayScrollbars.min.js',
    'assets/vendor/select2/select2.min.js',
    'assets/vendor/slick/slick.min.js',
    'assets/vendor/slider-range/slider-range.js',
    'assets/vendor/vivus/vivus.min.js',
    'assets/vendor/tippy/tippy.all.min.js',
    'assets/vendor/sweetalert/sweetalert.min.js',

    'assets/js/jquery.mockjax.js',
    'assets/vendor/jqueryautocomplete/jquery.autocomplete.js',
    'assets/js/countries.js',
    'assets/vendor/hotel-datepicker/hotel-datepicker.js',
    'assets/vendor/fecha/fecha.min.js',
    'assets/vendor/toastr/js/toastr.min.js',
    'assets/vendor/jquery.countdown/jquery.countdown.min.js',
    'assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js'
    

]|theme }}\"></script>


<!-- 
    <script type=\"text/javascript\" src=\"scripts/jquery-1.8.2.min.js\"></script>

    <script type=\"text/javascript\" src=\"scripts/jquery.mockjax.js\"></script>
    <script type=\"text/javascript\" src=\"src/jquery.autocomplete.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/countries.js\"></script>
    <script type=\"text/javascript\" src=\"scripts/demo.js\"></script>

-->




{% scripts %}", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/assets/scripts.htm", "");
    }
}
