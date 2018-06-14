<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e0f02a76a09bfe4bf2cf92c20cf699909424920e26d9a9d6d430c521b504bdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80e3851850a62811cd2b8f29efb4cbfe96e52d9bfd08f5c64fc6d84acd393dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e3851850a62811cd2b8f29efb4cbfe96e52d9bfd08f5c64fc6d84acd393dac->enter($__internal_80e3851850a62811cd2b8f29efb4cbfe96e52d9bfd08f5c64fc6d84acd393dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f7b9ccdd847740f704eb94c70ca7789306e49dc87918259879d137532c54b442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b9ccdd847740f704eb94c70ca7789306e49dc87918259879d137532c54b442->enter($__internal_f7b9ccdd847740f704eb94c70ca7789306e49dc87918259879d137532c54b442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_80e3851850a62811cd2b8f29efb4cbfe96e52d9bfd08f5c64fc6d84acd393dac->leave($__internal_80e3851850a62811cd2b8f29efb4cbfe96e52d9bfd08f5c64fc6d84acd393dac_prof);

        
        $__internal_f7b9ccdd847740f704eb94c70ca7789306e49dc87918259879d137532c54b442->leave($__internal_f7b9ccdd847740f704eb94c70ca7789306e49dc87918259879d137532c54b442_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d235f8a677e817063e9ac3c5613fffe635ef92821a37a81597e153033405112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d235f8a677e817063e9ac3c5613fffe635ef92821a37a81597e153033405112->enter($__internal_3d235f8a677e817063e9ac3c5613fffe635ef92821a37a81597e153033405112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3facd6fde8bbda33fc046be10b86e94e2cdd192db305b5f4be59e2265f9bc871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3facd6fde8bbda33fc046be10b86e94e2cdd192db305b5f4be59e2265f9bc871->enter($__internal_3facd6fde8bbda33fc046be10b86e94e2cdd192db305b5f4be59e2265f9bc871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3facd6fde8bbda33fc046be10b86e94e2cdd192db305b5f4be59e2265f9bc871->leave($__internal_3facd6fde8bbda33fc046be10b86e94e2cdd192db305b5f4be59e2265f9bc871_prof);

        
        $__internal_3d235f8a677e817063e9ac3c5613fffe635ef92821a37a81597e153033405112->leave($__internal_3d235f8a677e817063e9ac3c5613fffe635ef92821a37a81597e153033405112_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3e6c47dbb1cfb93bf9067557087698d86836927221ff65136c54f38f3ec90e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e6c47dbb1cfb93bf9067557087698d86836927221ff65136c54f38f3ec90e4->enter($__internal_f3e6c47dbb1cfb93bf9067557087698d86836927221ff65136c54f38f3ec90e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d77b91613af8ca8fa4b006ebbf7dcbfa08e3f4882f4ebb858d5fed627b8c217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d77b91613af8ca8fa4b006ebbf7dcbfa08e3f4882f4ebb858d5fed627b8c217->enter($__internal_9d77b91613af8ca8fa4b006ebbf7dcbfa08e3f4882f4ebb858d5fed627b8c217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9d77b91613af8ca8fa4b006ebbf7dcbfa08e3f4882f4ebb858d5fed627b8c217->leave($__internal_9d77b91613af8ca8fa4b006ebbf7dcbfa08e3f4882f4ebb858d5fed627b8c217_prof);

        
        $__internal_f3e6c47dbb1cfb93bf9067557087698d86836927221ff65136c54f38f3ec90e4->leave($__internal_f3e6c47dbb1cfb93bf9067557087698d86836927221ff65136c54f38f3ec90e4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0896d8c8051e4027fb35e62fdb3300d1b6c7383df06f780ca31a31620daa062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0896d8c8051e4027fb35e62fdb3300d1b6c7383df06f780ca31a31620daa062->enter($__internal_c0896d8c8051e4027fb35e62fdb3300d1b6c7383df06f780ca31a31620daa062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ce6e1ff4405be98de3a4d3135427b416a3e4650b831d2a023a4424fbb46ac8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce6e1ff4405be98de3a4d3135427b416a3e4650b831d2a023a4424fbb46ac8c->enter($__internal_7ce6e1ff4405be98de3a4d3135427b416a3e4650b831d2a023a4424fbb46ac8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7ce6e1ff4405be98de3a4d3135427b416a3e4650b831d2a023a4424fbb46ac8c->leave($__internal_7ce6e1ff4405be98de3a4d3135427b416a3e4650b831d2a023a4424fbb46ac8c_prof);

        
        $__internal_c0896d8c8051e4027fb35e62fdb3300d1b6c7383df06f780ca31a31620daa062->leave($__internal_c0896d8c8051e4027fb35e62fdb3300d1b6c7383df06f780ca31a31620daa062_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/gperrier/Documents/web/site/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
