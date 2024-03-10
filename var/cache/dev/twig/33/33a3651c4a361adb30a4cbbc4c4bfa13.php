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

/* anadir.html.twig */
class __TwigTemplate_2898eb01478259ddd48aff046bcbb028 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'datos' => [$this, 'block_datos'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anadir.html.twig"));

        $this->parent = $this->loadTemplate("home.html.twig", "anadir.html.twig", 1);
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

  <h1>Formulario de anadir nuevo Producto</h1>

  <form action=\"#\" method=\"post\" onsubmit=\"return validarFormulario()\">
    <label for=\"id\">ID:</label>
    <input type=\"text\" id=\"id\" name=\"id\" required><br>

    <label for=\"modelo\">Modelo:</label>
    <input type=\"text\" id=\"modelo\" name=\"modelo\" required><br>

    <label for=\"fabricante\">Fabricante:</label>
    <input type=\"text\" id=\"fabricante\" name=\"fabricante\" required><br>

    <label for=\"precio\">Precio:</label>
    <input type=\"number\" id=\"precio\" name=\"precio\" step=\"0.01\" required><br>

    <label for=\"caracteristicas\">Características:</label>
    <textarea id=\"caracteristicas\" name=\"caracteristicas\" rows=\"4\" required></textarea><br>

    <input type=\"submit\" value=\"Enviar\">
  </form>
  </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "anadir.html.twig";
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
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home.html.twig' %}

{% block datos %}

  <div>

  <h1>Formulario de anadir nuevo Producto</h1>

  <form action=\"#\" method=\"post\" onsubmit=\"return validarFormulario()\">
    <label for=\"id\">ID:</label>
    <input type=\"text\" id=\"id\" name=\"id\" required><br>

    <label for=\"modelo\">Modelo:</label>
    <input type=\"text\" id=\"modelo\" name=\"modelo\" required><br>

    <label for=\"fabricante\">Fabricante:</label>
    <input type=\"text\" id=\"fabricante\" name=\"fabricante\" required><br>

    <label for=\"precio\">Precio:</label>
    <input type=\"number\" id=\"precio\" name=\"precio\" step=\"0.01\" required><br>

    <label for=\"caracteristicas\">Características:</label>
    <textarea id=\"caracteristicas\" name=\"caracteristicas\" rows=\"4\" required></textarea><br>

    <input type=\"submit\" value=\"Enviar\">
  </form>
  </div>

{% endblock %}", "anadir.html.twig", "C:\\xampp\\htdocs\\ProyectoSymfonyFuncional\\templates\\anadir.html.twig");
    }
}
