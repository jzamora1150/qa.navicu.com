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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/counter-area.htm */
class __TwigTemplate_59c775ecea11fe0d2220c280c9e22c61c15b06fbfbbb2712103c828d2f37edf2 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/counter-area.htm"));

        // line 1
        echo "<div class=\"counter-area\">
    <div class=\"container\">
        <div class=\"row d-flex \">
            <div class=\"col-lg-4 col-md-6 col-12\">
                <div class=\"media counter-box-1 align-items-center\">
                    <img src=\"";
        // line 6
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/viajeros-icon.svg");
        echo "\" alt=\"1\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5 class=\"\">Viajeros navicu </h5>
                        <h6><span class=\"counter\"><span>+</span>16,890</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 col-12\" >
                <div class=\"media counter-box-1 align-items-center\">
                    <img src=\"";
        // line 15
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/boletos-icon.svg");
        echo "\" alt=\"2\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5>Boletos aéreos vendidos <br></h5>
                        <h6><span class=\"counter\"><span>+</span>10,220</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 col-12\">
                <div class=\"media counter-box-1 align-items-center\">
                    <img src=\"";
        // line 24
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/alojamientos-icon.svg");
        echo "\" alt=\"3\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5 class=\"\">Reservas en alojamiento </h5>
                        <h6><span class=\"counter\"><span>+</span>12,775</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
    
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/counter-area.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  59 => 15,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"counter-area\">
    <div class=\"container\">
        <div class=\"row d-flex \">
            <div class=\"col-lg-4 col-md-6 col-12\">
                <div class=\"media counter-box-1 align-items-center\">
                    <img src=\"{{'navicu/imgs/svg/viajeros-icon.svg'|media}}\" alt=\"1\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5 class=\"\">Viajeros navicu </h5>
                        <h6><span class=\"counter\"><span>+</span>16,890</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 col-12\" >
                <div class=\"media counter-box-1 align-items-center\">
                    <img src=\"{{'navicu/imgs/svg/boletos-icon.svg'|media}}\" alt=\"2\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5>Boletos aéreos vendidos <br></h5>
                        <h6><span class=\"counter\"><span>+</span>10,220</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 col-12\">
                <div class=\"media counter-box-1 align-items-center\">
                    <img src=\"{{'navicu/imgs/svg/alojamientos-icon.svg'|media}}\" alt=\"3\" draggable=\"false\">
                    <div class=\"media-body\">
                        <h5 class=\"\">Reservas en alojamiento </h5>
                        <h6><span class=\"counter\"><span>+</span>12,775</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
    
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/counter-area.htm", "");
    }
}
