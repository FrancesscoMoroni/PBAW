{if $msgs->isMessage()}
    <div class="messages bottom-margin">
        <ul>
        {foreach $msgs->getMessages() as $msg}
        {strip}
            <li>{$msg->text}</li>
        {/strip}
        {/foreach}
        </ul>
    </div>
{/if}