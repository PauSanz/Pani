<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_52c211261b9d74c9ab9e1c4da2b79c44d543246778aed5e79ba360f413151da7 extends Twig_Template
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
        $__internal_81ebcc0958f97b0a3f63a48acb75a4bff2601b659ff64cd24117fdff4efa87bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ebcc0958f97b0a3f63a48acb75a4bff2601b659ff64cd24117fdff4efa87bb->enter($__internal_81ebcc0958f97b0a3f63a48acb75a4bff2601b659ff64cd24117fdff4efa87bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1606f4835a40fa229a6d0fa0c7836c1b3653025a64bd569d17d131d1bff31e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1606f4835a40fa229a6d0fa0c7836c1b3653025a64bd569d17d131d1bff31e55->enter($__internal_1606f4835a40fa229a6d0fa0c7836c1b3653025a64bd569d17d131d1bff31e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_81ebcc0958f97b0a3f63a48acb75a4bff2601b659ff64cd24117fdff4efa87bb->leave($__internal_81ebcc0958f97b0a3f63a48acb75a4bff2601b659ff64cd24117fdff4efa87bb_prof);

        
        $__internal_1606f4835a40fa229a6d0fa0c7836c1b3653025a64bd569d17d131d1bff31e55->leave($__internal_1606f4835a40fa229a6d0fa0c7836c1b3653025a64bd569d17d131d1bff31e55_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
