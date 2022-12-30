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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/banner-searchbox.htm */
class __TwigTemplate_0aa09eb00b8ee37c9306ad8ab9374a1145e8377e14058ec2656f19d3005e24cb extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/banner-searchbox.htm"));

        // line 1
        echo "<div class=\"rt-banner-searchbox standard-search\" id=\"banner-searchbox\">
    <div class=\"tab-content\" id=\"myTabContent\">
    
        <div class=\"tab-pane  show active\" id=\"rt-item_a_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_second\">
            <form action=\"#\" id=\"main-search\" class=\"main-search\">
                
                <div class=\"rt-input-group\">
                    <div class=\"single-input  col-rt-in-4 mr-1\">
                        <input type=\"text\" class=\"form-control autocomplete\" autocomplete=\"off\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "criteria", [], "any", false, false, false, 9), "html", null, true);
        echo "\" id=\"autocomplete\" placeholder=\"¿Hotel, Ciudad, Lugar?\">
                        
                    </div><!-- /.single-input -->
                    <div class=\"single-input  col-rt-in-4\">
                    <input type=\"text\" autocomplete=\"off\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dates", [], "any", false, false, false, 13), "html", null, true);
        echo "\" onkeypress=\"return false;\"  name=\"dates\"
                        class=\"form-control rt-date-picker has-icon calendar-input\" placeholder=\"Elige tus fechas\">
                    <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                    </div><!-- /.single-input -->
                    
                    <!-- /.single-input -->
                    <div class=\"single-input  col-rt-in-1 d-none d-sm-none d-md-block\">
                        <button type=\"submit\">
                            <i class=\" icofont-search\"></i>
                           
                        </button>
                    </div><!-- /.single-input -->
                    <div class=\"single-input  col-rt-in-4 d-block d-sm-none \">
                        <button type=\"submit\">
                            <span class=\"\">
                                Buscar al mejor precio
                            </span>
                        </button>
                    </div><!-- /.single-input -->


                    <div id=\"criteria-container\">
                        ";
        // line 35
        if ( !twig_test_empty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "search_type", [], "any", false, false, false, 35))) {
            // line 36
            echo "                        <input type=\"hidden\" name=\"criteria\" value=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "criteria", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"search_type\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "search_type", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"search_id\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "search_id", [], "any", false, false, false, 38), "html", null, true);
            echo "\">
                        ";
        }
        // line 40
        echo "                    </div>
                </div><!-- /.rt-input-group -->
            </form><!-- ./ form -->
        </div>
    </div>
</div><!-- /.rt-banner-searchbox -->";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/banner-searchbox.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  93 => 38,  89 => 37,  84 => 36,  82 => 35,  57 => 13,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"rt-banner-searchbox standard-search\" id=\"banner-searchbox\">
    <div class=\"tab-content\" id=\"myTabContent\">
    
        <div class=\"tab-pane  show active\" id=\"rt-item_a_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_second\">
            <form action=\"#\" id=\"main-search\" class=\"main-search\">
                
                <div class=\"rt-input-group\">
                    <div class=\"single-input  col-rt-in-4 mr-1\">
                        <input type=\"text\" class=\"form-control autocomplete\" autocomplete=\"off\" value=\"{{searchParams.criteria}}\" id=\"autocomplete\" placeholder=\"¿Hotel, Ciudad, Lugar?\">
                        
                    </div><!-- /.single-input -->
                    <div class=\"single-input  col-rt-in-4\">
                    <input type=\"text\" autocomplete=\"off\" value=\"{{searchParams.dates}}\" onkeypress=\"return false;\"  name=\"dates\"
                        class=\"form-control rt-date-picker has-icon calendar-input\" placeholder=\"Elige tus fechas\">
                    <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                    </div><!-- /.single-input -->
                    
                    <!-- /.single-input -->
                    <div class=\"single-input  col-rt-in-1 d-none d-sm-none d-md-block\">
                        <button type=\"submit\">
                            <i class=\" icofont-search\"></i>
                           
                        </button>
                    </div><!-- /.single-input -->
                    <div class=\"single-input  col-rt-in-4 d-block d-sm-none \">
                        <button type=\"submit\">
                            <span class=\"\">
                                Buscar al mejor precio
                            </span>
                        </button>
                    </div><!-- /.single-input -->


                    <div id=\"criteria-container\">
                        {% if searchParams.search_type is not empty %}
                        <input type=\"hidden\" name=\"criteria\" value=\"{{searchParams.criteria}}\">
                        <input type=\"hidden\" name=\"search_type\" value=\"{{searchParams.search_type}}\">
                        <input type=\"hidden\" name=\"search_id\" value=\"{{searchParams.search_id}}\">
                        {% endif %}
                    </div>
                </div><!-- /.rt-input-group -->
            </form><!-- ./ form -->
        </div>
    </div>
</div><!-- /.rt-banner-searchbox -->", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/banner-searchbox.htm", "");
    }
}
