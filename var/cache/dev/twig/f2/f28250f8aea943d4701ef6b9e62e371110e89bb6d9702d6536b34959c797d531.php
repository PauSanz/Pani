<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4282c0681d7ef4120c21069aa40e83270e47718c1f8474729ac22961b0b079f8 extends Twig_Template
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
        $__internal_6954346692d247ef9e166c295d66c78c1b6b79c0ed6689321deff1fe7103f93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6954346692d247ef9e166c295d66c78c1b6b79c0ed6689321deff1fe7103f93f->enter($__internal_6954346692d247ef9e166c295d66c78c1b6b79c0ed6689321deff1fe7103f93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7feda5f880d9b8edf7e8f7c488647f609bd83a09c6f4913dee914abf42c03573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7feda5f880d9b8edf7e8f7c488647f609bd83a09c6f4913dee914abf42c03573->enter($__internal_7feda5f880d9b8edf7e8f7c488647f609bd83a09c6f4913dee914abf42c03573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6954346692d247ef9e166c295d66c78c1b6b79c0ed6689321deff1fe7103f93f->leave($__internal_6954346692d247ef9e166c295d66c78c1b6b79c0ed6689321deff1fe7103f93f_prof);

        
        $__internal_7feda5f880d9b8edf7e8f7c488647f609bd83a09c6f4913dee914abf42c03573->leave($__internal_7feda5f880d9b8edf7e8f7c488647f609bd83a09c6f4913dee914abf42c03573_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
