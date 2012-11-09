INSTALLATION:

It is assumed that Drupal is installed and running.

To install the module: 
- Place this folder into the sites/all/modules directory
- On the Drupal site, navigate to http://example.com/admin/modules
- Enable the harvester module and save the changes

============================================================

CONFIGURATION:

Once the module has been installed, a new content type will be available to store the harvester objects (Culture Grid Object).

To configure the harvester; navigate to http://example.com/admin/config/content/harvester.
You can specify a number of different institutions to harvest data from before saving the settings.

The harvester will run as part of Drupal's cron process, you can run this manually on the cron system page at http://example.com/admin/config/system/cron
