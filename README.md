# Downloads module
Module for managing downloads.

## Installation
```bash
$ composer require wirelab/downloads-module
$ php artisan addon:install wirelab.module.downloads
```

## Overwriting the default view
1. `php artisan addon:publish downloads`
2. Edit the `view` view in `resources/<site name>/addons/wirelab/downloads-module/views/download`

## Adding fields to a download
1. In the download module go to `fields` and make a new field
2. In the `downloads` section click on `assignments` and assign the field

## Adding downloads to a page
1. Create a _multiple_ field in the pages module, assign it to Locations > Locations
2. Assign the field to a page type
3. In the page type loop over `page.your_slug` and call `render()` on the downloads. Or call `render()` on `page.your_slug` to have it to loop for you.
Examples:
```twig
page.your_slug.render()
```
```twig
{% for download in page.your_slug %}
	download.render()
{% endfor %}
```
Not calling render will return the attributes of the download.
```twig
{% for download in page.your_slug %}
	{{ download.name }}
	{{ download.description }}
{% endfor %}
```
