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

/* /home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/testimonials.htm */
class __TwigTemplate_4822d6a545fb9636133da786cbf4a3c85923329603c34deaa12a50d54688b446 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/testimonials.htm"));

        // line 1
        echo "<section class=\"testimonials-area\" data-scrollax-parent=\"true\">
    <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-xl-9 mx-auto text-center\">
                <div class=\"rt-section-title-wrapper\">
                    <h5 class=\"rt-section-title\">
                        Testimonios
                        
                    </h5><!-- /.rt-section-title -->
                    <h2 class=\"rt-section-title\">
                        Conoce las historias de nuestros viajeros
                    </h2>
                    <p>Tenemos más de 7 acompañando a nuestros viajeros a vivir las 
                        mejores aventuras en Venezuela y el mundo
                    </p>
                    <p>
                        Conoce sus historias sobre la <a href=\"#\">#ExperienciaNavicu</a> en cada
                        uno de sus viajes
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        
        <!-- DESK -->
        <div class=\"row d-none d-sm-none d-md-block\">
            <div class=\"col-lg-12 mx-auto\">
                <div class=\"testimoninal-active-1\">
                    <div class=\"singleTbox-1 text-center active position-1\" data-position=\"position-1\">
                        <div class=\"testi-thumb\">
                            <!-- style=\"background-image: url(assets/images/testimonials/t_1.png)\"-->
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 32
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/1-selegna-bompart.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Selegna Bompart</h5>
                            <p>20/03/22</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Buenísima experiencia, fue un muy bonito viaje gracias por toda la planificación y el apoyo
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-2\" data-position=\"position-2\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 56
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/2-maria-laura-rascon.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>María Laura Rascón</h5>
                            <p>18/03/22</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue una excelente experiencia
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-3\" data-position=\"position-3\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 80
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/3-daniela-figueira.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                         
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Daniela Figueira</h5>
                            <p>5/05/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                La pasamos estupendo, todo estuvo de maravilla y me gustaría dejarles un 
                                Review porque ustedes fueron una excelente agencia de viajes. 
                                De verdad muchas gracias
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-4\" data-position=\"position-4\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 106
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/4-christina-medina.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Christina Medina</h5>
                            <p>01/12/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Todo fue excelente. Desde la atención hasta el servicio brindado en los hoteles
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-5\" data-position=\"position-5\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 130
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/5-pierina-serrano.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Pierina Serrano y familia</h5>
                            <p>19/02/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Agradecida por todo, por la paciencia, la pasamos super chévere, el
                                hotel increíble, las comidas espectaculares, Quedamos encantados, 
                                volveríamos, mil gracias ya vamos a planificar el próximo viaje.
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-6\" data-position=\"position-6\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 156
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/6-luis-sanchez-y-sthefanie-amaro.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Luis Sanchez y Sthefanie Amaro</h5>
                            <p>25/02/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue un viaje increible, lo pasamos mejor de lo esperado. 
                                La atención y el servicio del hotel recomendado superó nuestras expectativas.
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-7\" data-position=\"position-7\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 181
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/7-candida-chan.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Candida Chan</h5>
                            <p>30/01/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue una maravillosa experiencia.
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-8\" data-position=\"position-8\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 205
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/8-keilly-gil.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Keilly Gil</h5>
                            <p>08/08/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Estas vacaciones en Margarita superaron nuestras expectativas, 
                                excelente y muy acertada la recomendación de alojamiento todo incluido
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-9\" data-position=\"position-9\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 230
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/9-katherine-angulo.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Katherine Angulo</h5>
                            <p>06/02/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fueron unas excelentes vacaciones. Super recomendados
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-10\" data-position=\"position-10\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 254
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/10-valentina-peralta.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Valentina Peralta</h5>
                            <p>31/12/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Todo muy lindo. Muy recomendados
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                </div><!-- /.testimoninal-active-1 -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
        <!-- END DESK -->
        
        <!-- MOBILE-->
        <div class=\"d-block d-sm-none\">
            <div class=\"testimonials-mobile-container d-flex align-items-stretch\">
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 287
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/5-pierina-serrano.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Pierina Serrano y familia</h5>
                            <p>19/02/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Agradecida por todo, por la paciencia, la pasamos super chévere, el
                                hotel increíble, las comidas espectaculares, Quedamos encantados, 
                                volveríamos, mil gracias ya vamos a planificar el próximo viaje.
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center \">
                        <div class=\"testi-thumb\">
                            <!-- style=\"background-image: url(assets/images/testimonials/t_1.png)\"-->
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 316
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/1-selegna-bompart.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Selegna Bompart</h5>
                            <p>20/03/22</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Buenísima experiencia, fue un muy bonito viaje gracias por toda la planificación y el apoyo
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 342
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/2-maria-laura-rascon.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>María Laura Rascón</h5>
                            <p>18/03/22</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue una excelente experiencia
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 368
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/3-daniela-figueira.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                         
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Daniela Figueira</h5>
                            <p>5/05/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                La pasamos estupendo, todo estuvo de maravilla y me gustaría dejarles un 
                                Review porque ustedes fueron una excelente agencia de viajes. 
                                De verdad muchas gracias
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 396
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/4-christina-medina.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Christina Medina</h5>
                            <p>01/12/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Todo fue excelente. Desde la atención hasta el servicio brindado en los hoteles
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
               
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 423
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/6-luis-sanchez-y-sthefanie-amaro.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Luis Sanchez y Sthefanie Amaro</h5>
                            <p>25/02/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue un viaje increible, lo pasamos mejor de lo esperado. 
                                La atención y el servicio del hotel recomendado superó nuestras expectativas.
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 450
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/7-candida-chan.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Candida Chan</h5>
                            <p>30/01/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue una maravillosa experiencia.
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 476
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/8-keilly-gil.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Keilly Gil</h5>
                            <p>08/08/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Estas vacaciones en Margarita superaron nuestras expectativas, 
                                excelente y muy acertada la recomendación de alojamiento todo incluido
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 503
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/9-katherine-angulo.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Katherine Angulo</h5>
                            <p>06/02/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fueron unas excelentes vacaciones. Super recomendados
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active  text-center\" data-position=\"position-10\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url(";
        // line 529
        echo $this->env->getFilter('media')->getCallable()("navicu/imgs/jpg/testimonios/10-valentina-peralta.jpeg");
        echo ")\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Valentina Peralta</h5>
                            <p>31/12/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Todo muy lindo. Muy recomendados
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
            </div>

            <div class=\"section-title-spacer\"></div>
        </div>
            
            
        <!-- END MOBILE -->
       <!-- /.section-title-spacer -->
    </div><!-- /.containe -->
</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/testimonials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 529,  598 => 503,  568 => 476,  539 => 450,  509 => 423,  479 => 396,  448 => 368,  419 => 342,  390 => 316,  358 => 287,  322 => 254,  295 => 230,  267 => 205,  240 => 181,  212 => 156,  183 => 130,  156 => 106,  127 => 80,  100 => 56,  73 => 32,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"testimonials-area\" data-scrollax-parent=\"true\">
    <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-xl-9 mx-auto text-center\">
                <div class=\"rt-section-title-wrapper\">
                    <h5 class=\"rt-section-title\">
                        Testimonios
                        
                    </h5><!-- /.rt-section-title -->
                    <h2 class=\"rt-section-title\">
                        Conoce las historias de nuestros viajeros
                    </h2>
                    <p>Tenemos más de 7 acompañando a nuestros viajeros a vivir las 
                        mejores aventuras en Venezuela y el mundo
                    </p>
                    <p>
                        Conoce sus historias sobre la <a href=\"#\">#ExperienciaNavicu</a> en cada
                        uno de sus viajes
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        
        <!-- DESK -->
        <div class=\"row d-none d-sm-none d-md-block\">
            <div class=\"col-lg-12 mx-auto\">
                <div class=\"testimoninal-active-1\">
                    <div class=\"singleTbox-1 text-center active position-1\" data-position=\"position-1\">
                        <div class=\"testi-thumb\">
                            <!-- style=\"background-image: url(assets/images/testimonials/t_1.png)\"-->
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/1-selegna-bompart.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Selegna Bompart</h5>
                            <p>20/03/22</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Buenísima experiencia, fue un muy bonito viaje gracias por toda la planificación y el apoyo
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-2\" data-position=\"position-2\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/2-maria-laura-rascon.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>María Laura Rascón</h5>
                            <p>18/03/22</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue una excelente experiencia
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-3\" data-position=\"position-3\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/3-daniela-figueira.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                         
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Daniela Figueira</h5>
                            <p>5/05/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                La pasamos estupendo, todo estuvo de maravilla y me gustaría dejarles un 
                                Review porque ustedes fueron una excelente agencia de viajes. 
                                De verdad muchas gracias
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-4\" data-position=\"position-4\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/4-christina-medina.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Christina Medina</h5>
                            <p>01/12/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Todo fue excelente. Desde la atención hasta el servicio brindado en los hoteles
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-5\" data-position=\"position-5\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/5-pierina-serrano.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Pierina Serrano y familia</h5>
                            <p>19/02/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Agradecida por todo, por la paciencia, la pasamos super chévere, el
                                hotel increíble, las comidas espectaculares, Quedamos encantados, 
                                volveríamos, mil gracias ya vamos a planificar el próximo viaje.
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-6\" data-position=\"position-6\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/6-luis-sanchez-y-sthefanie-amaro.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Luis Sanchez y Sthefanie Amaro</h5>
                            <p>25/02/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue un viaje increible, lo pasamos mejor de lo esperado. 
                                La atención y el servicio del hotel recomendado superó nuestras expectativas.
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-7\" data-position=\"position-7\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/7-candida-chan.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Candida Chan</h5>
                            <p>30/01/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue una maravillosa experiencia.
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-8\" data-position=\"position-8\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/8-keilly-gil.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Keilly Gil</h5>
                            <p>08/08/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Estas vacaciones en Margarita superaron nuestras expectativas, 
                                excelente y muy acertada la recomendación de alojamiento todo incluido
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-9\" data-position=\"position-9\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/9-katherine-angulo.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Katherine Angulo</h5>
                            <p>06/02/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fueron unas excelentes vacaciones. Super recomendados
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                    <div class=\"singleTbox-1 text-center inactive position-10\" data-position=\"position-10\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/10-valentina-peralta.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Valentina Peralta</h5>
                            <p>31/12/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Todo muy lindo. Muy recomendados
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                </div><!-- /.testimoninal-active-1 -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
        <!-- END DESK -->
        
        <!-- MOBILE-->
        <div class=\"d-block d-sm-none\">
            <div class=\"testimonials-mobile-container d-flex align-items-stretch\">
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/5-pierina-serrano.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Pierina Serrano y familia</h5>
                            <p>19/02/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Agradecida por todo, por la paciencia, la pasamos super chévere, el
                                hotel increíble, las comidas espectaculares, Quedamos encantados, 
                                volveríamos, mil gracias ya vamos a planificar el próximo viaje.
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center \">
                        <div class=\"testi-thumb\">
                            <!-- style=\"background-image: url(assets/images/testimonials/t_1.png)\"-->
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/1-selegna-bompart.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Selegna Bompart</h5>
                            <p>20/03/22</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Buenísima experiencia, fue un muy bonito viaje gracias por toda la planificación y el apoyo
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/2-maria-laura-rascon.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>María Laura Rascón</h5>
                            <p>18/03/22</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue una excelente experiencia
                            </p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.singleTbox-1 -->
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/3-daniela-figueira.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                         
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Daniela Figueira</h5>
                            <p>5/05/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                La pasamos estupendo, todo estuvo de maravilla y me gustaría dejarles un 
                                Review porque ustedes fueron una excelente agencia de viajes. 
                                De verdad muchas gracias
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/4-christina-medina.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Christina Medina</h5>
                            <p>01/12/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Todo fue excelente. Desde la atención hasta el servicio brindado en los hoteles
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
               
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/6-luis-sanchez-y-sthefanie-amaro.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Luis Sanchez y Sthefanie Amaro</h5>
                            <p>25/02/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue un viaje increible, lo pasamos mejor de lo esperado. 
                                La atención y el servicio del hotel recomendado superó nuestras expectativas.
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/7-candida-chan.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                          
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Candida Chan</h5>
                            <p>30/01/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fue una maravillosa experiencia.
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/8-keilly-gil.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Keilly Gil</h5>
                            <p>08/08/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Estas vacaciones en Margarita superaron nuestras expectativas, 
                                excelente y muy acertada la recomendación de alojamiento todo incluido
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active text-center\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/9-katherine-angulo.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                           
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Katherine Angulo</h5>
                            <p>06/02/2022</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Fueron unas excelentes vacaciones. Super recomendados
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
                <div>
                    <div class=\"singleTbox-1 active  text-center\" data-position=\"position-10\">
                        <div class=\"testi-thumb\">
                            <div class=\"inner-bg\" style=\"background-image: url({{'navicu/imgs/jpg/testimonios/10-valentina-peralta.jpeg'|media}})\">
                            </div><!-- /.inner-bg -->
                            
                        </div>
                        <!-- /.testi-thumb -->
                        <div class=\"autor-bio\">
                            <h5>Valentina Peralta</h5>
                            <p>31/12/2021</p>
                            <span class=\"rating\">
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                            </span>
                        </div><!-- /.autor-bio -->
                        <div class=\"inner-content\">
                            <p>
                                Todo muy lindo. Muy recomendados
                            </p>
                        </div><!-- /.inner-content -->
                    </div>
                </div>
            </div>

            <div class=\"section-title-spacer\"></div>
        </div>
            
            
        <!-- END MOBILE -->
       <!-- /.section-title-spacer -->
    </div><!-- /.containe -->
</section>", "/home/desarrollo/Documents/Dev/navicu.com/themes/emigrar/partials/home/testimonials.htm", "");
    }
}
