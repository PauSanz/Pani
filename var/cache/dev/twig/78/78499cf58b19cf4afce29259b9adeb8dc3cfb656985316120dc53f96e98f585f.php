<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ad3d50a8c1716d27acccfd469660829cc3a9cac32557a1577eab2d7fd7e5c8a8 extends Twig_Template
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
        $__internal_96a42be45a454e3c0cdab0cc609cad878f0d27b588f8ae1de7a41e3090b872d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a42be45a454e3c0cdab0cc609cad878f0d27b588f8ae1de7a41e3090b872d1->enter($__internal_96a42be45a454e3c0cdab0cc609cad878f0d27b588f8ae1de7a41e3090b872d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0758b259f314dbc66fecd3ad1bf1571621b64574492956736f56586b62a97ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0758b259f314dbc66fecd3ad1bf1571621b64574492956736f56586b62a97ca2->enter($__internal_0758b259f314dbc66fecd3ad1bf1571621b64574492956736f56586b62a97ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_96a42be45a454e3c0cdab0cc609cad878f0d27b588f8ae1de7a41e3090b872d1->leave($__internal_96a42be45a454e3c0cdab0cc609cad878f0d27b588f8ae1de7a41e3090b872d1_prof);

        
        $__internal_0758b259f314dbc66fecd3ad1bf1571621b64574492956736f56586b62a97ca2->leave($__internal_0758b259f314dbc66fecd3ad1bf1571621b64574492956736f56586b62a97ca2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
