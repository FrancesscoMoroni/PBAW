{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<a href="{$conf->action_url}calcShow"  class="pure-menu-heading pure-menu-link">kalkulator</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<table class="pure-table pure-table-bordered">
<thead>
  <tr>
    <th>ID</th>
    <th>loan</th>
    <th>installment</th>
    <th>interest</th>
    <th>inAmount</th>
    <th>result</th>
  </tr>
</thead>
{foreach $db as $d}
{strip}
<tbody>
  <tr>
    <td>{$d["ID"]}</td>
    <td>{$d["loan"]}</td>
    <td>{$d["installment"]}</td>
    <td>{$d["interest"]}</td>
    <td>{$d["inAmount"]}</td>
    <td>{$d["result"]}</td>
  </tr>
{/strip}
{/foreach}
</tbody>
</table>



{/block}
