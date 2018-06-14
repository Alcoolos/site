<?php

/* alcool_list_admin.html.twig */
class __TwigTemplate_56d79facf71ca8217c740245f2ed80c39b9853a1c5e6b25dcdaccd89c195ac9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "alcool_list_admin.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b259c70c2761b8185437db55344b8b1ce8b9bf77afdd1c3a3bd058ba825957dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b259c70c2761b8185437db55344b8b1ce8b9bf77afdd1c3a3bd058ba825957dd->enter($__internal_b259c70c2761b8185437db55344b8b1ce8b9bf77afdd1c3a3bd058ba825957dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alcool_list_admin.html.twig"));

        $__internal_cf623cd1ffd3d2038448e7ac1e6be8e1bda2f8e77ca0db1549ac3a4c75b69bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf623cd1ffd3d2038448e7ac1e6be8e1bda2f8e77ca0db1549ac3a4c75b69bf8->enter($__internal_cf623cd1ffd3d2038448e7ac1e6be8e1bda2f8e77ca0db1549ac3a4c75b69bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alcool_list_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b259c70c2761b8185437db55344b8b1ce8b9bf77afdd1c3a3bd058ba825957dd->leave($__internal_b259c70c2761b8185437db55344b8b1ce8b9bf77afdd1c3a3bd058ba825957dd_prof);

        
        $__internal_cf623cd1ffd3d2038448e7ac1e6be8e1bda2f8e77ca0db1549ac3a4c75b69bf8->leave($__internal_cf623cd1ffd3d2038448e7ac1e6be8e1bda2f8e77ca0db1549ac3a4c75b69bf8_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_585208370b3bc360036386facea46102ace5a0f80b53b7676b2a29903164af0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585208370b3bc360036386facea46102ace5a0f80b53b7676b2a29903164af0b->enter($__internal_585208370b3bc360036386facea46102ace5a0f80b53b7676b2a29903164af0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_2b63b4f90480a8bfc409f1597489032d033fd3ca24d7a2d859f582cb80e0055f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b63b4f90480a8bfc409f1597489032d033fd3ca24d7a2d859f582cb80e0055f->enter($__internal_2b63b4f90480a8bfc409f1597489032d033fd3ca24d7a2d859f582cb80e0055f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

<div class=\"grid grid-pad\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alcools"]) || array_key_exists("alcools", $context) ? $context["alcools"] : (function () { throw new Twig_Error_Runtime('Variable "alcools" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alc"]) {
            // line 8
            echo "
<div class=\"ingr\">
<div class=\"drop-img\">
<img src=\"/img_alcool/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alc"], "imglink", array()), "html", null, true);
            echo "\" class=\"alcool\">
  <div class=\"dropdown-content\">
      <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["alc"], "name", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["alc"], "name", array()))), "html", null, true);
            echo "\">Supprimer</a>
  </div>
</div>
</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
<div class=\"buttonPage\">
  ";
        // line 23
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 23, $this->getSourceContext()); })()) != 1)) {
            // line 24
            echo "  <div class=\"button\">
    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alcool_list_admin", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 25, $this->getSourceContext()); })()) - 1))), "html", null, true);
            echo "\" class=\"button\">page ";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 25, $this->getSourceContext()); })()) - 1), "html", null, true);
            echo "</a>

  </div>
  ";
        }
        // line 29
        echo "  <div class=\"button\">
    page ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 30, $this->getSourceContext()); })()), "html", null, true);
        echo "
  </div>
  ";
        // line 32
        if ((((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 32, $this->getSourceContext()); })()) - ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 32, $this->getSourceContext()); })()) * 16)) >= 0)) {
            // line 33
            echo "  <div class=\"button\">
    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alcool_list_admin", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 34, $this->getSourceContext()); })()) + 1))), "html", null, true);
            echo "\" class=\"button\">page ";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 34, $this->getSourceContext()); })()) + 1), "html", null, true);
            echo "</a>
  </div>
  ";
        }
        // line 37
        echo "</div>

</div>

";
        
        $__internal_2b63b4f90480a8bfc409f1597489032d033fd3ca24d7a2d859f582cb80e0055f->leave($__internal_2b63b4f90480a8bfc409f1597489032d033fd3ca24d7a2d859f582cb80e0055f_prof);

        
        $__internal_585208370b3bc360036386facea46102ace5a0f80b53b7676b2a29903164af0b->leave($__internal_585208370b3bc360036386facea46102ace5a0f80b53b7676b2a29903164af0b_prof);

    }

    public function getTemplateName()
    {
        return "alcool_list_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  116 => 34,  113 => 33,  111 => 32,  106 => 30,  103 => 29,  94 => 25,  91 => 24,  89 => 23,  85 => 21,  72 => 14,  68 => 13,  63 => 11,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block main %}


<div class=\"grid grid-pad\">
{% for alc in alcools %}

<div class=\"ingr\">
<div class=\"drop-img\">
<img src=\"/img_alcool/{{ alc.imglink }}\" class=\"alcool\">
  <div class=\"dropdown-content\">
      <a href=\"{{ path('modify', {'name': alc.name}) }}\">Modifier</a>
      <a href=\"{{ path('delete', {'name': alc.name}) }}\">Supprimer</a>
  </div>
</div>
</div>


{% endfor %}

<div class=\"buttonPage\">
  {% if page != 1 %}
  <div class=\"button\">
    <a href=\"{{ path('alcool_list_admin', {'page': page - 1}) }}\" class=\"button\">page {{ page - 1 }}</a>

  </div>
  {% endif %}
  <div class=\"button\">
    page {{ page }}
  </div>
  {% if nbrAlcool - page * 16 >= 0 %}
  <div class=\"button\">
    <a href=\"{{ path('alcool_list_admin', {'page': page + 1}) }}\" class=\"button\">page {{ page + 1 }}</a>
  </div>
  {% endif %}
</div>

</div>

{% endblock %}
", "alcool_list_admin.html.twig", "/home/gperrier/Documents/web/site/templates/alcool_list_admin.html.twig");
    }
}
