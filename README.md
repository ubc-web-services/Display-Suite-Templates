# Display-Suite-Templates
A collection of Display Suite templates for use in a Drupal theme.

## Creating new templates
* All Display Suite templates should be placed in a ds_layouts directory of your active theme. Theme inheritance doesn't seem very robust. ie. Templates in a parent theme will cause templates in a child theme to not appear.
* If you need a new template, use drush! It's easy! In your theme's ds_layouts folder, run `drush ds-build "Small Left Column" --regions="Left, Right" --css`. This will build a new layout with left and right regions and an included css file. Use `drush help ds-build` for a list of all options.
* Docs here: https://www.drupal.org/node/1098068
