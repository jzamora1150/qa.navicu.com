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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/flights-info.htm */
class __TwigTemplate_19c985a8b44d9d448bf5d69ad72fc3c97da4f529fb356e47897fcf3ed472bc83 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/flights-info.htm"));

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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20Miami\" target=\"_blank\" style=\"background-image: url(";
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20Bogotá\" target=\"_blank\" style=\"background-image: url(";
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20Sto%20Domingo\" target=\"_blank\" style=\"background-image: url(";
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20Isla%20Margarita\" target=\"_blank\" style=\"background-image: url(";
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20P%C3%A1nama\" target=\"_blank\" style=\"background-image: url(";
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20Quito\" target=\"_blank\" style=\"background-image: url(";
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
        echo "\" alt=\"\" >
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
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/flights-info.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 309,  347 => 284,  324 => 264,  301 => 244,  278 => 224,  255 => 204,  231 => 183,  227 => 181,  215 => 150,  188 => 126,  167 => 108,  146 => 90,  125 => 72,  104 => 54,  81 => 34,  52 => 8,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <div class=\"spacer-top\"></div>
-->
<section class=\"flight-dela-area\" data-scrollax-parent=\"true\">
    <!-- 
    <div class=\"rt-shape-emenetns-1\" style=\"background-image: url({{'images/shape-elements/shape_1.png'|media}})\"
        data-scrollax=\"properties: { translateY: '340px' }\"></div>
    -->
    <div class=\"rt-shape-emenetns-2\" style=\"background-image: url({{'navicu/imgs/png/new-flights.png'|media}}); 
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20Miami\" target=\"_blank\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/miami.jpg'|media}})\">
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20Bogotá\" target=\"_blank\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/bogota.jpg'|media}})\">
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20Sto%20Domingo\" target=\"_blank\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/sto-domingo.jpg'|media}})\">
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20Isla%20Margarita\" target=\"_blank\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/isla-margarita.jpg'|media}})\">
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20P%C3%A1nama\" target=\"_blank\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/panama.jpg'|media}})\">
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
                        <a class=\"flight-box\" href=\"https://api.whatsapp.com/send?phone=+584140340934&text=Hola%20Navicu.com,%20%20Estoy%20interesada(o)%20en%20el%20paquete%20viaja%20a%20Quito\" target=\"_blank\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/quito.jpg'|media}})\">
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
                    <img src=\"{{'images/misc/whatsapp-white.png'|media}}\" alt=\"\">
                    Abrir chat
                </a>
            </div>
        </div>
    </div><!-- /.container -->

    <div class=\"container d-block d-sm-none\">
        <div class=\"tiny-slider\">
            {#
            <div>
                <div class=\"col-md-12\">
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url({{'navicu/imgs/jpg/VERANO-2.jpg'|media}})\">
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
            #}
            <div>
                <div class=\"col-md-12\">
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/miami.jpg'|media}})\">
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
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/bogota.jpg'|media}})\">
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
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/sto-domingo.jpg'|media}})\">
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
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/isla-margarita.jpg'|media}})\">
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
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/panama.jpg'|media}})\">
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
                    <a class=\"flight-box\" href=\"#\" style=\"background-image: url({{'navicu/imgs/jpg/paises-destinos/quito.jpg'|media}})\">
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
                    <img src=\"{{'images/misc/whatsapp-white.png'|media}}\" alt=\"\" >
                    Abrir chat
                </a>
            </div>
        </div>
    </div>
</section>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/flights-info.htm", "");
    }
}
