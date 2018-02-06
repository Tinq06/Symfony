<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_38b394cb408b67ae75cb8b0364809a6f5eb35b193bc53abb2315d76736966ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b394cb408b67ae75cb8b0364809a6f5eb35b193bc53abb2315d76736966ae9->enter($__internal_38b394cb408b67ae75cb8b0364809a6f5eb35b193bc53abb2315d76736966ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2d5eb9f50a002af87dc0c40992bacae27c9f11141030dbc39b69f26c386214bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5eb9f50a002af87dc0c40992bacae27c9f11141030dbc39b69f26c386214bb->enter($__internal_2d5eb9f50a002af87dc0c40992bacae27c9f11141030dbc39b69f26c386214bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b394cb408b67ae75cb8b0364809a6f5eb35b193bc53abb2315d76736966ae9->leave($__internal_38b394cb408b67ae75cb8b0364809a6f5eb35b193bc53abb2315d76736966ae9_prof);

        
        $__internal_2d5eb9f50a002af87dc0c40992bacae27c9f11141030dbc39b69f26c386214bb->leave($__internal_2d5eb9f50a002af87dc0c40992bacae27c9f11141030dbc39b69f26c386214bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96bcd5ec717bd51062ae35969a36d14556fa28033aa003712a6ac0a190149c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96bcd5ec717bd51062ae35969a36d14556fa28033aa003712a6ac0a190149c1b->enter($__internal_96bcd5ec717bd51062ae35969a36d14556fa28033aa003712a6ac0a190149c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff721c5ef5dfb9b200979dd9affb6f28834798f94aad501ea669968b8897f1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff721c5ef5dfb9b200979dd9affb6f28834798f94aad501ea669968b8897f1ef->enter($__internal_ff721c5ef5dfb9b200979dd9affb6f28834798f94aad501ea669968b8897f1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff721c5ef5dfb9b200979dd9affb6f28834798f94aad501ea669968b8897f1ef->leave($__internal_ff721c5ef5dfb9b200979dd9affb6f28834798f94aad501ea669968b8897f1ef_prof);

        
        $__internal_96bcd5ec717bd51062ae35969a36d14556fa28033aa003712a6ac0a190149c1b->leave($__internal_96bcd5ec717bd51062ae35969a36d14556fa28033aa003712a6ac0a190149c1b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a9b0b2b240de3bf1ff2d845fab02f7e94114afd64230c4dc642b1b466f7d914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9b0b2b240de3bf1ff2d845fab02f7e94114afd64230c4dc642b1b466f7d914->enter($__internal_0a9b0b2b240de3bf1ff2d845fab02f7e94114afd64230c4dc642b1b466f7d914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2c41b47b03cab11dff44c50d187f2bd72a8b0231601f1c204dd2ffc1ec5bb2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c41b47b03cab11dff44c50d187f2bd72a8b0231601f1c204dd2ffc1ec5bb2e2->enter($__internal_2c41b47b03cab11dff44c50d187f2bd72a8b0231601f1c204dd2ffc1ec5bb2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c41b47b03cab11dff44c50d187f2bd72a8b0231601f1c204dd2ffc1ec5bb2e2->leave($__internal_2c41b47b03cab11dff44c50d187f2bd72a8b0231601f1c204dd2ffc1ec5bb2e2_prof);

        
        $__internal_0a9b0b2b240de3bf1ff2d845fab02f7e94114afd64230c4dc642b1b466f7d914->leave($__internal_0a9b0b2b240de3bf1ff2d845fab02f7e94114afd64230c4dc642b1b466f7d914_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0ea7e01e06be9e699ae41c1854b879fadbdee28f8a69a6c4aeade58834474ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ea7e01e06be9e699ae41c1854b879fadbdee28f8a69a6c4aeade58834474ba->enter($__internal_f0ea7e01e06be9e699ae41c1854b879fadbdee28f8a69a6c4aeade58834474ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cb91eff4624e735819a2f279b97d9730ec6e4edf1673421c806ff3fd30324fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb91eff4624e735819a2f279b97d9730ec6e4edf1673421c806ff3fd30324fa7->enter($__internal_cb91eff4624e735819a2f279b97d9730ec6e4edf1673421c806ff3fd30324fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cb91eff4624e735819a2f279b97d9730ec6e4edf1673421c806ff3fd30324fa7->leave($__internal_cb91eff4624e735819a2f279b97d9730ec6e4edf1673421c806ff3fd30324fa7_prof);

        
        $__internal_f0ea7e01e06be9e699ae41c1854b879fadbdee28f8a69a6c4aeade58834474ba->leave($__internal_f0ea7e01e06be9e699ae41c1854b879fadbdee28f8a69a6c4aeade58834474ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
