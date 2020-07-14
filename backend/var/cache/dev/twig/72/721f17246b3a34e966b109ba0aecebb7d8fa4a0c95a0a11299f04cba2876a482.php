<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* person/index.html.twig */
class __TwigTemplate_02cf384c9e7988433b0d8090665c5fae601733653fb233928e150a73c1045f24 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "person/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "person/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "person/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Persons";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<div class=\"content\">
<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Login</th>
      <th scope=\"col\">Last Name</th>
      <th scope=\"col\">First Name</th>
      <th scope=\"col\">Created At</th>
      <th scope=\"col\">Updated At</th>
      <th scope=\"col\">Group</th>
      <th scope=\"col\">Options</th>
    </tr>
  </thead>
  <tbody>

";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) || array_key_exists("persons", $context) ? $context["persons"] : (function () { throw new RuntimeError('Variable "persons" does not exist.', 25, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            echo " 
    <tr>   
      <th scope=\"row\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27), "html", null, true);
            echo "</th>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "login", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
      <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "lastname", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "firstname", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "createdat", [], "any", false, false, false, 31), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "updatedat", [], "any", false, false, false, 32), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td>";
            // line 33
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["person"], "group", [], "any", false, true, false, 33), "name", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["person"], "group", [], "any", false, true, false, 33), "name", [], "any", false, false, false, 33), "Undefined")) : ("Undefined")), "html", null, true);
            echo "</td>
      <td>
      <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("person_update", ["id" => twig_get_attribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-primary mb-5\">Update</a>
      <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("person_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-primary mb-5\">Delete</a>
      </td>
          </tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
  </tbody>
</table>

<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("person_create");
        echo "\" class=\"btn btn-primary mb-5\">AddNew</a>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "person/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 44,  180 => 40,  162 => 36,  158 => 35,  153 => 33,  149 => 32,  145 => 31,  141 => 30,  137 => 29,  133 => 28,  129 => 27,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Persons{% endblock %}

{% block body %}



<div class=\"content\">
<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Login</th>
      <th scope=\"col\">Last Name</th>
      <th scope=\"col\">First Name</th>
      <th scope=\"col\">Created At</th>
      <th scope=\"col\">Updated At</th>
      <th scope=\"col\">Group</th>
      <th scope=\"col\">Options</th>
    </tr>
  </thead>
  <tbody>

{% for person in persons %} 
    <tr>   
      <th scope=\"row\">{{loop.index}}</th>
      <td>{{person.login}}</td>
      <td>{{person.lastname}}</td>
      <td>{{person.firstname}}</td>
      <td>{{person.createdat|date('d.m.Y H:i:s')}}</td>
      <td>{{person.updatedat|date('d.m.Y H:i:s')}}</td>
      <td>{{person.group.name|default('Undefined')}}</td>
      <td>
      <a href=\"{{ path('person_update', {'id' : person.id })}}\" class=\"btn btn-primary mb-5\">Update</a>
      <a href=\"{{ path('person_remove', {'id' : person.id })}}\" class=\"btn btn-primary mb-5\">Delete</a>
      </td>
          </tr>
{% endfor %}

  </tbody>
</table>

<a href=\"{{ path('person_create')}}\" class=\"btn btn-primary mb-5\">AddNew</a>
</div>

{% endblock %}
", "person/index.html.twig", "C:\\xampp\\htdocs\\templates\\person\\index.html.twig");
    }
}
