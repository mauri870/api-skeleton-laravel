<script>
    export default {
        data: function () {
           return {
               hiddenCC: true,
                hiddenBCC: true
           }
        },
        methods: {
            clickButton: function (event, type){
                if(type == 'bcc'){
                    this.hiddenBCC = ! this.hiddenBCC;
                }
                if(type == 'cc'){
                    this.hiddenCC = ! this.hiddenCC;
                }
            },
            hide: function (event){
                $('#bcc').parent().addClass('hidden');
                $('#bcc').val('');
                $('#bcc').val('');
            }
        }
    }

</script>
<template>
    <div>
        <div class="form-group">
            <label for="to">Para</label>
            <input class="form-control" id="to" tabindex="1" placeholder="email@dominio.com" name="to" type="email">
            <div class="field-options">
                <a href="javascript:;" v-on:click="clickButton($event, 'cc')" title="Cópia" id="cc-show">CC</a>
                <a href="javascript:;" v-on:click="clickButton($event, 'bcc')" title="Cópia Oculta" id="bcc-show">BCC</a>
            </div>
        </div>
        <div class="form-group" v-bind:class="{ 'hidden': hiddenCC }">
            <label for="cc">Cópia</label>
            <input class="form-control" id="cc" tabindex="2" placeholder="email@dominio.com" name="cc" type="email">
            <div class="field-options">
                <a href="javascript:;" v-on:click="clickButton($event, 'cc')" title="Excluir" class="danger"><i class="entypo-cancel"></i></a>
            </div>
        </div>
        <div class="form-group" v-bind:class="{ 'hidden': hiddenBCC }">
            <label for="bcc">Cópia Oculta</label>
            <input class="form-control" id="bcc" tabindex="2" placeholder="email@dominio.com" name="bcc" type="email">
            <div class="field-options">
                <a href="javascript:;" v-on:click="hide" title="Excluir" class="danger"><i class="entypo-cancel"></i></a>
            </div>
        </div>
        <div class="form-group">
            <label for="subject">Assunto</label>
            <input class="form-control" id="subject" tabindex="4" name="subject" type="text">
        </div>
        <div class="compose-message-editor">
            <textarea class="form-control wysihtml5" data-stylesheet-url="http://localhost:8000/assets/dashboard/wysihtml5/wysihtml5-color.css" id="sample_wysiwyg" name="message" cols="50" rows="10"></textarea>
        </div>
    </div>
</template>