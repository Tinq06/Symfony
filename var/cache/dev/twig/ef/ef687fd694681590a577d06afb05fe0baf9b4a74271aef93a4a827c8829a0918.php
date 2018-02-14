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
        $__internal_f7b323ccc6ef5654e32a2bb86198b6e40e1b715216a0e865c0f05c55d21638cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b323ccc6ef5654e32a2bb86198b6e40e1b715216a0e865c0f05c55d21638cd->enter($__internal_f7b323ccc6ef5654e32a2bb86198b6e40e1b715216a0e865c0f05c55d21638cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9dc1c587d402e1fc9e8183b0cfe8fa2cc28e342a8e0ae205eda4d0b2bd47fdc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc1c587d402e1fc9e8183b0cfe8fa2cc28e342a8e0ae205eda4d0b2bd47fdc4->enter($__internal_9dc1c587d402e1fc9e8183b0cfe8fa2cc28e342a8e0ae205eda4d0b2bd47fdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b323ccc6ef5654e32a2bb86198b6e40e1b715216a0e865c0f05c55d21638cd->leave($__internal_f7b323ccc6ef5654e32a2bb86198b6e40e1b715216a0e865c0f05c55d21638cd_prof);

        
        $__internal_9dc1c587d402e1fc9e8183b0cfe8fa2cc28e342a8e0ae205eda4d0b2bd47fdc4->leave($__internal_9dc1c587d402e1fc9e8183b0cfe8fa2cc28e342a8e0ae205eda4d0b2bd47fdc4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62eb9259de634848c3fbca6712878e232cfae45e11f2f33995b4890e7eede89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62eb9259de634848c3fbca6712878e232cfae45e11f2f33995b4890e7eede89e->enter($__internal_62eb9259de634848c3fbca6712878e232cfae45e11f2f33995b4890e7eede89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_80ca7343d2f164b28551da9c34e0fe2b8d49ce6060138a983db4ba3debee685b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ca7343d2f164b28551da9c34e0fe2b8d49ce6060138a983db4ba3debee685b->enter($__internal_80ca7343d2f164b28551da9c34e0fe2b8d49ce6060138a983db4ba3debee685b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_80ca7343d2f164b28551da9c34e0fe2b8d49ce6060138a983db4ba3debee685b->leave($__internal_80ca7343d2f164b28551da9c34e0fe2b8d49ce6060138a983db4ba3debee685b_prof);

        
        $__internal_62eb9259de634848c3fbca6712878e232cfae45e11f2f33995b4890e7eede89e->leave($__internal_62eb9259de634848c3fbca6712878e232cfae45e11f2f33995b4890e7eede89e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_524a430b7c33e3207346a68450cdf72c1b13aa3a2fb5ae22f79577ab5aa231aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524a430b7c33e3207346a68450cdf72c1b13aa3a2fb5ae22f79577ab5aa231aa->enter($__internal_524a430b7c33e3207346a68450cdf72c1b13aa3a2fb5ae22f79577ab5aa231aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8d147a7c77774ebfdc034e55f514d473d882b57b3308cb7eb5c8c3f6b0cc3d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d147a7c77774ebfdc034e55f514d473d882b57b3308cb7eb5c8c3f6b0cc3d95->enter($__internal_8d147a7c77774ebfdc034e55f514d473d882b57b3308cb7eb5c8c3f6b0cc3d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d147a7c77774ebfdc034e55f514d473d882b57b3308cb7eb5c8c3f6b0cc3d95->leave($__internal_8d147a7c77774ebfdc034e55f514d473d882b57b3308cb7eb5c8c3f6b0cc3d95_prof);

        
        $__internal_524a430b7c33e3207346a68450cdf72c1b13aa3a2fb5ae22f79577ab5aa231aa->leave($__internal_524a430b7c33e3207346a68450cdf72c1b13aa3a2fb5ae22f79577ab5aa231aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc172607b78920f737b4b18340eb15a83980b685a92e4a0383f204a0d770c839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc172607b78920f737b4b18340eb15a83980b685a92e4a0383f204a0d770c839->enter($__internal_bc172607b78920f737b4b18340eb15a83980b685a92e4a0383f204a0d770c839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dbedf4d3c44ad6773c0478a445124b9eaf0b26d18a76dbe3f3e57a2733439439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbedf4d3c44ad6773c0478a445124b9eaf0b26d18a76dbe3f3e57a2733439439->enter($__internal_dbedf4d3c44ad6773c0478a445124b9eaf0b26d18a76dbe3f3e57a2733439439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dbedf4d3c44ad6773c0478a445124b9eaf0b26d18a76dbe3f3e57a2733439439->leave($__internal_dbedf4d3c44ad6773c0478a445124b9eaf0b26d18a76dbe3f3e57a2733439439_prof);

        
        $__internal_bc172607b78920f737b4b18340eb15a83980b685a92e4a0383f204a0d770c839->leave($__internal_bc172607b78920f737b4b18340eb15a83980b685a92e4a0383f204a0d770c839_prof);

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
