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
        $__internal_4ad50a4e06b07517abbe3633dc933aeb47604d21af2357a52f85b572a6d13bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad50a4e06b07517abbe3633dc933aeb47604d21af2357a52f85b572a6d13bf8->enter($__internal_4ad50a4e06b07517abbe3633dc933aeb47604d21af2357a52f85b572a6d13bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_832f042404d097719af204a345a2e2cf58c59b54e4ce3b0acc2812405c26c783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832f042404d097719af204a345a2e2cf58c59b54e4ce3b0acc2812405c26c783->enter($__internal_832f042404d097719af204a345a2e2cf58c59b54e4ce3b0acc2812405c26c783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4ad50a4e06b07517abbe3633dc933aeb47604d21af2357a52f85b572a6d13bf8->leave($__internal_4ad50a4e06b07517abbe3633dc933aeb47604d21af2357a52f85b572a6d13bf8_prof);

        
        $__internal_832f042404d097719af204a345a2e2cf58c59b54e4ce3b0acc2812405c26c783->leave($__internal_832f042404d097719af204a345a2e2cf58c59b54e4ce3b0acc2812405c26c783_prof);

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
