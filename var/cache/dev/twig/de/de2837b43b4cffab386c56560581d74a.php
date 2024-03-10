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

/* read/productos.html.twig */
class __TwigTemplate_9fff8526a3a2eba427d1b56c6a358478 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'listaProducto' => [$this, 'block_listaProducto'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "read/buscar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "read/productos.html.twig"));

        $this->parent = $this->loadTemplate("read/buscar.html.twig", "read/productos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_listaProducto($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "listaProducto"));

        // line 4
        echo "
";
        // line 6
        echo "  <h1>Se han buscados los siguientes productos</h1>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayProductos"]) || array_key_exists("arrayProductos", $context) ? $context["arrayProductos"] : (function () { throw new RuntimeError('Variable "arrayProductos" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 9
            echo "
      <h3>Modelo: ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "modelo", [], "any", false, false, false, 10), "html", null, true);
            echo "</h3>
      <h4>Precio: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 11), "html", null, true);
            echo " \$</h4>
      <p>Fabricante: ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "fabricante", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
      <p>ID: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
      <p>Caracteristicas: ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "caracteristicas", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "read/productos.html.twig";
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
        return array (  98 => 17,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  70 => 9,  66 => 8,  62 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'read/buscar.html.twig' %}

{% block listaProducto %}

{# arrayProductos #}
  <h1>Se han buscados los siguientes productos</h1>

    {% for producto in arrayProductos %}

      <h3>Modelo: {{ producto.modelo }}</h3>
      <h4>Precio: {{ producto.precio }} \$</h4>
      <p>Fabricante: {{ producto.fabricante }}</p>
      <p>ID: {{ producto.id }}</p>
      <p>Caracteristicas: {{ producto.caracteristicas }}</p>

    {% endfor %}

{% endblock %}", "read/productos.html.twig", "C:\\xampp\\htdocs\\ProyectoSymfonyFuncional\\templates\\read\\productos.html.twig");
    }
}
