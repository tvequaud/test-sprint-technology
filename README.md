All you need to know about this sample app !

## Requirements
Developed and tested on Linux Debian 11 with :
- PHP 8.2<br />
- Composer
- Git

## Install
```bash
$> git clone git@github.com:tvequaud/test-sprint-technology.git
$> cd test-sprint-technology
$> composer install
```
Now you're good to go !

## Test the app

### Quick test
 ```bash
 $> php api.php
Take train 78A from Madrid to Barcelona. Sit in seat 45B.
Take the airport bus from Barcelona to Gerona Airport. No seat assignment.
From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.
From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage will we automatically transferred from your last leg.
You have arrived at your final destination.
```

### Advanced test
Edit file `api.php` with your favorite editor then modify variable $list (line 10) : 
```php
$list = [
    'c' => new Plane('Gerona Airport', 'Stockholm', 'SK455','3A', '45B', '344'),
    'b' => new AirportBus('Barcelona', 'Gerona Airport'),
    'a' => new Train('Madrid', 'Barcelona', '78A', '45B'),
    'd' => new Plane('Stockholm', 'New York JFK', 'SK22', '7B', '22'),
];
```

#### Sorting
The test talks about "out of order" boarding cards : I assumed it's a translation mistake and you meant "disordered" cardboards ;)
Usually, input data comes from an API with an index. So, default data input is a simple PHP array with disordered boarding cards as you asked. Boarding cards are automatically ordered by index within the PHP array. So you can simply change the display order by modifying the index aka 'a', 'b', 'c', 'd'.

#### Input
You can also change the data displayed.

Several transport types are available : AirportBus, Bus, Plane and Train.
Transport classes are defined in directory `src/Api/Transport`. Open them to find out their own properties : number, seat, gate, baggage...
