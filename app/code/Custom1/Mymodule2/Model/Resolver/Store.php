<?php

namespace Custom1\Mymodule2\Model\Resolver;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;


class Store implements ResolverInterface
{
  
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
      $stores=[[
        'firstname'=>'Surabhi',
        'lastname'=>'Kundapura',
        'email'=>'surabhi@gmail.com',
        'telephone'=>'9923456734',
        'city'=> 'kundapura',
        'state'=> 'karnataka',
        'country'=> 'India'


      ],
      [
        'firstname'=>'Suraksha',
        'lastname'=>'mangalore',
        'email'=>'suraksha@gmail.com',
        'telephone'=>'5678345678',
        'city'=> 'Udupi',
        'state'=> 'Karnataka',
        'country'=> 'India'
      ]];

        return [
            'total_count'=>count($stores),
            'data'=>$stores
        ];
    }
}