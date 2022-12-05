<?php

namespace MediaWiki\Extension\HideVariousTabsFromUnauthorizedUsers;

class Hooks
{
    /**
     * Hook: SkinTemplateNavigation.
     *
     * @return bool
     */
    public static function onSkinTemplateNavigation(\SkinTemplate $skinTemplate, array &$links)
    {
        global $wgUser, $wgHVTFUUviewsToRemove;

        // Only remove tabs if user isn't allowed to edit pages
        if ($wgUser->isAllowed('edit')) {
            return;
        }

        // Remove actions tabs
        foreach (array_keys($links) as $type) {
            foreach ($wgHVTFUUviewsToRemove as $view) {
                if (isset($links[$type][$view])) {
                    unset($links[$type][$view]);
                }
            }
        }
    }
}
