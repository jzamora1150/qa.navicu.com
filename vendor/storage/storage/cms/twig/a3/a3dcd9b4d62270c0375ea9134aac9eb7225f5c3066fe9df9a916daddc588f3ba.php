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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/upselling.htm */
class __TwigTemplate_ab47c34e5a4c285dede32fdb5939b70d1f94d027d9c7f3e6a9c6712aba8165e9 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/upselling.htm"));

        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("banners/upselling-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context["upselling"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["UpsellingPage"] ?? null), "upselling", [], "any", false, false, true, 3);
        // line 4
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
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["upselling"] ?? null), "titulo", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
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
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["upselling"] ?? null), "imagen", [], "any", false, false, true, 28), "path", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
                   
                <div class=\"col-md-8 tour-info\">
                    <form id=\"upselling-form\" name=\"upselling-form\">
                        <input type=\"hidden\" name=\"upselling_id\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["upselling"] ?? null), "id", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\">
                        <div class=\"col-md-12\">
                            <div class=\"d-flex\">
                                <h4 class=\"tour-title\">
                                    ";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["upselling"] ?? null), "titulo", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
                                </h4>
                                
                                
                            </div>
                            ";
        // line 84
        echo "                            <div class=\"row\">
                                ";
        // line 85
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["upselling"] ?? null), "ind_calendario", [], "any", false, false, true, 85) == 1)) {
            // line 86
            echo "                                <div class=\"col-md-6 d-flex align-items-end\">
                                    <div class=\"form-group col-md-12 pl-0 calendar-container\">

                                        

                                        <input type=\"text\" autocomplete=\"off\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dates", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "\" onkeypress=\"return false;\" name=\"dates\"
                                            class=\"single-datepicker form-control rt-input-group rt-date-picker has-icon\" placeholder=\"Elige tus fechas\">
                                        <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                                    </div>
                                </div>
                                ";
        }
        // line 97
        echo "                                <div class=\"col-md-6\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        
                                        <div class=\"form-group pax-element col-md-3\">
                                            <label for=\"\">Adultos</label>
                                            <select class=\"form-control pax-control\" name=\"adults\" id=\"adult-select\">
                                                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["UpsellingPage"] ?? null), "maxAdults", [], "any", false, false, true, 103)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 104
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 104, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 104, $this->source), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group pax-element pr-5 col-md-3\">
                                            <label for=\"\">Niños</label>
                                            <select class=\"form-control pax-control\" name=\"kids\" id=\"kid-select\">
                                                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["UpsellingPage"] ?? null), "maxKids", [], "any", false, false, true, 111)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 112
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 112, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["i"], 112, $this->source), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group d-flex align-items-end col-md-6 justify-content-around\">
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
                            </div>

                            <div class=\"d-flex \">
                                <div class=\"col-md-12 px-0\">
                                    <div class=\"row\">
                                        <div class=\"col-md-8\" id=\"tour-description-content\">
                                            ";
        // line 136
        echo $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["upselling"] ?? null), "descripcion", [], "any", false, false, true, 136), 136, $this->source);
        echo "
                                        </div>
                                        <div class=\"col-md-4 tour-price-container d-flex flex-column 
                                            justify-content-center text-center\" id=\"upselling-prices-container\">

                                            ";
        // line 141
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["upselling"] ?? null), "ind_calendario", [], "any", false, false, true, 141) == 0)) {
            // line 142
            echo "                                            
                                                ";
            // line 143
            $context["arPrices"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["UpsellingPage"] ?? null), "loadSinglePrices", [0 => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["upselling"] ?? null), "id", [], "any", false, false, true, 143)], "method", false, false, true, 143);
            // line 144
            echo "
                                                ";
            // line 145
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['arPrices'] = ($context["arPrices"] ?? null)            ;
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("tour/upselling-price"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 146
            echo "
                                            ";
        } else {
            // line 148
            echo "                                                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("tour/upselling-price"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 149
            echo "                                            ";
        }
        // line 150
        echo "

                                            
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
    

</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/upselling.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 150,  225 => 149,  220 => 148,  216 => 146,  211 => 145,  208 => 144,  206 => 143,  203 => 142,  201 => 141,  193 => 136,  169 => 114,  158 => 112,  154 => 111,  147 => 106,  136 => 104,  132 => 103,  124 => 97,  115 => 91,  108 => 86,  106 => 85,  103 => 84,  95 => 37,  88 => 33,  80 => 28,  62 => 13,  51 => 4,  49 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/upselling.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "set" => 3, "if" => 85, "for" => 103);
        static $filters = array("escape" => 13, "raw" => 136);
        static $functions = array("range" => 103);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'if', 'for'],
                ['escape', 'raw'],
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
