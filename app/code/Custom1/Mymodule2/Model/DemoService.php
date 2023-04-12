<?php
namespace Custom1\Mymodule2\Model;
use Magento\Customer\Model\GroupFactory;

class DemoService implements \Custom1\Mymodule2\Api\DemoInterface
{

    protected $_group;
    public function __construct(
        GroupFactory $group

    ){
        $this->_group=$group;
    }
    /**
     * Get name
     * 
     * @return string
     */
public function getProfile()
{
    return [[
        'firstname'=>'Surabhi',
            'lastname'=>'mangalore',
            'email'=>'surabhimail.com',
            'telephone'=>'5678456734',
            'city'=> 'Udupi',
            'state'=> 'Karnataka',
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
    
}

/**
 * set data
 * 
 * @param string[] $postdata
 * @return array
 */

 public function setCustomerGroup($postdata)
 {
    try{
        $data=[
            'customer_group_code'=>$postdata['groupName'],
            'tax_class_id'=> 3
        ];
        $group = $this->_group->create();
        $group->setData($data);
        $group->save();

        return[
            'groupId'=>45,
            'groupName'=>"Microsoft"

        ];
        
    }catch(\Throwable $th){
        $th->getMessage();
    }
}
}

