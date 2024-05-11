<?php

use yii\grid\GridView;
use yii\data\ArrayDataProvider;

/** @var yii\web\View $this */
/** @var array $data */

$this->title = 'Тестовое задание для ЭР-Телеком';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Тестовое задание</h1>

        <div class="col-md-6 container--center">
            <blockquote class="blockstyle">
                <span class="triangle"></span>
                <p>Задача:</p>
                Есть две базы данных: продуктовая и девелоперская.
                Необходимо периодически полностью синхронизировать девелоперскую базу данных с продуктовой, чтобы данные для тестируемой среды были актуальными. То есть таблицы, индексы, реляции, модели данных, наполнение таблиц и тп.
                Требуется написать модуль, который будет этим заниматься.
                Используемая база данных: MySQL 8.
                Версия php: ^8
                Фреймворк: Yii2.
                Доп библиотеки: только нативные методы пхп и функционал фреймворка.
            </blockquote>
        </div>

        <p><a class="btn btn-lg btn-success" href="https://github.com/flathead/" target="_blank">GitHub</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Шаг 1</h2>

                <p>Дамбы базы данных лежат в каталоге <code>/config/database/</code>.
                    <br /><br />
                    <code>yii2master.sql</code> - мастер-база, <code>yii2slave.sql</code> - пустая слейв-база.
                    <br/><br/>
                    Испортируйте базы данных в localhost MySQL, после чего настройте подключение в файле <code>/config/db.php</code>.
                </p>
            </div>
            <div class="col-lg-2 mb-3"></div>
            <div class="col-lg-4 mb-3">
                <h2>Шаг 2</h2>

                <p>Для синхронизации в консоли, находясь в корневом каталоге Yii, запустите следующую команду:
                    <br/>
                    <code>php yii db/sync</code>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-3">
                <h3 class="text-center">Содержимое баз данных</h3>
            </div>
            <div class="col-lg-12 mb-3">
                <h3>Содержание мастер-базы:</h3>

                <?php
                foreach ($data['master'] as $tableName => $tableData) {
                    $dataProvider = new ArrayDataProvider([
                        'allModels' => $tableData,
                        'pagination' => [
                            'pageSize' => 20,
                        ],
                    ]);

                    echo "<h4>Таблица \"$tableName\":</h4>";

                    echo GridView::widget([
                        'dataProvider' => $dataProvider,
                    ]);
                }
                ?>
            </div>
            <div class="col-lg-12 mb-3">
                <h3>Содержание слейв-базы:</h3>

                <?php
                if (!empty($data['dev'])) {
                    foreach ($data['dev'] as $tableName => $tableData) {
                        if (!empty($tableName) || (!empty($tableData) && count($tableData) > 0)) {
                            $dataProvider = new ArrayDataProvider([
                                'allModels' => $tableData,
                                'pagination' => [
                                    'pageSize' => 20,
                                ],
                            ]);
        
                            echo "<h4>Таблица \"$tableName\":</h4>";
        
                            echo GridView::widget([
                                'dataProvider' => $dataProvider,
                            ]);
                        } else {
                            echo "<p>Таблица пуста.</p>";
                        }
                    }
                } else {
                    echo "<p>База данных пуста.</p>";
                }
                ?>
            </div>
        </div>

    </div>
</div>
