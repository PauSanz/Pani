<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_54a401c09d8ea77c280ac987856b5d9d29383e87b33a18e4aed09b720cf07d61 extends Twig_Template
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
        $__internal_320ff46ee6c2cce33b66975ca9c0c25aff93016cb23dd0b93e4c7322a591fe99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320ff46ee6c2cce33b66975ca9c0c25aff93016cb23dd0b93e4c7322a591fe99->enter($__internal_320ff46ee6c2cce33b66975ca9c0c25aff93016cb23dd0b93e4c7322a591fe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5ddcbed6e040dcc5445667fa79164c73819b42752b6d6a6a05681ae8c56c6a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddcbed6e040dcc5445667fa79164c73819b42752b6d6a6a05681ae8c56c6a57->enter($__internal_5ddcbed6e040dcc5445667fa79164c73819b42752b6d6a6a05681ae8c56c6a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_320ff46ee6c2cce33b66975ca9c0c25aff93016cb23dd0b93e4c7322a591fe99->leave($__internal_320ff46ee6c2cce33b66975ca9c0c25aff93016cb23dd0b93e4c7322a591fe99_prof);

        
        $__internal_5ddcbed6e040dcc5445667fa79164c73819b42752b6d6a6a05681ae8c56c6a57->leave($__internal_5ddcbed6e040dcc5445667fa79164c73819b42752b6d6a6a05681ae8c56c6a57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
