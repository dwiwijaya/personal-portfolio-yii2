<?php

namespace app\helpers;

use app\models\AuthItem;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Yii;
use yii\bootstrap4\Html;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;

class Utils{
    const GUEST = 0;
    const ADMIN = 1;
    
    public static function headerSection($title = null){
        return "<div class='row text-center mb-4'>
            <div class='col'>
                <hr>
            </div>
            <div class='col-6 col-md-4 col-lg-3'>
                <div class='header-section center-y'>
                    <p class=' m-0'>$title</p>
                </div>
            </div>
            <div class='col'>
                <hr>
            </div>
        </div>";
    }
}
