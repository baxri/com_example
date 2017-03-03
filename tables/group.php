<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.database.table');

class ExampleTableGroup extends JTable
{
    function __construct(&$db,  $field = 'id')
    {
        parent::__construct('#__example_groups', $field, $db);
    }
}
?>