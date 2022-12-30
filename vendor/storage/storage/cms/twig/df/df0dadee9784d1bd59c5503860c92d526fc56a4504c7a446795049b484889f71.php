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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/services-section.htm */
class __TwigTemplate_027034b2b6016bf39299c72f15eb1fe4e66dab82141158495127781d493a5010 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/services-section.htm"));

        // line 1
        echo "<!--  style=\"background-image: url(";
        echo $this->env->getFilter('media')->getCallable()("images/background/dotbg.png");
        echo ")\" -->
<section class=\"emigr-services-area rtbgprefix-contain\">
    <div class=\"spacer-bottom\"></div><!-- /.spacer-bottom -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 text-center mx-auto\">
                <div class=\"rt-section-title-wrapper\">
                   
                    <h2 class=\"rt-section-title\">
                        
                        ¡Un nuevo viaje está por comenzar!
                    </h2><!-- /.rt-section-title -->
                    <p>Conoce todos los destinos del mundo con la mejor plataforma <br> de viajes de Venezuela y Latinoamérica</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class=\"section-title-spacer\"></div><!-- /.section-title-spacer -->
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1\">
                    <div class=\"services-thumb\">
                        <img src=\"";
        // line 22
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/alojamientos-icon.png");
        echo "\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Reservas de Alojamientos</h4>
                    <p>Encuentra las últimas ofertas de hospedaje en Venezuela</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1\" >
                    <div class=\"services-thumb\">
                        <img src=\"";
        // line 31
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/flights-icon.png");
        echo "\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Vuela a nuevos destinos</h4>
                    <p>Boletería aérea al mejor precio del mercado</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1\" >
                    <div class=\"services-thumb\">
                    <img src=\"";
        // line 40
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/support-icon.png");
        echo "\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Atención personalizada</h4>
                    <p>Planifica tu viaje con la asesoría de nuestros agentes expertos</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class=\"spacer-bottom\"></div><!-- /.spacer-bottm -->
</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/services-section.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 40,  79 => 31,  67 => 22,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/services-section.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("media" => 1);
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
