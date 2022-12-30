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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/recommended-hotels.htm */
class __TwigTemplate_844908598755651bcbdfa1abc56e7436ba33b68de49f47eacdc1ee97c8ce6ac4 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/recommended-hotels.htm"));

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
                          Desde \$50,00 <br>
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
                          Desde \$89,00 <br>
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
                          Desde \$75,00 <br>
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
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
              <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 103
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/hpa-margarita.jpg");
        echo ")\">
                  <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                  <div class=\"portfolio-badge\">
                      <span>
                          Desde \$45,00 <br>
                          <small>por noche/por persona</small>
                      </span>
                      
                  </div><!-- /.portfolio-badge -->
                  <div class=\"inner-content text-white\">
                      <h6>Hesperia Playa el Agua</h6>
                      <p> <span>
                              <img src=\"";
        // line 115
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
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
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 126
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/ldpuntaplaya-margarita.png");
        echo ")\">
                  <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                  <div class=\"portfolio-badge\">
                      <span>
                          Desde \$50,00 <br>
                          <small>por noche/por persona</small>
                      </span>
                      
                  </div><!-- /.portfolio-badge -->
                  <div class=\"inner-content text-white\">
                      <h6>LD Punta Playa</h6>
                      <p> <span>
                              <img src=\"";
        // line 138
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 139
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 140
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 141
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
              <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 149
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/hoteles-destacados/tibisay-hotel-boutique.png");
        echo ")\">
                  <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                  <div class=\"portfolio-badge\">
                      <span>
                          Desde \$110,00 <br>
                          <small>2 adultos/solo desayuno</small>
                      </span>
                      
                  </div><!-- /.portfolio-badge -->
                  <div class=\"inner-content text-white\">
                      <h6>Tibisay Hotel Boutique Margarita</h6>
                      <p> <span>
                              <img src=\"";
        // line 161
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 162
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 163
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 164
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 165
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-1\">
              <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 173
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
        // line 185
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 186
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 187
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 188
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 189
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-1\">
              <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 197
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
        // line 209
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 210
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 211
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 212
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 213
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-1\">
              <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 221
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
        // line 233
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 234
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 235
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 236
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 237
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-2\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 245
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
        // line 257
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 258
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 259
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 260
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 261
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-2\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 269
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
        // line 281
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 282
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 283
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 284
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 285
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-2\">
              <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 293
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
        // line 305
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 306
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 307
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 308
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 309
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-3\">
              <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 317
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
        // line 329
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 330
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 331
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 332
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 333
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-3\">
              <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 341
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
        // line 353
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 354
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 355
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 356
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 357
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-3\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 365
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
        // line 377
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 378
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 379
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 380
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 381
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-5\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 389
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
        // line 401
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 402
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 403
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 404
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 405
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-5\">
              <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 413
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
        // line 425
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 426
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 427
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 428
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 429
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->
          ";
        // line 460
        echo "          <div class=\"col-lg-4 col-md-6 grid-item cat-4\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 461
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
        // line 473
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 474
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 475
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 476
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 477
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-4\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url(";
        // line 485
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
        // line 497
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 498
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 499
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 500
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 501
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-4\">
              <div class=\"portfolio-box-1\" style=\"background-image: url(";
        // line 509
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
        // line 521
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 522
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 523
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 524
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/svg/fill-star-nv.svg");
        echo "\"  class=\"hotel-star\">
                              <img src=\"";
        // line 525
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
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/recommended-hotels.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  893 => 525,  889 => 524,  885 => 523,  881 => 522,  877 => 521,  862 => 509,  851 => 501,  847 => 500,  843 => 499,  839 => 498,  835 => 497,  820 => 485,  809 => 477,  805 => 476,  801 => 475,  797 => 474,  793 => 473,  778 => 461,  775 => 460,  766 => 429,  762 => 428,  758 => 427,  754 => 426,  750 => 425,  735 => 413,  724 => 405,  720 => 404,  716 => 403,  712 => 402,  708 => 401,  693 => 389,  682 => 381,  678 => 380,  674 => 379,  670 => 378,  666 => 377,  651 => 365,  640 => 357,  636 => 356,  632 => 355,  628 => 354,  624 => 353,  609 => 341,  598 => 333,  594 => 332,  590 => 331,  586 => 330,  582 => 329,  567 => 317,  556 => 309,  552 => 308,  548 => 307,  544 => 306,  540 => 305,  525 => 293,  514 => 285,  510 => 284,  506 => 283,  502 => 282,  498 => 281,  483 => 269,  472 => 261,  468 => 260,  464 => 259,  460 => 258,  456 => 257,  441 => 245,  430 => 237,  426 => 236,  422 => 235,  418 => 234,  414 => 233,  399 => 221,  388 => 213,  384 => 212,  380 => 211,  376 => 210,  372 => 209,  357 => 197,  346 => 189,  342 => 188,  338 => 187,  334 => 186,  330 => 185,  315 => 173,  304 => 165,  300 => 164,  296 => 163,  292 => 162,  288 => 161,  273 => 149,  262 => 141,  258 => 140,  254 => 139,  250 => 138,  235 => 126,  224 => 118,  220 => 117,  216 => 116,  212 => 115,  197 => 103,  186 => 95,  182 => 94,  178 => 93,  174 => 92,  159 => 80,  148 => 72,  144 => 71,  140 => 70,  136 => 69,  132 => 68,  117 => 56,  106 => 48,  102 => 47,  98 => 46,  94 => 45,  90 => 44,  75 => 32,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- style=\"background-image: url({{'images/background/portfoliobg.png'|media}})\" 
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
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/him-margarita.png'|media}})\">
                  <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                  <div class=\"portfolio-badge\">
                      <span>
                          Desde \$50,00 <br>
                          <small>por noche/por persona</small>
                      </span>
                      
                  </div><!-- /.portfolio-badge -->
                  <div class=\"inner-content text-white\">
                      <h6>Hesperia Isla Margarita</h6>
                      <p> <span>
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/ldplus-margarita.png'|media}})\">
                  <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                  <div class=\"portfolio-badge\">
                      <span>
                          Desde \$89,00 <br>
                          <small>por noche/por persona</small>
                      </span>
                      
                  </div><!-- /.portfolio-badge -->
                  <div class=\"inner-content text-white\">
                      <h6>LD Plus</h6>
                      <p> <span>
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/sunsol-ecoland-margarita.png'|media}})\">
                  <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                  <div class=\"portfolio-badge\">
                      <span>
                          Desde \$75,00 <br>
                          <small>por noche/por persona</small>
                      </span>
                      
                  </div><!-- /.portfolio-badge -->
                  <div class=\"inner-content text-white\">
                      <h6>Sunsol Ecoland</h6>
                      <p> <span>
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/hpa-margarita.jpg'|media}})\">
                  <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                  <div class=\"portfolio-badge\">
                      <span>
                          Desde \$45,00 <br>
                          <small>por noche/por persona</small>
                      </span>
                      
                  </div><!-- /.portfolio-badge -->
                  <div class=\"inner-content text-white\">
                      <h6>Hesperia Playa el Agua</h6>
                      <p> <span>
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/ldpuntaplaya-margarita.png'|media}})\">
                  <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                  <div class=\"portfolio-badge\">
                      <span>
                          Desde \$50,00 <br>
                          <small>por noche/por persona</small>
                      </span>
                      
                  </div><!-- /.portfolio-badge -->
                  <div class=\"inner-content text-white\">
                      <h6>LD Punta Playa</h6>
                      <p> <span>
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-0\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/tibisay-hotel-boutique.png'|media}})\">
                  <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                  <div class=\"portfolio-badge\">
                      <span>
                          Desde \$110,00 <br>
                          <small>2 adultos/solo desayuno</small>
                      </span>
                      
                  </div><!-- /.portfolio-badge -->
                  <div class=\"inner-content text-white\">
                      <h6>Tibisay Hotel Boutique Margarita</h6>
                      <p> <span>
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-1\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/eurobuilding-caracas.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-1\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/altamira-suites.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-1\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/melia-caracas.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-2\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/hwtc-valencia.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-2\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/lidotel-valencia.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-2\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/executive-valencia.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-3\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/hesperia-mcy.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-3\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/marriott-maracay.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-3\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/pipointernacional-maracay.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-5\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/intercontinental-mcbo.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-5\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/tibisay-hotel-dellago-maracaibo.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->
          {#
          <div class=\"col-lg-4 col-md-6 grid-item cat-5\">
              <div class=\"portfolio-box-1 \">
                  <div class=\"rt-overlay\"></div><!-- /.rt-overlay -->
                  <div class=\"portfolio-badge\">
                      <span>
                          Desde \$0 <br>
                          <small>por noche / por habitación</small>
                      </span>
                      
                  </div><!-- /.portfolio-badge -->
                  <div class=\"inner-content text-white\">
                      <h6>Hotel Aeropuerto Maracaibo</h6>
                      <p> <span>
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->
          #}
          <div class=\"col-lg-4 col-md-6 grid-item cat-4\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/trinitariassuites-barquisimeto.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-4\">
              <div class=\"portfolio-box-1 \" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/lidotel-barquisimeto.png'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

          <div class=\"col-lg-4 col-md-6 grid-item cat-4\">
              <div class=\"portfolio-box-1\" style=\"background-image: url({{'navicu/imgs/jpg/hoteles-destacados/jirahara-barquisimeto.jpg'|media}})\">
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
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                              <img src=\"{{'navicu/imgs/svg/fill-star-nv.svg'|media}}\"  class=\"hotel-star\">
                          </span>
                      </p>
                  </div><!-- /.inner-content -->
              </div><!-- /.portfolio-box-1 -->
          </div><!-- /.col-md-4 -->

      </div><!-- /.row -->
  </div><!-- /.container -->
</section>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/recommended-hotels.htm", "");
    }
}
