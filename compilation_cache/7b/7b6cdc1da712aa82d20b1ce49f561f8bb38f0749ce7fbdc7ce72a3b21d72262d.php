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

/* /single_page/movie_description.html.twig */
class __TwigTemplate_11e4346cf2fc862918f775d42ff374dd7d90a3b3993c2bf7b9bbaf6e03dc0199 extends Template
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
        echo "<div class=\"container-fluid cate-menu my-3\">
  <div class=\"row mt-3 mx-4 text-secondary grey-bottom\">
    <div class=\"col-1 pb-2 active\">
      Description
    </div>
  </div>

  <div class=\"mx-4 px-5 mt-4 text-secondary text-justify\">
    ";
        // line 10
        echo "    <p class=\"ml-4\">";
        echo twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "description", [], "any", false, false, false, 10);
        echo "</p>
  </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "/single_page/movie_description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/single_page/movie_description.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\single_page\\movie_description.html.twig");
    }
}
