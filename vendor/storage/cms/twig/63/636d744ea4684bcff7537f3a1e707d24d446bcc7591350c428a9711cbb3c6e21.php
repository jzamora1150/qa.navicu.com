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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/services-section.htm */
class __TwigTemplate_13acc24a6d0be695d28f4a3388195c4053069602a33d6ef375552e3aff72d0b8 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/services-section.htm"));

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
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/services-section.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 40,  77 => 31,  65 => 22,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--  style=\"background-image: url({{'images/background/dotbg.png'|media}})\" -->
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
                        <img src=\"{{'navicu/imgs/png/alojamientos-icon.png'|media}}\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Reservas de Alojamientos</h4>
                    <p>Encuentra las últimas ofertas de hospedaje en Venezuela</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1\" >
                    <div class=\"services-thumb\">
                        <img src=\"{{'navicu/imgs/png/flights-icon.png'|media}}\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Vuela a nuevos destinos</h4>
                    <p>Boletería aérea al mejor precio del mercado</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4 col-md-6 mx-auto text-center\">
                <div class=\"services-box-1\" >
                    <div class=\"services-thumb\">
                    <img src=\"{{'navicu/imgs/png/support-icon.png'|media}}\" alt=\"\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <h4>Atención personalizada</h4>
                    <p>Planifica tu viaje con la asesoría de nuestros agentes expertos</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class=\"spacer-bottom\"></div><!-- /.spacer-bottm -->
</section>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/services-section.htm", "");
    }
}
