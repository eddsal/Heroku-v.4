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

/* Front/navigation/footer.html.twig */
class __TwigTemplate_0a4c331eeefb7191af1e4877d726bf8ca760b9bca6cb9cb00cb42295912d9b7c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navigation/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navigation/footer.html.twig"));

        // line 1
        echo "<footer class=\"footer is-centered\">
   <div class=\"container\">
      <div class=\"columns\">
         <div class=\"column is-4\">
            <h4 class=\"bd-footer-title\">
               <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navigation");
        echo "\">TripDream</a> créé par <a href=\"https://www.myges.fr/common/project-group-gestion/132385\">Groupe 3</a> - PA - ESGI.
            </h4>
            <div class=\"bd-footer-tsp\">
               Notre site web vous aidera à trouver et à réserver des voyages dans le monde entier
            </div>
         </div>
         <div class=\"column is-4\">
            <h4 class=\"bd-footer-title\">
               <strong>Contribuer</strong> sur GitHub
            </h4>
            <div class=\"bd-footer is-github\">
               <a href=\"https://github.com/kilwa95/tripeDream.github.io\"><i class=\"bi bi-github\"></i></a>
            </div>
         </div>
         <div class=\"column is-4\">
            <h4 class=\"bd-footer-title\">
               <strong>Contactez-nous</strong>
            </h4>
            <div class=\"bd-footer\">
               <p><a href=\"mailto:info@domain.com\" title=\"glorythemes\">info@domain.com</a></p>
               <ul class=\"social-footer2\">
                  <li class=\"\">
                  </li>
                  <li class=\"\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-facebook\" viewBox=\"0 0 16 16\">
                           <path d=\"M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z\"/>
                     </svg>
                  </li>
                  <li class=\"\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-twitter\" viewBox=\"0 0 16 16\">
                           <path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z\"/>
                     </svg>
                  </li>
                  <li class=\"\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-instagram\" viewBox=\"0 0 16 16\">
                           <path d=\"M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z\"/>
                     </svg>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class=\"bd-footer-links\">
         <div class=\"columns\">
            <div class=\"column is-3\">
               <p class=\"bd-footer-link-title\">
                  <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("navigation");
        echo "\">Home</a>
               </p>
               <p class=\"bd-footer-link-title\">
                  <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">Voyages</a>
               </p>
            </div>
            <div class=\"column is-3\">
               <p class=\"bd-footer-link-title\">
                  <span>Pays</span>
               </p>
               ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $context["pays"], 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["pays"]) {
            // line 63
            echo "                  <p class=\"bd-footer-link\">
                     <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pays_name", ["id" => twig_get_attribute($this->env, $this->source, $context["pays"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pays"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</a>
                  </p>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pays'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "               <p class=\"bd-footer-link bd-is-more\">
                  <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">Voir plus...</a>
               </p>
            </div>
            <div class=\"column is-3\">
               <p class=\"bd-footer-link-title\">
                  <span>Activités</span>
               </p>
               ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 75, $this->source); })()), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 76
            echo "                  <p class=\"bd-footer-link\">
                     <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activite_name", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo "</a>
                  </p>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "               <p class=\"bd-footer-link bd-is-more\">
                  <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voyage_index");
        echo "\">Voir plus...</a>
               </p>
            </div>
            <div class=\"column is-3\">
               <p class=\"bd-footer-link-title\">
                  <span>Sasions</span>
               </p>
               ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["saison"]);
        foreach ($context['_seq'] as $context["_key"] => $context["saison"]) {
            // line 89
            echo "                  <p class=\"bd-footer-link\">
                     <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saison_name", ["id" => twig_get_attribute($this->env, $this->source, $context["saison"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["saison"], "name", [], "any", false, false, false, 90), "html", null, true);
            echo "</a>
                  </p>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "               ";
        // line 96
        echo "            </div>
         </div>
      </div>
   </div>
</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front/navigation/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 96,  195 => 93,  184 => 90,  181 => 89,  177 => 88,  167 => 81,  164 => 80,  153 => 77,  150 => 76,  146 => 75,  136 => 68,  133 => 67,  122 => 64,  119 => 63,  115 => 62,  105 => 55,  99 => 52,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer is-centered\">
   <div class=\"container\">
      <div class=\"columns\">
         <div class=\"column is-4\">
            <h4 class=\"bd-footer-title\">
               <a href=\"{{ path('navigation') }}\">TripDream</a> créé par <a href=\"https://www.myges.fr/common/project-group-gestion/132385\">Groupe 3</a> - PA - ESGI.
            </h4>
            <div class=\"bd-footer-tsp\">
               Notre site web vous aidera à trouver et à réserver des voyages dans le monde entier
            </div>
         </div>
         <div class=\"column is-4\">
            <h4 class=\"bd-footer-title\">
               <strong>Contribuer</strong> sur GitHub
            </h4>
            <div class=\"bd-footer is-github\">
               <a href=\"https://github.com/kilwa95/tripeDream.github.io\"><i class=\"bi bi-github\"></i></a>
            </div>
         </div>
         <div class=\"column is-4\">
            <h4 class=\"bd-footer-title\">
               <strong>Contactez-nous</strong>
            </h4>
            <div class=\"bd-footer\">
               <p><a href=\"mailto:info@domain.com\" title=\"glorythemes\">info@domain.com</a></p>
               <ul class=\"social-footer2\">
                  <li class=\"\">
                  </li>
                  <li class=\"\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-facebook\" viewBox=\"0 0 16 16\">
                           <path d=\"M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z\"/>
                     </svg>
                  </li>
                  <li class=\"\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-twitter\" viewBox=\"0 0 16 16\">
                           <path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z\"/>
                     </svg>
                  </li>
                  <li class=\"\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-instagram\" viewBox=\"0 0 16 16\">
                           <path d=\"M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z\"/>
                     </svg>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class=\"bd-footer-links\">
         <div class=\"columns\">
            <div class=\"column is-3\">
               <p class=\"bd-footer-link-title\">
                  <a href=\"{{ path('navigation') }}\">Home</a>
               </p>
               <p class=\"bd-footer-link-title\">
                  <a href=\"{{ path('voyage_index') }}\">Voyages</a>
               </p>
            </div>
            <div class=\"column is-3\">
               <p class=\"bd-footer-link-title\">
                  <span>Pays</span>
               </p>
               {% for pays in pays|slice(0, 10) %}
                  <p class=\"bd-footer-link\">
                     <a href=\"{{ path('pays_name',{'id': pays.id}) }}\">{{pays.name}}</a>
                  </p>
               {% endfor %}
               <p class=\"bd-footer-link bd-is-more\">
                  <a href=\"{{ path('voyage_index') }}\">Voir plus...</a>
               </p>
            </div>
            <div class=\"column is-3\">
               <p class=\"bd-footer-link-title\">
                  <span>Activités</span>
               </p>
               {% for activite in activites|slice(0, 10) %}
                  <p class=\"bd-footer-link\">
                     <a href=\"{{ path('activite_name',{'id': activite.id}) }}\">{{activite.name}}</a>
                  </p>
               {% endfor %}
               <p class=\"bd-footer-link bd-is-more\">
                  <a href=\"{{ path('voyage_index') }}\">Voir plus...</a>
               </p>
            </div>
            <div class=\"column is-3\">
               <p class=\"bd-footer-link-title\">
                  <span>Sasions</span>
               </p>
               {% for saison in saison %}
                  <p class=\"bd-footer-link\">
                     <a href=\"{{ path('saison_name',{'id': saison.id}) }}\">{{saison.name}}</a>
                  </p>
               {% endfor %}
               {# <p class=\"bd-footer-link bd-is-more\">
                  <a href=\"{{ path('voyage_index') }}\">Voir plus</a>
               </p> #}
            </div>
         </div>
      </div>
   </div>
</footer>", "Front/navigation/footer.html.twig", "/Users/eddysalibi/Desktop/Dev/ESGI/Symphony/ratrappage/pro/tripeDream.github.io/templates/Front/navigation/footer.html.twig");
    }
}
