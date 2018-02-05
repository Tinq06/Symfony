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
        $__internal_52a5569fd4a60177910025284b5e20abc99a37b3df6d8fa45f33e5e34a3ce090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a5569fd4a60177910025284b5e20abc99a37b3df6d8fa45f33e5e34a3ce090->enter($__internal_52a5569fd4a60177910025284b5e20abc99a37b3df6d8fa45f33e5e34a3ce090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_99b68e2c71e61970491d15937362baa984858ef426308f5af798bbb470c0a2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b68e2c71e61970491d15937362baa984858ef426308f5af798bbb470c0a2ab->enter($__internal_99b68e2c71e61970491d15937362baa984858ef426308f5af798bbb470c0a2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a5569fd4a60177910025284b5e20abc99a37b3df6d8fa45f33e5e34a3ce090->leave($__internal_52a5569fd4a60177910025284b5e20abc99a37b3df6d8fa45f33e5e34a3ce090_prof);

        
        $__internal_99b68e2c71e61970491d15937362baa984858ef426308f5af798bbb470c0a2ab->leave($__internal_99b68e2c71e61970491d15937362baa984858ef426308f5af798bbb470c0a2ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea8b4dd786ba7aaddfaeeb8b34517eb2e38ebc80a2a99228d07af5f2f5f6772e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8b4dd786ba7aaddfaeeb8b34517eb2e38ebc80a2a99228d07af5f2f5f6772e->enter($__internal_ea8b4dd786ba7aaddfaeeb8b34517eb2e38ebc80a2a99228d07af5f2f5f6772e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81105939044415aec2cc3b6fd50f2347ac686995f17c40f179fa2c2ffa5a0ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81105939044415aec2cc3b6fd50f2347ac686995f17c40f179fa2c2ffa5a0ca5->enter($__internal_81105939044415aec2cc3b6fd50f2347ac686995f17c40f179fa2c2ffa5a0ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_81105939044415aec2cc3b6fd50f2347ac686995f17c40f179fa2c2ffa5a0ca5->leave($__internal_81105939044415aec2cc3b6fd50f2347ac686995f17c40f179fa2c2ffa5a0ca5_prof);

        
        $__internal_ea8b4dd786ba7aaddfaeeb8b34517eb2e38ebc80a2a99228d07af5f2f5f6772e->leave($__internal_ea8b4dd786ba7aaddfaeeb8b34517eb2e38ebc80a2a99228d07af5f2f5f6772e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9adf404d73fa429a4e35038dec6c3216ce64050a9454a04b495b570110663aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9adf404d73fa429a4e35038dec6c3216ce64050a9454a04b495b570110663aff->enter($__internal_9adf404d73fa429a4e35038dec6c3216ce64050a9454a04b495b570110663aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b2e20fb08475a241af028363d9fe0b2e8333965022fe045c4b091b9081820f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e20fb08475a241af028363d9fe0b2e8333965022fe045c4b091b9081820f4f->enter($__internal_b2e20fb08475a241af028363d9fe0b2e8333965022fe045c4b091b9081820f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b2e20fb08475a241af028363d9fe0b2e8333965022fe045c4b091b9081820f4f->leave($__internal_b2e20fb08475a241af028363d9fe0b2e8333965022fe045c4b091b9081820f4f_prof);

        
        $__internal_9adf404d73fa429a4e35038dec6c3216ce64050a9454a04b495b570110663aff->leave($__internal_9adf404d73fa429a4e35038dec6c3216ce64050a9454a04b495b570110663aff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_057bebc7063ba39ae2d06b2cc8c4f5e8c9dd38abf568c72f7439461f1b995ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057bebc7063ba39ae2d06b2cc8c4f5e8c9dd38abf568c72f7439461f1b995ffc->enter($__internal_057bebc7063ba39ae2d06b2cc8c4f5e8c9dd38abf568c72f7439461f1b995ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40d7967623520542e37b8c9364b94146bb336d281ebfdc43da69e28b76541687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d7967623520542e37b8c9364b94146bb336d281ebfdc43da69e28b76541687->enter($__internal_40d7967623520542e37b8c9364b94146bb336d281ebfdc43da69e28b76541687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_40d7967623520542e37b8c9364b94146bb336d281ebfdc43da69e28b76541687->leave($__internal_40d7967623520542e37b8c9364b94146bb336d281ebfdc43da69e28b76541687_prof);

        
        $__internal_057bebc7063ba39ae2d06b2cc8c4f5e8c9dd38abf568c72f7439461f1b995ffc->leave($__internal_057bebc7063ba39ae2d06b2cc8c4f5e8c9dd38abf568c72f7439461f1b995ffc_prof);

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
