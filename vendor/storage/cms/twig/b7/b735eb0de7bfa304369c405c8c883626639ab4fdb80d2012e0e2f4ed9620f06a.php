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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-results/hotel-results.htm */
class __TwigTemplate_1013e5b5a4054de92f2a6b94fd2cbdbe3b1546d208ddbb8a5f05bd11b71823eb extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-results/hotel-results.htm"));

        // line 1
        echo "<!-- 

    <a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hotel", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["model"] ?? null), "slug", [], "any", false, false, false, 3)]);
        echo "?";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getDatesFromUrl", [], "method", false, false, false, 3), "html", null, true);
        echo "\"></a>
-->
";
        // line 5
        $context["currentCurrency"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CurrencyHandler"] ?? null), "getCurrentCurrency", [], "method", false, false, false, 5);
        // line 6
        echo "<div class=\"col-xl-9 col-lg-12 mt-lg-0 d-none d-sm-none d-md-block\">
    <h5 class=\"text-left hotel-result-count pt-2 pb-2\">Hoteles encontrados: ";
        // line 7
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getCount", [], "method", false, false, false, 7), "html", null, true);
        echo "</h5>
</div>
<div class=\"col-sm-12 d-block d-sm-none d-flex justify-content-between
    align-items-center mt-3\">
    <h5 class=\"text-left hotel-result-count pt-2 pb-2 mt-3\">Hoteles encontrados: ";
        // line 11
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getCount", [], "method", false, false, false, 11), "html", null, true);
        echo "</h5>
    
    <img src=\"";
        // line 13
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/filter-mobile.svg");
        echo "\" alt=\"\">
    
</div>
<div class=\"col-xl-9 col-lg-12 mt-3 mt-lg-0\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 18
            echo "        
        
        ";
            // line 20
            $context["model"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "getModel", [], "method", false, false, false, 20);
            // line 21
            echo "
        ";
            // line 22
            $context["atributos"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["model"] ?? null), "atributos", [], "any", false, false, false, 22);
            // line 23
            echo "

        ";
            // line 25
            $context["arAttributes"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "getAttributes", [], "method", false, false, false, 25);
            // line 26
            echo "        
        ";
            // line 27
            $context["minPrice"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "getMinPrice", [], "method", false, false, false, 27);
            // line 28
            echo "
        ";
            // line 29
            $context["defaultPrice"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "defaultRegimeMinPrice", [], "method", false, false, false, 29);
            // line 30
            echo "        <div class=\"result-link\" data-url=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("hotel", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["model"] ?? null), "slug", [], "any", false, false, false, 30)]);
            echo "?";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getDatesFromUrl", [], "method", false, false, false, 30), "html", null, true);
            echo "\">
        
        <div class=\"box-style__1 rt-mb-30 hotel-result-card\">
            <div class=\"hotel-inner-content row\">
                <div class=\"hotel-thumb col-md-4 mb-4 mb-md-0\">
                    <div class=\"hotel-bg rtbgprefix-cover\" style=\"background-image: url(";
            // line 35
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["model"] ?? null), "foto_inicio", [], "any", false, false, false, 35), "path", [], "any", false, false, false, 35), "html", null, true);
            echo ")\">
                        ";
            // line 36
            if ( !(null === ($context["defaultPrice"] ?? null))) {
                // line 37
                echo "                            <div class=\"default-price text-center d-block d-sm-none \">
                                <img src=\"";
                // line 38
                echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/recommended-hotel.svg");
                echo "\" class=\"img-fluid\" alt=\"Recomendado\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["defaultPrice"] ?? null), "nombre_regimen", [], "any", false, false, false, 38), "html", null, true);
                echo "
                            </div>
                            
                            ";
            }
            // line 42
            echo "                    </div>
                    <div class=\" justify-content-between pt-3  d-none d-sm-none d-md-flex\">
                        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["atributos"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["a"] ?? null), "pivot", [], "any", false, false, false, 44), "orden", [], "any", false, false, false, 44) <=> Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["b"] ?? null), "pivot", [], "any", false, false, false, 44), "orden", [], "any", false, false, false, 44)); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["atributo"]) {
                // line 45
                echo "                    
                            ";
                // line 46
                if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 46) < 5) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, false, 46), "path", [], "any", false, false, false, 46)))) {
                    // line 47
                    echo "                            <div class=\"col\">
                                <span class=\"d-block\">
                                    ";
                    // line 49
                    if ( !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, false, 49), "path", [], "any", false, false, false, 49))) {
                        // line 50
                        echo "                                    ";
                        $context["path"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, false, 50), "path", [], "any", false, false, false, 50);
                        // line 51
                        echo "                                    ";
                    } else {
                        // line 52
                        echo "                                    ";
                        $context["path"] = $this->env->getFilter('media')->getCallable()("navicu/imgs/png/jigsaw.png");
                        // line 53
                        echo "                                    ";
                    }
                    // line 54
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "nombre", [], "any", false, false, false, 54), "html", null, true);
                    echo "\" class=\"attribute-icon\">
                                
                                </span>
                            </div>
                            ";
                }
                // line 59
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atributo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </div>
                
                </div><!-- /.hotel-thumb -->
                <div class=\"hotel-text col-md-8\">
                    <div class=\"top mb-4 mb-md-0\">
                        <h5>";
            // line 65
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arAttributes"] ?? null), "nombre", [], "any", false, false, false, 65), "html", null, true);
            echo "
                            ";
            // line 66
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arAttributes"] ?? null), "estrellas", [], "any", false, false, false, 66) > 0)) {
                // line 67
                echo "                            <span class=\"star-rating\">
                                ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arAttributes"] ?? null), "estrellas", [], "any", false, false, false, 68) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 69
                    echo "                                <img src=\"";
                    echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["atributo"] ?? null), "nombre", [], "any", false, false, false, 69), "html", null, true);
                    echo "\" class=\"hotel-star\">

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                                
                            </span>
                            ";
            }
            // line 75
            echo "                        </h5>
                        ";
            // line 76
            $context["city"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["model"] ?? null), "city", [], "any", false, false, false, 76);
            // line 77
            echo "                        <p class=\"hotel-card-city\">";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["city"] ?? null), "name", [], "any", false, false, false, 77), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["city"] ?? null), "state", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>
                        <p class=\"hotel-card-presentation\">

                            ";
            // line 80
            $context["numberOfWords"] = twig_length_filter($this->env, twig_split_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arAttributes"] ?? null), "descripcion", [], "any", false, false, false, 80), " "));
            // line 81
            echo "
                            ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getFunction('str_words')->getCallable()("words", Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arAttributes"] ?? null), "descripcion", [], "any", false, false, false, 82), 20, "..."), "html", null, true);
            echo "
                            
                            ";
            // line 84
            if ((($context["numberOfWords"] ?? null) > 19)) {
                // line 85
                echo "                            <br><a href=\"#\" class=\"d-none d-sm-none d-md-block\">Leer más</a>
                            ";
            }
            // line 87
            echo "
                            ";
            // line 88
            if ( !(null === ($context["defaultPrice"] ?? null))) {
                // line 89
                echo "                            <div class=\"default-price d-none d-sm-none d-md-block\">
                                <img src=\"";
                // line 90
                echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/recommended-icon.svg");
                echo "\" class=\"img-fluid\" alt=\"Recomendado\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["defaultPrice"] ?? null), "nombre_regimen", [], "any", false, false, false, 90), "html", null, true);
                echo "
                            </div>
                            
                            ";
            }
            // line 94
            echo "                        </p>
                        ";
            // line 95
            if ((($context["numberOfWords"] ?? null) > 19)) {
                // line 96
                echo "                        <p class=\"text-right d-block d-sm-none\">
                            <a href=\"#\">Leer más</a>
                        </p>
                        
                        ";
            }
            // line 101
            echo "                    </div><!-- /.top -->
                    <div class=\"middle-text mb-4 mb-md-0 row\">
                        <div class=\"col-md-8\">
                        
                            <div class=\"justify-content-between  d-flex d-sm-none attribute-container\">
                                ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["atributos"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["a"] ?? null), "pivot", [], "any", false, false, false, 106), "orden", [], "any", false, false, false, 106) <=> Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["b"] ?? null), "pivot", [], "any", false, false, false, 106), "orden", [], "any", false, false, false, 106)); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["atributo"]) {
                // line 107
                echo "                    
                                    ";
                // line 108
                if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 108) < 5) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, false, 108), "path", [], "any", false, false, false, 108)))) {
                    // line 109
                    echo "                                    <div class=\"col text-center\">
                                        <span class=\"d-block\">
                                            ";
                    // line 111
                    if ( !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, false, 111), "path", [], "any", false, false, false, 111))) {
                        // line 112
                        echo "                                            ";
                        $context["path"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, false, 112), "path", [], "any", false, false, false, 112);
                        // line 113
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "nombre", [], "any", false, false, false, 113), "html", null, true);
                        echo "\" class=\"attribute-icon\">
                                            ";
                    } else {
                        // line 115
                        echo "                                            ";
                        // line 118
                        echo "                                            
                                            ";
                    }
                    // line 120
                    echo "                                            
                                        
                                        </span>
                                    </div>
                                    ";
                }
                // line 125
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atributo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                            </div>
                            
                        </div>
                        <div class=\"right min-price-content col-md-4 text-right d-none d-sm-none d-md-block\">
                                
                                <span class=\"d-block\"></span>
                                <span class=\"d-block\">
                                    <small>Desde</small>
                                    ";
            // line 134
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["minPrice"] ?? null), "total_markup", [], "any", false, false, false, 134), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, false, 134), "html", null, true);
            echo "
                                </span>
                                
                                <button  class=\"hotel-result-button\">Ver Hotel</button>           
                        </div>

                        <div class=\"right min-price-content col-md-4 text-right align-items-center
                        d-flex d-sm-none justify-content-between\">
                                
                            <span class=\"d-none\"></span>
                            <span class=\"d-block\">
                                <small>Desde</small>
                                ";
            // line 146
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["minPrice"] ?? null), "total_markup", [], "any", false, false, false, 146), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, false, 146), "html", null, true);
            echo "
                            </span>
                            
                            <button  class=\"hotel-result-button\">Ver Hotel</button>           
                    </div>

                    </div><!-- /.middle-text -->
                    <div class=\"footer-elements mt-2 d-flex justify-content-md-between align-items-center\">
                        <div class=\"left\">
                            
                        </div><!-- /.left -->
                        <div class=\"right\">
                            
                        </div><!-- /.right -->
                    </div><!-- /.footer-elements -->
                </div><!-- /.hotel-text -->
            </div><!-- /.hotel-inner-content -->
        </div><!-- hotel-result-card -->
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "
    ";
        // line 167
        $context["iPage"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["Pagination"] ?? null), "getPageFromRequest", [], "method", false, false, false, 167);
        // line 168
        echo "    ";
        $context["iCount"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getCount", [], "method", false, false, false, 168);
        // line 169
        echo "    ";
        $context["arPaginationList"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["Pagination"] ?? null), "get", [0 => ($context["iPage"] ?? null), 1 => ($context["iCount"] ?? null)], "method", false, false, false, 169);
        // line 170
        echo "    
    ";
        // line 171
        $context["paramsForPagination"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getSearchParamUrl", [], "method", false, false, false, 171);
        // line 172
        echo "    
    ";
        // line 173
        if ( !twig_test_empty(($context["arPaginationList"] ?? null))) {
            // line 174
            echo "
        ";
            // line 178
            echo "        <nav class=\"d-flex justify-content-end\">
            <ul class=\"pagination  rt-paganation\">

                ";
            // line 181
            if ((($context["iPage"] ?? null) != 1)) {
                // line 182
                echo "                
                    ";
                // line 183
                if ( !twig_test_empty(($context["paramsForPagination"] ?? null))) {
                    // line 184
                    echo "                    <li class=\"page-item\">
                        <a class=\"pagination-link\" href=\"";
                    // line 185
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("search", ["q" => ("q?" . ($context["paramsForPagination"] ?? null))]);
                    echo "&page=";
                    echo twig_escape_filter($this->env, (($context["iPage"] ?? null) - 1), "html", null, true);
                    echo "\">
                            <i class=\"icofont-simple-left\"></i>
                        </a>
                    </li>
                    ";
                } else {
                    // line 190
                    echo "                    <li class=\"page-item\">
                        <a class=\"pagination-link\" href=\"";
                    // line 191
                    echo $this->env->getFunction('url_current')->getCallable()("current");
                    echo "?page=";
                    echo twig_escape_filter($this->env, (($context["iPage"] ?? null) - 1), "html", null, true);
                    echo "\"><i class=\"icofont-simple-left\"></i></a>
                    </li>
                    ";
                }
                // line 194
                echo "                    
                ";
            }
            // line 196
            echo "
                ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["arPaginationList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["arPagination"]) {
                // line 198
                echo "
                    ";
                // line 199
                if ( !twig_test_empty(($context["paramsForPagination"] ?? null))) {
                    // line 200
                    echo "                    <li class=\"page-item ";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "class", [], "any", false, false, false, 200), "html", null, true);
                    echo "\">
                        <a class=\"pagination-link \" href=\"";
                    // line 201
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("search", ["q" => ("q?" . ($context["paramsForPagination"] ?? null))]);
                    echo "&page=";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "value", [], "any", false, false, false, 201), "html", null, true);
                    echo "\">
                            ";
                    // line 202
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "name", [], "any", false, false, false, 202), "html", null, true);
                    echo "
                        </a>
                    </li>
                    ";
                } else {
                    // line 206
                    echo "                    <li class=\"page-item ";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "class", [], "any", false, false, false, 206), "html", null, true);
                    echo "\">
                        <a class=\"pagination-link \" href=\"";
                    // line 207
                    echo $this->env->getFunction('url_current')->getCallable()("current");
                    echo "?page=";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "value", [], "any", false, false, false, 207), "html", null, true);
                    echo " \">
                            ";
                    // line 208
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "name", [], "any", false, false, false, 208), "html", null, true);
                    echo "
                        </a>
                    </li>
                    ";
                }
                // line 212
                echo "                    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arPagination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "
                ";
            // line 215
            if ( !twig_test_empty(($context["paramsForPagination"] ?? null))) {
                // line 216
                echo "
                <li class=\"page-item ";
                // line 217
                echo (((($context["iPage"] ?? null) == twig_length_filter($this->env, ($context["arPaginationList"] ?? null)))) ? ("disabled") : (""));
                echo "\">
                    <a class=\"pagination-link\" href=\"";
                // line 218
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("search", ["q" => ("q?" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getSearchParamUrl", [], "method", false, false, false, 218))]);
                echo "&page=";
                echo twig_escape_filter($this->env, (($context["iPage"] ?? null) + 1), "html", null, true);
                echo "\"><i class=\"icofont-simple-right\"></i></a>
                </li>

                ";
            } else {
                // line 222
                echo "
                <li class=\"page-item ";
                // line 223
                echo (((($context["iPage"] ?? null) == twig_length_filter($this->env, ($context["arPaginationList"] ?? null)))) ? ("disabled") : (""));
                echo "\">
                    <a class=\"pagination-link\" href=\"";
                // line 224
                echo $this->env->getFunction('url_current')->getCallable()("current");
                echo "?page=";
                echo twig_escape_filter($this->env, (($context["iPage"] ?? null) + 1), "html", null, true);
                echo "\"><i class=\"icofont-simple-right\"></i></a>
                </li>
                ";
            }
            // line 227
            echo "            </ul>
        </nav>
        
    ";
        }
        // line 231
        echo "
</div><!-- /.col-lg-9 -->";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-results/hotel-results.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 231,  583 => 227,  575 => 224,  571 => 223,  568 => 222,  559 => 218,  555 => 217,  552 => 216,  550 => 215,  547 => 214,  540 => 212,  533 => 208,  527 => 207,  522 => 206,  515 => 202,  509 => 201,  504 => 200,  502 => 199,  499 => 198,  495 => 197,  492 => 196,  488 => 194,  480 => 191,  477 => 190,  467 => 185,  464 => 184,  462 => 183,  459 => 182,  457 => 181,  452 => 178,  449 => 174,  447 => 173,  444 => 172,  442 => 171,  439 => 170,  436 => 169,  433 => 168,  431 => 167,  428 => 166,  400 => 146,  383 => 134,  373 => 126,  359 => 125,  352 => 120,  348 => 118,  346 => 115,  338 => 113,  335 => 112,  333 => 111,  329 => 109,  327 => 108,  324 => 107,  307 => 106,  300 => 101,  293 => 96,  291 => 95,  288 => 94,  279 => 90,  276 => 89,  274 => 88,  271 => 87,  267 => 85,  265 => 84,  260 => 82,  257 => 81,  255 => 80,  246 => 77,  244 => 76,  241 => 75,  236 => 72,  224 => 69,  220 => 68,  217 => 67,  215 => 66,  211 => 65,  204 => 60,  190 => 59,  179 => 54,  176 => 53,  173 => 52,  170 => 51,  167 => 50,  165 => 49,  161 => 47,  159 => 46,  156 => 45,  139 => 44,  135 => 42,  126 => 38,  123 => 37,  121 => 36,  117 => 35,  106 => 30,  104 => 29,  101 => 28,  99 => 27,  96 => 26,  94 => 25,  90 => 23,  88 => 22,  85 => 21,  83 => 20,  79 => 18,  75 => 17,  68 => 13,  63 => 11,  56 => 7,  53 => 6,  51 => 5,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- 

    <a href=\"{{'hotel'|page({ slug: model.slug })  }}?{{SearchHandler.getDatesFromUrl()}}\"></a>
-->
{% set currentCurrency = CurrencyHandler.getCurrentCurrency() %}
<div class=\"col-xl-9 col-lg-12 mt-lg-0 d-none d-sm-none d-md-block\">
    <h5 class=\"text-left hotel-result-count pt-2 pb-2\">Hoteles encontrados: {{SearchHandler.getCount()}}</h5>
</div>
<div class=\"col-sm-12 d-block d-sm-none d-flex justify-content-between
    align-items-center mt-3\">
    <h5 class=\"text-left hotel-result-count pt-2 pb-2 mt-3\">Hoteles encontrados: {{SearchHandler.getCount()}}</h5>
    
    <img src=\"{{'navicu/imgs/svg/filter-mobile.svg'|media}}\" alt=\"\">
    
</div>
<div class=\"col-xl-9 col-lg-12 mt-3 mt-lg-0\">
    {% for hotel in result %}
        
        
        {% set model = hotel.getModel() %}

        {% set atributos = model.atributos %}


        {% set arAttributes = hotel.getAttributes() %}
        
        {% set minPrice = hotel.getMinPrice() %}

        {% set defaultPrice = hotel.defaultRegimeMinPrice() %}
        <div class=\"result-link\" data-url=\"{{'hotel'|page({ slug: model.slug })  }}?{{SearchHandler.getDatesFromUrl()}}\">
        
        <div class=\"box-style__1 rt-mb-30 hotel-result-card\">
            <div class=\"hotel-inner-content row\">
                <div class=\"hotel-thumb col-md-4 mb-4 mb-md-0\">
                    <div class=\"hotel-bg rtbgprefix-cover\" style=\"background-image: url({{model.foto_inicio.path}})\">
                        {% if defaultPrice is not null %}
                            <div class=\"default-price text-center d-block d-sm-none \">
                                <img src=\"{{'navicu/imgs/svg/recommended-hotel.svg'|media}}\" class=\"img-fluid\" alt=\"Recomendado\">{{defaultPrice.nombre_regimen}}
                            </div>
                            
                            {% endif %}
                    </div>
                    <div class=\" justify-content-between pt-3  d-none d-sm-none d-md-flex\">
                        {% for atributo in atributos |sort((a, b) => a.pivot.orden <=> b.pivot.orden) %}
                    
                            {% if loop.index0 < 5 and atributo.icon.path is not null %}
                            <div class=\"col\">
                                <span class=\"d-block\">
                                    {% if atributo.icon.path is not null %}
                                    {% set path = atributo.icon.path %}
                                    {% else %}
                                    {% set path = 'navicu/imgs/png/jigsaw.png'|media %}
                                    {% endif %}
                                    <img src=\"{{path}}\" alt=\"{{atributo.nombre}}\" class=\"attribute-icon\">
                                
                                </span>
                            </div>
                            {% endif %}
                        {% endfor  %}
                    </div>
                
                </div><!-- /.hotel-thumb -->
                <div class=\"hotel-text col-md-8\">
                    <div class=\"top mb-4 mb-md-0\">
                        <h5>{{arAttributes.nombre}}
                            {% if arAttributes.estrellas > 0 %}
                            <span class=\"star-rating\">
                                {% for i in 0.. arAttributes.estrellas -1 %}
                                <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\" alt=\"{{atributo.nombre}}\" class=\"hotel-star\">

                                {% endfor %}
                                
                            </span>
                            {% endif %}
                        </h5>
                        {% set city = model.city %}
                        <p class=\"hotel-card-city\">{{city.name}}, {{city.state.name}}</p>
                        <p class=\"hotel-card-presentation\">

                            {% set numberOfWords = arAttributes.descripcion|split(' ')|length %}

                            {{ str_words(arAttributes.descripcion, 20, \"...\") }}
                            
                            {% if numberOfWords > 19 %}
                            <br><a href=\"#\" class=\"d-none d-sm-none d-md-block\">Leer más</a>
                            {% endif %}

                            {% if defaultPrice is not null %}
                            <div class=\"default-price d-none d-sm-none d-md-block\">
                                <img src=\"{{'navicu/imgs/svg/recommended-icon.svg'|media}}\" class=\"img-fluid\" alt=\"Recomendado\">{{defaultPrice.nombre_regimen}}
                            </div>
                            
                            {% endif %}
                        </p>
                        {% if numberOfWords > 19 %}
                        <p class=\"text-right d-block d-sm-none\">
                            <a href=\"#\">Leer más</a>
                        </p>
                        
                        {% endif %}
                    </div><!-- /.top -->
                    <div class=\"middle-text mb-4 mb-md-0 row\">
                        <div class=\"col-md-8\">
                        
                            <div class=\"justify-content-between  d-flex d-sm-none attribute-container\">
                                {% for atributo in atributos |sort((a, b) => a.pivot.orden <=> b.pivot.orden) %}
                    
                                    {% if loop.index0 < 5 and atributo.icon.path is not null %}
                                    <div class=\"col text-center\">
                                        <span class=\"d-block\">
                                            {% if atributo.icon.path is not null %}
                                            {% set path = atributo.icon.path %}
                                                <img src=\"{{path}}\" alt=\"{{atributo.nombre}}\" class=\"attribute-icon\">
                                            {% else %}
                                            {#
                                                {% set path = 'navicu/imgs/png/jigsaw.png'|media %}
                                            #}
                                            
                                            {% endif %}
                                            
                                        
                                        </span>
                                    </div>
                                    {% endif %}
                                {% endfor  %}
                            </div>
                            
                        </div>
                        <div class=\"right min-price-content col-md-4 text-right d-none d-sm-none d-md-block\">
                                
                                <span class=\"d-block\"></span>
                                <span class=\"d-block\">
                                    <small>Desde</small>
                                    {{minPrice.total_markup}} {{currentCurrency.acronimo}}
                                </span>
                                
                                <button  class=\"hotel-result-button\">Ver Hotel</button>           
                        </div>

                        <div class=\"right min-price-content col-md-4 text-right align-items-center
                        d-flex d-sm-none justify-content-between\">
                                
                            <span class=\"d-none\"></span>
                            <span class=\"d-block\">
                                <small>Desde</small>
                                {{minPrice.total_markup}} {{currentCurrency.acronimo}}
                            </span>
                            
                            <button  class=\"hotel-result-button\">Ver Hotel</button>           
                    </div>

                    </div><!-- /.middle-text -->
                    <div class=\"footer-elements mt-2 d-flex justify-content-md-between align-items-center\">
                        <div class=\"left\">
                            
                        </div><!-- /.left -->
                        <div class=\"right\">
                            
                        </div><!-- /.right -->
                    </div><!-- /.footer-elements -->
                </div><!-- /.hotel-text -->
            </div><!-- /.hotel-inner-content -->
        </div><!-- hotel-result-card -->
    </div>
    {% endfor %}

    {% set iPage = Pagination.getPageFromRequest() %}
    {% set iCount = SearchHandler.getCount() %}
    {% set arPaginationList = Pagination.get(iPage, iCount) %}
    
    {% set paramsForPagination = SearchHandler.getSearchParamUrl() %}
    
    {% if arPaginationList is not empty  %}

        {# 
            and arPaginationList|length > 1    
        #}
        <nav class=\"d-flex justify-content-end\">
            <ul class=\"pagination  rt-paganation\">

                {% if iPage != 1 %}
                
                    {% if paramsForPagination is not empty %}
                    <li class=\"page-item\">
                        <a class=\"pagination-link\" href=\"{{'search'|page({q:'q?'~paramsForPagination})}}&page={{iPage-1}}\">
                            <i class=\"icofont-simple-left\"></i>
                        </a>
                    </li>
                    {% else %}
                    <li class=\"page-item\">
                        <a class=\"pagination-link\" href=\"{{ url_current() }}?page={{ iPage-1 }}\"><i class=\"icofont-simple-left\"></i></a>
                    </li>
                    {% endif %}
                    
                {% endif %}

                {% for arPagination in arPaginationList %}

                    {% if paramsForPagination is not empty %}
                    <li class=\"page-item {{ arPagination.class }}\">
                        <a class=\"pagination-link \" href=\"{{'search'|page({q:'q?'~paramsForPagination})}}&page={{arPagination.value}}\">
                            {{ arPagination.name }}
                        </a>
                    </li>
                    {% else %}
                    <li class=\"page-item {{ arPagination.class }}\">
                        <a class=\"pagination-link \" href=\"{{ url_current() }}?page={{ arPagination.value }} \">
                            {{ arPagination.name }}
                        </a>
                    </li>
                    {% endif %}
                    
                {% endfor %}

                {% if paramsForPagination is not empty %}

                <li class=\"page-item {{iPage ==  arPaginationList|length ? 'disabled' }}\">
                    <a class=\"pagination-link\" href=\"{{'search'|page({q:'q?'~SearchHandler.getSearchParamUrl()})}}&page={{iPage+1}}\"><i class=\"icofont-simple-right\"></i></a>
                </li>

                {% else %}

                <li class=\"page-item {{iPage ==  arPaginationList|length ? 'disabled' }}\">
                    <a class=\"pagination-link\" href=\"{{ url_current() }}?page={{ iPage+1 }}\"><i class=\"icofont-simple-right\"></i></a>
                </li>
                {% endif %}
            </ul>
        </nav>
        
    {% endif %}

</div><!-- /.col-lg-9 -->", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/search-results/hotel-results.htm", "");
    }
}
