<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_085a85f7e79281ea244521c36e11876f55a8fab2d97414eb6b08dbadae73c81a extends Twig_Template
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
        $__internal_ce6c021a44c7ce46c6783b867ca75e50ebd04240378325d684d2996a445a66d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6c021a44c7ce46c6783b867ca75e50ebd04240378325d684d2996a445a66d0->enter($__internal_ce6c021a44c7ce46c6783b867ca75e50ebd04240378325d684d2996a445a66d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_592882a23c118d7ad39bf918f5e267e698e76822c61eaf610c45d8b828164641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592882a23c118d7ad39bf918f5e267e698e76822c61eaf610c45d8b828164641->enter($__internal_592882a23c118d7ad39bf918f5e267e698e76822c61eaf610c45d8b828164641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ce6c021a44c7ce46c6783b867ca75e50ebd04240378325d684d2996a445a66d0->leave($__internal_ce6c021a44c7ce46c6783b867ca75e50ebd04240378325d684d2996a445a66d0_prof);

        
        $__internal_592882a23c118d7ad39bf918f5e267e698e76822c61eaf610c45d8b828164641->leave($__internal_592882a23c118d7ad39bf918f5e267e698e76822c61eaf610c45d8b828164641_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
