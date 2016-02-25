<?php

namespace Application\Block\TitelText;

use Concrete\Core\Block\BlockController;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{
    protected $btTable = "btTitelText";

    public function getBlockTypeName()
    {
        return t('Titel & Text');
    }
    public function save($data)
    {
    	if (!$data['text']) 
    	{
    		$data['text'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
		}
		parent::save($data);
    }
}
