<?php

/* alcool_list.html.twig */
class __TwigTemplate_191daa70f26cf4846b188365dd14248c8f3cc53cb8fb305f9f43b28aa905e74c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_641e621ffebc23a252d5258d774a3295f72662d3d028d26bce79d4deb687defc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641e621ffebc23a252d5258d774a3295f72662d3d028d26bce79d4deb687defc->enter($__internal_641e621ffebc23a252d5258d774a3295f72662d3d028d26bce79d4deb687defc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alcool_list.html.twig"));

        $__internal_11f4a85888f732feb6d75f8e605b1d617e37200eb55cda3c7252ff490cd7d8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f4a85888f732feb6d75f8e605b1d617e37200eb55cda3c7252ff490cd7d8c4->enter($__internal_11f4a85888f732feb6d75f8e605b1d617e37200eb55cda3c7252ff490cd7d8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alcool_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_641e621ffebc23a252d5258d774a3295f72662d3d028d26bce79d4deb687defc->leave($__internal_641e621ffebc23a252d5258d774a3295f72662d3d028d26bce79d4deb687defc_prof);

        
        $__internal_11f4a85888f732feb6d75f8e605b1d617e37200eb55cda3c7252ff490cd7d8c4->leave($__internal_11f4a85888f732feb6d75f8e605b1d617e37200eb55cda3c7252ff490cd7d8c4_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_17ebfd1634c181c431b2f13bd86d71ee8e2e4a347d3f20b4cd8da7b181cefe2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ebfd1634c181c431b2f13bd86d71ee8e2e4a347d3f20b4cd8da7b181cefe2c->enter($__internal_17ebfd1634c181c431b2f13bd86d71ee8e2e4a347d3f20b4cd8da7b181cefe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_adfe80e96290facb1bc340e25f537da0ca329ee1379d94cf9c660280d7890fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfe80e96290facb1bc340e25f537da0ca329ee1379d94cf9c660280d7890fab->enter($__internal_adfe80e96290facb1bc340e25f537da0ca329ee1379d94cf9c660280d7890fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/list.css\" />
";
        
        $__internal_adfe80e96290facb1bc340e25f537da0ca329ee1379d94cf9c660280d7890fab->leave($__internal_adfe80e96290facb1bc340e25f537da0ca329ee1379d94cf9c660280d7890fab_prof);

        
        $__internal_17ebfd1634c181c431b2f13bd86d71ee8e2e4a347d3f20b4cd8da7b181cefe2c->leave($__internal_17ebfd1634c181c431b2f13bd86d71ee8e2e4a347d3f20b4cd8da7b181cefe2c_prof);

    }

    // line 8
    public function block_article($context, array $blocks = array())
    {
        $__internal_2e46107aeaa5297358cc351901d2c53416eec71373dcf046462a79eaad160f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e46107aeaa5297358cc351901d2c53416eec71373dcf046462a79eaad160f9d->enter($__internal_2e46107aeaa5297358cc351901d2c53416eec71373dcf046462a79eaad160f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        $__internal_fb0d4b378fe2b8c1858324599d45518c940943e794b22b898c75ef9d89ec1641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0d4b378fe2b8c1858324599d45518c940943e794b22b898c75ef9d89ec1641->enter($__internal_fb0d4b378fe2b8c1858324599d45518c940943e794b22b898c75ef9d89ec1641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 9
        echo "

<div class=\"grid grid-pad\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alcool_list"]) || array_key_exists("alcool_list", $context) ? $context["alcool_list"] : (function () { throw new Twig_Error_Runtime('Variable "alcool_list" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alc"]) {
            // line 13
            echo "


<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alcool_show", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["alc"], "name", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alc"], "name", array()), "html", null, true);
            echo "\"><img src=\"/img_alcool/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alc"], "imglink", array()), "html", null, true);
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
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 23, $this->getSourceContext()); })()) != 1)) {
            // line 24
            echo "  <div class=\"button\">
    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alcool_list", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 25, $this->getSourceContext()); })()) - 1))), "html", null, true);
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
        if ((((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 32, $this->getSourceContext()); })()) - ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 32, $this->getSourceContext()); })()) * 18)) >= 0)) {
            // line 33
            echo "  <div class=\"button\">
    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alcool_list", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 34, $this->getSourceContext()); })()) + 1))), "html", null, true);
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
        
        $__internal_fb0d4b378fe2b8c1858324599d45518c940943e794b22b898c75ef9d89ec1641->leave($__internal_fb0d4b378fe2b8c1858324599d45518c940943e794b22b898c75ef9d89ec1641_prof);

        
        $__internal_2e46107aeaa5297358cc351901d2c53416eec71373dcf046462a79eaad160f9d->leave($__internal_2e46107aeaa5297358cc351901d2c53416eec71373dcf046462a79eaad160f9d_prof);

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
        return array (  141 => 37,  133 => 34,  130 => 33,  128 => 32,  123 => 30,  120 => 29,  111 => 25,  108 => 24,  106 => 23,  102 => 21,  87 => 16,  82 => 13,  78 => 12,  73 => 9,  64 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
