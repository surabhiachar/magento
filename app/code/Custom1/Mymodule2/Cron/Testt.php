<?php
namespace Custom1\Mymodule2\Cron;

// use Psr\Log\LoggerInterface;

class Testt

{
    // /**
    //  *
    //  * @var LoggerInterface
    //  */
    // protected $logger;
    //  /**
    //  *
    //  * @param LoggerInterface $logger
    //  */

    // public function __construct(LoggerInterface $logger,){
    //     $this->logger = $logger;
    // }
    // /**
    //  *
    //  * @return void
    //  */

     public function execute()
     {
    //  try{
    //     $this->logger->info("cron demo");
    // }
    // catch(\Exception $ex){
    //     $this->logger->info($ex->getMessage());
    // }
    $current_date=date("YMd_his");
    $name_of_file='customer'.$current_date.'.csv';

    $header_data=array('firstname','lastname','email','telephone');

    $header_data=array_combine($header_data,$header_data);
    $data=[];

    $data[]=$header_data;
    $data[]=[
        'firstname' => 'surabhi',
        'lastname' => 'Acharya',
        'email' => 'achar@gmail.com',
        'telephone' => '4534567856'
    ];
    $data[]=[
        'firstname' => 'suraksha',
        'lastname' => 'Acharya',
        'email' => 'achar1@gmail.com',
        'telephone' => '4534567756'
    ];
    $data[]=[
        'firstname' => 'susheela',
        'lastname' => 'Acharya',
        'email' => 'achar2@gmail.com',
        'telephone' => '4534345856'
    ];

    $fc = fopen('/var/www/html/magento/var/export/'.$name_of_file,'w');

    foreach ($data as $fields) {
        fputcsv($fc,$fields);
    }
     
    }
}