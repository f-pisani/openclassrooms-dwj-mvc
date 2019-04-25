<?php
use App\{Config, DB, Model, ModelField, QueryBuilder, Router, Request, Session};
use Models\{User, Phone};

?>
<h1>HELLO WORLD !</h1>

<pre>
<?php
ini_set('xdebug.var_display_max_depth', '10');
ini_set('xdebug.var_display_max_children', '256');
ini_set('xdebug.var_display_max_data', '1024');

/*
$User = new User();
$User->fill(['email' => 'test.insert@insert.gg', 'password' => 'x1iuo98ytr']);
$User->save();

$Phone = new Phone();
$Phone->fill(['phone' => '0642424242']);
$Phone->save();

$User->associatePivot($Phone);
$User->dissociatePivot($Phone);
$User->withPivot('Phones');
$User->isPivotRelationActive($Phone);

*/

var_dump(Request::hostname());
var_dump(Request::uri());
var_dump(Request::method());
var_dump(Request::code());
var_dump(Request::query());
var_dump(Request::route());
var_dump(Request::assoc('id,test,tmp'));
var_dump($_SERVER);
?>
</pre>
