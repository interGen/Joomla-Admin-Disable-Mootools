<?php

defined('_JEXEC') or die;

class plgSystemMootoolsdisable extends JPlugin
{
    public function onBeforeCompileHead()
    {
        $app = JFactory::getApplication();

        // Check if we are in admin
        if ($app->isAdmin()) {

            $option = $app->input->getCmd('option');

            $components = $this->params->get('components', '');

            // Convert the comma-separated list into an array
            $componentsArray = array_map('trim', explode(',', $components));

            // If the current component is in our list, unset Mootools
            if (in_array($option, $componentsArray)) {
                $doc = JFactory::getDocument();

                $scripts = $doc->getHeadData()['scripts'];

                unset($scripts['/media/system/js/mootools-core.js']);
                unset($scripts['/media/system/js/core.js']);

                $headData = $doc->getHeadData();
                $headData['scripts'] = $scripts;

                $doc->setHeadData($headData);
            }
        }
    }
}
