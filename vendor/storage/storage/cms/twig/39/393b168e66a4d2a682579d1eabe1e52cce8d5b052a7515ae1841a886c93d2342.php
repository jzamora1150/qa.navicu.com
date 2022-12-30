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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/carousel-post.htm */
class __TwigTemplate_1668ad17d7ba3c074e26d03321c72f06feb512bdb3f4a828829027b45f1fbbe2 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/carousel-post.htm"));

        // line 1
        echo "<!-- style=\"background-image: url(";
        echo $this->env->getFilter('media')->getCallable()("images/background/bgshapes_1.png");
        echo ")\" -->
<section class=\"post-area  rtbgprefix-full bg-hide-md\" >
    <div class=\"container-fluid p-0\">
       <div class=\"deal-carosel-active owl-carousel\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "            <div class=\"row single-deal-carosel align-items-center \">
                <div class=\"col-lg-5 item-left pr-0\">
                    ";
            // line 8
            if ( !twig_test_empty((($__internal_compile_0 = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null))) {
                // line 9
                echo "                        ";
                $context["postImg"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, (($__internal_compile_1 = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "path", [], "any", false, false, true, 9);
                // line 10
                echo "                    ";
            } else {
                // line 11
                echo "                        ";
                $context["postImg"] = $this->env->getFilter('media')->getCallable()("images/misc/deal-bg.jpg");
                // line 12
                echo "                    ";
            }
            // line 13
            echo "                    <div class=\"deal-bg\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["postImg"] ?? null), 13, $this->source), "html", null, true);
            echo "')\">
                        
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-7 item-right\">
                    <div class=\"carousel-text-container d-flex align-items-start flex-column justify-content-between\">
                        <div class=\"rt-section-title-wrapper text-white\" >
                            
    
                            <h2 class=\"rt-section-title\">
                               
                                ";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
                            </h2><!-- /.rt-section-title -->
                            
                            
                            <p class=\"pt-3\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getFunction('str_words')->getCallable()("words", $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 29), 29, $this->source), 25), "html", null, true);
            echo "
                            </p>
                            
                        </div><!-- /.rt-section-title-wrapper -->
                        <div class=\"pt-4\">
                           
                            <a href=\"";
            // line 35
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 35)]);
            echo "\" class=\"btn  btn-nav-v1-outline ml-3\">Leer más</a>
                            
                        </div>
                    </div>
                    
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "       </div><!-- /.deal-carosel-active -->
    </div><!-- /.container -->
 </section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/carousel-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  104 => 35,  95 => 29,  87 => 24,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  58 => 8,  54 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/carousel-post.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "if" => 8, "set" => 9);
        static $filters = array("media" => 1, "escape" => 13, "page" => 35);
        static $functions = array("str_words" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['media', 'escape', 'page'],
                ['str_words']
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
