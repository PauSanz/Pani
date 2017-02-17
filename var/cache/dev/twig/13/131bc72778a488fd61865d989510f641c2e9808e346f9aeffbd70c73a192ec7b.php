<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_58117fd9f6d2d7dc38774a342f0865639da2fab6efeb424eac1b69b8e8b293d4 extends Twig_Template
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
        $__internal_e32ad9c7fce111dc640d489f687b26b3d558db089207a74136a1bd417d85cec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32ad9c7fce111dc640d489f687b26b3d558db089207a74136a1bd417d85cec7->enter($__internal_e32ad9c7fce111dc640d489f687b26b3d558db089207a74136a1bd417d85cec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e46d47e81c74270b782a62dc90829271e5a62e1a61a03d029a3e679dd1a97892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46d47e81c74270b782a62dc90829271e5a62e1a61a03d029a3e679dd1a97892->enter($__internal_e46d47e81c74270b782a62dc90829271e5a62e1a61a03d029a3e679dd1a97892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e32ad9c7fce111dc640d489f687b26b3d558db089207a74136a1bd417d85cec7->leave($__internal_e32ad9c7fce111dc640d489f687b26b3d558db089207a74136a1bd417d85cec7_prof);

        
        $__internal_e46d47e81c74270b782a62dc90829271e5a62e1a61a03d029a3e679dd1a97892->leave($__internal_e46d47e81c74270b782a62dc90829271e5a62e1a61a03d029a3e679dd1a97892_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
