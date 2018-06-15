<?php

/* alcool_list_admin.html.twig */
class __TwigTemplate_4cf4c3da795d6ffd549e06a0b536530c85376b788061d641820c2e249452e201 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "alcool_list_admin.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alcool_list_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alcool_list_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "

<div class=\"grid grid-pad\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alcools"]) || array_key_exists("alcools", $context) ? $context["alcools"] : (function () { throw new Twig_Error_Runtime('Variable "alcools" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alc"]) {
            // line 8
            echo "
<div class=\"ingr\">
<div class=\"drop-img\">
<img title=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alc"], "name", array()), "html", null, true);
            echo "\" src=\"/img_alcool/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alc"], "imglink", array()), "html", null, true);
            echo "\" class=\"alcool\">
  <div class=\"dropdown-content\">
      <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify", array("name" => twig_get_attribute($this->env, $this->source, $context["alc"], "name", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("name" => twig_get_attribute($this->env, $this->source, $context["alc"], "name", array()))), "html", null, true);
            echo "\" class=\"del\">Supprimer</a>
  </div>
</div>
</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
<div class=\"pagination\">

    ";
        // line 24
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 24, $this->source); })()) != 1)) {
            // line 25
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 25, $this->source); })()) - 1))), "html", null, true);
            echo "\"><<</a>
    ";
        }
        // line 27
        if ((((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 27, $this->source); })()) / 16)) + 1) <= 10)) {
            // line 28
            echo "  ";
            if ((((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 28, $this->source); })()) % 16) == 0)) {
                // line 29
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 29, $this->source); })()) / 16))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 30
                    echo "
    ";
                    // line 31
                    if (($context["i"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 31, $this->source); })()))) {
                        // line 32
                        echo "      <a class=\"active\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => $context["i"])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a>
    ";
                    } else {
                        // line 34
                        echo "      <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => $context["i"])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a>
    ";
                    }
                    // line 36
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "  ";
            } else {
                // line 38
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 38, $this->source); })()) / 16)) + 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 39
                    echo "
    ";
                    // line 40
                    if (($context["i"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 40, $this->source); })()))) {
                        // line 41
                        echo "      <a class=\"active\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => $context["i"])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a>
    ";
                    } else {
                        // line 43
                        echo "      <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => $context["i"])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a>
    ";
                    }
                    // line 45
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "  ";
            }
        } else {
            // line 48
            echo "  ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 48, $this->source); })()) == 1)) {
                // line 49
                echo "    <a class=\"active\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 1));
                echo "\">";
                echo 1;
                echo "</a>
    <a href=\"";
                // line 50
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 2));
                echo "\">";
                echo 2;
                echo "</a>
    <a href=\"";
                // line 51
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 3));
                echo "\">";
                echo 3;
                echo "</a>
  ";
            } elseif ((            // line 52
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 52, $this->source); })()) == 2)) {
                // line 53
                echo "    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 1));
                echo "\">";
                echo 1;
                echo "</a>
    <a class=\"active\" href=\"";
                // line 54
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 2));
                echo "\">";
                echo 2;
                echo "</a>
    <a href=\"";
                // line 55
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 3));
                echo "\">";
                echo 3;
                echo "</a>
  ";
            } elseif ((            // line 56
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 56, $this->source); })()) == 3)) {
                // line 57
                echo "    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 1));
                echo "\">";
                echo 1;
                echo "</a>
    <a href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 2));
                echo "\">";
                echo 2;
                echo "</a>
    <a class=\"active\" href=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 3));
                echo "\">";
                echo 3;
                echo "</a>
    <a href=\"";
                // line 60
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 4));
                echo "\">";
                echo 4;
                echo "</a>
  ";
            } elseif ((            // line 61
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 61, $this->source); })()) == 4)) {
                // line 62
                echo "    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 1));
                echo "\">";
                echo 1;
                echo "</a>
    <a href=\"";
                // line 63
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 2));
                echo "\">";
                echo 2;
                echo "</a>
    <a href=\"";
                // line 64
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 3));
                echo "\">";
                echo 3;
                echo "</a>
    <a class=\"active\" href=\"";
                // line 65
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 4));
                echo "\">";
                echo 4;
                echo "</a>
    <a href=\"";
                // line 66
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 5));
                echo "\">";
                echo 5;
                echo "</a>
  ";
            } else {
                // line 68
                echo "    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 1));
                echo "\">";
                echo 1;
                echo "</a>
    <a href=\"";
                // line 69
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 2));
                echo "\">";
                echo 2;
                echo "</a>
    <a href=\"";
                // line 70
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => 3));
                echo "\">";
                echo 3;
                echo "</a>
  ";
            }
            // line 72
            echo "    <a>...</a>
  ";
            // line 73
            if ((((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 73, $this->source); })()) % 16) == 0)) {
                // line 74
                echo "    ";
                if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 74, $this->source); })()) > 4) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 74, $this->source); })()) < (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 74, $this->source); })()) / 16) - 3)))) {
                    // line 75
                    echo "    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 75, $this->source); })()) - 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 75, $this->source); })()) - 1), "html", null, true);
                    echo "</a>
    <a href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 76, $this->source); })()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 76, $this->source); })()), "html", null, true);
                    echo "</a>
    <a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 77, $this->source); })()) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 77, $this->source); })()) + 1), "html", null, true);
                    echo "</a>
    ";
                }
                // line 79
                echo "  ";
            } else {
                // line 80
                echo "    ";
                if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 80, $this->source); })()) > 4) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 80, $this->source); })()) < (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 80, $this->source); })()) / 16)) - 3) + 1)))) {
                    // line 81
                    echo "    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 81, $this->source); })()) - 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 81, $this->source); })()) - 1), "html", null, true);
                    echo "</a>
    <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 82, $this->source); })()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 82, $this->source); })()), "html", null, true);
                    echo "</a>
    <a href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 83, $this->source); })()) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 83, $this->source); })()) + 1), "html", null, true);
                    echo "</a>
    ";
                }
                // line 85
                echo "  ";
            }
            // line 86
            echo "  ";
            if ((((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 86, $this->source); })()) % 16) == 0)) {
                // line 87
                echo "    ";
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 87, $this->source); })()) == ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 87, $this->source); })()) / 16))) {
                    // line 88
                    echo "      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 88, $this->source); })()) / 16) - 2))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 88, $this->source); })()) / 16) - 2), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 89, $this->source); })()) / 16) - 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 89, $this->source); })()) / 16) - 1), "html", null, true);
                    echo "</a>
      <a class=\"active\" href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 90, $this->source); })()) / 16))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 90, $this->source); })()) / 16), "html", null, true);
                    echo "</a>
    ";
                } elseif ((                // line 91
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 91, $this->source); })()) == (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 91, $this->source); })()) / 16) - 1))) {
                    // line 92
                    echo "      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 92, $this->source); })()) / 16) - 2))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 92, $this->source); })()) / 16) - 2), "html", null, true);
                    echo "</a>
      <a class=\"active\" href=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 93, $this->source); })()) / 16) - 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 93, $this->source); })()) / 16) - 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 94, $this->source); })()) / 16))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 94, $this->source); })()) / 16), "html", null, true);
                    echo "</a>
    ";
                } elseif ((                // line 95
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 95, $this->source); })()) == (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 95, $this->source); })()) / 16) - 2))) {
                    // line 96
                    echo "      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 96, $this->source); })()) / 16) - 3))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 96, $this->source); })()) / 16) - 3), "html", null, true);
                    echo "</a>
      <a class=\"active\" href=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 97, $this->source); })()) / 16) - 2))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 97, $this->source); })()) / 16) - 2), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 98, $this->source); })()) / 16) - 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 98, $this->source); })()) / 16) - 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 99, $this->source); })()) / 16))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 99, $this->source); })()) / 16), "html", null, true);
                    echo "</a>
    ";
                } elseif ((                // line 100
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 100, $this->source); })()) == (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 100, $this->source); })()) / 16) - 3))) {
                    // line 101
                    echo "      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 101, $this->source); })()) / 16) - 4))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 101, $this->source); })()) / 16) - 4), "html", null, true);
                    echo "</a>
      <a class=\"active\" href=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 102, $this->source); })()) / 16) - 3))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 102, $this->source); })()) / 16) - 3), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 103, $this->source); })()) / 16) - 2))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 103, $this->source); })()) / 16) - 2), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 104, $this->source); })()) / 16) - 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 104, $this->source); })()) / 16) - 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 105, $this->source); })()) / 16))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 105, $this->source); })()) / 16), "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 107
                    echo "      <a>...</a>
      <a href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 108, $this->source); })()) / 16) - 2))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 108, $this->source); })()) / 16) - 2), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 109, $this->source); })()) / 16) - 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 109, $this->source); })()) / 16) - 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 110, $this->source); })()) / 16))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 110, $this->source); })()) / 16), "html", null, true);
                    echo "</a>
    ";
                }
                // line 112
                echo "  ";
            } else {
                // line 113
                echo "    ";
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 113, $this->source); })()) == ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 113, $this->source); })()) / 16)) + 1))) {
                    // line 114
                    echo "      <a class=\"active\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 114, $this->source); })()) / 16)) - 2) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 114, $this->source); })()) / 16)) - 2) + 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 115
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 115, $this->source); })()) / 16)) - 1) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 115, $this->source); })()) / 16)) - 1) + 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 116, $this->source); })()) / 16)) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 116, $this->source); })()) / 16)) + 1), "html", null, true);
                    echo "</a>
    ";
                } elseif ((                // line 117
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 117, $this->source); })()) == (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 117, $this->source); })()) / 16)) - 1) + 1))) {
                    // line 118
                    echo "      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 118, $this->source); })()) / 16)) - 2) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 118, $this->source); })()) / 16)) - 2) + 1), "html", null, true);
                    echo "</a>
      <a class=\"active\" href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 119, $this->source); })()) / 16)) - 1) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 119, $this->source); })()) / 16)) - 1) + 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 120, $this->source); })()) / 16)) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 120, $this->source); })()) / 16)) + 1), "html", null, true);
                    echo "</a>
    ";
                } elseif ((                // line 121
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 121, $this->source); })()) == (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 121, $this->source); })()) / 16)) - 2) + 1))) {
                    // line 122
                    echo "      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 122, $this->source); })()) / 16)) - 3) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 122, $this->source); })()) / 16)) - 3) + 1), "html", null, true);
                    echo "</a>
      <a class=\"active\" href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 123, $this->source); })()) / 16)) - 2) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 123, $this->source); })()) / 16)) - 2) + 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 124, $this->source); })()) / 16)) - 1) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 124, $this->source); })()) / 16)) - 1) + 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 125, $this->source); })()) / 16)) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 125, $this->source); })()) / 16)) + 1), "html", null, true);
                    echo "</a>
    ";
                } elseif ((                // line 126
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 126, $this->source); })()) == (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 126, $this->source); })()) / 16)) - 3) + 1))) {
                    // line 127
                    echo "      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 127, $this->source); })()) / 16)) - 4) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 127, $this->source); })()) / 16)) - 4) + 1), "html", null, true);
                    echo "</a>
      <a class=\"active\" href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 128, $this->source); })()) / 16)) - 3) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 128, $this->source); })()) / 16)) - 3) + 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 129
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 129, $this->source); })()) / 16)) - 2) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 129, $this->source); })()) / 16)) - 2) + 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 130
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 130, $this->source); })()) / 16)) - 1) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 130, $this->source); })()) / 16)) - 1) + 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 131, $this->source); })()) / 16)) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 131, $this->source); })()) / 16)) + 1), "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 133
                    echo "      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 133, $this->source); })()) / 16)) - 2) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 133, $this->source); })()) / 16)) - 2) + 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 134, $this->source); })()) / 16)) - 1) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 134, $this->source); })()) / 16)) - 1) + 1), "html", null, true);
                    echo "</a>
      <a href=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 135, $this->source); })()) / 16)) + 1))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((int) floor(((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 135, $this->source); })()) / 16)) + 1), "html", null, true);
                    echo "</a>
    ";
                }
                // line 137
                echo "  ";
            }
        }
        // line 139
        echo "  ";
        if ((((isset($context["nbrAlcool"]) || array_key_exists("nbrAlcool", $context) ? $context["nbrAlcool"] : (function () { throw new Twig_Error_Runtime('Variable "nbrAlcool" does not exist.', 139, $this->source); })()) - ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 139, $this->source); })()) * 16)) >= 0)) {
            // line 140
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_list_admin", array("page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 140, $this->source); })()) + 1))), "html", null, true);
            echo "\">>></a>
  ";
        }
        // line 142
        echo "

  </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "alcool_list_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 142,  624 => 140,  621 => 139,  617 => 137,  610 => 135,  604 => 134,  597 => 133,  590 => 131,  584 => 130,  578 => 129,  572 => 128,  565 => 127,  563 => 126,  557 => 125,  551 => 124,  545 => 123,  538 => 122,  536 => 121,  530 => 120,  524 => 119,  517 => 118,  515 => 117,  509 => 116,  503 => 115,  496 => 114,  493 => 113,  490 => 112,  483 => 110,  477 => 109,  471 => 108,  468 => 107,  461 => 105,  455 => 104,  449 => 103,  443 => 102,  436 => 101,  434 => 100,  428 => 99,  422 => 98,  416 => 97,  409 => 96,  407 => 95,  401 => 94,  395 => 93,  388 => 92,  386 => 91,  380 => 90,  374 => 89,  367 => 88,  364 => 87,  361 => 86,  358 => 85,  351 => 83,  345 => 82,  338 => 81,  335 => 80,  332 => 79,  325 => 77,  319 => 76,  312 => 75,  309 => 74,  307 => 73,  304 => 72,  297 => 70,  291 => 69,  284 => 68,  277 => 66,  271 => 65,  265 => 64,  259 => 63,  252 => 62,  250 => 61,  244 => 60,  238 => 59,  232 => 58,  225 => 57,  223 => 56,  217 => 55,  211 => 54,  204 => 53,  202 => 52,  196 => 51,  190 => 50,  183 => 49,  180 => 48,  176 => 46,  170 => 45,  162 => 43,  154 => 41,  152 => 40,  149 => 39,  144 => 38,  141 => 37,  135 => 36,  127 => 34,  119 => 32,  117 => 31,  114 => 30,  109 => 29,  106 => 28,  104 => 27,  98 => 25,  96 => 24,  91 => 21,  78 => 14,  74 => 13,  67 => 11,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block main %}


<div class=\"grid grid-pad\">
{% for alc in alcools %}

<div class=\"ingr\">
<div class=\"drop-img\">
<img title=\"{{alc.name}}\" src=\"/img_alcool/{{ alc.imglink }}\" class=\"alcool\">
  <div class=\"dropdown-content\">
      <a href=\"{{ path('modify', {'name': alc.name}) }}\">Modifier</a>
      <a href=\"{{ path('delete', {'name': alc.name}) }}\" class=\"del\">Supprimer</a>
  </div>
</div>
</div>


{% endfor %}

<div class=\"pagination\">

    {% if page != 1 %}
      <a href=\"{{ path('alcool_list_admin', {'page': page-1}) }}\"><<</a>
    {% endif %}
{% if nbrAlcool//16+1 <=10 %}
  {% if nbrAlcool%16==0 %}
    {% for i in 1..(nbrAlcool//16) %}

    {% if i==page %}
      <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': i}) }}\">{{i}}</a>
    {% else %}
      <a href=\"{{ path('alcool_list_admin', {'page': i}) }}\">{{i}}</a>
    {% endif %}
    {% endfor %}
  {% else %}
    {% for i in 1..(nbrAlcool//16+1) %}

    {% if i==page %}
      <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': i}) }}\">{{i}}</a>
    {% else %}
      <a href=\"{{ path('alcool_list_admin', {'page': i}) }}\">{{i}}</a>
    {% endif %}
    {% endfor %}
  {% endif %}
{% else %}
  {% if page==1 %}
    <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': 1}) }}\">{{1}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': 2}) }}\">{{2}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': 3}) }}\">{{3}}</a>
  {% elseif page==2 %}
    <a href=\"{{ path('alcool_list_admin', {'page': 1}) }}\">{{1}}</a>
    <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': 2}) }}\">{{2}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': 3}) }}\">{{3}}</a>
  {% elseif page==3 %}
    <a href=\"{{ path('alcool_list_admin', {'page': 1}) }}\">{{1}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': 2}) }}\">{{2}}</a>
    <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': 3}) }}\">{{3}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': 4}) }}\">{{4}}</a>
  {% elseif page==4 %}
    <a href=\"{{ path('alcool_list_admin', {'page': 1}) }}\">{{1}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': 2}) }}\">{{2}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': 3}) }}\">{{3}}</a>
    <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': 4}) }}\">{{4}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': 5}) }}\">{{5}}</a>
  {% else %}
    <a href=\"{{ path('alcool_list_admin', {'page': 1}) }}\">{{1}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': 2}) }}\">{{2}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': 3}) }}\">{{3}}</a>
  {% endif %}
    <a>...</a>
  {% if nbrAlcool%16==0 %}
    {% if page >4 and page<(nbrAlcool/16-3) %}
    <a href=\"{{ path('alcool_list_admin', {'page': page-1}) }}\">{{page-1}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': page}) }}\">{{page}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': page+1}) }}\">{{page+1}}</a>
    {% endif %}
  {% else %}
    {% if page >4 and page<(nbrAlcool//16-3+1) %}
    <a href=\"{{ path('alcool_list_admin', {'page': page-1}) }}\">{{page-1}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': page}) }}\">{{page}}</a>
    <a href=\"{{ path('alcool_list_admin', {'page': page+1}) }}\">{{page+1}}</a>
    {% endif %}
  {% endif %}
  {% if nbrAlcool%16==0 %}
    {% if page==nbrAlcool/16 %}
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-2}) }}\">{{nbrAlcool/16-2}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-1}) }}\">{{nbrAlcool/16-1}}</a>
      <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16}) }}\">{{nbrAlcool/16}}</a>
    {% elseif page==nbrAlcool/16-1 %}
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-2}) }}\">{{nbrAlcool/16-2}}</a>
      <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-1}) }}\">{{nbrAlcool/16-1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16}) }}\">{{nbrAlcool/16}}</a>
    {% elseif page==nbrAlcool/16-2 %}
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-3}) }}\">{{nbrAlcool/16-3}}</a>
      <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-2}) }}\">{{nbrAlcool/16-2}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-1}) }}\">{{nbrAlcool/16-1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16}) }}\">{{nbrAlcool/16}}</a>
    {% elseif page==nbrAlcool/16-3 %}
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-4}) }}\">{{nbrAlcool/16-4}}</a>
      <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-3}) }}\">{{nbrAlcool/16-3}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-2}) }}\">{{nbrAlcool/16-2}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-1}) }}\">{{nbrAlcool/16-1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16}) }}\">{{nbrAlcool/16}}</a>
    {% else %}
      <a>...</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-2}) }}\">{{nbrAlcool/16-2}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16-1}) }}\">{{nbrAlcool/16-1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool/16}) }}\">{{nbrAlcool/16}}</a>
    {% endif %}
  {% else %}
    {% if page==nbrAlcool//16+1 %}
      <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-2+1}) }}\">{{nbrAlcool//16-2+1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-1+1}) }}\">{{nbrAlcool//16-1+1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16+1}) }}\">{{nbrAlcool//16+1}}</a>
    {% elseif page==nbrAlcool//16-1+1 %}
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-2+1}) }}\">{{nbrAlcool//16-2+1}}</a>
      <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-1+1}) }}\">{{nbrAlcool//16-1+1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16+1}) }}\">{{nbrAlcool//16+1}}</a>
    {% elseif page==nbrAlcool//16-2+1 %}
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-3+1}) }}\">{{nbrAlcool//16-3+1}}</a>
      <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-2+1}) }}\">{{nbrAlcool//16-2+1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-1+1}) }}\">{{nbrAlcool//16-1+1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16+1}) }}\">{{nbrAlcool//16+1}}</a>
    {% elseif page==nbrAlcool//16-3+1 %}
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-4+1}) }}\">{{nbrAlcool//16-4+1}}</a>
      <a class=\"active\" href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-3+1}) }}\">{{nbrAlcool//16-3+1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-2+1}) }}\">{{nbrAlcool//16-2+1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-1+1}) }}\">{{nbrAlcool//16-1+1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16+1}) }}\">{{nbrAlcool//16+1}}</a>
    {% else %}
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-2+1}) }}\">{{nbrAlcool//16-2+1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16-1+1}) }}\">{{nbrAlcool//16-1+1}}</a>
      <a href=\"{{ path('alcool_list_admin', {'page': nbrAlcool//16+1}) }}\">{{nbrAlcool//16+1}}</a>
    {% endif %}
  {% endif %}
{% endif %}
  {% if nbrAlcool - page * 16 >= 0 %}
    <a href=\"{{ path('alcool_list_admin', {'page': page+1}) }}\">>></a>
  {% endif %}


  </div>

</div>

{% endblock %}
", "alcool_list_admin.html.twig", "/home/gperrier/Documents/web/site/templates/alcool_list_admin.html.twig");
    }
}
