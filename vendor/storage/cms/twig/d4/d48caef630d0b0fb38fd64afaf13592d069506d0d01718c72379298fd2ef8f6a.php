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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/single-post.htm */
class __TwigTemplate_bbf20fb8657e121b057f9664a0b16be4a6f724591d72f2be636a415c55684ce8 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/single-post.htm"));

        // line 1
        $context["post"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"rt-breadcump rt-breadcump-height blog-banner\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url(";
        // line 4
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/covers/cover-blog.jpg");
        echo ")\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3 class=\"d-block d-sm-none\">
                        <a class=\"\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">←</a> 
                        Blog
                    </h3>

                    <h3 class=\"d-none d-sm-block\">
                        Blog
                    </h3>

                    ";
        // line 34
        echo "                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->


<section class=\"blog-content-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-9 col-lg-10 mx-auto\">
                <article class=\"single-blg-post @@blog-class\">
                    <a href=\"#\" class=\"post-thumbnail\">
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, (($__internal_compile_0 = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 47)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "path", [], "any", false, false, false, 47), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <div class=\"entry-content\">
                        <header class=\"entry-header\">
                            <h2 class=\"entry-title\">
                                ";
        // line 52
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 52), "html", null, true);
        echo "
                            </h2>
                            
                        </header><!-- .entry header -->
                        <p>
                            ";
        // line 57
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, false, 57), "html", null, true);
        echo "
                        </p>

                        ";
        // line 60
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 60);
        echo "
                        ";
        // line 73
        echo "                    </div><!-- .entry content -->
                </article><!-- ./artice single blog -->
            </div><!-- ./column -->
            <div class=\"col-xl-3 col-lg-4 d-lg-block d-none\">
                <div class=\"sidebar-group\">
                    
                    <div class=\"widget widget_categories\">
                        <h2 class=\"widget-title\">Categorias</h2>
                        <ul>
                            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 83
            echo "        
                            <li><a href=\"";
            // line 84
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-category", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 84)]);
            echo "\">
                                ";
            // line 85
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 85), "html", null, true);
            echo "
                            </a> <span>(";
            // line 86
            echo twig_escape_filter($this->env, twig_length_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["category"], "posts", [], "any", false, false, false, 86)), "html", null, true);
            echo ")</span></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                        </ul>
                    </div><!-- ./  single widget -->
                    ";
        // line 132
        echo "                </div><!-- ./sidebar -->
            </div>
        </div><!-- ./row -->
    </div><!-- ./ copntainer -->
</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/single-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 132,  142 => 88,  134 => 86,  130 => 85,  126 => 84,  123 => 83,  119 => 82,  108 => 73,  104 => 60,  98 => 57,  90 => 52,  82 => 47,  67 => 34,  56 => 11,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = blogPost.post %}

<div class=\"rt-breadcump rt-breadcump-height blog-banner\">
    <div class=\"rt-page-bg rtbgprefix-cover\" style=\"background-image: url({{'navicu/imgs/jpg/covers/cover-blog.jpg'|media}})\">
    </div><!-- /.rt-page-bg -->
    <div class=\"container\">
        <div class=\"row rt-breadcump-height\">
            <div class=\"col-12\">
                <div class=\"breadcrumbs-content\">
                    <h3 class=\"d-block d-sm-none\">
                        <a class=\"\" href=\"{{'blog'|page}}\">←</a> 
                        Blog
                    </h3>

                    <h3 class=\"d-none d-sm-block\">
                        Blog
                    </h3>

                    {#
                    <div class=\"breadcrumbs\">
                        <span class=\"divider\"><i class=\"icofont-home\"></i></span>
                        <a href=\"#\" title=\"Home\">Home</a>
                        <span class=\"divider\">
                            <i class=\"icofont-simple-right\"></i>
                        </span>
                        <a href=\"#\" title=\"Blog\">Blog</a>

                        <span class=\"divider\">
                            <i class=\"icofont-simple-right\"></i>
                        </span>
                        {{post.title}}
                    </div><!-- /.breadcrumbs -->
                    #}
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->


<section class=\"blog-content-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-9 col-lg-10 mx-auto\">
                <article class=\"single-blg-post @@blog-class\">
                    <a href=\"#\" class=\"post-thumbnail\">
                        <img src=\"{{post.featured_images[0].path}}\" alt=\"\">
                    </a>
                    <div class=\"entry-content\">
                        <header class=\"entry-header\">
                            <h2 class=\"entry-title\">
                                {{post.title}}
                            </h2>
                            
                        </header><!-- .entry header -->
                        <p>
                            {{post.excerpt}}
                        </p>

                        {{ post.content_html|raw }}
                        {#
                        <footer class=\"entry-footer\">
                        
                            <ul class=\"rt-social rt-circle-style\">
                                <li><span><strong>SHARE:</strong></span></li>
                                <li><a href=\"#\"><i class=\"icofont-facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"icofont-twitter\"></i></i></a></li>
                                <li><a href=\"#\"><i class=\"icofont-linkedin\"></i></a></li>
                                <li><a href=\"#\"><i class=\"icofont-google-plus\"></i></a></li>
                            </ul>
                        </footer><!-- ./ footer -->
                        #}
                    </div><!-- .entry content -->
                </article><!-- ./artice single blog -->
            </div><!-- ./column -->
            <div class=\"col-xl-3 col-lg-4 d-lg-block d-none\">
                <div class=\"sidebar-group\">
                    
                    <div class=\"widget widget_categories\">
                        <h2 class=\"widget-title\">Categorias</h2>
                        <ul>
                            {% for category  in blogCategories.categories %}
        
                            <li><a href=\"{{ 'blog-category'|page({slug: category.slug }) }}\">
                                {{category.name}}
                            </a> <span>({{category.posts|length}})</span></li>
                            {% endfor %}
                        </ul>
                    </div><!-- ./  single widget -->
                    {#
                    <div class=\"widget\">
                        <h2 class=\"widget-title\">Relacionados</h2>
                        <div class=\"rt-widget-recent-posts\">
                            <ul class=\"posts\">
                                <li>
                                    <a href=\"#\"><img src=\"assets/images/all-img/rcp-1.jpg\" alt=\"Make your everyday life easy from now\" class=\"widget-posts-img\"></a>
                                    <div class=\"widget-posts-descr\">
                                        <a href=\"#\" class=\"title\">Base Tendriling
                                        Travel Expenses</a>
                                        <div class=\"date\">December 2, 2018</div>
                                    </div>
                                </li><!-- ./ single post -->
                                <li>
                                    <a href=\"#\"><img src=\"assets/images/all-img/rcp-2.jpg\" alt=\"Make your everyday life easy from now\" class=\"widget-posts-img\"></a>
                                    <div class=\"widget-posts-descr\">
                                        <a href=\"#\" class=\"title\">Travel Pre And
                                        Post Internet</a>
                                        <div class=\"date\">2 days ago</div>
                                    </div>
                                </li><!-- ./ single post -->
                                <li>
                                    <a href=\"#\"><img src=\"assets/images/all-img/rcp-3.jpg\" alt=\"Make your everyday life easy from now\" class=\"widget-posts-img\"></a>
                                    <div class=\"widget-posts-descr\">
                                        <a href=\"#\" class=\"title\">Travelling Tips
                                        for the Disabled</a>
                                        <div class=\"date\">2 days ago</div>
                                    </div>
                                </li><!-- ./ single post -->
                                <li>
                                    <a href=\"#\"><img src=\"assets/images/all-img/rcp-4.jpg\" alt=\"Make your everyday life easy from now\" class=\"widget-posts-img\"></a>
                                    <div class=\"widget-posts-descr\">
                                        <a href=\"#\" class=\"title\">15 Travelers
                                        That I Have Met</a>
                                        <div class=\"date\">December 2, 2018</div>
                                    </div>
                                </li><!-- ./ single post -->
                            </ul>

                        </div>
                    </div><!-- ./  single widget -->
                    #}
                </div><!-- ./sidebar -->
            </div>
        </div><!-- ./row -->
    </div><!-- ./ copntainer -->
</section>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/pages/single-post.htm", "");
    }
}
