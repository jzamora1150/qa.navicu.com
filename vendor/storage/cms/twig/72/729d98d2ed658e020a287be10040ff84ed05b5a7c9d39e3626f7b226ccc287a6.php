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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/layouts/default.htm */
class __TwigTemplate_3cf7f58d03491055efec2be917129a60734b9af2d19bafb7ffbefd520c1e74b9 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/layouts/default.htm"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "        
        <link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
        <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/favicon-navicu.png");
        echo "\"/>

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js\"></script>
<!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->
        ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("assets/headers"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "
        <!-- Google Tag Manager -->

       <!-- Google Tag Manager -->
       <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5KKBS7L');</script>
        <!-- End Google Tag Manager -->

        <script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCZylRj0lhbpYyZuVv8grqcizQAVQyCFXQ\"></script>

    </head>

    <body>
        
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5KKBS7L\"
        height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <div id=\"main-header-container\">
        ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("main-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "    </div>
    

    ";
        // line 44
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->pageFunction();
        // line 45
        echo "
    ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("modals/terms-conditions"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "
    <div class=\"modal left fade\" id=\"cart-side-modal\" tabindex=\"\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\" id=\"cart-body-container\">
                ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("modals/cart-body"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "                
            </div>
        </div>
    </div>

    <div class=\"modal left fade\" id=\"navigation-side-menu\" tabindex=\"\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"col-sm-12 pt-5 pl-5 navigation-menu-header d-flex justify-content-between \">
                    <img class=\"img-fluid\" style=\"width: 180px\" src=\"";
        // line 61
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/logo-header-navicu-white.svg");
        echo "\" alt=\"Navicu.com\">
                    <span class=\"text-white\">
                        <a href=\"#\" data-dismiss=\"modal\">
                            <img class=\"img-fluid\" style=\"width: 50px\" src=\"";
        // line 64
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/arrow-left.svg");
        echo "\">
                        </a>
                    </span>
                </div>
                <div class=\"d-flex justify-content-around flex-column h-100\">
                    <div class=\"col-sm-12  pt-5 pl-5\">
                        <ul class=\"side-menu-list\">
                        
                            <li><a href=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tour-list");
        echo "\">Paquetes</a></li>
                            <li><a href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("upselling-list");
        echo "\">Actividades</a></li>
                            <li> <a href=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
                            
                        </ul>
                    </div>
                    <div class=\"col-sm-12  pt-5 pl-5 d-flex justify-content-center\">
                        <a href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" id=\"contact-button\" class=\"rt-btn dark-orange\">Contáctanos</a>
                    </div>
                    
                </div>
                
                
            </div>
        </div>
    </div>

    <div class=\"modal left fade\" id=\"side-search-box\" tabindex=\"\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"col-sm-12 pt-5 pl-5 navigation-menu-header d-flex justify-content-between \">
                    <span class=\"text-white\">
                        <a href=\"#\" data-dismiss=\"modal\">
                            <img class=\"img-fluid\" style=\"width: 50px\" src=\"";
        // line 95
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/arrow-left.svg");
        echo "\">
                        </a>
                    </span>
                </div>
                <div class=\"d-flex justify-content-around flex-column h-100\">
                    ";
        // line 100
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("banner-searchbox"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 101
        echo "                    
                </div>
                
                
            </div>
        </div>
    </div>

    ";
        // line 109
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("newsletter-footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "
    ";
        // line 111
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("assets/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 112
        echo "    
    ";
        // line 113
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        unset($_minify);
        // line 114
        echo "    </body>
</html>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 114,  221 => 113,  218 => 112,  214 => 111,  211 => 110,  207 => 109,  197 => 101,  193 => 100,  185 => 95,  166 => 79,  158 => 74,  154 => 73,  150 => 72,  139 => 64,  133 => 61,  122 => 52,  118 => 51,  112 => 47,  108 => 46,  105 => 45,  103 => 44,  98 => 41,  94 => 40,  70 => 18,  66 => 17,  58 => 12,  53 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        {% component 'SeoCmsPage' %}
        
        <link href=\"https://fonts.googleapis.com/css?family=Lato&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
        <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ 'navicu/imgs/png/favicon-navicu.png'|media }}\"/>

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css\">
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js\"></script>
<!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->
        {% partial 'assets/headers' %}

        <!-- Google Tag Manager -->

       <!-- Google Tag Manager -->
       <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5KKBS7L');</script>
        <!-- End Google Tag Manager -->

        <script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCZylRj0lhbpYyZuVv8grqcizQAVQyCFXQ\"></script>

    </head>

    <body>
        
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5KKBS7L\"
        height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <div id=\"main-header-container\">
        {% partial 'main-header' %}
    </div>
    

    {% page %}

    {% partial 'modals/terms-conditions' %}

    <div class=\"modal left fade\" id=\"cart-side-modal\" tabindex=\"\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\" id=\"cart-body-container\">
                {% partial 'modals/cart-body' %}
                
            </div>
        </div>
    </div>

    <div class=\"modal left fade\" id=\"navigation-side-menu\" tabindex=\"\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"col-sm-12 pt-5 pl-5 navigation-menu-header d-flex justify-content-between \">
                    <img class=\"img-fluid\" style=\"width: 180px\" src=\"{{'navicu/imgs/svg/logo-header-navicu-white.svg'|media}}\" alt=\"Navicu.com\">
                    <span class=\"text-white\">
                        <a href=\"#\" data-dismiss=\"modal\">
                            <img class=\"img-fluid\" style=\"width: 50px\" src=\"{{'navicu/imgs/svg/arrow-left.svg'|media}}\">
                        </a>
                    </span>
                </div>
                <div class=\"d-flex justify-content-around flex-column h-100\">
                    <div class=\"col-sm-12  pt-5 pl-5\">
                        <ul class=\"side-menu-list\">
                        
                            <li><a href=\"{{'tour-list'|page}}\">Paquetes</a></li>
                            <li><a href=\"{{'upselling-list'|page}}\">Actividades</a></li>
                            <li> <a href=\"{{'blog'|page}}\">Blog</a></li>
                            
                        </ul>
                    </div>
                    <div class=\"col-sm-12  pt-5 pl-5 d-flex justify-content-center\">
                        <a href=\"{{'contact'|page}}\" id=\"contact-button\" class=\"rt-btn dark-orange\">Contáctanos</a>
                    </div>
                    
                </div>
                
                
            </div>
        </div>
    </div>

    <div class=\"modal left fade\" id=\"side-search-box\" tabindex=\"\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"col-sm-12 pt-5 pl-5 navigation-menu-header d-flex justify-content-between \">
                    <span class=\"text-white\">
                        <a href=\"#\" data-dismiss=\"modal\">
                            <img class=\"img-fluid\" style=\"width: 50px\" src=\"{{'navicu/imgs/svg/arrow-left.svg'|media}}\">
                        </a>
                    </span>
                </div>
                <div class=\"d-flex justify-content-around flex-column h-100\">
                    {% partial 'banner-searchbox' %}
                    
                </div>
                
                
            </div>
        </div>
    </div>

    {% partial 'newsletter-footer' %}

    {% partial 'assets/scripts' %}
    
    {% framework extras %}
    </body>
</html>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/layouts/default.htm", "");
    }
}
