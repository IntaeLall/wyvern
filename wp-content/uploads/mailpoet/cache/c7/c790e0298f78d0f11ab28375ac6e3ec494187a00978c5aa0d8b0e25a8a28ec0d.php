<?php

/* subscribers/subscribers.html */
class __TwigTemplate_83037ac3a903bab73db0ab743ae248ef3c92429c2804d598622c743e13445bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "subscribers/subscribers.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div id=\"subscribers_container\"></div>

  <script type=\"text/javascript\">
    var mailpoet_listing_per_page = ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : null), "html", null, true);
        echo ";
    var mailpoet_segments = ";
        // line 8
        echo json_encode((isset($context["segments"]) ? $context["segments"] : null));
        echo ";
    var mailpoet_custom_fields = ";
        // line 9
        echo json_encode((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        echo ";
    var mailpoet_month_names = ";
        // line 10
        echo json_encode((isset($context["month_names"]) ? $context["month_names"] : null));
        echo ";
    var mailpoet_date_formats = ";
        // line 11
        echo json_encode((isset($context["date_formats"]) ? $context["date_formats"] : null));
        echo ";
  </script>
";
    }

    // line 15
    public function block_translations($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("pageTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribers"), "searchLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Search"), "loadingItems" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Loading subscribers..."), "noItemsFound" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("No subscribers were found."), "selectAllLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("All subscribers on this page are selected."), "selectedAllLabel" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("All %d subscribers are selected"), "selectAllLink" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select all subscribers on all pages."), "clearSelection" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Clear selection"), "permanentlyDeleted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%d subscribers were permanently deleted"), "selectBulkAction" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select bulk action"), "bulkActions" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Bulk Actions"), "apply" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Apply"), "filter" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Filter"), "emptyTrash" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Empty Trash"), "selectAll" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select All"), "edit" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit"), "restore" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Restore"), "trash" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Trash"), "deletePermanently" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Delete Permanently"), "showMoreDetails" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Show more details"), "previousPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Previous page"), "firstPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("First page"), "nextPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Next page"), "lastPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Last page"), "currentPage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Current Page"), "pageOutOf" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("of"), "numberOfItems" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d item(s)"), "email" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("E-mail"), "firstname" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Firstname"), "lastname" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Lastname"), "status" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Status"), "unconfirmed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unconfirmed"), "subscribed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribed"), "unsubscribed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubscribed"), "bounced" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Bounced"), "selectList" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select a list"), "unsubscribedOn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubscribed on %\$1s"), "subscriberUpdated" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscriber was updated successfully!"), "subscriberAdded" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscriber was added successfully!"), "subscriber" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscriber"), "status" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Status"), "lists" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Lists"), "subscribedOn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribed on"), "lastModifiedOn" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Last modified on"), "oneSubscriberTrashed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 subscriber was moved to the trash"), "multipleSubscribersTrashed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d subscribers were moved to the trash"), "oneSubscriberDeleted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 subscriber was permanently deleted"), "multipleSubscribersDeleted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d subscribers were permanently deleted"), "oneSubscriberRestored" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("1 subscriber has been restored from the trash"), "multipleSubscribersRestored" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d subscribers have been restored from the trash"), "moveToList" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Move to list..."), "multipleSubscribersMovedToList" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d subscribers were moved to list <strong>%\$2s</strong>"), "addToList" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add to list..."), "multipleSubscribersAddedToList" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d subscribers were added to list <strong>%\$2s</strong>"), "removeFromList" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Remove from list..."), "multipleSubscribersRemovedFromList" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d subscribers were removed from list <strong>%\$2s</strong>"), "removeFromAllLists" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Remove from all lists"), "multipleSubscribersRemovedFromAllLists" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d subscribers were removed from all lists"), "resendConfirmationEmail" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Resend confirmation email"), "multipleConfirmationEmailsSent" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("%\$1d confirmation emails have been sent"), "listsToWhichSubscriberWasSubscribed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Lists to which the subscriber was subscribed"), "WPUsersSegment" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("WordPress Users"), "WPUserEditNotice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This subscriber is a registered WordPress user. [link]Edit his profile[/link] to change his/her email."), "tip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Tip:"), "customFieldsTip" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Need to add new fields, like a telephone number or street address? You can add custom fields by editing the subscription form on the Forms page."), "year" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Year"), "month" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Month"), "day" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Day"), "new" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add New"), "import" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Import"), "export" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Export"), "save" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save"), "backToList" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Back")));
        // line 93
        echo "
";
    }

    public function getTemplateName()
    {
        return "subscribers/subscribers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 93,  63 => 16,  60 => 15,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "subscribers/subscribers.html", "/Users/Mac/Sites/Works/encyklopedie/wp-content/plugins/mailpoet/views/subscribers/subscribers.html");
    }
}
