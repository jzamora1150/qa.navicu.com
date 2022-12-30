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

/* /home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/recommended-hotels.htm */
class __TwigTemplate_71250fdc1653206998789c84b59854a50977cdee0ece3cab20f7c3fd803e1784 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/recommended-hotels.htm"));

        // line 1
        echo "<!-- style=\"background-image: url(";
        echo $this->env->getFilter('media')->getCallable()("images/background/portfoliobg.png");
        echo ")\" 
<div class=\"spacer-top\"></div>-->
<section class=\"portfolio-area rt-section-padding rtbgprefix-full bg-hide-md gradinet-bg-md\" >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-8 text-center mx-auto text-center\">
                <div class=\"rt-section-title-wrapper\">
                    <h5>Reserva tu próximo viaje</h5>
                    <h2 class=\"rt-section-title\">
                        
                        Top Hoteles recomendados
                    </h2><!-- /.rt-section-title -->
                    <p class=\"\">Conoce la lista de hoteles recomendados que hemos seleccionado especialmente para ti y vive la mejor experiencia durante tu viaje</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class=\"section-title-spacer\"></div><!-- /.section-title-spacer -->
        <div class=\"row\">
            <div class=\"col-12\">
                <ul class=\"filter-list\">
                    <li data-filter=\".cat-0\" class=\"active\">MARGARITA</li>
                    <li data-filter=\".cat-1\">CARACAS</li>
                    <li data-filter=\".cat-2\">VALENCIA</li>
                    <li data-filter=\".cat-3\">MARACAY</li>
                    <li data-filter=\".cat-4\">BARQUISIMETO</li>
                    <li data-filter=\".cat-5\">MARACAIBO</li>
                </ul>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class=\"row grid\">
            <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 32
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/him-margarita.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$50,2 <br>
                            <small>por noche/por persona</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Hesperia Isla Margarita</h6>
                        <p> <span>
                                <img src=\"";
        // line 44
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 45
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 46
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 47
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 48
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 56
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/ldplus-margarita.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche/por persona</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>LD Plus</h6>
                        <p> <span>
                                <img src=\"";
        // line 68
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 69
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 70
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 71
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 72
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
                <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 80
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/sunsol-ecoland-margarita.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche/por persona</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Sunsol Ecoland</h6>
                        <p> <span>
                                <img src=\"";
        // line 92
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 93
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 94
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 95
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 96
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 104
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/hpa-margarita.jpg");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$45 <br>
                            <small>por noche/por persona</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Hesperia Playa el Agua</h6>
                        <p> <span>
                                <img src=\"";
        // line 116
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 117
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 118
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 119
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 120
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
                <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 128
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/ldpuntaplaya-margarita.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche/por persona</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>LD Punta Playa</h6>
                        <p> <span>
                                <img src=\"";
        // line 140
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 141
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 142
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 143
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 144
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 152
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/tibisay-hotel-boutique.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>LD Punta Playa</h6>
                        <p> <span>
                                <img src=\"";
        // line 164
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 165
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 166
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 167
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 168
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-1\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 176
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/eurobuilding-caracas.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Eurobuilding Hotel & Suites</h6>
                        <p> <span>
                                <img src=\"";
        // line 188
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 189
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 190
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 191
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 192
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-1\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 200
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/altamira-suites.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Altamira Suites</h6>
                        <p> <span>
                                <img src=\"";
        // line 212
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 213
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 214
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 215
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 216
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-1\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 224
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/melia-caracas.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Meliá Caracas</h6>
                        <p> <span>
                                <img src=\"";
        // line 236
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 237
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 238
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 239
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 240
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-2\">
                <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 248
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/hwtc-valencia.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$99 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Hesperia WTC Valencia</h6>
                        <p> <span>
                                <img src=\"";
        // line 260
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 261
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 262
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 263
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 264
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-2\">
                <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 272
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/lidotel-valencia.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Lidotel Valencia</h6>
                        <p> <span>
                                <img src=\"";
        // line 284
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 285
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 286
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 287
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 288
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-2\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 296
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/executive-valencia.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Executive Suites</h6>
                        <p> <span>
                                <img src=\"";
        // line 308
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 309
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 310
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 311
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 312
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-3\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 320
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/hesperia-mcy.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Hesperia Maracay</h6>
                        <p> <span>
                                <img src=\"";
        // line 332
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 333
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 334
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 335
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 336
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-3\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 344
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/marriott-maracay.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Marriot Maracay Golf Resort</h6>
                        <p> <span>
                                <img src=\"";
        // line 356
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 357
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 358
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 359
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 360
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-2\">
                <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 368
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/pipointernacional-maracay.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Pipo Internacional</h6>
                        <p> <span>
                                <img src=\"";
        // line 380
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 381
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 382
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 383
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 384
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-5\">
                <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 392
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/intercontinental-mcbo.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Inter Maracaibo</h6>
                        <p> <span>
                                <img src=\"";
        // line 404
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 405
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 406
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 407
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 408
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-5\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 416
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/tibisay-hotel-dellago-maracaibo.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Tibisay Hotel del Lago</h6>
                        <p> <span>
                                <img src=\"";
        // line 428
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 429
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 430
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 431
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 432
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->
            ";
        // line 463
        echo "            <div class=\"col-lg-4 col-md-6 grid-item cat-4\">
                <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 464
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/trinitariassuites-barquisimeto.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Trinitarias Suites</h6>
                        <p> <span>
                                <img src=\"";
        // line 476
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 477
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 478
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 479
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 480
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-4\">
                <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 488
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/lidotel-barquisimeto.png");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Lidotel Barquisimeto</h6>
                        <p> <span>
                                <img src=\"";
        // line 500
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 501
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 502
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 503
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 504
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

            <div class=\"col-lg-4 col-md-6 grid-item cat-4\">
                <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 512
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/jirahara-barquisimeto.jpg");
        echo ")\">
                    <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                    <div class=\"portfolio-badge\">
                        <span>
                            Desde \$0 <br>
                            <small>por noche / por habitación</small>
                        </span>
                        
                    </div><!-- /.portfolio-badge -->
                    <div class=\"inner-content text-white\">
                        <h6>Jirahara</h6>
                        <p> <span>
                                <img src=\"";
        // line 524
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 525
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 526
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 527
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                                <img src=\"";
        // line 528
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                            </span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/recommended-hotels.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  907 => 528,  903 => 527,  899 => 526,  895 => 525,  891 => 524,  876 => 512,  865 => 504,  861 => 503,  857 => 502,  853 => 501,  849 => 500,  834 => 488,  823 => 480,  819 => 479,  815 => 478,  811 => 477,  807 => 476,  792 => 464,  789 => 463,  780 => 432,  776 => 431,  772 => 430,  768 => 429,  764 => 428,  749 => 416,  738 => 408,  734 => 407,  730 => 406,  726 => 405,  722 => 404,  707 => 392,  696 => 384,  692 => 383,  688 => 382,  684 => 381,  680 => 380,  665 => 368,  654 => 360,  650 => 359,  646 => 358,  642 => 357,  638 => 356,  623 => 344,  612 => 336,  608 => 335,  604 => 334,  600 => 333,  596 => 332,  581 => 320,  570 => 312,  566 => 311,  562 => 310,  558 => 309,  554 => 308,  539 => 296,  528 => 288,  524 => 287,  520 => 286,  516 => 285,  512 => 284,  497 => 272,  486 => 264,  482 => 263,  478 => 262,  474 => 261,  470 => 260,  455 => 248,  444 => 240,  440 => 239,  436 => 238,  432 => 237,  428 => 236,  413 => 224,  402 => 216,  398 => 215,  394 => 214,  390 => 213,  386 => 212,  371 => 200,  360 => 192,  356 => 191,  352 => 190,  348 => 189,  344 => 188,  329 => 176,  318 => 168,  314 => 167,  310 => 166,  306 => 165,  302 => 164,  287 => 152,  276 => 144,  272 => 143,  268 => 142,  264 => 141,  260 => 140,  245 => 128,  234 => 120,  230 => 119,  226 => 118,  222 => 117,  218 => 116,  203 => 104,  192 => 96,  188 => 95,  184 => 94,  180 => 93,  176 => 92,  161 => 80,  150 => 72,  146 => 71,  142 => 70,  138 => 69,  134 => 68,  119 => 56,  108 => 48,  104 => 47,  100 => 46,  96 => 45,  92 => 44,  77 => 32,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/qvqjt6czwzdr/uat.navicu.com/themes/emigrar/partials/home/recommended-hotels.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("media" => 1);
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
