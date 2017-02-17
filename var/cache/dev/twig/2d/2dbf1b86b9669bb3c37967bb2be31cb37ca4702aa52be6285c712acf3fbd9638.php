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
        $__internal_7ebbad6a01a0b74fb3d9a990dc7d29fbfbe24969b16aa7fa2de08e1a8dbc8124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebbad6a01a0b74fb3d9a990dc7d29fbfbe24969b16aa7fa2de08e1a8dbc8124->enter($__internal_7ebbad6a01a0b74fb3d9a990dc7d29fbfbe24969b16aa7fa2de08e1a8dbc8124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e90334615947760a02fbf678132d74f59ec282f5d0b575426626b3151a42cd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90334615947760a02fbf678132d74f59ec282f5d0b575426626b3151a42cd04->enter($__internal_e90334615947760a02fbf678132d74f59ec282f5d0b575426626b3151a42cd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7ebbad6a01a0b74fb3d9a990dc7d29fbfbe24969b16aa7fa2de08e1a8dbc8124->leave($__internal_7ebbad6a01a0b74fb3d9a990dc7d29fbfbe24969b16aa7fa2de08e1a8dbc8124_prof);

        
        $__internal_e90334615947760a02fbf678132d74f59ec282f5d0b575426626b3151a42cd04->leave($__internal_e90334615947760a02fbf678132d74f59ec282f5d0b575426626b3151a42cd04_prof);

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
