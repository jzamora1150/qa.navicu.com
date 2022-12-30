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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/counter-area.htm */
class __TwigTemplate_af644d7f5fcf5e7f15f554528d44ee473790fbddd9ea2d28009d254f1221c91f extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/counter-area.htm"));

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
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/counter-area.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  61 => 15,  49 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/counter-area.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("media" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['media'],
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
