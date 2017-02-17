<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8731a420aec54a97ee655fb2d2b7631a4ae901573530878e2dc0fada578b27e6 extends Twig_Template
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
        $__internal_58589ead411c520a6839e473df497d930f6d608375ddd44e5f096039494dc52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58589ead411c520a6839e473df497d930f6d608375ddd44e5f096039494dc52c->enter($__internal_58589ead411c520a6839e473df497d930f6d608375ddd44e5f096039494dc52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_98d21312a678847236e0032e757d90cd37c77ab097361fe90e009a4dea1ebdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d21312a678847236e0032e757d90cd37c77ab097361fe90e009a4dea1ebdc2->enter($__internal_98d21312a678847236e0032e757d90cd37c77ab097361fe90e009a4dea1ebdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_58589ead411c520a6839e473df497d930f6d608375ddd44e5f096039494dc52c->leave($__internal_58589ead411c520a6839e473df497d930f6d608375ddd44e5f096039494dc52c_prof);

        
        $__internal_98d21312a678847236e0032e757d90cd37c77ab097361fe90e009a4dea1ebdc2->leave($__internal_98d21312a678847236e0032e757d90cd37c77ab097361fe90e009a4dea1ebdc2_prof);

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
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
