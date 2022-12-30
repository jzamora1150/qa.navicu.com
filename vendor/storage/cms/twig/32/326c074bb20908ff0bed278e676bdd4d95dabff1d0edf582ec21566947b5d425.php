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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/tour.htm */
class __TwigTemplate_59cff2a60269b16bfdb936656ac59165aa2c7f2139aba6b1154f2fb9ce5d0056 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/tour.htm"));

        // line 1
        $context["tour"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["TourPage"] ?? null), "tour", [], "any", false, false, false, 1);
        // line 2
        $context["room"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "habitaciones", [], "any", false, false, false, 2), "first", [], "method", false, false, false, 2);
        // line 3
        $context["item"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["TourPage"] ?? null), "loadItem", [], "method", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("banners/tour-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
<div class=\"container\">
    <div class=\"col-md-12\">
        <div class=\"d-flex justify-content-center\">
            <div class=\"tour-title-container \">
                <h4 class=\"tour-page-pre-title text-center\">
                    Reserva tu próximo viaje
                </h4>
                <h2 class=\"tour-page-title text-center\">
                    ";
        // line 15
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "titulo", [], "any", false, false, false, 15), "html", null, true);
        echo "
                </h2>
                <p class=\"tour-page-description text-center\">
                    Conoce los paquetes que hemos seleccionado especialmente para ti
                    y vive la mejor experiencia durante tu viaje
                 </p>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-12\">
        <div class=\"tour-container\">
            <div class=\"row\">
            
                <div class=\"col-md-4 tour-img\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "banner", [], "any", false, false, false, 30), "path", [], "any", false, false, false, 30), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
                   
                <div class=\"col-md-8 tour-info\">
                    <form id=\"tour-form\" name=\"tour-form\">
                        <div class=\"col-md-12\">
                            <div class=\"d-flex\">
                                <h4 class=\"tour-title\">
                                    ";
        // line 38
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "titulo", [], "any", false, false, false, 38), "html", null, true);
        echo "
                                </h4>
                                
                                
                            </div>
                            <div class=\"d-flex\">
                                <div class=\"tour-rules w-100 d-md-flex\">
                                    ";
        // line 54
        echo "                                    ";
        if ( !twig_test_empty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "hotel", [], "any", false, false, false, 54))) {
            // line 55
            echo "                                    <div class=\"d-flex\">
                                        <span>
                                            ";
            // line 57
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "hotel", [], "any", false, false, false, 57), "nombre", [], "any", false, false, false, 57), "html", null, true);
            echo " 
                                        </span>
                                        
                                    </div>
                                    <div class=\"d-none d-sm-block\">
                                        <span class=\"custom-separator\">·</span>
                                    </div>
                                    ";
        }
        // line 65
        echo "                                    <div class=\"d-flex\">
                                        <span >
                                            <strong>Salida</strong> ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "fecha_desde", [], "any", false, false, false, 67), "d-m"), "html", null, true);
        echo "
                                            <strong>Retorno</strong> ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "fecha_hasta", [], "any", false, false, false, 68), "d-m"), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class=\"d-flex\">
                                <div class=\"yellow-separator\">
                                    
                                </div>
                            </div>

                            <div class=\"d-flex\">
                                <div class=\"d-flex justify-content-around\">
                                    
                                    <div class=\"form-group pax-element col-md-4 pl-0\">
                                        <label for=\"\">Adultos</label>
                                        <select class=\"form-control pax-control\" name=\"adults\" id=\"adult-select\">
                                            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["TourPage"] ?? null), "maxAdults", [], "any", false, false, false, 86)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 87
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                        </select>
                                    </div>
                                    <div class=\"form-group pax-element pr-5 col-md-4\">
                                        <label for=\"\">Niños</label>
                                        <select class=\"form-control pax-control\" name=\"kids\" id=\"kid-select\">
                                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["TourPage"] ?? null), "maxKids", [], "any", false, false, false, 94)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 95
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                        </select>
                                    </div>
                                    <div class=\"form-group px-3 d-flex align-items-end col-md-4 \">
                                        <button class=\"round-button tour-quantity\" data-action=\"subs\">
                                            <i class=\"fas fa-minus fa-xs\"></i>
                                        </button>
                                        
                                        <span class=\"px-3\" id=\"tour-quantity-value\" >1</span>
                                        <input type=\"hidden\" id=\"tour-quantity\" name=\"quantity\" value=\"1\">
                                        <button class=\"round-button tour-quantity\" data-action=\"add\">
                                            <i class=\"fas fa-plus fa-xs\"></i>
                                        </button>
                                    </div>
                                </div>
                               
                            </div>

                            <div class=\"d-flex\">
                                <div class=\"col-md-12 px-0\">
                                    <div class=\"row\">
                                        <div class=\"col-md-8\" id=\"tour-description-content\">
                                            ";
        // line 118
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "descripcion", [], "any", false, false, false, 118);
        echo "
                                        </div>
                                        ";
        // line 120
        $context["arPrices"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "getTourPrices", [], "method", false, false, false, 120);
        // line 121
        echo "                                        <div class=\"col-md-4 tour-price-container d-flex flex-column justify-content-center\">
                                            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arPrices"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 123
            echo "                                            <p id=\"price-";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["price"], "ocupacion", [], "any", false, false, false, 123), "html", null, true);
            echo "\" class=\"justify-content-center price-element align-items-end ";
            echo (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 123) == false)) ? ("d-none") : ("d-flex"));
            echo "\">
                                                <span class=\"total-label\">TOTAL</span> 
                                                <span class=\"amount\" data-ref=\"";
            // line 125
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["price"], "total_markup", [], "any", false, false, false, 125), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["price"], "total_markup", [], "any", false, false, false, 125), "html", null, true);
            echo " </span>
                                                <span class=\"currency-code\"> USD</span>
                                            </p> 
                                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                            <input type=\"hidden\" name=\"tour_id\" value=\"";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "id", [], "any", false, false, false, 129), "html", null, true);
        echo "\">
                                            ";
        // line 130
        if ( !twig_test_empty(($context["arPrices"] ?? null))) {
            // line 131
            echo "                                            <button class=\"add-to-cart-tour-button\" id=\"tour-button\">Añadir al carrito</button>
                                            ";
        }
        // line 133
        echo "                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                       
                        
                        
                        
                    </form>
                </div>
            </div>
        </div>
        
       
    </div>
    
    

</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/tour.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 133,  272 => 131,  270 => 130,  265 => 129,  245 => 125,  237 => 123,  220 => 122,  217 => 121,  215 => 120,  210 => 118,  187 => 97,  176 => 95,  172 => 94,  165 => 89,  154 => 87,  150 => 86,  129 => 68,  125 => 67,  121 => 65,  110 => 57,  106 => 55,  103 => 54,  93 => 38,  82 => 30,  64 => 15,  53 => 6,  49 => 5,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set tour = TourPage.tour %}
{% set room = tour.habitaciones.first() %}
{% set item = TourPage.loadItem() %}

{% partial 'banners/tour-banner' %}

<div class=\"container\">
    <div class=\"col-md-12\">
        <div class=\"d-flex justify-content-center\">
            <div class=\"tour-title-container \">
                <h4 class=\"tour-page-pre-title text-center\">
                    Reserva tu próximo viaje
                </h4>
                <h2 class=\"tour-page-title text-center\">
                    {{tour.titulo}}
                </h2>
                <p class=\"tour-page-description text-center\">
                    Conoce los paquetes que hemos seleccionado especialmente para ti
                    y vive la mejor experiencia durante tu viaje
                 </p>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-12\">
        <div class=\"tour-container\">
            <div class=\"row\">
            
                <div class=\"col-md-4 tour-img\">
                    <img src=\"{{tour.banner.path}}\" class=\"img-fluid\" alt=\"\">
                </div>
                   
                <div class=\"col-md-8 tour-info\">
                    <form id=\"tour-form\" name=\"tour-form\">
                        <div class=\"col-md-12\">
                            <div class=\"d-flex\">
                                <h4 class=\"tour-title\">
                                    {{tour.titulo}}
                                </h4>
                                
                                
                            </div>
                            <div class=\"d-flex\">
                                <div class=\"tour-rules w-100 d-md-flex\">
                                    {# <div class=\"d-flex\">
                                        <span >
                                            {{item.getNightsDescription() }} 
                                        </span>
                                        
                                    </div>
                                    <div class=\"d-none d-sm-block\">
                                        <span class=\"custom-separator\">·</span>
                                    </div> #}
                                    {% if tour.hotel is not empty %}
                                    <div class=\"d-flex\">
                                        <span>
                                            {{tour.hotel.nombre}} 
                                        </span>
                                        
                                    </div>
                                    <div class=\"d-none d-sm-block\">
                                        <span class=\"custom-separator\">·</span>
                                    </div>
                                    {% endif %}
                                    <div class=\"d-flex\">
                                        <span >
                                            <strong>Salida</strong> {{tour.fecha_desde|date(\"d-m\")}}
                                            <strong>Retorno</strong> {{tour.fecha_hasta|date(\"d-m\")}}
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class=\"d-flex\">
                                <div class=\"yellow-separator\">
                                    
                                </div>
                            </div>

                            <div class=\"d-flex\">
                                <div class=\"d-flex justify-content-around\">
                                    
                                    <div class=\"form-group pax-element col-md-4 pl-0\">
                                        <label for=\"\">Adultos</label>
                                        <select class=\"form-control pax-control\" name=\"adults\" id=\"adult-select\">
                                            {% for i in 1..TourPage.maxAdults %}
                                                <option value=\"{{i}}\">{{i}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"form-group pax-element pr-5 col-md-4\">
                                        <label for=\"\">Niños</label>
                                        <select class=\"form-control pax-control\" name=\"kids\" id=\"kid-select\">
                                            {% for i in 0..TourPage.maxKids %}
                                                <option value=\"{{i}}\">{{i}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"form-group px-3 d-flex align-items-end col-md-4 \">
                                        <button class=\"round-button tour-quantity\" data-action=\"subs\">
                                            <i class=\"fas fa-minus fa-xs\"></i>
                                        </button>
                                        
                                        <span class=\"px-3\" id=\"tour-quantity-value\" >1</span>
                                        <input type=\"hidden\" id=\"tour-quantity\" name=\"quantity\" value=\"1\">
                                        <button class=\"round-button tour-quantity\" data-action=\"add\">
                                            <i class=\"fas fa-plus fa-xs\"></i>
                                        </button>
                                    </div>
                                </div>
                               
                            </div>

                            <div class=\"d-flex\">
                                <div class=\"col-md-12 px-0\">
                                    <div class=\"row\">
                                        <div class=\"col-md-8\" id=\"tour-description-content\">
                                            {{tour.descripcion|raw}}
                                        </div>
                                        {% set arPrices = item.getTourPrices() %}
                                        <div class=\"col-md-4 tour-price-container d-flex flex-column justify-content-center\">
                                            {% for price in arPrices %}
                                            <p id=\"price-{{price.ocupacion}}\" class=\"justify-content-center price-element align-items-end {{loop.first == false ? 'd-none' : 'd-flex'}}\">
                                                <span class=\"total-label\">TOTAL</span> 
                                                <span class=\"amount\" data-ref=\"{{price.total_markup}}\">{{price.total_markup}} </span>
                                                <span class=\"currency-code\"> USD</span>
                                            </p> 
                                            {% endfor %}
                                            <input type=\"hidden\" name=\"tour_id\" value=\"{{tour.id}}\">
                                            {% if arPrices is not empty %}
                                            <button class=\"add-to-cart-tour-button\" id=\"tour-button\">Añadir al carrito</button>
                                            {% endif %}
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                       
                        
                        
                        
                    </form>
                </div>
            </div>
        </div>
        
       
    </div>
    
    

</div>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/tour.htm", "");
    }
}
