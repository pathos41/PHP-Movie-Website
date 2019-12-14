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

/* index.html.twig */
class __TwigTemplate_6fd6dd7b06efc8343ba37746e73510e22aa96b7aefd596330035d69464fc0f0a extends Template
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
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"
    anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lobster|Oswald|Patua+One&display=swap\" rel=\"stylesheet\">
    <style type=\"text/css\">
      /* Fading animation */
      .fadeAnimation {
        -webkit-animation-name: fadeAnimation;
        -webkit-animation-duration: 1.5s;
        -webkit-animation-fill-mode: forwards;
        animation-name: fadeAnimation;
        animation-duration: 1.5s;
        animation-fill-mode: forwards; 
      }

      @-webkit-keyframes fadeAnimation {
        from { opacity: 0.4; }
        to { opacity: 1; }
      }

      @keyframes fadeAnimation {
        from { opacity: 0.4; }
        to { opacity: 1; }
      }

      a:hover{
        text-decoration: none;
        cursor: pointer;
      } 

      .cate-menu .active{
        color: #000639;
        border-bottom: 2px solid #000639;
        /*line-height: 2.4rem;*/
      } 
    </style>
    <title>Movie Main Page</title>
  </head>
  <body>
    <!-- Part 1 Header navbar -->
    ";
        // line 49
        echo Twig\Extra\CssInliner\twig_inline_css(twig_include($this->env, $context, "/common/header.html.twig"), twig_source($this->env, "/style/header.css"));
        echo "
    
    <!-- Part 2 Banner Slideshow-->
    ";
        // line 52
        $this->loadTemplate("/main_page/slideshow.html.twig", "index.html.twig", 52)->display($context);
        // line 53
        echo "
    <!-- Part 3 Movie List -->
    ";
        // line 55
        $this->loadTemplate("/main_page/movie_list.html.twig", "index.html.twig", 55)->display($context);
        // line 56
        echo "
    <!-- Part 4 Footer -->
    ";
        // line 58
        echo Twig\Extra\CssInliner\twig_inline_css(twig_include($this->env, $context, "/common/footer.html.twig"), twig_source($this->env, "/style/footer.css"));
        echo "

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <!-- Customized js -->
    ";
        // line 66
        $this->loadTemplate("/main_page/js_logic.html.twig", "index.html.twig", 66)->display($context);
        // line 67
        echo "  </body>
</html>
";
        $___internal_6e3d942354e238d2bb253a1d122454706bc5b40b7743354b93c8f69be7f72aba_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo Twig\Extra\CssInliner\twig_inline_css($___internal_6e3d942354e238d2bb253a1d122454706bc5b40b7743354b93c8f69be7f72aba_, twig_source($this->env, "/style/index.css"));
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 2,  121 => 67,  119 => 66,  108 => 58,  104 => 56,  102 => 55,  98 => 53,  96 => 52,  90 => 49,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\index.html.twig");
    }
}
