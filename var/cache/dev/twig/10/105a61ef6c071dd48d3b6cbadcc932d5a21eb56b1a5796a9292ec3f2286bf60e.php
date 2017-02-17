<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1aee3d308f7f6ca7d8482ed2c462a9db0ff7fe9a9cecf0c98a137ce5d5e8db7f extends Twig_Template
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
        $__internal_4d5e7ca44e09fddcfd57f099fb5eceae862efcbf39e7211df3957dd2dba7fdbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5e7ca44e09fddcfd57f099fb5eceae862efcbf39e7211df3957dd2dba7fdbe->enter($__internal_4d5e7ca44e09fddcfd57f099fb5eceae862efcbf39e7211df3957dd2dba7fdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3a4c08cd1a5c74936c030f3f3de260c22a3f486d2379ccec7432bd472aee29d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4c08cd1a5c74936c030f3f3de260c22a3f486d2379ccec7432bd472aee29d5->enter($__internal_3a4c08cd1a5c74936c030f3f3de260c22a3f486d2379ccec7432bd472aee29d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4d5e7ca44e09fddcfd57f099fb5eceae862efcbf39e7211df3957dd2dba7fdbe->leave($__internal_4d5e7ca44e09fddcfd57f099fb5eceae862efcbf39e7211df3957dd2dba7fdbe_prof);

        
        $__internal_3a4c08cd1a5c74936c030f3f3de260c22a3f486d2379ccec7432bd472aee29d5->leave($__internal_3a4c08cd1a5c74936c030f3f3de260c22a3f486d2379ccec7432bd472aee29d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
