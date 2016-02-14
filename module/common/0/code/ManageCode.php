<?php
/**
 *
 *
 */

namespace Module\Common\Code;

use Javanile\Liberty\Runtime;

class ManageCode
{
    /**
     *
     *
     */
    private $action;
    
    /**
     *
     *
     */
    private $entity;

	/**
     *
     * 
     */
	public function entityAction()
    {
        //
        $app = Runtime::getApp();

        //
        $action = $app->getUrlToken(3);

        //
        $this->action = $action ? $action : 'list';

        //
        $name = $app->getUrlToken(2);
        
        //
        $app->setEntity($name);

        //
        $method = $this->action.'Action';

        //
        $codeClass = $app->getEntity()->getCodeClass();

        //
        if ($codeClass) {

            //
            $codeObject = new $codeClass();

            //
            if (method_exists($codeObject, $method)) {

                //
                call_user_func([$this, $method]);
                
                //
                return;
            }
        }
        
        //
        if (method_exists($this, $method)) {
            call_user_func([$this, $method]);
        }
	}

    /**
     *
     *
     */
    public function listAction()
    {
        //
        $app = Runtime::getApp();

        //
        $name = $app->getEntity()->getName();

        //
        echo $app->html([
            'title'     => t('List').' '.$app->getEntity()->getTitle(),
            'table'     => $app->getEntity()->getTable()->html(),
            'createUrl' => $app->url('manage/entity/'.$name.'/create'),
        ], $this->action);
    }

    /**
     *
     *
     */
    public function tableAction()
    {
        //
        $app = Runtime::getApp();

        //
        echo $app->getEntity()->getTable()->json();
    }

    /**
     *
     *
     */
    public function createAction()
    {
        //
        $app = Runtime::getApp();

        //
        $name = $app->getEntity()->getName();

        //
        $item = $app->getEntity()->getNewElement();

        //
        echo $app->html([
            'title'   => t('List').' '.$app->getEntity()->getTitle(),
            'saveUrl' => $app->url('manage/entity/'.$name.'/save'),
            'item'    => $item,
        ], $this->action);
    }

    /**
     *
     *
     */
    public function detailAction()
    {
        //
        $app = Runtime::getApp();

        //
        $entity = $app->getEntity();

        //
        $name = $entity->getName();

        //
        $id = $app->getUrlParam('id');

        //
        $item = $entity->getElementById($id);

        //
        echo $app->html([
            'title'     => t('Detail').' '.$entity->getTitle(),
            'closeUrl'  => $app->url('manage/entity/'.$name),
            'modifyUrl' => $app->url('manage/entity/'.$name.'/modify/id/'.$id),
            'item'      => $item,
        ], $this->action);
    }

    /**
     *
     *
     */
    public function modifyAction()
    {
        //
        $app = Runtime::getApp();

        //
        $name = $app->getEntity()->getName();

        //
        $id = $app->getUrlParam('id');

        //
        $item = $app->getEntity()->getElementById($id);
      
        //
        echo $app->html([
            'title'     => t('Detail').' '.$app->getEntity()->getTitle(),
            'saveUrl'   => $app->url('manage/entity/'.$name.'/save'),
            'cancelUrl' => $app->url('manage/entity/'.$name.'/detail/id/'.$id),
            'item'      => $item,
        ], $this->action);
    }

    /**
     *
     *
     */
    public function saveAction()
    {
        //
        $app = Runtime::getApp();

        //
        $name = $app->getEntity()->getName();

        //
        $values = filter_input_array(INPUT_POST);

        //
        $item = $app->getEntity()->getNewElement($values);

        //
        $item->encode();

        //
        $id = $item->store();

        //
        $app->redirect('manage/entity/'.$name.'/detail/id/'.$id);
    }
}