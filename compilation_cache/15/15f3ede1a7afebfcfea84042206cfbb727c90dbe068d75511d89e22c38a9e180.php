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

/* /single_page/movie_js_logic.html.twig */
class __TwigTemplate_6606980fe5776cfde034b9a23d1d246b4b076d6b5877d96c7ac73e3f0fdbee05 extends Template
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

  \$(\"#comment_submit\").on(\"click\", function(){
    var m_id = \$(this).data(\"id\");
    var content = \$(\"#comment_input\").val();
    // Post the comment to database through Ajax
    \$.post(
      \"/movie/comment/submit\", 
      {
        \"mid\": m_id,
        \"content\": content
      }
    );

    \$(document).ready(() => {
      url = `/movie/movie/get/\${m_id}`;
      \$(location).attr(\"href\", url);
    });
  });
  //     (data) => {
  //       if(data.code == 200){
  //         \$(\"#result-info\").html(
  //           '<div class=\"alert alert-success\" role=\"alert\">\\n' + 
  //             data.message +
  //           '</div>'
  //         );

  //         \$(\"#all-comments\").prepend(
  //           `<div class=\"row my-4\">
  //             <div class=\"col-1\">
  //               <i class=\"fas fa-user fa-2x\"></i>
  //             </div>
  //             <div class=\"col-11 text-justify\">
  //               <h5>Name</h5>
  //               <small>
  //                 \${content}
  //               </small>
  //             </div>
  //           </div>`
  //         );
  //       }else{
  //         \$(\"#result-info\").html(
  //           '<div class=\"alert alert-warning\" role=\"alert\">\\n' + 
  //             data.message +
  //           '</div>'
  //         );
  //       }
  //     },
  //     \"json\"
  //   );
  // });

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

  \$(\".rating\").on(\"click\",function(){
    var m_id = \$(this).data(\"id\");
    var score = \$(this).data(\"score\");
    \$.post(
      \"/movie/rate/score\", 
      {
        \"m_id\": m_id,
        \"score\": score
      },
      () => {
        console.log(m_id, score);
      }
    );

    \$(document).ready(() => {
      url = `/movie/movie/get/\${m_id}`;
      \$(location).attr(\"href\", url);
    });
  });

  \$(\".rating1\").hover(
    function(){
      \$(\".rating1\").removeClass(\"far\").addClass(\"fas\");
    },
    function(){
      \$(\".rating1\").removeClass(\"fas\").addClass(\"far\");
    }
  );

  \$(\".rating2\").hover(
    function(){
      \$(\".rating1\").removeClass(\"far\").addClass(\"fas\");
      \$(\".rating2\").removeClass(\"far\").addClass(\"fas\");
    },
    function(){
      \$(\".rating1\").removeClass(\"fas\").addClass(\"far\");
      \$(\".rating2\").removeClass(\"fas\").addClass(\"far\");
    }
  );

  \$(\".rating3\").hover(
    function(){
      \$(\".rating1\").removeClass(\"far\").addClass(\"fas\");
      \$(\".rating2\").removeClass(\"far\").addClass(\"fas\");
      \$(\".rating3\").removeClass(\"far\").addClass(\"fas\");
    },
    function(){
      \$(\".rating1\").removeClass(\"fas\").addClass(\"far\");
      \$(\".rating2\").removeClass(\"fas\").addClass(\"far\");
      \$(\".rating3\").removeClass(\"fas\").addClass(\"far\");
    }
  );

  \$(\".rating4\").hover(
    function(){
      \$(\".rating1\").removeClass(\"far\").addClass(\"fas\");
      \$(\".rating2\").removeClass(\"far\").addClass(\"fas\");
      \$(\".rating3\").removeClass(\"far\").addClass(\"fas\");
      \$(\".rating4\").removeClass(\"far\").addClass(\"fas\");
    },
    function(){
      \$(\".rating1\").removeClass(\"fas\").addClass(\"far\");
      \$(\".rating2\").removeClass(\"fas\").addClass(\"far\");
      \$(\".rating3\").removeClass(\"fas\").addClass(\"far\");
      \$(\".rating4\").removeClass(\"fas\").addClass(\"far\");
    }
  );

  \$(\".rating5\").hover(
    function(){
      \$(\".rating1\").removeClass(\"far\").addClass(\"fas\");
      \$(\".rating2\").removeClass(\"far\").addClass(\"fas\");
      \$(\".rating3\").removeClass(\"far\").addClass(\"fas\");
      \$(\".rating4\").removeClass(\"far\").addClass(\"fas\");
      \$(\".rating5\").removeClass(\"far\").addClass(\"fas\");
    },
    function(){
      \$(\".rating1\").removeClass(\"fas\").addClass(\"far\");
      \$(\".rating2\").removeClass(\"fas\").addClass(\"far\");
      \$(\".rating3\").removeClass(\"fas\").addClass(\"far\");
      \$(\".rating4\").removeClass(\"fas\").addClass(\"far\");
      \$(\".rating5\").removeClass(\"fas\").addClass(\"far\");
    }
  );
</script>";
    }

    public function getTemplateName()
    {
        return "/single_page/movie_js_logic.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/single_page/movie_js_logic.html.twig", "E:\\XAMPP\\htdocs\\Movie\\templates\\single_page\\movie_js_logic.html.twig");
    }
}
