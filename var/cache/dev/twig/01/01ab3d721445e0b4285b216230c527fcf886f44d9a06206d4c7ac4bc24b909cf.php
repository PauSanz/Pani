<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9c10f6c23fadcd05dc81cb9a6167fe0506ed20ba4a39d2b95ee11e8337aa8d2c extends Twig_Template
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
        $__internal_2a9cae95e5aaa8413781ae3d8edf26a0e1423cf24d2d8913cb3585f1a08dad5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a9cae95e5aaa8413781ae3d8edf26a0e1423cf24d2d8913cb3585f1a08dad5a->enter($__internal_2a9cae95e5aaa8413781ae3d8edf26a0e1423cf24d2d8913cb3585f1a08dad5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4368d2fb67a8357f024fb9e0fa369a32e8187bc73c14a5ce9db76003db95aaf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4368d2fb67a8357f024fb9e0fa369a32e8187bc73c14a5ce9db76003db95aaf8->enter($__internal_4368d2fb67a8357f024fb9e0fa369a32e8187bc73c14a5ce9db76003db95aaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2a9cae95e5aaa8413781ae3d8edf26a0e1423cf24d2d8913cb3585f1a08dad5a->leave($__internal_2a9cae95e5aaa8413781ae3d8edf26a0e1423cf24d2d8913cb3585f1a08dad5a_prof);

        
        $__internal_4368d2fb67a8357f024fb9e0fa369a32e8187bc73c14a5ce9db76003db95aaf8->leave($__internal_4368d2fb67a8357f024fb9e0fa369a32e8187bc73c14a5ce9db76003db95aaf8_prof);

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
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}