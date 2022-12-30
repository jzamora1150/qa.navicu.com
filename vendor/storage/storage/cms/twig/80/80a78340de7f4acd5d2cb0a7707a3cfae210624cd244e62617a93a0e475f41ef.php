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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/tour-list.htm */
class __TwigTemplate_aa6e2f4344ccadb4278d577b5f8b2b9edaaf8e34709f4e935ddfe78758ee47fb extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/tour-list.htm"));

        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("banners/tour-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context["tours"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["ListaPaquetes"] ?? null), "getList", [], "method", false, false, true, 3);
        // line 4
        echo "
<div class=\"col-md-12\">
    <div class=\"d-flex justify-content-center\">
        <div class=\"tour-title-container \">
            <h4 class=\"tour-page-pre-title text-center\">
                Reserva tu próximo viaje
            </h4>
            <h2 class=\"tour-page-title text-center\">
                Vacaciones de Verano Margarita
            </h2>
            <p class=\"tour-page-description text-center\">
                Conoce los paquetes que hemos seleccionado especialmente para ti
                y vive la mejor experiencia durante tu viaje
                </p>
        </div>
    </div>
</div>

<div class=\"container\">
    
    <div class=\"row\">
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
            // line 26
            echo "        
        <div class=\"col-md-4 mb-5 tour-wrapper\">
            <div class=\"tour-item\">
                <a href=\"";
            // line 29
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tour", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["tour"], "slug", [], "any", false, false, true, 29)]);
            echo "\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["tour"], "banner", [], "any", false, false, true, 30), "path", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["tour"], "titulo", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">
                </a>
                <div class=\"d-flex justify-content-center\">
                    <a href=\"";
            // line 33
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tour", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["tour"], "slug", [], "any", false, false, true, 33)]);
            echo "\" class=\"tour-item-link\">Ver detalles   <span>→</span> </a>
                </div>
                
                
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>
    ";
        // line 84
        echo "</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/tour-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 84,  108 => 40,  95 => 33,  87 => 30,  83 => 29,  78 => 26,  74 => 25,  51 => 4,  49 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/tour-list.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "set" => 3, "for" => 25);
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
