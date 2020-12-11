<?php

    $output .= "
    <div class='container-fluid' style='margin:auto; text-align:center'>";

    $output .="
    <div style='".lgsl_bg(TRUE)."; width:90%; margin:auto; text-align:center; height:6px; border:1px solid'><br /></div>
    <div style='height:10px'><br /></div>";

//------------------------------------------------------------------------------------------------------------+
// SHOW THE STANDARD INFO

    $output .= "
    <table cellpadding='2' cellspacing='2' style='margin:auto'>
        <tr>
        <td colspan='3' style='text-align:center'>
            <b> {$server['s']['name']} </b><br /><br />
        </td>
        </tr>
    </table>
    <table cellpadding='2' cellspacing='2' style='margin:auto'>
        <tr>
        <td colspan='2' style='text-align:center'>
            <table cellpadding='4' cellspacing='2' style='width:100%; margin:auto'>
            <tr><td style='".lgsl_bg(TRUE)."; text-align:center'><a href='{$misc['software_link']}'>{$lgsl_config['text']['slk']}</a></td></tr>
            </table>
        </td>
        <td rowspan='2' style='text-align:center; vertical-align:top'>
            <div style='width:{$lgsl_config['zone']['width']}px; padding:2px; position:relative; margin:auto'>
            <img alt='' src='{$misc['image_map']}'                                            style='vertical-align:middle; width:160px; height:120px;' />
            <img alt='' src='{$misc['image_map_password']}'                                   style='position:absolute; z-index:2; top:0px; left:0px;' />
            <img alt='' src='{$misc['icon_game']}'          title='{$misc['text_type_game']}' style='position:absolute; z-index:2; top:6px; left:6px;' />
            <img alt='' src='{$misc['icon_location']}'      title='{$misc['text_location']}'  style='position:absolute; z-index:2; top:6px; right:6px;' />
            </div>
        </td>
        </tr>
        <tr>
        <td style='text-align:center'>
            <table cellpadding='4' cellspacing='2' style='margin:auto'>
            <tr style='".lgsl_bg().";white-space:nowrap'><td> <b> {$lgsl_config['text']['sts']} </b></td><td style='white-space:nowrap'> {$misc['text_status']}                                   </td></tr>
            <tr style='".lgsl_bg().";white-space:nowrap'><td> <b> {$lgsl_config['text']['adr']} </b></td><td style='white-space:nowrap'> {$server['b']['ip']}                                     </td></tr>
            <tr style='".lgsl_bg().";white-space:nowrap'><td> <b> {$lgsl_config['text']['cpt']} </b></td><td style='white-space:nowrap'> {$server['b']['c_port']}                                 </td></tr>
            <tr style='".lgsl_bg().";white-space:nowrap'><td> <b> {$lgsl_config['text']['qpt']} </b></td><td style='white-space:nowrap'> {$server['b']['q_port']}                                 </td></tr>
            </table>
        </td>
        <td style='text-align:center'>
            <table cellpadding='4' cellspacing='2' style='margin:auto'>
            <tr style='".lgsl_bg().";white-space:nowrap'><td> <b> {$lgsl_config['text']['typ']} </b></td><td style='white-space:nowrap'> {$server['b']['type']}                                   </td></tr>
            <tr style='".lgsl_bg().";white-space:nowrap'><td> <b> {$lgsl_config['text']['gme']} </b></td><td style='white-space:nowrap'> {$server['s']['game']}                                   </td></tr>
            <tr style='".lgsl_bg().";white-space:nowrap'><td> <b> {$lgsl_config['text']['map']} </b></td><td style='white-space:nowrap'> {$server['s']['map']}                                    </td></tr>
            <tr style='".lgsl_bg().";white-space:nowrap'><td> <b> {$lgsl_config['text']['plr']} </b></td><td style='white-space:nowrap'> {$server['s']['players']} / {$server['s']['playersmax']} </td></tr>
            </table>
        </td>
        </tr>
    </table>";

//------------------------------------------------------------------------------------------------------------+

    $output .= "
    <div style='height:10px'><br /></div>
    <div style='".lgsl_bg(TRUE)."; width:90%; margin:auto; text-align:center; height:6px; border:1px solid'><br /></div>
    <div style='height:10px'><br /></div>";

//------------------------------------------------------------------------------------------------------------+
// SHOW THE PLAYERS

    $output .= "
    <div style='margin:auto; overflow:auto; text-align:center; padding:10px'>";

    if (empty($server['p']) || !is_array($server['p']))
    {
    $output .= "
    <table cellpadding='4' cellspacing='2' style='margin:auto'>
        <tr style='".lgsl_bg(FALSE)."'>
        <td> {$lgsl_config['text']['npi']} </td>
        </tr>
    </table>";
    }
    else
    {
    $output .= "
    <table cellpadding='4' cellspacing='2' style='margin:auto'>
        <tr style='".lgsl_bg(FALSE)."'>";

        foreach ($fields as $field)
        {
        $field = ucfirst($field);
        $output .= "
        <td> <b>{$field}</b> </td>";
        }

        $output .= "
        </tr>";

        foreach ($server['p'] as $player_key => $player)
        {
        $output .= "
        <tr style='".lgsl_bg()."'>";

        foreach ($fields as $field)
        {
            $output .= "<td> {$player[$field]} </td>";
        }

        $output .= "
        </tr>";
        }

    $output .= "
    </table>";
    }

    $output .= "
    </div>";

//------------------------------------------------------------------------------------------------------------+

    $output .= "
    <div style='height:10px'><br /></div>
    <div style='".lgsl_bg(TRUE)."; width:90%; margin:auto; text-align:center; height:6px; border:1px solid'><br /></div>
    <div style='height:20px'><br /></div>";

//------------------------------------------------------------------------------------------------------------+
// SHOW THE SETTINGS

    if (empty($server['e']) || !is_array($server['e']))
    {
    $output .= "
    <table cellpadding='4' cellspacing='2' style='margin:auto'>
        <tr style='".lgsl_bg(FALSE)."'>
        <td> {$lgsl_config['text']['nei']} </td>
        </tr>
    </table>";
    }
    else
    {
    $output .= "
    <table cellpadding='4' cellspacing='2' style='margin:auto'>
        <tr style='".lgsl_bg(FALSE)."'>
        <td> <b>{$lgsl_config['text']['ehs']}</b> </td>
        <td> <b>{$lgsl_config['text']['ehv']}</b> </td>
        </tr>";

    foreach ($server['e'] as $field => $value)
    {
        $color = lgsl_bg();

        $output .= "
        <tr>
        <td style='{$color}'> {$field} </td>
        <td style='{$color}'> {$value} </td>
        </tr>";
    }

    $output .= "
    </table>";
    }

//------------------------------------------------------------------------------------------------------------+

    $output .= "
    <div style='height:10px'><br /></div>
    <div style='".lgsl_bg(TRUE)."; width:90%; margin:auto; text-align:center; height:6px; border:1px solid'><br /></div>
    <div style='height:20px'><br /></div>";

    $output .= "
    </div>";    

?>