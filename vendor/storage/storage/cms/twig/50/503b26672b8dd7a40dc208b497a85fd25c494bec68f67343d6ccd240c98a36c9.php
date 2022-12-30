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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/assets/headers.htm */
class __TwigTemplate_3050f7a4afc3f16c1707448e2272425b1ec455aa7194e7f8164a0685cf5cae0d extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/assets/headers.htm"));

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
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/assets/headers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 25,  45 => 23,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/assets/headers.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 25);
        static $filters = array("theme" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
