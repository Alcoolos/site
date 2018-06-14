<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8c4522326ccca99d74112ce7d1e69da4e06fe81a47f51d8e608e4cb9709faf8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e36978c295439ad45189019f19eb86d7d6ffc5286db365119fdeab4f9433aecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36978c295439ad45189019f19eb86d7d6ffc5286db365119fdeab4f9433aecb->enter($__internal_e36978c295439ad45189019f19eb86d7d6ffc5286db365119fdeab4f9433aecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3845e856102af59285b6272e6216a2d82b2bfcb9a5ca7d1060c624ae28f42451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3845e856102af59285b6272e6216a2d82b2bfcb9a5ca7d1060c624ae28f42451->enter($__internal_3845e856102af59285b6272e6216a2d82b2bfcb9a5ca7d1060c624ae28f42451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e36978c295439ad45189019f19eb86d7d6ffc5286db365119fdeab4f9433aecb->leave($__internal_e36978c295439ad45189019f19eb86d7d6ffc5286db365119fdeab4f9433aecb_prof);

        
        $__internal_3845e856102af59285b6272e6216a2d82b2bfcb9a5ca7d1060c624ae28f42451->leave($__internal_3845e856102af59285b6272e6216a2d82b2bfcb9a5ca7d1060c624ae28f42451_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a2081cd80200bf06f12e5abfa9c0e7c7fa2ab87c295e284d4a0d517aa20c24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2081cd80200bf06f12e5abfa9c0e7c7fa2ab87c295e284d4a0d517aa20c24f->enter($__internal_9a2081cd80200bf06f12e5abfa9c0e7c7fa2ab87c295e284d4a0d517aa20c24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_66e98aa0bd263286af6a020e6b92b89d1f399f1c33d777d0c68423e2b6ea2794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e98aa0bd263286af6a020e6b92b89d1f399f1c33d777d0c68423e2b6ea2794->enter($__internal_66e98aa0bd263286af6a020e6b92b89d1f399f1c33d777d0c68423e2b6ea2794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_66e98aa0bd263286af6a020e6b92b89d1f399f1c33d777d0c68423e2b6ea2794->leave($__internal_66e98aa0bd263286af6a020e6b92b89d1f399f1c33d777d0c68423e2b6ea2794_prof);

        
        $__internal_9a2081cd80200bf06f12e5abfa9c0e7c7fa2ab87c295e284d4a0d517aa20c24f->leave($__internal_9a2081cd80200bf06f12e5abfa9c0e7c7fa2ab87c295e284d4a0d517aa20c24f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/gperrier/Documents/web/site/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
