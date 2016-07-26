<?php
if(!defined('DEDEINC')){
    exit("Request Error!");
}
/**
 * 这仅是一个演示标签
 *
 * @version        $Id: demotag.lib.php 1 9:29 2010年7月6日Z tianya $
 * @package        DedeCMS.Taglib
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
 
/*>>dede>>
<name>演示标签</name>
<type>全局标记</type>
<for>V55,V56,V57</for>
<description>这仅是一个演示标签</description>
<demo>
{dede:demotag /}
</demo>
<attributes>
</attributes> 
>>dede>>*/
 
function lib_demotag(&$ctag,&$refObj)
{
    global $dsql,$envs;
    
    //属性处理
    $attlist="row|12,titlelen|24";
    FillAttsDefault($ctag->CAttribute->Items,$attlist);
    extract($ctag->CAttribute->Items, EXTR_SKIP);
    $revalue = '';
    
    //你需编写的代码，不能用echo之类语法，把最终返回值传给$revalue
    //------------------------------------------------------
    
    $revalue = 'result:';
$aid=617;
     $aid_pubdate_r = $dsql->GetOne("Select pubdate From dede_archives where id=$aid");
 $preR = $dsql->GetOne("select id,title,pubdate from dede_archives where pubdate > {$aid_pubdate_r['pubdate']} and arcrank>-1 and typeid=25 ORDER BY pubdate asc");
$nextR = $dsql->GetOne("select id,title,pubdate from dede_archives where pubdate < {$aid_pubdate_r['pubdate']} and arcrank>-1 and typeid=25 ORDER BY pubdate desc");
   $next = (is_array($nextR) ? " where arc.id={$nextR['id']} " : ' where 1>2 ');
 $pre = (is_array($preR) ? " where arc.id={$preR['id']} " : ' where 1>2 ');
$query = "Select arc.id,arc.title,arc.shorttitle,arc.typeid,arc.ismake,arc.senddate,arc.arcrank,arc.money,arc.filename,arc.litpic,
                        t.typedir,t.typename,t.namerule,t.namerule2,t.ispart,t.moresite,t.siteurl,t.sitepath
                        from dede_archives  arc left join dede_arctype t on arc.typeid=t.id  ";
            $nextRow =  $dsql->GetOne($query.$next);
  $preRow = $dsql->GetOne($query.$pre);

if(is_array($nextRow)){
$revalue = $revalue.'next';
}
 if(is_array($preRow)){
$revalue = $revalue.'pre';
}
    //------------------------------------------------------
    return  $revalue;
}