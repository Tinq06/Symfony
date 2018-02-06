<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_d4ebf97526733cd1f6205875f1a8c1bd868f54412ad366c767edd021cf97ab10 extends Twig_Template
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
        $__internal_0fc9316ce68c54acb9ba845dc33541fd4b8e2cce5e4957d13b6e9d2fed38bc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc9316ce68c54acb9ba845dc33541fd4b8e2cce5e4957d13b6e9d2fed38bc62->enter($__internal_0fc9316ce68c54acb9ba845dc33541fd4b8e2cce5e4957d13b6e9d2fed38bc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0fc9316ce68c54acb9ba845dc33541fd4b8e2cce5e4957d13b6e9d2fed38bc62->leave($__internal_0fc9316ce68c54acb9ba845dc33541fd4b8e2cce5e4957d13b6e9d2fed38bc62_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_047a73e900420a6be33a56fe3ad5731e5d114c1e96ce305959725a2f504b4ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047a73e900420a6be33a56fe3ad5731e5d114c1e96ce305959725a2f504b4ae4->enter($__internal_047a73e900420a6be33a56fe3ad5731e5d114c1e96ce305959725a2f504b4ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_047a73e900420a6be33a56fe3ad5731e5d114c1e96ce305959725a2f504b4ae4->leave($__internal_047a73e900420a6be33a56fe3ad5731e5d114c1e96ce305959725a2f504b4ae4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_580098ce8be845b372fa9c05319d613c9eaef1053177724daf879a8729c973b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580098ce8be845b372fa9c05319d613c9eaef1053177724daf879a8729c973b0->enter($__internal_580098ce8be845b372fa9c05319d613c9eaef1053177724daf879a8729c973b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_580098ce8be845b372fa9c05319d613c9eaef1053177724daf879a8729c973b0->leave($__internal_580098ce8be845b372fa9c05319d613c9eaef1053177724daf879a8729c973b0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c7daf4deb235867507a58601d31c1cf5d911016a9f5e522436d79a360622014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7daf4deb235867507a58601d31c1cf5d911016a9f5e522436d79a360622014->enter($__internal_5c7daf4deb235867507a58601d31c1cf5d911016a9f5e522436d79a360622014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c7daf4deb235867507a58601d31c1cf5d911016a9f5e522436d79a360622014->leave($__internal_5c7daf4deb235867507a58601d31c1cf5d911016a9f5e522436d79a360622014_prof);

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
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/layout.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
