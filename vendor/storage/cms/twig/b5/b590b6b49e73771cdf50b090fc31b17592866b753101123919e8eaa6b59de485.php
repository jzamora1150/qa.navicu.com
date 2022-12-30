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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/video-block.htm */
class __TwigTemplate_fd4989571bb9f0ca525dd238138f4c6213280ba255fcb4089718c4459c3b5e8b extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/video-block.htm"));

        // line 1
        echo "<!-- style=\"background-image: url(";
        echo $this->env->getFilter('media')->getCallable()("images/background/videobg.png");
        echo ")\" -->
<div class=\"play-video rtbgprefix-full bg-hide-md\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-9 mx-auto\">
                <div class=\"play-video-box rtbgprefix-cover\" style=\"background-image: url(";
        // line 6
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/portada.png");
        echo ")\">
    <a href=\"https://www.youtube.com/watch?v=avu5IPPSHo4\" class=\"rt-btn rt-video-light playVideo\"></a>
</div><!-- /.play-video-box -->
            </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/video-block.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- style=\"background-image: url({{'images/background/videobg.png'|media}})\" -->
<div class=\"play-video rtbgprefix-full bg-hide-md\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-9 mx-auto\">
                <div class=\"play-video-box rtbgprefix-cover\" style=\"background-image: url({{'navicu/imgs/png/portada.png'|media}})\">
    <a href=\"https://www.youtube.com/watch?v=avu5IPPSHo4\" class=\"rt-btn rt-video-light playVideo\"></a>
</div><!-- /.play-video-box -->
            </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/video-block.htm", "");
    }
}
