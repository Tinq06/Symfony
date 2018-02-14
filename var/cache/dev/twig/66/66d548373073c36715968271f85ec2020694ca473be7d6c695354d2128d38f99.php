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
        $__internal_f7d865e4934f2726e30ddade9966fa14eb019ce02906169fdd6a463709d20b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d865e4934f2726e30ddade9966fa14eb019ce02906169fdd6a463709d20b5c->enter($__internal_f7d865e4934f2726e30ddade9966fa14eb019ce02906169fdd6a463709d20b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_2c0fcdffa9c327f5a6338e075158899cb0faec495d9cf8c3ac6171177e3db299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0fcdffa9c327f5a6338e075158899cb0faec495d9cf8c3ac6171177e3db299->enter($__internal_2c0fcdffa9c327f5a6338e075158899cb0faec495d9cf8c3ac6171177e3db299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d865e4934f2726e30ddade9966fa14eb019ce02906169fdd6a463709d20b5c->leave($__internal_f7d865e4934f2726e30ddade9966fa14eb019ce02906169fdd6a463709d20b5c_prof);

        
        $__internal_2c0fcdffa9c327f5a6338e075158899cb0faec495d9cf8c3ac6171177e3db299->leave($__internal_2c0fcdffa9c327f5a6338e075158899cb0faec495d9cf8c3ac6171177e3db299_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0edd5597ca2dd0439a7f750b6211580bb0ca0581963dc219d982be9b904e30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0edd5597ca2dd0439a7f750b6211580bb0ca0581963dc219d982be9b904e30c->enter($__internal_c0edd5597ca2dd0439a7f750b6211580bb0ca0581963dc219d982be9b904e30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b92e68c312bb17cb0d7dcfb44d7d0c05321f871bef9567ae95c6d00f2add73c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92e68c312bb17cb0d7dcfb44d7d0c05321f871bef9567ae95c6d00f2add73c2->enter($__internal_b92e68c312bb17cb0d7dcfb44d7d0c05321f871bef9567ae95c6d00f2add73c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b92e68c312bb17cb0d7dcfb44d7d0c05321f871bef9567ae95c6d00f2add73c2->leave($__internal_b92e68c312bb17cb0d7dcfb44d7d0c05321f871bef9567ae95c6d00f2add73c2_prof);

        
        $__internal_c0edd5597ca2dd0439a7f750b6211580bb0ca0581963dc219d982be9b904e30c->leave($__internal_c0edd5597ca2dd0439a7f750b6211580bb0ca0581963dc219d982be9b904e30c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e344947bc5080b8137f7a51faf571be6b06e92c062c36a6259ac68bd6544929a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e344947bc5080b8137f7a51faf571be6b06e92c062c36a6259ac68bd6544929a->enter($__internal_e344947bc5080b8137f7a51faf571be6b06e92c062c36a6259ac68bd6544929a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a62e1ffdad96e941df6c7081d4a2791b334dbfd3c92f4b92b84d3804d25933cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62e1ffdad96e941df6c7081d4a2791b334dbfd3c92f4b92b84d3804d25933cd->enter($__internal_a62e1ffdad96e941df6c7081d4a2791b334dbfd3c92f4b92b84d3804d25933cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a62e1ffdad96e941df6c7081d4a2791b334dbfd3c92f4b92b84d3804d25933cd->leave($__internal_a62e1ffdad96e941df6c7081d4a2791b334dbfd3c92f4b92b84d3804d25933cd_prof);

        
        $__internal_e344947bc5080b8137f7a51faf571be6b06e92c062c36a6259ac68bd6544929a->leave($__internal_e344947bc5080b8137f7a51faf571be6b06e92c062c36a6259ac68bd6544929a_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b960f43bc46435c49908f64f84962242c17cfc5be17fa01919aa10e9e54dca1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b960f43bc46435c49908f64f84962242c17cfc5be17fa01919aa10e9e54dca1a->enter($__internal_b960f43bc46435c49908f64f84962242c17cfc5be17fa01919aa10e9e54dca1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_1a8ab838c91006722e332946a67813cf698d2e231e0bfdd5b953ac2cb876363f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8ab838c91006722e332946a67813cf698d2e231e0bfdd5b953ac2cb876363f->enter($__internal_1a8ab838c91006722e332946a67813cf698d2e231e0bfdd5b953ac2cb876363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_1a8ab838c91006722e332946a67813cf698d2e231e0bfdd5b953ac2cb876363f->leave($__internal_1a8ab838c91006722e332946a67813cf698d2e231e0bfdd5b953ac2cb876363f_prof);

        
        $__internal_b960f43bc46435c49908f64f84962242c17cfc5be17fa01919aa10e9e54dca1a->leave($__internal_b960f43bc46435c49908f64f84962242c17cfc5be17fa01919aa10e9e54dca1a_prof);

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
