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
        $__internal_9250fc3ea865af00286a84e3a2fb466606996a8bf36d8b2a9f70c3f79917bd84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9250fc3ea865af00286a84e3a2fb466606996a8bf36d8b2a9f70c3f79917bd84->enter($__internal_9250fc3ea865af00286a84e3a2fb466606996a8bf36d8b2a9f70c3f79917bd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2256bc85e5ac9175977d2236ea926668f23ee64d90f549bef7311650e2cabf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2256bc85e5ac9175977d2236ea926668f23ee64d90f549bef7311650e2cabf98->enter($__internal_2256bc85e5ac9175977d2236ea926668f23ee64d90f549bef7311650e2cabf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_9250fc3ea865af00286a84e3a2fb466606996a8bf36d8b2a9f70c3f79917bd84->leave($__internal_9250fc3ea865af00286a84e3a2fb466606996a8bf36d8b2a9f70c3f79917bd84_prof);

        
        $__internal_2256bc85e5ac9175977d2236ea926668f23ee64d90f549bef7311650e2cabf98->leave($__internal_2256bc85e5ac9175977d2236ea926668f23ee64d90f549bef7311650e2cabf98_prof);

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
