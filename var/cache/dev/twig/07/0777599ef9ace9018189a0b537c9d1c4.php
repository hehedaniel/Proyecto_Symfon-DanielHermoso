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

/* read/buscar.html.twig */
class __TwigTemplate_05a8b859913bab92e5cd685c0488ed2c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'datos' => [$this, 'block_datos'],
            'listaProducto' => [$this, 'block_listaProducto'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "read/buscar.html.twig"));

        $this->parent = $this->loadTemplate("home.html.twig", "read/buscar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_datos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datos"));

        // line 4
        echo "
  <div>

  <h1>Formulario para buscar un productos</h1>

  <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producto_mostrar");
        echo "\" method=\"GET\" >
    <label for=\"id\">ID:</label>
    <input type=\"text\" id=\"id\" name=\"id\" required>

    <input type=\"submit\" value=\"Submit\">

    <div>
      ";
        // line 16
        $this->displayBlock('listaProducto', $context, $blocks);
        // line 18
        echo "    </div>
  </form>
  </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_listaProducto($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "listaProducto"));

        // line 17
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "read/buscar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  97 => 17,  90 => 16,  79 => 18,  77 => 16,  67 => 9,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home.html.twig' %}

{% block datos %}

  <div>

  <h1>Formulario para buscar un productos</h1>

  <form action=\"{{ path('producto_mostrar') }}\" method=\"GET\" >
    <label for=\"id\">ID:</label>
    <input type=\"text\" id=\"id\" name=\"id\" required>

    <input type=\"submit\" value=\"Submit\">

    <div>
      {% block listaProducto %}
      {% endblock %}
    </div>
  </form>
  </div>

{% endblock %}", "read/buscar.html.twig", "C:\\xampp\\htdocs\\ProyectoSymfonyFuncional\\templates\\read\\buscar.html.twig");
    }
}
