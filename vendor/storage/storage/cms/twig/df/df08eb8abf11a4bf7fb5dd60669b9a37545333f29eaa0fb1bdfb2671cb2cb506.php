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

/* /home/qvqjt6czwzdr/uat.navicu.com/plugins/suresoftware/powerseo/components/cmspage/default.htm */
class __TwigTemplate_39020bbfb3d1e561a9c37c5c1b072dafa73c8b9b7cda28c91965fb7849a2861f extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/plugins/suresoftware/powerseo/components/cmspage/default.htm"));

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
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, true, 8)) {
                // line 9
                echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, true, 12)) {
                // line 13
                echo "        <title>";
                echo $this->env->getFilter('generateTitle')->getCallable()($this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, true, 13), 13, $this->source));
                echo "</title>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, true, 16)) {
                // line 17
                echo "        <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\">
    ";
            }
            // line 19
            echo "
    ";
            // line 20
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, true, 20)) {
                // line 21
                echo "        <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\">
    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, true, 24)) {
                // line 25
                echo "        <link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_index", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_follow", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">

    ";
            // line 32
            echo $this->env->getFilter('otherMetaTags')->getCallable()("");
            echo "

    ";
            // line 34
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, true, 34)) {
                // line 35
                echo "        <meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 37
            echo "
    ";
            // line 38
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, true, 38)) {
                // line 39
                echo "        <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 41
            echo "
    ";
            // line 42
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, true, 42)) {
                // line 43
                echo "        <meta property=\"og:site_name\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 45
            echo "
    ";
            // line 46
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, true, 46)) {
                // line 47
                echo "        <meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\" />
    ";
            }
            // line 49
            echo "
    ";
            // line 50
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, true, 50)) {
                // line 51
                echo "        <meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
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
        return "/home/qvqjt6czwzdr/uat.navicu.com/plugins/suresoftware/powerseo/components/cmspage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 53,  177 => 51,  175 => 50,  172 => 49,  166 => 47,  164 => 46,  161 => 45,  155 => 43,  153 => 42,  150 => 41,  144 => 39,  142 => 38,  139 => 37,  133 => 35,  131 => 34,  126 => 32,  119 => 30,  116 => 29,  110 => 27,  104 => 25,  102 => 24,  99 => 23,  93 => 21,  91 => 20,  88 => 19,  82 => 17,  80 => 16,  77 => 15,  71 => 13,  69 => 12,  66 => 11,  60 => 9,  58 => 8,  55 => 7,  51 => 5,  49 => 2,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/plugins/suresoftware/powerseo/components/cmspage/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "placeholder" => 2);
        static $filters = array("escape" => 9, "generateTitle" => 13, "generateCanonicalUrl" => 27, "raw" => 32, "otherMetaTags" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'placeholder'],
                ['escape', 'generateTitle', 'generateCanonicalUrl', 'raw', 'otherMetaTags'],
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
