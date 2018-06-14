<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_96d2e6e52be9e163f80a3694840aeea9d7b50a8dbb848b35db9887a911267a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d145d21106a538dd71b36ed53b22682f156b19d25c8b16c660c85ec1afe3d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d145d21106a538dd71b36ed53b22682f156b19d25c8b16c660c85ec1afe3d09->enter($__internal_9d145d21106a538dd71b36ed53b22682f156b19d25c8b16c660c85ec1afe3d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0382f39ec7c0135e9298b128a4cccfd3d1830c1bac98a37c5a671712846a5879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0382f39ec7c0135e9298b128a4cccfd3d1830c1bac98a37c5a671712846a5879->enter($__internal_0382f39ec7c0135e9298b128a4cccfd3d1830c1bac98a37c5a671712846a5879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d145d21106a538dd71b36ed53b22682f156b19d25c8b16c660c85ec1afe3d09->leave($__internal_9d145d21106a538dd71b36ed53b22682f156b19d25c8b16c660c85ec1afe3d09_prof);

        
        $__internal_0382f39ec7c0135e9298b128a4cccfd3d1830c1bac98a37c5a671712846a5879->leave($__internal_0382f39ec7c0135e9298b128a4cccfd3d1830c1bac98a37c5a671712846a5879_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd40940d1e0eb459c529d19492466597ff0258dec6bd2d9d91e76af097b8066f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd40940d1e0eb459c529d19492466597ff0258dec6bd2d9d91e76af097b8066f->enter($__internal_dd40940d1e0eb459c529d19492466597ff0258dec6bd2d9d91e76af097b8066f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c8565ec20675b02480ff65312ac0720293518f579d3e5c063f7ac5373a2bb6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8565ec20675b02480ff65312ac0720293518f579d3e5c063f7ac5373a2bb6e5->enter($__internal_c8565ec20675b02480ff65312ac0720293518f579d3e5c063f7ac5373a2bb6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c8565ec20675b02480ff65312ac0720293518f579d3e5c063f7ac5373a2bb6e5->leave($__internal_c8565ec20675b02480ff65312ac0720293518f579d3e5c063f7ac5373a2bb6e5_prof);

        
        $__internal_dd40940d1e0eb459c529d19492466597ff0258dec6bd2d9d91e76af097b8066f->leave($__internal_dd40940d1e0eb459c529d19492466597ff0258dec6bd2d9d91e76af097b8066f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e87c72dfe2df10881f770f110005e3c36404729161b1573fcdf5073d6328538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e87c72dfe2df10881f770f110005e3c36404729161b1573fcdf5073d6328538->enter($__internal_6e87c72dfe2df10881f770f110005e3c36404729161b1573fcdf5073d6328538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e5c78a8865f1225f5729af3dd13ed92f56e639fb5ce371fbb75356a5606ba22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5c78a8865f1225f5729af3dd13ed92f56e639fb5ce371fbb75356a5606ba22->enter($__internal_2e5c78a8865f1225f5729af3dd13ed92f56e639fb5ce371fbb75356a5606ba22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_2e5c78a8865f1225f5729af3dd13ed92f56e639fb5ce371fbb75356a5606ba22->leave($__internal_2e5c78a8865f1225f5729af3dd13ed92f56e639fb5ce371fbb75356a5606ba22_prof);

        
        $__internal_6e87c72dfe2df10881f770f110005e3c36404729161b1573fcdf5073d6328538->leave($__internal_6e87c72dfe2df10881f770f110005e3c36404729161b1573fcdf5073d6328538_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5af7e33945628233f9cee3bab086a0075b559843375ec2906af5f4a892e5801d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af7e33945628233f9cee3bab086a0075b559843375ec2906af5f4a892e5801d->enter($__internal_5af7e33945628233f9cee3bab086a0075b559843375ec2906af5f4a892e5801d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2970df52667f8794154911521afe0a461b612fef69327900c1430109b278a21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2970df52667f8794154911521afe0a461b612fef69327900c1430109b278a21b->enter($__internal_2970df52667f8794154911521afe0a461b612fef69327900c1430109b278a21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2970df52667f8794154911521afe0a461b612fef69327900c1430109b278a21b->leave($__internal_2970df52667f8794154911521afe0a461b612fef69327900c1430109b278a21b_prof);

        
        $__internal_5af7e33945628233f9cee3bab086a0075b559843375ec2906af5f4a892e5801d->leave($__internal_5af7e33945628233f9cee3bab086a0075b559843375ec2906af5f4a892e5801d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/gperrier/Documents/web/site/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
