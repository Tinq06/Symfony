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
        $__internal_2757be5efbed7be083f5cc4e5cb91df9b60f16ce8db5fbe74b3569d5d293271b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2757be5efbed7be083f5cc4e5cb91df9b60f16ce8db5fbe74b3569d5d293271b->enter($__internal_2757be5efbed7be083f5cc4e5cb91df9b60f16ce8db5fbe74b3569d5d293271b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_bcb874e35d37d32aab313c01d9becbe1208d152a2c3455a3603c7f5cae0ed479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb874e35d37d32aab313c01d9becbe1208d152a2c3455a3603c7f5cae0ed479->enter($__internal_bcb874e35d37d32aab313c01d9becbe1208d152a2c3455a3603c7f5cae0ed479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2757be5efbed7be083f5cc4e5cb91df9b60f16ce8db5fbe74b3569d5d293271b->leave($__internal_2757be5efbed7be083f5cc4e5cb91df9b60f16ce8db5fbe74b3569d5d293271b_prof);

        
        $__internal_bcb874e35d37d32aab313c01d9becbe1208d152a2c3455a3603c7f5cae0ed479->leave($__internal_bcb874e35d37d32aab313c01d9becbe1208d152a2c3455a3603c7f5cae0ed479_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffe02c623c70961cd184655f647f24359eedc230128c2ea68a8fd2efec112348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe02c623c70961cd184655f647f24359eedc230128c2ea68a8fd2efec112348->enter($__internal_ffe02c623c70961cd184655f647f24359eedc230128c2ea68a8fd2efec112348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e07061f5bdac729341ab11247720def6e66880d7c14f5c1f6cf04acb95665612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07061f5bdac729341ab11247720def6e66880d7c14f5c1f6cf04acb95665612->enter($__internal_e07061f5bdac729341ab11247720def6e66880d7c14f5c1f6cf04acb95665612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e07061f5bdac729341ab11247720def6e66880d7c14f5c1f6cf04acb95665612->leave($__internal_e07061f5bdac729341ab11247720def6e66880d7c14f5c1f6cf04acb95665612_prof);

        
        $__internal_ffe02c623c70961cd184655f647f24359eedc230128c2ea68a8fd2efec112348->leave($__internal_ffe02c623c70961cd184655f647f24359eedc230128c2ea68a8fd2efec112348_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae943db71331d08346d211877ea44f037d6bc25c39bf3c440c7e62ca93ddf1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae943db71331d08346d211877ea44f037d6bc25c39bf3c440c7e62ca93ddf1a1->enter($__internal_ae943db71331d08346d211877ea44f037d6bc25c39bf3c440c7e62ca93ddf1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_242a3ae7f2429a759ef90199e5c979088f66887a1f8288909662ddd904e60fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242a3ae7f2429a759ef90199e5c979088f66887a1f8288909662ddd904e60fd9->enter($__internal_242a3ae7f2429a759ef90199e5c979088f66887a1f8288909662ddd904e60fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_242a3ae7f2429a759ef90199e5c979088f66887a1f8288909662ddd904e60fd9->leave($__internal_242a3ae7f2429a759ef90199e5c979088f66887a1f8288909662ddd904e60fd9_prof);

        
        $__internal_ae943db71331d08346d211877ea44f037d6bc25c39bf3c440c7e62ca93ddf1a1->leave($__internal_ae943db71331d08346d211877ea44f037d6bc25c39bf3c440c7e62ca93ddf1a1_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_773878ff85dcc250822fcb581a067874e42eaf9e7ab0cac5a6de137e1006792d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773878ff85dcc250822fcb581a067874e42eaf9e7ab0cac5a6de137e1006792d->enter($__internal_773878ff85dcc250822fcb581a067874e42eaf9e7ab0cac5a6de137e1006792d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_bd3804bef1f2871bd9d170396945dd9f9b638fc396665dd7be8f6e47dfce9493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3804bef1f2871bd9d170396945dd9f9b638fc396665dd7be8f6e47dfce9493->enter($__internal_bd3804bef1f2871bd9d170396945dd9f9b638fc396665dd7be8f6e47dfce9493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_bd3804bef1f2871bd9d170396945dd9f9b638fc396665dd7be8f6e47dfce9493->leave($__internal_bd3804bef1f2871bd9d170396945dd9f9b638fc396665dd7be8f6e47dfce9493_prof);

        
        $__internal_773878ff85dcc250822fcb581a067874e42eaf9e7ab0cac5a6de137e1006792d->leave($__internal_773878ff85dcc250822fcb581a067874e42eaf9e7ab0cac5a6de137e1006792d_prof);

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
