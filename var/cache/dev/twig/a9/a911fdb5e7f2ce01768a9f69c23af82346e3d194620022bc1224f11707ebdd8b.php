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
        $__internal_91752d9b386243e23377b95d822911853a0d1db2f52ff844ae2931acf8cb6e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91752d9b386243e23377b95d822911853a0d1db2f52ff844ae2931acf8cb6e51->enter($__internal_91752d9b386243e23377b95d822911853a0d1db2f52ff844ae2931acf8cb6e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4068a6cb24f828803a773f68531efafb3d23b8cea9ec17e2d0c17d0c0ea46d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4068a6cb24f828803a773f68531efafb3d23b8cea9ec17e2d0c17d0c0ea46d07->enter($__internal_4068a6cb24f828803a773f68531efafb3d23b8cea9ec17e2d0c17d0c0ea46d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_91752d9b386243e23377b95d822911853a0d1db2f52ff844ae2931acf8cb6e51->leave($__internal_91752d9b386243e23377b95d822911853a0d1db2f52ff844ae2931acf8cb6e51_prof);

        
        $__internal_4068a6cb24f828803a773f68531efafb3d23b8cea9ec17e2d0c17d0c0ea46d07->leave($__internal_4068a6cb24f828803a773f68531efafb3d23b8cea9ec17e2d0c17d0c0ea46d07_prof);

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
