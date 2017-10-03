<?php
class Student
{
var $id;
var $name;
function _constructor()
{
echo "<h1>hello</h1>";
}
function setdata($id,$name)
{
$this->a=$id;
$this->b=$name;
}
function getdata()
{
echo "<br>".$this->id;
echo "<br>".$this->name;
return array($this->id,$this->name);
}
function _destruct()
{
	echo "<h1>bye</h1>";
}
$s1= new Student;
$sid->=100;
$s1->name="jk";
echo "<br>".$s1->sid;
echo"<br>".$s1->name;
echo"<br>";
$s1->setdata(200,"test name");
$s1->getdata();
?>

