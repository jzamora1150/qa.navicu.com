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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/banners/tour-banner.htm */
class __TwigTemplate_a255adda3205da2d276752b073a4e0325fea9693077e39f3206b314c9254e268 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/banners/tour-banner.htm"));

        // line 1
        echo "<div class=\"rt-breadcump rt-breadcump-height d-none d-sm-block\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url(";
        // line 2
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/covers/cover-paquetes-navicu.jpg");
        echo ")\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3>Paquetes</h3>
                    ";
        // line 24
        echo "                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/banners/tour-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 24,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rt-breadcump rt-breadcump-height d-none d-sm-block\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url({{'navicu/imgs/jpg/covers/cover-paquetes-navicu.jpg'|media}})\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3>Paquetes</h3>
                    {#
                    <div class=\"breadcrumbs\">
                        <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                        <a href=\"#\" title=\"Home\">Home</a>
                        <span class=\"divider\">
                            <i class=\"icofont-simple-right\"></i>
                        </span>
                        <a href=\"#\" title=\"Blog\">Paquete</a>

                        <span class=\"divider\">
                            <i class=\"icofont-simple-right\"></i>
                        </span>
                        {{tour.titulo}}
                    </div><!-- /.breadcrumbs -->
                    #}
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/banners/tour-banner.htm", "");
    }
}
