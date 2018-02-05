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
        $__internal_01da51d57b4385cfe2dbf29d49ab661244a2b22bcb72e99e2ad764ee4e19fc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01da51d57b4385cfe2dbf29d49ab661244a2b22bcb72e99e2ad764ee4e19fc63->enter($__internal_01da51d57b4385cfe2dbf29d49ab661244a2b22bcb72e99e2ad764ee4e19fc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_20290b128c81c5e69e0ad400bf1990d8ac3839d2a59695b1220edf27742538aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20290b128c81c5e69e0ad400bf1990d8ac3839d2a59695b1220edf27742538aa->enter($__internal_20290b128c81c5e69e0ad400bf1990d8ac3839d2a59695b1220edf27742538aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01da51d57b4385cfe2dbf29d49ab661244a2b22bcb72e99e2ad764ee4e19fc63->leave($__internal_01da51d57b4385cfe2dbf29d49ab661244a2b22bcb72e99e2ad764ee4e19fc63_prof);

        
        $__internal_20290b128c81c5e69e0ad400bf1990d8ac3839d2a59695b1220edf27742538aa->leave($__internal_20290b128c81c5e69e0ad400bf1990d8ac3839d2a59695b1220edf27742538aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0e550f2f34834fa07c13c92b03268a3987722e97572bb32d22b8d62ca137951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e550f2f34834fa07c13c92b03268a3987722e97572bb32d22b8d62ca137951->enter($__internal_e0e550f2f34834fa07c13c92b03268a3987722e97572bb32d22b8d62ca137951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e6233ba73f48900ff2dc524eb616b7a8397168b2f7d9f54d3d0f91e97d1c295f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6233ba73f48900ff2dc524eb616b7a8397168b2f7d9f54d3d0f91e97d1c295f->enter($__internal_e6233ba73f48900ff2dc524eb616b7a8397168b2f7d9f54d3d0f91e97d1c295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e6233ba73f48900ff2dc524eb616b7a8397168b2f7d9f54d3d0f91e97d1c295f->leave($__internal_e6233ba73f48900ff2dc524eb616b7a8397168b2f7d9f54d3d0f91e97d1c295f_prof);

        
        $__internal_e0e550f2f34834fa07c13c92b03268a3987722e97572bb32d22b8d62ca137951->leave($__internal_e0e550f2f34834fa07c13c92b03268a3987722e97572bb32d22b8d62ca137951_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf641ac32137d0cbecfe8e3ae5ba57525482969a5bf2caf36d54b5cd5e7760bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf641ac32137d0cbecfe8e3ae5ba57525482969a5bf2caf36d54b5cd5e7760bd->enter($__internal_cf641ac32137d0cbecfe8e3ae5ba57525482969a5bf2caf36d54b5cd5e7760bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b914093fd6b08359ba0429b04e59c58a7e29f4bd64de4c7e0bc9af76a66d7aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b914093fd6b08359ba0429b04e59c58a7e29f4bd64de4c7e0bc9af76a66d7aac->enter($__internal_b914093fd6b08359ba0429b04e59c58a7e29f4bd64de4c7e0bc9af76a66d7aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b914093fd6b08359ba0429b04e59c58a7e29f4bd64de4c7e0bc9af76a66d7aac->leave($__internal_b914093fd6b08359ba0429b04e59c58a7e29f4bd64de4c7e0bc9af76a66d7aac_prof);

        
        $__internal_cf641ac32137d0cbecfe8e3ae5ba57525482969a5bf2caf36d54b5cd5e7760bd->leave($__internal_cf641ac32137d0cbecfe8e3ae5ba57525482969a5bf2caf36d54b5cd5e7760bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e76ce07f3f88c19e77509f71d38640f293f97de42a4fb0722639059a186c9bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76ce07f3f88c19e77509f71d38640f293f97de42a4fb0722639059a186c9bfa->enter($__internal_e76ce07f3f88c19e77509f71d38640f293f97de42a4fb0722639059a186c9bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b0f9d1d0b32a4e835d57a35473d7d373dff16fd401bb4e744ad888c29d15307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0f9d1d0b32a4e835d57a35473d7d373dff16fd401bb4e744ad888c29d15307->enter($__internal_9b0f9d1d0b32a4e835d57a35473d7d373dff16fd401bb4e744ad888c29d15307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b0f9d1d0b32a4e835d57a35473d7d373dff16fd401bb4e744ad888c29d15307->leave($__internal_9b0f9d1d0b32a4e835d57a35473d7d373dff16fd401bb4e744ad888c29d15307_prof);

        
        $__internal_e76ce07f3f88c19e77509f71d38640f293f97de42a4fb0722639059a186c9bfa->leave($__internal_e76ce07f3f88c19e77509f71d38640f293f97de42a4fb0722639059a186c9bfa_prof);

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
