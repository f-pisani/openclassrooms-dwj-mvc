<?php
use App\{Config, DB, Model, ModelField, QueryBuilder, Router, Request, Session, DataValidator};
use Models\{User, Phone};

?>
<h1>HELLO WORLD !</h1>

<pre>
<?php
ini_set('xdebug.var_display_max_depth', '10');
ini_set('xdebug.var_display_max_children', '256');
ini_set('xdebug.var_display_max_data', '1024');

DataValidator::addRuleset('nickname', [['regex'=>'/^([A-Za-z0-9\-_ ]+)$/', 'msg'=>'Caractères interdits détectés.'],
									   ['ruleset'=>'varchar']]);
DataValidator::addRuleset('varchar', [['length'=> '1|5', 'msg' => 'La taille du champ doit être comprise entre #LengthMin# et #LengthMax# caractères.']]);

$datas = ['nickname' => '12345%'];
$DataValidator = new DataValidator($datas);
$DataValidator->addRules(['nickname' => [['ruleset'=>'nickname']]]);
$DataValidator->addRules(['pwd' => [['required'=>true, 'msg'=>'Le champ pwd est obligatoire.']]]);
$DataValidator->validate();

var_dump($DataValidator->errorToJson());
?>
</pre>
