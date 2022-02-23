





<p align="center"><img src="https://i.imgur.com/3zl5DNz.png"></p>



## About Billecta-DTO

[DataTransferObjects](https://github.com/spatie/data-transfer-object) for Billectas API. Scraped from their site. This package does not include any kind of gateway, only the data definitions, helping you build requests and handle responses with the the help of PHPs typehints

### Install

`composer require tarre/billecta-dto`

### Usage

Here is an implementation example

```php
<?php
use Tarre\Billecta\DataTransferObjects\DebtorView;
use Tarre\Billecta\DataTransferObjects\CreatedView;

class myBillectaClient 
{
    public function createDebtor(DebtorView $request): CreatedView 
    {
        $res = $this->yourHttpClient->post('/v1/debtors/debtor', $request->toArray());
        return new CreatedView($res);
    }
    
}

// initialize client
$client = new myBillectaClient;
// Create debtor via constructor array
$newDebtor = new DebtorView([
    'DebtorPublicId' => '...',
    'CreditorPublicId' => '...',
    'Name' => '...',
]);
// or assign each value individually 
$newDebtor = new DebtorView;
$newDebtor->DebtorPublicId = '...';
$newDebtor->CreditorPublicId = '...';
$newDebtor->Name = '...';
// Then use it in your client
$createdDebtor = $client->createDebtor($newDebtor);
// Get the public ID
var_dump($createdDebtor->PublicId);
```

