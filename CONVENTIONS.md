# Code Conventies

## Naam conventies

In dit project maak je gebruik van camelCase en Pascalcase.

PascalCase gebruik je voornamelijk bij het aanmaken van bijv. controllers:

``` command
php artisan make:controller ProjectController
```
camelCase gebruik je bij het aanmaken van variabelen of functies.

Hier een voorbeeld van de variabelen in de ProjectController

```php
$validatedData = $request->validate([
    'title' => 'required',
    'description' => 'required',
    'category_id' => 'required',
]);

// Maak een nieuw project aan
$product = Product::create([
    'name' => $validatedData['name'],
    'description' => $validatedData['description'],
    // Alle andere code //
]);
```




## Verzorgde code

De code moet er verzorgd en uit zien. Er moeten geen lege regels staan in de code. 

Als je aan het einde van het project zit, controleer dan of er geen onnodige code of comments in de code zitten. Als dat wel zo is, verwijder dat dan.

## Front End en Backend
### Front End
In dit project, maak je gebruik van HTML. Voor de CSS gebruik je Talwind CSS.

Voor de 'interactie' op de website gebruik je Javascript.

### Backend
Voor de backend gebruik je, wat je misschien al kunt zien, Laravel.

Je gebruikt hierbij versie 10.

