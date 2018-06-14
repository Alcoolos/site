<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_876a277a5d2bb1fec7684a2be7f77d8a9c51cbb7109bfc4b4a373861a757751f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbb0ad4fddd6b28354a7fec7524300e2b96d8f7f819b5097fbe9051717701f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb0ad4fddd6b28354a7fec7524300e2b96d8f7f819b5097fbe9051717701f19->enter($__internal_bbb0ad4fddd6b28354a7fec7524300e2b96d8f7f819b5097fbe9051717701f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6202932d32bc0751cd57873ac71f0c6551250cbe5b10deb102b1c1eec46bc19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6202932d32bc0751cd57873ac71f0c6551250cbe5b10deb102b1c1eec46bc19b->enter($__internal_6202932d32bc0751cd57873ac71f0c6551250cbe5b10deb102b1c1eec46bc19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb0ad4fddd6b28354a7fec7524300e2b96d8f7f819b5097fbe9051717701f19->leave($__internal_bbb0ad4fddd6b28354a7fec7524300e2b96d8f7f819b5097fbe9051717701f19_prof);

        
        $__internal_6202932d32bc0751cd57873ac71f0c6551250cbe5b10deb102b1c1eec46bc19b->leave($__internal_6202932d32bc0751cd57873ac71f0c6551250cbe5b10deb102b1c1eec46bc19b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ae90cad04b01358a295ffd5d034a5161b25c384830617824901930bbb0676b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae90cad04b01358a295ffd5d034a5161b25c384830617824901930bbb0676b8->enter($__internal_9ae90cad04b01358a295ffd5d034a5161b25c384830617824901930bbb0676b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f02ee20e964b015f566833c68be7a90465c2908a80a4bdcd0ea53acce776179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f02ee20e964b015f566833c68be7a90465c2908a80a4bdcd0ea53acce776179->enter($__internal_7f02ee20e964b015f566833c68be7a90465c2908a80a4bdcd0ea53acce776179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7f02ee20e964b015f566833c68be7a90465c2908a80a4bdcd0ea53acce776179->leave($__internal_7f02ee20e964b015f566833c68be7a90465c2908a80a4bdcd0ea53acce776179_prof);

        
        $__internal_9ae90cad04b01358a295ffd5d034a5161b25c384830617824901930bbb0676b8->leave($__internal_9ae90cad04b01358a295ffd5d034a5161b25c384830617824901930bbb0676b8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fda27c7222cacd80f7286d89b3a282054f7a282a5833bf76da012cd0db8e3c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda27c7222cacd80f7286d89b3a282054f7a282a5833bf76da012cd0db8e3c88->enter($__internal_fda27c7222cacd80f7286d89b3a282054f7a282a5833bf76da012cd0db8e3c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6cb401be682225682f5cf320b290d1fe9d2c338b901cbba0f457352a717a5ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb401be682225682f5cf320b290d1fe9d2c338b901cbba0f457352a717a5ca6->enter($__internal_6cb401be682225682f5cf320b290d1fe9d2c338b901cbba0f457352a717a5ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_6cb401be682225682f5cf320b290d1fe9d2c338b901cbba0f457352a717a5ca6->leave($__internal_6cb401be682225682f5cf320b290d1fe9d2c338b901cbba0f457352a717a5ca6_prof);

        
        $__internal_fda27c7222cacd80f7286d89b3a282054f7a282a5833bf76da012cd0db8e3c88->leave($__internal_fda27c7222cacd80f7286d89b3a282054f7a282a5833bf76da012cd0db8e3c88_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/gperrier/Documents/web/site/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
