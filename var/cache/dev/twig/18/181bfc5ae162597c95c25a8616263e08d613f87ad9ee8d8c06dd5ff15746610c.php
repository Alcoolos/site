<?php

/* delete.html.twig */
class __TwigTemplate_b956db254468b8c0e123aad8b0a770d68ce7ae35109494a3f9052b1bad0fd746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "delete.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a298cdd44642f10a22352564dcf824f732ee270ae36d6c094e672171b74b5bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a298cdd44642f10a22352564dcf824f732ee270ae36d6c094e672171b74b5bbc->enter($__internal_a298cdd44642f10a22352564dcf824f732ee270ae36d6c094e672171b74b5bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "delete.html.twig"));

        $__internal_0443ed0afabf8d49c288a7268e13277d0e8565153f500c286856aafb11ad1b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0443ed0afabf8d49c288a7268e13277d0e8565153f500c286856aafb11ad1b85->enter($__internal_0443ed0afabf8d49c288a7268e13277d0e8565153f500c286856aafb11ad1b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a298cdd44642f10a22352564dcf824f732ee270ae36d6c094e672171b74b5bbc->leave($__internal_a298cdd44642f10a22352564dcf824f732ee270ae36d6c094e672171b74b5bbc_prof);

        
        $__internal_0443ed0afabf8d49c288a7268e13277d0e8565153f500c286856aafb11ad1b85->leave($__internal_0443ed0afabf8d49c288a7268e13277d0e8565153f500c286856aafb11ad1b85_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_775196c3a528b689e9eb1f32e7c6299b73591d94e23a15ef7fc4b2808df5434f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775196c3a528b689e9eb1f32e7c6299b73591d94e23a15ef7fc4b2808df5434f->enter($__internal_775196c3a528b689e9eb1f32e7c6299b73591d94e23a15ef7fc4b2808df5434f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_3e878bf816d2c4fedfe4cea7b49c6acf7297539d59186da0a42c7bd79e907267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e878bf816d2c4fedfe4cea7b49c6acf7297539d59186da0a42c7bd79e907267->enter($__internal_3e878bf816d2c4fedfe4cea7b49c6acf7297539d59186da0a42c7bd79e907267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/article.css\" />
";
        
        $__internal_3e878bf816d2c4fedfe4cea7b49c6acf7297539d59186da0a42c7bd79e907267->leave($__internal_3e878bf816d2c4fedfe4cea7b49c6acf7297539d59186da0a42c7bd79e907267_prof);

        
        $__internal_775196c3a528b689e9eb1f32e7c6299b73591d94e23a15ef7fc4b2808df5434f->leave($__internal_775196c3a528b689e9eb1f32e7c6299b73591d94e23a15ef7fc4b2808df5434f_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_fa11513ed9ef54a15de8afe4fe75125df22d5f849482d5e50ca391e80f6cbb69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa11513ed9ef54a15de8afe4fe75125df22d5f849482d5e50ca391e80f6cbb69->enter($__internal_fa11513ed9ef54a15de8afe4fe75125df22d5f849482d5e50ca391e80f6cbb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_31e601fe5160ec0163bfd7b28d6a5a75e7d28a14e9ffded4b5c08de1d10e5dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e601fe5160ec0163bfd7b28d6a5a75e7d28a14e9ffded4b5c08de1d10e5dc4->enter($__internal_31e601fe5160ec0163bfd7b28d6a5a75e7d28a14e9ffded4b5c08de1d10e5dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delform"]) || array_key_exists("delform", $context) ? $context["delform"] : (function () { throw new Twig_Error_Runtime('Variable "delform" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["delform"]) || array_key_exists("delform", $context) ? $context["delform"] : (function () { throw new Twig_Error_Runtime('Variable "delform" does not exist.', 11, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delform"]) || array_key_exists("delform", $context) ? $context["delform"] : (function () { throw new Twig_Error_Runtime('Variable "delform" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_31e601fe5160ec0163bfd7b28d6a5a75e7d28a14e9ffded4b5c08de1d10e5dc4->leave($__internal_31e601fe5160ec0163bfd7b28d6a5a75e7d28a14e9ffded4b5c08de1d10e5dc4_prof);

        
        $__internal_fa11513ed9ef54a15de8afe4fe75125df22d5f849482d5e50ca391e80f6cbb69->leave($__internal_fa11513ed9ef54a15de8afe4fe75125df22d5f849482d5e50ca391e80f6cbb69_prof);

    }

    public function getTemplateName()
    {
        return "delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  80 => 11,  76 => 10,  73 => 9,  64 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block css %}
  {{ parent() }}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/article.css\" />
{% endblock %}

{% block main %}

    {{ form_start(delform) }}
    {{ form_widget(delform) }}
    {{ form_end(delform) }}

{% endblock %}
", "delete.html.twig", "/home/gperrier/Documents/web/site/templates/delete.html.twig");
    }
}
