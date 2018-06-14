<?php

/* article.html.twig */
class __TwigTemplate_8b21f92253ce3fc1f24eb892fbb345e2791ed497c2c9a78bf2d8fd3f35391ae6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "article.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 4, $this->source); })()), "name", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/article.css\" />
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
        echo "  <div class=\"article\">

    <div class=\"drop-img\">
        <img src=\"/img_alcool/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 14, $this->source); })()), "imglink", array()), "html", null, true);
        echo "\" class=\"article\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 14, $this->source); })()), "name", array()), "html", null, true);
        echo "\">
      <div class=\"dropdown-content\">
      ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "session", array()), "get", array(0 => "user"), "method") && ((isset($context["voted"]) || array_key_exists("voted", $context) ? $context["voted"] : (function () { throw new Twig_Error_Runtime('Variable "voted" does not exist.', 16, $this->source); })()) == false))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 18
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_vote", array("note" => $context["i"], "name" => twig_get_attribute($this->env, $this->source, (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 18, $this->source); })()), "name", array()))), "html", null, true);
                echo "\"><img src=\"/img_site/1star.png\" alt=\"etoile\" title=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" style=\"width: 35px;height:35px;\"></a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "session", array()), "get", array(0 => "user"), "method") && ((isset($context["voted"]) || array_key_exists("voted", $context) ? $context["voted"] : (function () { throw new Twig_Error_Runtime('Variable "voted" does not exist.', 20, $this->source); })()) == true))) {
            // line 21
            echo "        <p>Tu as déjà voté!</p>
      ";
        } else {
            // line 23
            echo "        <p>Connecte toi pour voter!</p>
      ";
        }
        // line 25
        echo "      </div>
    </div>
    <div class=\"nom\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 27, $this->source); })()), "name", array()), "html", null, true);
        echo "</div>
    <div class=\"type\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 28, $this->source); })()), "type", array()), "html", null, true);
        echo "</div>
    <hr>
    <div class=\"desc\">
      <div class=\"desc_title\">
        Description :
      </div>
      <div class=\"desc_text\">
        ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 35, $this->source); })()), "desc", array()), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"desc_note\" style=\"width: ";
        // line 38
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["alcool"]) || array_key_exists("alcool", $context) ? $context["alcool"] : (function () { throw new Twig_Error_Runtime('Variable "alcool" does not exist.', 38, $this->source); })()), "notemoy", array()) * 40), "html", null, true);
        echo "px;\">
      <img src=\"/img_site/5stars.png\" alt=\"note\" class=\"note\">
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 38,  155 => 35,  145 => 28,  141 => 27,  137 => 25,  133 => 23,  129 => 21,  126 => 20,  115 => 18,  110 => 17,  108 => 16,  101 => 14,  96 => 11,  87 => 10,  73 => 6,  64 => 5,  46 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base/base.html.twig' %}


{% block title %}{{alcool.name}}{% endblock %}
{% block css %}
  {{ parent() }}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/article.css\" />
{% endblock %}

{% block article %}
  <div class=\"article\">

    <div class=\"drop-img\">
        <img src=\"/img_alcool/{{alcool.imglink}}\" class=\"article\" alt=\"{{alcool.name}}\">
      <div class=\"dropdown-content\">
      {% if app.session.get(\"user\") and voted == false %}
        {% for i in 1..5 %}
          <a href=\"{{ path('alcool_vote', {'note': i ,'name': alcool.name}) }}\"><img src=\"/img_site/1star.png\" alt=\"etoile\" title=\"{{i}}\" style=\"width: 35px;height:35px;\"></a>
        {% endfor %}
      {% elseif app.session.get(\"user\") and voted == true %}
        <p>Tu as déjà voté!</p>
      {% else %}
        <p>Connecte toi pour voter!</p>
      {% endif %}
      </div>
    </div>
    <div class=\"nom\">{{alcool.name}}</div>
    <div class=\"type\">{{alcool.type}}</div>
    <hr>
    <div class=\"desc\">
      <div class=\"desc_title\">
        Description :
      </div>
      <div class=\"desc_text\">
        {{alcool.desc}}
      </div>
    </div>
    <div class=\"desc_note\" style=\"width: {{alcool.notemoy*40}}px;\">
      <img src=\"/img_site/5stars.png\" alt=\"note\" class=\"note\">
    </div>
  </div>
{% endblock %}
", "article.html.twig", "/home/gperrier/Documents/web/site/templates/article.html.twig");
    }
}
