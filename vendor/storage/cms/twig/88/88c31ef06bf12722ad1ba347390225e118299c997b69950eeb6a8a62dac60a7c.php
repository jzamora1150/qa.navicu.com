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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/cart.htm */
class __TwigTemplate_794420dc972adb24fd99189e3ca849d82ec771062eb6ae8b2d8404f99443fb28 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/cart.htm"));

        // line 1
        echo "<div class=\"rt-breadcump rt-breadcump-height d-none d-sm-block\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url(";
        // line 2
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/covers/cover-hoteles.jpg");
        echo ")\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3>Carrito</h3>
                    <!-- 
                    <div class=\"breadcrumbs\">
                        <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                        <a href=\"#\" title=\"Home\">Home</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        <a href=\"#\">China</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        <a href=\"#\">Hotels</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        <a href=\"#\" title=\"Home\">Hong Kong Hotels</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        Empire Hotel Kowloon - Tsim Sha Tsui

                    </div>
                    -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->

<section class=\"content-area upper-content-area \">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-4 d-none d-sm-block cart-list-container\" id=\"cart-list-container\">
                
                ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("cart/cart-list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "               
            </div><!-- /.col-lg-9 -->
            <div class=\"col-lg-8 mx-auto\">
                <div class=\"rt-sidebar-group\">
                    <div class=\"flight-list-box rt-mb-30 pt-30\" id=\"user-form-container\">

                        <h5 class=\"host-label\">Información del huesped</h5>
                        <div class=\"row pt-5 pb-5 d-block d-sm-none\">
                            <div class=\"col-md-12 text-center\">
                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#cart-side-modal\"
                                    class=\"yellow-pill-button\">Detalles de la reserva</a>
                            </div>
                        </div>
                        <form id=\"booking-form\" class=\"rt-form rt-line-form flight-lable pt-4\">
                            
                            <div class=\"row\">
                                <div class=\"col-md-12 rt-mb-30 \">
                                    <label for=\"fst-name\">Nombre y Apellido</label>
                                    <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Ej: Juan Perez\">
                                </div><!-- /.col-md-6 -->
                                <div class=\"col-md-12 rt-mb-30\">
                                    <label>Email</label>
                                    <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Ej: juanperez@gmail.com\">
                                </div><!-- /.col-md-6 -->
                                <div class=\"col-lg-6 rt-mb-30\">
                                    <label>Tipo de documento</label>
                                    <select name=\"document_type\">
                                        
                                        <option value=\"V\">C.I</option>
                                        <option value=\"J\">J</option>
                                        <option value=\"P\">P</option>
                                        <option value=\"E\">E</option>
                                    </select>
                                </div><!-- /.col-md-6 -->
                                <div class=\"col-md-6 rt-mb-30\">
                                    <label >Documento</label>
                                    <input type=\"text\" class=\"form-control\" name=\"document\" placeholder=\"Ej: 999999999\">
                                </div>
                                <div class=\"col-lg-6 rt-mb-30\">
                                    <label>Codigo País</label>
                                    <select name=\"country_code\">
                                        <option value=\"+58\">+58</option>
                                        
                                    </select>
                                </div><!-- /.col-md-6 -->
                                <div class=\"col-md-6 rt-mb-30\">
                                    <label>Teléfono</label>
                                    <input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Ej: 04145555555\">
                                </div>
                                <div class=\"col-md-12\">
                                    <hr>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"cart-total-container d-block d-sm-none w-100 pb-5\">
                    
                                        ";
        // line 91
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("cart/cart-total"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 92
        echo "                                       
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <label>Observaciones</label>
                                    <textarea placeholder=\"Si tienes alguna duda escríbela aquí\" name=\"message\" class=\"form-control rt-mb-30\"></textarea>
                                </div> 
                                
                                <div class=\"col-md-12 rt-mb-30\" id=\"terms-condition-container\">
                                    <div class=\"custom-control custom-checkbox d-flex align-items-center\">
                                        <input type=\"checkbox\" name=\"terms\" class=\"custom-control-input\" id=\"terms\">
                                        <label class=\"custom-control-label pl-2\" for=\"terms\">
                                            Acepto las <a href=\"#\" data-toggle=\"modal\" data-target=\"#terms-condition-modal\">condiciones de uso y las políticas de privacidad</a>
                                        </label>
                                      </div>
                                      
                                </div>
                                
                            </div><!-- /.row -->
                            
                            <div class=\"d-none d-sm-flex justify-content-end\">
                                <button type=\"submit\" class=\"save-booking\">Pagar mi reserva</button>
                            </div>

                            <div class=\"d-flex d-sm-none justify-content-center\">
                                <button type=\"submit\" class=\"save-booking\">Pagar mi reserva</button>
                            </div>
                        </form>
                    </div><!-- /.flight-list-box -->

                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 92,  140 => 91,  83 => 36,  79 => 35,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rt-breadcump rt-breadcump-height d-none d-sm-block\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url({{'navicu/imgs/jpg/covers/cover-hoteles.jpg'|media}})\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3>Carrito</h3>
                    <!-- 
                    <div class=\"breadcrumbs\">
                        <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                        <a href=\"#\" title=\"Home\">Home</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        <a href=\"#\">China</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        <a href=\"#\">Hotels</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        <a href=\"#\" title=\"Home\">Hong Kong Hotels</a>
                        <span class=\"divider\"><i class=\"icofont-simple-right\"></i></span>
                        Empire Hotel Kowloon - Tsim Sha Tsui

                    </div>
                    -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->

<section class=\"content-area upper-content-area \">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-4 d-none d-sm-block cart-list-container\" id=\"cart-list-container\">
                
                {% partial 'cart/cart-list' %}
               
            </div><!-- /.col-lg-9 -->
            <div class=\"col-lg-8 mx-auto\">
                <div class=\"rt-sidebar-group\">
                    <div class=\"flight-list-box rt-mb-30 pt-30\" id=\"user-form-container\">

                        <h5 class=\"host-label\">Información del huesped</h5>
                        <div class=\"row pt-5 pb-5 d-block d-sm-none\">
                            <div class=\"col-md-12 text-center\">
                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#cart-side-modal\"
                                    class=\"yellow-pill-button\">Detalles de la reserva</a>
                            </div>
                        </div>
                        <form id=\"booking-form\" class=\"rt-form rt-line-form flight-lable pt-4\">
                            
                            <div class=\"row\">
                                <div class=\"col-md-12 rt-mb-30 \">
                                    <label for=\"fst-name\">Nombre y Apellido</label>
                                    <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Ej: Juan Perez\">
                                </div><!-- /.col-md-6 -->
                                <div class=\"col-md-12 rt-mb-30\">
                                    <label>Email</label>
                                    <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Ej: juanperez@gmail.com\">
                                </div><!-- /.col-md-6 -->
                                <div class=\"col-lg-6 rt-mb-30\">
                                    <label>Tipo de documento</label>
                                    <select name=\"document_type\">
                                        
                                        <option value=\"V\">C.I</option>
                                        <option value=\"J\">J</option>
                                        <option value=\"P\">P</option>
                                        <option value=\"E\">E</option>
                                    </select>
                                </div><!-- /.col-md-6 -->
                                <div class=\"col-md-6 rt-mb-30\">
                                    <label >Documento</label>
                                    <input type=\"text\" class=\"form-control\" name=\"document\" placeholder=\"Ej: 999999999\">
                                </div>
                                <div class=\"col-lg-6 rt-mb-30\">
                                    <label>Codigo País</label>
                                    <select name=\"country_code\">
                                        <option value=\"+58\">+58</option>
                                        
                                    </select>
                                </div><!-- /.col-md-6 -->
                                <div class=\"col-md-6 rt-mb-30\">
                                    <label>Teléfono</label>
                                    <input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Ej: 04145555555\">
                                </div>
                                <div class=\"col-md-12\">
                                    <hr>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"cart-total-container d-block d-sm-none w-100 pb-5\">
                    
                                        {% partial 'cart/cart-total' %}
                                       
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <label>Observaciones</label>
                                    <textarea placeholder=\"Si tienes alguna duda escríbela aquí\" name=\"message\" class=\"form-control rt-mb-30\"></textarea>
                                </div> 
                                
                                <div class=\"col-md-12 rt-mb-30\" id=\"terms-condition-container\">
                                    <div class=\"custom-control custom-checkbox d-flex align-items-center\">
                                        <input type=\"checkbox\" name=\"terms\" class=\"custom-control-input\" id=\"terms\">
                                        <label class=\"custom-control-label pl-2\" for=\"terms\">
                                            Acepto las <a href=\"#\" data-toggle=\"modal\" data-target=\"#terms-condition-modal\">condiciones de uso y las políticas de privacidad</a>
                                        </label>
                                      </div>
                                      
                                </div>
                                
                            </div><!-- /.row -->
                            
                            <div class=\"d-none d-sm-flex justify-content-end\">
                                <button type=\"submit\" class=\"save-booking\">Pagar mi reserva</button>
                            </div>

                            <div class=\"d-flex d-sm-none justify-content-center\">
                                <button type=\"submit\" class=\"save-booking\">Pagar mi reserva</button>
                            </div>
                        </form>
                    </div><!-- /.flight-list-box -->

                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/cart.htm", "");
    }
}
