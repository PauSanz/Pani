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
        $__internal_34d0f7e252d5a9c489738c557f003e536217678eaf5d70edad73d8e7a9bb2a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d0f7e252d5a9c489738c557f003e536217678eaf5d70edad73d8e7a9bb2a0c->enter($__internal_34d0f7e252d5a9c489738c557f003e536217678eaf5d70edad73d8e7a9bb2a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b423c0de7c1fc84f8b74c46d770a25039b234c20af1e9e11a18a6b4922270fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b423c0de7c1fc84f8b74c46d770a25039b234c20af1e9e11a18a6b4922270fd2->enter($__internal_b423c0de7c1fc84f8b74c46d770a25039b234c20af1e9e11a18a6b4922270fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_34d0f7e252d5a9c489738c557f003e536217678eaf5d70edad73d8e7a9bb2a0c->leave($__internal_34d0f7e252d5a9c489738c557f003e536217678eaf5d70edad73d8e7a9bb2a0c_prof);

        
        $__internal_b423c0de7c1fc84f8b74c46d770a25039b234c20af1e9e11a18a6b4922270fd2->leave($__internal_b423c0de7c1fc84f8b74c46d770a25039b234c20af1e9e11a18a6b4922270fd2_prof);

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
