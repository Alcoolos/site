<?php

/* admin.html.twig */
class __TwigTemplate_32ecfd94959dde270e41d97e03fc07b40d6d1bf4175a530fba7a05bc18f60f5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "admin.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30faafb036a0c72bb7e802d9f18ca4574d94c595947f7f35b0c28240743ba01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30faafb036a0c72bb7e802d9f18ca4574d94c595947f7f35b0c28240743ba01a->enter($__internal_30faafb036a0c72bb7e802d9f18ca4574d94c595947f7f35b0c28240743ba01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_cff393f690390edfd2ae4da2f5467bef7e370cb52a0deac2d6a5917d1ede61f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff393f690390edfd2ae4da2f5467bef7e370cb52a0deac2d6a5917d1ede61f9->enter($__internal_cff393f690390edfd2ae4da2f5467bef7e370cb52a0deac2d6a5917d1ede61f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30faafb036a0c72bb7e802d9f18ca4574d94c595947f7f35b0c28240743ba01a->leave($__internal_30faafb036a0c72bb7e802d9f18ca4574d94c595947f7f35b0c28240743ba01a_prof);

        
        $__internal_cff393f690390edfd2ae4da2f5467bef7e370cb52a0deac2d6a5917d1ede61f9->leave($__internal_cff393f690390edfd2ae4da2f5467bef7e370cb52a0deac2d6a5917d1ede61f9_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_19c04a60def971bc41e95e810b202b253c2176313d614895c740bc8ed1b7ad33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c04a60def971bc41e95e810b202b253c2176313d614895c740bc8ed1b7ad33->enter($__internal_19c04a60def971bc41e95e810b202b253c2176313d614895c740bc8ed1b7ad33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_addd25230faa119ea11caf0421e8e7b240b68a94ec12abd3f94df2bd43fef327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addd25230faa119ea11caf0421e8e7b240b68a94ec12abd3f94df2bd43fef327->enter($__internal_addd25230faa119ea11caf0421e8e7b240b68a94ec12abd3f94df2bd43fef327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/admin.css\" />
";
        
        $__internal_addd25230faa119ea11caf0421e8e7b240b68a94ec12abd3f94df2bd43fef327->leave($__internal_addd25230faa119ea11caf0421e8e7b240b68a94ec12abd3f94df2bd43fef327_prof);

        
        $__internal_19c04a60def971bc41e95e810b202b253c2176313d614895c740bc8ed1b7ad33->leave($__internal_19c04a60def971bc41e95e810b202b253c2176313d614895c740bc8ed1b7ad33_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_5936374e2d13a3a9bf28ca979444c464f50837ad55a72e56eb0206e11e854e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5936374e2d13a3a9bf28ca979444c464f50837ad55a72e56eb0206e11e854e58->enter($__internal_5936374e2d13a3a9bf28ca979444c464f50837ad55a72e56eb0206e11e854e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2221f438ee12129b55b302356e08fe7f790847e8165e2c0b89ed161442482384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2221f438ee12129b55b302356e08fe7f790847e8165e2c0b89ed161442482384->enter($__internal_2221f438ee12129b55b302356e08fe7f790847e8165e2c0b89ed161442482384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "Admin
";
        
        $__internal_2221f438ee12129b55b302356e08fe7f790847e8165e2c0b89ed161442482384->leave($__internal_2221f438ee12129b55b302356e08fe7f790847e8165e2c0b89ed161442482384_prof);

        
        $__internal_5936374e2d13a3a9bf28ca979444c464f50837ad55a72e56eb0206e11e854e58->leave($__internal_5936374e2d13a3a9bf28ca979444c464f50837ad55a72e56eb0206e11e854e58_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_78736cc6d2637b92d3f2c4b832a7fa3b33e95569336264a4633b6901a020a982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78736cc6d2637b92d3f2c4b832a7fa3b33e95569336264a4633b6901a020a982->enter($__internal_78736cc6d2637b92d3f2c4b832a7fa3b33e95569336264a4633b6901a020a982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_10ad77be9a2ca0b1cc1159414bd1f668cbb6dc11bf011ffd448354156b3b8136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ad77be9a2ca0b1cc1159414bd1f668cbb6dc11bf011ffd448354156b3b8136->enter($__internal_10ad77be9a2ca0b1cc1159414bd1f668cbb6dc11bf011ffd448354156b3b8136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "<nav class=\"navbar-fixed\">
    <ul class=\"menu\">
        <li class=\"menu\"><img class=\"logo\" src=\"/img_site/Winer.png\" alt=\"winer\" /></li>
        <li class=\"menu\"><a href=\"/home\" class=\"menu\">Accueil</a></li>
        <li class=\"menu\"><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_hub");
        echo "\" class=\"menu\">Admin Hub</a></li>
    </ul>
</nav>
";
        
        $__internal_10ad77be9a2ca0b1cc1159414bd1f668cbb6dc11bf011ffd448354156b3b8136->leave($__internal_10ad77be9a2ca0b1cc1159414bd1f668cbb6dc11bf011ffd448354156b3b8136_prof);

        
        $__internal_78736cc6d2637b92d3f2c4b832a7fa3b33e95569336264a4633b6901a020a982->leave($__internal_78736cc6d2637b92d3f2c4b832a7fa3b33e95569336264a4633b6901a020a982_prof);

    }

    // line 22
    public function block_main($context, array $blocks = array())
    {
        $__internal_cf68dc02b5d11d52490ed4d2c316bfe8cb7260380e6fbce3c045f8edc0538c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf68dc02b5d11d52490ed4d2c316bfe8cb7260380e6fbce3c045f8edc0538c47->enter($__internal_cf68dc02b5d11d52490ed4d2c316bfe8cb7260380e6fbce3c045f8edc0538c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_747fcb586dacdd71dab99a33a1d9225ab0cb1b05e3ef42685c6736cb6652f47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747fcb586dacdd71dab99a33a1d9225ab0cb1b05e3ef42685c6736cb6652f47d->enter($__internal_747fcb586dacdd71dab99a33a1d9225ab0cb1b05e3ef42685c6736cb6652f47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 23
        echo "<div class=\"grid grid-pad\">
  <div class=\"col-1-2\">
    <ul class=\"admin_menu\">
      <li class=\"admin_menu\">
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alcool_list_admin");
        echo "\" class=\"menu\">Modify Alcool</a>
      </li>
      <li class=\"admin_menu\">
        <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new");
        echo "\" class=\"menu\">Add Alcool</a>
      </li>
      <li class=\"admin_menu\">
        <a href=\"/home\" class=\"menu\">Menu</a>
      </li>
    </ul>
  </div>
  <div class=\"col-1-2\">
    <ul class=\"admin_menu\">
      <li class=\"admin_menu\">
        <a href=\"/home\" class=\"menu\">Alcools</a>
      </li>
      <li class=\"admin_menu\">
        <a href=\"/home\" class=\"menu\">Recette</a>
      </li>
      <li class=\"admin_menu\">
        <a href=\"/home\" class=\"menu\">Menu</a>
      </li>
    </ul>
  </div>
</div>
";
        
        $__internal_747fcb586dacdd71dab99a33a1d9225ab0cb1b05e3ef42685c6736cb6652f47d->leave($__internal_747fcb586dacdd71dab99a33a1d9225ab0cb1b05e3ef42685c6736cb6652f47d_prof);

        
        $__internal_cf68dc02b5d11d52490ed4d2c316bfe8cb7260380e6fbce3c045f8edc0538c47->leave($__internal_cf68dc02b5d11d52490ed4d2c316bfe8cb7260380e6fbce3c045f8edc0538c47_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 30,  130 => 27,  124 => 23,  115 => 22,  101 => 17,  95 => 13,  86 => 12,  75 => 9,  66 => 8,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends 'base/base.html.twig' %}

{% block css %}
  {{ parent() }}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/admin.css\" />
{% endblock %}

{% block title %}
Admin
{% endblock %}

{% block header %}
<nav class=\"navbar-fixed\">
    <ul class=\"menu\">
        <li class=\"menu\"><img class=\"logo\" src=\"/img_site/Winer.png\" alt=\"winer\" /></li>
        <li class=\"menu\"><a href=\"/home\" class=\"menu\">Accueil</a></li>
        <li class=\"menu\"><a href=\"{{ path('admin_hub') }}\" class=\"menu\">Admin Hub</a></li>
    </ul>
</nav>
{% endblock %}

{% block main %}
<div class=\"grid grid-pad\">
  <div class=\"col-1-2\">
    <ul class=\"admin_menu\">
      <li class=\"admin_menu\">
        <a href=\"{{ path('alcool_list_admin') }}\" class=\"menu\">Modify Alcool</a>
      </li>
      <li class=\"admin_menu\">
        <a href=\"{{ path('new') }}\" class=\"menu\">Add Alcool</a>
      </li>
      <li class=\"admin_menu\">
        <a href=\"/home\" class=\"menu\">Menu</a>
      </li>
    </ul>
  </div>
  <div class=\"col-1-2\">
    <ul class=\"admin_menu\">
      <li class=\"admin_menu\">
        <a href=\"/home\" class=\"menu\">Alcools</a>
      </li>
      <li class=\"admin_menu\">
        <a href=\"/home\" class=\"menu\">Recette</a>
      </li>
      <li class=\"admin_menu\">
        <a href=\"/home\" class=\"menu\">Menu</a>
      </li>
    </ul>
  </div>
</div>
{% endblock %}
", "admin.html.twig", "/home/gperrier/Documents/web/site/templates/admin.html.twig");
    }
}
