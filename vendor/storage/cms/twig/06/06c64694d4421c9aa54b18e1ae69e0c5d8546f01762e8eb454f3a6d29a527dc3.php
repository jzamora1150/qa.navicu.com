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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/main-header.htm */
class __TwigTemplate_33aa9b1a9ba79eb1b3de30eb2f232e76c7fafcf944b1eb4734817a5f3e98bfc9 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/main-header.htm"));

        // line 1
        $context["currencyList"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CurrencyHandler"] ?? null), "getCurrencyList", [], "method", false, false, false, 1);
        echo "  
";
        // line 2
        $context["currentCurrency"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CurrencyHandler"] ?? null), "getCurrentCurrency", [], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        $context["count"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CartHandler"] ?? null), "getCartCount", [], "method", false, false, false, 4);
        // line 5
        echo "

";
        // line 7
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7) == "home"))) {
            // line 8
            echo "    ";
            $context["menuTextClass"] = "purple-menu";
            // line 9
            echo "    ";
            $context["mobileHomeMenu"] = "mobile-home-menu";
        } else {
            // line 11
            echo "    ";
            $context["menuTextClass"] = "white-menu";
        }
        // line 13
        echo "<header class=\"rt-site-header  rt-fixed-top ";
        echo twig_escape_filter($this->env, ($context["menuTextClass"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["mobileHomeMenu"] ?? null), "html", null, true);
        echo "\">
    <div class=\"top-header rt-light-text d-none d-md-block\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <ul class=\"text-center text-md-left top-message\">
                        ";
        // line 23
        echo "                    </ul>
                </div><!-- end top header single -->
                <div class=\"col-md-6\">
                    ";
        // line 47
        echo "                </div><!-- end top header single -->
            </div>
        </div>
    </div> <!-- end top header -->
    
    ";
        // line 52
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52) == "home"))) {
            // line 53
            echo "        ";
            $context["noBannerClass"] = "";
            // line 54
            echo "    ";
        } else {
            // line 55
            echo "        ";
            $context["noBannerClass"] = "no-banner";
            // line 56
            echo "        
    ";
        }
        // line 58
        echo "    <div class=\"main-header rt-sticky ";
        echo twig_escape_filter($this->env, ($context["noBannerClass"] ?? null), "html", null, true);
        echo "\">
      <nav class=\"navbar\">
        <div class=\"container pr-0\">
          
           ";
        // line 62
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62) == "home"))) {
            // line 63
            echo "           <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("temp-home");
            echo "\" class=\"brand-logo\">  <img src=\"";
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/logo-header-navicu.svg");
            echo "\" alt=\"Navicu1\"></a>
           ";
        } else {
            // line 65
            echo "           <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("temp-home");
            echo "\" class=\"brand-logo\">  <img src=\"";
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/logo-header-navicu-white.svg");
            echo "\" alt=\"Navicu2\"></a>
           ";
        }
        // line 67
        echo "           
          
          <a href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("temp-home");
        echo "\" class=\"sticky-logo\">
              <img class=\"img-fluid\" src=\"";
        // line 70
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/logo-header-navicu-white.svg");
        echo "\" alt=\"Navicu.com\">
            </a>
          <div class=\"ml-auto d-flex align-items-center\">
            <div class=\"main-menu\">
                <ul>
                    
                    <li><a href=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tour-list");
        echo "\">Paquetes</a></li>
                    <li><a href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("upselling-list");
        echo "\">Actividades</a></li>

                    ";
        // line 82
        echo "                    <li> <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
                    
                    <li> <a href=\"#\" class=\"btn btn-demo\" data-toggle=\"modal\" data-target=\"#cart-side-modal\">
                            <span class=\"indicator__value\">";
        // line 85
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "</span>
                            ";
        // line 86
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86) == "home"))) {
            // line 87
            echo "                                <img class=\"img-fluid\" width=\"30px\"
                                 data-secondary=\"";
            // line 88
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/car-white.svg");
            echo "\"
                                 data-original=\"";
            // line 89
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/carrito-nv.svg");
            echo "\" 
                                 src=\"";
            // line 90
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/carrito-nv.svg");
            echo "\" alt=\"\">
                            ";
        } else {
            // line 92
            echo "                                <img class=\"img-fluid\" width=\"30px\" src=\"";
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/car-white.svg");
            echo "\" alt=\"\">
                            ";
        }
        // line 94
        echo "
                        </a>
                    </li>

                    
                    
                </ul>
                <div class=\"mobile-menu \">
                    <a href=\"#\" class=\"btn btn-demo pt-3\" data-toggle=\"modal\" data-target=\"#cart-side-modal\">
                        <span class=\"indicator__value\">";
        // line 103
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "</span>
                        ";
        // line 104
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104) == "home"))) {
            // line 105
            echo "                        <img class=\"img-fluid\" width=\"30px\" 
                            data-secondary=\"";
            // line 106
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/car-yellow.svg");
            echo "\" 
                            data-original=\"";
            // line 107
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/carrito-nv.svg");
            echo "\"
                            src=\"";
            // line 108
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/carrito-nv.svg");
            echo "\" alt=\"\">
                        ";
        } else {
            // line 110
            echo "                        <img class=\"img-fluid\" width=\"30px\" src=\"";
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/car-yellow.svg");
            echo "\" alt=\"\">
                        ";
        }
        // line 112
        echo "                        
                    </a>

                    <a href=\"#\" class=\"btn btn-demo pt-3\" data-toggle=\"modal\" data-target=\"#navigation-side-menu\">
                        ";
        // line 116
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116) == "home"))) {
            // line 117
            echo "                        <img class=\"img-fluid\" width=\"30px\" 
                            data-secondary=\"";
            // line 118
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/menu-mobile.svg");
            echo "\"
                            data-original=\"";
            // line 119
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/menu-nv.svg");
            echo "\"
                            src=\"";
            // line 120
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/menu-nv.svg");
            echo "\"

                              alt=\"\">
                        ";
        } else {
            // line 124
            echo "                        <img class=\"img-fluid\" width=\"30px\" src=\"";
            echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/menu-mobile.svg");
            echo "\" alt=\"\">
                        ";
        }
        // line 126
        echo "                    </a>
                
                </div>
            </div><!-- end main menu -->
            
            <div class=\"rt-nav-tolls d-flex align-items-center\">
                <span class=\"d-md-inline d-none\">
                    <a href=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" id=\"contact-button\" class=\"rt-btn dark-orange\">Contáctanos</a>
                </span>
            </div>
                
          </div>
        </div>
      </nav>
    </div><!-- /.bootom-header -->

  </header>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/main-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 133,  265 => 126,  259 => 124,  252 => 120,  248 => 119,  244 => 118,  241 => 117,  239 => 116,  233 => 112,  227 => 110,  222 => 108,  218 => 107,  214 => 106,  211 => 105,  209 => 104,  205 => 103,  194 => 94,  188 => 92,  183 => 90,  179 => 89,  175 => 88,  172 => 87,  170 => 86,  166 => 85,  159 => 82,  154 => 77,  150 => 76,  141 => 70,  137 => 69,  133 => 67,  125 => 65,  117 => 63,  115 => 62,  107 => 58,  103 => 56,  100 => 55,  97 => 54,  94 => 53,  92 => 52,  85 => 47,  80 => 23,  68 => 13,  64 => 11,  60 => 9,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currencyList = CurrencyHandler.getCurrencyList() %}  
{% set currentCurrency = CurrencyHandler.getCurrentCurrency() %}

{% set count = CartHandler.getCartCount() %}


{% if this.page.id == \"temp-home\" or this.page.id == \"home\" %}
    {% set menuTextClass = 'purple-menu' %}
    {% set mobileHomeMenu = 'mobile-home-menu' %}
{% else %}
    {% set menuTextClass = 'white-menu' %}
{% endif %}
<header class=\"rt-site-header  rt-fixed-top {{menuTextClass}} {{mobileHomeMenu}}\">
    <div class=\"top-header rt-light-text d-none d-md-block\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <ul class=\"text-center text-md-left top-message\">
                        {#
                        <li> <i class=\"icofont-headphone-alt\"></i>Support</li>
                        <li><a href=\"mailto:info@emigrar.com \"><i class=\"icofont-email\"></i>info@emigrar.com</a></li>
                        #}
                    </ul>
                </div><!-- end top header single -->
                <div class=\"col-md-6\">
                    {#
                    <ul class=\"text-center text-md-right top-social\">
                        <li><a href=\"#\" class=\"dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
            aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-dollar-sign\"></i>Moneda: {{currentCurrency.moneda}}</a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                {% for currency in currencyList %}
                                <a class=\"dropdown-item currency-item\" data-id=\"{{currency.id}}\" href=\"#\">{{currency.moneda}}</a>

                                {% endfor %}
                            </div>
                        </li>
                        <!-- 
                        <li><a href=\"#\"><i class=\"fas fa-briefcase\"></i>My Trips</a></li>
                        -->
                        <li>
                            
                            <a href=\"#\" data-target=\"#rtmodal-1\" data-toggle=\"modal\"><i class=\"far fa-user-circle\"></i>Login | Registro</a>
                            
                        </li>
                    </ul>
                    #}
                </div><!-- end top header single -->
            </div>
        </div>
    </div> <!-- end top header -->
    
    {% if this.page.id == \"temp-home\" or this.page.id == \"home\" %}
        {% set noBannerClass = \"\" %}
    {% else %}
        {% set noBannerClass = \"no-banner\" %}
        
    {% endif %}
    <div class=\"main-header rt-sticky {{noBannerClass}}\">
      <nav class=\"navbar\">
        <div class=\"container pr-0\">
          
           {% if this.page.id == \"temp-home\" or this.page.id == \"home\" %}
           <a href=\"{{'temp-home'|page}}\" class=\"brand-logo\">  <img src=\"{{'navicu/imgs/svg/logo-header-navicu.svg'|media}}\" alt=\"Navicu1\"></a>
           {% else %}
           <a href=\"{{'temp-home'|page}}\" class=\"brand-logo\">  <img src=\"{{'navicu/imgs/svg/logo-header-navicu-white.svg'|media}}\" alt=\"Navicu2\"></a>
           {% endif %}
           
          
          <a href=\"{{'temp-home'|page}}\" class=\"sticky-logo\">
              <img class=\"img-fluid\" src=\"{{'navicu/imgs/svg/logo-header-navicu-white.svg'|media}}\" alt=\"Navicu.com\">
            </a>
          <div class=\"ml-auto d-flex align-items-center\">
            <div class=\"main-menu\">
                <ul>
                    
                    <li><a href=\"{{'tour-list'|page}}\">Paquetes</a></li>
                    <li><a href=\"{{'upselling-list'|page}}\">Actividades</a></li>

                    {#
                    <li><a href=\"#\">Excursiones</a></li>
                    #}
                    <li> <a href=\"{{'blog'|page}}\">Blog</a></li>
                    
                    <li> <a href=\"#\" class=\"btn btn-demo\" data-toggle=\"modal\" data-target=\"#cart-side-modal\">
                            <span class=\"indicator__value\">{{count}}</span>
                            {% if this.page.id == \"temp-home\" or this.page.id == \"home\" %}
                                <img class=\"img-fluid\" width=\"30px\"
                                 data-secondary=\"{{'navicu/imgs/svg/car-white.svg'|media}}\"
                                 data-original=\"{{'navicu/imgs/svg/carrito-nv.svg'|media}}\" 
                                 src=\"{{'navicu/imgs/svg/carrito-nv.svg'|media}}\" alt=\"\">
                            {% else %}
                                <img class=\"img-fluid\" width=\"30px\" src=\"{{'navicu/imgs/svg/car-white.svg'|media}}\" alt=\"\">
                            {% endif %}

                        </a>
                    </li>

                    
                    
                </ul>
                <div class=\"mobile-menu \">
                    <a href=\"#\" class=\"btn btn-demo pt-3\" data-toggle=\"modal\" data-target=\"#cart-side-modal\">
                        <span class=\"indicator__value\">{{count}}</span>
                        {% if this.page.id == \"temp-home\" or this.page.id == \"home\" %}
                        <img class=\"img-fluid\" width=\"30px\" 
                            data-secondary=\"{{'navicu/imgs/svg/car-yellow.svg'|media}}\" 
                            data-original=\"{{'navicu/imgs/svg/carrito-nv.svg'|media}}\"
                            src=\"{{'navicu/imgs/svg/carrito-nv.svg'|media}}\" alt=\"\">
                        {% else %}
                        <img class=\"img-fluid\" width=\"30px\" src=\"{{'navicu/imgs/svg/car-yellow.svg'|media}}\" alt=\"\">
                        {% endif %}
                        
                    </a>

                    <a href=\"#\" class=\"btn btn-demo pt-3\" data-toggle=\"modal\" data-target=\"#navigation-side-menu\">
                        {% if this.page.id == \"temp-home\" or this.page.id == \"home\" %}
                        <img class=\"img-fluid\" width=\"30px\" 
                            data-secondary=\"{{'navicu/imgs/svg/menu-mobile.svg'|media}}\"
                            data-original=\"{{'navicu/imgs/svg/menu-nv.svg'|media}}\"
                            src=\"{{'navicu/imgs/svg/menu-nv.svg'|media}}\"

                              alt=\"\">
                        {% else %}
                        <img class=\"img-fluid\" width=\"30px\" src=\"{{'navicu/imgs/svg/menu-mobile.svg'|media}}\" alt=\"\">
                        {% endif %}
                    </a>
                
                </div>
            </div><!-- end main menu -->
            
            <div class=\"rt-nav-tolls d-flex align-items-center\">
                <span class=\"d-md-inline d-none\">
                    <a href=\"{{'contact'|page}}\" id=\"contact-button\" class=\"rt-btn dark-orange\">Contáctanos</a>
                </span>
            </div>
                
          </div>
        </div>
      </nav>
    </div><!-- /.bootom-header -->

  </header>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/main-header.htm", "");
    }
}
