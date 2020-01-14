# MontlewisTemplateFilter_SetClass
Takes a textarea field and substitutes in a class value for specific tags.

<perch:content id="additionalDescHTML" html filter="setclass" setclass="list-marked" settag="ul" />

## installation
- Download the latest version
- Place the `MontlewisTemplateFilter_SetClass.class.php` in the folder `perch/addons/templates/filters/`
- Include the class in the file `perch/addons/templates/filters.php`:

```php
include('filters/MontlewisTemplateFilter_SetClass.class');
```


## Configuration

### Enable template filters

You need to enable template filters in your config file `perch/config/config.php`:

```php
define('PERCH_TEMPLATE_FILTERS', true);
```


## Usage

```html
<perch:content id="additionalDescHTML" html filter="setclass" setclass="list-marked" settag="ul" />
```



## Tag Attributes

| Attribute  | Description                     |
|------------|---------------------------------|
| settag    | The tags in the textarea field that will be set to a class |
| setclass     | The class that will be set to the tags. |



---
