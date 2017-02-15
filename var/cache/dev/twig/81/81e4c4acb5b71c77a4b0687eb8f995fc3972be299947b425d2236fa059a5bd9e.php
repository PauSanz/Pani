<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_eee9f7b46636b96b348ec436d5894ae81dab8ed0a583921ceaf1591029d61bfe extends Twig_Template
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
        $__internal_4a0272177a5ea6004d4abfdba50aba8d41e4140f06fd6f917c2681ab40c02415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0272177a5ea6004d4abfdba50aba8d41e4140f06fd6f917c2681ab40c02415->enter($__internal_4a0272177a5ea6004d4abfdba50aba8d41e4140f06fd6f917c2681ab40c02415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9bb4b2496f2cfb3a3c3406e725cad534c71077a5478d1bc9b58b57b468edd516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb4b2496f2cfb3a3c3406e725cad534c71077a5478d1bc9b58b57b468edd516->enter($__internal_9bb4b2496f2cfb3a3c3406e725cad534c71077a5478d1bc9b58b57b468edd516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4a0272177a5ea6004d4abfdba50aba8d41e4140f06fd6f917c2681ab40c02415->leave($__internal_4a0272177a5ea6004d4abfdba50aba8d41e4140f06fd6f917c2681ab40c02415_prof);

        
        $__internal_9bb4b2496f2cfb3a3c3406e725cad534c71077a5478d1bc9b58b57b468edd516->leave($__internal_9bb4b2496f2cfb3a3c3406e725cad534c71077a5478d1bc9b58b57b468edd516_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
