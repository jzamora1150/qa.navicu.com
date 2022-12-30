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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/carousel-post.htm */
class __TwigTemplate_ecec0324ee48d1289142232177f69e1f308850f46768231b8603e3c5605eb51a extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/carousel-post.htm"));

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
            if ( !twig_test_empty((($__internal_compile_0 = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null))) {
                // line 9
                echo "                        ";
                $context["postImg"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, (($__internal_compile_1 = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "path", [], "any", false, false, false, 9);
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
            echo twig_escape_filter($this->env, ($context["postImg"] ?? null), "html", null, true);
            echo "')\">
                        
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-7 item-right\">
                    <div class=\"carousel-text-container d-flex align-items-start flex-column justify-content-between\">
                        <div class=\"rt-section-title-wrapper text-white\" >
                            
    
                            <h2 class=\"rt-section-title\">
                               
                                ";
            // line 24
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "
                            </h2><!-- /.rt-section-title -->
                            
                            
                            <p class=\"pt-3\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getFunction('str_words')->getCallable()("words", Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 29), 25), "html", null, true);
            echo "
                            </p>
                            
                        </div><!-- /.rt-section-title-wrapper -->
                        <div class=\"pt-4\">
                           
                            <a href=\"";
            // line 35
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 35)]);
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
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/carousel-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  102 => 35,  93 => 29,  85 => 24,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  52 => 6,  48 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- style=\"background-image: url({{'images/background/bgshapes_1.png'|media}})\" -->
<section class=\"post-area  rtbgprefix-full bg-hide-md\" >
    <div class=\"container-fluid p-0\">
       <div class=\"deal-carosel-active owl-carousel\">
            {% for post in posts %}
            <div class=\"row single-deal-carosel align-items-center \">
                <div class=\"col-lg-5 item-left pr-0\">
                    {% if post.featured_images[0] is not empty %}
                        {% set postImg = post.featured_images[0].path %}
                    {% else %}
                        {% set postImg = 'images/misc/deal-bg.jpg'|media %}
                    {% endif %}
                    <div class=\"deal-bg\" style=\"background-image: url('{{postImg}}')\">
                        
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class=\"col-lg-7 item-right\">
                    <div class=\"carousel-text-container d-flex align-items-start flex-column justify-content-between\">
                        <div class=\"rt-section-title-wrapper text-white\" >
                            
    
                            <h2 class=\"rt-section-title\">
                               
                                {{ post.title }}
                            </h2><!-- /.rt-section-title -->
                            
                            
                            <p class=\"pt-3\">
                                {{ str_words(post.summary, 25) }}
                            </p>
                            
                        </div><!-- /.rt-section-title-wrapper -->
                        <div class=\"pt-4\">
                           
                            <a href=\"{{ 'single-post'|page({slug: post.slug }) }}\" class=\"btn  btn-nav-v1-outline ml-3\">Leer más</a>
                            
                        </div>
                    </div>
                    
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            {% endfor %}
       </div><!-- /.deal-carosel-active -->
    </div><!-- /.container -->
 </section>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/carousel-post.htm", "");
    }
}
