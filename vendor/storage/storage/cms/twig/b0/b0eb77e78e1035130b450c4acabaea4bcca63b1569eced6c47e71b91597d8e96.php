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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/partners.htm */
class __TwigTemplate_d38248ed5c5bef51447771baa94ce677d34510d739c780d3ed96571b03c9f6f9 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/partners.htm"));

        // line 1
        echo "<section class=\"brands-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-9 mx-auto text-center\">
                <div class=\"rt-section-title-wrapper\">
                    <h2 class=\"rt-section-title\">
                        Travel partners
                    </h2>
                    <p>
                        Contamos con las mejores alianzas comerciales para hacer de tu viaje una
                        experiencia increíble
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class=\"section-title-spacer\"></div><!-- /.section-title-spacer -->
        <div class=\"row\">
            <div class=\"col-lg-9 mx-auto\">
                <ul class=\"rt-border-brands\">
                    <li class=\"single-border-brands\">
                        <a href=\"#\" class=\" d-block\">
                            <img src=\"";
        // line 22
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/eurobuilding-partner.png");
        echo "\" alt=\"Euro Building\" draggable=\"false\">
                        </a>
                    </li><!-- /.single-border-brands -->
                    <li class=\"single-border-brands\">
                        <a href=\"#\" class=\" d-block\" data-wow-duration=\"1s\">
                            <img src=\"";
        // line 27
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/hesperia-partner.png");
        echo "\" alt=\"Hesperia\" draggable=\"false\">
                        </a>
                    </li><!-- /.single-border-brands -->
                    <li class=\"single-border-brands\">
                        <a href=\"#\" class=\" d-block\" data-wow-duration=\"1.5s\">
                            <img src=\"";
        // line 32
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/ldhoteles-partner.png");
        echo "\" alt=\"Lidotel\" draggable=\"false\">
                        </a>
                    </li><!-- /.single-border-brands -->
                    <li class=\"single-border-brands\">
                        <a href=\"#\" class=\" d-block\" data-wow-duration=\"2s\"> 
                            <img src=\"";
        // line 37
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/sunsol-partner.png");
        echo "\" alt=\"Sunsol\" draggable=\"false\">
                        </a>
                    </li><!-- /.single-border-brands -->
                    <li class=\"single-border-brands\">
                        <a href=\"#\" class=\" d-block\" data-wow-duration=\"2.5s\">
                            <img src=\"";
        // line 42
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/avior-partner.png");
        echo "\" alt=\"Avior\" draggable=\"false\">
                        </a>
                    </li><!-- /.single-border-brands -->
                    <li class=\"single-border-brands\">
                        <a href=\"#\" class=\" d-block\" data-wow-duration=\"3s\">
                            <img src=\"";
        // line 47
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/turpial-partner.png");
        echo "\" alt=\"Turpial\" draggable=\"false\">
                        </a>
                    </li><!-- /.single-border-brands -->
                    <li class=\"single-border-brands\">
                        <a href=\"#\" class=\" d-block\" data-wow-duration=\"3.5s\">
                            <img src=\"";
        // line 52
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/conviasa-partner.png");
        echo "\" alt=\"Conviasa\" draggable=\"false\">
                        </a>
                    </li><!-- /.single-border-brands -->
                    <li class=\"single-border-brands\">
                        <a href=\"#\" class=\" d-block\" data-wow-duration=\"4s\">
                            <img src=\"";
        // line 57
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/png/oasis-partner.png");
        echo "\" alt=\"Lexus\" draggable=\"false\">
                        </a>
                    </li><!-- /.single-border-brands -->
                </ul><!-- /.rt-border-brands -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.containe -->
</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/partners.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  113 => 52,  105 => 47,  97 => 42,  89 => 37,  81 => 32,  73 => 27,  65 => 22,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/partners.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("media" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['media'],
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
