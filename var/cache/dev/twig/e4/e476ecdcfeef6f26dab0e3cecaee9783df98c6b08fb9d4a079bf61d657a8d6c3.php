<?php

/* alcool_list.html.twig */
class __TwigTemplate_f02ffe1e2792043e5850c07a38b6ce310c270c580e718456d9a2dadb5ae3433c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "alcool_list.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alcool_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alcool_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/list.css\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_article($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 9
        echo "

<div class=\"grid grid-pad\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alcool_list"]) || array_key_exists("alcool_list", $context) ? $context["alcool_list"] : (function () { throw new Twig_Error_Runtime('Variable "alcool_list" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alc"]) {
            // line 13
            echo "


<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_show", array("name" => twig_get_attribute($this->env, $this->source, $context["alc"], "name", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alc"], "name", array()), "html", null, true);
            echo "\"><img src=\"/img_alcool/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alc"], "imglink", array()), "html", null, true);
            echo "\" class=\"alcool\"></a>



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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 25, $this->source); })()) - 1))), "html", null, true);
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
        if ((((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 32, $this->source); })()) - ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 32, $this->source); })()) * 18)) >= 0)) {
            // line 33
            echo "  <div class=\"button\">
    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 34, $this->source); })()) + 1))), "html", null, true);
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
        return "alcool_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 37,  137 => 34,  134 => 33,  132 => 32,  127 => 30,  124 => 29,  115 => 25,  112 => 24,  110 => 23,  106 => 21,  91 => 16,  86 => 13,  82 => 12,  77 => 9,  68 => 8,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base/base.html.twig' %}

{% block css %}
  {{ parent() }}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/list.css\" />
{% endblock %}

{% block article %}


<div class=\"grid grid-pad\">
{% for alc in alcool_list %}



<a href=\"{{ path('alcool_show', {'name': alc.name }) }}\" title=\"{{alc.name}}\"><img src=\"/img_alcool/{{ alc.imglink }}\" class=\"alcool\"></a>



{% endfor %}

<div class=\"buttonPage\">
  {% if page != 1 %}
  <div class=\"button\">
    <a href=\"{{ path('alcool_list', {'page': page - 1}) }}\" class=\"button\">page {{ page - 1 }}</a>

  </div>
  {% endif %}
  <div class=\"button\">
    page {{ page }}
  </div>
  {% if nbrAlcool - page * 18 >= 0 %}
  <div class=\"button\">
    <a href=\"{{ path('alcool_list', {'page': page + 1}) }}\" class=\"button\">page {{ page + 1 }}</a>
  </div>
  {% endif %}
</div>

</div>

{% endblock %}
", "alcool_list.html.twig", "/home/gperrier/Documents/web/site/templates/alcool_list.html.twig");
    }
}
