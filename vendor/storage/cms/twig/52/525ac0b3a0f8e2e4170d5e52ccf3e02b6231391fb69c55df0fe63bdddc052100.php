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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/home-steps.htm */
class __TwigTemplate_d7b467c99589d1661a09fa7c05e239078db787c4c356eee1da7e5d9dc4ebf19e extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/home-steps.htm"));

        // line 1
        echo "<section class=\"works-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 text-center mx-auto\">
                <div class=\"rt-section-title-wrapper\">
                    <h5>Explora el mundo con navicu.com</h5>
                    <h2 class=\"rt-section-title\">
                        ¡La forma más fácil y segura de adquirir tus boletos aéreos!
                    </h2><!-- /.rt-section-title -->
                    <p>Adquiere tus boletos aéreos a los mejores destinos internacionales y dentro de Venezuela, <br>
                        seremos tu guía en cada paso y te ayudaremos a planificar tu viaje ideal</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class=\"section-title-spacer\"></div><!-- /.section-title-spacer -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mx-auto text-center\">
                <div class=\"services-box-2 \">
                    <div class=\"services-thumb\">
                        <img src=\"";
        // line 20
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/blt-internacional.png");
        echo "\" alt=\"Boletería\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <p>Boletería nacional <br> e internacional</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-lg-3 col-md-6 mx-auto text-center\">
                <div class=\"services-box-2\">
                    <div class=\"services-thumb\">
                        <img src=\"";
        // line 28
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/precio-garantizado.png");
        echo "\" alt=\"Mejor precio garantizado\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <p>Mejor precio garantizado y <br> facilidades de pago</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-lg-3 col-md-6 mx-auto text-center\">
                <div class=\"services-box-2\">
                    <div class=\"services-thumb\">
                        <img src=\"";
        // line 36
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/soporte-agentes.png");
        echo "\" alt=\"Soporte 24/7\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                   
                    <p>Soporte 24/7 por nuestros agentes expertos en viajes</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-lg-3 col-md-6 mx-auto text-center\">
                <div class=\"services-box-2\">
                    <div class=\"services-thumb\">
                        <img src=\"";
        // line 45
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/alianzas-lineas.png");
        echo "\" alt=\"Alianzas\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    
                    <p>Alianzas con las principales líneas aéreas de Venezuela y el mundo</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-12 text-center mt-4 mb-4 pb-4\">
                <h5 class=\"pb-3\">Explora el mundo con navicu.com</h5>
                <a href=\"https://wa.me/584140340934\" target=\"_blank\" class=\"btn whatsapp-gradient-button\"> 
                    <img src=\"";
        // line 54
        echo $this->env->getFilter('media')->getCallable()("images/misc/whatsapp-white.png");
        echo "\" alt=\"whatsapp\">
                    Abrir chat</a>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
 </section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/home-steps.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 54,  95 => 45,  83 => 36,  72 => 28,  61 => 20,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"works-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 text-center mx-auto\">
                <div class=\"rt-section-title-wrapper\">
                    <h5>Explora el mundo con navicu.com</h5>
                    <h2 class=\"rt-section-title\">
                        ¡La forma más fácil y segura de adquirir tus boletos aéreos!
                    </h2><!-- /.rt-section-title -->
                    <p>Adquiere tus boletos aéreos a los mejores destinos internacionales y dentro de Venezuela, <br>
                        seremos tu guía en cada paso y te ayudaremos a planificar tu viaje ideal</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class=\"section-title-spacer\"></div><!-- /.section-title-spacer -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mx-auto text-center\">
                <div class=\"services-box-2 \">
                    <div class=\"services-thumb\">
                        <img src=\"{{'navicu/imgs/png/blt-internacional.png'|media}}\" alt=\"Boletería\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <p>Boletería nacional <br> e internacional</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-lg-3 col-md-6 mx-auto text-center\">
                <div class=\"services-box-2\">
                    <div class=\"services-thumb\">
                        <img src=\"{{'navicu/imgs/png/precio-garantizado.png'|media}}\" alt=\"Mejor precio garantizado\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    <p>Mejor precio garantizado y <br> facilidades de pago</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-lg-3 col-md-6 mx-auto text-center\">
                <div class=\"services-box-2\">
                    <div class=\"services-thumb\">
                        <img src=\"{{'navicu/imgs/png/soporte-agentes.png'|media}}\" alt=\"Soporte 24/7\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                   
                    <p>Soporte 24/7 por nuestros agentes expertos en viajes</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-lg-3 col-md-6 mx-auto text-center\">
                <div class=\"services-box-2\">
                    <div class=\"services-thumb\">
                        <img src=\"{{'navicu/imgs/png/alianzas-lineas.png'|media}}\" alt=\"Alianzas\" draggable=\"false\">
                    </div><!-- /.services-thumb -->
                    
                    <p>Alianzas con las principales líneas aéreas de Venezuela y el mundo</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class=\"col-12 text-center mt-4 mb-4 pb-4\">
                <h5 class=\"pb-3\">Explora el mundo con navicu.com</h5>
                <a href=\"https://wa.me/584140340934\" target=\"_blank\" class=\"btn whatsapp-gradient-button\"> 
                    <img src=\"{{'images/misc/whatsapp-white.png'|media}}\" alt=\"whatsapp\">
                    Abrir chat</a>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
 </section>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/home-steps.htm", "");
    }
}
