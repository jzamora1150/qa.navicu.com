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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/tour.htm */
class __TwigTemplate_5baaab8e18711542e673f8545be64d48342b6e1d0a09d30b125b73d6213464c1 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/tour.htm"));

        // line 1
        $context["tour"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["TourPage"] ?? null), "tour", [], "any", false, false, true, 1);
        // line 2
        $context["room"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "habitaciones", [], "any", false, false, true, 2), "first", [], "method", false, false, true, 2);
        // line 3
        $context["item"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["TourPage"] ?? null), "loadItem", [], "method", false, false, true, 3);
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
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "titulo", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "banner", [], "any", false, false, true, 30), "path", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
                   
                <div class=\"col-md-8 tour-info\">
                    <form id=\"tour-form\" name=\"tour-form\">
                        <div class=\"col-md-12\">
                            <div class=\"d-flex\">
                                <h4 class=\"tour-title\">
                                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "titulo", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "
                                </h4>
                                
                                
                            </div>
                            <div class=\"d-flex\">
                                <div class=\"tour-rules w-100 d-md-flex\">
                                    <div class=\"d-flex\">
                                        <span >
                                            ";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "getNightsDescription", [], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        echo " 
                                        </span>
                                        
                                    </div>
                                    <div class=\"d-none d-sm-block\">
                                        <span class=\"custom-separator\">·</span>
                                    </div>
                                    ";
        // line 54
        if ( !twig_test_empty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "hotel", [], "any", false, false, true, 54))) {
            // line 55
            echo "                                    <div class=\"d-flex\">
                                        <span>
                                            ";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "hotel", [], "any", false, false, true, 57), "nombre", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "fecha_desde", [], "any", false, false, true, 67), 67, $this->source), "d-m"), "html", null, true);
        echo "
                                            <strong>Retorno</strong> ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "fecha_hasta", [], "any", false, false, true, 68), 68, $this->source), "d-m"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(range(1, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["TourPage"] ?? null), "maxAdults", [], "any", false, false, true, 86)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 87
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 87, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 87, $this->source), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(range(0, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["TourPage"] ?? null), "maxKids", [], "any", false, false, true, 94)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 95
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 95, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 95, $this->source), "html", null, true);
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
        echo $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "descripcion", [], "any", false, false, true, 118), 118, $this->source);
        echo "
                                        </div>
                                        ";
        // line 120
        $context["arPrices"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["item"] ?? null), "getTourPrices", [], "method", false, false, true, 120);
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
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["price"], "ocupacion", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "\" class=\"justify-content-center price-element align-items-end ";
            echo (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 123) == false)) ? ("d-none") : ("d-flex"));
            echo "\">
                                                <span class=\"total-label\">TOTAL</span> 
                                                <span class=\"amount\" data-ref=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["price"], "total_markup", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["price"], "total_markup", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "id", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
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
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/tour.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 133,  285 => 131,  283 => 130,  278 => 129,  258 => 125,  250 => 123,  233 => 122,  230 => 121,  228 => 120,  223 => 118,  200 => 97,  189 => 95,  185 => 94,  178 => 89,  167 => 87,  163 => 86,  142 => 68,  138 => 67,  134 => 65,  123 => 57,  119 => 55,  117 => 54,  107 => 47,  95 => 38,  84 => 30,  66 => 15,  55 => 6,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/tour.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "partial" => 5, "if" => 54, "for" => 86);
        static $filters = array("escape" => 15, "date" => 67, "raw" => 118);
        static $functions = array("range" => 86);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial', 'if', 'for'],
                ['escape', 'date', 'raw'],
                ['range']
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
