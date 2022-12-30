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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/assets/headers.htm */
class __TwigTemplate_a129c62b89baa0b35e97ab04508ceea7fdeb2215259fd8208e4754e21261c372 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/assets/headers.htm"));

        // line 1
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/animate.css", 1 => "assets/css/bootstrap.min.css", 2 => "assets/css/datepicker.min.css", 3 => "assets/css/OverlayScrollbars.min.css", 4 => "assets/css/fontawesome.css", 5 => "assets/css/icofont.css", 6 => "assets/css/magnific-popup.css", 7 => "assets/css/owl.theme.default.min.css", 8 => "assets/css/owl.carousel.min.css", 9 => "assets/css/slick.css", 10 => "assets/css/slick-theme.css", 11 => "assets/css/slider-range.css", 12 => "assets/css/select2.min.css", 13 => "assets/css/tippy.css", 14 => "assets/css/app.css", 15 => "assets/vendor/hotel-datepicker/hotel-datepicker.css", 16 => "assets/css/custom/custom-fonts.css", 17 => "assets/css/custom/custom-style.css", 18 => "assets/vendor/toastr/css/toastr.min.css", 19 => "assets/vendor/sweetalert/sweetalert.css", 20 => "assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css"]);
        // line 23
        echo "\" rel=\"stylesheet\">

";
        // line 25
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->assetsFunction('css');
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('styles');
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/assets/headers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 25,  43 => 23,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ [
    'assets/css/animate.css',
    'assets/css/bootstrap.min.css',
    'assets/css/datepicker.min.css',
    'assets/css/OverlayScrollbars.min.css',
    'assets/css/fontawesome.css',
    'assets/css/icofont.css', 
    'assets/css/magnific-popup.css',
    'assets/css/owl.theme.default.min.css',
    'assets/css/owl.carousel.min.css',
    'assets/css/slick.css',
    'assets/css/slick-theme.css',
    'assets/css/slider-range.css',
    'assets/css/select2.min.css',
    'assets/css/tippy.css',
    'assets/css/app.css',
    'assets/vendor/hotel-datepicker/hotel-datepicker.css',
    'assets/css/custom/custom-fonts.css',
    'assets/css/custom/custom-style.css',
    'assets/vendor/toastr/css/toastr.min.css',
    'assets/vendor/sweetalert/sweetalert.css',
    'assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css'
]|theme }}\" rel=\"stylesheet\">

{% styles %}", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/assets/headers.htm", "");
    }
}
