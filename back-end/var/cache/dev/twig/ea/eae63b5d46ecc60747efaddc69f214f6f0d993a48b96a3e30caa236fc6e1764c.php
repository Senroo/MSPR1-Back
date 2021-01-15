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

/* base.html.twig */
class __TwigTemplate_5cacfaf256a3721c8f5f7b53fcab757c11c01165f847ee5f48d5cfe9e42fe473 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>
      ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    </title>
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  </head>
  <body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <a class=\"navbar-brand\" href=\"/\">Mon Site</a>
      <button class=\"navbar-toggler\"
        type=\"button\"
        data-toggle=\"collapse\"
        data-target=\"#navbarColor02\"
        aria-controls=\"navbarColor02\"
        aria-expanded=\"false\"
        aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/blog\">
              Articles
              <span class=\"sr-only\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/blog/new\">Crée un article</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\"
              data-toggle=\"dropdown\"
              href=\"#\"
              role=\"button\"
              aria-haspopup=\"true\"
              aria-expanded=\"false\">
              Dropdown
            </a>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"#\">Action</a>
              <a class=\"dropdown-item\" href=\"#\">Another action</a>
              <a class=\"dropdown-item\" href=\"#\">Something else here</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item\" href=\"#\">Separated link</a>
            </div>
          </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
          <input class=\"form-control mr-sm-2\"
            type=\"text\"
            placeholder=\"Search\" />
          <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">
            Search
          </button>
        </form>
      </div>
    </nav>
    <div class=\"container\">
      ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "    </div>

    ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        Welcome!
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  211 => 74,  201 => 73,  190 => 69,  180 => 68,  170 => 13,  160 => 12,  149 => 7,  139 => 6,  127 => 75,  125 => 73,  121 => 71,  119 => 68,  63 => 14,  61 => 12,  56 => 9,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>
      {% block title %}
        Welcome!
      {% endblock %}
    </title>
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

    {% block stylesheets %}
    {% endblock %}
  </head>
  <body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <a class=\"navbar-brand\" href=\"/\">Mon Site</a>
      <button class=\"navbar-toggler\"
        type=\"button\"
        data-toggle=\"collapse\"
        data-target=\"#navbarColor02\"
        aria-controls=\"navbarColor02\"
        aria-expanded=\"false\"
        aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/blog\">
              Articles
              <span class=\"sr-only\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/blog/new\">Crée un article</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\"
              data-toggle=\"dropdown\"
              href=\"#\"
              role=\"button\"
              aria-haspopup=\"true\"
              aria-expanded=\"false\">
              Dropdown
            </a>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"#\">Action</a>
              <a class=\"dropdown-item\" href=\"#\">Another action</a>
              <a class=\"dropdown-item\" href=\"#\">Something else here</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item\" href=\"#\">Separated link</a>
            </div>
          </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
          <input class=\"form-control mr-sm-2\"
            type=\"text\"
            placeholder=\"Search\" />
          <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">
            Search
          </button>
        </form>
      </div>
    </nav>
    <div class=\"container\">
      {% block body %}

      {% endblock %}
    </div>

    {% block javascripts %}
    {% endblock %}
  </body>
</html>
", "base.html.twig", "C:\\Users\\senge\\Documents\\GitHub\\MSPR1-Back\\back-end\\templates\\base.html.twig");
    }
}
