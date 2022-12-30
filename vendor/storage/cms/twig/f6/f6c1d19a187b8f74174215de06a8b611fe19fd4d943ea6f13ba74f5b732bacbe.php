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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/cart/cart-total.htm */
class __TwigTemplate_6227507dafb7e17e45712c80f7b927fbc84a2ab0b7db48250d46f1c47dbc7fa3 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/cart/cart-total.htm"));

        // line 1
        $context["cart"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CartHandler"] ?? null), "getCart", [], "method", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context["currentCurrency"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CurrencyHandler"] ?? null), "getCurrentCurrency", [], "method", false, false, false, 3);
        // line 4
        $context["arPrices"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CartHandler"] ?? null), "getCartPriceArray", [], "method", false, false, false, 4);
        echo " 
<div class=\"rt-sidebar-group pb-4\">
    <div class=\"rt-widget final-booking\">

        <ul>
            <li class=\"clearfix equivalent\">

                <span>Equivalente</span>
                <span class=\"float-right\">";
        // line 12
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arPrices"] ?? null), "VES", [], "any", false, false, false, 12), "html", null, true);
        echo " VES</span>
            </li>

            <li class=\"clearfix sub-total\">

                <span>Total</span>
                <span class=\"float-right\">";
        // line 18
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arPrices"] ?? null), "total_price", [], "any", false, false, false, 18), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, false, 18), "html", null, true);
        echo "</small></span>
            </li>

        </ul>
    </div><!-- /.rt-widget -->
    
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/cart/cart-total.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  58 => 12,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cart = CartHandler.getCart() %}

{% set currentCurrency = CurrencyHandler.getCurrentCurrency() %}
{% set arPrices = CartHandler.getCartPriceArray() %} 
<div class=\"rt-sidebar-group pb-4\">
    <div class=\"rt-widget final-booking\">

        <ul>
            <li class=\"clearfix equivalent\">

                <span>Equivalente</span>
                <span class=\"float-right\">{{arPrices.VES}} VES</span>
            </li>

            <li class=\"clearfix sub-total\">

                <span>Total</span>
                <span class=\"float-right\">{{arPrices.total_price }} <small>{{currentCurrency.acronimo}}</small></span>
            </li>

        </ul>
    </div><!-- /.rt-widget -->
    
</div>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/cart/cart-total.htm", "");
    }
}
