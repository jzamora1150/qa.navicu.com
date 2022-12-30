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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/action-block.htm */
class __TwigTemplate_75bf28d5ee6da9d3ff59234be776c499b715623c7e338b769cbc1a935366c293 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/action-block.htm"));

        // line 1
        echo "<div class=\"spacer-top\"></div><!-- /.spacer-top -->
<section class=\"rt-cta-area\">
    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"d-flex justify-content-center\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"";
        // line 9
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/navicu-margarita.gif");
        echo "\">
                    </a>
                </div><!-- /.inner-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/action-block.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"spacer-top\"></div><!-- /.spacer-top -->
<section class=\"rt-cta-area\">
    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"d-flex justify-content-center\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"{{'navicu/imgs/navicu-margarita.gif'|media}}\">
                    </a>
                </div><!-- /.inner-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</section>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/action-block.htm", "");
    }
}
