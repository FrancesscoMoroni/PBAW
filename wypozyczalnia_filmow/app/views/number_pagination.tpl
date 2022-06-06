{if $pageNumber != 0}
    <span align="right">
        <div id="buttons">
            <button class="button small" onclick="ajaxPaginationToMostLeft( 'table' )"><<</button>
            <button class="button small" onclick="ajaxPaginationToLeft( 'table' )"><</button>
            {for $i = 1 to $pageNumber + 1}
                <button class="button small" onclick="ajaxGetPage( {$i - 1}, 'table' )">{$i}</button>
            {/for}
            <button class="button small" onclick="ajaxPaginationToRight( 'table' )">></button>
            <button class="button small" onclick="ajaxPaginationToMostRight( 'table' )">>></button>
        </div>
    </span>
{/if}