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

/* /main_page/js_logic.html.twig */
class __TwigTemplate_dbbc7d8d2a3f9ba971f78f22ddd5c1d8800fe53d2965bf5deec252c522296981 extends Template
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
        echo "<script type=\"text/javascript\">
  \$(\"#search-btn\").on(\"click\", function(){
    var searchItem = \$(\"#search-box\").val();
    // Get the search result
    \$(document).ready(() => {
      url = `/movie/search/search/\${searchItem}`;
      \$(location).attr(\"href\", url);
    });
  });

  \$(\".fa-user\").on(\"click\", function(){
    \$(document).ready(() => {
      url = `/movie/login/process`;
      \$(location).attr(\"href\", url);
    });
  });

  \$(\".fa-sign-out-alt\").on(\"click\", function(){
    \$(document).ready(() => {
      url = `/movie/login/logout`;
      \$(location).attr(\"href\", url);
    });
  });

  // Automatic slide show
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = \$(\".mySlides\");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = \"none\";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = \"block\";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
</script>";
    }

    public function getTemplateName()
    {
        return "/main_page/js_logic.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/main_page/js_logic.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\main_page\\js_logic.html.twig");
    }
}
