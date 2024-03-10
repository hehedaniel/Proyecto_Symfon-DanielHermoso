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

/* update/actualizar.html.twig */
class __TwigTemplate_81341f36b524f4bf8913b78024482c17 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "update/actualizar.html.twig"));

        $this->parent = $this->loadTemplate("home.html.twig", "update/actualizar.html.twig", 1);
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

  <h1>Formulario para actualizar un productos</h1>

  <form action=\"#\" method=\"post\" onsubmit=\"return validarFormulario()\">
    <label for=\"id\">ID:</label>
    <input type=\"text\" id=\"id\" name=\"id\" required value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\"><br>

    <label for=\"modelo\">Modelo:</label>
    <input type=\"text\" id=\"modelo\" name=\"modelo\" required value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 14, $this->source); })()), "modelo", [], "any", false, false, false, 14), "html", null, true);
        echo "\"><br>

    <label for=\"fabricante\">Fabricante:</label>
    <input type=\"text\" id=\"fabricante\" name=\"fabricante\" required value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 17, $this->source); })()), "fabricante", [], "any", false, false, false, 17), "html", null, true);
        echo "\"><br>

    <label for=\"precio\">Precio:</label>
    <input type=\"number\" id=\"precio\" name=\"precio\" step=\"0.01\" required value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 20, $this->source); })()), "precio", [], "any", false, false, false, 20), "html", null, true);
        echo "\"><br>

    <label for=\"caracteristicas\">Características:</label>
    <textarea id=\"caracteristicas\" name=\"caracteristicas\" rows=\"4\" required value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 23, $this->source); })()), "caracteristicas", [], "any", false, false, false, 23), "html", null, true);
        echo "\"></textarea><br>

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
        return "update/actualizar.html.twig";
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
        return array (  92 => 23,  86 => 20,  80 => 17,  74 => 14,  68 => 11,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home.html.twig' %}

{% block datos %}

  <div>

  <h1>Formulario para actualizar un productos</h1>

  <form action=\"#\" method=\"post\" onsubmit=\"return validarFormulario()\">
    <label for=\"id\">ID:</label>
    <input type=\"text\" id=\"id\" name=\"id\" required value=\"{{productos.id}}\"><br>

    <label for=\"modelo\">Modelo:</label>
    <input type=\"text\" id=\"modelo\" name=\"modelo\" required value=\"{{productos.modelo}}\"><br>

    <label for=\"fabricante\">Fabricante:</label>
    <input type=\"text\" id=\"fabricante\" name=\"fabricante\" required value=\"{{productos.fabricante}}\"><br>

    <label for=\"precio\">Precio:</label>
    <input type=\"number\" id=\"precio\" name=\"precio\" step=\"0.01\" required value=\"{{productos.precio}}\"><br>

    <label for=\"caracteristicas\">Características:</label>
    <textarea id=\"caracteristicas\" name=\"caracteristicas\" rows=\"4\" required value=\"{{productos.caracteristicas}}\"></textarea><br>

    <input type=\"submit\" value=\"Enviar\">
  </form>
  </div>

{% endblock %}", "update/actualizar.html.twig", "C:\\xampp\\htdocs\\ProyectoSymfonyFuncional\\templates\\update\\actualizar.html.twig");
    }
}
