# Joomla-Admin-Disable-Mootools
This plugin will disable mootools in the Joomla administrator for a particular component.

Using [Yootheme's Widgetkit](https://yootheme.com/widgetkit-joomla-gallery) v.2.9.x triggers an error when editing or creating maps in the backend because of a conflict between the Google Maps API and Joomla's use of Mootools. This is not an issue with Joomla 4.0 or later as Mootools is removed.

This plugin allows you to disable Mootools in the administrator interface for individual components (e.g. enter "com_widgetkit" in the plugin parameters without quotes)

Additional discussion about this issue here - [https://issues.joomla.org/tracker/joomla-cms/29121](https://issues.joomla.org/tracker/joomla-cms/29121)
