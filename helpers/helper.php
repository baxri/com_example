<?php

defined('_JEXEC') or die;

class ComponentHelper extends JHelperContent
{
	public static function addSubmenu($vName)
	{
		$option = JRequest::getVar('option');
		$canDo = JHelperContent::getActions( $option );

		if( $canDo->get('core.show.giftcards') ) {
			JHtmlSidebar::addEntry(
				JText::_('Items'),
				'index.php?option=' . $option . '&view=items',
				$vName == 'Items'
			);
		}

		if( $canDo->get('core.show.groups') ){
			JHtmlSidebar::addEntry(
				JText::_('Categories'),
				'index.php?option='.$option.'&view=groups',
				$vName == 'groups'
			);
		}		
	}

}
