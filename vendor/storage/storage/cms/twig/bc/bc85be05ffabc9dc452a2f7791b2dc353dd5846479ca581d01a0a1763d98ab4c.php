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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/flights-info.htm */
class __TwigTemplate_c7bb599bb172ded432ca79569a655b3df29aa0ab39a1d59b366180a9c36d421b extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/flights-info.htm"));

        // line 1
        echo "<!-- <div class=\"spacer-top\"></div>
-->
<section class=\"flight-dela-area\" data-scrollax-parent=\"true\">
    <!-- 
    <div class=\"rt-shape-emenetns-1\" style=\"background-image: url(";
        // line 5
        echo $this->env->getFilter('media')->getCallable()("images/shape-elements/shape_1.png");
        echo ")\"
        data-scrollax=\"properties: { translateY: '340px' }\"></div>
    -->
    <div class=\"rt-shape-emenetns-2\" style=\"background-image: url(";
        // line 8
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/new-flights.png");
        echo "); 
    transform: translateZ(0px) translateX(-11.7629px);\" data-scrollax=\"properties: { translateX: '-140px' }\"></div>
    <!-- 
    <div class=\"rt-shape-emenetns-2\" style=\"background-image: url()\"
        data-scrollax=\"properties: { translateX: '-140px' }\"></div>
    -->
        <!-- /.rt-shape-elemenets2 -->
    <div class=\"container \">
        <div class=\"row\">
            <div class=\"col-xl-10 mx-auto text-center\">
                <div class=\"rt-section-title-wrapper\">
                    <h2 class=\"rt-section-title\">
                        Explora el mundo con navicu.com
                    </h2><!-- /.rt-section-title -->
                    <p>
                        Cada viaje nos lleva a vivir aventuras increíbles que nos hacen ver el mundo como
                        nunca antes, <br> atrévete a explorar nuevos destinos con navicu.com
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class=\"section-title-spacer\"></div><!-- /.section-title-spacer -->
        <div class=\"row d-none d-sm-none d-md-block\">
            <div class=\"col-xl-8 col-lg-10\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 34
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/miami.jpg");
        echo ")\">
                            <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                            <div class=\"trip-to\">
                                <span>
                                    Viaja a
                                </span>
                                <span>
                                    MIAMI <br>
                                    <small>con salida desde caracas y valencia</small>
                                </span>
                            </div><!-- /.trip-to -->
                            <div class=\"trip-form\">
                                <!--  -->
                                <span></span>
                                <span>desde \$645</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->

                    <div class=\"col-md-6\">
                        <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 54
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/bogota.jpg");
        echo ")\">
                            <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                            <div class=\"trip-to\">
                                <span>
                                    Viaja a
                                </span>
                                <span>
                                    BOGOTÁ <br>
                                    <small>con salida desde caracas</small>
                                </span>
                            </div><!-- /.trip-to -->
                            <div class=\"trip-form\">
                                <span></span>
                                <span>desde \$549</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class=\"col-md-6\">
                        <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 72
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/sto-domingo.jpg");
        echo ")\">
                            <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                            <div class=\"trip-to\">
                                <span>
                                    Viaja a
                                </span>
                                <span>
                                    STO DOMINGO <br>
                                    <small>con salida desde caracas y valencia</small>
                                </span>
                            </div><!-- /.trip-to -->
                            <div class=\"trip-form\">
                                <span></span>
                                <span>desde \$369</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class=\"col-md-6\">
                        <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 90
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/isla-margarita.jpg");
        echo ")\">
                            <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                            <div class=\"trip-to\">
                                <span>
                                    Viaja a
                                </span>
                                <span>
                                    ISLA MARGARITA <br>
                                    <small>salida desde varias ciudades</small>
                                </span>
                            </div><!-- /.trip-to -->
                            <div class=\"trip-form\">
                                <span></span>
                                <span>desde \$35</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class=\"col-md-6\">
                        <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 108
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/panama.jpg");
        echo ")\">
                            <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                            <div class=\"trip-to\">
                                <span>
                                    Viaja a
                                </span>
                                <span>
                                    PANAMÁ <br>
                                    <small>con salida desde caracas y valencia</small>
                                </span>
                            </div><!-- /.trip-to -->
                            <div class=\"trip-form\">
                                <span></span>
                                <span>desde \$279</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class=\"col-md-6\">
                        <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 126
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/quito.jpg");
        echo ")\">
                            <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                            <div class=\"trip-to\">
                                <span>
                                    Viaja a
                                </span>
                                <span>
                                    QUITO <br>
                                    <small>con salida desde caracas</small>
                                </span>
                            </div><!-- /.trip-to -->
                            <div class=\"trip-form\">
                                <span></span>
                                <span>desde \$590</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
        <div class=\"row d-none d-sm-none d-md-block\">
            <div class=\"col-12 text-center mt-4 \">
                <h5 class=\"pb-3\">Haz click para conversar con tu agente de viajes</h5>
                <a href=\"https://wa.me/584140340934\" class=\"btn whatsapp-gradient-button\"> 
                    <img src=\"";
        // line 150
        echo $this->env->getFilter('media')->getCallable()("images/misc/whatsapp-white.png");
        echo "\" alt=\"\">
                    Abrir chat
                </a>
            </div>
        </div>
    </div><!-- /.container -->

    <div class=\"container d-block d-sm-none\">
        <div class=\"tiny-slider\">
            ";
        // line 181
        echo "            <div>
                <div class=\"col-md-12\">
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 183
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/miami.jpg");
        echo ")\">
                        <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                        <div class=\"trip-to\">
                            <span>
                                Viaja a
                            </span>
                            <span>
                                MIAMI <br>
                                <small>con salida desde caracas y valencia</small>
                            </span>
                        </div><!-- /.trip-to -->
                        <div class=\"trip-form\">
                            <!--  -->
                            <span></span>
                            <span>desde \$645</span>
                        </div><!-- /.trip-form -->
                    </a><!-- /.flight-box -->
                </div><!-- /.col-lg-4 -->
            </div>
            <div>
                <div class=\"col-md-12\">
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 204
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/bogota.jpg");
        echo ")\">
                        <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                        <div class=\"trip-to\">
                            <span>
                                Viaja a
                            </span>
                            <span>
                                BOGOTÁ <br>
                                <small>con salida desde caracas</small>
                            </span>
                        </div><!-- /.trip-to -->
                        <div class=\"trip-form\">
                            <span></span>
                            <span>desde \$549</span>
                        </div><!-- /.trip-form -->
                    </a><!-- /.flight-box -->
                </div>
            </div>
            <div>   
                <div class=\"col-md-12\">
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 224
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/sto-domingo.jpg");
        echo ")\">
                        <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                        <div class=\"trip-to\">
                            <span>
                                Viaja a
                            </span>
                            <span>
                                STO DOMINGO <br>
                                <small>con salida desde caracas y valencia</small>
                            </span>
                        </div><!-- /.trip-to -->
                        <div class=\"trip-form\">
                            <span></span>
                            <span>desde \$369</span>
                        </div><!-- /.trip-form -->
                    </a><!-- /.flight-box -->
                </div>
            </div>
            <div>
                <div class=\"col-md-12\">
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 244
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/isla-margarita.jpg");
        echo ")\">
                        <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                        <div class=\"trip-to\">
                            <span>
                                Viaja a
                            </span>
                            <span>
                                ISLA MARGARITA <br>
                                <small>salida desde varias ciudades</small>
                            </span>
                        </div><!-- /.trip-to -->
                        <div class=\"trip-form\">
                            <span></span>
                            <span>desde \$35</span>
                        </div><!-- /.trip-form -->
                    </a><!-- /.flight-box -->
                </div>
            </div>    
            <div>
                <div class=\"col-md-12\">
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 264
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/panama.jpg");
        echo ")\">
                        <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                        <div class=\"trip-to\">
                            <span>
                                Viaja a
                            </span>
                            <span>
                                PANAMÁ <br>
                                <small>con salida desde caracas y valencia</small>
                            </span>
                        </div><!-- /.trip-to -->
                        <div class=\"trip-form\">
                            <span></span>
                            <span>desde \$279</span>
                        </div><!-- /.trip-form -->
                    </a><!-- /.flight-box -->
                </div>
            </div>    
            <div>
                <div class=\"col-md-12\">
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url(";
        // line 284
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/paises-destinos/quito.jpg");
        echo ")\">
                        <div class=\"rt-inner-overlay color_1\"></div><!-- /.rt-overlay -->
                        <div class=\"trip-to\">
                            <span>
                                Viaja a
                            </span>
                            <span>
                                QUITO <br>
                                <small>con salida desde caracas</small>
                            </span>
                        </div><!-- /.trip-to -->
                        <div class=\"trip-form\">
                            <span></span>
                            <span>desde \$590</span>
                        </div><!-- /.trip-form -->
                    </a><!-- /.flight-box -->
                </div><!-- /.col-lg-4 -->
            </div>    
         
        </div>

        <div class=\"row d-block d-sm-none\">
            <div class=\"col-12 text-center mt-4 mb-4 pb-4\">
                <h5 class=\"pb-3\">Haz click para conversar con tu agente de viajes</h5>
                <a href=\"https://wa.me/584140340934\" class=\"btn whatsapp-gradient-button\"> 
                    <img src=\"";
        // line 309
        echo $this->env->getFilter('media')->getCallable()("images/misc/whatsapp-white.png");
        echo "\" alt=\"\">
                    Abrir chat
                </a>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/flights-info.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 309,  349 => 284,  326 => 264,  303 => 244,  280 => 224,  257 => 204,  233 => 183,  229 => 181,  217 => 150,  190 => 126,  169 => 108,  148 => 90,  127 => 72,  106 => 54,  83 => 34,  54 => 8,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/flights-info.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("media" => 5);
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
