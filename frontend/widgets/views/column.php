<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/3/23
 * Time: 14:29
 */
function getTree($data, $pId)
{
    $tree = '';
    foreach($data as $k => $v)
    {
        if($v['parentid'] == $pId)
        {         //父亲找到儿子
            $v['parentid'] = getTree($data, $v['id']);
            $tree[] = $v;
            //unset($data[$k]);
        }
    }
    return $tree;
}

function procHtml($tree)
{
    $html = '';
    foreach($tree as $t)
    {
        if($t['parentid'] == '')
        {
            $html.= "<p><a href=''>{$t['cname']}</a></p>";
        }
        else
        {
            $html .= "<li><a href=''>".$t['cname']."</a><img src='/images/arrow.png' />";
            $html.= '<div class="menu">'.procHtml($t['parentid']).'</div>';
            $html.="</li>";
        }
    }
    return $html;
}

$tree = getTree($columns, 0);
echo procHtml($tree);

?>
