<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_4a1d7df6fc1f2c40bf506993a4d34f5add8a9002955676059c0bbcd9664185a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f624984b064d78b66878c9a76b6d30afd4b82d7994a00b0eef6fae42ba5cbd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f624984b064d78b66878c9a76b6d30afd4b82d7994a00b0eef6fae42ba5cbd8->enter($__internal_0f624984b064d78b66878c9a76b6d30afd4b82d7994a00b0eef6fae42ba5cbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_7ade498eb4690968f676f69cebffc826dae06ad498d682620a6408af555bad9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ade498eb4690968f676f69cebffc826dae06ad498d682620a6408af555bad9f->enter($__internal_7ade498eb4690968f676f69cebffc826dae06ad498d682620a6408af555bad9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f624984b064d78b66878c9a76b6d30afd4b82d7994a00b0eef6fae42ba5cbd8->leave($__internal_0f624984b064d78b66878c9a76b6d30afd4b82d7994a00b0eef6fae42ba5cbd8_prof);

        
        $__internal_7ade498eb4690968f676f69cebffc826dae06ad498d682620a6408af555bad9f->leave($__internal_7ade498eb4690968f676f69cebffc826dae06ad498d682620a6408af555bad9f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9134f89020b6dc516c6f56a22aa5e2bf4554ddc4eddd1d49de75f1baccde59bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9134f89020b6dc516c6f56a22aa5e2bf4554ddc4eddd1d49de75f1baccde59bf->enter($__internal_9134f89020b6dc516c6f56a22aa5e2bf4554ddc4eddd1d49de75f1baccde59bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99bcd1e1ec63e3f589af0a8c3130c7cd5736830b025c37cf57cc35f1ac59db32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bcd1e1ec63e3f589af0a8c3130c7cd5736830b025c37cf57cc35f1ac59db32->enter($__internal_99bcd1e1ec63e3f589af0a8c3130c7cd5736830b025c37cf57cc35f1ac59db32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_99bcd1e1ec63e3f589af0a8c3130c7cd5736830b025c37cf57cc35f1ac59db32->leave($__internal_99bcd1e1ec63e3f589af0a8c3130c7cd5736830b025c37cf57cc35f1ac59db32_prof);

        
        $__internal_9134f89020b6dc516c6f56a22aa5e2bf4554ddc4eddd1d49de75f1baccde59bf->leave($__internal_9134f89020b6dc516c6f56a22aa5e2bf4554ddc4eddd1d49de75f1baccde59bf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a427336d0243343434d2ea62992ecba87dcb1d3960e7b352bf9f7e590af519b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a427336d0243343434d2ea62992ecba87dcb1d3960e7b352bf9f7e590af519b2->enter($__internal_a427336d0243343434d2ea62992ecba87dcb1d3960e7b352bf9f7e590af519b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_816fef8480d5095bea1acdb25bdb1db3c80138fd5309fecdd5d96d84c9170e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816fef8480d5095bea1acdb25bdb1db3c80138fd5309fecdd5d96d84c9170e8c->enter($__internal_816fef8480d5095bea1acdb25bdb1db3c80138fd5309fecdd5d96d84c9170e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_816fef8480d5095bea1acdb25bdb1db3c80138fd5309fecdd5d96d84c9170e8c->leave($__internal_816fef8480d5095bea1acdb25bdb1db3c80138fd5309fecdd5d96d84c9170e8c_prof);

        
        $__internal_a427336d0243343434d2ea62992ecba87dcb1d3960e7b352bf9f7e590af519b2->leave($__internal_a427336d0243343434d2ea62992ecba87dcb1d3960e7b352bf9f7e590af519b2_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_fd35f61d615c23f26bd03bf452b355fa99fbc9eca09c74d43a6ee9b795db1616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd35f61d615c23f26bd03bf452b355fa99fbc9eca09c74d43a6ee9b795db1616->enter($__internal_fd35f61d615c23f26bd03bf452b355fa99fbc9eca09c74d43a6ee9b795db1616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f8d642166167da239c80adc37f17088f79f39693d0331c27582b558b053c3ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d642166167da239c80adc37f17088f79f39693d0331c27582b558b053c3ce0->enter($__internal_f8d642166167da239c80adc37f17088f79f39693d0331c27582b558b053c3ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_f8d642166167da239c80adc37f17088f79f39693d0331c27582b558b053c3ce0->leave($__internal_f8d642166167da239c80adc37f17088f79f39693d0331c27582b558b053c3ce0_prof);

        
        $__internal_fd35f61d615c23f26bd03bf452b355fa99fbc9eca09c74d43a6ee9b795db1616->leave($__internal_fd35f61d615c23f26bd03bf452b355fa99fbc9eca09c74d43a6ee9b795db1616_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
", "OCPlatformBundle::layout.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
