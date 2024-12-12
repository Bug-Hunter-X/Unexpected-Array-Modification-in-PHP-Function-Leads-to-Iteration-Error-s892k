```php
function processData(array $data): array {
  // ... some code to process the data.  Be mindful of maintaining data type and structure... 
  return $data; 
}

$myData = [1, 2, 3, 4, 5];
$processedData = processData($myData);

//More robust approach for handling potential errors
foreach ($processedData as $key => $value) {
    if (!is_numeric($value)) {
        //Handle the error gracefully. Log, replace, skip, or throw an exception as needed.
        error_log("Non-numeric value found at index: " . $key);
        continue; //Skip non-numeric values
    }
    echo $value * 2 . PHP_EOL; //this line will no longer fail
}
```