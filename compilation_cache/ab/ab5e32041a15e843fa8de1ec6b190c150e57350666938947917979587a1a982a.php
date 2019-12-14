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

/* /single_page/movie_comments.html.twig */
class __TwigTemplate_2769dc79df6937a6587fa88b1b8d75bc620ebf69b7d88ffc3c0ca3655ad642a5 extends Template
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
        echo "<div class=\"container-fluid cate-menu mb-3\">
  <!-- Part 4.1 Title -->
  <div class=\"row mt-3 mx-4 text-secondary grey-bottom\">
    <div class=\"col-1 pb-2 active\">
      Comments
    </div>
  </div>

  <!-- Part 4.2 Input -->
  <div class=\"row\">
    <div class=\"form-inline my-5 mx-auto align-items-end\">
      <textarea id=\"comment_input\" class=\"comment-text rounded-0 p-2\" rows=\"5\" placeholder=\"Share some thoughts...\" name=\"newComment\"></textarea>
      <button id=\"comment_submit\" class=\"text-white share-btn btn ml-3 px-4 rounded-0\" data-id=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        Share
      </button>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-4\"></div>
    <div id=\"result-info\"></div>
  </div>
  <!-- Part 4.3 Comment List -->
  <div class=\"container theme-color-text\" id=\"all-comments\">
    ";
        // line 25
        if (0 === twig_compare(($context["comments"] ?? null), false)) {
            // line 26
            echo "      <div class=\"row my-4\">
        <div class=\"col-1\"></div>
        <div class=\"col-11 text-justify\">No comment for this movie yet.</div>
      </div>
    ";
        } else {
            // line 31
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 32
                echo "        <div class=\"row my-4\">
          <div class=\"col-1\">
            <i class=\"fas fa-user fa-2x\"></i>
          </div>
          <div class=\"col-11 text-justify\">
            <p class=\"float-right\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 37), "html", null, true);
                echo "</p>
            <h4>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "username", [], "any", false, false, false, 38), "html", null, true);
                echo "</h4>
            <p>
              ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 40), "html", null, true);
                echo "
            </p>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    ";
        }
        // line 46
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/single_page/movie_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 46,  107 => 45,  96 => 40,  91 => 38,  87 => 37,  80 => 32,  75 => 31,  68 => 26,  66 => 25,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/single_page/movie_comments.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\single_page\\movie_comments.html.twig");
    }
}
