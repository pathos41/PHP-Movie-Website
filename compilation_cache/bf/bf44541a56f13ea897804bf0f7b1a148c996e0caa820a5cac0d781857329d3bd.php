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

/* /common/footer.html.twig */
class __TwigTemplate_7349f67b73c94c5b2b978374e8d4c6c86dca890fd0a40ff24e6fa39e9c540a41 extends Template
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
        echo "<div class=\"footer-logos mt-3\">
  <div class=\"social-media\">
    <div class=\"row\">
      <!-- Social media -->
      <div class=\"col-12 col-md-4 px-0\">
        <a href=\"https://www.facebook.com\" target=\"blank\"><i class=\"fab fa-facebook\"></i></a>
        <a href=\"https://twitter.com\" target=\"blank\"><i class=\"fab fa-twitter-square\"></i></a>
        <a href=\"https://www.youtube.com\" target=\"blank\"><i class=\"fab fa-youtube-square\"></i></a>
        <a href=\"https://www.instagram.com\" target=\"blank\"><i class=\"fab fa-instagram\"></i></a>
        <a href=\"https://www.linkedin.com\" target=\"blank\"><i class=\"fab fa-linkedin\"></i></a>
        <a href=\"https://www.pinterest.ca\" target=\"blank\"><i class=\"fab fa-pinterest\"></i></a>
        <a href=\"https://www.snapchat.com\" target=\"blank\"><i class=\"fab fa-snapchat\"></i></a>
      </div>
      <!-- TOS policy and language -->
      <div class=\"col-12 col-md-8\">
        <div class=\"float-right\">
          <a class=\"last-texts\" href=\"#\">Terms of Service</a>
          <a class=\"last-texts\" href=\"#\">Privacy Policy</a>
          <a class=\"last-texts\" href=\"#\"><i class=\"fas fa-globe-americas\"></i> Canada (English) <i class=\"fas fa-caret-down\"></i></a>
        </div>
      </div>
      <div class=\"col-0 col-xl-1 px-0\"></div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/common/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/common/footer.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\common\\footer.html.twig");
    }
}
