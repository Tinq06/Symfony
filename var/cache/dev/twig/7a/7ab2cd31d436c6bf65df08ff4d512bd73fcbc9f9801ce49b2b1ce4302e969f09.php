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
        $__internal_ff0830ca7ffdada1089aacb75fef8421d03c0de35f36e8d031784bfadf83b147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0830ca7ffdada1089aacb75fef8421d03c0de35f36e8d031784bfadf83b147->enter($__internal_ff0830ca7ffdada1089aacb75fef8421d03c0de35f36e8d031784bfadf83b147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d17e69be8fb476bf5851ac61b384f6fcb78dd5a7191305151758007959e9dbab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17e69be8fb476bf5851ac61b384f6fcb78dd5a7191305151758007959e9dbab->enter($__internal_d17e69be8fb476bf5851ac61b384f6fcb78dd5a7191305151758007959e9dbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff0830ca7ffdada1089aacb75fef8421d03c0de35f36e8d031784bfadf83b147->leave($__internal_ff0830ca7ffdada1089aacb75fef8421d03c0de35f36e8d031784bfadf83b147_prof);

        
        $__internal_d17e69be8fb476bf5851ac61b384f6fcb78dd5a7191305151758007959e9dbab->leave($__internal_d17e69be8fb476bf5851ac61b384f6fcb78dd5a7191305151758007959e9dbab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77aefd75f23ee016fb0f232c550e287bf7ad8760888a39b6afd60650428037cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77aefd75f23ee016fb0f232c550e287bf7ad8760888a39b6afd60650428037cd->enter($__internal_77aefd75f23ee016fb0f232c550e287bf7ad8760888a39b6afd60650428037cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_433bc6a753edcea7ee96ad347d7695b7e947ac2b8e41d82243fe2c7b2355d8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433bc6a753edcea7ee96ad347d7695b7e947ac2b8e41d82243fe2c7b2355d8a3->enter($__internal_433bc6a753edcea7ee96ad347d7695b7e947ac2b8e41d82243fe2c7b2355d8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_433bc6a753edcea7ee96ad347d7695b7e947ac2b8e41d82243fe2c7b2355d8a3->leave($__internal_433bc6a753edcea7ee96ad347d7695b7e947ac2b8e41d82243fe2c7b2355d8a3_prof);

        
        $__internal_77aefd75f23ee016fb0f232c550e287bf7ad8760888a39b6afd60650428037cd->leave($__internal_77aefd75f23ee016fb0f232c550e287bf7ad8760888a39b6afd60650428037cd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2254f0ded7527bacb0a4bed3676c2b828a9681b4a7e84c3a35614fcbde3f4a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2254f0ded7527bacb0a4bed3676c2b828a9681b4a7e84c3a35614fcbde3f4a9d->enter($__internal_2254f0ded7527bacb0a4bed3676c2b828a9681b4a7e84c3a35614fcbde3f4a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_77d4f33cd2ec40bcdfa0ea272eb7696d4f33849427c5a2e15034f82fb62a6703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d4f33cd2ec40bcdfa0ea272eb7696d4f33849427c5a2e15034f82fb62a6703->enter($__internal_77d4f33cd2ec40bcdfa0ea272eb7696d4f33849427c5a2e15034f82fb62a6703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_77d4f33cd2ec40bcdfa0ea272eb7696d4f33849427c5a2e15034f82fb62a6703->leave($__internal_77d4f33cd2ec40bcdfa0ea272eb7696d4f33849427c5a2e15034f82fb62a6703_prof);

        
        $__internal_2254f0ded7527bacb0a4bed3676c2b828a9681b4a7e84c3a35614fcbde3f4a9d->leave($__internal_2254f0ded7527bacb0a4bed3676c2b828a9681b4a7e84c3a35614fcbde3f4a9d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1780a2cf73dacfa14786c0d4133eb8884e2e51aae1ef584c935ddac358e78dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1780a2cf73dacfa14786c0d4133eb8884e2e51aae1ef584c935ddac358e78dd->enter($__internal_f1780a2cf73dacfa14786c0d4133eb8884e2e51aae1ef584c935ddac358e78dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_17cc6c8df2ed8db969098a6a7a49b9c0d35606ac886e2d0d9a2e8d9592637e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cc6c8df2ed8db969098a6a7a49b9c0d35606ac886e2d0d9a2e8d9592637e8f->enter($__internal_17cc6c8df2ed8db969098a6a7a49b9c0d35606ac886e2d0d9a2e8d9592637e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_17cc6c8df2ed8db969098a6a7a49b9c0d35606ac886e2d0d9a2e8d9592637e8f->leave($__internal_17cc6c8df2ed8db969098a6a7a49b9c0d35606ac886e2d0d9a2e8d9592637e8f_prof);

        
        $__internal_f1780a2cf73dacfa14786c0d4133eb8884e2e51aae1ef584c935ddac358e78dd->leave($__internal_f1780a2cf73dacfa14786c0d4133eb8884e2e51aae1ef584c935ddac358e78dd_prof);

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
