<?php
namespace Custom1\Mymodule2\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Customer\Model\GroupFactory;

class Status implements ResolverInterface
{
    protected $_group;
    public function __construct(
        GroupFactory $group
    ){
        $this->_group=$group;
    }

    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value=null,
        array $args=null
    )
    {
        try{
            $data=[
                'customer_group_code'=>$args['input']['groupName'],
                'tax_class_id'=> 5
            ];
            $group = $this->_group->create();
            $group->setData($data);
            $group->save();

            return[
                'groupId'=>108,
                'groupName'=>"Embitel20"

            ];
            
        }catch(\Throwable $th){
            $th->getMessage();
        }
    }
}

