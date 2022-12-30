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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/tour-list.htm */
class __TwigTemplate_2cc0bfe83ef34608330eb55658c4328c834d1d7a4135385123f4464e62b4094a extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/tour-list.htm"));

        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("banners/tour-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context["tours"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["ListaPaquetes"] ?? null), "getList", [], "method", false, false, false, 3);
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
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tour", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["tour"], "slug", [], "any", false, false, false, 29)]);
            echo "\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["tour"], "banner", [], "any", false, false, false, 30), "path", [], "any", false, false, false, 30), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["tour"], "titulo", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                </a>
                <div class=\"d-flex justify-content-center\">
                    <a href=\"";
            // line 33
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("tour", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["tour"], "slug", [], "any", false, false, false, 33)]);
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
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/tour-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 84,  106 => 40,  93 => 33,  85 => 30,  81 => 29,  76 => 26,  72 => 25,  49 => 4,  47 => 3,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'banners/tour-banner' %}

{% set tours = ListaPaquetes.getList() %}

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
    {% for tour in tours %}
        
        <div class=\"col-md-4 mb-5 tour-wrapper\">
            <div class=\"tour-item\">
                <a href=\"{{'tour'|page({slug:tour.slug})}}\">
                    <img src=\"{{tour.banner.path}}\" alt=\"{{tour.titulo}}\">
                </a>
                <div class=\"d-flex justify-content-center\">
                    <a href=\"{{'tour'|page({slug:tour.slug})}}\" class=\"tour-item-link\">Ver detalles   <span>→</span> </a>
                </div>
                
                
            </div>
        </div>
    {% endfor %}
    </div>
    {#
    <div class=\"row\">

        {% set otherTours = ListaPaquetes.getTourByCodes(\"001,002\") %}

        {% for tour in otherTours %}

        <div class=\"col-md-4 mb-5 tour-wrapper\">
            <div class=\"tour-item\">
                <a href=\"{{'tour'|page({slug:tour.slug})}}\">
                    <img src=\"{{tour.banner.path}}\" alt=\"{{tour.titulo}}\">
                </a>
                <div class=\"d-flex justify-content-center\">
                    <a href=\"{{'tour'|page({slug:tour.slug})}}\" class=\"tour-item-link\">Ver detalles   <span>→</span> </a>
                </div>
                
                
            </div>
        </div>
        {% endfor %}
    </div>

    <div class=\"row\">
        {% set unitList = ListaUpselling.getUpsellingByCodes(\"003\") %}

        {% for tour in unitList %}

        <div class=\"col-md-4 mb-5 tour-wrapper\">
            <div class=\"tour-item\">
                <a href=\"{{'tour'|page({slug:tour.slug})}}\">
                    <img src=\"{{tour.imagen.path}}\" alt=\"{{tour.titulo}}\">
                </a>
                <div class=\"d-flex justify-content-center\">
                    <a href=\"{{'upselling'|page({slug:tour.slug})}}\" class=\"tour-item-link\">Ver detalles   <span>→</span> </a>
                </div>
                
                
            </div>
        </div>
        {% endfor %}

    </div>
    #}
</div>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/tour-list.htm", "");
    }
}
