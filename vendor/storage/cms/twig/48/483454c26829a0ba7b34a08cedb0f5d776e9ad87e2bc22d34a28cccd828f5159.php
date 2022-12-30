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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/modals/cart-body.htm */
class __TwigTemplate_9f10ae96eb6a17dfc5e32ad1fc0fa1a154a0874cc28dc51b6464773e76e6f084 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/modals/cart-body.htm"));

        // line 1
        $context["cart"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CartHandler"] ?? null), "getCart", [], "method", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context["currentCurrency"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CurrencyHandler"] ?? null), "getCurrentCurrency", [], "method", false, false, false, 3);
        // line 4
        $context["arPrices"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CartHandler"] ?? null), "getCartPriceArray", [], "method", false, false, false, 4);
        // line 5
        echo "<div class=\"modal-body\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["cart"] ?? null), "hotels", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 7
            echo "    <div class=\"flt-dtls-box rt-mb-20\">
        <div class=\"upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center\">
            <div class=\"left w-100 text-center\">
                
                <span>";
            // line 11
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "hotel_name", [], "any", false, false, false, 11), "html", null, true);
            echo "</span>
                
            </div><!-- /.left -->
            <!-- /.right -->
        </div><!-- /.upper-top-content -->
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "rooms", [], "any", false, false, false, 16));
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
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "hotel_id", [], "any", false, false, false, 24), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 24), "html", null, true);
                echo "\" class=\"remove-from-cart float-right\">
                        <span><img src=\"";
                // line 25
                echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/delete-icon.svg");
                echo "\" alt=\"remove\"></span>
                       </a>
                       <span class=\"d-block heading-color-1 rt-strong room-name\">";
                // line 27
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "room_name", [], "any", false, false, false, 27), "html", null, true);
                echo "</span>
                            ";
                // line 28
                if ( !twig_test_empty(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "tour_name", [], "any", false, false, false, 28))) {
                    // line 29
                    echo "                            <div class=\"clearfix room-detail d-flex align-items-center pb-2\">
                                <img src=\"";
                    // line 30
                    echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/packs.svg");
                    echo "\">
                                <p class=\"p-0 m-0 hotel-tour-name\">
                                    
                                    ";
                    // line 33
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "tour_name", [], "any", false, false, false, 33), "html", null, true);
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
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "pax_description", [], "any", false, false, false, 39), "html", null, true);
                echo "</span>
                            </div>
                           <div class=\"clearfix room-detail\">
                               <span class=\"float-left\">Régimen</span>
                               <span class=\"float-right\">";
                // line 43
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "regime_name", [], "any", false, false, false, 43), "html", null, true);
                echo "</span>
                            </div>
                            <div class=\"clearfix room-detail\">
                                <span class=\"float-left\">Check-in</span>
                                <span class=\"float-right\">";
                // line 47
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "params", [], "any", false, false, false, 47), "checkin", [], "any", false, false, false, 47), "html", null, true);
                echo "</span>
                             </div>
                             <div class=\"clearfix  room-detail\">
                                <span class=\"float-left\">Check-out</span>
                                <span class=\"float-right\">";
                // line 51
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "params", [], "any", false, false, false, 51), "checkout", [], "any", false, false, false, 51), "html", null, true);
                echo "</span>
                             </div>
                           <div class=\"clearfix room-price pt-3\">
                               <span class=\"float-left\">Precio</span>
                               <span class=\"float-right\">";
                // line 55
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 55), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, false, 55), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["cart"] ?? null), "upsellings", [], "any", false, false, false, 70));
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
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 78), "html", null, true);
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
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "upselling_name", [], "any", false, false, false, 83), "html", null, true);
            echo "</span>
                   </div>
                   
                        
                       <div class=\"clearfix room-detail\">
                           <span class=\"float-left \">Ocupación</span>
                           <span class=\"float-right\">";
            // line 89
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "pax_description", [], "any", false, false, false, 89), "html", null, true);
            echo "</span>
                        </div>
                       
                        <div class=\"clearfix room-detail\">
                            <span class=\"float-left\">Fecha de disfrute</span>
                            <span class=\"float-right\">";
            // line 94
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "date", [], "any", false, false, false, 94), "html", null, true);
            echo "</span>
                         </div>
                        
                       <div class=\"clearfix room-price pt-3\">
                           <span class=\"float-left\">Precio</span>
                           <span class=\"float-right\">";
            // line 99
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["upselling"], "total_markup_price", [], "any", false, false, false, 99), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, false, 99), "html", null, true);
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
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arPrices"] ?? null), "total_price", [], "any", false, false, false, 117), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, false, 117), "html", null, true);
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
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/modals/cart-body.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 122,  299 => 117,  291 => 111,  276 => 109,  264 => 99,  256 => 94,  248 => 89,  239 => 83,  235 => 82,  229 => 79,  225 => 78,  216 => 71,  199 => 70,  196 => 69,  188 => 67,  173 => 65,  161 => 55,  154 => 51,  147 => 47,  140 => 43,  133 => 39,  129 => 37,  122 => 33,  116 => 30,  113 => 29,  111 => 28,  107 => 27,  102 => 25,  96 => 24,  87 => 17,  70 => 16,  62 => 11,  56 => 7,  52 => 6,  49 => 5,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cart = CartHandler.getCart() %}

{% set currentCurrency = CurrencyHandler.getCurrentCurrency() %}
{% set arPrices = CartHandler.getCartPriceArray() %}
<div class=\"modal-body\">
    {% for hotel in cart.hotels %}
    <div class=\"flt-dtls-box rt-mb-20\">
        <div class=\"upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center\">
            <div class=\"left w-100 text-center\">
                
                <span>{{hotel.hotel_name}}</span>
                
            </div><!-- /.left -->
            <!-- /.right -->
        </div><!-- /.upper-top-content -->
        {% for room in hotel.rooms %}
        <div class=\"flight-list-box\">
            <div class=\"hotel-inner-content row pb-2\">
                
                <div class=\"hotel-text col-md-12\">
    
                   <div class=\"footer3-elements cart-body-element\">
                       
                       <a href=\"#\" data-type=\"room\" data-code=\"{{hotel.hotel_id}}-{{loop.index0}}\" class=\"remove-from-cart float-right\">
                        <span><img src=\"{{'navicu/imgs/svg/delete-icon.svg'|media}}\" alt=\"remove\"></span>
                       </a>
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
                             <div class=\"clearfix  room-detail\">
                                <span class=\"float-left\">Check-out</span>
                                <span class=\"float-right\">{{room.params.checkout}}</span>
                             </div>
                           <div class=\"clearfix room-price pt-3\">
                               <span class=\"float-left\">Precio</span>
                               <span class=\"float-right\">{{room.price}} {{currentCurrency.acronimo}}</span>
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
                   
                   <a href=\"#\" data-type=\"upselling\" data-code=\"{{loop.index0}}\" class=\"remove-from-cart float-right\">
                    <span><img src=\"{{'navicu/imgs/svg/delete-icon.svg'|media}}\" alt=\"remove\"></span>
                   </a>
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
    {% endfor %}
</div>
<div class=\"modal-footer\">
    <div class=\"w-100\">
        <div class=\"d-flex pt-3\">
        
            <div class=\"col-md-12 text-center side-cart-modal-total\">
                <span>Total:</span> <span>{{arPrices.total_price }} {{currentCurrency.acronimo}}</span>
            </div>
        </div>
        <div class=\"d-flex pb-3\">
            <div class=\"col-md-12 text-center\">
                <a href=\"{{'cart'|page}}\" class=\"go-to-pay\">Pagar</a>
            </div>
        </div>
    </div>
    
</div>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/modals/cart-body.htm", "");
    }
}
