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

/* blog/show.html.twig */
class __TwigTemplate_55dc053db089f2bf67c71095e0dc4628202e4cdd8acfc9b604986cf1c3a45bd5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <article>
    <img class=\"mt-5\" src=\"https://picsum.photos/200/300\" />
    <h2>
      Titre de l'artciles
    </h2>
    <div class=\"metabase mt-5\">
      Ecrit le 96 janvier à 9 h 00
    </div>
    <div class=\"content\">
      <p>
        Sint nostrud nulla dolore quis nisi. Nulla eiusmod cupidatat laborum ad
        nostrud proident dolor consequat voluptate. Ad consectetur cillum enim
        amet deserunt enim. Qui sit consectetur elit pariatur culpa. Dolore id
        ipsum occaecat in. Excepteur consequat adipisicing incididunt sunt
        aliqua sunt minim in deserunt exercitation minim ipsum.
      </p>
      <p>
        Sint nostrud nulla dolore quis nisi. Nulla eiusmod cupidatat laborum ad
        nostrud proident dolor consequat voluptate. Ad consectetur cillum enim
        amet deserunt enim. Qui sit consectetur elit pariatur culpa. Dolore id
        ipsum occaecat in. Excepteur consequat adipisicing incididunt sunt
        aliqua sunt minim in deserunt exercitation minim ipsum.
      </p>
      <hr />
      <p>
        Sint nostrud nulla dolore quis nisi. Nulla eiusmod cupidatat laborum ad
        nostrud proident dolor consequat voluptate. Ad consectetur cillum enim
        amet deserunt enim. Qui sit consectetur elit pariatur culpa. Dolore id
        ipsum occaecat in. Excepteur consequat adipisicing incididunt sunt
        aliqua sunt minim in deserunt exercitation minim ipsum.
      </p>
      <p>
        Sint nostrud nulla dolore quis nisi. Nulla eiusmod cupidatat laborum ad
        nostrud proident dolor consequat voluptate. Ad consectetur cillum enim
        amet deserunt enim. Qui sit consectetur elit pariatur culpa. Dolore id
        ipsum occaecat in. Excepteur consequat adipisicing incididunt sunt
        aliqua sunt minim in deserunt exercitation minim ipsum.
      </p>
    </div>
  </article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <article>
    <img class=\"mt-5\" src=\"https://picsum.photos/200/300\" />
    <h2>
      Titre de l'artciles
    </h2>
    <div class=\"metabase mt-5\">
      Ecrit le 96 janvier à 9 h 00
    </div>
    <div class=\"content\">
      <p>
        Sint nostrud nulla dolore quis nisi. Nulla eiusmod cupidatat laborum ad
        nostrud proident dolor consequat voluptate. Ad consectetur cillum enim
        amet deserunt enim. Qui sit consectetur elit pariatur culpa. Dolore id
        ipsum occaecat in. Excepteur consequat adipisicing incididunt sunt
        aliqua sunt minim in deserunt exercitation minim ipsum.
      </p>
      <p>
        Sint nostrud nulla dolore quis nisi. Nulla eiusmod cupidatat laborum ad
        nostrud proident dolor consequat voluptate. Ad consectetur cillum enim
        amet deserunt enim. Qui sit consectetur elit pariatur culpa. Dolore id
        ipsum occaecat in. Excepteur consequat adipisicing incididunt sunt
        aliqua sunt minim in deserunt exercitation minim ipsum.
      </p>
      <hr />
      <p>
        Sint nostrud nulla dolore quis nisi. Nulla eiusmod cupidatat laborum ad
        nostrud proident dolor consequat voluptate. Ad consectetur cillum enim
        amet deserunt enim. Qui sit consectetur elit pariatur culpa. Dolore id
        ipsum occaecat in. Excepteur consequat adipisicing incididunt sunt
        aliqua sunt minim in deserunt exercitation minim ipsum.
      </p>
      <p>
        Sint nostrud nulla dolore quis nisi. Nulla eiusmod cupidatat laborum ad
        nostrud proident dolor consequat voluptate. Ad consectetur cillum enim
        amet deserunt enim. Qui sit consectetur elit pariatur culpa. Dolore id
        ipsum occaecat in. Excepteur consequat adipisicing incididunt sunt
        aliqua sunt minim in deserunt exercitation minim ipsum.
      </p>
    </div>
  </article>
{% endblock %}
", "blog/show.html.twig", "C:\\Users\\senge\\Documents\\GitHub\\MSPR1-Back\\back-end\\templates\\blog\\show.html.twig");
    }
}
