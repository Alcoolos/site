<?php

/* article.html.twig */
class __TwigTemplate_2310a64bf30c5a2853f9259852d7ce2a6e058b36a4147be849914575706f7f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_75af8dfc9a0897ca711afe2f89e50ab5f7f2c703151dfabf1ada8c69dc0276be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75af8dfc9a0897ca711afe2f89e50ab5f7f2c703151dfabf1ada8c69dc0276be->enter($__internal_75af8dfc9a0897ca711afe2f89e50ab5f7f2c703151dfabf1ada8c69dc0276be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article.html.twig"));

        $__internal_800d1fbae5bcb3f74cb0b88049d61b20315478eb78be788809f7741799f27ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800d1fbae5bcb3f74cb0b88049d61b20315478eb78be788809f7741799f27ab9->enter($__internal_800d1fbae5bcb3f74cb0b88049d61b20315478eb78be788809f7741799f27ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75af8dfc9a0897ca711afe2f89e50ab5f7f2c703151dfabf1ada8c69dc0276be->leave($__internal_75af8dfc9a0897ca711afe2f89e50ab5f7f2c703151dfabf1ada8c69dc0276be_prof);

        
        $__internal_800d1fbae5bcb3f74cb0b88049d61b20315478eb78be788809f7741799f27ab9->leave($__internal_800d1fbae5bcb3f74cb0b88049d61b20315478eb78be788809f7741799f27ab9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a8270a79fa35efcce949b16ee24985c5a9fd548914ed8a0fb5293488c76d0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8270a79fa35efcce949b16ee24985c5a9fd548914ed8a0fb5293488c76d0e2->enter($__internal_6a8270a79fa35efcce949b16ee24985c5a9fd548914ed8a0fb5293488c76d0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85c9be4e194127f1074a2a0705fd63a5b5bb6598381552bd8cc15521d9f05abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c9be4e194127f1074a2a0705fd63a5b5bb6598381552bd8cc15521d9f05abd->enter($__internal_85c9be4e194127f1074a2a0705fd63a5b5bb6598381552bd8cc15521d9f05abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 4, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        
        $__internal_85c9be4e194127f1074a2a0705fd63a5b5bb6598381552bd8cc15521d9f05abd->leave($__internal_85c9be4e194127f1074a2a0705fd63a5b5bb6598381552bd8cc15521d9f05abd_prof);

        
        $__internal_6a8270a79fa35efcce949b16ee24985c5a9fd548914ed8a0fb5293488c76d0e2->leave($__internal_6a8270a79fa35efcce949b16ee24985c5a9fd548914ed8a0fb5293488c76d0e2_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_1a2140db3bb28ac7b9a393c1c6bd06a8193d4368e6d4207c96a87a0508be1bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2140db3bb28ac7b9a393c1c6bd06a8193d4368e6d4207c96a87a0508be1bfe->enter($__internal_1a2140db3bb28ac7b9a393c1c6bd06a8193d4368e6d4207c96a87a0508be1bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_2d70153c958570c971cd838c21157f5ce7d8d7a7260d347a074f08866b9e2037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d70153c958570c971cd838c21157f5ce7d8d7a7260d347a074f08866b9e2037->enter($__internal_2d70153c958570c971cd838c21157f5ce7d8d7a7260d347a074f08866b9e2037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/article.css\" />
";
        
        $__internal_2d70153c958570c971cd838c21157f5ce7d8d7a7260d347a074f08866b9e2037->leave($__internal_2d70153c958570c971cd838c21157f5ce7d8d7a7260d347a074f08866b9e2037_prof);

        
        $__internal_1a2140db3bb28ac7b9a393c1c6bd06a8193d4368e6d4207c96a87a0508be1bfe->leave($__internal_1a2140db3bb28ac7b9a393c1c6bd06a8193d4368e6d4207c96a87a0508be1bfe_prof);

    }

    // line 10
    public function block_article($context, array $blocks = array())
    {
        $__internal_bcf9995ccb6c29defd2329adf86c01a3855cdf071d0f42a2cad57ec33ab4c415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf9995ccb6c29defd2329adf86c01a3855cdf071d0f42a2cad57ec33ab4c415->enter($__internal_bcf9995ccb6c29defd2329adf86c01a3855cdf071d0f42a2cad57ec33ab4c415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        $__internal_ae56ec8c2668f59b0460221e853f2255500823a5e24a62b004c8867f6b69454a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae56ec8c2668f59b0460221e853f2255500823a5e24a62b004c8867f6b69454a->enter($__internal_ae56ec8c2668f59b0460221e853f2255500823a5e24a62b004c8867f6b69454a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 11
        echo "  <div class=\"article\">

    <div class=\"drop-img\">
        <img src=\"/img_alcool/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 14, $this->getSourceContext()); })()), "imglink", array()), "html", null, true);
        echo "\" class=\"article\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\">
      <div class=\"dropdown-content\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alcool_vote", array("note" => $context["i"], "name" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 17, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      </div>
    </div>
    <div class=\"nom\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 21, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</div>
    <div class=\"type\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 22, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo "</div>
    <hr>
    <div class=\"desc\">
      <div class=\"desc_title\">
        Description :
      </div>
      <div class=\"desc_text\">
        ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 29, $this->getSourceContext()); })()), "desc", array()), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"desc_note\" style=\"width: ";
        // line 32
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 32, $this->getSourceContext()); })()), "notemoy", array()) * 40), "html", null, true);
        echo "px;\">
      <img src=\"/img_alcool/5stars.png\" alt=\"note\" class=\"note\">
    </div>
  </div>
";
        
        $__internal_ae56ec8c2668f59b0460221e853f2255500823a5e24a62b004c8867f6b69454a->leave($__internal_ae56ec8c2668f59b0460221e853f2255500823a5e24a62b004c8867f6b69454a_prof);

        
        $__internal_bcf9995ccb6c29defd2329adf86c01a3855cdf071d0f42a2cad57ec33ab4c415->leave($__internal_bcf9995ccb6c29defd2329adf86c01a3855cdf071d0f42a2cad57ec33ab4c415_prof);

    }

    public function getTemplateName()
    {
        return "article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 32,  137 => 29,  127 => 22,  123 => 21,  119 => 19,  108 => 17,  104 => 16,  97 => 14,  92 => 11,  83 => 10,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base/base.html.twig' %}


{% block title %}{{alcool.name}}{% endblock %}
{% block css %}
  {{ parent() }}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/article.css\" />
{% endblock %}

{% block article %}
  <div class=\"article\">

    <div class=\"drop-img\">
        <img src=\"/img_alcool/{{alcool.imglink}}\" class=\"article\" alt=\"{{alcool.name}}\">
      <div class=\"dropdown-content\">
        {% for i in 1..5 %}
          <a href=\"{{ path('alcool_vote', {'note': i ,'name': alcool.name}) }}\">{{ i }}</a>
        {% endfor %}
      </div>
    </div>
    <div class=\"nom\">{{alcool.name}}</div>
    <div class=\"type\">{{alcool.type}}</div>
    <hr>
    <div class=\"desc\">
      <div class=\"desc_title\">
        Description :
      </div>
      <div class=\"desc_text\">
        {{alcool.desc}}
      </div>
    </div>
    <div class=\"desc_note\" style=\"width: {{alcool.notemoy*40}}px;\">
      <img src=\"/img_alcool/5stars.png\" alt=\"note\" class=\"note\">
    </div>
  </div>
{% endblock %}
", "article.html.twig", "/home/gperrier/Documents/web/site/templates/article.html.twig");
    }
}
