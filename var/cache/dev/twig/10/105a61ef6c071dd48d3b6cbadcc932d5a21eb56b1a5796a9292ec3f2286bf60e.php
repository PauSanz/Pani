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
        $__internal_8eac3ffc460d9c3a3d8c5f14dd260af7b31621f731bbaeb8bc78b20855524f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eac3ffc460d9c3a3d8c5f14dd260af7b31621f731bbaeb8bc78b20855524f90->enter($__internal_8eac3ffc460d9c3a3d8c5f14dd260af7b31621f731bbaeb8bc78b20855524f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8b30993e1ab3d4b386a6dde93812474a62846b87dfd44a93a0dad2b67eabb8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b30993e1ab3d4b386a6dde93812474a62846b87dfd44a93a0dad2b67eabb8ad->enter($__internal_8b30993e1ab3d4b386a6dde93812474a62846b87dfd44a93a0dad2b67eabb8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8eac3ffc460d9c3a3d8c5f14dd260af7b31621f731bbaeb8bc78b20855524f90->leave($__internal_8eac3ffc460d9c3a3d8c5f14dd260af7b31621f731bbaeb8bc78b20855524f90_prof);

        
        $__internal_8b30993e1ab3d4b386a6dde93812474a62846b87dfd44a93a0dad2b67eabb8ad->leave($__internal_8b30993e1ab3d4b386a6dde93812474a62846b87dfd44a93a0dad2b67eabb8ad_prof);

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
