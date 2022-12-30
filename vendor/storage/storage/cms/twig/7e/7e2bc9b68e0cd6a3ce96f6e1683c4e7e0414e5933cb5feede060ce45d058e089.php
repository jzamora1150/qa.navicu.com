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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/banner-searchbox.htm */
class __TwigTemplate_8d7608bc11e5897af6321bf7a58bb9df2201687e98bd652484d7af7be8676951 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/banner-searchbox.htm"));

        // line 1
        echo "<div class=\"rt-banner-searchbox standard-search\" id=\"banner-searchbox\">
    <div class=\"tab-content\" id=\"myTabContent\">
    
        <div class=\"tab-pane  show active\" id=\"rt-item_a_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_a_second\">
            <form action=\"#\" id=\"main-search\" class=\"main-search\">
                
                <div class=\"rt-input-group\">
                    <div class=\"single-input  col-rt-in-4 mr-1\">
                        <input type=\"text\" class=\"form-control autocomplete\" autocomplete=\"off\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "criteria", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\" id=\"autocomplete\" placeholder=\"¿Hotel, Ciudad, Lugar?\">
                        
                    </div><!-- /.single-input -->
                    <div class=\"single-input  col-rt-in-4\">
                    <input type=\"text\" autocomplete=\"off\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dates", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
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
        if ( !twig_test_empty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "search_type", [], "any", false, false, true, 35))) {
            // line 36
            echo "                        <input type=\"hidden\" name=\"criteria\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "criteria", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"search_type\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "search_type", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"search_id\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "search_id", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
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
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/banner-searchbox.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 40,  95 => 38,  91 => 37,  86 => 36,  84 => 35,  59 => 13,  52 => 9,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/banner-searchbox.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35);
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
