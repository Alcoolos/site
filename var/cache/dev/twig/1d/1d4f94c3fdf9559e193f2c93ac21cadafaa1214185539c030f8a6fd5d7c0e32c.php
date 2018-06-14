<?php

/* alcool_list_admin.html.twig */
class __TwigTemplate_4cf4c3da795d6ffd549e06a0b536530c85376b788061d641820c2e249452e201 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alcool_list_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alcool_list_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

<div class=\"grid grid-pad\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alcools"]) || array_key_exists("alcools", $context) ? $context["alcools"] : (function () { throw new Twig_Error_Runtime('Variable "alcools" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alc"]) {
            // line 8
            echo "
<div class=\"ingr\">
<div class=\"drop-img\">
<img src=\"/img_alcool/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alc"], "imglink", array()), "html", null, true);
            echo "\" class=\"alcool\">
  <div class=\"dropdown-content\">
      <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify", array("name" => twig_get_attribute($this->env, $this->source, $context["alc"], "name", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("name" => twig_get_attribute($this->env, $this->source, $context["alc"], "name", array()))), "html", null, true);
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
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 23, $this->source); })()) != 1)) {
            // line 24
            echo "  <div class=\"button\">
    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 25, $this->source); })()) - 1))), "html", null, true);
            echo "\" class=\"button\">page ";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 25, $this->source); })()) - 1), "html", null, true);
            echo "</a>

  </div>
  ";
        }
        // line 29
        echo "  <div class=\"button\">
    page ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "
  </div>
  ";
        // line 32
        if ((((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 32, $this->source); })()) - ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 32, $this->source); })()) * 16)) >= 0)) {
            // line 33
            echo "  <div class=\"button\">
    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 34, $this->source); })()) + 1))), "html", null, true);
            echo "\" class=\"button\">page ";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 34, $this->source); })()) + 1), "html", null, true);
            echo "</a>
  </div>
  ";
        }
        // line 37
        echo "</div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  128 => 37,  120 => 34,  117 => 33,  115 => 32,  110 => 30,  107 => 29,  98 => 25,  95 => 24,  93 => 23,  89 => 21,  76 => 14,  72 => 13,  67 => 11,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
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
