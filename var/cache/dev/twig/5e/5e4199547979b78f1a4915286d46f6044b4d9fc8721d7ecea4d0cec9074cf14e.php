<?php

/* welcome/welcome.html.twig */
class __TwigTemplate_5292510d236340d31fb3c2b7d35f6e8b7133e62abbefe2cda62e19533f952b9a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "welcome/welcome.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "welcome/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "welcome/welcome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "HUB";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 7
        echo "        ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/welcome.css\" />
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_article($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 11
        echo "
        <p class=\"title\">Bienvenue sur Éthylopédia</p>
        <p class=\"text\">
          Éthylopédia est un site de recensement d'alcool créé dans le cadre d'un projet de développement web.
           Il a été rendu possible grâce au fantastique travail de Guillaume Perrier, Lya Frétigné et un petit peu Laetitia Hallé malheureusement partie trop tôt.
           <p class=\"text\">
            Sur ce site, vous trouverez forcément votre bonheur puisque comme le vieil adage dit « in vino veritas », autant souligner d'entrée de jeu que les bienfaits pour la santé ne croissent pas nécessairement avec l'usage et que « la modération a bien meilleur goût ».
             Ainsi, la très grande majorité des études montrent que prendre une à deux consommations (une consommation = 13 g d'alcool) par jour fournit une certaine protection contre les troubles cardiovasculaires et coronariens, alors consulter notre encyclopédie d'alcool, consommer.
              Consommer avec ou sans modération, mais toujours avec plaisir.
               Ah ceux-là, modération, plaisir toujours là pour nous !
        </p>
      </p>
      <img src=\"/img_site/poney.jpg\" class=\"poney\" title=\"Nos 4 jolies images\" alt\"Poney en photo\">

      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  96 => 11,  87 => 10,  73 => 7,  64 => 6,  46 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base/base.html.twig' %}



      {% block title %}HUB{% endblock %}
      {% block css %}
        {{ parent() }}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/welcome.css\" />
      {% endblock %}
        {% block article %}

        <p class=\"title\">Bienvenue sur Éthylopédia</p>
        <p class=\"text\">
          Éthylopédia est un site de recensement d'alcool créé dans le cadre d'un projet de développement web.
           Il a été rendu possible grâce au fantastique travail de Guillaume Perrier, Lya Frétigné et un petit peu Laetitia Hallé malheureusement partie trop tôt.
           <p class=\"text\">
            Sur ce site, vous trouverez forcément votre bonheur puisque comme le vieil adage dit « in vino veritas », autant souligner d'entrée de jeu que les bienfaits pour la santé ne croissent pas nécessairement avec l'usage et que « la modération a bien meilleur goût ».
             Ainsi, la très grande majorité des études montrent que prendre une à deux consommations (une consommation = 13 g d'alcool) par jour fournit une certaine protection contre les troubles cardiovasculaires et coronariens, alors consulter notre encyclopédie d'alcool, consommer.
              Consommer avec ou sans modération, mais toujours avec plaisir.
               Ah ceux-là, modération, plaisir toujours là pour nous !
        </p>
      </p>
      <img src=\"/img_site/poney.jpg\" class=\"poney\" title=\"Nos 4 jolies images\" alt\"Poney en photo\">

      {% endblock %}
", "welcome/welcome.html.twig", "/home/gperrier/Documents/web/site/templates/welcome/welcome.html.twig");
    }
}
