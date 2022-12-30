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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/main-header.htm */
class __TwigTemplate_ce8567ef91bdfa360b3d04ea64b07c73c0727d50a6e256a6150f22faa18335ce extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/main-header.htm"));

        // line 1
        $context["currencyList"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CurrencyHandler"] ?? null), "getCurrencyList", [], "method", false, false, true, 1);
        echo "  
";
        // line 2
        $context["currentCurrency"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CurrencyHandler"] ?? null), "getCurrentCurrency", [], "method", false, false, true, 2);
        // line 3
        echo "
";
        // line 4
        $context["count"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CartHandler"] ?? null), "getCartCount", [], "method", false, false, true, 4);
        // line 5
        echo "

";
        // line 7
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "id", [], "any", false, false, true, 7) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "id", [], "any", false, false, true, 7) == "home"))) {
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
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["menuTextClass"] ?? null), 13, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["mobileHomeMenu"] ?? null), 13, $this->source), "html", null, true);
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
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 52), "id", [], "any", false, false, true, 52) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 52), "id", [], "any", false, false, true, 52) == "home"))) {
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
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noBannerClass"] ?? null), 58, $this->source), "html", null, true);
        echo "\">
      <nav class=\"navbar\">
        <div class=\"container pr-0\">
          
           ";
        // line 62
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 62), "id", [], "any", false, false, true, 62) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 62), "id", [], "any", false, false, true, 62) == "home"))) {
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
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 85, $this->source), "html", null, true);
        echo "</span>
                            ";
        // line 86
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 86), "id", [], "any", false, false, true, 86) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 86), "id", [], "any", false, false, true, 86) == "home"))) {
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
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 103, $this->source), "html", null, true);
        echo "</span>
                        ";
        // line 104
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 104), "id", [], "any", false, false, true, 104) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 104), "id", [], "any", false, false, true, 104) == "home"))) {
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
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 116), "id", [], "any", false, false, true, 116) == "temp-home") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 116), "id", [], "any", false, false, true, 116) == "home"))) {
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
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/main-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 133,  267 => 126,  261 => 124,  254 => 120,  250 => 119,  246 => 118,  243 => 117,  241 => 116,  235 => 112,  229 => 110,  224 => 108,  220 => 107,  216 => 106,  213 => 105,  211 => 104,  207 => 103,  196 => 94,  190 => 92,  185 => 90,  181 => 89,  177 => 88,  174 => 87,  172 => 86,  168 => 85,  161 => 82,  156 => 77,  152 => 76,  143 => 70,  139 => 69,  135 => 67,  127 => 65,  119 => 63,  117 => 62,  109 => 58,  105 => 56,  102 => 55,  99 => 54,  96 => 53,  94 => 52,  87 => 47,  82 => 23,  70 => 13,  66 => 11,  62 => 9,  59 => 8,  57 => 7,  53 => 5,  51 => 4,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/main-header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 7);
        static $filters = array("escape" => 13, "page" => 63, "media" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'page', 'media'],
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
