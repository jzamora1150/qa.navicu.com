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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-banner.htm */
class __TwigTemplate_8ae4fc6853932ab80cafb8c5af94d82911117c03649a1d2ccc11c80b44399b4b extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-banner.htm"));

        // line 1
        echo "<div class=\"rt-breadcump rt-breadcump-height with-logn-height d-none d-sm-none d-md-block\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url(";
        // line 2
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/covers/cover-hoteles.jpg");
        echo ")\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height with-logn-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3>Hoteles</h3>
                    <div class=\"breadcrumbs\">
                        <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                        <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("test-home");
        echo "\" title=\"Home\">Home</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        Hoteles

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class=\"bredcump-search\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto \">
                    ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("banner-searchbox"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  72 => 25,  55 => 11,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rt-breadcump rt-breadcump-height with-logn-height d-none d-sm-none d-md-block\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url({{'navicu/imgs/jpg/covers/cover-hoteles.jpg'|media}})\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height with-logn-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3>Hoteles</h3>
                    <div class=\"breadcrumbs\">
                        <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                        <a href=\"{{'test-home'|page}}\" title=\"Home\">Home</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        Hoteles

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class=\"bredcump-search\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 mx-auto \">
                    {% partial 'banner-searchbox' %}
                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</div>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-banner.htm", "");
    }
}
