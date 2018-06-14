<?php

/* modify.html.twig */
class __TwigTemplate_2c5198a53817af53267308a4a4b0a726a4b20fd99f70894dde11860b02e532f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "modify.html.twig", 1);
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
        $__internal_e109cd6f12e89078d7406030bd3379a7745d775ddfbc9519397ca3fc0064846b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e109cd6f12e89078d7406030bd3379a7745d775ddfbc9519397ca3fc0064846b->enter($__internal_e109cd6f12e89078d7406030bd3379a7745d775ddfbc9519397ca3fc0064846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modify.html.twig"));

        $__internal_4fb879966f5af0750cecfc00194e92c6d5907457bdee6172f54cc439660ec666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb879966f5af0750cecfc00194e92c6d5907457bdee6172f54cc439660ec666->enter($__internal_4fb879966f5af0750cecfc00194e92c6d5907457bdee6172f54cc439660ec666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e109cd6f12e89078d7406030bd3379a7745d775ddfbc9519397ca3fc0064846b->leave($__internal_e109cd6f12e89078d7406030bd3379a7745d775ddfbc9519397ca3fc0064846b_prof);

        
        $__internal_4fb879966f5af0750cecfc00194e92c6d5907457bdee6172f54cc439660ec666->leave($__internal_4fb879966f5af0750cecfc00194e92c6d5907457bdee6172f54cc439660ec666_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_b2ac6baef6ac8061c04ef3c2b0333e5d236da5e3a79b304816a66b16b0c8a6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ac6baef6ac8061c04ef3c2b0333e5d236da5e3a79b304816a66b16b0c8a6eb->enter($__internal_b2ac6baef6ac8061c04ef3c2b0333e5d236da5e3a79b304816a66b16b0c8a6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_5b93c78ae83713c05eeeb3c96fafe0891dafb2b862bb6974b7a572fb0c5980b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b93c78ae83713c05eeeb3c96fafe0891dafb2b862bb6974b7a572fb0c5980b4->enter($__internal_5b93c78ae83713c05eeeb3c96fafe0891dafb2b862bb6974b7a572fb0c5980b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/article.css\" />
";
        
        $__internal_5b93c78ae83713c05eeeb3c96fafe0891dafb2b862bb6974b7a572fb0c5980b4->leave($__internal_5b93c78ae83713c05eeeb3c96fafe0891dafb2b862bb6974b7a572fb0c5980b4_prof);

        
        $__internal_b2ac6baef6ac8061c04ef3c2b0333e5d236da5e3a79b304816a66b16b0c8a6eb->leave($__internal_b2ac6baef6ac8061c04ef3c2b0333e5d236da5e3a79b304816a66b16b0c8a6eb_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_c883f15499f91716b3b8afe3928fb96422b5c00aeb1e8fdf413c3cbbe1dc6a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c883f15499f91716b3b8afe3928fb96422b5c00aeb1e8fdf413c3cbbe1dc6a54->enter($__internal_c883f15499f91716b3b8afe3928fb96422b5c00aeb1e8fdf413c3cbbe1dc6a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6ae6e5b3b86c745766060bdb8a65ac19efeb89ecb3b43451cd0683a9b0175b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae6e5b3b86c745766060bdb8a65ac19efeb89ecb3b43451cd0683a9b0175b8d->enter($__internal_6ae6e5b3b86c745766060bdb8a65ac19efeb89ecb3b43451cd0683a9b0175b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_6ae6e5b3b86c745766060bdb8a65ac19efeb89ecb3b43451cd0683a9b0175b8d->leave($__internal_6ae6e5b3b86c745766060bdb8a65ac19efeb89ecb3b43451cd0683a9b0175b8d_prof);

        
        $__internal_c883f15499f91716b3b8afe3928fb96422b5c00aeb1e8fdf413c3cbbe1dc6a54->leave($__internal_c883f15499f91716b3b8afe3928fb96422b5c00aeb1e8fdf413c3cbbe1dc6a54_prof);

    }

    public function getTemplateName()
    {
        return "modify.html.twig";
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

    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}
", "modify.html.twig", "/home/gperrier/Documents/web/site/templates/modify.html.twig");
    }
}
