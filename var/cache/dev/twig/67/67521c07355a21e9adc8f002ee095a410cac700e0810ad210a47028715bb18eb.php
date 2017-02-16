<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0b2e340029cc87b1c12b1220a336951822d49ce04d09d92fdb3a875c8bbc0834 extends Twig_Template
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
        $__internal_be915586ec22cc6bd703c5b35e86d9fed09433974d839ce5d60d8ccd57f4f1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be915586ec22cc6bd703c5b35e86d9fed09433974d839ce5d60d8ccd57f4f1e3->enter($__internal_be915586ec22cc6bd703c5b35e86d9fed09433974d839ce5d60d8ccd57f4f1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ccbf9d0908b16a9a77de4e572eba18be6c68635444868fa55bb231bcf8dc7d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbf9d0908b16a9a77de4e572eba18be6c68635444868fa55bb231bcf8dc7d0b->enter($__internal_ccbf9d0908b16a9a77de4e572eba18be6c68635444868fa55bb231bcf8dc7d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_be915586ec22cc6bd703c5b35e86d9fed09433974d839ce5d60d8ccd57f4f1e3->leave($__internal_be915586ec22cc6bd703c5b35e86d9fed09433974d839ce5d60d8ccd57f4f1e3_prof);

        
        $__internal_ccbf9d0908b16a9a77de4e572eba18be6c68635444868fa55bb231bcf8dc7d0b->leave($__internal_ccbf9d0908b16a9a77de4e572eba18be6c68635444868fa55bb231bcf8dc7d0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
