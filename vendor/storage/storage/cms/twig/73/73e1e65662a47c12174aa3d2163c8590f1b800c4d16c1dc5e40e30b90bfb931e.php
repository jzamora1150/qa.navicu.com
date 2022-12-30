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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/search-results/hotel-results.htm */
class __TwigTemplate_7889990d35667ec9c19048bfbfa4d0a12c2465468af40dd1056f24b23d5129cf extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/search-results/hotel-results.htm"));

        // line 1
        echo "<!-- 

    <a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hotel", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["model"] ?? null), "slug", [], "any", false, false, true, 3)]);
        echo "?";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getDatesFromUrl", [], "method", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "\"></a>
-->
";
        // line 5
        $context["currentCurrency"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CurrencyHandler"] ?? null), "getCurrentCurrency", [], "method", false, false, true, 5);
        // line 6
        echo "<div class=\"col-xl-9 col-lg-12 mt-lg-0 d-none d-sm-none d-md-block\">
    <h5 class=\"text-left hotel-result-count pt-2 pb-2\">Hoteles encontrados: ";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getCount", [], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h5>
</div>
<div class=\"col-sm-12 d-block d-sm-none d-flex justify-content-between
    align-items-center mt-3\">
    <h5 class=\"text-left hotel-result-count pt-2 pb-2 mt-3\">Hoteles encontrados: ";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getCount", [], "method", false, false, true, 11), 11, $this->source), "html", null, true);
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
            $context["model"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "getModel", [], "method", false, false, true, 20);
            // line 21
            echo "
        ";
            // line 22
            $context["atributos"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["model"] ?? null), "atributos", [], "any", false, false, true, 22);
            // line 23
            echo "

        ";
            // line 25
            $context["arAttributes"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "getAttributes", [], "method", false, false, true, 25);
            // line 26
            echo "        
        ";
            // line 27
            $context["minPrice"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "getMinPrice", [], "method", false, false, true, 27);
            // line 28
            echo "
        ";
            // line 29
            $context["defaultPrice"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["hotel"], "defaultRegimeMinPrice", [], "method", false, false, true, 29);
            // line 30
            echo "        <div class=\"result-link\" data-url=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("hotel", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["model"] ?? null), "slug", [], "any", false, false, true, 30)]);
            echo "?";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getDatesFromUrl", [], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">
        
        <div class=\"box-style__1 rt-mb-30 hotel-result-card\">
            <div class=\"hotel-inner-content row\">
                <div class=\"hotel-thumb col-md-4 mb-4 mb-md-0\">
                    <div class=\"hotel-bg rtbgprefix-cover\" style=\"background-image: url(";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["model"] ?? null), "foto_inicio", [], "any", false, false, true, 35), "path", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["defaultPrice"] ?? null), "nombre_regimen", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["atributos"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["a"] ?? null), "pivot", [], "any", false, false, true, 44), "orden", [], "any", false, false, true, 44) <=> Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["b"] ?? null), "pivot", [], "any", false, false, true, 44), "orden", [], "any", false, false, true, 44)); }));
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
                if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 46) < 5) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, true, 46), "path", [], "any", false, false, true, 46)))) {
                    // line 47
                    echo "                            <div class=\"col\">
                                <span class=\"d-block\">
                                    ";
                    // line 49
                    if ( !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, true, 49), "path", [], "any", false, false, true, 49))) {
                        // line 50
                        echo "                                    ";
                        $context["path"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, true, 50), "path", [], "any", false, false, true, 50);
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
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["path"] ?? null), 54, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "nombre", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arAttributes"] ?? null), "nombre", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
                            ";
            // line 66
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arAttributes"] ?? null), "estrellas", [], "any", false, false, true, 66) > 0)) {
                // line 67
                echo "                            <span class=\"star-rating\">
                                ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arAttributes"] ?? null), "estrellas", [], "any", false, false, true, 68) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 69
                    echo "                                <img src=\"";
                    echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["atributo"] ?? null), "nombre", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
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
            $context["city"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["model"] ?? null), "city", [], "any", false, false, true, 76);
            // line 77
            echo "                        <p class=\"hotel-card-city\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["city"] ?? null), "name", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["city"] ?? null), "state", [], "any", false, false, true, 77), "name", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</p>
                        <p class=\"hotel-card-presentation\">

                            ";
            // line 80
            $context["numberOfWords"] = twig_length_filter($this->env, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arAttributes"] ?? null), "descripcion", [], "any", false, false, true, 80), 80, $this->source), " "));
            // line 81
            echo "
                            ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getFunction('str_words')->getCallable()("words", $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["arAttributes"] ?? null), "descripcion", [], "any", false, false, true, 82), 82, $this->source), 20, "..."), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["defaultPrice"] ?? null), "nombre_regimen", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["atributos"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["a"] ?? null), "pivot", [], "any", false, false, true, 106), "orden", [], "any", false, false, true, 106) <=> Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["b"] ?? null), "pivot", [], "any", false, false, true, 106), "orden", [], "any", false, false, true, 106)); }));
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
                if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 108) < 5) &&  !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, true, 108), "path", [], "any", false, false, true, 108)))) {
                    // line 109
                    echo "                                    <div class=\"col text-center\">
                                        <span class=\"d-block\">
                                            ";
                    // line 111
                    if ( !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, true, 111), "path", [], "any", false, false, true, 111))) {
                        // line 112
                        echo "                                            ";
                        $context["path"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, true, 112), "path", [], "any", false, false, true, 112);
                        // line 113
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["path"] ?? null), 113, $this->source), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "nombre", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["minPrice"] ?? null), "total_markup", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["minPrice"] ?? null), "total_markup", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
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
        $context["iPage"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["Pagination"] ?? null), "getPageFromRequest", [], "method", false, false, true, 167);
        // line 168
        echo "    ";
        $context["iCount"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getCount", [], "method", false, false, true, 168);
        // line 169
        echo "    ";
        $context["arPaginationList"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["Pagination"] ?? null), "get", [0 => ($context["iPage"] ?? null), 1 => ($context["iCount"] ?? null)], "method", false, false, true, 169);
        // line 170
        echo "    
    ";
        // line 171
        $context["paramsForPagination"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getSearchParamUrl", [], "method", false, false, true, 171);
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
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("search", ["q" => ("q?" . $this->sandbox->ensureToStringAllowed(($context["paramsForPagination"] ?? null), 185, $this->source))]);
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
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "class", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
                    echo "\">
                        <a class=\"pagination-link \" href=\"";
                    // line 201
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("search", ["q" => ("q?" . $this->sandbox->ensureToStringAllowed(($context["paramsForPagination"] ?? null), 201, $this->source))]);
                    echo "&page=";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "value", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
                    echo "\">
                            ";
                    // line 202
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "name", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
                    echo "
                        </a>
                    </li>
                    ";
                } else {
                    // line 206
                    echo "                    <li class=\"page-item ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "class", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
                    echo "\">
                        <a class=\"pagination-link \" href=\"";
                    // line 207
                    echo $this->env->getFunction('url_current')->getCallable()("current");
                    echo "?page=";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "value", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
                    echo " \">
                            ";
                    // line 208
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["arPagination"], "name", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
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
                echo (((($context["iPage"] ?? null) == twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["arPaginationList"] ?? null), 217, $this->source)))) ? ("disabled") : (""));
                echo "\">
                    <a class=\"pagination-link\" href=\"";
                // line 218
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("search", ["q" => ("q?" . $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["SearchHandler"] ?? null), "getSearchParamUrl", [], "method", false, false, true, 218), 218, $this->source))]);
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
                echo (((($context["iPage"] ?? null) == twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["arPaginationList"] ?? null), 223, $this->source)))) ? ("disabled") : (""));
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
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/search-results/hotel-results.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 231,  585 => 227,  577 => 224,  573 => 223,  570 => 222,  561 => 218,  557 => 217,  554 => 216,  552 => 215,  549 => 214,  542 => 212,  535 => 208,  529 => 207,  524 => 206,  517 => 202,  511 => 201,  506 => 200,  504 => 199,  501 => 198,  497 => 197,  494 => 196,  490 => 194,  482 => 191,  479 => 190,  469 => 185,  466 => 184,  464 => 183,  461 => 182,  459 => 181,  454 => 178,  451 => 174,  449 => 173,  446 => 172,  444 => 171,  441 => 170,  438 => 169,  435 => 168,  433 => 167,  430 => 166,  402 => 146,  385 => 134,  375 => 126,  361 => 125,  354 => 120,  350 => 118,  348 => 115,  340 => 113,  337 => 112,  335 => 111,  331 => 109,  329 => 108,  326 => 107,  309 => 106,  302 => 101,  295 => 96,  293 => 95,  290 => 94,  281 => 90,  278 => 89,  276 => 88,  273 => 87,  269 => 85,  267 => 84,  262 => 82,  259 => 81,  257 => 80,  248 => 77,  246 => 76,  243 => 75,  238 => 72,  226 => 69,  222 => 68,  219 => 67,  217 => 66,  213 => 65,  206 => 60,  192 => 59,  181 => 54,  178 => 53,  175 => 52,  172 => 51,  169 => 50,  167 => 49,  163 => 47,  161 => 46,  158 => 45,  141 => 44,  137 => 42,  128 => 38,  125 => 37,  123 => 36,  119 => 35,  108 => 30,  106 => 29,  103 => 28,  101 => 27,  98 => 26,  96 => 25,  92 => 23,  90 => 22,  87 => 21,  85 => 20,  81 => 18,  77 => 17,  70 => 13,  65 => 11,  58 => 7,  55 => 6,  53 => 5,  46 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/search-results/hotel-results.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 5, "for" => 17, "if" => 36);
        static $filters = array("page" => 3, "escape" => 3, "media" => 13, "sort" => 44, "length" => 80, "split" => 80);
        static $functions = array("range" => 68, "str_words" => 82, "url_current" => 191);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['page', 'escape', 'media', 'sort', 'length', 'split'],
                ['range', 'str_words', 'url_current']
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
