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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/newsletter-footer.htm */
class __TwigTemplate_922922e25f7991c29f18f1f19bf30658c8dfa9106225416217e586579ccc858a extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/newsletter-footer.htm"));

        // line 1
        echo "<section class=\"rt-site-footer\" data-scrollax-parent=\"true\">
    ";
        // line 5
        echo "
    <!-- style=\"background-image: url(";
        // line 6
        echo $this->env->getFilter('media')->getCallable()("images/background/footerbg.png");
        echo ")\" -->
    <div class=\"footer-top rtbgprefix-cover\" >
        
        <div class=\"footer-subscripbe-box wow fade-in-bottom\">
           <div class=\"container-fluid\">
               <div class=\"row d-flex align-items-center\">
                    <div class=\"col-lg-3 d-none d-sm-none d-md-block\">
                        <img src=\"";
        // line 13
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/footer-a.png");
        echo "\" alt=\"\">
                    </div>
                   <div class=\"col-xl-6 col-lg-6 mx-auto text-center\">
                        <div class=\"rt-section-title-wrapper \">
                            <h2 class=\"rt-section-title\">
                                ¡Viajero, tenemos mucho que contarte!
                            </h2><!-- /.rt-section-title -->
                            <p class=\"dark-violet-text\">
                                Suscribete a nuestro newsletter y mantente actualizado con las promociones, 
                                paquetes y ofertas de temporada
                            </p>
                            <h4>Hospedaje + Boletería + Traslados</h4>
                        </div><!-- /.rt-section-title-wrapper -->
                   </div><!-- /.col-lg-7 -->
                   <div class=\"col-lg-3 d-none d-sm-none d-md-block\">
                    <img src=\"";
        // line 28
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/footer-b.png");
        echo "\" alt=\"\">
                </div>
               </div><!-- /.row -->
            
            <form action=\"#\" id=\"subscribe-form\">
            <div class=\"row\">
                <div class=\"col-lg-4 mx-auto\">
                    <div class=\"input-group mb-5\">
                        
                            <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Correo electrónico\" aria-describedby=\"button-addon2\">
                            <div class=\"input-group-append\">
                                <input class=\"btn\" type=\"submit\" id=\"button-addon2\" value=\"Suscribirme\">
                            </div>
                        
                        
                    </div><!-- end input gorup -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
            </form>
              
           </div><!-- /.container -->
        </div><!-- /.footer-subscripbe-box -->
        
        <div class=\"container-fluid footer-main\">
            <div class=\"row pb-3\">
                <div class=\"col-md-2\">
                    <img class=\"pb-2 navicu-footer-logo pl-md-5 pt-md-5 \" src=\"";
        // line 54
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/logo-header-navicu-white.svg");
        echo "\" alt=\"\">
                </div>
                
            </div>
            <!-- DESK-->
            <div class=\"row d-none d-sm-none d-md-flex\">
                <div class=\"col-lg-2\">
                    <div class=\"rt-single-widget pl-5\">
                        
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"row\">
                                    <div class=\"col \">
                                        <ul class=\"w-100\" >
                                            
                                            <li class=\"pl-2\"><a href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"footer-link-decored footer-colored-link\">Contáctanos</a></li>
                                            <li class=\"pl-2\"><a href=\"#\"  data-toggle=\"modal\" data-target=\"#terms-condition-modal\" class=\"footer-link-decored footer-colored-link\">Términos y condiciones</a></li>
                                            
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.rt-single-widge -->
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"rt-single-widget\">
                        <h3 class=\"rt-footer-title\">Destinos nacionales</h3><!-- /.rt-footer-title -->
                        <div class=\"row\">
                            <div class=\"col\">
                                <ul >
                                    <li><a href=\"#\">Hoteles en Margarita</a></li>
                                    <li><a href=\"#\">Hoteles en Barquisimeto</a></li>
                                    <li><a href=\"#\">Hoteles en Valencia</a></li>
                                </ul>
                                
                            </div>
                            <div class=\"col\">
                                <ul >
                                    <li><a href=\"#\">Hoteles en Caracas</a></li>
                                    <li><a href=\"#\">Hoteles en Maracay</a></li>
                                    <li><a href=\"#\">Hoteles en Canaima</a></li>
                                </ul>
                            </div>
                            
                            
                        </div>

                    </div><!-- /.rt-single-widge -->
                </div><!-- /.col-lg-3-->
                <div class=\"col-lg-3\">
                    <div class=\"rt-single-widget\">
                        <h3 class=\"rt-footer-title\">Boletería internacional</h3><!-- /.rt-footer-title -->
                        <div class=\"row\">
                            <div class=\"col\">
                                <ul >
                                    <li><a href=\"#\">Vuelos a Miami</a></li>
                                    <li><a href=\"#\">Vuelos a  Colombia</a></li>
                                    <li><a href=\"#\">Vuelos a  Punta Cana</a></li>
                                </ul>
                                
                            </div>
                            <div class=\"col\">
                                <ul >
                                    <li><a href=\"#\">Vuelos a  Santo Domingo</a></li>
                                    <li><a href=\"#\">Vuelos a  Madrid</a></li>
                                    <li><a href=\"#\">Vuelos a  México</a></li>
                                </ul>
                            </div>
                            
                            
                        </div>

                    </div><!-- /.rt-single-widge -->
                </div><!-- /.col-lg-3-->
                <div class=\"col-lg-3\">
                    <div class=\"rt-single-widget\">
                        <h3 class=\"rt-footer-title\">Paquetes turísticos</h3><!-- /.rt-footer-title -->
                        <div class=\"row\">
                            <div class=\"col\">
                                <ul >
                                    <li><a href=\"#\">Navidad</a></li>
                                    <li><a href=\"#\">Fin de año</a></li>
                                    <li><a href=\"#\">Reyes</a></li>
                                </ul>
                                
                            </div>
                            <div class=\"col\">
                                <ul >
                                    <li><a href=\"#\">Vacaciones</a></li>
                                    <li><a href=\"#\">Temporada baja</a></li>
                                    <li><a href=\"#\">Semana Santa</a></li>
                                </ul>
                            </div>
                            <div class=\"col\">
                                <ul >
                                    <li><a href=\"#\">Hoteles</a></li>
                                    <li><a href=\"#\">Paquetes</a></li>
                                    <li><a href=\"#\">Blog</a></li>
                                </ul>
                            </div>
                            
                        </div>

                    </div><!-- /.rt-single-widge -->
                </div><!-- /.col-lg-3-->
            </div><!-- /.row -->
            <!--END DESK-->

            <div class=\"row d-block d-sm-none\">
                <div class=\"accordion\" id=\"accordionLink\">
                    <div class=\"card\">
                      
                       
                          <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            Destinos nacionales
                          </button>
                      
                    
                  
                      <div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionLink\">
                        <div class=\"card-body\">
                            <ul >
                                <li><a href=\"#\">Hoteles en Margarita</a></li>
                                <li><a href=\"#\">Hoteles en Barquisimeto</a></li>
                                <li><a href=\"#\">Hoteles en Valencia</a></li>
                                <li><a href=\"#\">Hoteles en Caracas</a></li>
                                <li><a href=\"#\">Hoteles en Maracay</a></li>
                                <li><a href=\"#\">Hoteles en Canaima</a></li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class=\"card\">
                      
                        <button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                            Boletería internacional
                        </button>
                        
                      
                      <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionLink\">
                        <div class=\"card-body\">
                            <ul>
                                <li><a href=\"#\">Vuelos a Miami</a></li>
                                <li><a href=\"#\">Vuelos a  Colombia</a></li>
                                <li><a href=\"#\">Vuelos a  Punta Cana</a></li>
                                <li><a href=\"#\">Vuelos a  Santo Domingo</a></li>
                                <li><a href=\"#\">Vuelos a  Madrid</a></li>
                                <li><a href=\"#\">Vuelos a  México</a></li>
                            </ul>
                            
                        </div>
                      </div>
                    </div>
                    <div class=\"card\">
                      <button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                        Paquetes turísticos
                      </button>
                      <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordionLink\">
                        <div class=\"card-body\">
                          <ul>
                            <li><a href=\"#\">Navidad</a></li>
                            <li><a href=\"#\">Fin de año</a></li>
                            <li><a href=\"#\">Reyes</a></li>
                            <li><a href=\"#\">Vacaciones</a></li>
                            <li><a href=\"#\">Temporada baja</a></li>
                            <li><a href=\"#\">Semana Santa</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class=\"row footer-navigation d-block d-sm-none\">
                <div class=\"rt-single-widget \">

                    <ul >
                        <li><a href=\"#\">Hoteles</a></li>
                        <li><a href=\"#\">Paquetes</a></li>
                        <li><a href=\"#\">Blog</a></li>
                    </ul>
                     

                </div><!-- /.rt-single-widge -->
            </div>
            <div class=\"row d-block d-sm-none\">
                <div>
                    <ul class=\"pt-3 clearfix pb-3\">
                        <li class=\"float-left pr-5\"><a href=\"";
        // line 243
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"footer-link-decored footer-colored-link\">Contáctanos</a></li>
                        <li class=\"float-left\"><a href=\"#\" class=\"footer-link-decored footer-colored-link\">Términos y condiciones</a></li>
                    
                    </ul>
                    
                </div>
                <div class=\"text-left\">
                    <div class=\"rt-footer-social\">
                        <ul>
                            <li><a href=\"#\"><img src=\"";
        // line 252
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/amex-logo.svg");
        echo "\" alt=\"American Express\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 253
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/master-logo.svg");
        echo "\" alt=\"Master Card\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 254
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/visa-logo.svg");
        echo "\" alt=\"Visa\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 255
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/zelle-logo.svg");
        echo "\" alt=\"Zelle\" draggable=\"false\"></a></li>
                           
                        </ul>
                    </div><!-- /.rt-footer-social -->
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.footer-top -->
    <div class=\"footer-bottom\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-4 text-center text-lg-left d-none d-sm-none d-md-block\">
                    <div class=\"copy-text\">
                        All rights reserved · 2022 navicu.com
                    </div><!-- /.copy-text -->
                </div>
                <div class=\"col-lg-4 text-center text-lg-right\">
                    <div class=\"rt-footer-social\">
                        
                        <ul class=\"d-flex justify-content-center social-links\">
                            <li><a href=\"#\"><img src=\"";
        // line 275
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/instagram-footer.svg");
        echo "\" alt=\"Instagram\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 276
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/facebook-footer.svg");
        echo "\" alt=\"Facebook Card\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 277
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/linkedin-footer.svg");
        echo "\" alt=\"LinkedIn\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 278
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/youtube-footer.svg");
        echo "\" alt=\"Youtube\" draggable=\"false\"></a></li>
                           
                        </ul>
                        
                    </div><!-- /.rt-footer-social -->
                </div>
                <div class=\"col-lg-4 text-center text-lg-left d-block d-sm-none\">
                    <div class=\"copy-text\">
                        All rights reserved · 2022 navicu.com
                    </div><!-- /.copy-text -->
                </div>
                <div class=\"col-lg-4 text-center text-lg-right d-none d-sm-none d-md-block\">
                    <div class=\"rt-footer-social\">
                        <ul>
                            <li><a href=\"#\"><img src=\"";
        // line 292
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/amex-logo.svg");
        echo "\" alt=\"American Express\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 293
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/master-logo.svg");
        echo "\" alt=\"Master Card\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 294
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/visa-logo.svg");
        echo "\" alt=\"Visa\" draggable=\"false\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 295
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/zelle-logo.svg");
        echo "\" alt=\"Zelle\" draggable=\"false\"></a></li>
                           
                        </ul>
                    </div><!-- /.rt-footer-social -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/newsletter-footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 295,  384 => 294,  380 => 293,  376 => 292,  359 => 278,  355 => 277,  351 => 276,  347 => 275,  324 => 255,  320 => 254,  316 => 253,  312 => 252,  300 => 243,  123 => 69,  105 => 54,  76 => 28,  58 => 13,  48 => 6,  45 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/newsletter-footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("media" => 6, "page" => 69);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['media', 'page'],
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
