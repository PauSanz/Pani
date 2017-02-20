<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_415876f28c6976afeeafd4d95df761ed734111edaf97d99dc57201d43754a38c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1753406855e15e8c20cf29b46456b506a1a449c4bb34e2b4499eb6565f7fb8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1753406855e15e8c20cf29b46456b506a1a449c4bb34e2b4499eb6565f7fb8c8->enter($__internal_1753406855e15e8c20cf29b46456b506a1a449c4bb34e2b4499eb6565f7fb8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_eb5515999eb22f17349cf2d0a39013aa0f9fb1897e0bdfa2e5f6bfa2223e5c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5515999eb22f17349cf2d0a39013aa0f9fb1897e0bdfa2e5f6bfa2223e5c4d->enter($__internal_eb5515999eb22f17349cf2d0a39013aa0f9fb1897e0bdfa2e5f6bfa2223e5c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1753406855e15e8c20cf29b46456b506a1a449c4bb34e2b4499eb6565f7fb8c8->leave($__internal_1753406855e15e8c20cf29b46456b506a1a449c4bb34e2b4499eb6565f7fb8c8_prof);

        
        $__internal_eb5515999eb22f17349cf2d0a39013aa0f9fb1897e0bdfa2e5f6bfa2223e5c4d->leave($__internal_eb5515999eb22f17349cf2d0a39013aa0f9fb1897e0bdfa2e5f6bfa2223e5c4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
