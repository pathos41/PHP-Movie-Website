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

/* /main_page/movie_list.html.twig */
class __TwigTemplate_275978c8c4425e432c0704f3e874c51bb8ce733082864ffd22dd6425211f8abb extends Template
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
        echo "<div class=\"container-fluid cate-menu\">
  <div class=\"row mt-3 mx-4 grey-bottom\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["category"]) {
            // line 4
            echo "      <div class=\"pb-2 pl-2 pr-5
      ";
            // line 6
            echo "        ";
            if (0 === twig_compare($context["id"], ($context["cid"] ?? null))) {
                // line 7
                echo "          active
        ";
            }
            // line 9
            echo "      \">
        <a class=\"text-secondary\" href=\"/movie/genre/get/";
            // line 10
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</a>

      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </div>
  ";
        // line 15
        if ( !($context["movies"] ?? null)) {
            // line 16
            echo "    <div class=\"ml-5 mt-3 card-text\">No movie with such name can be found, please try again!</div>
  ";
        }
        // line 18
        echo "  <div class=\"row mx-4 px-4 mt-4\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 20
            echo "      <div class=\"col-12 col-md-6 col-lg-4 col-xl-3 my-3 px-4\">
        <div class=\"card\">
          <a href=\"/movie/movie/get/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "widget_url", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"card-img-top w-100\" alt=\"...\">
          </a>
          <div class=\"card-body\">
            <div class=\"float-right p-1 rounded theme-text\">
              ";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "average_score", [], "any", false, false, false, 27), 1), "html", null, true);
            echo "
            </div>
            <a href=\"/movie/movie/get/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
              <h5 class=\"card-title mb-4\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</h5>
            </a>
            ";
            // line 33
            echo "            <div id=\"movie-date\" class=\"float-right\">
              ";
            // line 34
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "date", [], "any", false, false, false, 34), 0, 4), "html", null, true);
            echo "
            </div>
            <div class=\"card-text text-secondary\">
              ";
            // line 37
            $context["genres"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "genre", [], "any", false, false, false, 37), ",");
            // line 38
            echo "              ";
            // line 39
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ge"]) {
                // line 40
                echo "                <!-- Array index starts at 0 while database id starts at 1 -->
                <a class=\"mr-2\" href=\"/movie/genre/get/";
                // line 41
                echo twig_escape_filter($this->env, $context["ge"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["categories"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["ge"]] ?? null) : null), "html", null, true);
                echo "</a>
                ";
                // line 43
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "              ";
            // line 45
            echo "            </div>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/main_page/movie_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 50,  150 => 45,  148 => 44,  142 => 43,  136 => 41,  133 => 40,  128 => 39,  126 => 38,  124 => 37,  118 => 34,  115 => 33,  110 => 30,  106 => 29,  101 => 27,  94 => 23,  90 => 22,  86 => 20,  82 => 19,  79 => 18,  75 => 16,  73 => 15,  70 => 14,  58 => 10,  55 => 9,  51 => 7,  48 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/main_page/movie_list.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\main_page\\movie_list.html.twig");
    }
}
