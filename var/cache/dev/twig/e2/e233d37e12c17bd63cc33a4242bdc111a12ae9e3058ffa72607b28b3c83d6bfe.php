<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4200d37ffa52f13af3d7ac4d14c8c6961ae98f0e2e8954cb8adc54233b648d9f extends Twig_Template
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
        $__internal_73faa15376b7ab052dfb10e4aeac5de268c5e10fbe835fbb416419c55d974423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73faa15376b7ab052dfb10e4aeac5de268c5e10fbe835fbb416419c55d974423->enter($__internal_73faa15376b7ab052dfb10e4aeac5de268c5e10fbe835fbb416419c55d974423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a1d9c6d99ecc95f473f20f5d387416fec9a2f813738197565652d2452bc638e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d9c6d99ecc95f473f20f5d387416fec9a2f813738197565652d2452bc638e1->enter($__internal_a1d9c6d99ecc95f473f20f5d387416fec9a2f813738197565652d2452bc638e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_73faa15376b7ab052dfb10e4aeac5de268c5e10fbe835fbb416419c55d974423->leave($__internal_73faa15376b7ab052dfb10e4aeac5de268c5e10fbe835fbb416419c55d974423_prof);

        
        $__internal_a1d9c6d99ecc95f473f20f5d387416fec9a2f813738197565652d2452bc638e1->leave($__internal_a1d9c6d99ecc95f473f20f5d387416fec9a2f813738197565652d2452bc638e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
