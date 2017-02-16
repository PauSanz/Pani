<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f52e31fbf87ff51ac6b3b3a5d70a0d2149ae3b1926e6e441cd6d6335239c6f2e extends Twig_Template
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
        $__internal_f80d0bf41efbf738027e5fd9b861d5e34fb38805cc249a9b4eb496fa6e7407d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80d0bf41efbf738027e5fd9b861d5e34fb38805cc249a9b4eb496fa6e7407d5->enter($__internal_f80d0bf41efbf738027e5fd9b861d5e34fb38805cc249a9b4eb496fa6e7407d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5c721574797abee353f6d3b4e48676d2d2479ac3f9ae24773ef6e524ec13a823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c721574797abee353f6d3b4e48676d2d2479ac3f9ae24773ef6e524ec13a823->enter($__internal_5c721574797abee353f6d3b4e48676d2d2479ac3f9ae24773ef6e524ec13a823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f80d0bf41efbf738027e5fd9b861d5e34fb38805cc249a9b4eb496fa6e7407d5->leave($__internal_f80d0bf41efbf738027e5fd9b861d5e34fb38805cc249a9b4eb496fa6e7407d5_prof);

        
        $__internal_5c721574797abee353f6d3b4e48676d2d2479ac3f9ae24773ef6e524ec13a823->leave($__internal_5c721574797abee353f6d3b4e48676d2d2479ac3f9ae24773ef6e524ec13a823_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
