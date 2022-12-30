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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/hotel.htm */
class __TwigTemplate_342ac9c5ed967a6d5dad2074bc5f3c3457558094b1c8c4f34f9aad7b8450dee2 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/hotel.htm"));

        // line 1
        $context["hotel"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["HotelPage"] ?? null), "getHotel", [], "method", false, false, true, 1);
        echo " 

";
        // line 3
        $context["currentCurrency"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["CurrencyHandler"] ?? null), "getCurrentCurrency", [], "method", false, false, true, 3);
        // line 4
        echo "
<div class=\"rt-breadcump rt-breadcump-height d-none d-sm-block\">
    <div class=\"rt-page-bg rtbgprefix-cover rtbgprefix-cover-room\" style=\"background-image: url(";
        // line 6
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/covers/cover-hoteles.jpg");
        echo ")\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "nombre", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</h3>
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->
<section class=\"content-area\" id=\"hotel-main-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 mx-auto mt-5 mt-lg-0 pb-4\">
                <div class=\"hotel-inner-content landing-hotel-inner-content\">
                    <h5 class=\"f-size-18 rt-medium\">";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "nombre", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "city", [], "any", false, false, true, 23), "name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</h5>
                     <p>
                        ";
        // line 25
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "estrellas", [], "any", false, false, true, 25) > 0)) {
            // line 26
            echo "                        <span class=\"star-rating\">
                            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "estrellas", [], "any", false, false, true, 27) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 28
                echo "                            <img src=\"";
                echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["atributo"] ?? null), "nombre", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\" class=\"hotel-star\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                            
                        </span>
                        ";
        }
        // line 33
        echo "
                    </p>
                    <p class=\"hotel-description f-size-14 text-333\">";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "descripcion", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "</p>
                    ";
        // line 36
        $context["atributos"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "atributos", [], "any", false, false, true, 36);
        // line 37
        echo "                    
                    <div class=\"d-flex flex-wrap pt-3\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["atributos"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["a"] ?? null), "pivot", [], "any", false, false, true, 39), "orden", [], "any", false, false, true, 39) <=> Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["b"] ?? null), "pivot", [], "any", false, false, true, 39), "orden", [], "any", false, false, true, 39)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["atributo"]) {
            // line 40
            echo "                       
                        <div class=\"pr-4 d-flex align-items-center\">
                            <span class=\"d-block\">
                                ";
            // line 43
            if ( !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, true, 43), "path", [], "any", false, false, true, 43))) {
                // line 44
                echo "                                    ";
                $context["path"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, true, 44), "path", [], "any", false, false, true, 44);
                // line 45
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["path"] ?? null), 45, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "nombre", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "\" class=\"attribute-icon\">
                                    
                               
                                ";
            }
            // line 49
            echo "                                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "nombre", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
                                
                            </span>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atributo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </div>
                </div><!-- /.hotel-text -->
            </div><!-- /.col-lg-5 -->
            <div class=\"col-lg-12 mx-auto d-none d-sm-block\">
                <div class=\"rt-duel-slider-main rt-mb-30\">
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "galeria", [], "any", false, false, true, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 60
            echo "                    <div class=\"single-main rtbgprefix-cover\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "')\">
                        
                    </div><!-- /.single-main -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    
                </div><!-- /.rt-duel-slider-main -->
                <div class=\"rt-duel-slider-thumb\">
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "galeria", [], "any", false, false, true, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 68
            echo "                        <div class=\"single--thumb rtbgprefix-cover\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "')\"></div><!-- /.single-thumb -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    
                    
                </div><!-- /.rt-duel-slider-thumb -->
            </div><!-- /.col-lg-7 -->
            <div class=\"col-lg-10 mx-auto d-block d-sm-none\">
                    <div class=\"tiny-slider\">
                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "galeria", [], "any", false, false, true, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 77
            echo "                        <div class=\"mobile-hotel-gallery-item\">
                            
                            <img class=\"img-fluid\" src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "\">
                           
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </div>
            </div>
        </div><!-- /.row -->
        <div class=\"row\">
            <div class=\"col-12 pt-4\">
                <div class=\"hotel-tabs\">
                    <div class=\"tab-content\" id=\"myTabContent\">
                        <div class=\"tab-pane fade show active\" id=\"rt-itm_1\" role=\"tabpanel\" aria-labelledby=\"rt-itm_1-tab\">
                            <div class=\"flight-list-box rt-mb-30\">
                                <div class=\"inner-content rt-pl-15 hotel-information-raw\">
                                    ";
        // line 93
        echo $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "informacion", [], "any", false, false, true, 93), 93, $this->source);
        echo "
                                </div><!-- /.inner-content -->
                            </div><!-- /.flight-list-box -->
                            <div class=\"col-md-12  justify-content-between d-flex d-sm-none\" id=\"edit-dates-container\">
                                ";
        // line 97
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dates", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo " 
                                <span>editar 
                                    <a  data-toggle=\"collapse\" href=\"#search-room-container\">
                                        <img src=\"";
        // line 100
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/edit-mobile.svg");
        echo "\" alt=\"\">
                                    </a>
                                </span>
                            </div>
                            <div class=\"rt-mb-30 collapse d-sm-none d-md-block\" id=\"search-room-container\">
                                <div class=\"inner-content rt-pl-15\">
                                    <form class=\"hotel-search-bar\" id=\"hotel-dates-form\">
                                    <ul class=\"rt-list d-flex flex-lg-row flex-column justify-content-start align-items-center\">

                                        <li class=\"rt-pt-8 col-md-3 d-flex align-items-center\"> 
                                            <h5>Elige tus fechas de alojamiento</h5>
                                        </li>
                                        <li class=\"rt-pt-8 col-md-5 rt-input-group\">
                                            <div class=\"single-input w-100\">
                                                <input type=\"text\" autocomplete=\"off\" onkeypress=\"return false;\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dates", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "\" id=\"calendar-input\" name=\"dates\"
                                                    class=\"form-control rt-date-picker has-icon calendar-input\" placeholder=\"Elige tus fechas\">
                                                <span class=\"input-iconbadge\"><i class=\"icofont-ui-calendar\"></i></span>
                                                </div>
                                        </li> 
                                            <li class=\"rt-pt-8 col-md-3 text-center\">
                                                <input type=\"hidden\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "slug", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "\" name=\"slug\">
                                            <button type=\"submit\" class=\"change-dates-button\">Modificar fechas</button>
                                            </li>
                                    </ul>
                                    </form>
                                </div>
                            </div>
                            <div class=\"box-style__1 rt-light-gray rt-mb-30 rooms-main-container\">
                                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "habitaciones", [], "any", false, false, true, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["habitacion"]) {
            // line 129
            echo "
                                ";
            // line 130
            $context["pricesArray"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["HotelPage"] ?? null), "getRoomPrices", [0 => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "id", [], "any", false, false, true, 130)], "method", false, false, true, 130);
            echo " 

                                
                                ";
            // line 133
            $context["minPrice"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["pricesArray"] ?? null), "min_price", [], "any", false, false, true, 133);
            // line 134
            echo "                                
                                <!-- Button trigger modal -->
                                <!-- Modal -->
                                
                                <div class=\"row grey-room-body\">
                                    <div class=\"col-md-5 col-lg-3 pl-0\" id=\"room-";
            // line 139
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "id", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "-left-side\">
                                        
                                       
                                        <div class=\"rtbgprefix-cover-room px-3\" 
                                        style=\"background-image: url(";
            // line 143
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "foto_portada", [], "any", false, false, true, 143), "path", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo ")\"></div><!-- /.hote-room -->
                                            
                                    </div><!-- /.col-md-3 -->
                                    <div class=\"col-md-12 col-lg-9 pb-4\" id=\"room-";
            // line 146
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "id", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "-right-side\"> 
                                        
                                        <div class=\"row\" >
                                            <div class=\"col-lg-12 col-md-6 room-info-container pt-4\">
                                                <h5 class=\"\">";
            // line 150
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "nombre", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo " <small class=\"room-capacity\">Capacidad para ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "capacidad", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo " personas</small></h5>
                                                <p>";
            // line 151
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "descripcion", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo " </p> 
                                            </div><!-- /.col-lg-12 -->
                                            
                                            <div class=\"col-lg-9 d-flex flex-wrap pt-3\">
                                                ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "atributos", [], "any", false, false, true, 155), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["a"] ?? null), "pivot", [], "any", false, false, true, 155), "orden", [], "any", false, false, true, 155) <=> Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["b"] ?? null), "pivot", [], "any", false, false, true, 155), "orden", [], "any", false, false, true, 155)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["atributo"]) {
                // line 156
                echo "                                               
                                                <div class=\"col\">
                                                    <span class=\"d-block\">
                                                        ";
                // line 159
                if ( !(null === Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, true, 159), "path", [], "any", false, false, true, 159))) {
                    // line 160
                    echo "                                                            ";
                    $context["path"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "icon", [], "any", false, false, true, 160), "path", [], "any", false, false, true, 160);
                    // line 161
                    echo "                                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["path"] ?? null), 161, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["atributo"], "nombre", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
                    echo "\" class=\"attribute-icon\">
                                                        ";
                }
                // line 163
                echo "                                                        
                                                       
                                                    </span>
                                                </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atributo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "                                            </div>
                                            <div class=\"col-lg-3\">
                                                ";
            // line 170
            if ( !twig_test_empty(($context["minPrice"] ?? null))) {
                // line 171
                echo "                                                    
                                                    <div class=\"pb-2 room-min-price-container text-right\">
                                                        
                                                        <span class=\"\">
                                                            <small>Desde</small> ";
                // line 175
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["minPrice"] ?? null), "total_markup", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["currentCurrency"] ?? null), "acronimo", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
                echo "
                                                        </span>
                                                        
                                                    </div>
                                                    <div class=\"text-right\">
                                                        <form class=\"hotel-room-form\" data-roomid=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "id", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
                echo "\">
                                                            <input type=\"hidden\" name=\"dates\" value=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dates", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
                echo "\">
                                                            <input type=\"hidden\" name=\"room_id\" value=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "id", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
                echo "\">
                                                            <input type=\"hidden\" name=\"capacity\" value=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "capacidad", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
                echo "\">
                                                            <!-- data-target=\"#booking-modal\" -->
                                                            <button type=\"submit\" class=\"room-modal-trigger-btn pl-5 pr-5\"
                                                               data-toggle=\"modal\">
                                                                RESERVAR
                                                            </button>
                                                        </form>
                                                        
                                                        
                                                    </div>
                                                        
                                                    
                                                ";
            } else {
                // line 196
                echo "                                                   
                                                    <div class=\"alert rt-alrt-1\">
                                                        <div class=\"media\">
                                                            <i class=\"icofont-close-circled mr-2\"></i>
                                                            <div class=\"media-body mt-1\">
                                                                <h6 class=\"mt-0 rt-semiblod\">No disponible</h6>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                ";
            }
            // line 209
            echo "                                            </div>
                                        </div><!-- /.row -->
                                        
                                    </div><!-- /.col-md-9 -->
                                    <div class=\"col-md-12 py-3\" id=\"room-";
            // line 213
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["habitacion"], "id", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
            echo "-container\">
                                        ";
            // line 217
            echo "                                    </div>
                                </div><!-- /.row -->
                                
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "                            </div><!-- /.flight-list-box -->

                            ";
        // line 223
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "latitud", [], "any", false, false, true, 223) != "") && (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["hotel"] ?? null), "longitud", [], "any", false, false, true, 223) != ""))) {
            // line 224
            echo "                                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = ($context["hotel"] ?? null)            ;
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("hotel/map-section"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 225
            echo "                            ";
        }
        // line 226
        echo "                            ";
        // line 234
        echo "                        </div>
                    </div>
                </div><!-- /.hotel-tabs -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        
        
    </div><!-- /.container -->
</section>


<div class=\"modal-wrapper\">
    <div class=\"modal fade\" id=\"room-booking-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\" id=\"modal-body-container\">
            
        </div>
    </div>
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/hotel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 234,  472 => 226,  469 => 225,  463 => 224,  461 => 223,  457 => 221,  448 => 217,  444 => 213,  438 => 209,  423 => 196,  407 => 183,  403 => 182,  399 => 181,  395 => 180,  385 => 175,  379 => 171,  377 => 170,  373 => 168,  363 => 163,  355 => 161,  352 => 160,  350 => 159,  345 => 156,  341 => 155,  334 => 151,  328 => 150,  321 => 146,  315 => 143,  308 => 139,  301 => 134,  299 => 133,  293 => 130,  290 => 129,  286 => 128,  275 => 120,  266 => 114,  249 => 100,  243 => 97,  236 => 93,  224 => 83,  214 => 79,  210 => 77,  206 => 76,  198 => 70,  189 => 68,  185 => 67,  180 => 64,  169 => 60,  165 => 59,  158 => 54,  146 => 49,  136 => 45,  133 => 44,  131 => 43,  126 => 40,  122 => 39,  118 => 37,  116 => 36,  112 => 35,  108 => 33,  103 => 30,  92 => 28,  88 => 27,  85 => 26,  83 => 25,  76 => 23,  62 => 12,  53 => 6,  49 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/pages/hotel.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 25, "for" => 27, "partial" => 224);
        static $filters = array("media" => 6, "escape" => 12, "sort" => 39, "raw" => 93);
        static $functions = array("range" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'partial'],
                ['media', 'escape', 'sort', 'raw'],
                ['range']
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
