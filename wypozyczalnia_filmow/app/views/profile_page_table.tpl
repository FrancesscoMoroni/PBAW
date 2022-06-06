{foreach $rentalData as $rD}
{strip}
    <tr>
        <td>{$rD["idmovie_rental"]}</td>
        <td>{$rD["rental_date"]}</td>
        <td>{$rD["return_date"]}</td>
        <td>{$rD["un_price"]}</td>
    </tr>
{/strip}
{/foreach}