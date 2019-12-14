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

/* /common/header.html.twig */
class __TwigTemplate_59846c4763b5bda9b5098b8ae5fff6f48984f85179033e38c3a6c1fb1ebf831e extends Template
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
        echo "<nav class=\"navbar navbar-expand-lg color-theme\">
  <a class=\"navbar-brand text-white\" href=\"/movie\">Cinematic Universe</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav ml-auto mr-2\">
      <li>
        <div class=\"container part-1-2 d-flex justify-content-center\">
          <div class=\"form-inline my-2 my-lg-0\">
            <input id=\"search-box\" class=\"form-control rounded-0 border-white\" type=\"search\" placeholder=\"Search...\" aria-label=\"Search\" name=\"searchBox\">
            ";
        // line 14
        echo "              <button id=\"search-btn\" class=\"btn my-2 my-sm-0 text-white rounded-0 color-theme\" name=\"searchBtn\">  
                <i class=\"fas fa-search\"></i>
              </button>
            ";
        // line 18
        echo "          </div>
        </div>
      </li>
      <li class=\"nav-item active\">
        <a class=\"nav-link text-white\" href=\"/movie\">Movies</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link text-white\" href=\"/movie/ranking/rank\">Ranking</a>
      </li>
      <li class=\"nav-item ml-2\">
        <a class=\"nav-link text-white pr-1\" href=\"#\">
          <i class=\"fas fa-user\"></i>
        </a>
      </li>
      ";
        // line 32
        if (($context["login_status"] ?? null)) {
            // line 33
            echo "        <li class=\"nav-item\">
          <span class=\"nav-link text-white px-0\">";
            // line 34
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "</span>
        </li>
      ";
        }
        // line 37
        echo "      <li class=\"nav-item ml-2\">
        <a class=\"nav-link text-white pr-1\" href=\"#\">
          <i class=\"fas fa-sign-out-alt\"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/common/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 37,  77 => 34,  74 => 33,  72 => 32,  56 => 18,  51 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/common/header.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\common\\header.html.twig");
    }
}
