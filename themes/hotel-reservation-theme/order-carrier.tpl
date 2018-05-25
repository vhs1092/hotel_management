<div class="box" id="tc_cont">
    <p class="checkbox">
        <input type="checkbox" name="cgv" id="cgv" value="1" {if $checkedTOS}checked="checked"{/if} />
        <label for="cgv" id="tc_txt">{l s='Acepto los terminos y condiciones.'}</label>
        <a id="tc_link" href="{$link_conditions|escape:'html':'UTF-8'}" class="iframe" rel="nofollow" >{l s='(Leer)'}</a>
    </p>
</div>