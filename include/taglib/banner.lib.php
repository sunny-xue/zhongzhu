<?php
if(!defined('DEDEINC'))
{
    exit("Request Error!");
}
/**
 * 获取轮播图片列表
 *
 * @version        2016-5-14 22:59:06
 * @package        DedeCMS.Taglib
 * @copyright      Copyright (c) 2007 - 2010, sunny, Inc.
 */
 
/*>>dede>>
<name>频道标签</name>
<type>全局标记</type>
<for>V55,V56,V57</for>
<description>获取banner列表</description>
<demo>
{dede:banner  addfields='banner'  row='3'}
<li><a href="[field:bannerHref/]" target="_blank"><img src="[field:bannerUrl/]" alt="[filed:bannerAlt]" /></a></li>
{/dede:banner}
</demo>
<attributes>
     <iterm>row:调用数量</iterm>
</attributes> 
>>dede>>*/
function lib_banner(&$ctag,&$refObj)
{
    global $dsql,$envs;
    
    //属性处理
    $attlist="row|3";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
    extract($ctag->CAttribute->Items, EXTR_SKIP);
$row = empty($row) ? 3 : $row;

    
    //你需编写的代码，不能用echo之类语法，把最终返回值传给$revalue
     $sql = "select * from dede_banner order by aid limit $row ";

 $dsql->SetQuery($sql);
      $dsql->Execute();
		 while($dbrow=$dsql->GetObject())
    {
       
           $revalue.= "<li><a href='".$dbrow->tourl."'><img src='".$dbrow->imgurl."' alt='".$dbrow->imgname ."' text='".$dbrow->imgname ."' /></a></li> ";
        }
       
    return $revalue;
}
?>