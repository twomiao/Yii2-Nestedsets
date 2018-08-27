<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2018/8/23
 * Time: 14:29
 */

namespace app\controllers;


use app\models\Classify;

class ClassifyController extends BaseController
{
    public function actionList()
    {
        $treeList = Classify::find()
            ->select(['id', 'depth', 'pid', 'name'])
            ->orderBy('lft ASC')
            ->all();

        foreach ($treeList as $tree) {
            print(str_repeat(" - ", ++$tree->depth) . $tree->name . "<br />");
        }
    }

    public function actionIndex()
    {
        $this->layout = false;
        $treeList = Classify::find()
            ->select(['id', 'pid', 'name'])
            ->orderBy('lft ASC')
            ->asArray()
            ->all();

        return $this->render('index', [
            'tree' => json_encode($treeList)
        ]);
    }
}

















