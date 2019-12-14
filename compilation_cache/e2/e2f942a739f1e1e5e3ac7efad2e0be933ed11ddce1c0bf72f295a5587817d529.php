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

/* /main_page/slideshow.html.twig */
class __TwigTemplate_d796f18baa79fdce2cb64345343f635946367baae9a833748b0976609e6b97c2 extends Template
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
        // line 1
        echo "<div class=\"slideshow-container\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_movies"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["movie"]) {
            // line 3
            echo "    <!-- Full-width images with number and caption text -->
    <div class=\"mySlides fuck\">
      <img id=\"slideShow\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "banner_url", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
      <div class=\"position-absolute left-text\">
        <h2 class=\"text-white movie-name banner-text\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 7), "html", null, true);
            echo "</h2>
        <p class=\"text-light mb-4 movie-desc\">
          <span class=\"mr-2\">
            ";
            // line 10
            $context["genres"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "genre", [], "any", false, false, false, 10), ",");
            // line 11
            echo "            ";
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ge"]) {
                // line 13
                echo "              <!-- Array index starts at 0 while database id starts at 1 -->
              <span class=\"mr-1\">";
                // line 14
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["categories"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["ge"]] ?? null) : null), "html", null, true);
                echo "</span>
              ";
                // line 16
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "          </span>
          <span>| Duration: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "duration", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
        </p>
        <button class=\"btn color-theme\">
          <a class=\"text-white\" href=\"/movie/movie/get/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">VIEW INFO</a>
        </button>
      </div>
      <div class=\"position-absolute right-text p-2 rounded score-box\">
          <p class=\"text-white movie-desc\">Rating: ";
            // line 25
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "average_score", [], "any", false, false, false, 25), 1), "html", null, true);
            echo "</p>
          <small class=\"text-white movie-desc\">based on ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "score_num", [], "any", false, false, false, 26), "html", null, true);
            echo " reviews</small>
      </div>
      <div class=\"text\">";
            // line 28
            echo twig_escape_filter($this->env, ($context["id"] + 1), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, ($context["num"] ?? null), "html", null, true);
            echo "</div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  <!-- Next and previous buttons -->
";
        // line 34
        echo "</div>
<br>";
    }

    public function getTemplateName()
    {
        return "/main_page/slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  117 => 31,  106 => 28,  101 => 26,  97 => 25,  90 => 21,  84 => 18,  81 => 17,  75 => 16,  71 => 14,  68 => 13,  63 => 12,  61 => 11,  59 => 10,  53 => 7,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/main_page/slideshow.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\main_page\\slideshow.html.twig");
    }
}
