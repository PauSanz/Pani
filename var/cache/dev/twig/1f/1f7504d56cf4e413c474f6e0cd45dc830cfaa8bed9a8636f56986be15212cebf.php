<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_79e42e6a4309996e822064f3b5df71e72a20d83c3e2b90f2e6c581430e7f3900 extends Twig_Template
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
        $__internal_c3aafbc59d2cd11fca7699ac4d51786735bef9b8be0910873216a51079b11bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3aafbc59d2cd11fca7699ac4d51786735bef9b8be0910873216a51079b11bcc->enter($__internal_c3aafbc59d2cd11fca7699ac4d51786735bef9b8be0910873216a51079b11bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8c4a5c7197be53ca5146c869e554c48d9e6306236a9f5ab3965b716f979eb389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4a5c7197be53ca5146c869e554c48d9e6306236a9f5ab3965b716f979eb389->enter($__internal_8c4a5c7197be53ca5146c869e554c48d9e6306236a9f5ab3965b716f979eb389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c3aafbc59d2cd11fca7699ac4d51786735bef9b8be0910873216a51079b11bcc->leave($__internal_c3aafbc59d2cd11fca7699ac4d51786735bef9b8be0910873216a51079b11bcc_prof);

        
        $__internal_8c4a5c7197be53ca5146c869e554c48d9e6306236a9f5ab3965b716f979eb389->leave($__internal_8c4a5c7197be53ca5146c869e554c48d9e6306236a9f5ab3965b716f979eb389_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
