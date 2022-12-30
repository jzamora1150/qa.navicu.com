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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/cart/cart-list.htm */
class __TwigTemplate_310946d261c93df3542b68dd1cebd1372e988a5ce38bfaf4ebdd86d5e324ff96 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/cart/cart-list.htm"));

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
    
</div>

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["cart"] ?? null), "hotels", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 27
            echo "    <div class=\"flt-dtls-box rt-mb-30\">
        <div class=\"upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center\">
            <div class=\"left\">
                
                <span>";
            // line 31
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "hotel_name", [], "any", false, false, false, 31), "html", null, true);
            echo "</span>
                
            </div><!-- /.left -->
            <!-- /.right -->
        </div><!-- /.upper-top-content -->
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "rooms", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                // line 37
                echo "        <div class=\"flight-list-box\">
            <div class=\"hotel-inner-content row pb-2\">
                
                <div class=\"hotel-text col-md-12\">
    
                   <div class=\"footer3-elements cart-body-element\">
                       ";
                // line 48
                echo "                       <span class=\"d-block heading-color-1 rt-strong room-name\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "room_name", [], "any", false, false, false, 48), "html", null, true);
                echo "</span>
                            ";
                // line 49
                if ( !twig_test_empty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "tour_name", [], "any", false, false, false, 49))) {
                    // line 50
                    echo "                            <div class=\"clearfix room-detail d-flex align-items-center pb-2\">
                                <img src=\"";
                    // line 51
                    echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/packs.svg");
                    echo "\">
                                <p class=\"p-0 m-0 hotel-tour-name\">
                                    
                                    ";
                    // line 54
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "tour_name", [], "any", false, false, false, 54), "html", null, true);
                    echo "
                                </p>
                            </div>
                            ";
                }
                // line 58
                echo "                           <div class=\"clearfix room-detail\">
                               <span class=\"float-left \">Ocupación</span>
                               <span class=\"float-right\">";
                // line 60
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "pax_description", [], "any", false, false, false, 60), "html", null, true);
                echo "</span>
                            </div>
                           <div class=\"clearfix room-detail\">
                               <span class=\"float-left\">Régimen</span>
                               <span class=\"float-right\">";
                // line 64
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "regime_name", [], "any", false, false, false, 64), "html", null, true);
                echo "</span>
                            </div>
                            <div class=\"clearfix room-detail\">
                                <span class=\"float-left\">Check-in</span>
                                <span class=\"float-right\">";
                // line 68
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "params", [], "any", false, false, false, 68), "checkin", [], "any", false, false, false, 68), "html", null, true);
                echo "</span>
                             </div>
                             <div class=\"clearfix room-detail\">
                                <span class=\"float-left\">Check-out</span>
                                <span class=\"float-right\">";
                // line 72
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "params", [], "any", false, false, false, 72), "checkout", [], "any", false, false, false, 72), "html", null, true);
                echo "</span>
                             </div>
                           <div class=\"clearfix room-price\">
                               <span class=\"float-left\">Precio</span>
                               <span class=\"float-right rt-strong\">";
                // line 76
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 76), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, false, 76), "html", null, true);
                echo "</span>
                            </div>
                            
                       
                   </div><!-- /.footer3-elements -->
                </div><!-- /.hotel-text -->
            </div><!-- /.hotel-inner-content -->
            ";
                // line 86
                echo "        </div><!-- /.flight-list-box -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "        
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["cart"] ?? null), "upsellings", [], "any", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["upselling"]) {
            // line 93
            echo "    <div class=\"flight-list-box pb-2  mb-4 upselling-cart-item\">
        <div class=\"hotel-inner-content row\">
            
            <div class=\"hotel-text col-md-12\">

               <div class=\"footer3-elements cart-body-element\">
                   ";
            // line 104
            echo "                   <div class=\" d-flex align-items-center\">
                    <img src=\"";
            // line 105
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/packs-basics.svg");
            echo "\">
                    <span class=\"d-block heading-color-1 rt-strong room-name mt-1\">";
            // line 106
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "upselling_name", [], "any", false, false, false, 106), "html", null, true);
            echo "</span>
                   </div>
                   
                        
                       <div class=\"clearfix room-detail\">
                           <span class=\"float-left \">Ocupación</span>
                           <span class=\"float-right\">";
            // line 112
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "pax_description", [], "any", false, false, false, 112), "html", null, true);
            echo "</span>
                        </div>
                       
                        <div class=\"clearfix room-detail\">
                            <span class=\"float-left\">Fecha de disfrute</span>
                            <span class=\"float-right\">";
            // line 117
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "date", [], "any", false, false, false, 117), "html", null, true);
            echo "</span>
                         </div>
                        
                       <div class=\"clearfix room-price pt-3\">
                           <span class=\"float-left\">Precio</span>
                           <span class=\"float-right\">";
            // line 122
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "total_markup_price", [], "any", false, false, false, 122), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, false, 122), "html", null, true);
            echo "</span>
                        </div>
                        
                   
               </div><!-- /.footer3-elements -->
            </div><!-- /.hotel-text -->
        </div><!-- /.hotel-inner-content -->
        ";
            // line 132
            echo "    </div><!-- /.flight-list-box -->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upselling'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/cart/cart-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 132,  239 => 122,  231 => 117,  223 => 112,  214 => 106,  210 => 105,  207 => 104,  199 => 93,  195 => 92,  192 => 91,  184 => 88,  177 => 86,  165 => 76,  158 => 72,  151 => 68,  144 => 64,  137 => 60,  133 => 58,  126 => 54,  120 => 51,  117 => 50,  115 => 49,  110 => 48,  102 => 37,  98 => 36,  90 => 31,  84 => 27,  80 => 26,  67 => 18,  58 => 12,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
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
    
</div>

    {% for hotel in cart.hotels %}
    <div class=\"flt-dtls-box rt-mb-30\">
        <div class=\"upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center\">
            <div class=\"left\">
                
                <span>{{hotel.hotel_name}}</span>
                
            </div><!-- /.left -->
            <!-- /.right -->
        </div><!-- /.upper-top-content -->
        {% for room in hotel.rooms %}
        <div class=\"flight-list-box\">
            <div class=\"hotel-inner-content row pb-2\">
                
                <div class=\"hotel-text col-md-12\">
    
                   <div class=\"footer3-elements cart-body-element\">
                       {#
                       <a href=\"#\" data-code=\"{{hotel.hotel_id}}-{{loop.index0}}\" class=\"remove-from-cart\">
                        <img src=\"{{'navicu/imgs/svg/remove-cart.svg'|media}}\" alt=\"\">
                       </a>
                       #}
                       <span class=\"d-block heading-color-1 rt-strong room-name\">{{room.room_name}}</span>
                            {% if room.tour_name is not empty%}
                            <div class=\"clearfix room-detail d-flex align-items-center pb-2\">
                                <img src=\"{{'navicu/imgs/svg/packs.svg'|media}}\">
                                <p class=\"p-0 m-0 hotel-tour-name\">
                                    
                                    {{room.tour_name}}
                                </p>
                            </div>
                            {% endif %}
                           <div class=\"clearfix room-detail\">
                               <span class=\"float-left \">Ocupación</span>
                               <span class=\"float-right\">{{room.pax_description}}</span>
                            </div>
                           <div class=\"clearfix room-detail\">
                               <span class=\"float-left\">Régimen</span>
                               <span class=\"float-right\">{{room.regime_name}}</span>
                            </div>
                            <div class=\"clearfix room-detail\">
                                <span class=\"float-left\">Check-in</span>
                                <span class=\"float-right\">{{room.params.checkin}}</span>
                             </div>
                             <div class=\"clearfix room-detail\">
                                <span class=\"float-left\">Check-out</span>
                                <span class=\"float-right\">{{room.params.checkout}}</span>
                             </div>
                           <div class=\"clearfix room-price\">
                               <span class=\"float-left\">Precio</span>
                               <span class=\"float-right rt-strong\">{{room.price}} {{currentCurrency.acronimo}}</span>
                            </div>
                            
                       
                   </div><!-- /.footer3-elements -->
                </div><!-- /.hotel-text -->
            </div><!-- /.hotel-inner-content -->
            {#
            <div class=\"rt-divider style-three\"></div>
            #}
        </div><!-- /.flight-list-box -->
        {% endfor %}
        
    </div>
    {% endfor %}

    {% for upselling in cart.upsellings %}
    <div class=\"flight-list-box pb-2  mb-4 upselling-cart-item\">
        <div class=\"hotel-inner-content row\">
            
            <div class=\"hotel-text col-md-12\">

               <div class=\"footer3-elements cart-body-element\">
                   {#
                   <a href=\"#\" data-type=\"upselling\" data-code=\"{{loop.index0}}\" class=\"remove-from-cart float-right\">
                    <span><img src=\"{{'navicu/imgs/svg/delete-icon.svg'|media}}\" alt=\"remove\"></span>
                   </a>
                   #}
                   <div class=\" d-flex align-items-center\">
                    <img src=\"{{'navicu/imgs/svg/packs-basics.svg'|media}}\">
                    <span class=\"d-block heading-color-1 rt-strong room-name mt-1\">{{upselling.upselling_name}}</span>
                   </div>
                   
                        
                       <div class=\"clearfix room-detail\">
                           <span class=\"float-left \">Ocupación</span>
                           <span class=\"float-right\">{{upselling.pax_description}}</span>
                        </div>
                       
                        <div class=\"clearfix room-detail\">
                            <span class=\"float-left\">Fecha de disfrute</span>
                            <span class=\"float-right\">{{upselling.date}}</span>
                         </div>
                        
                       <div class=\"clearfix room-price pt-3\">
                           <span class=\"float-left\">Precio</span>
                           <span class=\"float-right\">{{upselling.total_markup_price}} {{currentCurrency.acronimo}}</span>
                        </div>
                        
                   
               </div><!-- /.footer3-elements -->
            </div><!-- /.hotel-text -->
        </div><!-- /.hotel-inner-content -->
        {#
        <div class=\"rt-divider style-three\"></div>
        #}
    </div><!-- /.flight-list-box -->
    {% endfor %}", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/cart/cart-list.htm", "");
    }
}
