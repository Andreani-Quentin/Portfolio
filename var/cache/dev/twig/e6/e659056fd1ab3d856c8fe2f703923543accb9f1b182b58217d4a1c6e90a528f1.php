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

/* home/index.html.twig */
class __TwigTemplate_0685590b71fc1cf6322a18ab7a97498fc81011fb832e9c1584aa4e73d8de73de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<!--======================================== NAVBAR ========================================-->

\t<header class=\"accueil\" id=\"accueil\">
\t\t<nav class=\"navbar navbar-expand-md navbar-dark justify-content-center fixed-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<a href=\"index.php\" class=\"navbar-brand d-flex w-50 mr-auto\"><span class=\"andreani\">Andreani</span> Quentin</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbar3\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"effet_lien navbar-collapse collapse w-100\" id=\"collapsingNavbar3\">
\t\t\t\t\t<ul class=\"nav navbar-nav ml-auto w-100 justify-content-end\">
\t\t\t\t\t\t<li class=\"nav-item mr-2\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#accueil\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item mr-2\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#startchange\">À Propos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item mr-2\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#competences\">Compétences</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item mr-2\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#portfolio\">Portfolio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item mr-2\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#parcours\">Parcours</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#contact\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t
\t\t<!--======================================== TITRE ========================================-->

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t<div class=\"col-md-10 text-center titre d-flex flex-column justify-content-center\">
\t\t\t\t\t<p>JE SUIS</p>
\t\t\t\t\t<h1 class=\"mb-1\"><span class=\"web\">Web</span> Développeur</h1>
\t\t\t\t\t<span class=\"junior\">Junior</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\"></div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<a href=\"#startchange\"><div class='icon-scroll'></div></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\"></div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<!--======================================== PRÉSENTATION ========================================-->

\t<section class=\"presentation pt-5\" id=\"startchange\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t<h2 class=\"pb-4 mb-4\">Présentation</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<h3 class=\"mb-5 pb-5\">Étudiant en développement web et web mobile</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>
\t\t\t<div class=\"row mb-5\">
\t\t\t\t<div class=\"col-md-6 mb-5 presentation_text\">
\t\t\t\t\t<p></p>
\t\t\t\t\t<p>Bien décidé à engager une reconversion professionnelle, je cherche à me professionnaliser et apporter mes compétences tout en poursuivant ma formation de développeur web. Je suis quelqu’un de créatif, fiable et passionné.
\t\t\t\t\t\tJe suis quelqu’un à l’écoute des autres, très empathique. J’aime les débats mais je n’aime pas les conflits. Depuis très jeune j’aime créer : à partir de rien et arriver à un résultat satisfaisant.
\t\t\t\t\t\t<br><br>
\t\t\t\t\t\tDans cette optique et sur mes créations personnelles, j’ai un coté très perfectionniste me donnant souvent mal à penser une création réellement finie. Grâce à mes expériences professionnelles passées, j’ai gagné en rigueur et en discipline. J’ai appris à respecter des délais aussi courts qu’ils soient en optimisant mes actions et gérant le stress pouvant en découler.
\t\t\t\t\t\tJe suis quelqu'un de polyvalent et je sais m'adapter aux différentes situations qui s'offrent à moi.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 text-center\"><img class=\"mt-3 pt-3\" src=\"styles/images/moi.jpeg\" alt=\"Andreani Quentin\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row end\">
\t\t\t\t\t<div class=\"col-md-4 text-center\"><i class=\"fas fa-code mb-4\"></i><p class=\"mb-5\">Front-End</p></div>
\t\t\t\t\t<div class=\"col-md-4 text-center\"><i class=\"fas fa-database mb-4\"></i><p class=\"mb-5\">Back-End</p></div>
\t\t\t\t\t<div class=\"col-md-4 text-center\"><i class=\"fas fa-mobile-alt mb-4\"></i><p class=\"mb-5\">Mobile</p></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!--======================================== BOUTON REALISATION ========================================-->

\t<section class=\"bouton_realisation d-flex flex-column justify-content-center\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t\t<div class=\"col-md-4 text-center bouton_portfolio\">
\t\t\t\t\t<a href=\"#portfolio\" class=\"realisation\"><p>Voir mes réalisations</p></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!--======================================== TECHONOLOGIES ========================================-->

\t<section class=\"technologies py-5 my-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t<h2 class=\"pb-4 mb-4\">Technologies</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<h3 class=\"mb-5 pb-5\">Les technologies que j'utilise</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-center d-flex justify-content-between flex-wrap\">\t
\t\t\t\t\t<i class=\"fab fa-html5\"></i>
\t\t\t\t\t<i class=\"fab fa-css3-alt\"></i>
\t\t\t\t\t<i class=\"fab fa-sass\"></i>
\t\t\t\t\t<i class=\"fab fa-bootstrap\"></i>
\t\t\t\t\t<i class=\"fab fa-php\"></i>
\t\t\t\t\t<i class=\"fas fa-database\"></i>
\t\t\t\t\t<i class=\"fab fa-symfony\"></i>
\t\t\t\t\t<i class=\"fab fa-js\"></i>
\t\t\t\t\t<i class=\"fab fa-wordpress\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!--======================================== CITATIONS ========================================-->

\t<section class=\"citations\">
\t\t<div id=\"myCarousel\" class=\"container carousel slide carousel-slide text-center d-flex flex-column justify-content-center\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"carousel-item carousel-item_accueil active\" data-interval=\"5000\">
\t\t\t\t\t<p class=\"phrase\"><span>\"Le thé n'a ni l'arrogance du vin, ni l'amertume du café et encore moins l'innoncence minaudière du cacao.\"</span></p>
\t\t\t\t\t<p class=\"auteur\">- Okakura Kakuzo -</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item carousel-item_accueil\" data-interval=\"5000\">
\t\t\t\t\t<p class=\"phrase\">\"Quand on arrête le café, le corps est bien très thé.\"</p>
\t\t\t\t\t<p class=\"auteur\">- Gaëtan Faucer -</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item carousel-item_accueil\" data-interval=\"5000\">
\t\t\t\t\t<p class=\"phrase\">\"Je pense que c'est le meilleur conseil : réfléchissez constamment à la façon dont vous pourriez mieux faire les choses, et vous remettre en question.\"</p>
\t\t\t\t\t<p class=\"auteur\">- Elon Musk -</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<div id=\"competences\"></div>

\t<!--======================================== COMPÉTENCES ========================================-->

\t<section class=\"competences py-5 my-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t<h2 class=\"pb-4 mb-4\">Compétences</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<h3 class=\"mb-5 pb-5\">Ce que je sais faire</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<img src=\"styles/images/bureau.png\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row d-flex justify-content-around py-5\">

\t\t\t";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) || array_key_exists("competences", $context) ? $context["competences"] : (function () { throw new RuntimeError('Variable "competences" does not exist.', 204, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 205
            echo "\t\t\t\t<div class=\"col-md-4 mt-5\">
\t\t\t\t\t<div class=\"compet_box d-flex\">
\t\t\t\t\t\t";
            // line 208
            echo "\t\t\t\t\t\t    ";
            echo twig_get_attribute($this->env, $this->source, $context["competence"], "icon", [], "any", false, false, false, 208);
            echo "
\t\t\t\t\t\t";
            // line 210
            echo "\t\t\t\t\t\t<div class=\"compet_content\">
\t\t\t\t\t\t\t<p><span class=\"compet_titre\">";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "title", [], "any", false, false, false, 211), "html", null, true);
            echo "</span></p>
\t\t\t\t\t\t\t<p>";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "content", [], "any", false, false, false, 212), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 213
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 213, $this->source); })()), "user", [], "any", false, false, false, 213)) {
                // line 214
                echo "\t\t\t\t\t\t\t<div class=\"modif text-right\">
\t\t\t\t\t\t\t\t<a class=\"mr-4 text-info\" href=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competences_show", ["id" => twig_get_attribute($this->env, $this->source, $context["competence"], "id", [], "any", false, false, false, 215)]), "html", null, true);
                echo "\">Voir</a>
\t\t\t\t\t\t\t\t<a class=\"mr-4 text-info\" href=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competences_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["competence"], "id", [], "any", false, false, false, 216)]), "html", null, true);
                echo "\">Editer</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 219
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t\t</div>
\t\t\t";
        // line 224
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "user", [], "any", false, false, false, 224)) {
            // line 225
            echo "\t\t\t<div class=\"text-right\">
\t\t\t\t<a class=\"btn btn-info text-body\" href=\"";
            // line 226
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competences_new");
            echo "\">New</a>
\t\t\t</div>
\t\t\t";
        }
        // line 228
        echo "\t

\t\t</div>\t
\t</section>

\t<!--======================================== PORTFOLIO ========================================-->

\t<section class=\"portfolio py-5 my-5\" id=\"portfolio\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t<h2 class=\"pb-4 mb-4\">Portfolio</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<h3 class=\"pb-5\">Voici quelques unes de mes réalisations</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) || array_key_exists("sites", $context) ? $context["sites"] : (function () { throw new RuntimeError('Variable "sites" does not exist.', 253, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 254
            echo "\t\t\t\t<div class=\"col-md-6 mt-5\">
\t\t\t\t\t<div class=\"portfolio_box\" style=\"background: url(";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["site"], "img", [], "any", false, false, false, 255))), "html", null, true);
            echo "); background-size: cover; background-position: center;\">
\t\t\t\t\t\t<div class=\"overlay p-4\">
\t\t\t\t\t\t\t<div class=\"titre_overlay text-center\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "link", [], "any", false, false, false, 258), "html", null, true);
            echo "\"><h2 class=\"pb-3 mb-4\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "title", [], "any", false, false, false, 258), "html", null, true);
            echo "</h2></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"overlay_icone text-center\">
\t\t\t\t\t\t\t\t";
            // line 262
            echo "\t\t\t\t\t\t    \t";
            echo twig_get_attribute($this->env, $this->source, $context["site"], "tech", [], "any", false, false, false, 262);
            echo "
\t\t\t\t\t\t\t\t";
            // line 264
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"overlay_content mt-4\">
\t\t\t\t\t\t\t\t";
            // line 267
            echo "\t\t\t\t\t\t    \t";
            echo twig_get_attribute($this->env, $this->source, $context["site"], "content", [], "any", false, false, false, 267);
            echo "
\t\t\t\t\t\t\t\t";
            // line 268
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 272
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 272, $this->source); })()), "user", [], "any", false, false, false, 272)) {
                // line 273
                echo "\t\t\t\t\t<div class=\"text-right mt-2\">
\t\t\t\t\t\t<a class=\"mr-3 text-info\" href=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sites_show", ["id" => twig_get_attribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 274)]), "html", null, true);
                echo "\">Voir</a>
\t\t\t\t\t\t<a class=\"mr-3 text-info\" href=\"";
                // line 275
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sites_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["site"], "id", [], "any", false, false, false, 275)]), "html", null, true);
                echo "\">Editer</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 278
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "\t\t\t</div>
\t\t\t";
        // line 281
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 281, $this->source); })()), "user", [], "any", false, false, false, 281)) {
            // line 282
            echo "\t\t\t<div class=\"text-right mt-5\">
\t\t\t\t<a class=\"btn btn-info text-body\" href=\"";
            // line 283
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sites_new");
            echo "\">New</a>
\t\t\t</div>
\t\t\t";
        }
        // line 286
        echo "\t\t</div>
\t\t<div id=\"parcours\"></div>
\t</section>

\t<!--======================================== PARCOURS ========================================-->

\t<section class=\"competences py-5 my-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t<h2 class=\"pb-4 mb-4\">Parcours</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<h3 class=\" pb-5\">Voici mon parcours</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-7 mx-auto\">

\t\t\t\t\t<!-- Timeline -->
\t\t\t\t\t<ul class=\"timeline\">

\t\t\t\t\t\t";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["timeline"]));
        foreach ($context['_seq'] as $context["_key"] => $context["timeline"]) {
            // line 316
            echo "\t\t\t\t\t\t<li class=\"timeline-item rounded ml-3 p-4 shadow\">
\t\t\t\t\t\t\t<div class=\"timeline-arrow\"></div>
\t\t\t\t\t\t\t<h3 class=\"h5 mb-0\">";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline"], "title", [], "any", false, false, false, 318), "html", null, true);
            echo "</h3><span class=\"small date\"><i class=\"fa fa-clock-o mr-1\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline"], "dates", [], "any", false, false, false, 318), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<p class=\"text-small mt-2 font-weight-light\">";
            // line 319
            echo twig_get_attribute($this->env, $this->source, $context["timeline"], "content", [], "any", false, false, false, 319);
            echo "</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 321
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 321, $this->source); })()), "user", [], "any", false, false, false, 321)) {
                // line 322
                echo "\t\t\t\t\t\t\t<div class=\"text-right mt-2\">
\t\t\t\t\t\t\t\t<a class=\"mr-3 text-info\" href=\"";
                // line 323
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timeline_show", ["id" => twig_get_attribute($this->env, $this->source, $context["timeline"], "id", [], "any", false, false, false, 323)]), "html", null, true);
                echo "\">Voir</a>
\t\t\t\t\t\t\t\t<a class=\"mr-3 text-info\" href=\"";
                // line 324
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timeline_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["timeline"], "id", [], "any", false, false, false, 324)]), "html", null, true);
                echo "\">Editer</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 327
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- End -->
\t\t\t\t\t";
        // line 331
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "user", [], "any", false, false, false, 331)) {
            // line 332
            echo "\t\t\t\t\t<div class=\"text-right mt-5\">
\t\t\t\t\t\t<a class=\"btn btn-info text-body\" href=\"";
            // line 333
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("timeline_new");
            echo "\">New</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 336
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--======================================== CONTACT / FOOTER ========================================-->

<footer class=\"contact py-5 mt-5\" id=\"contact\">
\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\"></div>
\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<h2 class=\"pb-4 mb-4\">Contact</h2>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\"></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\"></div>
\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t<h3 class=\" pb-5\">N'hésitez pas à me contacter !</h3>
\t\t\t</div>
\t\t\t<div class=\"col-md-2\"></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center recherche\">
\t\t\t\t<p>Actuellement à la recherche d'un stage, je suis intéressée par les postes de : <br><br>
\t\t\t\t\t<span class=\"poste\">Développeur Full-Stack . Développeur Front-End . Développeur Back-End . Intégrateur Web</span></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<a class=\"btn btn-dark\" href=\"/documents/Andreani Quentin - CV 2021.pdf/\">MON CV</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row mt-5\">
\t\t\t\t<div class=\"col-md-12 text-center mail\">
\t\t\t\t\t<a href=\"mailto:q.andreani@gmail.com\">q.andreani@gmail.com</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row mt-4\">
\t\t\t\t<div class=\"col-md-12 text-center reseau\">
\t\t\t\t\t<a href=\"https://www.linkedin.com/in/quentin-andreani-5b94711b4/\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t\t\t<a href=\"https://github.com/Andreani-Quentin\"><i class=\"fab fa-github\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row chevron_up\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<a href=\"#accueil\"><i class=\"fas fa-chevron-up\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row mt-5 mb-0\">
\t\t\t\t<div class=\"col-md-12 mb-0 text-center\">
\t\t\t\t\t<p>© Andreani Quentin, Tous droits réservés.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

\t<!--============================= SCRYPT =============================-->

\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t<script src=\"app.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 336,  525 => 333,  522 => 332,  520 => 331,  515 => 328,  509 => 327,  503 => 324,  499 => 323,  496 => 322,  494 => 321,  489 => 319,  483 => 318,  479 => 316,  475 => 315,  444 => 286,  438 => 283,  435 => 282,  433 => 281,  430 => 280,  423 => 278,  417 => 275,  413 => 274,  410 => 273,  408 => 272,  402 => 268,  397 => 267,  393 => 264,  388 => 262,  380 => 258,  374 => 255,  371 => 254,  367 => 253,  340 => 228,  334 => 226,  331 => 225,  329 => 224,  326 => 223,  317 => 219,  311 => 216,  307 => 215,  304 => 214,  302 => 213,  298 => 212,  294 => 211,  291 => 210,  286 => 208,  282 => 205,  278 => 204,  110 => 38,  104 => 35,  101 => 34,  99 => 33,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<!--======================================== NAVBAR ========================================-->

\t<header class=\"accueil\" id=\"accueil\">
\t\t<nav class=\"navbar navbar-expand-md navbar-dark justify-content-center fixed-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<a href=\"index.php\" class=\"navbar-brand d-flex w-50 mr-auto\"><span class=\"andreani\">Andreani</span> Quentin</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbar3\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"effet_lien navbar-collapse collapse w-100\" id=\"collapsingNavbar3\">
\t\t\t\t\t<ul class=\"nav navbar-nav ml-auto w-100 justify-content-end\">
\t\t\t\t\t\t<li class=\"nav-item mr-2\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#accueil\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item mr-2\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#startchange\">À Propos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item mr-2\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#competences\">Compétences</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item mr-2\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#portfolio\">Portfolio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item mr-2\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#parcours\">Parcours</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#contact\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t
\t\t<!--======================================== TITRE ========================================-->

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t<div class=\"col-md-10 text-center titre d-flex flex-column justify-content-center\">
\t\t\t\t\t<p>JE SUIS</p>
\t\t\t\t\t<h1 class=\"mb-1\"><span class=\"web\">Web</span> Développeur</h1>
\t\t\t\t\t<span class=\"junior\">Junior</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5\"></div>
\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t<a href=\"#startchange\"><div class='icon-scroll'></div></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\"></div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<!--======================================== PRÉSENTATION ========================================-->

\t<section class=\"presentation pt-5\" id=\"startchange\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t<h2 class=\"pb-4 mb-4\">Présentation</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<h3 class=\"mb-5 pb-5\">Étudiant en développement web et web mobile</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>
\t\t\t<div class=\"row mb-5\">
\t\t\t\t<div class=\"col-md-6 mb-5 presentation_text\">
\t\t\t\t\t<p></p>
\t\t\t\t\t<p>Bien décidé à engager une reconversion professionnelle, je cherche à me professionnaliser et apporter mes compétences tout en poursuivant ma formation de développeur web. Je suis quelqu’un de créatif, fiable et passionné.
\t\t\t\t\t\tJe suis quelqu’un à l’écoute des autres, très empathique. J’aime les débats mais je n’aime pas les conflits. Depuis très jeune j’aime créer : à partir de rien et arriver à un résultat satisfaisant.
\t\t\t\t\t\t<br><br>
\t\t\t\t\t\tDans cette optique et sur mes créations personnelles, j’ai un coté très perfectionniste me donnant souvent mal à penser une création réellement finie. Grâce à mes expériences professionnelles passées, j’ai gagné en rigueur et en discipline. J’ai appris à respecter des délais aussi courts qu’ils soient en optimisant mes actions et gérant le stress pouvant en découler.
\t\t\t\t\t\tJe suis quelqu'un de polyvalent et je sais m'adapter aux différentes situations qui s'offrent à moi.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 text-center\"><img class=\"mt-3 pt-3\" src=\"styles/images/moi.jpeg\" alt=\"Andreani Quentin\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row end\">
\t\t\t\t\t<div class=\"col-md-4 text-center\"><i class=\"fas fa-code mb-4\"></i><p class=\"mb-5\">Front-End</p></div>
\t\t\t\t\t<div class=\"col-md-4 text-center\"><i class=\"fas fa-database mb-4\"></i><p class=\"mb-5\">Back-End</p></div>
\t\t\t\t\t<div class=\"col-md-4 text-center\"><i class=\"fas fa-mobile-alt mb-4\"></i><p class=\"mb-5\">Mobile</p></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!--======================================== BOUTON REALISATION ========================================-->

\t<section class=\"bouton_realisation d-flex flex-column justify-content-center\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t\t<div class=\"col-md-4 text-center bouton_portfolio\">
\t\t\t\t\t<a href=\"#portfolio\" class=\"realisation\"><p>Voir mes réalisations</p></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\"></div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!--======================================== TECHONOLOGIES ========================================-->

\t<section class=\"technologies py-5 my-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t<h2 class=\"pb-4 mb-4\">Technologies</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<h3 class=\"mb-5 pb-5\">Les technologies que j'utilise</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-center d-flex justify-content-between flex-wrap\">\t
\t\t\t\t\t<i class=\"fab fa-html5\"></i>
\t\t\t\t\t<i class=\"fab fa-css3-alt\"></i>
\t\t\t\t\t<i class=\"fab fa-sass\"></i>
\t\t\t\t\t<i class=\"fab fa-bootstrap\"></i>
\t\t\t\t\t<i class=\"fab fa-php\"></i>
\t\t\t\t\t<i class=\"fas fa-database\"></i>
\t\t\t\t\t<i class=\"fab fa-symfony\"></i>
\t\t\t\t\t<i class=\"fab fa-js\"></i>
\t\t\t\t\t<i class=\"fab fa-wordpress\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!--======================================== CITATIONS ========================================-->

\t<section class=\"citations\">
\t\t<div id=\"myCarousel\" class=\"container carousel slide carousel-slide text-center d-flex flex-column justify-content-center\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"carousel-item carousel-item_accueil active\" data-interval=\"5000\">
\t\t\t\t\t<p class=\"phrase\"><span>\"Le thé n'a ni l'arrogance du vin, ni l'amertume du café et encore moins l'innoncence minaudière du cacao.\"</span></p>
\t\t\t\t\t<p class=\"auteur\">- Okakura Kakuzo -</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item carousel-item_accueil\" data-interval=\"5000\">
\t\t\t\t\t<p class=\"phrase\">\"Quand on arrête le café, le corps est bien très thé.\"</p>
\t\t\t\t\t<p class=\"auteur\">- Gaëtan Faucer -</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item carousel-item_accueil\" data-interval=\"5000\">
\t\t\t\t\t<p class=\"phrase\">\"Je pense que c'est le meilleur conseil : réfléchissez constamment à la façon dont vous pourriez mieux faire les choses, et vous remettre en question.\"</p>
\t\t\t\t\t<p class=\"auteur\">- Elon Musk -</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<div id=\"competences\"></div>

\t<!--======================================== COMPÉTENCES ========================================-->

\t<section class=\"competences py-5 my-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t<h2 class=\"pb-4 mb-4\">Compétences</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<h3 class=\"mb-5 pb-5\">Ce que je sais faire</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<img src=\"styles/images/bureau.png\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row d-flex justify-content-around py-5\">

\t\t\t{% for competence in competences %}
\t\t\t\t<div class=\"col-md-4 mt-5\">
\t\t\t\t\t<div class=\"compet_box d-flex\">
\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t    {{ competence.icon|raw }}
\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t<div class=\"compet_content\">
\t\t\t\t\t\t\t<p><span class=\"compet_titre\">{{ competence.title }}</span></p>
\t\t\t\t\t\t\t<p>{{ competence.content }}</p>
\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<div class=\"modif text-right\">
\t\t\t\t\t\t\t\t<a class=\"mr-4 text-info\" href=\"{{ path('competences_show', {'id': competence.id}) }}\">Voir</a>
\t\t\t\t\t\t\t\t<a class=\"mr-4 text-info\" href=\"{{ path('competences_edit', {'id': competence.id}) }}\">Editer</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t{% if app.user %}
\t\t\t<div class=\"text-right\">
\t\t\t\t<a class=\"btn btn-info text-body\" href=\"{{ path('competences_new') }}\">New</a>
\t\t\t</div>
\t\t\t{% endif %}\t

\t\t</div>\t
\t</section>

\t<!--======================================== PORTFOLIO ========================================-->

\t<section class=\"portfolio py-5 my-5\" id=\"portfolio\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t<h2 class=\"pb-4 mb-4\">Portfolio</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<h3 class=\"pb-5\">Voici quelques unes de mes réalisations</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t{% for site in sites %}
\t\t\t\t<div class=\"col-md-6 mt-5\">
\t\t\t\t\t<div class=\"portfolio_box\" style=\"background: url({{ asset('uploads/' ~ site.img) }}); background-size: cover; background-position: center;\">
\t\t\t\t\t\t<div class=\"overlay p-4\">
\t\t\t\t\t\t\t<div class=\"titre_overlay text-center\">
\t\t\t\t\t\t\t\t<a href=\"{{ site.link }}\"><h2 class=\"pb-3 mb-4\">{{ site.title }}</h2></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"overlay_icone text-center\">
\t\t\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t    \t{{ site.tech|raw }}
\t\t\t\t\t\t\t\t{% endautoescape %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"overlay_content mt-4\">
\t\t\t\t\t\t\t\t{% autoescape 'html' %}
\t\t\t\t\t\t    \t{{ site.content|raw }}
\t\t\t\t\t\t\t\t{% endautoescape %}\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"text-right mt-2\">
\t\t\t\t\t\t<a class=\"mr-3 text-info\" href=\"{{ path('sites_show', {'id': site.id}) }}\">Voir</a>
\t\t\t\t\t\t<a class=\"mr-3 text-info\" href=\"{{ path('sites_edit', {'id': site.id}) }}\">Editer</a>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t{% if app.user %}
\t\t\t<div class=\"text-right mt-5\">
\t\t\t\t<a class=\"btn btn-info text-body\" href=\"{{ path('sites_new') }}\">New</a>
\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t\t<div id=\"parcours\"></div>
\t</section>

\t<!--======================================== PARCOURS ========================================-->

\t<section class=\"competences py-5 my-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t<h2 class=\"pb-4 mb-4\">Parcours</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\"></div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t\t<h3 class=\" pb-5\">Voici mon parcours</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2\"></div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-7 mx-auto\">

\t\t\t\t\t<!-- Timeline -->
\t\t\t\t\t<ul class=\"timeline\">

\t\t\t\t\t\t{% for timeline in timeline|reverse %}
\t\t\t\t\t\t<li class=\"timeline-item rounded ml-3 p-4 shadow\">
\t\t\t\t\t\t\t<div class=\"timeline-arrow\"></div>
\t\t\t\t\t\t\t<h3 class=\"h5 mb-0\">{{ timeline.title }}</h3><span class=\"small date\"><i class=\"fa fa-clock-o mr-1\"></i>{{ timeline.dates }}</span>
\t\t\t\t\t\t\t<p class=\"text-small mt-2 font-weight-light\">{% autoescape 'html' %}{{ timeline.content|raw }}{% endautoescape %}</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<div class=\"text-right mt-2\">
\t\t\t\t\t\t\t\t<a class=\"mr-3 text-info\" href=\"{{ path('timeline_show', {'id': timeline.id}) }}\">Voir</a>
\t\t\t\t\t\t\t\t<a class=\"mr-3 text-info\" href=\"{{ path('timeline_edit', {'id': timeline.id}) }}\">Editer</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</ul>
\t\t\t\t\t<!-- End -->
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"text-right mt-5\">
\t\t\t\t\t\t<a class=\"btn btn-info text-body\" href=\"{{ path('timeline_new') }}\">New</a>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--======================================== CONTACT / FOOTER ========================================-->

<footer class=\"contact py-5 mt-5\" id=\"contact\">
\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\"></div>
\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<h2 class=\"pb-4 mb-4\">Contact</h2>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\"></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\"></div>
\t\t\t<div class=\"col-md-8 text-center\">
\t\t\t\t<h3 class=\" pb-5\">N'hésitez pas à me contacter !</h3>
\t\t\t</div>
\t\t\t<div class=\"col-md-2\"></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center recherche\">
\t\t\t\t<p>Actuellement à la recherche d'un stage, je suis intéressée par les postes de : <br><br>
\t\t\t\t\t<span class=\"poste\">Développeur Full-Stack . Développeur Front-End . Développeur Back-End . Intégrateur Web</span></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<a class=\"btn btn-dark\" href=\"/documents/Andreani Quentin - CV 2021.pdf/\">MON CV</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row mt-5\">
\t\t\t\t<div class=\"col-md-12 text-center mail\">
\t\t\t\t\t<a href=\"mailto:q.andreani@gmail.com\">q.andreani@gmail.com</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row mt-4\">
\t\t\t\t<div class=\"col-md-12 text-center reseau\">
\t\t\t\t\t<a href=\"https://www.linkedin.com/in/quentin-andreani-5b94711b4/\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t\t\t<a href=\"https://github.com/Andreani-Quentin\"><i class=\"fab fa-github\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row chevron_up\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<a href=\"#accueil\"><i class=\"fas fa-chevron-up\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row mt-5 mb-0\">
\t\t\t\t<div class=\"col-md-12 mb-0 text-center\">
\t\t\t\t\t<p>© Andreani Quentin, Tous droits réservés.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

\t<!--============================= SCRYPT =============================-->

\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t<script src=\"app.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "home/index.html.twig", "/Applications/MAMP/htdocs/portfolio/templates/home/index.html.twig");
    }
}
