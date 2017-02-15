<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_68e9ecba93191ac4379d3078abcf95a9ec7b5d80bbece4cf55f5f2a2001a3a80 extends Twig_Template
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
        $__internal_edc14bcfe9bd4a66a771e331860cdd7deceae88f4afd6b3fed111e5ff2d2fcdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc14bcfe9bd4a66a771e331860cdd7deceae88f4afd6b3fed111e5ff2d2fcdd->enter($__internal_edc14bcfe9bd4a66a771e331860cdd7deceae88f4afd6b3fed111e5ff2d2fcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ce69734918f75e79d9b3915d369f491058308d4bac326e09905f38ac3065249f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce69734918f75e79d9b3915d369f491058308d4bac326e09905f38ac3065249f->enter($__internal_ce69734918f75e79d9b3915d369f491058308d4bac326e09905f38ac3065249f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_edc14bcfe9bd4a66a771e331860cdd7deceae88f4afd6b3fed111e5ff2d2fcdd->leave($__internal_edc14bcfe9bd4a66a771e331860cdd7deceae88f4afd6b3fed111e5ff2d2fcdd_prof);

        
        $__internal_ce69734918f75e79d9b3915d369f491058308d4bac326e09905f38ac3065249f->leave($__internal_ce69734918f75e79d9b3915d369f491058308d4bac326e09905f38ac3065249f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
