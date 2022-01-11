<?php
$moyenne=$_REQUEST(‘t1’);
If ($moyenne<8)
{
echo “le candidat est refusé<br/>
}
elseif($moyenne<10)
{
echo “le candidat passe l’oral”;
else
{
Echo”le candidat est admis.”;
}
 