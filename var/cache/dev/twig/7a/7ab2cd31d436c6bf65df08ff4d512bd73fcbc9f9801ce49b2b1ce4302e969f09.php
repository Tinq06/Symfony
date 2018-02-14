<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa1a8e646c2c142f89eb00e79afae05eb0bed39642a5a8918762028db3f25d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1a8e646c2c142f89eb00e79afae05eb0bed39642a5a8918762028db3f25d2b->enter($__internal_fa1a8e646c2c142f89eb00e79afae05eb0bed39642a5a8918762028db3f25d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_066aa92ad1b03524457f3a5eea3782ed1f30396d0e94654c844c311876a9dd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066aa92ad1b03524457f3a5eea3782ed1f30396d0e94654c844c311876a9dd64->enter($__internal_066aa92ad1b03524457f3a5eea3782ed1f30396d0e94654c844c311876a9dd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1a8e646c2c142f89eb00e79afae05eb0bed39642a5a8918762028db3f25d2b->leave($__internal_fa1a8e646c2c142f89eb00e79afae05eb0bed39642a5a8918762028db3f25d2b_prof);

        
        $__internal_066aa92ad1b03524457f3a5eea3782ed1f30396d0e94654c844c311876a9dd64->leave($__internal_066aa92ad1b03524457f3a5eea3782ed1f30396d0e94654c844c311876a9dd64_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47afd0bb96bfbab4f31817342d67ce77a6c4300ce7605598b416a673eb92f391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47afd0bb96bfbab4f31817342d67ce77a6c4300ce7605598b416a673eb92f391->enter($__internal_47afd0bb96bfbab4f31817342d67ce77a6c4300ce7605598b416a673eb92f391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f720998064df6119f8fa0b8533c0c60523fb166e822aaeaed6a3ca26443353ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f720998064df6119f8fa0b8533c0c60523fb166e822aaeaed6a3ca26443353ff->enter($__internal_f720998064df6119f8fa0b8533c0c60523fb166e822aaeaed6a3ca26443353ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f720998064df6119f8fa0b8533c0c60523fb166e822aaeaed6a3ca26443353ff->leave($__internal_f720998064df6119f8fa0b8533c0c60523fb166e822aaeaed6a3ca26443353ff_prof);

        
        $__internal_47afd0bb96bfbab4f31817342d67ce77a6c4300ce7605598b416a673eb92f391->leave($__internal_47afd0bb96bfbab4f31817342d67ce77a6c4300ce7605598b416a673eb92f391_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff96175451314722ceaf87cff2e68b3730178ca796cd47bfccdb6fa65b6c9092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff96175451314722ceaf87cff2e68b3730178ca796cd47bfccdb6fa65b6c9092->enter($__internal_ff96175451314722ceaf87cff2e68b3730178ca796cd47bfccdb6fa65b6c9092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5be74e480b4f2301793a372b6e0eddf13c4d5c078c1bd1ead038a189a76f2cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be74e480b4f2301793a372b6e0eddf13c4d5c078c1bd1ead038a189a76f2cb8->enter($__internal_5be74e480b4f2301793a372b6e0eddf13c4d5c078c1bd1ead038a189a76f2cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5be74e480b4f2301793a372b6e0eddf13c4d5c078c1bd1ead038a189a76f2cb8->leave($__internal_5be74e480b4f2301793a372b6e0eddf13c4d5c078c1bd1ead038a189a76f2cb8_prof);

        
        $__internal_ff96175451314722ceaf87cff2e68b3730178ca796cd47bfccdb6fa65b6c9092->leave($__internal_ff96175451314722ceaf87cff2e68b3730178ca796cd47bfccdb6fa65b6c9092_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d39073cf6123c49d6e02e7014b95bb3d20a1fd64b883118448bf8396cfb368c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d39073cf6123c49d6e02e7014b95bb3d20a1fd64b883118448bf8396cfb368c->enter($__internal_2d39073cf6123c49d6e02e7014b95bb3d20a1fd64b883118448bf8396cfb368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_308bd4ecf7b0f2cbf57aa9b454ca3e281664f0f68c46f80bf55919c4d8a0478f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308bd4ecf7b0f2cbf57aa9b454ca3e281664f0f68c46f80bf55919c4d8a0478f->enter($__internal_308bd4ecf7b0f2cbf57aa9b454ca3e281664f0f68c46f80bf55919c4d8a0478f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_308bd4ecf7b0f2cbf57aa9b454ca3e281664f0f68c46f80bf55919c4d8a0478f->leave($__internal_308bd4ecf7b0f2cbf57aa9b454ca3e281664f0f68c46f80bf55919c4d8a0478f_prof);

        
        $__internal_2d39073cf6123c49d6e02e7014b95bb3d20a1fd64b883118448bf8396cfb368c->leave($__internal_2d39073cf6123c49d6e02e7014b95bb3d20a1fd64b883118448bf8396cfb368c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
