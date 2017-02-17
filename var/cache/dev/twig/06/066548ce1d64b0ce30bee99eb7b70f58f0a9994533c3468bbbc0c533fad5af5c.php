<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_22d5a44fcb2daef5e3be10cc69e4fd9d3060b6833dc43bd50e6c647157d37e00 extends Twig_Template
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
        $__internal_afa38cae755236e03feb15bc87c1dcdc10b09be5131500954c5d8d9f08a2d325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa38cae755236e03feb15bc87c1dcdc10b09be5131500954c5d8d9f08a2d325->enter($__internal_afa38cae755236e03feb15bc87c1dcdc10b09be5131500954c5d8d9f08a2d325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_cd9eea914c6661fee5c3d835b5ad9943cbbe4ab3e5f63eccb75d10d19875d6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9eea914c6661fee5c3d835b5ad9943cbbe4ab3e5f63eccb75d10d19875d6ee->enter($__internal_cd9eea914c6661fee5c3d835b5ad9943cbbe4ab3e5f63eccb75d10d19875d6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_afa38cae755236e03feb15bc87c1dcdc10b09be5131500954c5d8d9f08a2d325->leave($__internal_afa38cae755236e03feb15bc87c1dcdc10b09be5131500954c5d8d9f08a2d325_prof);

        
        $__internal_cd9eea914c6661fee5c3d835b5ad9943cbbe4ab3e5f63eccb75d10d19875d6ee->leave($__internal_cd9eea914c6661fee5c3d835b5ad9943cbbe4ab3e5f63eccb75d10d19875d6ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
