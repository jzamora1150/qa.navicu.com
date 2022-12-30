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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/search-results/filters.htm */
class __TwigTemplate_a265babaaf766ffef0e73e22c768757f14e0596f37b26cad0227e5ad822c1610 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/search-results/filters.htm"));

        // line 1
        $context["subcategories"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "subcategory", [], "any", false, false, true, 1);
        // line 2
        echo "

<div class=\"col-xl-12 mx-auto col-lg-12 col-md-12\">
    <div class=\"rt-sidebar-group\">
        <form id =\"filter-form\">
            <div class=\"rt-widget widget_rating\">
                <div class=\"filter-body\">
                        <ul>
                            <label>Filtrar por orden</label>
                            <li class=\"clearfix\">
                                <div class=\"form-group\">
                                    <select class=\"form-control\" name=\"sort\">
                                        <option value=\"default\" ";
        // line 14
        echo (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "sort", [], "any", false, false, true, 14) == "default")) ? ("selected") : (""));
        echo ">Recomendados Navicu</option>
                                        <option value=\"min-price\" ";
        // line 15
        echo (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "sort", [], "any", false, false, true, 15) == "min-price")) ? ("selected") : (""));
        echo ">Menor Precio</option>
                                    </select>
                                </div>
                            </li>
                            
                            <hr>
                            <label>Estrellas</label>
                        
                            ";
        // line 23
        $context["arStars"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["filters"] ?? null), "stars", [], "any", false, false, true, 23);
        // line 24
        echo "
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arStars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
            // line 26
            echo "
                                ";
            // line 27
            if (($context["star"] > 0)) {
                // line 28
                echo "                                <li class=\"clearfix\">
                                
                                    <div class=\"form-check-inline\">
                                    
                                        <input class=\"form-check-input\" value=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["star"], 32, $this->source), "html", null, true);
                echo "\" name=\"stars[]\" type=\"checkbox\"

                                        ";
                // line 34
                echo ((twig_in_filter($context["star"], Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "stars", [], "any", false, false, true, 34))) ? ("checked") : (""));
                echo ">

                                        <label class=\"form-check-label\">
                                        <span>
                                            
                                                ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $context["star"]));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 40
                    echo "                                                <img src=\"";
                    echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["atributo"] ?? null), "nombre", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo "\" class=\"hotel-star\">
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                                            
                                        </span>
                                        </label>
                                    </div><!-- ./orm-group -->
                                    
                                </li>
                                ";
            }
            // line 49
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        
                            
                        </ul>
                        ";
        // line 54
        if ( !twig_test_empty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["filters"] ?? null), "categories", [], "any", false, false, true, 54))) {
            // line 55
            echo "
                        <hr>
                        <label>Categorias</label>
            
                        <ul>
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["filters"] ?? null), "categories", [], "any", false, false, true, 60));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 61
                echo "                            <li class=\"clearfix\">
            
                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"categories[]\" value=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 64, $this->source), "html", null, true);
                echo "\"
                                    ";
                // line 65
                echo ((twig_in_filter($context["key"], Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "categories", [], "any", false, false, true, 65))) ? ("checked") : (""));
                echo ">
                                    <label class=\"form-check-label\">
                                        ";
                // line 67
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["category"], 67, $this->source), "html", null, true);
                echo "
                                    </label>
                                </div><!-- ./orm-group -->
                                
                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                        </ul>
                        <hr>
                        ";
        }
        // line 76
        echo "                </div>
                <div class=\"filter-button d-flex justify-content-center\">
                    <button type=\"submit\" id=\"filter-button\" class=\"rt-btn dark-orange\">Filtrar</button>
                </div>
            </div><!-- /.rt-widget -->
        </form>
    </div>
    
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/search-results/filters.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 76,  181 => 73,  169 => 67,  164 => 65,  160 => 64,  155 => 61,  151 => 60,  144 => 55,  142 => 54,  137 => 51,  130 => 49,  121 => 42,  110 => 40,  106 => 39,  98 => 34,  93 => 32,  87 => 28,  85 => 27,  82 => 26,  78 => 25,  75 => 24,  73 => 23,  62 => 15,  58 => 14,  44 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/search-results/filters.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 25, "if" => 27);
        static $filters = array("escape" => 32, "media" => 40);
        static $functions = array("range" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'media'],
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
