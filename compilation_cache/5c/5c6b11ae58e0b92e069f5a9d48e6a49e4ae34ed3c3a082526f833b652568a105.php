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

/* movie.html.twig */
class __TwigTemplate_e23388eb41a80f0d7e2a77af94fb4d0c81d3534e762919ff26454f3b690db1e8 extends Template
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
        echo "<!doctype html>
";
        // line 2
        ob_start(function () { return ''; });
        // line 3
        echo "<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lobster|Oswald|Patua+One&display=swap\" rel=\"stylesheet\">
    ";
        // line 14
        echo "    <title>Movie Single Page</title>
  </head>
  <body>
    <!-- Part 1 Header navbar -->
    ";
        // line 18
        echo Twig\Extra\CssInliner\twig_inline_css(twig_include($this->env, $context, "/common/header.html.twig"), twig_source($this->env, "/style/header.css"));
        echo "

    <!-- Part 2 Banner video -->
    ";
        // line 21
        $this->loadTemplate("/single_page/movie_banner_video.html.twig", "movie.html.twig", 21)->display($context);
        // line 22
        echo "
    <!-- Part 3 Description -->
    ";
        // line 24
        $this->loadTemplate("/single_page/movie_description.html.twig", "movie.html.twig", 24)->display($context);
        // line 25
        echo "
    <!-- Part 4 Comment -->
    ";
        // line 27
        $this->loadTemplate("/single_page/movie_comments.html.twig", "movie.html.twig", 27)->display($context);
        // line 28
        echo "
    <!-- Part 4 Footer -->
    ";
        // line 30
        echo Twig\Extra\CssInliner\twig_inline_css(twig_include($this->env, $context, "/common/footer.html.twig"), twig_source($this->env, "/style/footer.css"));
        echo "
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <!-- Customized js -->
    ";
        // line 38
        $this->loadTemplate("/single_page/movie_js_logic.html.twig", "movie.html.twig", 38)->display($context);
        // line 39
        echo "  </body>
</html>
";
        $___internal_0ea385791274069ddcf411bff53f066b58f3c0b1613223eb8a5b4eaf1b88f0e1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo Twig\Extra\CssInliner\twig_inline_css($___internal_0ea385791274069ddcf411bff53f066b58f3c0b1613223eb8a5b4eaf1b88f0e1_, twig_source($this->env, "/style/movie.css"));
    }

    public function getTemplateName()
    {
        return "movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 2,  97 => 39,  95 => 38,  84 => 30,  80 => 28,  78 => 27,  74 => 25,  72 => 24,  68 => 22,  66 => 21,  60 => 18,  54 => 14,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "movie.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\movie.html.twig");
    }
}
