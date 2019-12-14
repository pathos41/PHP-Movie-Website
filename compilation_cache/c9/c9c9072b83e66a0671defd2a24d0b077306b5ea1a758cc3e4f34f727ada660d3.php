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

/* /single_page/movie_banner_video.html.twig */
class __TwigTemplate_8deaf5b0cd12d79e4afa097fb284fa9c1c95d1b5e4cd64572e48ec5dc460d172 extends Template
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
        echo "<div class=\"container-fluid p-0 bg-white part-2-2\">
  <div class=\"row\">
    <div class=\"col-8 iframe\">
      <iframe width=\"100%\" height=\"600px\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen src=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "youtube_url", [], "any", false, false, false, 4), "html", null, true);
        echo "\"></iframe>
    </div>

    <div class=\"col-4\">
      <div class=\"pt-5 px-4\">
        <div class=\"float-right p-1 rounded score-box mr-4\">
          ";
        // line 10
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "average_score", [], "any", false, false, false, 10), 1), "html", null, true);
        echo "
        </div>
        <h2 class=\"movie-name mb-5\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
        <p><span class=\"card-text\">Director:</span> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "director", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
        <p><span class=\"card-text\">Staring:</span> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "stars", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        <p><span class=\"card-text\">Premiere:</span> ";
        // line 15
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "date", [], "any", false, false, false, 15), 0, 10), "html", null, true);
        echo "</p>
        <p><span class=\"card-text\">Box Office:</span> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "box_office", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
        <p class=\"card-text\">Genre: 
          ";
        // line 18
        $context["genres"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "genre", [], "any", false, false, false, 18), ",");
        // line 19
        echo "          ";
        // line 20
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ge"]) {
            // line 21
            echo "            <!-- Array index starts at 0 while database id starts at 1 -->
            <a class=\"mr-2\" href=\"/movie/genre/get/";
            // line 22
            echo twig_escape_filter($this->env, $context["ge"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["categories"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["ge"]] ?? null) : null), "html", null, true);
            echo "</a>
            ";
            // line 24
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "          ";
        // line 26
        echo "        </p>
        <p class=\"card-text\">Wanna leave a rating? Rate here:</p>
        <div class=\"float-left p-1 rounded rating-box mr-4\">
          <i class=\"rating rating1 far fa-star\" data-score=\"1\" data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "\"></i>
          <i class=\"rating rating2 far fa-star\" data-score=\"2\" data-id=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "id", [], "any", false, false, false, 30), "html", null, true);
        echo "\"></i>
          <i class=\"rating rating3 far fa-star\" data-score=\"3\" data-id=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\"></i>
          <i class=\"rating rating4 far fa-star\" data-score=\"4\" data-id=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "\"></i>
          <i class=\"rating rating5 far fa-star\" data-score=\"5\" data-id=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "\"></i>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/single_page/movie_banner_video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  103 => 26,  101 => 25,  95 => 24,  89 => 22,  86 => 21,  81 => 20,  79 => 19,  77 => 18,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/single_page/movie_banner_video.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\single_page\\movie_banner_video.html.twig");
    }
}
