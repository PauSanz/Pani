<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_81494e1519c8eb68a477a6627cef51320fcef019083c1897a7c0aaf9e2116c29 extends Twig_Template
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
        $__internal_f2ad8a94bf6def76853b968b7a8f2ab0174c07596970ed264ded16a2c972c7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ad8a94bf6def76853b968b7a8f2ab0174c07596970ed264ded16a2c972c7dd->enter($__internal_f2ad8a94bf6def76853b968b7a8f2ab0174c07596970ed264ded16a2c972c7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_69d1732bfdd4ecaa886b12a2b849a4fe76a8ac4bd2bef19413654d172515c038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d1732bfdd4ecaa886b12a2b849a4fe76a8ac4bd2bef19413654d172515c038->enter($__internal_69d1732bfdd4ecaa886b12a2b849a4fe76a8ac4bd2bef19413654d172515c038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f2ad8a94bf6def76853b968b7a8f2ab0174c07596970ed264ded16a2c972c7dd->leave($__internal_f2ad8a94bf6def76853b968b7a8f2ab0174c07596970ed264ded16a2c972c7dd_prof);

        
        $__internal_69d1732bfdd4ecaa886b12a2b849a4fe76a8ac4bd2bef19413654d172515c038->leave($__internal_69d1732bfdd4ecaa886b12a2b849a4fe76a8ac4bd2bef19413654d172515c038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
