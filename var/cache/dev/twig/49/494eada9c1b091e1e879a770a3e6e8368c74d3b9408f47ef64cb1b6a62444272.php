<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_90cc28985f70a5565b2dfbe2fc2ae162ae28e880f88b6f3138a49f376b796536 extends Twig_Template
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
        $__internal_fc44284ced4f072a0d7c28d1ca78a9e725d5f5bdc6e0b772329e9e155b6aa757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc44284ced4f072a0d7c28d1ca78a9e725d5f5bdc6e0b772329e9e155b6aa757->enter($__internal_fc44284ced4f072a0d7c28d1ca78a9e725d5f5bdc6e0b772329e9e155b6aa757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d6d939885f7ef004a8e04756bde88e4a86f85ed22408dfce142a6adbd2ee2bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d939885f7ef004a8e04756bde88e4a86f85ed22408dfce142a6adbd2ee2bd2->enter($__internal_d6d939885f7ef004a8e04756bde88e4a86f85ed22408dfce142a6adbd2ee2bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fc44284ced4f072a0d7c28d1ca78a9e725d5f5bdc6e0b772329e9e155b6aa757->leave($__internal_fc44284ced4f072a0d7c28d1ca78a9e725d5f5bdc6e0b772329e9e155b6aa757_prof);

        
        $__internal_d6d939885f7ef004a8e04756bde88e4a86f85ed22408dfce142a6adbd2ee2bd2->leave($__internal_d6d939885f7ef004a8e04756bde88e4a86f85ed22408dfce142a6adbd2ee2bd2_prof);

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
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
