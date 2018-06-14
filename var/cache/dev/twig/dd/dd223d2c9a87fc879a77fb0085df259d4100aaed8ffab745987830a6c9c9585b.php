<?php

/* welcome/welcome.html.twig */
class __TwigTemplate_51552b4f795b5c0bda792f9430cff783976d5f8a572adb5fe87d5f231b8cc99f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "welcome/welcome.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b4ca92263f0260b7e2245a64b7db6bdbd624fcc753c3a3356aa9b108dc110d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4ca92263f0260b7e2245a64b7db6bdbd624fcc753c3a3356aa9b108dc110d5->enter($__internal_5b4ca92263f0260b7e2245a64b7db6bdbd624fcc753c3a3356aa9b108dc110d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "welcome/welcome.html.twig"));

        $__internal_dda96a7fce471769ab65caef7d83450ee400b33312d3b4fc85cb455f3e6691c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda96a7fce471769ab65caef7d83450ee400b33312d3b4fc85cb455f3e6691c5->enter($__internal_dda96a7fce471769ab65caef7d83450ee400b33312d3b4fc85cb455f3e6691c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "welcome/welcome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b4ca92263f0260b7e2245a64b7db6bdbd624fcc753c3a3356aa9b108dc110d5->leave($__internal_5b4ca92263f0260b7e2245a64b7db6bdbd624fcc753c3a3356aa9b108dc110d5_prof);

        
        $__internal_dda96a7fce471769ab65caef7d83450ee400b33312d3b4fc85cb455f3e6691c5->leave($__internal_dda96a7fce471769ab65caef7d83450ee400b33312d3b4fc85cb455f3e6691c5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bafbcdbeb19f5105334301da19474bd01694bd8b1cd47debb6285c5ba0518333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafbcdbeb19f5105334301da19474bd01694bd8b1cd47debb6285c5ba0518333->enter($__internal_bafbcdbeb19f5105334301da19474bd01694bd8b1cd47debb6285c5ba0518333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f46374285ba3e20320cbbf503852882b28c351f7f54fb832a8bf5ab68e85c25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46374285ba3e20320cbbf503852882b28c351f7f54fb832a8bf5ab68e85c25d->enter($__internal_f46374285ba3e20320cbbf503852882b28c351f7f54fb832a8bf5ab68e85c25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "HUB";
        
        $__internal_f46374285ba3e20320cbbf503852882b28c351f7f54fb832a8bf5ab68e85c25d->leave($__internal_f46374285ba3e20320cbbf503852882b28c351f7f54fb832a8bf5ab68e85c25d_prof);

        
        $__internal_bafbcdbeb19f5105334301da19474bd01694bd8b1cd47debb6285c5ba0518333->leave($__internal_bafbcdbeb19f5105334301da19474bd01694bd8b1cd47debb6285c5ba0518333_prof);

    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        $__internal_47d7e991982d3119fa820fab9ca40986b965d074d19e2de6dca096fce03ce3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d7e991982d3119fa820fab9ca40986b965d074d19e2de6dca096fce03ce3e3->enter($__internal_47d7e991982d3119fa820fab9ca40986b965d074d19e2de6dca096fce03ce3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        $__internal_042931500eb91a4d32ad5c61fa39f2f1d59311e3fe51f4c12e68aec89a71600c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042931500eb91a4d32ad5c61fa39f2f1d59311e3fe51f4c12e68aec89a71600c->enter($__internal_042931500eb91a4d32ad5c61fa39f2f1d59311e3fe51f4c12e68aec89a71600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 6
        echo "


        <h1> WELCOME!!! </h1>
        ";
        
        $__internal_042931500eb91a4d32ad5c61fa39f2f1d59311e3fe51f4c12e68aec89a71600c->leave($__internal_042931500eb91a4d32ad5c61fa39f2f1d59311e3fe51f4c12e68aec89a71600c_prof);

        
        $__internal_47d7e991982d3119fa820fab9ca40986b965d074d19e2de6dca096fce03ce3e3->leave($__internal_47d7e991982d3119fa820fab9ca40986b965d074d19e2de6dca096fce03ce3e3_prof);

    }

    public function getTemplateName()
    {
        return "welcome/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base/base.html.twig' %}


      {% block title %}HUB{% endblock %}
        {% block article %}



        <h1> WELCOME!!! </h1>
        {% endblock %}
", "welcome/welcome.html.twig", "/home/gperrier/Documents/web/site/templates/welcome/welcome.html.twig");
    }
}
