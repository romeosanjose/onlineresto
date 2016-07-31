<?php

function get_action($actionName,$args)
{
   $actionsClasses = ['Create','Delete','Update','Patch'];

   foreach ($actionsClasses as $actionClass){

      $class_methods = get_class_methods('App\\Http\\Action\\'.$actionClass);
      if (!in_array($actionName,$class_methods)){
        $result = array('status'=>false,'message'=> 'Action not Found', 'methods'=> $class_methods);
        return $result;
      }else{
        $class  = 'App\\Http\\Action\\'.$actionClass;
        $action = new $class();
        $result = $action->$actionName($args);
        return $result;
      }

   }

}
