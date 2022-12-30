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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/search.htm */
class __TwigTemplate_076e5a1a2ecb84694ccdf420e4ad856d800d68e25afed052ae6fef608c75cec8 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/search.htm"));

        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("search-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "

";
        // line 4
        $context["result"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getHotelsFromRequest", [], "method", false, false, true, 4);
        // line 5
        echo "
";
        // line 6
        $context["filters"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "filters", [], "any", false, false, true, 6);
        // line 7
        echo "
<div class=\"spacer-bottom\"></div><!-- /.spacer-bottom -->
<section class=\"content-area\" id=\"search-wrapper\" style=\"min-height: 800px;\">
    
    <nav id=\"sidebar\" class=\"col-md-3 d-none d-lg-block pr-0\">
        
        ";
        // line 13
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['filters'] = ($context["filters"] ?? null)        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("search-results/filters"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    </nav>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"mobile-result-bar w-100 d-flex justify-content-between align-items-center
            d-flex d-sm-none\">
                
                <span>
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "criteria", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo " -- ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dates", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
                </span>
                
                <span>
                    editar 
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#side-search-box\">
                        <img src=\"";
        // line 27
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/edit-mobile.svg");
        echo "\" alt=\"\">
                    </a>
                </span>
            
            </div>
            <div class=\"container-fluid\">
                
                <div class=\"row\">
                    <div id=\"results-container\" class=\"col-md-12 pl-0\">
                        <div class=\"tab-content\" id=\"rt-BototmTab\">
                            <div class=\"tab-pane show active fade-in-bottom\" id=\"rt-item_b_second\" role=\"tabpanel\" aria-labelledby=\"rt-item_b_second\">
                                <div class=\"row\">
                                     
                                    ";
        // line 40
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['result'] = ($context["result"] ?? null)        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("search-results/hotel-results"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "        
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  106 => 40,  90 => 27,  79 => 21,  70 => 14,  65 => 13,  57 => 7,  55 => 6,  52 => 5,  50 => 4,  46 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/search.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "set" => 4);
        static $filters = array("escape" => 21, "media" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set'],
                ['escape', 'media'],
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
