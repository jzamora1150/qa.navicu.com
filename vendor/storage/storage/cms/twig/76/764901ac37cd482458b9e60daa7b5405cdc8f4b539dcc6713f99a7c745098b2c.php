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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/modals/cart-body.htm */
class __TwigTemplate_359a9af58edb1314b8883f85db7c15251b272e763cc10f8e8146ccfb01a1fbc0 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/modals/cart-body.htm"));

        // line 1
        $context["cart"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CartHandler"] ?? null), "getCart", [], "method", false, false, true, 1);
        // line 2
        echo "
";
        // line 3
        $context["currentCurrency"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CurrencyHandler"] ?? null), "getCurrentCurrency", [], "method", false, false, true, 3);
        // line 4
        $context["arPrices"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CartHandler"] ?? null), "getCartPriceArray", [], "method", false, false, true, 4);
        // line 5
        echo "<div class=\"modal-body\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["cart"] ?? null), "hotels", [], "any", false, false, true, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 7
            echo "    <div class=\"flt-dtls-box rt-mb-20\">
        <div class=\"upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center\">
            <div class=\"left w-100 text-center\">
                
                <span>";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "hotel_name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</span>
                
            </div><!-- /.left -->
            <!-- /.right -->
        </div><!-- /.upper-top-content -->
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "rooms", [], "any", false, false, true, 16));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                // line 17
                echo "        <div class=\"flight-list-box\">
            <div class=\"hotel-inner-content row pb-2\">
                
                <div class=\"hotel-text col-md-12\">
    
                   <div class=\"footer3-elements cart-body-element\">
                       
                       <a href=\"#\" data-type=\"room\" data-code=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "hotel_id", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "\" class=\"remove-from-cart float-right\">
                        <span><img src=\"";
                // line 25
                echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/delete-icon.svg");
                echo "\" alt=\"remove\"></span>
                       </a>
                       <span class=\"d-block heading-color-1 rt-strong room-name\">";
                // line 27
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "room_name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</span>
                            ";
                // line 28
                if ( !twig_test_empty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "tour_name", [], "any", false, false, true, 28))) {
                    // line 29
                    echo "                            <div class=\"clearfix room-detail d-flex align-items-center pb-2\">
                                <img src=\"";
                    // line 30
                    echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/packs.svg");
                    echo "\">
                                <p class=\"p-0 m-0 hotel-tour-name\">
                                    
                                    ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "tour_name", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo "
                                </p>
                            </div>
                            ";
                }
                // line 37
                echo "                           <div class=\"clearfix room-detail\">
                               <span class=\"float-left \">Ocupación</span>
                               <span class=\"float-right\">";
                // line 39
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "pax_description", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "</span>
                            </div>
                           <div class=\"clearfix room-detail\">
                               <span class=\"float-left\">Régimen</span>
                               <span class=\"float-right\">";
                // line 43
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "regime_name", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</span>
                            </div>
                            <div class=\"clearfix room-detail\">
                                <span class=\"float-left\">Check-in</span>
                                <span class=\"float-right\">";
                // line 47
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "params", [], "any", false, false, true, 47), "checkin", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "</span>
                             </div>
                             <div class=\"clearfix  room-detail\">
                                <span class=\"float-left\">Check-out</span>
                                <span class=\"float-right\">";
                // line 51
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "params", [], "any", false, false, true, 51), "checkout", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "</span>
                             </div>
                           <div class=\"clearfix room-price pt-3\">
                               <span class=\"float-left\">Precio</span>
                               <span class=\"float-right\">";
                // line 55
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "</span>
                            </div>
                            
                       
                   </div><!-- /.footer3-elements -->
                </div><!-- /.hotel-text -->
            </div><!-- /.hotel-inner-content -->
            ";
                // line 65
                echo "        </div><!-- /.flight-list-box -->
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "       
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                  
    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["cart"] ?? null), "upsellings", [], "any", false, false, true, 70));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["upselling"]) {
            // line 71
            echo "    <div class=\"flight-list-box pb-2  mb-4 upselling-cart-item\">
        <div class=\"hotel-inner-content row\">
            
            <div class=\"hotel-text col-md-12\">

               <div class=\"footer3-elements cart-body-element\">
                   
                   <a href=\"#\" data-type=\"upselling\" data-code=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "\" class=\"remove-from-cart float-right\">
                    <span><img src=\"";
            // line 79
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/delete-icon.svg");
            echo "\" alt=\"remove\"></span>
                   </a>
                   <div class=\" d-flex align-items-center\">
                    <img src=\"";
            // line 82
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/packs-basics.svg");
            echo "\">
                    <span class=\"d-block heading-color-1 rt-strong room-name mt-1\">";
            // line 83
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "upselling_name", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "</span>
                   </div>
                   
                        
                       <div class=\"clearfix room-detail\">
                           <span class=\"float-left \">Ocupación</span>
                           <span class=\"float-right\">";
            // line 89
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "pax_description", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "</span>
                        </div>
                       
                        <div class=\"clearfix room-detail\">
                            <span class=\"float-left\">Fecha de disfrute</span>
                            <span class=\"float-right\">";
            // line 94
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "date", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "</span>
                         </div>
                        
                       <div class=\"clearfix room-price pt-3\">
                           <span class=\"float-left\">Precio</span>
                           <span class=\"float-right\">";
            // line 99
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "total_markup_price", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "</span>
                        </div>
                        
                   
               </div><!-- /.footer3-elements -->
            </div><!-- /.hotel-text -->
        </div><!-- /.hotel-inner-content -->
        ";
            // line 109
            echo "    </div><!-- /.flight-list-box -->
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upselling'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "</div>
<div class=\"modal-footer\">
    <div class=\"w-100\">
        <div class=\"d-flex pt-3\">
        
            <div class=\"col-md-12 text-center side-cart-modal-total\">
                <span>Total:</span> <span>";
        // line 117
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arPrices"] ?? null), "total_price", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"d-flex pb-3\">
            <div class=\"col-md-12 text-center\">
                <a href=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cart");
        echo "\" class=\"go-to-pay\">Pagar</a>
            </div>
        </div>
    </div>
    
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/modals/cart-body.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 122,  301 => 117,  293 => 111,  278 => 109,  266 => 99,  258 => 94,  250 => 89,  241 => 83,  237 => 82,  231 => 79,  227 => 78,  218 => 71,  201 => 70,  198 => 69,  190 => 67,  175 => 65,  163 => 55,  156 => 51,  149 => 47,  142 => 43,  135 => 39,  131 => 37,  124 => 33,  118 => 30,  115 => 29,  113 => 28,  109 => 27,  104 => 25,  98 => 24,  89 => 17,  72 => 16,  64 => 11,  58 => 7,  54 => 6,  51 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/modals/cart-body.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 6, "if" => 28);
        static $filters = array("escape" => 11, "media" => 25, "page" => 122);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'media', 'page'],
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
