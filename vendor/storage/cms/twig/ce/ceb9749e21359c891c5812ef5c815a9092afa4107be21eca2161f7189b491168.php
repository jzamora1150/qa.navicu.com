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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-results/filters.htm */
class __TwigTemplate_112c0ebc489ebe85fedcde8fb967de3232e8eedafc174dfafeba5bbb8f9a3647 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-results/filters.htm"));

        // line 1
        $context["subcategories"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "subcategory", [], "any", false, false, false, 1);
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
        echo (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "sort", [], "any", false, false, false, 14) == "default")) ? ("selected") : (""));
        echo ">Recomendados Navicu</option>
                                        <option value=\"min-price\" ";
        // line 15
        echo (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "sort", [], "any", false, false, false, 15) == "min-price")) ? ("selected") : (""));
        echo ">Menor Precio</option>
                                    </select>
                                </div>
                            </li>
                            
                            <hr>
                            <label>Estrellas</label>
                        
                            ";
        // line 23
        $context["arStars"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["filters"] ?? null), "stars", [], "any", false, false, false, 23);
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
                echo twig_escape_filter($this->env, $context["star"], "html", null, true);
                echo "\" name=\"stars[]\" type=\"checkbox\"

                                        ";
                // line 34
                echo ((twig_in_filter($context["star"], Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "stars", [], "any", false, false, false, 34))) ? ("checked") : (""));
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
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["atributo"] ?? null), "nombre", [], "any", false, false, false, 40), "html", null, true);
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
        if ( !twig_test_empty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["filters"] ?? null), "categories", [], "any", false, false, false, 54))) {
            // line 55
            echo "
                        <hr>
                        <label>Categorias</label>
            
                        <ul>
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["filters"] ?? null), "categories", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 61
                echo "                            <li class=\"clearfix\">
            
                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"categories[]\" value=\"";
                // line 64
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                                    ";
                // line 65
                echo ((twig_in_filter($context["key"], Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "categories", [], "any", false, false, false, 65))) ? ("checked") : (""));
                echo ">
                                    <label class=\"form-check-label\">
                                        ";
                // line 67
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
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
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-results/filters.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 76,  179 => 73,  167 => 67,  162 => 65,  158 => 64,  153 => 61,  149 => 60,  142 => 55,  140 => 54,  135 => 51,  128 => 49,  119 => 42,  108 => 40,  104 => 39,  96 => 34,  91 => 32,  85 => 28,  83 => 27,  80 => 26,  76 => 25,  73 => 24,  71 => 23,  60 => 15,  56 => 14,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set subcategories = searchParams.subcategory %}


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
                                        <option value=\"default\" {{searchParams.sort == 'default' ? 'selected' }}>Recomendados Navicu</option>
                                        <option value=\"min-price\" {{searchParams.sort == 'min-price' ? 'selected' }}>Menor Precio</option>
                                    </select>
                                </div>
                            </li>
                            
                            <hr>
                            <label>Estrellas</label>
                        
                            {% set arStars = filters.stars %}

                            {% for star in arStars %}

                                {% if star > 0 %}
                                <li class=\"clearfix\">
                                
                                    <div class=\"form-check-inline\">
                                    
                                        <input class=\"form-check-input\" value=\"{{star}}\" name=\"stars[]\" type=\"checkbox\"

                                        {{star in searchParams.stars ? 'checked' }}>

                                        <label class=\"form-check-label\">
                                        <span>
                                            
                                                {% for i in 1..star %}
                                                <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\" alt=\"{{atributo.nombre}}\" class=\"hotel-star\">
                                                {% endfor %}
                                            
                                        </span>
                                        </label>
                                    </div><!-- ./orm-group -->
                                    
                                </li>
                                {% endif %}

                            {% endfor %}
                        
                            
                        </ul>
                        {% if filters.categories is not empty %}

                        <hr>
                        <label>Categorias</label>
            
                        <ul>
                            {% for key, category in  filters.categories %}
                            <li class=\"clearfix\">
            
                                <div class=\"form-check-inline\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"categories[]\" value=\"{{key}}\"
                                    {{key in searchParams.categories ? 'checked' }}>
                                    <label class=\"form-check-label\">
                                        {{category}}
                                    </label>
                                </div><!-- ./orm-group -->
                                
                            </li>
                            {% endfor %}
                        </ul>
                        <hr>
                        {% endif %}
                </div>
                <div class=\"filter-button d-flex justify-content-center\">
                    <button type=\"submit\" id=\"filter-button\" class=\"rt-btn dark-orange\">Filtrar</button>
                </div>
            </div><!-- /.rt-widget -->
        </form>
    </div>
    
</div>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-results/filters.htm", "");
    }
}
