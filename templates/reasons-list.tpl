
<table width="70%" cellspacing="10px" cellpadding="10" align="center">
<tr style="height:30px; font-size:14px; background-color:#ccc" align="center">
  <th>Reason</th>
</tr>
{foreach from=$Data item=reason}
<tr style="background-color:#C6F0F0; font-size:15px; font-family:verdana">
<td align="center"><b>{$reason.reason_name}</b></td>
</tr>
{/foreach}
</table>


 
