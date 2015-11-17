<?php 
//! Model类 
/** 
* 它的主要部分是对应于留言本各种数据操作的函数 
* 如：留言数据的显示、插入、删除等 
*/
class Model { 
var $dao; //DataAccess类的一个实例（对象） 
//! 构造函数 
/** 
* 构造一个新的Model对象 
* @param $dao是一个DataAccess对象 
* 该参数以地址传递（&$dao）的形式传给Model 
* 并保存在Model的成员变量$this->dao中 
* Model通过调用$this->dao的fetch方法执行所需的SQL语句 
*/
function __construct(&$dao) { 
$this->dao=$dao; 
} 
function ListComment() { //获取全部评论 
$this->dao->fetch("SELECT * FROM BlogComment"); 
} 
function InsertComment($name,$email,$content) { //插入一条新评论 
$sql = "INSERT INTO `mvctest`.`BlogComment` 
(`Identifier`, `addtime`, `name`, `email`, `Comment`) 
VALUES (NULL, ".time().", '$name', '$email', '$content');"; 
//echo $sql; //对于较复杂的合成SQL语句，<br /> 
//调试时用echo输出一下看看是否正确是一种常用的调试技巧 
$this->dao->fetch($sql); 
} 
function DeleteComment($id) { //删除一条评论 ，$id是该条评论 的id 
$sql = "DELETE FROM `mvctest`.`BlogComment` WHERE `Identifier`=$id;"; 
//echo $sql; 
$this->dao->fetch($sql); 
} 
function getNote() { //获取以数组形式存储的一条评论  
//View利用此方法从查询结果中读出数据并显示 
if ( $note=$this->dao->getRow() ) 
return $note; 
else
return false; 
} 
} 
?>