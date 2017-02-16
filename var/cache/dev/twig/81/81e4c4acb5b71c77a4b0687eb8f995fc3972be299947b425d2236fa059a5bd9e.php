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
        $__internal_97e2693d398949181b9d8422c9c0e57f51f7f3bf0652b4668382b263a06837cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e2693d398949181b9d8422c9c0e57f51f7f3bf0652b4668382b263a06837cb->enter($__internal_97e2693d398949181b9d8422c9c0e57f51f7f3bf0652b4668382b263a06837cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_13496e9bbce2295fbabeef33349da60627e1cc5513be92d5cfc8dc73df38de69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13496e9bbce2295fbabeef33349da60627e1cc5513be92d5cfc8dc73df38de69->enter($__internal_13496e9bbce2295fbabeef33349da60627e1cc5513be92d5cfc8dc73df38de69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_97e2693d398949181b9d8422c9c0e57f51f7f3bf0652b4668382b263a06837cb->leave($__internal_97e2693d398949181b9d8422c9c0e57f51f7f3bf0652b4668382b263a06837cb_prof);

        
        $__internal_13496e9bbce2295fbabeef33349da60627e1cc5513be92d5cfc8dc73df38de69->leave($__internal_13496e9bbce2295fbabeef33349da60627e1cc5513be92d5cfc8dc73df38de69_prof);

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
