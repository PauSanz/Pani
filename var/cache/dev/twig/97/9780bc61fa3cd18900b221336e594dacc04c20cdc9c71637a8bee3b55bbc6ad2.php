<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e432fa73a058f70d30e9978766f6e9408635326f35acf1010844c97d20c7465e extends Twig_Template
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
        $__internal_f239b25821fcf85af0d9be1fe9eb11356129cac4c83af41e7e8755972939ebda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f239b25821fcf85af0d9be1fe9eb11356129cac4c83af41e7e8755972939ebda->enter($__internal_f239b25821fcf85af0d9be1fe9eb11356129cac4c83af41e7e8755972939ebda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1cd28488b6ae71e01cfb1a70c3af9811e4afdfbf37aae0ecac776cb1f3793ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd28488b6ae71e01cfb1a70c3af9811e4afdfbf37aae0ecac776cb1f3793ade->enter($__internal_1cd28488b6ae71e01cfb1a70c3af9811e4afdfbf37aae0ecac776cb1f3793ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f239b25821fcf85af0d9be1fe9eb11356129cac4c83af41e7e8755972939ebda->leave($__internal_f239b25821fcf85af0d9be1fe9eb11356129cac4c83af41e7e8755972939ebda_prof);

        
        $__internal_1cd28488b6ae71e01cfb1a70c3af9811e4afdfbf37aae0ecac776cb1f3793ade->leave($__internal_1cd28488b6ae71e01cfb1a70c3af9811e4afdfbf37aae0ecac776cb1f3793ade_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
