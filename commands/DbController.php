<?php
namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;

class DbController extends Controller
{
    public function actionSync()
    {
        try {
            // Создаем дамп продуктовой базы данных
            $db = Yii::$app->db;
            $dbName = $db->createCommand('SELECT DATABASE()')->queryScalar();
            $dumpFile = Yii::getAlias('@app/runtime/' . $dbName . '.sql');
            exec('mysqldump -u' . $db->username . ' -p' . $db->password . ' ' . $dbName . ' > ' . $dumpFile);

            // Удаляем все таблицы из devDb
            $devDb = Yii::$app->devDb;
            $devDbName = $devDb->createCommand('SELECT DATABASE()')->queryScalar();
            $devDbTables = $devDb->schema->tableNames;
            foreach ($devDbTables as $table) {
                $devDb->createCommand()->dropTable($table)->execute();
            }

            // Восстанавливаем дамп в девелоперской базе данных
            exec('mysql -u' . $devDb->username . ' -p' . $devDb->password . ' ' . $devDbName . ' < ' . $dumpFile);

            echo "База данных успешно синхронизирована.\n";

            return ExitCode::OK;
        } catch (\Throwable $th) {
            throw $th;
        }   
    }
}
