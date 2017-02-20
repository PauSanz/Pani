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
        $__internal_ceb2ea673166de6c0d40fb5620f5d9e32186295bab71bd884031e0e6bbcb1bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb2ea673166de6c0d40fb5620f5d9e32186295bab71bd884031e0e6bbcb1bc9->enter($__internal_ceb2ea673166de6c0d40fb5620f5d9e32186295bab71bd884031e0e6bbcb1bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e0e9e5473240488479c1572b5e00748ed889501cd3ad0de48f1a017fedc1407b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e9e5473240488479c1572b5e00748ed889501cd3ad0de48f1a017fedc1407b->enter($__internal_e0e9e5473240488479c1572b5e00748ed889501cd3ad0de48f1a017fedc1407b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ceb2ea673166de6c0d40fb5620f5d9e32186295bab71bd884031e0e6bbcb1bc9->leave($__internal_ceb2ea673166de6c0d40fb5620f5d9e32186295bab71bd884031e0e6bbcb1bc9_prof);

        
        $__internal_e0e9e5473240488479c1572b5e00748ed889501cd3ad0de48f1a017fedc1407b->leave($__internal_e0e9e5473240488479c1572b5e00748ed889501cd3ad0de48f1a017fedc1407b_prof);

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
