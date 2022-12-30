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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/upselling-list.htm */
class __TwigTemplate_076e0c7243c68917f5218fa8e74eb1e3df3c6b0c7f84d0e6d515fa1fee4dccd0 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/upselling-list.htm"));

        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("banners/upselling-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<div class=\"col-md-12\">
    <div class=\"d-flex justify-content-center\">
        <div class=\"tour-title-container \">
            <h4 class=\"tour-page-pre-title text-center\">
                Actividades para toda la familia
            </h4>
            <h2 class=\"tour-page-title text-center\">
                
            </h2>
            <p class=\"tour-page-description text-center\">
                Lorem Ipsum

                </p>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row\">
        ";
        // line 22
        $context["unitList"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["ListaUpselling"] ?? null), "getList", [], "method", false, false, true, 22);
        // line 23
        echo "
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["unitList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["upselling"]) {
            // line 25
            echo "
   
            <div class=\"col-md-4 mb-5 tour-wrapper\">
                <div class=\"tour-item\">
                    <a href=\"";
            // line 29
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("upselling", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "slug", [], "any", false, false, true, 29)]);
            echo "\">
                        <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "imagen", [], "any", false, false, true, 30), "path", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "titulo", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">
                    </a>
                    <div class=\"d-flex justify-content-center\">
                        <a href=\"";
            // line 33
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("upselling", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "slug", [], "any", false, false, true, 33)]);
            echo "\" class=\"tour-item-link\">Ver detalles   <span>→</span> </a>
                    </div>
                    
                    
                </div>
            </div>
       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upselling'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    </div>
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/upselling-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  95 => 33,  87 => 30,  83 => 29,  77 => 25,  73 => 24,  70 => 23,  68 => 22,  46 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/upselling-list.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "set" => 22, "for" => 24);
        static $filters = array("page" => 29, "escape" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'for'],
                ['page', 'escape'],
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
