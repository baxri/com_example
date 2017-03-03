
<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.database.table');

class ExampleTableItem extends JTable
{
    function __construct(&$db,  $field = 'id')
    {
        parent::__construct('#__example_items', $field, $db);
    }
}
?>