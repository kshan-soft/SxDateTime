# SxDateTime
# PHP class  to manage DateTime and find difference between two dates


## Installation

1. Get or clone the code from https://github.com/jyogeshc/SxDateTime
2. Include the file "src/SteedX/SxDateTime.php" into your code
3. use SteedX\SxDateTime;

## Installtion via composer

@todo

## Usage

```php    
use SteedX\SxDateTime
```
Create datetime object

```php
$date = new SxDateTime([string $dateTime=null [,string $timeZone=null]]);
```

###### Parameters

> **dateString** : A datetime string valid formats are [Date and Time Formats](https://www.php.net/manual/en/datetime.formats.php)
>
> Enter null for current time in given Timezone

> **timeZone** : Timezone as a string list of supported [timezones](https://www.php.net/manual/en/timezones.php)
>
> if timezone is omitted or null then UTC timezone will be used.

```PHP
$sxInterval = $date->difference([$newDate[,string $timeZone=null]]);
```
Return object of type sxInterval

> $newDate: New date for which we want to get the difference it can be
>
> null : current time in given Timezone
>
> string : A datetime string valid formats are [Date and Time Formats](https://www.php.net/manual/en/datetime.formats.php)

```php
$sxInterval->toYears() ; #-- Difference in Years
$sxInterval->getMonth() ; #-- Month part when difference in year
$sxInterval->toDays() ; #-- Difference in Year
$sxInterval->toHuman(); #-- Human readble format
$sxInterval->getWorkingDays(); #-- Number of working days between two dates

See all avaliable methods

```

## All methods for object of Type sxInterval
Method | Description
--- | ---
toYears() |  Difference in years  
getMonth() | Month part when difference in years
getDay() | Day part when difference in years
getHour() | Hour part when difference in years
getMinute() | Minute part when difference in years
getSecond() | Second part when difference in years
getSign() | Sign "-" when negative, empty when positive
toHuman()| Difference in Human Readable format
toMonths()|Difference in Months
toDays()|Difference in Days
toHours()|Difference in Hours
toMinutes()|Difference in Minutes
toSeconds() | Difference in Seconds
getSundays()| Number of Sundays between two dates
getSaturdays()| Number of Saturdays between two dates
getWeekends()| Number of Weekends between two dates
getWorkingDays()| Number of Working days between two dates (_Excuding Sundays and Saturdays_)



## Additional Method for object SxDateTime

You can create object of type SxDateTime
```php
$date = new SxDateTime();
```
can use following methods
```php
$date->format($formatString);
```
> Convert date into any given format
>
> formatString : Format accepted by [date()](https://www.php.net/manual/en/function.date.php)

Convert date into Local format return object of type [DateTime](https://www.php.net/manual/en/class.datetime.php)

```php
$localFormat = $date->local([$timzone='']);
```


###### Parameters

> **timeZone** : Timezone as a string list of supported [timezones](https://www.php.net/manual/en/timezones.php)
>
> if timezone is omitted or null then Australia/Adelaide timezone will be used.

##### Demo / Test Cases

Go to demo directory

My Age as on 2019 01-01-2019 03:30:09 IST
```php
php myAge.php
```

Various test
```php
php testCase1.php
```

#### PHPUnit

PHPUnit test are added in directory **tests**

```php
phpunit SxDateTimeTest
```


  


 
