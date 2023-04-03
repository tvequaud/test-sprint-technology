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
 $> php api.php --sort
Take train 78A from Madrid to Barcelona. Sit in seat 45B.
Take the airport bus from Barcelona to Gerona Airport. No seat assignment.
From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A. Baggage drop at ticket counter 344.
From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B. Baggage will we automatically transferred from your last leg.
You have arrived at your final destination.
```

`--sort` option allows you to sort or not the result displayed.


### Advanced test
Edit file `api.php` with your favorite editor then modify variable `$input` ([line 16](https://github.com/tvequaud/test-sprint-technology/blob/master/api.php#L16)) : 
```php
$input = [
    'c' => new Plane('Gerona Airport', 'Stockholm', 'SK455','3A', '45B', '344'),
    'b' => new AirportBus('Barcelona', 'Gerona Airport'),
    'a' => new Train('Madrid', 'Barcelona', '78A', '45B'),
    'd' => new Plane('Stockholm', 'New York JFK', 'SK22', '7B', '22'),
];
```

You can also change the data displayed.

Several transport types are available : `AirportBus`, `Bus` (as a bonus/example), `Plane` and `Train`.
Transport classes are defined in directory `src/Api/Transport`. Open them to find out their own properties : number, seat, gate, baggage...


## Todo
- refactor transport class with a factory...
- add unit tests

