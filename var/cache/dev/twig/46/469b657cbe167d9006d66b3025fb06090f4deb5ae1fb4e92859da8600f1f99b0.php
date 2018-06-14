<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8f76a2c88853cdbd49954b6be8e274748c3d0611cb094178c13a1c06d207d3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbbe0828ca56a983dde4b881c09f96dc6e8cec06d84302f7a89a3f057af74ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbe0828ca56a983dde4b881c09f96dc6e8cec06d84302f7a89a3f057af74ffc->enter($__internal_fbbe0828ca56a983dde4b881c09f96dc6e8cec06d84302f7a89a3f057af74ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9a03139f3f4e4dbbc8bf3af1bab8e3bcbd573ea70c4fb26dd772ab1ec8f28032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a03139f3f4e4dbbc8bf3af1bab8e3bcbd573ea70c4fb26dd772ab1ec8f28032->enter($__internal_9a03139f3f4e4dbbc8bf3af1bab8e3bcbd573ea70c4fb26dd772ab1ec8f28032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fbbe0828ca56a983dde4b881c09f96dc6e8cec06d84302f7a89a3f057af74ffc->leave($__internal_fbbe0828ca56a983dde4b881c09f96dc6e8cec06d84302f7a89a3f057af74ffc_prof);

        
        $__internal_9a03139f3f4e4dbbc8bf3af1bab8e3bcbd573ea70c4fb26dd772ab1ec8f28032->leave($__internal_9a03139f3f4e4dbbc8bf3af1bab8e3bcbd573ea70c4fb26dd772ab1ec8f28032_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/gperrier/Documents/web/site/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
