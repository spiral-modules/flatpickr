# Spiral flatpickr wrapper

## Usage Example
At frontend (dark template required), simply add virtual tag to your form:

```html
<dark:use bundle="spiral:flatpickr-bundle"/>
...
<form:flatpickr value="" name="datetime" label="Date-time"/>
```
The code above will be transformed into html and will add required javascript.

## Options
* **name** *(required)* -- textarea name-attr (to send in form)
* **label** *(optional)* -- editor label (if not specified, will not be generated)
* **label-class** *(optional)* -- custom class to be passed into label
* **config** *(optional)* -- flatpickr config in JSON

## Installation
`composer require spiral/flatpickr`  
`spiral register spiral/flatpickr`

## Update
`composer update spiral/flatpickr`  
`spiral publish spiral/flatpickr`

## License
Copyright (c) 2016 Alex Chepura and contributors. Released under an [MIT license](https://github.com/spiral-modules/flatpickr/blob/master/LICENSE).
