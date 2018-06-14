<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2b0ca155660c7f9727796fc68e4c6951a8af132f635ca1b874cae5eeefcee5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_130ac5f096ba2187d01d6070a33d7cb2ecec56d18044780d7f6f9a71d8f704ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130ac5f096ba2187d01d6070a33d7cb2ecec56d18044780d7f6f9a71d8f704ca->enter($__internal_130ac5f096ba2187d01d6070a33d7cb2ecec56d18044780d7f6f9a71d8f704ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ce235f2a0c6c2ecf2c933a86c72c727ac9e821b88e987c9528d9468ba03134c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce235f2a0c6c2ecf2c933a86c72c727ac9e821b88e987c9528d9468ba03134c4->enter($__internal_ce235f2a0c6c2ecf2c933a86c72c727ac9e821b88e987c9528d9468ba03134c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_130ac5f096ba2187d01d6070a33d7cb2ecec56d18044780d7f6f9a71d8f704ca->leave($__internal_130ac5f096ba2187d01d6070a33d7cb2ecec56d18044780d7f6f9a71d8f704ca_prof);

        
        $__internal_ce235f2a0c6c2ecf2c933a86c72c727ac9e821b88e987c9528d9468ba03134c4->leave($__internal_ce235f2a0c6c2ecf2c933a86c72c727ac9e821b88e987c9528d9468ba03134c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42203d9af2bb8dc5ec31830d3f0ca0904f499b5b748b18093d68044508194e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42203d9af2bb8dc5ec31830d3f0ca0904f499b5b748b18093d68044508194e78->enter($__internal_42203d9af2bb8dc5ec31830d3f0ca0904f499b5b748b18093d68044508194e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_96181a66700957808a3cb68ea6173886864542c01db64b4c73381d0472fcf068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96181a66700957808a3cb68ea6173886864542c01db64b4c73381d0472fcf068->enter($__internal_96181a66700957808a3cb68ea6173886864542c01db64b4c73381d0472fcf068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96181a66700957808a3cb68ea6173886864542c01db64b4c73381d0472fcf068->leave($__internal_96181a66700957808a3cb68ea6173886864542c01db64b4c73381d0472fcf068_prof);

        
        $__internal_42203d9af2bb8dc5ec31830d3f0ca0904f499b5b748b18093d68044508194e78->leave($__internal_42203d9af2bb8dc5ec31830d3f0ca0904f499b5b748b18093d68044508194e78_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_113a794c2808ec1cd1a962f7e319f26b99628c9563a63d2398dfa12a258aae4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113a794c2808ec1cd1a962f7e319f26b99628c9563a63d2398dfa12a258aae4b->enter($__internal_113a794c2808ec1cd1a962f7e319f26b99628c9563a63d2398dfa12a258aae4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2a544c7aaf7bdf51ab2e9403ce0ce30e3db38c9baa50272cf30ed37f64ef475d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a544c7aaf7bdf51ab2e9403ce0ce30e3db38c9baa50272cf30ed37f64ef475d->enter($__internal_2a544c7aaf7bdf51ab2e9403ce0ce30e3db38c9baa50272cf30ed37f64ef475d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a544c7aaf7bdf51ab2e9403ce0ce30e3db38c9baa50272cf30ed37f64ef475d->leave($__internal_2a544c7aaf7bdf51ab2e9403ce0ce30e3db38c9baa50272cf30ed37f64ef475d_prof);

        
        $__internal_113a794c2808ec1cd1a962f7e319f26b99628c9563a63d2398dfa12a258aae4b->leave($__internal_113a794c2808ec1cd1a962f7e319f26b99628c9563a63d2398dfa12a258aae4b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aec00681eb7b887c173cba6c0708e2808d7944ebf8a033648ac342068ad4ab6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec00681eb7b887c173cba6c0708e2808d7944ebf8a033648ac342068ad4ab6c->enter($__internal_aec00681eb7b887c173cba6c0708e2808d7944ebf8a033648ac342068ad4ab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8f61662819391a5950cfbaadc968f74dbb917ada9121bb265bd14764761bb92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f61662819391a5950cfbaadc968f74dbb917ada9121bb265bd14764761bb92d->enter($__internal_8f61662819391a5950cfbaadc968f74dbb917ada9121bb265bd14764761bb92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8f61662819391a5950cfbaadc968f74dbb917ada9121bb265bd14764761bb92d->leave($__internal_8f61662819391a5950cfbaadc968f74dbb917ada9121bb265bd14764761bb92d_prof);

        
        $__internal_aec00681eb7b887c173cba6c0708e2808d7944ebf8a033648ac342068ad4ab6c->leave($__internal_aec00681eb7b887c173cba6c0708e2808d7944ebf8a033648ac342068ad4ab6c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/gperrier/Documents/web/site/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
