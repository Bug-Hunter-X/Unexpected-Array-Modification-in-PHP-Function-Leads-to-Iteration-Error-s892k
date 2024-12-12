```php
function processData(array $data): array {
  // ... some code to process the data ...
  return $data;
}

$myData = [1,2,3,4,5];
$processedData = processData($myData);

//This line can throw an error if processData modifies the array's structure in unexpected ways 
//such as changing it to a different data type or adding non-numeric elements.
foreach ($processedData as $value) {
    if(!is_numeric($value)){
        throw new Exception('Non-numeric value found');
    }
    echo $value * 2; //this line might fail if $value is not numeric
}
```