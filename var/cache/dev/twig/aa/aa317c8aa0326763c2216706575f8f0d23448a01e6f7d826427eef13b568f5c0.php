<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_58efa056d0f066525a1d6a946adc7ad1f80036e5a0539a8d991b0f915682d6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8923b398b232611c8a2c79dc1b83e776d5439ae83291733376364f3ee6ec98dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8923b398b232611c8a2c79dc1b83e776d5439ae83291733376364f3ee6ec98dc->enter($__internal_8923b398b232611c8a2c79dc1b83e776d5439ae83291733376364f3ee6ec98dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_870a2d08ca7143b50781ea2201d4eb0b50f74e072c2762f928818ca32d17d078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870a2d08ca7143b50781ea2201d4eb0b50f74e072c2762f928818ca32d17d078->enter($__internal_870a2d08ca7143b50781ea2201d4eb0b50f74e072c2762f928818ca32d17d078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8923b398b232611c8a2c79dc1b83e776d5439ae83291733376364f3ee6ec98dc->leave($__internal_8923b398b232611c8a2c79dc1b83e776d5439ae83291733376364f3ee6ec98dc_prof);

        
        $__internal_870a2d08ca7143b50781ea2201d4eb0b50f74e072c2762f928818ca32d17d078->leave($__internal_870a2d08ca7143b50781ea2201d4eb0b50f74e072c2762f928818ca32d17d078_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a09003f23ed9df84f152faeb950ea2002ea52574cd15f651d4066601e6a8f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a09003f23ed9df84f152faeb950ea2002ea52574cd15f651d4066601e6a8f38->enter($__internal_7a09003f23ed9df84f152faeb950ea2002ea52574cd15f651d4066601e6a8f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41425c23060bfae13f8aec7db0615ed1171c2e0b66decd1fbf5ab3040f1e2dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41425c23060bfae13f8aec7db0615ed1171c2e0b66decd1fbf5ab3040f1e2dcb->enter($__internal_41425c23060bfae13f8aec7db0615ed1171c2e0b66decd1fbf5ab3040f1e2dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_41425c23060bfae13f8aec7db0615ed1171c2e0b66decd1fbf5ab3040f1e2dcb->leave($__internal_41425c23060bfae13f8aec7db0615ed1171c2e0b66decd1fbf5ab3040f1e2dcb_prof);

        
        $__internal_7a09003f23ed9df84f152faeb950ea2002ea52574cd15f651d4066601e6a8f38->leave($__internal_7a09003f23ed9df84f152faeb950ea2002ea52574cd15f651d4066601e6a8f38_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0de9d3c34a7e452a41ebf5f238841e98bad3baa8f1d8661696be0b06f710ad6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de9d3c34a7e452a41ebf5f238841e98bad3baa8f1d8661696be0b06f710ad6e->enter($__internal_0de9d3c34a7e452a41ebf5f238841e98bad3baa8f1d8661696be0b06f710ad6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3f67666e5a95999e505cef880ad999fff63b71891bc8aaeeffd7223bd810ab55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f67666e5a95999e505cef880ad999fff63b71891bc8aaeeffd7223bd810ab55->enter($__internal_3f67666e5a95999e505cef880ad999fff63b71891bc8aaeeffd7223bd810ab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3f67666e5a95999e505cef880ad999fff63b71891bc8aaeeffd7223bd810ab55->leave($__internal_3f67666e5a95999e505cef880ad999fff63b71891bc8aaeeffd7223bd810ab55_prof);

        
        $__internal_0de9d3c34a7e452a41ebf5f238841e98bad3baa8f1d8661696be0b06f710ad6e->leave($__internal_0de9d3c34a7e452a41ebf5f238841e98bad3baa8f1d8661696be0b06f710ad6e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66ca6059af51267bb287d96ff6a95c085d7b90a27635374e534685dad3df4773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ca6059af51267bb287d96ff6a95c085d7b90a27635374e534685dad3df4773->enter($__internal_66ca6059af51267bb287d96ff6a95c085d7b90a27635374e534685dad3df4773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4120b8f425420c144797959bc6898f84317d77f62f5209585bc70a45b2af3d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4120b8f425420c144797959bc6898f84317d77f62f5209585bc70a45b2af3d1e->enter($__internal_4120b8f425420c144797959bc6898f84317d77f62f5209585bc70a45b2af3d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_4120b8f425420c144797959bc6898f84317d77f62f5209585bc70a45b2af3d1e->leave($__internal_4120b8f425420c144797959bc6898f84317d77f62f5209585bc70a45b2af3d1e_prof);

        
        $__internal_66ca6059af51267bb287d96ff6a95c085d7b90a27635374e534685dad3df4773->leave($__internal_66ca6059af51267bb287d96ff6a95c085d7b90a27635374e534685dad3df4773_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/gperrier/Documents/web/site/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
