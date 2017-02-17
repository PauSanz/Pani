<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d89ef3ec34c16496f7f832d05f67fe2ae563e290bb80f5c2a450f71a057abc88 extends Twig_Template
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
        $__internal_ac4d469e08a03874ca79e8eb4ecabbcea25f8c0e54b04c252169a0903c5a88fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4d469e08a03874ca79e8eb4ecabbcea25f8c0e54b04c252169a0903c5a88fe->enter($__internal_ac4d469e08a03874ca79e8eb4ecabbcea25f8c0e54b04c252169a0903c5a88fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ad40aedea72d5f1e518a3d30c4c911454bb886d66832fef087b3886518dcf6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad40aedea72d5f1e518a3d30c4c911454bb886d66832fef087b3886518dcf6a9->enter($__internal_ad40aedea72d5f1e518a3d30c4c911454bb886d66832fef087b3886518dcf6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ac4d469e08a03874ca79e8eb4ecabbcea25f8c0e54b04c252169a0903c5a88fe->leave($__internal_ac4d469e08a03874ca79e8eb4ecabbcea25f8c0e54b04c252169a0903c5a88fe_prof);

        
        $__internal_ad40aedea72d5f1e518a3d30c4c911454bb886d66832fef087b3886518dcf6a9->leave($__internal_ad40aedea72d5f1e518a3d30c4c911454bb886d66832fef087b3886518dcf6a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
