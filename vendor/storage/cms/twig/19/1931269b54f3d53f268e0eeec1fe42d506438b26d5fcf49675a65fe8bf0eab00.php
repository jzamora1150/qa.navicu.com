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

/* /home/desarrollo/Documents/Dev/navicu.com/plugins/suresoftware/powerseo/components/cmspage/default.htm */
class __TwigTemplate_618e5914a6491272371f04902d3d0b19df71421be1980964cf9a3b187410ee54 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/plugins/suresoftware/powerseo/components/cmspage/default.htm"));

        // line 1
        if (($context["hasBlog"] ?? null)) {
            // line 2
            echo "    ";
            $context['__placeholder_meta_default_contents'] = null;            ob_start();            // line 3
            echo "
    ";
            $context['__placeholder_meta_default_contents'] = ob_get_clean();            // line 2
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('meta', $context['__placeholder_meta_default_contents']);
            unset($context['__placeholder_meta_default_contents']);            // line 5
            echo "
";
        } else {
            // line 7
            echo "
    ";
            // line 8
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, false, 8)) {
                // line 9
                echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, false, 9), "html", null, true);
                echo "\" />
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, false, 12)) {
                // line 13
                echo "        <title>";
                echo $this->env->getFilter('generateTitle')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, false, 13));
                echo "</title>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, false, 16)) {
                // line 17
                echo "        <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
    ";
            }
            // line 19
            echo "
    ";
            // line 20
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, false, 20)) {
                // line 21
                echo "        <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, false, 24)) {
                // line 25
                echo "        <link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, false, 25), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 27
                echo "        ";
                echo $this->env->getFilter('generateCanonicalUrl')->getCallable()("");
                echo "
    ";
            }
            // line 29
            echo "
    <meta name=\"robots\" content=\"";
            // line 30
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_index", [], "any", false, false, false, 30), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_follow", [], "any", false, false, false, 30), "html", null, true);
            echo "\">

    ";
            // line 32
            echo $this->env->getFilter('otherMetaTags')->getCallable()("");
            echo "

    ";
            // line 34
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, false, 34)) {
                // line 35
                echo "        <meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, false, 35), "html", null, true);
                echo "\" />
    ";
            }
            // line 37
            echo "
    ";
            // line 38
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, false, 38)) {
                // line 39
                echo "        <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, false, 39), "html", null, true);
                echo "\" />
    ";
            }
            // line 41
            echo "
    ";
            // line 42
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, false, 42)) {
                // line 43
                echo "        <meta property=\"og:site_name\" content=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, false, 43), "html", null, true);
                echo "\" />
    ";
            }
            // line 45
            echo "
    ";
            // line 46
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, false, 46)) {
                // line 47
                echo "        <meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, false, 47), "html", null, true);
                echo "\" />
    ";
            }
            // line 49
            echo "
    ";
            // line 50
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, false, 50)) {
                // line 51
                echo "        <meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, false, 51), "html", null, true);
                echo "\" />
    ";
            }
            // line 53
            echo "
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/plugins/suresoftware/powerseo/components/cmspage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 53,  175 => 51,  173 => 50,  170 => 49,  164 => 47,  162 => 46,  159 => 45,  153 => 43,  151 => 42,  148 => 41,  142 => 39,  140 => 38,  137 => 37,  131 => 35,  129 => 34,  124 => 32,  117 => 30,  114 => 29,  108 => 27,  102 => 25,  100 => 24,  97 => 23,  91 => 21,  89 => 20,  86 => 19,  80 => 17,  78 => 16,  75 => 15,  69 => 13,  67 => 12,  64 => 11,  58 => 9,  56 => 8,  53 => 7,  49 => 5,  47 => 2,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if hasBlog %}
    {% placeholder meta default %}

    {% endplaceholder %}

{% else %}

    {% if __SELF__.redirect_url %}
        <meta http-equiv=\"refresh\" content=\"0; url={{__SELF__.redirect_url}}\" />
    {% endif %}

    {% if __SELF__.seo_title %}
        <title>{{__SELF__.seo_title | generateTitle}}</title>
    {% endif %}

    {% if __SELF__.seo_description %}
        <meta name=\"description\" content=\"{{__SELF__.seo_description}}\">
    {% endif %}

    {% if __SELF__.seo_keywords %}
        <meta name=\"keywords\" content=\"{{__SELF__.seo_keywords}}\">
    {% endif %}

    {% if __SELF__.canonical_url %}
        <link rel=\"canonical\" href=\"{{__SELF__.canonical_url}}\" />
    {% else %}
        {{ '' | generateCanonicalUrl}}
    {% endif %}

    <meta name=\"robots\" content=\"{{__SELF__.robot_index}},{{__SELF__.robot_follow}}\">

    {{ ''|otherMetaTags|raw }}

    {% if __SELF__.ogTitle %}
        <meta property=\"og:title\" content=\"{{ __SELF__.ogTitle }}\" />
    {% endif %}

    {% if __SELF__.ogUrl %}
        <meta property=\"og:url\" content=\"{{ __SELF__.ogUrl }}\" />
    {% endif %}

    {% if __SELF__.ogSiteName %}
        <meta property=\"og:site_name\" content=\"{{ __SELF__.ogSiteName }}\" />
    {% endif %}

    {% if __SELF__.ogDescription %}
        <meta property=\"og:description\" content=\"{{ __SELF__.ogDescription }}\" />
    {% endif %}

    {% if __SELF__.ogFbAppId %}
        <meta property=\"fb:app_id\" content=\"{{ __SELF__.ogFbAppId  }}\" />
    {% endif %}

{% endif %}
", "/home/desarrollo/Documents/Dev/navicu.com/plugins/suresoftware/powerseo/components/cmspage/default.htm", "");
    }
}
