<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2802bf873dfcf0b291c23335fc1509bada7d758941c7223e860f128766bc7f78 extends Twig_Template
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
        $__internal_0efd08211bee06b7dfd36b97e8aafe12980c5052d20192bdeddb775fe39de91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0efd08211bee06b7dfd36b97e8aafe12980c5052d20192bdeddb775fe39de91b->enter($__internal_0efd08211bee06b7dfd36b97e8aafe12980c5052d20192bdeddb775fe39de91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_07dec77cf052bf277071a210350b8cbe4f7d3e7d71d4990e8545e8da38201c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07dec77cf052bf277071a210350b8cbe4f7d3e7d71d4990e8545e8da38201c68->enter($__internal_07dec77cf052bf277071a210350b8cbe4f7d3e7d71d4990e8545e8da38201c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0efd08211bee06b7dfd36b97e8aafe12980c5052d20192bdeddb775fe39de91b->leave($__internal_0efd08211bee06b7dfd36b97e8aafe12980c5052d20192bdeddb775fe39de91b_prof);

        
        $__internal_07dec77cf052bf277071a210350b8cbe4f7d3e7d71d4990e8545e8da38201c68->leave($__internal_07dec77cf052bf277071a210350b8cbe4f7d3e7d71d4990e8545e8da38201c68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
